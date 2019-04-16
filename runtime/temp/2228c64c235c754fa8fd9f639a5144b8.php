<?php /*a:3:{s:71:"/www/wwwroot/home.dulinjiaoyu.com/application/home/view/user/login.html";i:1553017128;s:79:"/www/wwwroot/home.dulinjiaoyu.com/application/home/view/common/common_head.html";i:1552811059;s:81:"/www/wwwroot/home.dulinjiaoyu.com/application/home/view/common/common_bottom.html";i:1552456554;}*/ ?>
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

		

<link rel="stylesheet" type="text/css" href="/static/home/css/login/login.css" />
<!-- <script src="/static/home/js/login/main01.js"></script> -->
</head>

<body>
	<div class="ms_top">
		<div class="ms_top_fl">
		<h3>内蒙古都林教育</h3>
	    <div class="ms_top_flner">
			<ul>
	    		<li><a href="/" target="_blank">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
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
				<!-- <li><a href="denglu.html" target="_blank">登录</a></li>
				<li><a href="denglu.html" target="_blank">注册</a></li> -->
			</ul>
		</div>
	</div>

</div>

<div class="loginwrap">
	<div class="login_con">
		<!--<div class="header clear">-->
			<!--<a href="#" class="header_logo"><img src="/img/web/login_logo.png" height="45" width="161" alt="" /></a>-->
		<!--</div>-->
		<div class="login_bg">
			<div class="login_con">
				<div class="login_con_inner">
					<div class="login_top">
						<ul class="clearfix">
						
							<li class="active">
								<a href="">注册/登录</a>
							</li>

						</ul>
					</div>
					<div class="login_bottom">
						<div class="login_tab_con">
							<div class="login_code">
								<img src="/api/web/user/qrLoginImage"  alt="" class="erweima_auto"/>
							</div>
							
							<div class="iconList">
								<ul class="clearfix">
									<li>
										<span><img src="/img/web/ic_login_sec.png"  alt="" /></span>
										<p>安全</p>
									</li>
									<li>
										<span><img src="/img/web/ic_login_effi.png"  alt="" /></span>
										<p>高效</p>
									</li>
									<li>
										<span><img src="/img/web/ic_login_bianjie.png"  alt="" /></span>
										<p>便捷</p>
									</li>
								</ul>
							</div>

						</div>
						<div class="login_tab_con show">
                            <ul>
                        		<li class="input_mobile mobile_error_border">
                             		<input type="text" placeholder="请输入手机号" class="login_mobile" id="user_name" />
                        		</li>
								<li class="mobile_error ">
									<p class="text-red hide" id="mobile_error_tip"><img src="/img/web/ic_error.png" height="15" width="14" alt="" class="ic_error_tip"/>请输入正确的手机号</p>
								</li>
	                         	<li class="input_checkCode clearfix">
                             		<input type="text" placeholder="请输入密码" class="login_code" id="user_pwd" />
	                        	</li>

								<li class="mobile_error">
									<p class="text-red hide" id="code_error_tip"><img src="/img/web/ic_error.png" height="15" width="14" alt="" class="ic_error_tip"/>请输入正确的验证码</p>
								</li>
                          		<li class="sign_in"><a href="javascript:;" class="login_register blue_bg" id="login_register">立即注册/登录</a></li>
	                        	<li class="login_tips">
	                        		提示：若未注册，将自动注册内蒙古都林教育账号   
	                        	</li>
                        	</ul>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer hide">
			<p>课程内容版权均归 北京方圆内蒙古都林教育科技有限公司 所有 </p>
		</div>
	</div>
</div>
<script>

	// 验证手机号
		function isPhoneNo(phone) { 
		var pattern = /^1[34578]\d{9}$/; 
		return pattern.test(phone); 
	}

	// 验证手机号
	$('#user_name').blur(function(){
		var user_name = $('#user_name').val();
		if(!isPhoneNo(user_name)){
			$("#mobile_error_tip").show();
			$('#user_name').focus();
			return false;
		}else{
			$("#mobile_error_tip").hide();
		}
	});

	// 登录、注册
	$('.login_register').click(function(){
		var user_name = $('#user_name').val();
		var user_pwd = $('#user_pwd').val();
		if(!user_name){
			$("#mobile_error_tip").show();
			$("#mobile_error_tip").html('请输入正确的手机号！');
			$('#user_name').focus();
			return false;
		}
		if(!user_pwd){
			$("#code_error_tip").show();
			$("#code_error_tip").html('密码不能为空！');
			$('#user_pwd').focus();
			return false;
		}else{
			// var url = '<?php echo htmlentities($admin_path); ?>'+'api/User/check_mobile';
			var url = "<?php echo url('check_mobile'); ?>";
			$.ajax({
				url : url,
				data : {user_name:user_name,user_pwd:user_pwd},
				dataType : 'json',
				type : 'POST',
				success : function( msg ){
					if( msg.code==2 ){
						window.location.href="/";
					}else{
						$("#code_error_tip").show();
						$("#code_error_tip").html(msg.message);
						$('#user_pwd').focus();
						return false;
					}
				}
			});
		}
	});

</script>>
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
