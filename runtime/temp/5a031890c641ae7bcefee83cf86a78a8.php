<?php /*a:2:{s:85:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\course\video.html";i:1555297077;s:91:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_head.html";i:1554718839;}*/ ?>
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

		

<link rel="stylesheet" type="text/css" href="/static/home/css/course/play.css" />
</head>

<body>
<div class="shipin_fl">
  <div class="shipin_fl_q"><img src="/static/home/img/course/logo1.png" alt="内蒙古都林教育"/>
    <p><a href="/" target="_blank">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></p>
    <p><a href="<?php echo url('course/course_list'); ?>?classType_id=0&classSmallType_id=0&teaching_type=0" target="_blank">全部课程</a></p>
    <p><a href="<?php echo url('course/course_list'); ?>?classType_id=0" target="_blank">课程包</a></p>
  </div>
</div>
<div class="shipin_fr">
  <div class="shipin_fr_fl">
  	<?php if(!(empty($part_info) || (($part_info instanceof \think\Collection || $part_info instanceof \think\Paginator ) && $part_info->isEmpty()))): ?>
    	<h3><?php echo htmlentities($part_info['title']); ?></h3>
    <?php else: ?>
    	<h3><?php echo htmlentities($course_list[0]['b_title']); ?></h3>
    <?php endif; ?>
    <!-- <div class="shipin_fr_shipin"> -->
    <div class="">
    	<?php if(!(empty($part_info) || (($part_info instanceof \think\Collection || $part_info instanceof \think\Paginator ) && $part_info->isEmpty()))): ?>
    	<video src="<?php echo htmlentities($part_info['video']); ?>" id="video" controls="controls" controlslist="nodownload" style="height: 600px;width: 600px;">
			您的浏览器不支持 video 标签。
		</video>
    	<?php else: ?>
    	<video src="<?php echo htmlentities($course_list[0]['b_video']); ?>" id="video" controls="controls" controlslist="nodownload" style="height: 600px;width: 600px;">
			您的浏览器不支持 video 标签。
		</video>	
    	<?php endif; ?>
		
    </div>
    <div class="shipin_fr_fl_t">
      <div class="shipin_fr_fl_tit">
        <p>相关推荐</p>
      </div>
    	<div class="shipin_fr_fl_ner">
    		<ul>
                <?php if(is_array($tui_list) || $tui_list instanceof \think\Collection || $tui_list instanceof \think\Paginator): $i = 0; $__LIST__ = $tui_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('course/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank"><img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['pic']); ?>" style="width: 219px;height: 123px;" alt="内蒙古都林教育"/>
                            <div><font><?php echo htmlentities($val['title']); ?></font> </div>
                        </a>
                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
        	</ul>
    	</div>
    </div>
  </div>
	<div class="shipin_fr_fr">
		<h3><?php echo htmlentities($course_list[0]['k_title']); ?></h3>
		<ul>
			<?php if(is_array($course_list) || $course_list instanceof \think\Collection || $course_list instanceof \think\Paginator): $i = 0; $__LIST__ = $course_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
				<li><span><a href="#" class="edit_path" data-path="<?php echo htmlentities($val['b_video']); ?>"><?php echo htmlentities($val['b_title']); ?></a></span><img src="/static/home/img/course/1.png"/></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
</body>
</html>
<script>
    $('.edit_path').click(function(){
        var video_path = $(this).attr('data-path');
        $("#video").attr('src',video_path);
    });
    // 禁止f12
    $(document).keydown(function(event){
        if ( event.which == 123 ) {
            return false;
        }
    });
    // 禁止鼠标右键
    document.oncontextmenu = function(){
        event.returnValue = false;
    }
</script>