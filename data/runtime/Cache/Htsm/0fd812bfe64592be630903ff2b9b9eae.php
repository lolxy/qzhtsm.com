<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

	<html>

	<head>

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

	

		<style>

			#article_content img{height:auto !important}

			#article_content {word-wrap: break-word;}

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

		<div class="col-xs-12 col-lg-9">

			<div class="tc-box article-box articleBox">

		    	<h2><?php echo ($post_title); ?></h2>

		    	<div class="article-infobox">

		    		<span><?php echo ($post_date); ?> &nbsp;作者：<?php echo ((isset($user_nicename) && ($user_nicename !== ""))?($user_nicename):$user_login); ?> &nbsp;</span>

		    		<span>

		    			<a href="javascript:;"><i class="fa fa-eye" style="margin-right:5px;"></i><span><?php echo ($post_hits); ?></span></a>

					</span>

		    	</div>

		    	<div id="article_content">

		    	<?php echo ($post_content); ?>

		    	</div>

                <?php if(!empty($post_source)): ?><div class="beizhu">

                        注：本文转载自<?php echo ($post_source); ?>，转载目的在于传递更多信息，并不代表本网赞同其观点和对其真实性负责。如有侵权行为，请联系我们，我们会及时删除。
                    </div><?php endif; ?>

				<div>
                	<?php if(!empty($prev) or !empty($next)): ?><div class="prev-next">

					<?php if(!empty($prev)): $tid=$prev['tid']; $prevposts=sp_sql_post($tid,'field:post_title;'); ?>
                    
                    <div class="col-lg-6 col-xs-12 pull-left">
						<a href="<?php echo U('article/index',array('id'=>$prev['tid']));?>" class="btn btn-primary pull-left">上一篇</a>
						<span class="prevart"><?php echo ($prevposts['post_title']); ?></span>
					</div><?php endif; ?>

					<?php if(!empty($next)): $tid=$next['tid']; $nextposts=sp_sql_post($tid,'field:post_title;'); ?>
					
                    <div class="col-lg-6 col-xs-12 pull-right">
						<a href="<?php echo U('article/index',array('id'=>$next['tid']));?>" class="btn btn-warning pull-right">下一篇</a>
                    	<span class="nextart"><?php echo ($nextposts['post_title']); ?></span>
					</div><?php endif; ?>
                    </div><?php endif; ?>

					<div class="clearfix"></div>

				</div>


		    </div>


		</div>

		<div class="col-lg-3 col-xs-12 left-box mt10">  	

        	<div class="tc-box hotsnewbox">

	        	<div class="headtitle">

	        		<h2>企业热点</h2>

	        	</div>

	        	<div class="ranking">

	        		<?php $hot_articles=sp_sql_posts("cid:$htsm_index_lastnews;field:post_title,post_excerpt,tid,smeta;order:post_hits desc;limit:5;"); ?>

		        	<ul class="unstyled">

		        		<?php if(is_array($hot_articles)): foreach($hot_articles as $key=>$vo): $top=$key<3?"top3":""; ?>

							<li class="<?php echo ($top); ?>"><i><?php echo ($key+1); ?></i><a title="<?php echo ($vo["post_title"]); ?>" href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>"><?php echo ($vo["post_title"]); ?></a></li><?php endforeach; endif; ?>

					</ul>

				</div>

			</div>
            
            <!--分享-->
            	<div class="tc-box first-box shapebox">
<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
        	</div>
            <!--分享结束-->

			<div class="tc-box" style="margin-bottom:0px;">

	        	<div class="headtitle">

	        		<h2>最新动态</h2>

	        	</div>

	        	<?php $last_post=sp_sql_posts("cid:$htsm_last_post;field:post_title,post_excerpt,tid,smeta;order:listorder asc;limit:5;"); ?>

	        	<div class="posts">

	        		<?php if(is_array($last_post)): foreach($last_post as $key=>$vo): $smeta=json_decode($vo['smeta'],true); ?>

			        	<dl class="dl-horizontal">

				            <dt>

					            <a class="img-wraper" href="<?php echo U('article/index',array('id'=>$vo['tid']));?>">

					            	<?php if(empty($smeta['thumb'])): ?><img src="/tpl/qzhtsm/Public/images/default_tupian4.png" class="img-responsive" alt="<?php echo ($vo["post_title"]); ?>"/>

									<?php else: ?> 

										<img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive" alt="<?php echo ($vo["post_title"]); ?>" /><?php endif; ?>

					            </a>

				            </dt>

				            <dd><a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>"><?php echo msubstr($vo['post_excerpt'],0,32);?></a></dd>

				        </dl><?php endforeach; endif; ?>

		        </div>

			</div>
            
            
            <!--联系我们-->
        	<div class="tc-box ywbox">
                <div class="list-group">
                  <div class="headtitle">
                      <h2>
                            联系我们
                      </h2>
                  </div>
                  <ul>
                  <li class="list-group-item"><i class="fa fa-tty fa-sm"></i>联系电话：<?php echo ($tel); ?></li>
                  <li class="list-group-item"><i class="fa fa-qq fa-sm"></i>联系QQ：
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($oicq); ?>&site=qq&menu=yes">
						<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo ($oicq); ?>:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>
					</a></li>
                  <li class="list-group-item"><i class="fa fa-users fa-sm"></i>联系人：<?php echo ($lianxiren); ?></li>
                  <li class="list-group-item"><i class="fa fa-map-marker fa-sm"></i>联系地址：<?php echo ($address); ?></li>
                  </ul>
                </div>
            </div>
        <!--联系我们结束-->
            
            

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