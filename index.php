<?php
require_once "jssdk.php";//引入相应路径下的jssdk文件
$jssdk = new JSSDK("wxfa58e4223fa1132d","d1a1f1e7f312057d8a1b6cc30f0f7d05");//按照自己的公众号填写  
$signPackage = $jssdk->GetSignPackage();  
$data = array(
 'appId' => $signPackage["appId"], 
 'nonceStr' => $signPackage["nonceStr"],
 'timestamp' => $signPackage["timestamp"],
 'signature' => $signPackage["signature"]);
?>
<!doctype html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="yes" name="apple-touch-fullscreen"/>
<meta content="telephone=no" name="format-detection"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=0.646875, minimum-scale=0.646875, maximum-scale=0.646875, user-scalable=no"/>
<meta http-equiv="Expires" content="-1">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Pragma" content="no-cache">
<title>施华蔻专业 挚爱星品</title>

<link rel="stylesheet" type="text/css" href="css/css.css">    
</head>

<body>
<div class="main">
<div><a href="https://item.m.jd.com/ware/view.action?wareId=2793471"><img src="images/01.jpg?v=1.0"/></a></div>
<div><a href="https://item.m.jd.com/ware/view.action?wareId=1157301"><img src="images/02.jpg?v=1.0"/></a></div>
<div><a href="https://item.m.jd.com/ware/view.action?wareId=2793461"><img src="images/03.jpg?v=1.0"/></a></div>
<div><a href="https://item.m.jd.com/ware/view.action?wareId=2906708"><img src="images/04.jpg?v=1.0"/></a></div>
<div><a href="https://item.m.jd.com/ware/view.action?wareId=3804715"><img src="images/05.jpg?v=1.0"/></a></div>
<div><a href="https://item.m.jd.com/ware/view.action?wareId=2186822"><img src="images/06.jpg?v=1.0"/></a></div>
<div><a href="https://item.m.jd.com/ware/view.action?wareId=5866769"><img src="images/07.jpg?v=1.0"/></a></div>
<div><a href="https://item.m.jd.com/ware/view.action?wareId=6358868"><img src="images/08.jpg?v=1.0"/></a></div>
<div><a href="https://item.m.jd.com/ware/view.action?wareId=6505303"><img src="images/09.jpg?v=1.0"/></a></div>
<div><a href="https://item.m.jd.com/ware/view.action?wareId=1110161"><img src="images/10.jpg?v=1.0"/></a></div>
<div><img src="images/11.jpg?v=1.0"/></div>
</div>

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>  
<script>  
var url=window.location.href;
wx.config({  
debug:false,
appId: '<?php echo $data["appId"];?>',
timestamp: <?php echo $data["timestamp"];?>,
nonceStr: '<?php echo $data["nonceStr"];?>',
signature: '<?php echo $data["signature"];?>', 
url:url, 
jsApiList: [  
       "onMenuShareTimeline", //分享给好友  
       "onMenuShareAppMessage", //分享到朋友圈  
       "onMenuShareQQ",  //分享到QQ  
       "onMenuShareWeibo" //分享到微博  
]  
});  
  
  wx.ready(function (){  
  var shareData = {  
  title: '施华蔻专业 挚爱星品',  
  desc: '专业品质，只为绽现你的完美发丝',  
  link: 'http://schwarzkopf-professional.oookini.com/shk/',  
  imgUrl: 'http://schwarzkopf-professional.oookini.com/shk/head.jpg'};
  wx.onMenuShareAppMessage(shareData);  
  wx.onMenuShareTimeline(shareData);  
  wx.onMenuShareQQ(shareData);  
  wx.onMenuShareWeibo(shareData); 
    });  

</script>  

</body>
</html>