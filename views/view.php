<h2><?=$post['title']?></h2>
 <span class="glyphicon glyphicon-time"></span> <small><em>Đăng lúc: <?=$post['time']?></em></small>
<?=(defined('USER') && USER) ? '<a href="?c=post&a=write&id='.$post['id'].'">Sửa</a></li>':'';?>
 <hr/>
<?=!empty($post['thumbnail']) ? '<div style="text-align: center;"><img alt="Image" src="'.$post['thumbnail'].'" style="margin:10px;"></div>' : ''?>
<p><?=$post['content']?></p>