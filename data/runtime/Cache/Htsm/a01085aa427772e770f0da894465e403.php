<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<title><?php echo ($post_title); ?> <?php echo ($site_name); ?> </title>

	<meta name="keywords" content="<?php echo ($post_keywords); ?>" />

	<meta name="description" content="<?php echo ($post_excerpt); ?>">

    	<?php  function _sp_helloworld(){ echo "hello Htsm!"; } function _sp_helloworld2(){ echo "hello Htsm2!"; } function _sp_helloworld3(){ echo "hello Htsm3!"; } ?>

	<?php $htsm_index_lastnews=3; $htsm_hot_articles="3"; $htsm_last_post="3"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"HtsmX1.6.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"HtsmX1.6.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"HtsmX1.6.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>

	<meta name="author" content="Htsm">

	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    

    <!-- Set render engine for 360 browser -->

    <meta name="renderer" content="webkit">



   	<!-- No Baidu Siteapp-->

    <meta http-equiv="Cache-Control" content="no-siteapp"/>



    <!-- HTML5 shim for IE8 support of HTML5 elements -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

    <![endif]-->

	<link rel="icon" href="/tpl/qzhtsm/Public/images/favicon.ico" type="image/x-icon">

	<link rel="shortcut icon" href="/tpl/qzhtsm/Public/images/favicon.ico" type="image/x-icon">

    <link href="/tpl/qzhtsm/Public/simpleboot/themes/cmf/theme.min.css" rel="stylesheet">

    <link href="/tpl/qzhtsm/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <link href="/tpl/qzhtsm/Public/css/bootstrap.css" rel="stylesheet" type="text/css">

    <link href="/tpl/qzhtsm/Public/simpleboot/font-awesome/4.2.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">

	<!--[if IE 7]>

	<link rel="stylesheet" href="/tpl/qzhtsm/Public/simpleboot/font-awesome/4.2.0/css/font-awesome-ie7.min.css">

	<![endif]-->

	<link href="/tpl/qzhtsm/Public/css/style.css" rel="stylesheet">
    
    <script src="/tpl/qzhtsm/Public/js/jquery.js"></script>

	<style>

		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/

		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}

		#backtotop:hover{color:#333}

		#main-menu-user li.user{display: none}

	</style>

	

    <script src="http://api.map.baidu.com/api?v=1.3"></script> 

	<style>

	img{

	max-width: none;

	}

	</style>

</head>

<body class="body-white">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->

<?php echo hook('body_start');?>

<div class="navbar navbar-fixed-top navbarbox">

   <div class="navbar-inner">

   	<div class="container-fluid bg-balck">

    	<div class="container">

            <div class="head-top">

                <div class="col-xs-12 col-lg-4">

                    <p>欢迎您访问泉州泓涂商贸官网！</p>

                </div>

                <div class="col-xs-12 col-lg-6 col-lg-offset-6 pull-right hidden-xs">

                    <!--<div class="pull-right">

                    <a href="#" target="_blank">设为首页</a>

                    |

                    <a href="#" target="_blank">加入收藏</a>

                    |

                    <a href="#" target="_blank">保存到桌面</a>

                    </div>-->

                    <div class="pull-right searchbox">

                        <form method="post" class="form-inline" action="<?php echo U('htsm/search/index');?>">

                            <input type="text" class="" placeholder="请输入要搜索的关键字" name="keyword" value="<?php echo I('get.keyword');?>"/>

                            <input type="submit" class="btn btn-success" value="搜索"/>

                        </form>

                    </div>

                </div>	

            </div>

        </div>

    </div>

     <div class="container bg-default">
       	<div class="header-top">
          	<a class="btn btn-navbar navbar-toggle" id="toggle">

             <span class="icon-bar"></span>
    
             <span class="icon-bar"></span>
    
             <span class="icon-bar"></span>
    
           </a>

       		<a class="brand" href="<?php echo ($site_host); ?>"><img src="/tpl/qzhtsm/Public/images/logo.png"/></a>
        </div>

       <div class="collapse" id="navss">

       	<?php
 $effected_id=""; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>

       </div>

     </div>


   </div>

</div>

<script>
	$(function(){
		$("#toggle").click(function(){
			if($("#navss").hasClass("on")){
				$($("#navss")).hide().removeClass("on");
				}else{
					$($("#navss")).show().addClass("on");
					}
			});
		});
</script>



