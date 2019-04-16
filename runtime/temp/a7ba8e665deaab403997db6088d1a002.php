<?php /*a:4:{s:88:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\course\bao_list.html";i:1555170287;s:91:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_head.html";i:1554718839;s:94:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_navhead.html";i:1554714878;s:93:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_bottom.html";i:1554719965;}*/ ?>
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

		
<!-- 分页样式 -->
<link rel="stylesheet" href="/static/common/css/page.css" />
<script src="/static/home/js/main01.js"></script>
</head>
<style type="text/css">
    .active{
        border-bottom: 5px solid red;
    }
</style>
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

<div class="kcbbaner"></div>
<div class="msxqyym">
  <div class="msxqy_b">
    <div class="msxqy_nerbt"> <a href="index.html" class="msxqy_bt">首页</a> <span class="msxqy_bt1"> ></span><a href="kcb.html" class="msxqy_bt1">课程包</a> </div>
    <div class="essay-tuijian-news"> </div>
    <div class="kcb_dh">
      <div class="kcb_dhfl">
        <div class="kcb_dhflsh">
          <p>学 科：</p>
          <p><a href="<?php echo url('course/bao_list'); ?>?classType_id=0" class="active classType_list" id="classType_0">全部</a></p>
          <ul>
            <?php if(is_array($classType_list) || $classType_list instanceof \think\Collection || $classType_list instanceof \think\Paginator): $i = 0; $__LIST__ = $classType_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo url('course/bao_list'); ?>?classType_id=<?php echo htmlentities($val['id']); ?>" class="classType_list" id="classType_<?php echo htmlentities($key); ?>"><?php echo htmlentities($val['title']); ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
        <!-- <div class="kcb_dhflxi">
          <p  style="background: #ff6600;  border: none;"><a style="color:#fff;" href="#">最新</a></p>
          <p><a href="#">最新</a></p>
          <p><a href="#">最新</a></p>
        </div> -->
      </div>
      <div class="kcb_dhfr">
        <div class="searchdiv flright">
          <input type="text" class="search1" id="keywords" placeholder="请输入搜索内容"/>
          <input type="button" class="sousuo butto search_btn" value="GO"/>
        </div>
      </div>
    </div>
	   <div class="kcsz_ner1">
    <ul>
        <?php if(!(empty($bao_list) || (($bao_list instanceof \think\Collection || $bao_list instanceof \think\Paginator ) && $bao_list->isEmpty()))): if(is_array($bao_list) || $bao_list instanceof \think\Collection || $bao_list instanceof \think\Paginator): $i = 0; $__LIST__ = $bao_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('course/bao_info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank">
                    <li>
                        <img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['pic']); ?>" alt="内蒙古都林教育"/>
                        <h3><?php echo htmlentities($val['title']); ?></h3>
                        <p><?php echo htmlentities($val['describe']); ?></p>
                        <div>
                            <div class="kcsz_ner_fr"><?php echo htmlentities($val['cang']); ?></div>
                            <div class="kcsz_ner_righ">￥<?php echo htmlentities($val['price']); ?>元</div>
                        </div>
                    </li>
                </a>
            <?php endforeach; endif; else: echo "" ;endif; else: ?>
            <div style="text-align: center;">
                <font color="red">数据为空</font>
            </div>
        <?php endif; ?>
    </ul>
  </div>
	   <div class="course-filter-page">
            <?php echo $bao_list; ?>   
        </div>
  </div>
	
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
<script>
    $(function(){
        var classType_id = "<?=$_GET['classType_id']?>";
        $('.classType_list').removeClass('active');
        $('#classType_'+classType_id).addClass('active');
    });

    // 搜索
    $('.search_btn').click(function(){
        var keywords = $('#keywords').val();
        if(!keywords){
            alert('搜索项不能为空');
            return false;
        }else{
            location.href="<?php echo url('course/bao_list'); ?>?classType_id=0&keywords="+keywords;
        }
    });
</script>