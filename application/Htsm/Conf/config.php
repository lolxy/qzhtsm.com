<?php

if(file_exists("data/conf/route/htsm.php")){
	$routes = include 'data/conf/route/htsm.php';
}else{
	$routes = array();
}

$runtime_home_config= array();
$configs= array(
		'TAGLIB_BUILD_IN' => THINKCMF_CORE_TAGLIBS.',Htsm\Lib\Taglib\Htsm',
		'TMPL_EXCEPTION_FILE'   => SPSTATIC.'exception.html',// 异常页面的模板文件
		'TMPL_TEMPLATE_SUFFIX'  => '.html',     // 默认模板文件后缀
 		'TMPL_FILE_DEPR'        =>  '/', //模板文件MODULE_NAME与ACTION_NAME之间的分割符
		'URL_ROUTE_RULES' =>$routes,
		'HTML_CACHE_RULES'  =>     array(  
		// 定义静态缓存规则     
		// 定义格式1 数组方式   
				'article:index'=>array('htsm/article/{id}','0'),
				'index:index'=>array('htsm/index','600'),
				'list:index'=>array('htsm/list/{id}_{p}','60'),
		)
);

return  array_merge($configs,$runtime_home_config);
