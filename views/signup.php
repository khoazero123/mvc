    <div class="container">    
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" action="?c=user&a=signup" method="POST">
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
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
        if(isset($redirect)) echo '<script>setTimeout(function(){window.location.replace("'.$redirect.'");}, 2000);</script>';
        ?>
                                <div class="form-group">
                                    <label for="username" class="col-md-3 control-label">Username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" name="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                    </div>
                                </div>
                            </form>
                         </div>
                    </div>
         </div> 
    </div>