<div class="section slice no-padding">

        <div id="mapCanvas" class="map-canvas no-margin" style="height:400px;">

        	<script type="text/javascript">

			   var map = new BMap.Map("mapCanvas");            // 创建Map实例

			var point = new BMap.Point("118.573392","24.979145");    // 创建点坐标

			map.centerAndZoom(point,15);                // 初始化地图,设置中心点坐标和地图级别。

			map.enableScrollWheelZoom();                  //启用滚轮放大缩小

			//添加缩放控件

			map.addControl(new BMap.NavigationControl());  

			map.addControl(new BMap.ScaleControl());  

			map.addControl(new BMap.OverviewMapControl()); 

			

			var marker = new BMap.Marker(point); // 创建标注 

			map.addOverlay(marker); // 将标注添加到地图中

			var infoWindow = new BMap.InfoWindow("泉州泓涂商贸有限公司<br/><span class=''>地址：福建省泉州市南安市丰州镇西华村动车站边</span>"); // 创建信息窗口对象

			marker.openInfoWindow(infoWindow);

			   </script>

        </div>

    </div>

<div class="container tc-main">

    <div class="row pg-opt">
    
    <h2>联系我们</h2>

    <div class="col-xs-12 col-lg-6 messagebox">
                     
   <form class="" role="form" method="post" action="<?php echo u('api/guestbook/addmsg');?>">
   <div class="col-xs-12">
      <div class="form-group">
          	 <label for="username" class="control-label">姓名</label>
             <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" placeholder="请输入您的姓名" name="full_name" id="username">
          </div>
      </div>
  </div>
  
  <div class="col-xs-12">
      <div class="form-group">
        <label for="email" class="control-label">邮箱</label>
      <div class="input-group">
        <span class="input-group-addon">@</span>
        <input type="email" class="form-control" placeholder="请输入您的邮箱" name="email" id="email">
      </div>
      </div>
  </div>
  
  <div class="col-xs-12">
      <div class="form-group">
            <label for="message" class="control-label">内容</label>
                <textarea class="form-control" id="message" placeholder="在这儿填写留言内容" style="height:100px;" name="msg"></textarea>
      </div>
  </div>
  
  <div class="col-xs-12">
		<div class="form-group">
			<label for="verify">验证码</label>
				<input type="text" id="verify" class="form-control" placeholder="请输入验证码"  name="verify" autocomplete="off">
				<div style="margin:10px auto;text-align:right;">
                <?php echo sp_verifycode_img('code_len=4&font_size=20&width=238&height=34&font_color=&background=','style="cursor: pointer;vertical-align: top;" title="点击获取"');?>
                </div>
		</div>
 </div>
  
  <button type="submit" class="btn btn-primary">提交留言</button>
</form>

                    </div>

                    <div class="col-xs-12 col-lg-6 contactsbox">

                        	<div class="contact-cn">

                                <h3 class="section-title">联系方式</h3>

                                <div class="contact-info">

                                    <h5>地址</h5>

                                    <p><?php echo ($address); ?></p>

                                    

                                    <h5>邮箱</h5>

                                    <p><?php echo ($site_admin_email); ?></p>

                                    

                                    <h5>电话</h5>

                                    <p><?php echo ($tel); ?></p>

                                </div>

                            </div>

                            <div class="contact-en">

                                <h3 class="section-title">Contact</h3>

                                <div class="contact-info">

                                    <h5>Address</h5>

                                    <p><?php echo ($address_en); ?></p>

                                    

                                    <h5>Email</h5>

                                    <p><?php echo ($site_admin_email); ?></p>

                                    

                                    <h5>Phone</h5>

                                    <p><?php echo ($tel); ?></p>

                                </div>

                            </div>

						<div class="clearfix"></div>
                        <div class="kjjl">
                        <h3 class="section-title">快捷交流</h3>
                        <p>

                       点击以下QQ图标，免加好友即时洽谈合作

                        </p>

                        <div class="social-media">

                            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($oicq); ?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo ($oicq); ?>:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
                        </div>
                        
                        </div>

                    </div>

                </div>

  

</div>


 <div id="footer">
	<p><?php echo ($site_copyright); ?></p>
    <p><?php echo ($site_icp); ?></p>
</div>
<div class="footerbottom">
	<a href="<?php echo ($site_host); ?>/admin" target="_blank">[ 网站管理 ]</a>
	 <?php echo ($site_tongji); ?>
</div>
 <div id="backtotop"><i class="fa fa-arrow-circle-up"></i></div>


<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/",
    JS_ROOT: "statics/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/statics/js/jquery.js"></script>
    <script src="/statics/js/wind.js"></script>
    <script src="/tpl/qzhtsm/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/statics/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.user.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.user.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>





</body>

</html>