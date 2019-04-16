<?php /*a:3:{s:84:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\index\index.html";i:1555339252;s:91:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_head.html";i:1554718840;s:93:"E:\phpStudy\PHPTutorial\WWW\home.wangzhan.com\application\home\view\common\common_bottom.html";i:1554719966;}*/ ?>
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

		
	
<!--新加js-->	<!--新加js-->	<!--新加js-->	<!--新加js-->
<!-- <script src="js/jquery-1.11.0.js"></script> -->
<script src="/static/home/js/index/jquery.SuperSlide.2.1.1.js"></script>
<script src="/static/home/js/index/waypoints.min.js"></script>
<script src="/static/home/js/index/main.js">//主要逻辑代码</script>
<!--新加js-->	<!--新加js-->	<!--新加js-->	<!--新加js-->
<script type="text/javascript">

$(function(){
    function tabs(tabTit,on,tabCon){
        $(tabTit).children().hover(function(){
            $(this).addClass(on).siblings().removeClass(on);
            var index = $(tabTit).children().index(this);
           	$(tabCon).children().eq(index).show().siblings().hide();
    	});
	};
    tabs(".tab-hd","active",".tab-bd");
});
	
</script>
</head>

<body>
<div class="logo_bg">
  <div class="logo">
    <div class="logo_fl"><img src="/static/home/img/index/logo.jpg"  alt="都林教育"/></div>
    <div class="logo_fr">
      <div class="logo_frsh"><img src="/static/home/img/index/tel.jpg"  alt="都林教育"/></div>
      <div class="logo_frxi">
        <table align="center" cellspacing="0" border="0" >
          <!-- <tr>
            <td style="position: relative;"><input id="text" type="text" placeholder="搜索">
              <input type="button" value="Go">
              <div id="word"></div></td>
          </tr> -->
        </table>
      </div>
      <div class="logo_dh">
        <ul>
          <Li><a target="_blank" href="/">都林教育&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  /</a> </Li>
          <Li><a target="_blank" href="<?php echo url('course/course_list'); ?>?classType_id=0&classSmallType_id=0&teaching_type=0">发现课程&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  /</a> </Li>
          <Li><a target="_blank" href="<?php echo url('course/bao_list'); ?>?classType_id=0"> 课程包 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; /</a> </Li>
          <Li><a target="_blank" href="<?php echo url('teacher/list'); ?>">名师专区</a> </Li>
        </ul>
      </div>
    </div>
  </div>
</div>
	<!--新加div-->	<!--新加div-->	<!--新加div-->	<!--新加div-->	<!--新加div-->	<!--新加div-->	<!--新加div-->	<!--新加div-->	<!--新加div-->	<!--新加div-->	<!--新加div-->
<div class="dhtsz">
	
	
		
  <div class="nav">
    <ul>
      <li id="m1" class="m on" style="background:#ff6600;height: 46px; border-radius: 5px;  margin-top: 20px;"> <a href="qbkc.html" class="aa1 mmm" id="sel">全部课程</a> </li>
      <li id="m6" class="m" style="height: 46px;  margin-top: 20px;" > <a href="#" class="aa6 mmm">法考专项课程</a>
        <div class="sub">
          <div class="nav_xiao">
            <div class="xiao_six">
              <ul>
                <li class="bgs1">
                    <div class="xiao_six_con">
                        <h2 class="xiao_six_l">学科小类名称</h2>
                        <?php if(is_array($small_type_list1) || $small_type_list1 instanceof \think\Collection || $small_type_list1 instanceof \think\Paginator): $i = 0; $__LIST__ = $small_type_list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                            <a href="<?php echo url('course/course_list'); ?>?classType_id=1&classSmallType_id=<?php echo htmlentities($val['id']); ?>&teaching_type=0"><?php echo htmlentities($val['title']); ?>&nbsp;&nbsp;</a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li id="m6" class="m" style="height: 46px;  margin-top: 20px;" > <a href="#" class="aa6 mmm">法考专项课程</a>
        <div class="sub">
          <div class="nav_xiao">
            <div class="xiao_six">
              <ul>
                <li class="bgs1">
                    <div class="xiao_six_con">
                        <h2 class="xiao_six_l">学科小类名称</h2>
                        <?php if(is_array($small_type_list2) || $small_type_list2 instanceof \think\Collection || $small_type_list2 instanceof \think\Paginator): $i = 0; $__LIST__ = $small_type_list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                            <a href="<?php echo url('course/course_list'); ?>?classType_id=2&classSmallType_id=<?php echo htmlentities($val['id']); ?>&teaching_type=0"><?php echo htmlentities($val['title']); ?>&nbsp;&nbsp;</a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li id="m6" class="m" style="height: 46px;  margin-top: 20px;" > <a href="#" class="aa6 mmm">法考专项课程</a>
        <div class="sub">
          <div class="nav_xiao">
            <div class="xiao_six">
              <ul>
                <li class="bgs1">
                    <div class="xiao_six_con">
                        <h2 class="xiao_six_l">学科小类名称</h2>
                        <?php if(is_array($small_type_list3) || $small_type_list3 instanceof \think\Collection || $small_type_list3 instanceof \think\Paginator): $i = 0; $__LIST__ = $small_type_list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                            <a href="<?php echo url('course/course_list'); ?>?classType_id=3&classSmallType_id=<?php echo htmlentities($val['id']); ?>&teaching_type=0"><?php echo htmlentities($val['title']); ?>&nbsp;&nbsp;</a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
    <?php if(empty($uid) || (($uid instanceof \think\Collection || $uid instanceof \think\Paginator ) && $uid->isEmpty())): ?>
        <div class="dao_lf"><a href="/home/user/login" target="_blank">登录</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/home/user/login" target="_blank">注册</a></div>
    <?php else: ?>
        <div style="padding-top: 30px;"><a href="<?php echo url('my/index'); ?>">都林学员_<?php echo htmlentities($uid); ?></a>&nbsp;&nbsp;<a href="<?php echo url('user/login_out'); ?>">注销</a></div>
    <?php endif; ?>
