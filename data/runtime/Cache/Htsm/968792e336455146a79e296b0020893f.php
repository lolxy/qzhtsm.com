<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

	<html>

	<head>

		<title>找不到您要找的页面！</title>

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

	
			
		<style>
		.text
		{
			line-height:28px;
			font-family: microsoft yahei,microsoft jhenghei,verdana,tahoma;
			font-size:13px;
			color:#62261c;
			float:left;
			padding-top:10px;
		}
		.text a,.text a:link
		{
			color:#66261c;
			text-decoration:underline;
			font-weight:bold;
		}
		.text a:hover
		{
			text-decoration:none;
		}
		</style>

	</head>

<body class="">

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

<div class="container tc-main">

	<div class="row">
    
    	<!--bof rightbox-->
    
    	<div class="col-xs-12">

			<div class="tc-box">

				<div style="width:100%; height:100%;">
                    <div style="padding:50px 0px;overflow:hidden;">
                        <div class="col-xs-6">
                        <img src="/tpl/qzhtsm/Public/images/404/nu.gif" class="img-responsive pull-right">
                        </div>
                        <div class="col-xs-6">
                            <img src="/tpl/qzhtsm/Public/images/404/err_404.gif" class="img-responsive">
                            <div class="text">莫有办法,找不到这个页面<br>回到 <a href="<?php echo ($site_host); ?>">泓涂商贸官网</a>首页</div>
                        </div>
                    </div>
                </div>
                
		    </div>	    

		</div>
        
        <!--eof rightbox-->
		
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