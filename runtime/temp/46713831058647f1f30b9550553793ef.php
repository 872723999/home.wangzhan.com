<?php /*a:4:{s:84:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\course\info.html";i:1555382327;s:91:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_head.html";i:1554718840;s:94:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_navhead.html";i:1554714880;s:93:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_bottom.html";i:1554719966;}*/ ?>
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

		
<link rel="stylesheet" href="/static/home/css/course/class.css">
<script src="/static/home/js/main01.js"></script>
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
	


<div class="qbkcxqybaner"></div>	
	
	
<script>
	var bu = 'fakao';
	var env = 'production';
	var userId = '';
	var mobile = '';
</script>

<div class="zh-public-course-wrap">
	<div class="zh-public-course">
	<div class="course-nav-box">
		<div class="courses-filtrate-nav course-filter-nav">
	        <a href="/" class="courses-filtrate-nav-home course-filter-nav-index">首页</a>
	        <span class="courses-filtrate-arrow">&gt;</span>
	        <a href="<?php echo url('course/course_list'); ?>?classType_id=0&classSmallType_id=0&teaching_type=0" class="courses-filtrate-nav-course course-filter-nav-index">全部课程</a>
	        <span class="courses-filtrate-arrow">&gt;</span>
	        <a href="<?php echo url('course/course_list'); ?>?classType_id=<?php echo htmlentities($info['class_type_id']); ?>&classSmallType_id=0&teaching_type=0" class="courses-filtrate-nav-cur course-filter-curr"><?php echo htmlentities($classType_list[$info['class_type_id']]['title']); ?></a>
	    </div>
	</div>
	<div class="zh-class-page">
	<div class="course-content-box top clear">
		<div class="course-content-img-box class-img">
			<img src="<?php echo htmlentities($info['pic']); ?>" alt="内蒙古都林教育">
			
			<a href="#" class="course-play-btn" target="_blank">
			
				<!-- <i class="bofang-btn"><img src="/static/home/img/course/bofangicon.png" height="63" width="63" alt="" /></i> -->
			</a>
			
		</div>
		<div class="course-c-info class-detail">
			<h3 class="course-c-title"><?php echo htmlentities($info['title']); ?></h3>
			<p class="price" style="background:none;padding:0;"><span class="course-c-label" >￥<?php echo htmlentities($info['price']); ?>元</span></p>
			<p class="jiangshi course-jiangshi">
				<span class="course-c-label">
				讲师:&nbsp;
				
				<a href="/#" class="course-detail-teacher">  <?php echo htmlentities($teacher_info['name']); ?></a>
				
				</span>
			</p>
            
			<p class="keshi">课时:<span class="course-c-label">&nbsp;<?php echo htmlentities($count); ?>节</span></p>
            
			<p class="bofang">参与人数:<span class="course-c-label">&nbsp;19730人</span></p>
			<div class="buy-btn">
				<ul>
					<!-- 如果价钱为0，直接跳转到视频页面 -->
					<?php if($info['price']==0): ?>
						<li class="active">
							<a href="<?php echo url('video'); ?>?course_id=<?php echo htmlentities($info['id']); ?>&user_id=<?php echo htmlentities($uid); ?>" style="color: #fff;" class="course-c-btn gotoStudyBtn" target="_blank">开始学习</a>
						</li>
					<?php elseif($is_lock==1): ?>
					<!-- 如果当前课程针对当前用户是解锁的，跳转到视频页面 -->
						<li class="active">
							<a href="<?php echo url('video'); ?>?course_id=<?php echo htmlentities($info['id']); ?>&user_id=<?php echo htmlentities($uid); ?>" style="color: #fff;" class="course-c-btn gotoStudyBtn" target="_blank">开始学习</a>
						</li>
					<?php else: ?>
					<!-- 价格不为0，当前用户也没解锁，跳转到支付页面 -->
						<li class="active">
							<a href="<?php echo url('pay/index'); ?>?course_id=<?php echo htmlentities($info['id']); ?>&user_id=<?php echo htmlentities($uid); ?>" style="color: #fff;" class="course-c-btn gotoStudyBtn" target="_blank">开始学习</a>
						</li>
					<?php endif; ?>

				</ul>
			</div>
		</div>
	</div>
	<div class="course-detail-box zh-course-detail-page clearfix">
		<div class="course-detail-box-l right fl">
			<div class="course-detail-box-header top-tit clearfix">
				<div class="course-detail-bottom-line">
					<div class="top-left fl">
						<ul class="clearfix">
							<li id="courseDetailTab" class="course-detail-nav course-detail-nav-selected "><a href="#courseDetailBox">课程介绍</a></li>
							
							<li id="courseDirTab" class="course-detail-nav"><a href="#courseDirBox">课程目录</a></li>
							<li id="courseRecommTab" class="course-detail-nav"><a href="#courserecommbox">相关推荐</a></li>
							
						</ul>
					</div>
				</div>
			</div>
            <div id="courseDetailBox" class="zhh-editor" >
				<div class="opencourse-tabcon-1">
					<span class="ic_courseintro"><img src="/static/home/img/course/courseintro.png" alt="" width="39"></span>
					<span class="con-tit-1">课程介绍</span>
				</div>
				<h2 style="text-align: center; margin-bottom: 10px;"><?php echo htmlentities($info['title']); ?></h2>
				<div>
					<?=$info['introduction']?>
				</div>
			</div>
			
            <ul id="courseDirBox">
				<div class="opencourse-tabcon-1">
					<span class="ic_courseintro"><img src="/static/home/img/course/coursemulu.png" alt="" width="34"></span>
					<span class="con-tit-1">课程目录</span>
				</div>
            	<?php if(!(empty($course_list) || (($course_list instanceof \think\Collection || $course_list instanceof \think\Paginator ) && $course_list->isEmpty()))): if(is_array($course_list) || $course_list instanceof \think\Collection || $course_list instanceof \think\Paginator): $i = 0; $__LIST__ = $course_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
						<!-- 章节 begin -->
		            	<li class="course-lesson-dir-box">
		            		<div class="course-lesson-dir">
		            			<span class="course-lesson-icon course-lesson-unfold"></span>
		            			<span class="course-lesson-dir-title"><?php echo htmlentities($val['z_title'][0]); ?></span>
		            		</div>
		            		<div class="course-lesson-box">
		            			<!-- 圆 begin -->
			            		<ul class="course-lesson-left">
			            			<?php if(!(empty($val['children']) || (($val['children'] instanceof \think\Collection || $val['children'] instanceof \think\Paginator ) && $val['children']->isEmpty()))): if(is_array($val['children']) || $val['children'] instanceof \think\Collection || $val['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $val['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val2): $mod = ($i % 2 );++$i;?>
				            				<li>
				            					<div class="course-lesson-item-line-circle" style="">
				            						<div class="course-lesson-item-circle"></div>
				            					</div>	
				            				</li>
				            			<?php endforeach; endif; else: echo "" ;endif; endif; ?>
			            		</ul>
		            			<!-- 圆 end -->
		            			<!-- 部分标题 begin -->
			            		<ul class="course-lesson-right">
			            			<?php if(!(empty($val['children']) || (($val['children'] instanceof \think\Collection || $val['children'] instanceof \think\Paginator ) && $val['children']->isEmpty()))): if(is_array($val['children']) || $val['children'] instanceof \think\Collection || $val['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $val['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val2): $mod = ($i % 2 );++$i;?>
					            			<li class="course-lesson-item">
					            				<div title="<?php echo htmlentities($val2['b_title']); ?>" class="course-lesson-title"><?php echo htmlentities($val2['b_title']); ?></div>
                                              	<!-- 如果价钱为0，直接跳转到视频页面 -->
												<?php if($info['price']==0): ?>
                                              	<a href="<?php echo url('video'); ?>?bufen_id=<?php echo htmlentities($val2['id']); ?>" class="course-lesson-btn" target="_blank">立即播放</a>
                                              	<?php elseif($is_lock==1): ?>
                                              	<a href="<?php echo url('video'); ?>?bufen_id=<?php echo htmlentities($val2['id']); ?>" class="course-lesson-btn" target="_blank">立即播放</a>
												<!-- 如果当前课程针对当前用户是解锁的，跳转到视频页面 -->
                                              	<?php else: ?>
                                              	<a href="<?php echo url('pay/index'); ?>?course_id=<?php echo htmlentities($info['id']); ?>&user_id=<?php echo htmlentities($uid); ?>" class="course-lesson-btn" target="_blank">立即播放</a>
												<!-- 价格不为0，当前用户也没解锁，跳转到支付页面 -->
                                              	<?php endif; ?>
					            				<div class="course-lesson-duration">
													<span class="ic_lesson-duration"><img src="/static/home/img/course/ic_time_1.png" alt="" width="13"></span>
													00:00:54
												</div>
					            			</li>
				            			<?php endforeach; endif; else: echo "" ;endif; endif; ?>
			            		</ul>
		            			<!-- 部分标题 end -->
		            		</div>
		            	</li>
						<!-- 章节 end -->
            		<?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
			
			
			<div id="courserecommbox">
                
				<div class="opencourse-tabcon-1">
					<span class="ic_courseintro"><img src="/static/home/img/course/tuijainkecheng.png" alt="" width="36"></span>
					<span class="con-tit-1">相关推荐</span>
				</div>

				<div class="course-recomm-inner" style="margin-bottom: 10px;">
					<ul style="margin-bottom: 0;" class="clearfix">

						<?php if(!(empty($tui_course_list) || (($tui_course_list instanceof \think\Collection || $tui_course_list instanceof \think\Paginator ) && $tui_course_list->isEmpty()))): if(is_array($tui_course_list) || $tui_course_list instanceof \think\Collection || $tui_course_list instanceof \think\Paginator): $i = 0; $__LIST__ = $tui_course_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
								<li style="">
									<a href="<?php echo url('course/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank">
										<div>
											<div class="course-side-img">
												<img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['pic']); ?>" />
											</div>
										</div>
										<div class="course-side-free">
											<div class="course-side-book-title"><?php echo htmlentities($val['title']); ?></div>
		                                    <span>￥<?php echo htmlentities($val['price']); ?>元</span>
										</div>
									</a>
								</li>
							<?php endforeach; endif; else: echo "" ;endif; endif; ?>
					</ul>
				</div>
                
			</div>
		</div>
		<div class="course-detail-box-r left fr">
	<div class="course-side-box">
	
		<ul>
			
			<li>
				<a href="<?php echo url('teacher/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank">
					<div class="teacher-img clearfix course-side-imgwrap">
						<span class="icon-line"></span>
						<div class="course-side-teacher-img ">
							<img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['pic']); ?>" />
						</div>
						<div class="teacher-des-wrap">
							<h3 class="course-side-teacher"><?php echo htmlentities($teacher_info['name']); ?></h3>
						</div>
					</div>
					<div class="zhh-editor course-side-teacher-desc teacher-des" style="font-size: 16px; line-height: 30px; color: #333;"><?=$val['introduction']?></div>
					<a href="<?php echo url('teacher/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank" class="free_listen_btn">我要在听老师课程</a>
				</a>
			</li>
			
		</ul>
	</div>
</div>
	</div>
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