</div>
	
	
	<!--新加div-->	<!--新加div-->	<!--新加div-->	<!--新加div-->	<!--新加div-->	<!--新加div-->	<!--新加div-->	<!--新加div-->	
	
<div class="example">
  <div class="ft-carousel" id="carousel_1">
    <ul class="carousel-inner">
      <li class="carousel-item"><img src="/static/home/img/index/a1.jpg" alt="都林教育" /></li>
      <li class="carousel-item"><img src="/static/home/img/index/a2.jpg" alt="都林教育" /></li>
      <li class="carousel-item"><img src="/static/home/img/index/a3.jpg" alt="都林教育" /></li>
    </ul>
  </div>
</div>
<script src="js/ft-carousel.min.js"></script> 
<script type="text/javascript">
	$("#carousel_1").FtCarousel();

</script>
	<!--注意这里去掉了一个js 否则导航js实现不了 你自己测试一下就好--> 
<div class="kcsz" style="padding-bottom: 20px;">
  <h2>推荐课程</h2>
  <div class="kcsz_bt">公务员、事业单位（各盟市) 、政法干警考试、司法考试等各类职业人才的招录考试、笔试及面试培训</div>
	
	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->
  <div class="wrapper">
    <button class="active">全部课程</button>
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
        <button data-id="<?php echo htmlentities($val['id']); ?>"><?php echo htmlentities($val['title']); ?></button>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <div class="content" style="display: block;">
      <div class="kcsz_ner">
        <ul>
            <?php if(is_array($course_list) || $course_list instanceof \think\Collection || $course_list instanceof \think\Paginator): $i = 0; $__LIST__ = $course_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
            <a href="<?php echo url('course/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank">
                <li>
                    <img src="<?php echo htmlentities($val['pic']); ?>" alt="内蒙古都林教育"/>
                    <h3><?php echo htmlentities($val['title']); ?></h3>
                    <div>
                      <div class="kcsz_ner_fr"><?php echo htmlentities($val['cang']); ?></div>
                      <div class="kcsz_ner_righ">￥<?php echo htmlentities($val['price']); ?>元</div>
                    </div>
                </li>
            </a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
    <div class="content">
        <div class="kcsz_ner">
            <ul>
                <?php if(is_array($course_list) || $course_list instanceof \think\Collection || $course_list instanceof \think\Paginator): $i = 0; $__LIST__ = $course_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($val['class_type_id'] == '1'): ?>
                        <a href="<?php echo url('course/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank">
                            <li>
                                <img src="<?php echo htmlentities($val['pic']); ?>" alt="内蒙古都林教育"/>
                                <h3><?php echo htmlentities($val['title']); ?></h3>
                                <p><?php echo htmlentities($val['describe']); ?></p>
                                <div>
                                  <div class="kcsz_ner_fr"><?php echo htmlentities($val['cang']); ?></div>
                                  <div class="kcsz_ner_righ">￥<?php echo htmlentities($val['price']); ?>元</div>
                                </div>
                            </li>
                        </a>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <div class="content">
      <div class="kcsz_ner">
        <ul>
            <?php if(is_array($course_list) || $course_list instanceof \think\Collection || $course_list instanceof \think\Paginator): $i = 0; $__LIST__ = $course_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($val['class_type_id'] == '2'): ?>
                    <a href="<?php echo url('course/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank">
                        <li><img src="<?php echo htmlentities($val['pic']); ?>" alt="内蒙古都林教育"/>
                        <h3><?php echo htmlentities($val['title']); ?></h3>
                        <p><?php echo htmlentities($val['describe']); ?></p>
                        <div>
                          <div class="kcsz_ner_fr"><?php echo htmlentities($val['cang']); ?></div>
                          <div class="kcsz_ner_righ">￥<?php echo htmlentities($val['price']); ?>元</div>
                        </div>
                        </li>
                    </a>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
    <div class="content">
      <div class="kcsz_ner">
        <ul>
            <?php if(is_array($course_list) || $course_list instanceof \think\Collection || $course_list instanceof \think\Paginator): $i = 0; $__LIST__ = $course_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($val['class_type_id'] == '3'): ?>
                    <a href="<?php echo url('course/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank">
                        <li>
                            <img src="<?php echo htmlentities($val['pic']); ?>" alt="内蒙古都林教育"/>
                            <h3><?php echo htmlentities($val['title']); ?></h3>
                            <p><?php echo htmlentities($val['describe']); ?></p>
                            <div>
                              <div class="kcsz_ner_fr"><?php echo htmlentities($val['cang']); ?></div>
                              <div class="kcsz_ner_righ">￥<?php echo htmlentities($val['price']); ?>元</div>
                            </div>
                        </li>
                    </a>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </div>
  <script type="text/javascript">
			// 将按钮和盒子拿出来
			var btn = document.getElementsByTagName('button');
			var div = document.getElementsByClassName('content');
			// 每一个button上面绑定事件
			for(var n = 0; n < btn.length; n++) {
				//生成闭包的立即函数
				(function(i) {
					btn[n].onclick = function() {
						for(var m = 0; m < btn.length; m++) {
							btn[m].className = ""; //清空效果
							div[m].style.display = "none";
						}
						//当前点击的button设置变化
						this.className = "active";
						div[i].style.display = "block";
					}
				}(n))
			}
		</script>
	
	
	
		<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->	<!--课程修改-->
  <div class="kcsz_zx"><a href="<?php echo url('course/course_list'); ?>?classType_id=0&classSmallType_id=0&teaching_type=0" target="_blank">更多课程</a></div>
