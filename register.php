<?php
require_once 'core/init.php';

if(Input::exists()) {
print_r($_POST);  
if(Token::check(Input::get('token'))){

	$validate = new Validate();
	$validation = $validate->check($_POST, array(
		'username' => array(
			'required' => true,
			'min' => 2,
			'max' => 20,
			'unique' => 'users'
			),
		'password' => array(
			'required' => true,
			'min' => 6
			),
		'password_again' => array(
			'required' => true,
			'matches' => 'password'
			),
		
		
		));
echo "1";
	
	if($validation->passed()) {
 echo "2";
           $user= new User();
echo "3";
        //    $salt = Hash::salt(32);
             $salt="";
           

           try {
           echo "4ba"; 
               $user->create(array(
                   'username' => Input::get('username'),     
                   'password' => Hash::make(Input::get('password'),$salt),    
                   'name' => Input::get('name'),
                   'joined' => date('Y-m-d H:i:s'),
                   'group' => 1,
                   'gender'=>Input::get('gender'),
                   'stay' => Input::get('stay'),   
                   'address' => Input::get('address'),
                   'branch' => Input::get('branch'),
                   'year' => Input::get('year')
                   
                    
                   
                ));

               Session::flash('home','You have been registered and can log in!');
               Redirect::to('index.php');    
                  
               

           } catch(Exception $e) {
                die($e->getMessage());
            }
              
	} else {
		foreach($validation->errors() as $error) {
			echo $error, '<br>';
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
<div class="welcome">
<center><span class="txt_darkgrey">Welcome to </span><span class="txt_orange">CSI-DTU</span></center>
</div>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
      	
        <div class="panel panel-default">
           <div class="panel-heading"> 
            <strong><center><div class="white">Register</div></center></strong></div>
			<div class="panel-body"> 
              <form class="form-horizontal" action="register.php" method="post">
				
				<div class = "form-group">
				  <label for="name" class="col-sm-5 control-label"><center>Your name</center></label>
                    <div class="col-sm-7"> 
					  <input type="text" name="name" class="form-control" placeholder="Your Name"   id="name">
				    </div>
				</div>
				<div class = "form-group">
				  <label for="gender" class="col-sm-5 control-label"><center>Gender</center></label>
                    <div class="col-sm-7"> 
					  <select name="gender" class="form-control"  id="gender">
					  	<option value="male">Male</option>
					  	<option value="female">Female</option>
	
					  </select>
				    </div>
				</div>
<br>
				<div class = "form-group">
				  <label for="year" class="col-sm-5 control-label"><center>Your Year</center></label>
                    <div class="col-sm-7"> 
					  <select name="year" class="form-control"  id="year">
					  	<option value="first">Btech First</option>
					  	<option value="second">Btech Second</option>
					  	<option value="third">Btech Third</option>
					  	<option value="fourth">Btech Fourth</option>
					  </select>
				    </div>
				</div>

				<div class = "form-group">
				  <label for="branch" class="col-sm-5 control-label"><center>Your branch</center></label>
                    <div class="col-sm-7"> 
					  <input type="text" name="branch" class="form-control" placeholder="Your Branch"   id="branch">
				    </div>
				</div>
				<br>
				<div class = "form-group">
				  <label for="stay" class="col-sm-5 control-label"><center>Place of stay</center></label>
                    <div class="col-sm-7"> 
					  <select name="stay" class="form-control"  id="stay">
					  	<option value="day">Day Scholor</option>
					  	<option value="hostel">Hosteller</option>
	
					  </select>
				    </div>
				</div>
<br>
				<div class = "form-group">
				  <label for="address" class="col-sm-5 control-label"><center>Your Address</center></label>
                    <div class="col-sm-7"> 
					  <textarea name="address" class="form-control" placeholder="Your Address"   id="address"></textarea>
				    </div>
				</div>	       
  <br>         
				<div class ="form-group">
				  <label for="username" class="col-sm-5 control-label"><center>Username</center></label>
					<div class="col-sm-7">
					   <input type ="text" name="username" id="username"  class="form-control" placeholder="Your Username"  autocomplete ="off">
				    </div>
				</div>
		      <br>
				<div class ="form-group">
				  <label for="password" class="col-sm-5 control-label"><center>Choose a password</center></label>
					<div class="col-sm-7">
					   <input type="password" name="password" id="password" class="form-control" placeholder="Password">
				    </div>
				</div>
		        <br>
				<div class = "form-group">
				  <label for="password_again" class="col-sm-5 control-label"><center>Enter password again</center></label>
					<div class="col-sm-7">
				       <input type="password" name="password_again" id="password_again" class="form-control" placeholder="Password">
				    </div>
				</div>
<br>
				
		        <div class="form-group last">
                  <div class="col-md-offset-4 col-sm-9">
			        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
				<button type="submit" class="btn btn-success btn-sm"><strong>Register</strong></button>
				  </div>
                </div>	
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>