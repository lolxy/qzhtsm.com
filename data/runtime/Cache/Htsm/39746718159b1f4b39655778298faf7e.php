<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

	<html>

	<head>

		<title><?php echo ($site_seo_title); ?> <?php echo ($site_name); ?></title>

		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />

		<meta name="description" content="<?php echo ($site_seo_description); ?>">

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



        <link rel="stylesheet" href="/tpl/qzhtsm/Public/css/swiper.min.css">        
        <script src="/tpl/qzhtsm/Public/js/jquery.js"></script>
    	<script src="/tpl/qzhtsm/Public/js/bootstrap.min.js"></script>
        <script src="/tpl/qzhtsm/Public/js/swiper.jquery.min.js"></script>

		<style>

			.caption-wraper{position: absolute;left:50%;bottom:2em;}

			.caption-wraper .caption{

			position: relative;left:-50%;

			background-color: rgba(0, 0, 0, 0.54);

			padding: 0.4em 1em;

			color:#fff;

			-webkit-border-radius: 1.2em;

			-moz-border-radius: 1.2em;

			-ms-border-radius: 1.2em;

			-o-border-radius: 1.2em;

			border-radius: 1.2em;

			}

			@media (max-width: 767px){

				.sy-box{margin: 12px -20px 0 -20px;}

				.caption-wraper{left:0;bottom: 0.4em;}

				.caption-wraper .caption{

				left: 0;

				padding: 0.2em 0.4em;

				font-size: 0.92em;

				-webkit-border-radius: 0;

				-moz-border-radius: 0;

				-ms-border-radius: 0;

				-o-border-radius: 0;

				border-radius: 0;}

			}

			

			.swiper-container {

				width: 100%;
			
				max-height: 500px;
			
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



<?php $home_slides=sp_getslide("indexslide"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>



<div class="swiper-container">

    <div class="swiper-wrapper">

        <?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><div class="swiper-slide">

        	<a href="#" target="_blank"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" class="img-responsive" alt=""/></a>

        </div><?php endforeach; endif; ?>

    </div>

    <!-- 如果需要分页器 -->

    <div class="swiper-pagination"></div>

</div>



<script>        

  var mySwiper = new Swiper ('.swiper-container', {

    loop: true,

	autoplay:3000,

    

    // 如果需要分页器

    pagination: '.swiper-pagination',

	paginationClickable :true,

  })        

  </script>



<div class="container-fluid searchbox search visible-xs">

    <form method="post" class="form-inline" action="<?php echo U('htsm/search/index');?>">

        <input type="text" class="text" placeholder="请输入要搜索的关键字" name="keyword" value="<?php echo I('get.keyword');?>"/>

        <input type="submit" class="btn btn-success btns" value="搜索"/>

    </form>

</div>



<div class="container-fluid pro-tj">

	<div class="container">

	<h1><i class="fa fa-bars fa-lg"></i>旗下业务</h1>

    <div class="row">

      <div class="col-xs-12 col-lg-12">

      	<div class="col-xs-6 col-lg-3">

      		<div class="boxs">

            	<a href="<?php echo leuu('list/index',array('id'=>5));?>" target="_blank">

                	<img alt="食品土特产" src="/tpl/qzhtsm/Public/images/tuijian/ttc.jpg" class="img-responsive">
                    <div class="title">
                    	食品土特产
                    </div>
                    <div class="titbox hidden-xs">
                    	<div class="tbg"></div>
                        <div class="tit">
                        	<h2>食品土特产</h2>
                        </div>
                    </div>
                </a>

            </div>

      	</div>

        <div class="col-xs-6 col-lg-3">

      	<div class="boxs">

            	<a href="<?php echo leuu('list/index',array('id'=>6));?>" target="_blank">

                	<img alt="水果专区" src="/tpl/qzhtsm/Public/images/tuijian/sg.jpg" class="img-responsive">
					<div class="title">
                    	水果专区
                    </div>
                    <div class="titbox hidden-xs">
                    	<div class="tbg"></div>
                        <div class="tit">
                        	<h2>水果专区</h2>
                        </div>
                    </div>
                </a>

            </div>

      	</div>

        <div class="col-xs-6 col-lg-3">

      	<div class="boxs">

            	<a href="<?php echo leuu('list/index',array('id'=>7));?>" target="_blank">

                	<img alt="玩具专区" src="/tpl/qzhtsm/Public/images/tuijian/wj.jpg" class="img-responsive">
					<div class="title">
                    	玩具专区
                    </div>
                    <div class="titbox hidden-xs">
                    	<div class="tbg"></div>
                        <div class="tit">
                        	<h2>玩具专区</h2>
                        </div>
                    </div>
                </a>

            </div>

      	</div>

        <div class="col-xs-6 col-lg-3">

      	<div class="boxs">

            	<a href="<?php echo leuu('list/index',array('id'=>8));?>" target="_blank">

                	<img alt="工艺品专区" src="/tpl/qzhtsm/Public/images/tuijian/gyp.jpg" class="img-responsive">
					<div class="title">
                    	工艺品专区
                    </div>
                    <div class="titbox hidden-xs">
                    	<div class="tbg"></div>
                        <div class="tit">
                        	<h2>工艺品专区</h2>
                        </div>
                    </div>
                </a>	

            </div>

      	</div>

      </div>
      
      <div class="col-xs-12 col-lg-12">

      	<div class="col-xs-6 col-lg-3">

      		<div class="boxs">

            	<a href="<?php echo leuu('list/index',array('id'=>9));?>" target="_blank">

                	<img alt="烟酒专区" src="/tpl/qzhtsm/Public/images/tuijian/yj.jpg" class="img-responsive">
                	<div class="title">
                    	烟酒专区
                    </div>
                    <div class="titbox hidden-xs">
                    	<div class="tbg"></div>
                        <div class="tit">
                        	<h2>烟酒专区</h2>
                        </div>
                    </div>
                </a>

            </div>

      	</div>

        <div class="col-xs-6 col-lg-3">

      	<div class="boxs">

            	<a href="<?php echo leuu('list/index',array('id'=>10));?>" target="_blank">

                	<img alt="药品专区" src="/tpl/qzhtsm/Public/images/tuijian/yp.jpg" class="img-responsive">
					<div class="title">
                    	药品专区
                    </div>
                    <div class="titbox hidden-xs">
                    	<div class="tbg"></div>
                        <div class="tit">
                        	<h2>药品专区</h2>
                        </div>
                    </div>
                </a>

            </div>

      	</div>

        <div class="col-xs-6 col-lg-3">

      	<div class="boxs">

            	<a href="<?php echo leuu('list/index',array('id'=>11));?>" target="_blank">

                	<img alt="服装专区" src="/tpl/qzhtsm/Public/images/tuijian/fz.jpg" class="img-responsive">
					<div class="title">
                    	服装专区
                    </div>
                    <div class="titbox hidden-xs">
                    	<div class="tbg"></div>
                        <div class="tit">
                        	<h2>服装专区</h2>
                        </div>
                    </div>
                </a>

            </div>

      	</div>

        <div class="col-xs-6 col-lg-3">

      	<div class="boxs">

            	<a href="<?php echo leuu('list/index',array('id'=>12));?>" target="_blank">

                	<img alt="鞋帽专区" src="/tpl/qzhtsm/Public/images/tuijian/xm.jpg" class="img-responsive">
					<div class="title">
                    	鞋帽专区
                    </div>
                    <div class="titbox hidden-xs">
                    	<div class="tbg"></div>
                        <div class="tit">
                        	<h2>鞋帽专区</h2>
                        </div>
                    </div>
                </a>

            </div>

      	</div>

      </div>


       <div class="col-xs-12 col-lg-12">

      	<div class="col-xs-6 col-lg-3">

      		<div class="boxs">

            	<a href="<?php echo leuu('list/index',array('id'=>13));?>" target="_blank">

                	<img alt="箱包专区" src="/tpl/qzhtsm/Public/images/tuijian/xb.jpg" class="img-responsive">
					<div class="title">
                    	箱包专区
                    </div>
                    <div class="titbox hidden-xs">
                    	<div class="tbg"></div>
                        <div class="tit">
                        	<h2>箱包专区</h2>
                        </div>
                    </div>
                </a>

            </div>

      	</div>

        <div class="col-xs-6 col-lg-3">

      	<div class="boxs">

            	<a href="<?php echo leuu('list/index',array('id'=>14));?>" target="_blank">

                	<img alt="皮具专区" src="/tpl/qzhtsm/Public/images/tuijian/pj.jpg" class="img-responsive">
					<div class="title">
                    	皮具专区
                    </div>
                    <div class="titbox hidden-xs">
                    	<div class="tbg"></div>
                        <div class="tit">
                        	<h2>皮具专区</h2>
                        </div>
                    </div>
                </a>

            </div>

      	</div>

        <div class="col-xs-6 col-lg-3">

      	<div class="boxs">

            	<a href="<?php echo leuu('list/index',array('id'=>18));?>" target="_blank">

                	<img alt="书店业务" src="/tpl/qzhtsm/Public/images/tuijian/sd.jpg" class="img-responsive">
					<div class="title">
                    	书店专区
                    </div>
                    <div class="titbox hidden-xs">
                    	<div class="tbg"></div>
                        <div class="tit">
                        	<h2>书店专区</h2>
                        </div>
                    </div>
                </a>

            </div>

      	</div>

        <div class="col-xs-6 col-lg-3">

      	<div class="boxs">

            	<a href="<?php echo leuu('list/index',array('id'=>19));?>" target="_blank">

                	<img alt="咖啡厅业务" src="/tpl/qzhtsm/Public/images/tuijian/kft.jpg" class="img-responsive">
					<div class="title">
                    	咖啡厅专区
                    </div>
                    <div class="titbox hidden-xs">
                    	<div class="tbg"></div>
                        <div class="tit">
                        	<h2>咖啡厅专区</h2>
                        </div>
                    </div>
                </a>

            </div>

      	</div>

      </div>

    </div>

    </div>

</div>



<div class="container-fluid newsbox">

	<div class="container">

        <div class="row">
        	 <div class="col-xs-12 col-lg-3">
             	<div class="aboutus">
                	<h1><i class="fa fa-laptop fa-lg"></i>关于我们/ABOUT US</h1>
                    <div class="box">
                    	<?php $ID=1; $page=sp_sql_page($ID); $aboutus=$page["post_content"]; ?>
                        <?php echo msubstr($aboutus,0,235);?>
                        <a href="<?php echo leuu('page/index',array('id'=>1));?>" target="_blank">[详细]</a>
                    </div>
                </div>
                
                <div class="contactus">
                	<h1><i class="fa fa-phone-square fa-lg"></i>联系我们/CONTACT US</h1>
                    <div class="box">
                    	<p><i class="fa fa-tty fa-sm"></i>联系电话：<?php echo ($tel); ?></p>
                        <p><i class="fa fa-qq fa-sm"></i>联系QQ：
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($oicq); ?>&site=qq&menu=yes">
						<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo ($oicq); ?>:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>
					</a>
                    </p>
                        <p><i class="fa fa-users fa-sm"></i>联系人：<?php echo ($lianxiren); ?></p>
                        <p><i class="fa fa-map-marker fa-sm"></i>联系地址：<?php echo ($address); ?></p>
                    </div>
                </div>
             </div>

          <div class="col-xs-12 col-lg-5">
          
          <h1><i class="fa fa-bookmark fa-lg"></i>新闻中心/NEWS</h1>
          <div class="box">

          <?php $lastnews=sp_sql_posts("cid:$htsm_index_lastnews;field:post_title,post_excerpt,tid,smeta;order:listorder asc;limit:1;"); ?>

          <?php if(is_array($lastnews)): foreach($lastnews as $key=>$vo): $smeta=json_decode($vo['smeta'],true); ?>

            	<div class="hots-new">

                	<div class="imgbox col-lg-5 col-md-5">

                		<a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>">

							<?php if(empty($smeta['thumb'])): ?><img src="/tpl/qzhtsm/Public/images/default_tupian1.png" class="img-responsive img-thumbnail" alt="<?php echo ($vo["post_title"]); ?>"/>

							<?php else: ?> 

								<img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo["post_title"]); ?>" /><?php endif; ?>

                		</a>

                    </div>

                    <div class="txtbox col-lg-7 col-md-7">

                    	<h2><a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>"><?php echo ($vo["post_title"]); ?></a></h2>

                        <p class="pbox"><a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>"><?php echo msubstr($vo['post_excerpt'],0,50);?></a></p>

                        <p><a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>" target="_blank" class="more">查看详情</a></p>

                    </div>

                </div><?php endforeach; endif; ?>

                <div class="clearfix"></div>

                <div class="newlist">

                <?php $newslist=sp_sql_posts("cid:$htsm_index_lastnews;field:post_title,post_excerpt,tid,smeta,post_modified;order:listorder asc;limit:1,5;"); ?>

                	<ul class="list-unstyled">

                    <?php if(is_array($newslist)): foreach($newslist as $key=>$vo): ?><li>

                        	<a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>" target="_blank"><p><?php echo ($vo["post_title"]); ?></p><span class="hidden-xs"><?php echo ($vo["post_modified"]); ?></span></a>

                        </li><?php endforeach; endif; ?>

                    </ul>

                    <div class="more">

                       <a href="#" target="_blank">查看更多 >></a>

                    </div>

                </div>
                </div>
         </div>

          

           <div class="col-xs-12 col-lg-4 pull-right">
           		
                <h1><i class="fa fa-square fa-lg"></i>泓涂服务/SERVICE</h1>

           		<?php $newsad=sp_getslide("newsad"); ?>
				<div class="box clearfix">
				<?php if(is_array($newsad)): foreach($newsad as $key=>$vo): ?><div class="ads col-lg-12 col-xs-6">

                <a href="<?php echo ($vo['slide_url']); ?>" target="_blank">

                	<img alt="" src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" class="img-responsive">

                </a>

                </div><?php endforeach; endif; ?>
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