<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

	<html lang="en">

	<head>

		<title>泓涂商贸-跳转提示</title>

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

	

		<style type="text/css">

		*{ padding: 0; margin: 0; }

		body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }

		.system-message{width:40%;background:#fff;margin:20px auto;text-align: center;box-shadow:1px 1px 3px #e2e2e2;border: 1px solid #336699;padding-bottom: 10px;}

		.system-message h1{ font-size:15px; font-weight: normal; line-height:40px;height:40px;text-align: center;background: #336699;color:#fff;}

		.system-message .jump{height:30px;line-height:30px;font-size:14px;color:424242;}

		.system-message .success,.system-message .error{ line-height:3em; font-size:14px;color:#ff0000;}

		.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
		
		#wait{font-weight:200;color:#336699;}

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

	<div class="system-message">

	<?php if(isset($message)): ?><h1>提示信息</h1>

	<p class="success"><?php echo($message); ?></p>

	<?php else: ?>

	<h1>提示信息</h1>

	<p class="error"><?php echo($error); ?></p><?php endif; ?>

	<p class="detail"></p>

	<p class="jump">

	泓涂商贸：页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>

	</p>

	</div>

	<script type="text/javascript">

	(function(){

	var wait = document.getElementById('wait'),href = document.getElementById('href').href;

	var interval = setInterval(function(){

		var time = --wait.innerHTML;

		if(time <= 0) {

			location.href = href;

			clearInterval(interval);

		};

	}, 1000);

	})();

	</script>

	<div id="footer">
	<p><?php echo ($site_copyright); ?></p>
    <p><?php echo ($site_icp); ?></p>
</div>
<div class="footerbottom">
	<a href="<?php echo ($site_host); ?>/admin" target="_blank">[ 网站管理 ]</a>
	 <?php echo ($site_tongji); ?>
</div>
 <div id="backtotop"><i class="fa fa-arrow-circle-up"></i></div>



</body>

</html>