</div>

<div class="kcb_bg" >
  <h3>课程包</h3>
  <?php if(!(empty($package_list) || (($package_list instanceof \think\Collection || $package_list instanceof \think\Paginator ) && $package_list->isEmpty()))): if(is_array($package_list) || $package_list instanceof \think\Collection || $package_list instanceof \think\Paginator): $i = 0; $__LIST__ = $package_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
          <p><a href="<?php echo url('course/bao_info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank"><?php echo htmlentities($val['title']); ?></a></p>
          <div  class="kcb_bgner">
              <div class="kcb_bgner_fl"><img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['pic']); ?>" style="height: 200px;width: 200px;" alt="都林教育"/></div>
              <div class="kcb_bgner_fr">
                  <p><?php echo htmlentities($classType_list[$val['class_type_id']]['title']); ?>有效天数：<?php echo htmlentities($val['day']); ?>天        打包价格：<span>￥<?php echo htmlentities($val['price']); ?></span> ￥2?2?6?5?.?0?0?</p>
                  <h3><?php echo htmlentities($val['describe']); ?></h3>
                  <div class="kcb_bgan_fl"> <a href="<?php echo url('pay/index'); ?>?package_id=<?php echo htmlentities($val['id']); ?>">我要购买</a></div>
                  <div class="kcb_bgan_fr"> <a href="<?php echo url('course/bao_info'); ?>?id=<?php echo htmlentities($val['id']); ?>">课程详情</a></div>
              </div>
          </div>  
      <?php endforeach; endif; else: echo "" ;endif; endif; ?>
</div>
<div class="news">
  <h2>新闻资讯</h2>
  <div class="news_ner">
        <div class="news_nerfl"><img src="/static/home/img/index/new.jpg" height="404px" width="467px" alt="都林教育"/></div>
        <div class="news_nerfr">
            <ul>
                <?php if(!(empty($article_list) || (($article_list instanceof \think\Collection || $article_list instanceof \think\Paginator ) && $article_list->isEmpty()))): if(is_array($article_list) || $article_list instanceof \think\Collection || $article_list instanceof \think\Paginator): $i = 0; $__LIST__ = $article_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                        <li>
                            <h3><a href="<?php echo url('article/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank"><?php echo htmlentities($val['title']); ?></a></h3>
                            <p><a href="<?php echo url('article/info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank"><?php echo htmlentities($val['introduction']); ?></a></p>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
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
