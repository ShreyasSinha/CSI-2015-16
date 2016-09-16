<?php
ob_start();
require_once 'core/init.php';

if(Input::exists()) {
    if(Token::check(Input::get('token'))) {
     
         $validate = new Validate();
         $validation = $validate->check($_POST, array(
            'username' => array('required' => true),
            'password' => array('required' => true)
         ));

         if($validation->passed()) {
               $user = new User();

               $remember = (Input::get('remember') === 'on') ? true : false;
               $login = $user->login(Input::get('username'), Input::get('password'), $remember);

               if($login) {
                  Redirect::to('index.php');
               } else {
                  echo '<p>Sorry, logging in failed.</p>';
               }
         
         } else {
             foreach($validation->errors() as $error) {
                  echo $error,'<br>';
             }
         }
     }
}           
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css_login/bootstrap.min.css" rel="stylesheet">
    <link href="css_login/styles.css" rel="stylesheet">
</head>
<div id="csi-login">
<div class="welcome">
<center><span class="txt_darkgrey">Welcome to </span><span class="txt_orange">CSI-DTU</span></center>
</div>
<body>
  <div class="container">
    
  
 
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading"> <strong><center><div class="white">Login</div></center></strong>
          </div>
          
          <div class="panel-body"> 
            <form class="form-horizontal" action="" method="post"> 
                <div class="form-group">
                  <label for="username" class="col-sm-3 control-label">Username</label>
                  <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" autocomplete="off">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
                    </div>
                </div>  

                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
                         <div class="checkbox">
                            <label for="remember">
                              <input type="checkbox" name="remember" id="remember"> Remember me
                            </label>
                         </div>
                  </div>
                </div>             
     
                <div class="form-group last">
                  <div class="col-sm-offset-4 col-sm-9">
                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                    <button type="submit" class="btn btn-success btn-sm">Log in</button>
                  </div>
                </div>
            </form>
          </div>
               
          <div class="panel-footer">  <p> Not Registered?   <a href="register1.php" style="color:  #ffd400"><b>Register here</b></a></p>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>  
</body>
</html>
