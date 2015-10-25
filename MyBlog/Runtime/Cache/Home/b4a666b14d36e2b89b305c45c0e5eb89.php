<?php if (!defined('THINK_PATH')) exit();?><script>
     $(".article-List").each(function(index,e){
            $(e).addClass("enter-left-bounce");
        });
    $("#List").mCustomScrollbar();
    $(".article-Introduction").ellipsis(40);

    $($(".article-Title")[0]).find("ins").click();
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(is_array($ArticlesList)): foreach($ArticlesList as $key=>$item): ?><div class="article-List" style="">
         <div class="article-Title" this-article-id='<?php echo ($item["id"]); ?>' style="width:100%;"><ins style="cursor:pointer;" onclick="openArtiele('<?php echo ($item["id"]); ?>',this);" class=""><?php echo ($item["title"]); ?></ins></div>
    <div style="width: 100%;height:71px;padding-top: 15px;word-break: normal;">
        <blockquote>
        <div class="article-Introduction" style=""><?php echo ($item["content"]); ?></div>
         </blockquote>
    </div>
    <div style='width: 100%;height:34px;padding-top: 20px;'>
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