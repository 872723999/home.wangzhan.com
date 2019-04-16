<?php /*a:4:{s:85:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\teacher\info.html";i:1553006970;s:91:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_head.html";i:1554718840;s:94:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_navhead.html";i:1554714880;s:93:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_bottom.html";i:1554719966;}*/ ?>
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

		
<script src="/static/home/js/jquery-1.4.2.min.js"></script>
<script src="/static/home/js/index.js"></script>
<!-- 分页样式 -->
<link rel="stylesheet" href="/static/common/css/page.css" />
<script type="text/javascript"> 
$(function(){
	$(".tea_tu").swBanner();
});
</script>




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

<div class="msxqybaner"></div>
<div class="msxqyym">
<div class="msxqy_b">
  <div class="msxqy_nerbt"> <a href="/" class="msxqy_bt">首页</a> <span class="msxqy_bt1"> ></span><a href="<?php echo url('teacher/list'); ?>" class="msxqy_bt1">名师</a> <span class="msxqy_bt1"> ></span> <a href="#" class="msxqy_bt2"><?php echo htmlentities($info['name']); ?></a> </div>
  <div class="essay-tuijian-news"> </div>
  <div class="msxq_tou">
    <div class="msxq_toufl"><a href="#"><img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($info['head_img']); ?>" alt="内蒙古都林教育名师"/></a></div>
    <div class="msxq_toufr">
      <h1><a href="#"><?php echo htmlentities($info['name']); ?></a></h1>
      <p><a href="#">都林教育讲师</a></p>
      <div><a href="#"><?php echo htmlentities($info['introduction']); ?></a></div>
    </div>
  </div>
  <div class="msxq_ner">
    <div class="msxq_nerfl">
      <div class="msxq_nerfl_tit">开设课程</div>
      <div class="msxqnr_ner">
        <ul>
            <?php if(!(empty($course_list) || (($course_list instanceof \think\Collection || $course_list instanceof \think\Paginator ) && $course_list->isEmpty()))): if(is_array($course_list) || $course_list instanceof \think\Collection || $course_list instanceof \think\Paginator): $i = 0; $__LIST__ = $course_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                    <li><img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['pic']); ?>" alt="内蒙古都林教育"/>
                        <div style="background: #f7f7f7; height: 93px;">
                            <h3><a href="<?php echo url('course/info'); ?>?id=<?php echo htmlentities($val['id']); ?>"><?php echo htmlentities($val['title']); ?></a></h3>
                            <p><?php echo htmlentities($val['describe']); ?></p>
                            <div class="msxqnr_ner_fr"><?php echo htmlentities($val['cang']); ?></div>
                            <div class="msxqnr_ner_righ">￥<?php echo htmlentities($val['price']); ?>元</div>
                        </div>
                    </li>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </ul>
      </div>
    </div>
    <div class="msxq_nerfr">
	  <div class="right_techer"> <font>名师风采</font>
<div class="tea_tu">
<ul class="banList">

<?php if(is_array($tui_list) || $tui_list instanceof \think\Collection || $tui_list instanceof \think\Paginator): $i = 0; $__LIST__ = $tui_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($key == '0'): ?>
        <li class="active"><a href="<?php echo url('teacher/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank"><img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['head_img']); ?>" width="228" height="260"/></a></li>
    <?php else: ?>
        <li><a href="<?php echo url('teacher/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank"><img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['head_img']); ?>" width="228" height="260"/></a></li>
    <?php endif; endforeach; endif; else: echo "" ;endif; ?>


</ul>
<div class="fomW">
<div class="jsNav">
<a href="javascript:;" class="trigger current"></a>
<a href="javascript:;" class="trigger"></a>
<a href="javascript:;" class="trigger"></a>
</div>
</div>
		  </div></div>
	  
	  
	  
	  </div>
  </div>
  <div class="course-filter-page" style="padding-top: 20px"><?php echo $course_list; ?></div>
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
