<?php /*a:4:{s:85:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\teacher\list.html";i:1555169227;s:91:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_head.html";i:1554718839;s:94:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_navhead.html";i:1554714878;s:93:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_bottom.html";i:1554719965;}*/ ?>
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
<!-- 分页样式 -->
<link rel="stylesheet" href="/static/common/css/page.css" />
</head>

<body>
<!-- 导航 -->
<div class="ms_top">
	<div class="ms_top_fl">
		<h3>内蒙古都林教育</h3>
		<div class="ms_top_flner">
    		<ul>
    			<li><a href="/" target="_blank">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
    			<li><a href="<?php echo url('course/course_list'); ?>?classType_id=0&classSmallType_id=0&teaching_type=0" target="_blank">发现课程</a></li>
    			<li><a href="<?php echo url('course/bao_list'); ?>?classType_id=0"  target="_blank">课程包</a></li>
    			<li><a href="<?php echo url('teacher/list'); ?>"  target="_blank">名师专区 </a></li>
    		</ul>
		</div>
	</div>
	<div class="ms_top_fr">
			<!-- <div class="searchdiv flright">
    			<input type="text" class="search" value="请输入搜索内容"/>
    			<input type="button" class="sousuo button" value="GO"/>
    		</div> -->
    	<?php if(empty($uid) || (($uid instanceof \think\Collection || $uid instanceof \think\Paginator ) && $uid->isEmpty())): ?>
			<div class="dlss">
		  		<ul>
		  			<li><a href="denglu.html" target="_blank">登录</a></li>
					<li><a href="denglu.html" target="_blank">注册</a></li>
				</ul>
			</div>
    	<?php endif; ?>
	</div>
</div>

<div class="msbaner"></div>
<div class="zh-teacher-pagewrap">
  <div class="teach-bannerwrap">
    <!-- <div class="top">
     <ul class="clearfix">
          <li class="active"><a href="#">全部名师</a></li>
          <li class=""><a href="#">综合</a></li>
          <li class=""><a href="#">人气</a></li>
	    <li class=""><a href="#">好评</a></li>
     </ul>
    </div> -->
  </div>
  <div class="zh-teacher-page">
    <div class="teacher-list-con">
      <div class="bott clearfix">
        <?php if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                <div class="clearfix teacher-list" style="">
                  <div class="teachimg"> <a href="<?php echo url('teacher/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank"> <img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['head_img']); ?>" /> </a> </div>
                  <div class="teachdes">
                    <h3> <a href="#" target="_blank"><?php echo htmlentities($val['name']); ?></a> </h3>
                    <p>.....................................................</p>
                    <p class="tea-intro"><?php echo htmlentities($val['introduction']); ?></p>
                    <a href="<?php echo url('teacher/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank" class="checkdetail_btn">查看详情</a> </div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
      </div>
      <div class="course-filter-page"><?php echo $list; ?></div>
    </div>
  </div>
  <div style="height:30px;"></div>
</div>
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