<?php
require_once 'core/init.php';

if(Session::exists('home')){
     echo '<p>'.Session::flash('home').'</p>';
}

$user = new User();
if($user->isLoggedIn()) {
?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css_login/bootstrap.min.css" rel="stylesheet">
    <link href="css_login/styles.css" rel="stylesheet">
</head>
<div class="profile">
<center><span class="txt_darkgrey">
     <p>Hello <a class="grey" href="profile.php?user=<?php echo escape($user->data()->username); ?>"><?php echo escape($user->data()->username); ?></a>!</p>
     </span></center>
      
<div class="csi-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="csi-service-item">
                            <div>
                                <img src="css_login/images/images.jpg" class="roundrect" alt="icon" />
                                <span class="csi-service-item-header">PHEONIX EVENTS</span>
                            </div>
                            <p>CSI-DTU is known for organizing large number of exciting events both tech and non-tech.There is a lot in the bag for everyone, be it a computer geek, a gming lover, a debaterand so on.Check out all the events of PHEONIX-2015 by clicking on the button below. </p>
                           <br>
                        <center>
                       <button class="btn btn-orange btn-lg"><a class="white1" href="#">View events</a></button>
                         </center>       	
                          
                            <br class="clearfix"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="csi-service-item" >
                            <div>
                                <img src="css_login/images/register.jpg" class="roundrect" alt="icon"/>
                                <span class="csi-service-item-header">REGISTRATION</span>
                            </div>
				<p>As beauty is recogonized by compliments, konwlege and talent is recogonized by competition.Here is a chance to showcase your knowledge and outshine everyone else.To register for any of the events of PHEONIX-2015 click on the button below.</p> 
                            <br>
                            <center> 
                            <button class="btn btn-orange btn-lg"><a class="white1" href="#">Register for events</a></button>
                            </center>   
                                	
                           
                            <br class="clearfix"/>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-4">
                        <div class="csi-service-item">
                            <div>
                                <img src="css_login/images/schedule.jpg" class="roundrect" alt="icon"/>
                                <span class="csi-service-item-header">EVENT SCHEDULE</span>
                            </div>

			   <p> CSI-DTU orgainzes a four day annual tech fest known as PHEONIX.To view the timings and locations of all the events of PHEONIX-2015 click on the button given below.</p>
                          <br>
                          <center>  
                          <button class="btn btn-orange btn-lg"><a class="white1" href="#">View Schedule</a></button>                            
                          </center>    
                            <br class="clearfix"/>
                        </div>
                        <br class="clearfix"/>
                    </div>
             <button class="btn btn-orange btn-lg shift"><a class="white1" href="update.php">Edit Profile</a></button>
            <button class="btn btn-orange btn-lg shift1"><a class="white1" href="logout.php">Log Out</a></button>

                </div>
            </div>
        </div>
</div>
</html>

<?php

    if($user->hasPermission('admin')) {
        echo '<p>You are admin!</p>';
    } 


} else {
?>
     <p align="center" font-size="50" font-color="grey">You need to <a href="login1.php">log in</a> or <a href="register.php">register</a></p>

<?php
}
//Session::delete(Config::get('session/session_name'));
//$user = DB::getInstance()->update('users', 3, array(
//	'password' => 'newpassword',
//	'name' => 'Dale Garrett'
//
//	));


