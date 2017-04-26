
      <form class="form-signin" action="?c=user&a=signin" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
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
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="username" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remembered" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
      </form>