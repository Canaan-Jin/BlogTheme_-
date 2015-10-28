<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    //主页面
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        //echo 'Hello World ! This\'s is my blog!';
        $url = "http://www.cailele.com/static/gd11x5/newlyopenlist.xml"; 
        $contents = file_get_contents($url); 
        //如果出现中文乱码使用下面代码 
        //$getcontent = iconv("gb2312", "utf-8",$contents); 
        echo $contents; 
        
        
        $this->display();
    }

    //文章列表
    public function articleList(){
          $a=0;
        while ($a ==90000000000000) {
            $a++;
        }
        $ArticlesList=D('articlesinfo')->select();
        $this->assign('ArticlesList',$ArticlesList);
        $this->display();
    }
    //文章页面
    public function article($id){
        for ($index = 0; $index < 9; $index++) {

        }
        
        $this->display();
    }
    
}