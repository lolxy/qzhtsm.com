<?php

// +----------------------------------------------------------------------

// | QzHtsm

// +----------------------------------------------------------------------

// | Copyright (c) 2013-2014 http://www.qzhtsm.com All rights reserved.

// +----------------------------------------------------------------------

// | Author: lolxy <lolxy2010@163.com>

// +----------------------------------------------------------------------

/**

 * 搜索结果页面

 */

namespace Htsm\Controller;

use Common\Controller\HomeBaseController;

class SearchController extends HomeBaseController {

    //文章内页

    public function index() {

    	$_GET = array_merge($_GET, $_POST);

		$k = I("get.keyword");


		/*if (empty($k)) {

			$this ->error("关键词不能为空！请重新输入！");

		}*/

		$this -> assign("keyword", $k);

		$this -> display(":search");

    } 

}

