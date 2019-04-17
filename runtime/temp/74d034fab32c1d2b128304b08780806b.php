<?php /*a:4:{s:88:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\course\bao_info.html";i:1555470388;s:91:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_head.html";i:1554718840;s:94:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_navhead.html";i:1555464145;s:93:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_bottom.html";i:1554719966;}*/ ?>
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
		  			<li><a href="<?php echo url('user/login'); ?>" target="_blank">登录</a></li>
					<li><a href="<?php echo url('user/login'); ?>" target="_blank">注册</a></li>
				</ul>
			</div>
    	<?php endif; ?>
	</div>
</div>

<div class="kcbxqybaner"></div>
<div class="kcbxqy">
  <div class="kcbxqy_b">
    <div class="kcbxqy_ner"> <a href="/" class="kcbxqy_bt">首页</a> <span class="kcbxqy_bt1"> ></span><a href="<?php echo url('course/bao_list'); ?>?classType_id=<?php echo htmlentities($info['class_type_id']); ?>" class="kcbxqy_bt">课程包</a> <span class="kcbxqy_bt1"> ></span> <a href="#" class="kcbxqy_bt2">课程包详情</a> </div>
    <div class="essay-tuijian-news"> </div>
    <div class="kcbxqy_con">
      <div class="kcbxqy_confl"><img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($info['pic']); ?>" alt="内蒙古都林教育"/ >
        <div class="kcbxqy_confl_fr">
          <ul>
            <li>
              <p>阶段</p>
              <p> 0</p>
            </li>
            <li>
              <p>课程</p>
              <p><?php echo htmlentities($course_num); ?></p>
            </li>
            <li>
              <p>学员</p>
              <p><?php echo htmlentities($info['buy_num']); ?></p>
            </li>
          </ul>
        </div>
      </div>
      <div class="kcbxqy_confr">
        <h1><?php echo htmlentities($info['title']); ?></h1>
        <p><?php echo htmlentities($info['describe']); ?></p>
        <p>法考专项班有效天数：<?php echo htmlentities($info['day']); ?>天</p>
        <h2>打包价格：￥<?php echo htmlentities($info['price']); ?><s>￥<?php echo htmlentities($info['old_price']); ?></s></h2>
        <!-- 已解锁 -->
        <?php if($is_lock == '0'): ?>
          <a href="<?php echo url('pay/index'); ?>?package_id=<?php echo htmlentities($info['id']); ?>"><div class="kcbxqy_confr_zixun">立即购买</div></a>
        <?php endif; ?>
      </div>
    </div>
    <div class="kcbxqy_neer">
      <div class="kcbxqy_neerfl">
        <div class="content-block_1">
          <div class="con-tab-title wow fadeInUp">
            <div>
              <h4 style="border-bottom:.2rem solid #ee7800;"><a style="color:#ff6600;">课程种类</a></h4>
              <h4><a>阶段课程</a></h4>
            </div>
          </div>
          <div class="con-tab con-tab-1" style="display:block">
            <div class="kcbxqy_neer_ner">
              <h1>课程详情</h1>
              <h3><?php echo htmlentities($info['title']); ?></h3>
              <div class="kcbxqy_neer_ne">
                <?=$info['content']?>
              </div>
            </div>
          </div>
          <div class="con-tab_1 con-tab-2">
            <div class="kcbxqy_neer_ner1">
                <h1>阶段课程</h1>
                <ul>
                    <?php if(!(empty($course_list) || (($course_list instanceof \think\Collection || $course_list instanceof \think\Paginator ) && $course_list->isEmpty()))): if(is_array($course_list) || $course_list instanceof \think\Collection || $course_list instanceof \think\Paginator): $i = 0; $__LIST__ = $course_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a href="<?php echo url('course/info'); ?>?id=<?php echo htmlentities($val['id']); ?>">
                                    <img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['pic']); ?>" alt="内蒙古都林教育"/>
                                    <div class="kcbxqy_neer_ner1_n">
                                        <h3><?php echo htmlentities($val['title']); ?></h3>
                                        <p><?php echo htmlentities($val['small_title']); ?></p>
                                        <div class="kcxqnr_ner_fr"><?php echo htmlentities($val['buy_num']); ?></div>
                                        <div class="kcxqnr_ner_right">￥<?php echo htmlentities($val['price']); ?>元</div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; else: ?>
                        <div style="text-align: center;">
                            <font color="red">数据为空</font>
                        </div>
                    <?php endif; ?>
                </ul>
            </div>
          </div>
        </div>
      </div>
        <div class="kcbxqy_neerfr">
            <?php if(!(empty($tui_teacher_list) || (($tui_teacher_list instanceof \think\Collection || $tui_teacher_list instanceof \think\Paginator ) && $tui_teacher_list->isEmpty()))): if(is_array($tui_teacher_list) || $tui_teacher_list instanceof \think\Collection || $tui_teacher_list instanceof \think\Paginator): $i = 0; $__LIST__ = $tui_teacher_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                    <div class="clearfix teacher-list" style="">
                        <div class="teachimg"> <a href="<?php echo url('teacher/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank"> <img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['head_img']); ?>" /> </a> </div>
                        <div class="teachdes">
                            <h3> <a href="<?php echo url('teacher/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank"><?php echo htmlentities($val['name']); ?></a> </h3>
                            <p>.....................................................</p>
                            <p class="tea-intro"><?php echo htmlentities($val['introduction']); ?></p>
                            <a href="<?php echo url('teacher/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank" class="checkdetail_btn">查看详情</a>
                        </div>
                    </div>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            
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
<script type="text/javascript" src="/static/home/js/index1.js"></script>
</html>
