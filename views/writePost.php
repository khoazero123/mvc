        <?php 
        if(isset($error))
            echo '<div class="alert alert-danger" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Error:</span>
              '.$error.'
            </div>';
        elseif(isset($info))
            echo '<div class="alert alert-info" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              '.$info.'
            </div>';
        if(isset($redirect))
            echo '<script>setTimeout(function(){window.location.replace("'.$redirect.'");}, 2000);</script>';
        ?>
<form action="?c=post&a=write<?=isset($post['id']) ? '&id='.$post['id'] :'' ?>" method="POST" style="margin-top: 10px;">
<?=isset($post['id']) ? '<input type="hidden" name="id" value="'.$post['id'].'">' : ''?>
  <div class="form-group">
    <label for="exampleInputEmail1">Tiêu đề</label>
    <input type="text" name="title" class="form-control" <?=isset($post['title']) ? 'value="'.$post['title'].'"' : '' ?> aria-describedby="titleHelp" placeholder="Tiêu đề" required autofocus>
    <small id="titleHelp" class="form-text text-muted">Tiêu đề của bài viết.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ảnh</label>
    <input type="text" name="thumbnail" class="form-control" <?=isset($post['thumbnail']) ? 'value="'.$post['thumbnail'].'"' : '' ?> aria-describedby="thumbHelp" placeholder="URL thumbnail">
    <small id="thumbHelp" class="form-text text-muted">Link ảnh bài viết.</small>
  </div>

  <div class="form-group">
    <label for="exampleTextarea">Nội dung bài viết</label>
    <textarea class="form-control" name="content" id="exampleTextarea" rows="10" required><?=isset($post['content']) ? $post['content'] : '' ?></textarea>
  </div>

  <button type="submit" name="submit" class="btn btn-primary"><?=isset($post['id']) ? 'Cập nhập' : 'Đăng'?></button>
</form>