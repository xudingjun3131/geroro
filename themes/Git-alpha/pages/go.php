<?php
/*
Template Name: GO跳转页面
*/
$cars = array(
array("360",'http://webscan.360.cn/index/checkwebsite/url/www.mom1.cn')
   );
if(strlen($_SERVER['REQUEST_URI']) > 384 ||
strpos($_SERVER['REQUEST_URI'], "eval(") ||
strpos($_SERVER['REQUEST_URI'], "base64")) {
        @header("HTTP/1.1 414 Request-URI Too Long");
        @header("Status: 414 Request-URI Too Long");
        @header("Connection: Close");
        @exit;
}
//通过QUERY_STRING取得完整的传入数据，然后取得url=之后的所有值，兼容性更好
$t_url = htmlspecialchars(preg_replace('/^url=(.*)$/i','$1',$_SERVER["QUERY_STRING"]));
//此处可以自定义一些特别的外链，不需要可以删除以下5行
foreach($cars as $k=>$val){
if($t_url==$val[0] ) {
$t_url =  $val[1];
$t_vip = 1;
    }
}
//数据处理
if(!empty($t_url)) {
//判断取值是否加密
	if ($t_url == base64_encode(base64_decode($t_url))) {
		$t_url =  base64_decode($t_url);
		}
//对取值进行网址校验和判断
    preg_match('/^(http|https|thunder|qqdl|ed2k|Flashget|qbrowser):\/\//i',$t_url,$matches);
	if($matches){
	$url=$t_url;
	$title='页面加载中,请稍候...';
	} else {
		preg_match('/\./i',$t_url,$matche);
	if($matche){
	$url='http://'.$t_url;
	$title='页面加载中,请稍候...';
		} else {
	$url = 'http://'.$_SERVER['HTTP_HOST'];
	$title='参数错误，正在返回首页...';
		}
	}
	} else {
$title = '参数缺失，正在返回首页...';
$url = 'http://'.$_SERVER['HTTP_HOST'];
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width">
<meta name="robots" content="noindex, nofollow" />
<noscript><meta http-equiv="refresh" content="1;url='<?php echo $url;?>';"></noscript>
<meta charset="UTF-8">
<title><?php echo $title;?></title>
<style>
body {
  background: #2c3e50;
  font-family: 'Rye', cursive;
}

.main1{position:absolute;left:calc(50% - 200px);top:calc(50% - 13em)}.alert-box{display:none;position:relative;margin:auto;padding:180px 85px 22px;border-radius:10px 10px 0 0;background:#FFF;box-shadow:5px 9px 17px rgba(102,102,102,.75);width:286px;color:#FFF;text-align:center}.alert-box p{margin:0}.alert-circle{position:absolute;top:-50px;left:111px}.alert-sec-circle{stroke-dashoffset:0;stroke-dasharray:735;transition:stroke-dashoffset 1s linear}.alert-sec-text{position:absolute;top:11px;left:190px;width:76px;color:#000;font-size:68px}.alert-sec-unit{font-size:34px}.alert-body{margin:35px 0}.alert-head{color:#242424;font-size:28px}.alert-concent{margin:25px 0 14px;color:#7B7B7B;font-size:18px}.alert-concent p{line-height:27px}.alert-btn{display:block;border-radius:10px;background-color:#4AB0F7;height:55px;line-height:55px;width:286px;color:#FFF;font-size:20px;text-decoration:none;letter-spacing:2px}.alert-btn:hover{background-color:#6BC2FF}.alert-footer{margin:0 auto;height:42px;width:120px}.alert-footer-icon{float:left}.alert-footer-text{float:left;border-left:2px solid #EEE;padding:3px 0 0 5px;height:40px;color:#0B85CC;font-size:12px;text-align:left}.alert-footer-text p{color:#7A7A7A;font-size:22px;line-height:18px}

.zombie__cheeks::before, .zombie__cheeks::after {
  content: '';
  border-radius: 50% 0 0 50%;
  box-shadow: 4px 7px 6px 1px rgba(0, 0, 0, 0.09);
  background: #1abc9c;
  width: 50px;
  height: 50px;
}

.zombie__nose::before, .zombie__nose::after {
  content: '';
  width: 15px;
  height: 15px;
  border-radius: 50% 50% 10px 10px;
  background: #07362c;
  box-shadow: inset 0 8px 0 2px #148f77;
  align-self: flex-end;
}

.tooth .tooth__top::before, .tooth .tooth__bottom::before {
  content: '';
  background: #fff;
  width: 10px;
  height: 10px;
  display: block;
  border-radius: 2px;
  margin: 5px 20px 0 0;
  display: inline-block;
}

.zombie__arms .left .arm__sleeve, .zombie__arms .right .arm__sleeve {
  width: 50px;
  height: 60px;
  background: linear-gradient(to bottom, #593f35, #795548);
  border-radius: 20px 20px 0 0;
}

.wrapper {
  display: flex;
  height: 100vh;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  margin-top: 30px;
}

.zombie {
  position: relative;
  z-index: 1;
}

.zombie__head {
  width: 150px;
  height: 150px;
  background: #1abc9c;
  border-radius: 70% 70% 35% 35%;
  display: flex;
  justify-content: center;
  position: relative;
  z-index: 1;
  animation: moveHead 5s ease-in-out infinite;
}
.zombie__head::before {
  content: '';
  width: 49px;
  height: 22px;
  border-radius: 50%;
  box-shadow: 0 -2px 0 1px #1a252f;
  transform: translateX(24px) rotateZ(-53deg);
  position: absolute;
  right: 40px;
}
.zombie__head::after {
  content: '';
  width: 29px;
  height: 12px;
  border-radius: 50%;
  box-shadow: 0 -2px 0 1px #1a252f;
  transform: translateX(38px) rotateZ(-13deg);
  position: absolute;
  top: 5px;
  right: 50px;
}

.zombie__brain {
  width: 30px;
  height: 60px;
  background: #2c3e50;
  border-radius: 50%;
  transform: rotateZ(55deg);
  position: absolute;
  top: -2px;
  left: 30px;
  overflow: hidden;
}
.zombie__brain::before {
  content: '';
  width: 30px;
  height: 80px;
  background: #e05887;
  position: absolute;
  border-radius: 50%;
  left: 15px;
}
.zombie__brain::after {
  content: '';
  background: #e05887;
  width: 15px;
  height: 15px;
  border-radius: 40%;
  position: absolute;
  top: 35px;
  left: 5px;
  box-shadow: -14px -8px 0 0px #e05887, -28px -10px 0 0px #e05887;
  transform: rotateZ(80deg);
}

.zombie__cheeks {
  width: inherit;
  height: 50px;
  display: flex;
  justify-content: space-between;
  align-self: center;
  position: absolute;
  left: 0;
  top: 75px;
}
.zombie__cheeks::before {
  margin-left: -12px;
}
.zombie__cheeks::after {
  transform: rotateY(180deg);
  margin-right: -12px;
}

.zombie__eyes {
  width: inherit;
  height: 50px;
  display: flex;
  justify-content: space-between;
  align-self: center;
  position: absolute;
  left: 0;
  top: 50px;
}
.zombie__eyes .eye {
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 5px 0px 1px rgba(0, 0, 0, 0.22), 0 13px 0px 0px rgba(0, 0, 0, 0.22);
  width: 50px;
  height: 50px;
  position: relative;
}
.zombie__eyes .eye::before {
  content: '';
  width: 16.66667px;
  height: 16.66667px;
  background: #fff;
  border-radius: 50%;
  display: table;
  margin: 20px auto;
  box-shadow: inset 0 -5px 0 5px #2c3e50, 0 0 0 3px #ff9800;
}
.zombie__eyes .eye .eyebrow {
  width: inherit;
  height: 20px;
  background: #1abc9c;
  position: absolute;
  border-radius: 10px;
  box-shadow: 0 2px 0 1px #117964;
  top: -15px;
  animation: moveEyebrow 5s ease-in-out infinite;
}

.zombie__chin {
  width: 100px;
  height: 80px;
  background: #1abc9c;
  border-radius: 0 0 30% 30%;
  align-self: flex-end;
  position: absolute;
  left: 26px;
  top: 100px;
}

.zombie__nose {
  width: 25px;
  height: 80px;
  background: linear-gradient(to top, #148f77, #1abc9c);
  border-radius: 0 0 10px 10px;
  display: flex;
  justify-content: space-between;
  position: absolute;
  left: 63px;
  top: 35px;
}
.zombie__nose::before {
  margin-left: -8px;
}
.zombie__nose::after {
  margin-right: -8px;
}

.zombie__mouth {
  width: 75px;
  background: #1a252f;
  border-radius: 20%/10% 10% 50% 50%;
  box-shadow: inset 0 6px 0 0px #e883a6, 0 0 0 4px #148f77;
  align-self: flex-end;
  position: absolute;
  left: 38px;
  bottom: -18px;
  overflow: hidden;
  animation: moveMouth 5s ease-in-out infinite;
}

.tooth {
  width: inherit;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
}
.tooth .tooth__top {
  position: relative;
  left: 10px;
}
.tooth .tooth__top::before {
  box-shadow: 15px 0px 0 0 #fff, 30px 0px 0 0 #fff, 45px 0px 0 0 #fff;
}
.tooth .tooth__bottom {
  position: relative;
  right: -18px;
  bottom: -6px;
}
.tooth .tooth__bottom::before {
  box-shadow: 15px 0px 0 0 #fff, 30px 0px 0 0 #fff;
}

.zombie__chest {
  width: 150px;
  height: 100px;
  background: linear-gradient(to bottom, #593f35 40%, #795548);
  border-radius: 20px 20px 0 0;
  display: flex;
  justify-content: space-between;
  flex-direction: column;
  position: relative;
  top: -10px;
}

.zombie__arms {
  display: inline-flex;
  width: 100%;
}
.zombie__arms .left {
  position: relative;
  animation: moveLeftArm 5s ease-in-out infinite;
}
.zombie__arms .left .arm__sleeve {
  transform: translateX(-25px) rotateZ(80deg);
}
.zombie__arms .left .arm__bone {
  width: 100px;
  height: 20px;
  background: #bfbfbf;
  position: absolute;
  left: -100px;
  top: 25px;
  transform: rotateZ(-10deg);
}
.zombie__arms .left .arm__bone::before {
  content: '';
  background: inherit;
  width: 20px;
  height: 20px;
  position: absolute;
  left: -15px;
  top: -8px;
  border-radius: 40%/50% 0 30% 40%;
  transform: rotateZ(40deg);
}
.zombie__arms .left .arm__bone::after {
  content: '';
  background: inherit;
  width: 20px;
  height: 20px;
  position: absolute;
  left: -10px;
  bottom: -6px;
  border-radius: 40%/50% 0 30% 40%;
  transform: rotateZ(40deg);
}
.zombie__arms .right {
  position: relative;
}
.zombie__arms .right .arm__sleeve {
  transform: translateX(79px) rotateZ(-63deg);
}
.zombie__arms .arm__biceps {
  width: 100px;
  height: 20px;
  position: absolute;
  background: #1abc9c;
  left: 95px;
  top: 40px;
  transform: rotateZ(25deg);
}
.zombie__arms .arm__forearm {
  width: 38px;
  height: 45px;
  position: absolute;
  background: linear-gradient(to bottom, #148f77, #1abc9c);
  left: 160px;
  top: 55px;
  border-radius: 40%/90% 90% 0 0;
  transform: skewX(-10deg);
  box-shadow: -1px 0px 5px 1px rgba(0, 0, 0, 0.18);
}

.hands {
  background: #1abc9c;
  width: 75px;
  height: 30px;
  border-radius: 30%/80% 40% 40% 40%;
  position: absolute;
  left: 135px;
  top: 90px;
  animation: moveHand 5s ease-in-out infinite;
}
.hands .finger {
  width: 16px;
  height: 32px;
  display: inline-block;
  background: #1abc9c;
  border-radius: 50%/80% 40% 40% 40%;
  position: absolute;
}
.hands .finger::before {
  content: '';
  background: #fff;
  opacity: .6;
  width: 8.88889px;
  height: 8.88889px;
  position: relative;
  top: 18px;
  left: 2px;
  border-radius: 50% 50% 0 0;
  box-shadow: 0 2px 2px 1px rgba(0, 0, 0, 0.44);
  display: block;
}
.hands .finger.thumb {
  transform: rotateZ(90deg);
  left: -15px;
  top: -8px;
}
.hands .finger.index {
  transform: rotateZ(20deg);
  top: 20px;
  left: -6px;
}
.hands .finger.middle {
  top: 25px;
  left: 22px;
}
.hands .finger.ring {
  transform: rotateZ(-10deg) scale(0.9);
  top: 20px;
  left: 50px;
}
.hands .finger.pinky {
  transform: rotateZ(-50deg) scale(0.8);
  top: 8px;
  left: 68px;
}

.ground {
  position: relative;
}

.ground__hole {
  width: 225px;
  height: 40px;
  border-radius: 50%;
  background: rgba(0, 0, 0, 0.39);
  box-shadow: 0 11px 34px 20px rgba(0, 0, 0, 0.25);
  position: relative;
  top: -42px;
}

.ground__rocks {
  position: absolute;
  top: 0;
  z-index: 2;
}
.ground__rocks .rock {
  background: #3e5871;
  border-radius: 40%/80% 20% 70% 20%;
  box-shadow: 3px 4px 0 5px #1a252f;
  width: 40px;
  height: 20px;
  display: block;
  position: absolute;
  top: 0;
}
.ground__rocks :nth-child(2) {
  left: -25px;
  top: -25px;
  transform: scale(1.2) rotateZ(-10deg);
  z-index: -1;
}
.ground__rocks :nth-child(3) {
  left: -3px;
  top: -53px;
  transform: scale(0.4);
}
.ground__rocks :nth-child(4) {
  left: 30px;
  top: -20px;
  transform: scale(0.5);
}
.ground__rocks :nth-child(5) {
  left: 55px;
  top: -15px;
  transform: scale(0.8);
}
.ground__rocks :nth-child(6) {
  left: 55px;
  top: -15px;
  transform: scale(0.8);
}
.ground__rocks :nth-child(7) {
  left: 95px;
  top: -15px;
  transform: scale(0.6) rotateY(180deg);
}
.ground__rocks :nth-child(8) {
  left: 85px;
  top: 20px;
  transform: scale(0.4) rotateY(180deg);
}
.ground__rocks :nth-child(9) {
  left: 165px;
  top: 10px;
  transform: scale(0.2);
}
.ground__rocks :nth-child(10) {
  left: 125px;
  top: -15px;
  transform: scale(1.1) rotateY(180deg);
}
.ground__rocks :nth-child(11) {
  left: 165px;
  top: -12px;
  transform: scale(0.8) rotateY(180deg) rotateZ(-20deg);
}
.ground__rocks :nth-child(12) {
  left: 265px;
  top: -90px;
  transform: scale(0.7);
}
.ground__rocks :nth-child(13) {
  left: 300px;
  top: -90px;
  transform: scale(1);
}
.ground__rocks :nth-child(14) {
  left: 350px;
  top: -90px;
  transform: scale(0.5) rotateY(180deg);
}
.ground__rocks :nth-child(15) {
  left: 390px;
  top: -90px;
  transform: scale(0.8) rotateY(180deg) rotateZ(-10deg);
}

.tomb {
  width: 200px;
  height: 200px;
  background: #95a5a6;
  border-radius: 50% 50% 0 0;
  box-shadow: 18px 1px 0 0px #6d8082, 12px 26px 39px 7px rgba(0, 0, 0, 0.25);
  position: absolute;
  top: -280px;
  left: 200px;
}
.tomb .tomb__info {
  text-align: center;
  margin: 20px;
  color: #3e4a4a;
}
.tomb .tomb__info .headers {
  font-weight: normal;
  line-height: 1.3em;
  margin: 15px 0;
}

.brains-comic-box {
  font-family: 'Creepster', cursive;
  font-size: 1.4em;
  letter-spacing: .2em;
  color: #e05887;
  position: absolute;
  top: -360px;
  left: -200px;
  transform: rotateZ(-10deg);
  position: relative;
  animation: moveBrainsBox 5s ease-in-out infinite;
}
.brains-comic-box .brains__text {
  background: #fff;
  border-radius: 40px;
  padding: 15px 20px;
  animation: moveBrainsText 5s ease-in-out infinite;
}
.brains-comic-box .brains__text::before {
  width: 0;
  height: 0;
  content: '';
  border-top: 1em solid #fff;
  border-left: .5em solid transparent;
  border-right: .5em solid transparent;
  position: absolute;
  bottom: -20px;
  left: 160px;
  transform: rotateZ(-30deg);
}

@keyframes moveLeftArm {
  0%, 50%, 90%, 100% {
    transform: rotateZ(22deg);
  }
  10%, 20%, 40% {
    transform: rotateZ(0);
  }
}
@keyframes moveHead {
  0%, 50%, 90%, 100% {
    transform: rotateZ(-10deg);
  }
  30% {
    transform: translateX(6px) translateY(2px);
  }
  35% {
    transform: translateX(-6px);
  }
  10%, 20%, 40% {
    transform: rotateZ(0);
  }
}
@keyframes moveMouth {
  0%, 50%, 90%, 100% {
    height: 20px;
    transform: translateY(-10px);
  }
  10%, 20%, 40% {
    height: 40px;
    transform: translateY(0);
  }
}
@keyframes moveEyebrow {
  0%, 50%, 90%, 100% {
    transform: translateY(8px);
  }
  10%, 20%, 40% {
    transform: translateY(-10px);
  }
}
@keyframes moveHand {
  0%, 50%, 90%, 100% {
    transform: translateY(0);
  }
  10%, 20%, 40% {
    transform: translateY(-10px) rotateZ(15deg);
  }
}
@keyframes moveBrainsText {
  0%, 20%, 40%, 60%, 80%, 100% {
    transform: translateX(20px);
  }
  10%, 30%, 50%, 70%, 90% {
    transform: translateX(-20px);
  }
}
@keyframes moveBrainsBox {
  0%, 50%, 90%, 100% {
    opacity: 0;
  }
  10%, 20%, 40% {
    opacity: 1;
  }
}
</style>
</head>
<body class="ie8" style="">
<div class="main1">
    <div id="js-alert-box" class="alert-box" style="display:block">
        <svg class="alert-circle" width="234" height="234"><circle cx="117" cy="117" r="108" fill="#FFF" stroke="#43AEFA" stroke-width="17"></circle><circle id="js-sec-circle" class="alert-sec-circle" cx="117" cy="117" r="108" fill="transparent" stroke="#F4F1F1" stroke-width="18" transform="rotate(-90 117 117)" style="stroke-dashoffset:-514px"></circle><text class="alert-sec-unit" x="100" y="172" fill="#BDBDBD">秒</text></svg>
        <div id="js-sec-text" class="alert-sec-text">
            3
        </div>
        <div class="alert-body">
            <div id="js-alert-head" class="alert-head">
                <?php echo $title;?>
            </div>
            <div class="alert-concent">
                <p>
                    一万年太久，只争朝夕
                </p>
            </div>
            <a id="js-alert-btn" class="alert-btn" href="<?php echo $url;?>">立即前往</a>
        </div>
        <div class="alert-footer clearfix">
            <svg width="46px" height="42px" class="alert-footer-icon"><circle fill-rule="evenodd" clip-rule="evenodd" fill="#7B7B7B" stroke="#DEDFE0" stroke-width="2" stroke-miterlimit="10" cx="21.917" cy="21.25" r="17"></circle><path fill="#FFF" d="M22.907,27.83h-1.98l0.3-2.92c-0.37-0.22-0.61-0.63-0.61-1.1c0-0.71,0.58-1.29,1.3-1.29s1.3,0.58,1.3,1.29 c0,0.47-0.24,0.88-0.61,1.1L22.907,27.83z M18.327,17.51c0-1.98,1.61-3.59,3.59-3.59s3.59,1.61,3.59,3.59v2.59h-7.18V17.51z M27.687,20.1v-2.59c0-3.18-2.59-5.76-5.77-5.76s-5.76,2.58-5.76,5.76v2.59h-1.24v10.65h14V20.1H27.687z"></path><circle fill-rule="evenodd" clip-rule="evenodd" fill="#FEFEFE" cx="35.417" cy="10.75" r="6.5"></circle><polygon fill="#7B7B7B" stroke="#7B7B7B" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="35.417,12.16 32.797,9.03 31.917,10.07 35.417,14.25 42.917,5.29 42.037,4.25 "></polygon></svg>
            <div class="alert-footer-text">
                <p>secure</p>安全加密
            </div>
        </div>
    </div>
	<div class="wrapper">
  <div class="zombie">
    <div class="zombie__head">
      <div class="zombie__brain"></div>
      <div class="zombie__cheeks"></div>
      <div class="zombie__chin"></div>
      <div class="zombie__eyes">
        <div class="eye left">
          <div class="eyebrow"></div>
        </div>
        <div class="eye right">
          <div class="eyebrow"></div>
        </div>
      </div>
      <div class="zombie__nose"></div>
      <div class="zombie__mouth">
        <div class="tooth">
          <div class="tooth__top"></div>
          <div class="tooth__bottom"></div>
        </div>
      </div>
    </div>
    <div class="zombie__body">
      <div class="zombie__chest">
        <div class="zombie__arms">
          <div class="arm left">
            <div class="arm__bone"></div>
            <div class="arm__sleeve"></div>
          </div>
          <div class="arm right">
            <div class="arm__details">
              <div class="arm__biceps"></div>
              <div class="arm__forearm"></div>
              <div class="hands">
                <div class="fingers">
                  <div class="finger thumb"></div>
                  <div class="finger middle"></div>
                  <div class="finger index"></div>
                  <div class="finger ring"></div>
                  <div class="finger pinky"></div>
                </div>
              </div>
            </div>
            <div class="arm__sleeve"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ground">
    <div class="ground__hole"></div>
    <div class="ground__rocks">
      <div class="rock"></div>
      <div class="rock"></div>
      <div class="rock"></div>
      <div class="rock"></div>
      <div class="rock"></div>
      <div class="rock"></div>
      <div class="rock"></div>
      <div class="rock"></div>
      <div class="rock"></div>
      <div class="rock"></div>
      <div class="rock"></div>
      <div class="rock"></div>
      <div class="rock"></div>
      <div class="rock"></div>
      <div class="rock"></div>
    </div>
    <div class="tomb">
      <div class="tomb__info">
        <h1 class="headers">安息</h1>
        <h4 class="headers">"喝了很多咖啡的博主。"</h4>
        <h5 class="headers"><a href="http://www.geroro.com">返回IT敢客</a></h5>
      </div>
    </div>
    <div class="brains-comic-box">
      <h1 class="brains__text">Braaains!</h1>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
function alertSet(e) {
    document.getElementById("js-alert-box").style.display = "block", document.getElementById("js-alert-head").innerHTML = e;
var t = 5,
        n = document.getElementById("js-sec-circle");
    document.getElementById("js-sec-text").innerHTML = t, setInterval(function() {
//禁止其他网站调用此跳转
//var MyHOST = new RegExp("<?php echo $_SERVER['HTTP_HOST']; ?>");
//if (!MyHOST.test(document.referrer)) {
//  location.href="http://" + MyHOST;
//}
if (0 == t) location.href = "<?php echo $url;?>";
else {
            t -= 1, document.getElementById("js-sec-text").innerHTML = t;
var e = Math.round(t / 5 * 735);
            n.style.strokeDashoffset = e - 735
        }
    }, 970)
} </script>
<script>alertSet("<?php echo $title;?>");</script>
</body>
</html>