<?php
//设置 header
header("content-type:text/html;charset=utf-8");

//框架两种模式 
define('APP_DEBUG',true);//开发模式
//define('APP_DEBUG',false);//线上模式

define('ServerMap', '/MyBlog_BY_ThinkPHP/MyBlog/index.php/');

//输出 地址
//$Domain 域名
//$Controller 控制器名称
//$Action 视图名
function Url($Domain,$Controller,$Action){
    echo "/MyBlog_BY_ThinkPHP/MyBlog/index.php/$Domain/$Controller/$Action";
}

//定义 引用文件
//css定义
if(1==1){
    define("Bootstrap_Css", '/MyBlog_BY_ThinkPHP/MyBlog/Content/Css/bootstrap.css');
    define("Bootstrap_Theme_Css", '/MyBlog_BY_ThinkPHP/MyBlog/Content/Css/bootstrap.css');
    define('Pace_Css', '/MyBlog_BY_ThinkPHP/MyBlog/Content/Css/Pace/blue/pace-theme-minimal.css');
    define('Animation_Css','/MyBlog_BY_ThinkPHP/MyBlog/Content/Css/Animation.css');
    define('mCustomScrollbar_Css', '/MyBlog_BY_ThinkPHP/MyBlog/Content/Css/jquery.mCustomScrollbar.css');
    define('Font_Awesome', '/MyBlog_BY_ThinkPHP/MyBlog/Content/Css/font-awesome.min.css');
}

//js定义
if(1==1){
    define('Bootstrap_Js','/MyBlog_BY_ThinkPHP/MyBlog/JavaScript/bootstrap.min.js');
    define('Jquery', '/MyBlog_BY_ThinkPHP/MyBlog/JavaScript/jquery-2.1.1.min.js');
    define('Pace_Js','/MyBlog_BY_ThinkPHP/MyBlog/JavaScript/pace.min.js');
    define('jquery_mCustomScrollbar_concat_Js','/MyBlog_BY_ThinkPHP/MyBlog/JavaScript/jquery.mCustomScrollbar.concat.min.js');
}





//引入 框架 接口文件
include '../ThinkPHP/ThinkPHP.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

