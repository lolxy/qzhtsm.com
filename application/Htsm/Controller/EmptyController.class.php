<?php

// +----------------------------------------------------------------------

// | QzHtsm [ WE CAN DO IT MORE SIMPLE ]

// +----------------------------------------------------------------------

// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.

// +----------------------------------------------------------------------

// | Author: Dean <zxxjjforever@163.com>

// +----------------------------------------------------------------------

namespace Htsm\Controller;

use Common\Controller\HomeBaseController;

class EmptyController extends HomeBaseController{

	function _empty(){

      header("HTTP/1.0 404 Not Found");

      $this->display(':404');

    }

            

     function index(){

        header("HTTP/1.0 404 Not Found");

        $this->display(':404');

     }

} 