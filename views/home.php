<h2><?=$title?></h2>
<div id="posts">
<?php
    	if(!empty($data))
    	foreach($data as $item) {
    	?>
    	<div class="row" id="post-<?=$item['id']?>">
                <div class="row">
                    <div class="span8">
                        <h4><strong><a href="?c=post&a=read&id=<?=$item['id']?>"><?=$item['title']?></a></strong></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="span2">
                        <a href="#" class="thumbnail">
                            <img src="<?=$item['thumbnail'] ? $item['thumbnail'] : 'http://placehold.it/260x180' ?>" alt="">
                        </a>
                    </div>
                    <div class="span6">
                        <p>
                            <?=substr($item['content'],0,250)?>
                        </p>
                        <p><a class="btn" href="?c=post&a=read&id=<?=$item['id']?>">Read more</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="span8">
                        <p></p>
                        <p>
                            <i class="icon-user"></i> by <a href="#">Admin</a> | <i class="icon-calendar"></i> <?=$item['time']?> | <i class="icon-tags"></i> Tags : <a href="#"><span class="label label-info">Snipp</span></a>
                            <a href="#"><span class="label label-info">Bootstrap</span></a>
                            <a href="#"><span class="label label-info">UI</span></a>
                            <a href="#"><span class="label label-info">growth</span></a>
                        </p>
                    </div>
                </div>
        </div>
<hr>
<?php
}
?>
</div>
<p id="loading" style="display: none;text-align: center;">
    <img src="public/images/ring-alt.svg" alt="Loading…" />
</p>