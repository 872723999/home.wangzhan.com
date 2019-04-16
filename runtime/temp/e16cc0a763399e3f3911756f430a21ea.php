<?php /*a:3:{s:85:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\article\info.html";i:1553016450;s:91:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_head.html";i:1554718839;s:93:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_bottom.html";i:1554719965;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="Keywords" content="内蒙古《都林教育》培训班是2016年成立的专业蒙古语培训机构。">
<meta name="Description" content="《都林教育》的主营业务涵盖了公务员、事业单位（各盟市）、政法干警考试、司法考试等各类职业人才的招录考试、笔试及面试培训，是一家综合性的职业教育培训机构。">
<title>内蒙古《都林教育》</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link rel="stylesheet" type="text/css" href="/static/home/css/index/index.css" />
<link rel="icon" href="/static/home/img/index/ico.jpg" type="image/x-icon"/>
<link rel="shortcut icon" href="/static/home/img/index/ico.jpg" type="image/x-icon" media="screen"/>
<script type="text/javascript" src="/static/home/js/jq.min.js"></script>

		
<script src="/static/home/js/main01.js"></script>
</head>

<body>
<div class="ms_top">
  <div class="ms_top_fl">
    <h3>内蒙古都林教育</h3>
    <div class="ms_top_flner">
      <ul>
        <li><a href="index.html" target="_blank">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
        <li><a href="qbkc.html" target="_blank">发现课程</a></li>
        <li><a href="kcb.html"  target="_blank">课程包</a></li>
        <li><a href="ms.html"  target="_blank">名师专区 </a></li>
      </ul>
    </div>
  </div>
  <div class="ms_top_fr">
    <div class="searchdiv flright">
      <input type="text" class="search" value="请输入搜索内容"/>
      <input type="button" class="sousuo button" value="GO"/>
    </div>
    <div class="dlss">
      <ul>
        <li><a href="denglu.html" target="_blank">登录</a></li>
        <li><a href="denglu.html" target="_blank">注册</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="newsbaner"></div>
<div class="newsymxq">
  <div class="new_bxq">
    <div class="new_nerbtxq"> <a href="/" class="new_btxq">首页</a> <span class="new_bt1xq"> ></span><a href="<?php echo url('article_list'); ?>?article_type=<?=$_GET['article_type']?>" class="new_btxq">新闻资讯</a> <span class="new_bt1xq"> ></span>  <a href="#" class="new_bt2xq">新闻详情</a> </div>
    <div class="essay-tuijian-news"> </div>
	  
	  
	  <div class="xinwenxq_con"><p><?php echo htmlentities($info['title']); ?></p>
	  <div class="xinwenxq_con_sj"><?php echo htmlentities(date("Y-m-d H:i",!is_numeric($info['create_time'])? strtotime($info['create_time']) : $info['create_time'])); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作者：内蒙古杜林教育 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;阅读：<?php echo htmlentities($info['show_num']); ?></div>
	  
	  <div class="xinwenxq_con_dy"><?php echo htmlentities($info['introduction']); ?></div>
		  <div class="xinwenxq_con_zw">
            <?=$info['content']?>
          </div>
	  </div><div class="xinwenxq_cony">

    <?php if(is_array($tui_list) || $tui_list instanceof \think\Collection || $tui_list instanceof \think\Paginator): $i = 0; $__LIST__ = $tui_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
        <div class="xinwenxq_confr">
            <div class="xinwenxq_confr_tu"><a href="#" target="_blank"><img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['cover_pic']); ?>" style="height: 180;width: 200px;" alt="内蒙古都林教育"/></a></div>
            <h1><a href="#" target="_blank"><?php echo htmlentities($val['title']); ?></a></h1>
            <p><a href="#" target="_blank"><?php echo htmlentities($val['introduction']); ?></a></p>
            <h2><a href="#" target="_blank">￥<?php echo htmlentities($val['price']); ?>元</a></h2>
        </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
	

</div></div>
<div class="foot">
    <div class="foot_ner">
        <div class="foot_ner_fl">
            <h3>内蒙古都林教育</h3>
            <p>
                咨询热线：15004710660 / 15248038134</br>
                Copyright@ 内蒙古都林教育咨询有限公司　版权所有</br>
                蒙ICP备18001175号-1
            </p>
        </div>
        <div class="foot_ner_fr">
            <img src="/static/home/img/index/ewm.jpg" height="165px" width="165px" alt="内蒙古都林教育"/>
            <div>
                <P>
                    扫一扫关注公众号</br>
                    更多精彩 尽在其中
                </P>
                <h3>15248038134</h3>
            </div>
        </div>
    </div>
</div>

</body>
</html>
