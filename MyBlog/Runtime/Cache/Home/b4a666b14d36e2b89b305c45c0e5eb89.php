<?php if (!defined('THINK_PATH')) exit();?><script>
     $(".article-List").each(function(index,e){
            $(e).addClass("enter-left-bounce");
        });
    //初始化
    clientWithChenge();
    $(".article-Introduction").ellipsis(40);

    //$($(".article-Title")[0]).find("ins").click();
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php if(is_array($ArticlesList)): foreach($ArticlesList as $key=>$item): ?><div class="row article-List" style="margin-right:0px;margin-left: 0px;">
        <div class="col-md-12 col-lg-12" style="height:20px;"></div>
        <div class="article-Title col-md-12 col-lg-12" this-article-id='<?php echo ($item["id"]); ?>' style="width:100%;">
            <ins style="cursor:pointer;font-size:17px; " onclick="openArtiele('<?php echo ($item["id"]); ?>',this);"  class="">构建易于扩展的前端统计脚本</ins>
        </div>
        <div class="col-md-12 col-lg-12 hidden-xs hidden-sm" style="width: 100%;padding-top: 15px;word-break: normal;    color: #343434;">
            <blockquote>
                <div class="article-Introduction" style=""><?php echo ($item["content"]); ?></div>
            </blockquote>
        </div>
        <div class="col-md-12 col-lg-12 hidden-xs hidden-sm" style="height:40px;    color: #ABABAB;">
            <ul class="list-inline clearfix">
            <li class="meta-date">
                <i class="glyphicon glyphicon-calendar btn-xs"><span style="font-size:inherit;"><?php echo (date('Y-m-d',$item["creattime"])); ?></span></i>
            </li>
            <li class="meta-tags pull-right">
                 <i class="glyphicon glyphicon-tag btn-xs">
                     <span style="font-size:inherit;">统计脚本</span>
                 </i>
            </li>
        </ul>
        </div>
    </div><?php endforeach; endif; ?>