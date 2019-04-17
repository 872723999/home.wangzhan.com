<?php /*a:1:{s:82:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\pay\index.html";i:1555464145;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="Keywords" content="内蒙古《都林教育》培训班是2016年成立的专业蒙古语培训机构。">
<meta name="Description" content="《都林教育》的主营业务涵盖了公务员、事业单位（各盟市）、政法干警考试、司法考试等各类职业人才的招录考试、笔试及面试培训，是一家综合性的职业教育培训机构。">
<title>内蒙古《都林教育》</title>
<link rel="stylesheet" type="text/css" href="/static/home/css/zhifu.css" />
<link rel="stylesheet" type="text/css" href="/static/home/css/index.css" />
<script src="/static/home/js/jquery-1.11.1.min.js"></script>
</head>
<body>

<div class="zhifu_1">
    <div>订单号：<font color="red" id="order_num"><?php echo htmlentities($order_num); ?></font></div>
    <h1>购买课程</h1>
    <div class="zhifu_1_fl"><img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($info['pic']); ?>" style="height: 169px;width: 300px;" alt="内蒙古都林教育"/></div>
    <div class="zhifu_1_fr">
        <h3><?php echo htmlentities($info['title']); ?></h3>
        <p><?php echo htmlentities($info['describe']); ?></p>
        <p>价格:<span>￥ <?php echo htmlentities($info['price']); ?></span></p>
        <p>原价:<s>￥<?php echo htmlentities($info['old_price']); ?></s></p>
    </div>
</div>
<div class="zhifu_2">
  <div class="buy_pay_way clearfix">
    <p class="address_tips">请选择支付方式</p>
    <div class="zhifubao_and_weixin">
      <ul class="clearfix">
        <!--v-for-start-->
        <li style="cursor: pointer;" class="alipay ">
            <div>
              	<span class="btn btn-pop"><img src="/static/home/img/alipay.png" alt="" id="zfb_btn"></span>
			    <div class="pop">
                    <div class="weixin_pay_box">
                        <div class="weixin_pay_top"> <img src="/static/home/img/alipay.png" alt="" > </div>
                        <div class="weixin_pay_con">
                            <p class="pay_num">支付金额:<span>￥<?php echo htmlentities($info['price']); ?></span></p>
                            <div class="weixin_pay_code" style="margin-top: 20px;"> <img alt="" title="微信支付二维码" src="/static/home/img/zfb.jpg"> </div>
                            <p class="wexin_pay_tips"> 请使用支付宝扫描二维码支付 </p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <!--v-if--> 
  
<script>
var pop = $('.pop');
// 支付宝
$('.btn-pop').on('click', function(e){
    e.stopPropagation();  
    pop.show();
    // 修改支付方式
    var url = "<?php echo url('pay/edit_pay_type'); ?>";
    // 订单号
    var order_num = $("#order_num").html();
    // 支付类型
    var price_type = 2;
    $.ajax({
        url : url,
        type : 'post',
        data : {order_num:order_num,price_type:price_type},
        dataType : 'json',
        success : function( msg ){
            console.log(msg);
        }
    });
});

$('.close').on('click', function(){
    pop.hide();
});
$(document).click(function(e){
  if(!pop.is(e.target) && pop.has(e.target).length === 0){
    pop.hide();
  }
});
</script>
        <!--v-if-->
        <li style="cursor: pointer;" class="weixin_pay">
          <div>
            <div class="top_contact_us">
              <div class="top_telphone"></div>
              <div class="top_weixin"><a id="contact_weixin" onclick="openWindow(this)"> <img src="/static/home/img/weixin_pay.png" alt=""> </a></div>
            </div>
            <div id="light_qq" class="white_content"></div>
            <div id="light_weixin" class="white_content">
              <div class="weixin_pay_box">
                <div class="weixin_pay_top"> <img src="/static/home/img/weixin_pa.png" alt="" > </div>
                <div class="weixin_pay_con">
                  <p class="pay_num">支付金额:<span>￥<?php echo htmlentities($info['price']); ?></span></p>
                  <div class="weixin_pay_code" style="margin-top: 20px;"> <img alt="" title="微信支付二维码" src="/static/home/img/wx_zfm.jpg"> </div>
                  <p class="wexin_pay_tips"> 请使用微信扫描二维码支付 </p>
                </div>
              </div>
            </div>
            <div id="fade" class="black_overlay"  onClick="closeWindow()"> </div>
          </div>
        </li>
		  
		  
		   
        <script  type="text/javascript">
    function openWindow(obj){
        // 微信
        var qq_or_weixin = "light_qq";
        switch(obj.id)
        {
            case 'contact_weixin':
            qq_or_weixin = "light_weixin";
            break;
            
            case 'contact_qq':
            qq_or_weixin = "light_qq";
            break;
        }
        document.getElementById(qq_or_weixin).style.display='block';
        document.getElementById('fade').style.display='block';
        // 修改支付方式
        var url = "<?php echo url('pay/edit_pay_type'); ?>";
        // 订单号
        var order_num = $("#order_num").html();
        // 支付类型
        var price_type = 3;
        $.ajax({
            url : url,
            type : 'post',
            data : {order_num:order_num,price_type:price_type},
            dataType : 'json',
            success : function( msg ){
                console.log(msg);
            }
        });
    }
    function closeWindow(){
        document.getElementById('light_weixin').style.display='none';
        document.getElementById('light_qq').style.display='none';
        document.getElementById('fade').style.display='none';
    }
</script> <!--v-for-end-->
      </ul>
    </div>
  
  </div>
</div>
<div class="foot">
  <div class="foot_ner">
    <div class="foot_ner_fl">
      <h3>内蒙古都林教育</h3>
      <p>咨询热线：15004710660 / 15248038134</br>
        Copyright@ 内蒙古都林教育咨询有限公司　版权所有</br>
        蒙ICP备18001175号-1</p>
    </div>
    <div class="foot_ner_fr"><img src="/static/home/img/ewm.jpg" height="165px" width="165px" alt="内蒙古都林教育"/>
      <div>
        <P>扫一扫关注公众号</br>
          更多精彩 尽在其中</P>
        <h3>15248038134</h3>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<!-- 点击二维码，修改支付方式 -->
<script>
    
</script>