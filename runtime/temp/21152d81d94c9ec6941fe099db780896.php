<?php /*a:3:{s:72:"/www/wwwroot/home.dulinjiaoyu.com/application/home/view/index/index.html";i:1554436375;s:79:"/www/wwwroot/home.dulinjiaoyu.com/application/home/view/common/common_head.html";i:1552811059;s:81:"/www/wwwroot/home.dulinjiaoyu.com/application/home/view/common/common_bottom.html";i:1552456554;}*/ ?>
﻿<!DOCTYPE html>
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
          <tr>
            <td style="position: relative;"><input id="text" type="text" placeholder="搜索">
              <input type="button" value="Go">
              <div id="word"></div></td>
          </tr>
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
<div class="dhtsz">
    <div class="head-mj clearfix">
        <div class="head-mj-inner">
            <div class="head-mj-i-r">全部课程</div>
            <div class="head-mj-i-l">
                <ul class="clearfix">
                    <li >时尚西点专业
                        <a href="javascript:;"></a>
                        <div style="left: -355px; height: 0px;" class="">
                            <p class="mj-btn">
                                aaaaaaaa
                            </p>
                        </div>
                    </li>
                    <li >金领大厨专业
                        <a href="javascript:;"></a>
                        <div style="left: -495px; height: 0px;" class="">
                            <p class="mj-btn">
                                bbbbbbbbbbbbbbbbbb
                            </p>
                        </div>
                    </li>
                    <li>金领大厨专业
                        <a href="javascript:;"></a>
                        <div style="left: -495px; height: 0px;" class="">
                            <p class="mj-btn">
                                cccccccccccccccc
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="btn_div">
                <a target="_blank" class="headbtn" href="/home/user/login">登录&nbsp; 注册</a>
            </div>
        </div>
    </div>
</div>
<div class="example">
  <div class="ft-carousel" id="carousel_1">
    <ul class="carousel-inner">
      <li class="carousel-item"><img src="/static/home/img/index/a1.jpg" alt="都林教育" /></li>
      <li class="carousel-item"><img src="/static/home/img/index/a2.jpg" alt="都林教育" /></li>
      <li class="carousel-item"><img src="/static/home/img/index/a3.jpg" alt="都林教育" /></li>
    </ul>
  </div>
</div>
<script src="/static/home/js/jquery.min.js"></script> 
<script src="/static/home/js/ft-carousel.min.js"></script> 
<script type="text/javascript">
  $("#carousel_1").FtCarousel();

</script>
<div class="kcsz">
    <h2>推荐课程</h2>
        <div class="kcsz_bt">公务员、事业单位（各盟市) 、政法干警考试、司法考试等各类职业人才的招录考试、笔试及面试培训</div>
            <div class="tab">
                <ul class="tab-hd">
                    <div class="tab-hd_hd" class="tab-hd11">
                    全部课程
                    </div>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                        <div class="tab-hd_hd" data-id="<?php echo htmlentities($val['id']); ?>" ><?php echo htmlentities($val['title']); ?></div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <ul class="tab-bd">
                    <!-- 全部课程 begin -->
                    <li class="thisclass">
                        <div class="kcsz_ner">
                            <ul>
                                <?php if(is_array($course_list) || $course_list instanceof \think\Collection || $course_list instanceof \think\Paginator): $i = 0; $__LIST__ = $course_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
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
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </li>
                    <!-- 全部课程 end -->
                    <!-- 法考专项课程 begin -->
                    <li>
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
                    </li>
                    <!-- 法考专项课程 end -->
                    <!-- 法考真题解析课程 begin -->
                    <li>
                        <div class="kcsz_ner">
                            <ul>
                                <?php if(is_array($course_list) || $course_list instanceof \think\Collection || $course_list instanceof \think\Paginator): $i = 0; $__LIST__ = $course_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($val['class_type_id'] == '2'): ?>
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
                    </li>
                    <!-- 法考真题解析课程 end -->
                    <!-- 法考免费试听课 begin -->
                    <li>
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
                    </li>
                    <!-- 法考免费试听课 end -->
                </ul>
            </div>
        <div class="kcsz_zx"><a href="<?php echo url('course/course_list'); ?>?classType_id=0&classSmallType_id=0&teaching_type=0" target="_blank">更多课程</a></div>
</div>
<div class="kcb_bg">
    <h3>课程包</h3>
    <?php if(!(empty($package_list) || (($package_list instanceof \think\Collection || $package_list instanceof \think\Paginator ) && $package_list->isEmpty()))): if(is_array($package_list) || $package_list instanceof \think\Collection || $package_list instanceof \think\Paginator): $i = 0; $__LIST__ = $package_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
            <p><a href="<?php echo url('course/bao_info'); ?>?id=<?php echo htmlentities($val['id']); ?>" target="_blank"><?php echo htmlentities($val['title']); ?></a></p>
            <div  class="kcb_bgner">
                <div class="kcb_bgner_fl"><img src="<?php echo htmlentities($admin_path); ?><?php echo htmlentities($val['pic']); ?>" style="height: 200px;width: 200px;" alt="都林教育"/></div>
                <div class="kcb_bgner_fr">
                    <p><?php echo htmlentities($classType_list[$val['class_type_id']]['title']); ?>有效天数：<?php echo htmlentities($val['day']); ?>天        打包价格：<span>￥<?php echo htmlentities($val['price']); ?></span> ￥2?2?6?5?.?0?0?</p>
                    <h3><?php echo htmlentities($val['describe']); ?></h3>
                    <div class="kcb_bgan_fl"> <a href="#">我要购买</a></div>
                    <div class="kcb_bgan_fr"> <a href="#">课程详情</a></div>
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
<script type="text/javascript" src="http://www.nmgxdf.com/templets/spweb/js/jquery.min.js"></script><script type="text/javascript" src="http://www.nmgxdf.com/templets/spweb/js/footer.js"></script>

</body>
</html>
