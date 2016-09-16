
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CSI-DTU</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/CSI.jpg">
        
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this CSI -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/font-awesome.min.css"  rel='stylesheet' type='text/css'>
        <link href="css/CSI_style.css"  rel='stylesheet' type='text/css'>


        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    </head>
    
    <body>
<?php 
    session_start();

  // unset( $_SESSION["visitor"]);
    
    if(!(isset($_SESSION["visit"]))){
        ?>
        <div class="visitor_email hiding" id="visitor_email">
    <div class="container1">
        <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading"> <strong><center><div class="white">Hi Visitor</div></center></strong>
          </div>
          <div class="panel-body"> 
            
            <?php 

                function getvar($i){
                    switch ($i) {
                        case '0':
                            return "name";
                            break;
                        
                        
                        case '1':
                            return "email";
                            break;
                        

                        case '2':
                            return "phone number";
                            break;
                        
                        
                    }
                }
                    if(isset($_GET["msg"])){
                        $str = $_GET["msg"];
                        for($i=0;$i<3;$i++){
                            if($str[$i]==1){
                                echo "Length of ".getvar($i)." is too long.</br>";
                            }
                            else{
                                if($str[$i]==3){
                                    echo getvar($i)." cannot be empty.</br>";
                                }
                            }
                        }
                    }
            ?>

            <form class="form-horizontal" action="csi_login/register_visitor.php" method="post"> 
                <div class="form-group">
                  <label for="username" class="col-sm-3 control-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" id="name" placeholder="your name" autocomplete="off">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                      <input type="text" name="email" class="form-control" id="email" placeholder="your email" autocomplete="off">
                    </div>
                </div>  

                <div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">Phone number</label>
                    <div class="col-sm-9">
                      <input type="text" name="phone" class="form-control" id="phone" placeholder="your phone" autocomplete="off">
                    </div>
                </div>                              
                <div class="form-group last">
                  <div class="col-sm-offset-4 col-sm-9">
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                  </div>
                </div>
            </form>
          </div>
               
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="CSI-about-bar" id="CSI-about">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                            
                             <p><a class="link_orange" href="csi_login/login1.php"><span class="glyphicon glyphicon-user"> </span><span class="txt_orange"><strong>&nbspLogin</strong></span></a></p>

                
                    </div>
                    <div id="email" class="pull-right">
                        
                             <p>Not Regsitered yet ? <a class="link_orange" href="csi_login/register.php"><span class="glyphicon glyphicon-registration-mark"> </span><span class="txt_orange "><strong>&nbspRegister Here !</strong></span></a></p>

                            
                    </div>
                </div>
            </div>
        </div>

        <div class="CSI-about-menu" id="CSI-about-menu">
            <div class="container" >
                <!-- Static navbar -->
                <div class="navbar navbar-default" role="navigation" style="background:transparent;">
                    <div class="container" >

                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.php" rel="nofollow" ><img src="images/CSI_LOGO_sm.png" alt="logo" style="margin-top:-10px;" class="img-responsive"></a>  
                                
                        </div>
                        <div class="navbar-collapse collapse " id="CSI-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li class="active"><a href="#CSI-about"><strong>ABOUT US</strong></a></li>
                                <li><a href="#CSI-updates"><strong>WHAT'S NEW</strong></a></li>
                                <li><a href="#CSI-council"><strong>COUNCIL</strong></a></li>
                                <li><a href="#CSI-gallery"><strong>GALLERY</strong></a></li>
                                <li><a href="#CSI-fests"><strong>EVENTS</strong></a></li>
                                <li><a href="#CSI-contact"><strong>CONTACT US</strong></a></li>
                                <li><a href="#CSI-sponsors"><strong>OUR SPONSORS</strong></a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                        
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>

 <?php
    }
    else{
?>
        <div class="CSI-about-bar" id="CSI-about">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                            
                             <p><a class="link_orange" href="csi_login/login1.php"><span class="glyphicon glyphicon-user"> </span><span class="txt_orange"><strong>&nbspLogin</strong></span></a></p>

                
                    </div>
                    <div id="email" class="pull-right">
                        
                             <p>Not Regsitered yet ? <a class="link_orange" href="csi_login/register.php"><span class="glyphicon glyphicon-registration-mark"> </span><span class="txt_orange "><strong>&nbspRegister Here !</strong></span></a></p>

                            
                    </div>
                </div>
            </div>
        </div>

        <div class="CSI-about-menu" >
            <div class="container" >
                <!-- Static navbar -->
                <div class="navbar navbar-default" role="navigation" style="background:transparent;">
                    <div class="container" >

                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.php" rel="nofollow" >
                                <!--    <img src="images/CSI_LOGO_sm.png" alt="logo" style="margin-top:-10px;" class="img-responsive"> -->
                                </a>  
                                
                        </div>
                        <div class="navbar-collapse collapse " id="CSI-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li class="active"><a href="#CSI-about"><strong>ABOUT US</strong></a></li>
                                <li><a href="#CSI-updates"><strong>WHAT'S NEW</strong></a></li>
                                <li><a href="#CSI-council"><strong>COUNCIL</strong></a></li>
                                <li><a href="#CSI-gallery"><strong>GALLERY</strong></a></li>
                                <li><a href="#CSI-fests"><strong>EVENTS</strong></a></li>
                                <li><a href="#CSI-contact"><strong>CONTACT US</strong></a></li>
                                <li><a href="#CSI-sponsors"><strong>OUR SPONSORS</strong></a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                        
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        <?php 
        }
        ?>
        <div>
       
            <!-- Carousel -->
            <div id="CSI-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#CSI-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#CSI-carousel" data-slide-to="1"></li>
                    <li data-target="#CSI-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            
                              <div class="carousel-caption" style="margin-top:10px;">
                                  
                                    <font size="24px"><strong><i>WELCOME TO CSI</i></strong></font>
                                    
                                   
                                </div> 
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="container">
                            
                                 <div class="carousel-caption">
                                  
                                    <h1> <strong>A CSI-DTU CHAPTER</strong></h1>
                                    <p><i>"Witness the amalgmation of innovation ,creativity and growth.</i></p>
                                   
                                </div> 
                            
                               
                            
                        </div>
                    </div>
                        <div class="item">
                            <div class="container">
                                
                                 <div class="carousel-caption">
                                  
                                    <h1>History and Present</h1>
                                    <p><i>"Formed in 1965, the CSI has been instrumental in guiding the Indian IT industry down the right path since its formative years. Today, the CSI has 381 student branches, and more than 50000 members including India's most famous IT industry leaders, brilliant scientists and dedicated academicians."</i></p>
                                   
                                </div> 
                                
                            </div>
                        </div>
                </div>
                <a class="left carousel-control" href="#CSI-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#CSI-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /#CSI-carousel -->
        </div>
         <div class="CSI-welcome" id="CSI-welcome">
            <div class="container">
                <div class="CSI-slogan text-center">
                    <span class="txt_darkgrey"></span><span class="txt_orange">About Us</span>
                    <p class="txt_slogan"><i> The computer society of India is one of the premier technical societies in Delhi Technological University.  It is also one of the most recognized computer societies in India.  CSI-DTU was established in the year 2005 by enthusiastic alumni of the Delhi Technological University (formerly known as Delhi College of Engineering).  The vast presence of CSI is evident from the fact that it is currently present in 62 different locations and 30,000 members including students like us, software developers, scientists etc. What you just read, did it sound like something that a 20 year old developer would write? Or something that is an apposite description for a college level society? Obviously, no. College life is synonymous with zeal, passion, enthusiasm and excitement. And that is what sets CSI apart from the other clichéd technical societies. We don’t conduct boring meetings, we don’t organise boring events, and dull is one word you’d never associate with us. Because CSI does everything with élan and exuberance. With our well-thought line up of engaging and entertaining events, months are different in college. Too much happens. Every month seems like six regular months when you are a CSI member. We want you to be more than just computer literate. We want you to be a computer fanatic. And we fulfil this mission by organizing various IDGs i.e. Interest Development Groups where learning a new language or a new software is made interesting With our round-the-year fests and events, we ensure a healthy competition between various passionate students and provide them the right platform to test their skills. But is CSI all about computers and computer learning? Well, NO. CSI presents you with a perfect gamut of both technical as well as non-technical events. So, while Avantgarde may have more of technical events, Hasta la Vista will surprise you with the most exceptional non-technical fun events. What is Hasta la Vista and Avantgarde, you may ask! Well, the entire website has extremely descriptive pages talking about our various fests and events. For your aid, we have added pictures as well as videos to give you a overview of what life at college being a CSI member would be. So, browse through the website, and get a good idea about CSI before you make an informed choice of joining us..
</i></p>
                      <span class="txt_orange">Perks of becoming a CSI member:</span>
                        <p class="text_perk"><i>
                      <strong>1. The events:<br></strong> CSI organises two main events every year.These two events are an assortment of several interesting technical and non technical events. There are exciting competitions related to coding, gaming, designing, debating, quizzing and much more. These fests also give you a chance to sharpen your organisational skills. And the best part about the fest is the party! And not boring, official parties, but parties where you hangout with your seniors and have lots of crazy fun and good food.
                       <br> <br><strong>2. Idg:<br></strong> idg stands for interest development group. There are so many essential skills you would want to develop to be job ready. Like photoshop, c, c++, android and windows phone app development etc. These skills are not a part of your academic curriculum. This is where idgs come into play. These sessions will be conducted by senior students every week after college time from 5-6 in the evening. The idgs are basically a golden chance to learn essential applications and their significance in the real world. 
                       <br><br><strong>3. Regular meetings:<br></strong>  there are regular short meetings at convenient timings. Now these meeting put you in the same platform as your seniors. You will get the same number of opportunities to express your ideas as a third year student will get. You get to organize, conceptualize and execute events even when you are just in your first year.
                      <br>  <br><strong>4. Interaction with seniors:<br></strong> what books to buy in your first, second or third year? Which subject is the most important? how to prepare for an interview or find a good internship? And many such questions which cross your mind will be answered by your seniors.
                      <br>  <br><strong>5. Make your CV look good:<br></strong> it is no secret that an attractive CV ensures a higher probability of getting a job. This is where your association with csi proves to be useful. The organisational  and technical skills that you learn while being a part of csi and its events, will certainly add glitter to your resume and help you get that fat pay check at your dream company.

<br>Every year, several CSI students get internships and placements in prestigious companies like Amazon, Google, Directi, Epic, Codenation etc.  CSI -DTU organizes regular interactive sessions with seniors and alumni who have had work experience in such companies.
             </i> </p>
                </div>  
            </div>
        </div>


        <!-- Upcoming events -->
         <div id="CSI-updates" class="featured-section" style="margin-top:-90px;">
                    <div class="container">
                    <div class="row">
                    <div class="CSI-slogan text-center">
                    <span class="txt_darkgrey"></span><span class="txt_orange">What's New </span>
                    </div>
                    </div>

                            <div class="featured-main">


                                <div class=" col-md-4 feature-text">

                                    <img src="images/orientation.jpg" alt="">
                                    <h3>CSI Orientation</h3>
                                        <p>Looking for a society that will give you Technical as well as Non Technical Exposure ?
                                        If yes,then your search is over. CSI-DTU presents to you its orientation on 18Th of August.
                                        </br>Venue: Dr. B.R. Ambedkar Auditorium
                                        </br>Timings: 4:45pm onwards</p>
                                        <div class= "wecome-button">
                                            <a class="button rotate2" href="#">Read More<span> </span></a>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 feature-text">
                                        <img src="images/hacking1.jpg" alt="">
                                        <h3>CSI Hacking Workshop</h3>
                                        <p>"Ethical Hacking & Cyber Forensics" workshop is organised by CSI-DTU. It is a 2 day workshop (total of 16 hours) meant for all those interested in learning hacking and cyber security. We collaborate with different security consulting firms and conduct the workshop.</p>
                                        <div class= "wecome-button">
                                            <a class="button rotate2" href="#">Read More<span> </span></a>
                                        </div>
                                    </div>  
                                    <div class=" col-md-4 feature-accord">
                                <ul class="topic_grid">
                                   <li class="list1"><h3 class="m_3">NEWS & UPDATES</span></h3><div class="clear5"></div></li>
                                 </ul>
                                  <div class="menu_vertical">
                                    <section class="accordation_menu">
                                      <div>
                                        <input id="label-1" name="lida" type="radio" checked/>
                                       <label for="label-1" id="item1"><i class="ferme"> </i><span class="m_5">Treasure Hunt</span><i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                                        <div class="content" id="a1">
                                          <ul class="news_list">
                                             <li class="date_desc">
                                                    <p>CSI-DTU organised a treasure hunt recently in which lot of futchas participated and won exciting prices.</p>
                                             </li>
                                             <div class="clearfix"> </div>
                                          </ul>
                                        </div>
                                      </div>
                                      <div>
                                        <input id="label-2" name="lida" type="radio"/>
                                        <label for="label-2" id="item2"><i class="icon-leaf" id="i2"></i>Avantgrade<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                                        <div class="content" id="a2">
                                           <ul class="news_list">
                                             <li class="date_desc">
                                                <p>"Avantgarde" is a techinical week organised just after our tiring mid sems exams.It is a 3-4 days event with many competitions.</p>
                                             </li>
                                             <div class="clearfix"> </div>
                                          </ul>      
                                        </div>
                                      </div>
                                      <div>
                                        <input id="label-3" name="lida" type="radio"/>
                                        <label for="label-3" id="item3"><i class="icon-trophy" id="i3"></i>IDGs<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                                        <div class="content" id="a3">
                                           <ul class="news_list">
                                             <li class="date_desc">
                                                <p>A platform to enhance your skills a learn a lot more.Special classes on coding,android development,web deplopment,etc. are organised by seniors.</p>
                                             </li>
                                             <div class="clearfix"> </div>
                                          </ul>
                                        </div>
                                      </div>
                                       <div>
                                        <input id="label-4" name="lida" type="radio"/>
                                        <label for="label-4" id="item4"><i class="icon-trophy" id="i4"></i>Hasta La Vista<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                                        <div class="content" id="a4">
                                           <ul class="news_list">
                                             <li class="date_desc">
                                                <p>"Hasta la Vista" is the Fuchcha Week where futchas get the chance to participate in some simple mind games and grab prizes !</p>
                                             </li>
                                             <div class="clearfix"> </div>
                                          </ul>
                                        </div>
                                      </div>
                                       <!--div>
                                        <input id="label-5" name="lida" type="radio"/>
                                        <label for="label-5" id="item5"><i class="icon-trophy" id="i5"></i>Ut aliquam Solliicitudin <i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                                        <div class="content" id="a5">
                                           <ul class="news_list">
                                             <li class="date_desc">
                                                <p>Etiam feugiat lectus nisl, in euismod lectus viverra et. 
                                                Sed et scelerisque felis. Integer vel volutpat massa. 
                                                Donec id justo nisl. Vivamus .</p>
                                             </li>
                                             <div class="clearfix"> </div>
                                          </ul>
                                        </div>
                                      </div-->
                                    </section>

                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>          


                    <!-- Upcoming events -->
        

        

        <div  id="CSI-council">
            <div class="container">
                 <div class="row">
                    <div class="CSI-slogan text-center">
                    <span class="txt_darkgrey"></span><span class="txt_orange">Council 2015-16</span>
                    </div>


                <!--div class="row">
                    <div class="CSI-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left"/><span><strong>COUNCIL 2015-16</strong></span>
                            <hr class="team_hr team_hr_right" />
                        </div>
                    </div>
                </div-->
                <div class="clearfix"> </div>
                    
                        <div class="col-lg-4 col-md-4  ">
                                    <span class="label label-orange">Faculty Advisors</span>
                                    <div class="table-responsive">
                                                <table class=" table table-condensed table-bordered">
                                                    
                                                        <tr>
                                                            <th>CSE Department         </th>
                                                            <td>Vinod Kumar</td>
                                                        </tr>
                                                        
                                                </table>
                                            </div>






                                    <span class="label label-orange">4th Years</span>
                                    <div class="table-responsive">
                                                <table class=" table table-condensed table-bordered">
                                                    
                                                        <tr>
                                                            <th>President</th>
                                                            <td>Ashutosh Kumar</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                
                                                            <th>Vice President</th>
                                                            <td>Shubham Varshney</td>
                                                        
                                                        </tr>

                                                        <tr>
                                                            <th>General Secretary</th>
                                                            <td>Aditya Rajan Tigga</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Treasurer</th>
                                                            <td>Arushi Jain</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Chief Technical Head (LINUX)</th>
                                                            <td>Vikas Malviya</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Chief Technical Head (Programming)</th>
                                                            <td>Sanchit Abrol</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Editor</th>
                                                            <td>Richa Yadav</td>
                                                        </tr>
                                                </table>
                                            </div>      

                                    </div>
                        
                        <div class="col-lg-4 col-md-4 ">
                                <span class="label label-orange">3rd Years</span>
                                    <div class="table-responsive">
                                                <table class="table table-condensed table-bordered">
                                                        <tr>
                                                            <th>Joint Secretary</th>
                                                            <td>Anish Philip</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th>Technical Head</th>
                                                            <td>Mayank</td>
                                                        </tr>

                                                        <tr>
                                                            <th>Technical Head</th>
                                                            <td>Vayu Sikka</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th>Joint Technical Head</th>
                                                            <td>Shubham</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th>Web Development Head</th>
                                                            <td>Shreyas Sinha</td>
                                                        </tr>

                                                         <tr>
                                                            <th>Joint Web Development Head</th>
                                                            <td>Lovepreet Singh</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th>Corporate Head</th>
                                                            <td>Gurnaz Kaur</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th>Joint Corporate Head</th>
                                                            <td>Sapna Saini</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th>Event Management Head</th>
                                                            <td>Shashank Shekhar</td>
                                                        </tr>
                                                        
                                                        
                                                        
                                                </table>
                                            </div>
                            
                        </div>

                        <div class="col-lg-4 col-md-4  ">
                                <span class="label label-orange">3rd Years</span>
                                    <div class="table-responsive">
                                                <table class="table-condensed table-bordered">
                                                        <tr>
                                                            <th>Creative Head</th>
                                                            <td>Disha Shokeen</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th>Content Management Head</th>
                                                            <td>Anandita Bindra</td>
                                                        </tr>

                                                        <tr>
                                                            <th>Joint Content Management Head</th>
                                                            <td>Cherry Agrawal</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th>Publicity Head</th>
                                                            <td>Kunal</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Joint Publicity Head</th>
                                                            <td>Mahesh</td>
                                                        </tr>
                                                        <tr>
                                                            <th>IDG Head</th>
                                                            <td>Nidhi Goel</td>
                                                        </tr>
                                                         <tr>
                                                            <th>Joint IDG Head</th>
                                                            <td>Aryan Raj</td>
                                                        </tr>

                                                        <tr>
                                                            <th>Public Relation Head</th>
                                                            <td>Ekta Punia</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Joint Public Relation Head</th>
                                                            <td>Priyank Verma</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Infrastructure And Logistics Head</th>
                                                            <td>Akash</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Joint Infrastructure And Logistics Head</th>
                                                            <td>Sarvesh</td>
                                                        </tr>
                                            </table>
                                </div>
                         </div>
                    </div>
            </div>
        </div><!-- /.CSI-team -->

        <div id="CSI-gallery" >
            <div class="container">
                 <div class="row">
                    <div class="CSI-slogan text-center">
                    <span class="txt_darkgrey"></span><span class="txt_orange">Gallery</span>
                </div>



                <!--div class="row">
                    <div class="CSI-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey"><strong>GALLERY</strong></span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                </div-->
                    <div class="clearfix"></div> 
                    <div class="CSI-gallery-category" style="font-size:16px; margin-top:-20px;">
                        <div class="text-center"><strong>
                            <a class="active" href=".gallery">All</a> / <a href=".gallery-orientation">ORIENTATION </a>/ <a href=".gallery-events">EVENTS</a> / <a href=".gallery-team-work">TEAM WORK</a> / <a href=".gallery-after-parties">AFTER PARTIES</a> </strong>                        
                        </div>
                    </div>
                </div> <!-- /.row -->


                <div class="clearfix"></div>
                <div class="text-center">
                    <ul class="CSI-project-gallery" >
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-orientation" >
                            <a class="colorbox" href="images/CSI_LOGO_gallery.png" data-group="gallery-orientation">
                                <div class="CSI-project-box">

                                    <img src="images/CSI_LOGO_gallery.png" class="img-responsive" alt="gallery" />

                                    <div class="project-overlay">
                                        <h5>Orientation</h5>
                                        <hr />
                                        <h4>OUR LOGO</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-events" >
                            <a class="colorbox" href="images/treasure1.jpg" data-group="gallery-events">
                                <div class="CSI-project-box">
                                    <img src="images/treasure1.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Events</h5>
                                        <hr />
                                        <h4>TREASURE HUNT!!!</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-events" >
                            <a class="colorbox" href="images/valediction.jpg" data-group="gallery-events">
                                <div class="CSI-project-box">
                                    <img src="images/valediction.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Events</h5>
                                        <hr />
                                        <h4>VALEDITION</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-team-work" >
                            <a class="colorbox" href="images/valediction.jpg" data-group="gallery-team-work">
                                <div class="CSI-project-box">
                                    <img src="images/valediction3.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Team Work</h5>
                                        <hr />
                                        <h4>YEAH!!!!</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-events" >
                            <a class="colorbox" href="images/team.jpg" data-group="gallery-events">
                                <div class="CSI-project-box">
                                    <img src="images/team.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Events</h5>
                                        <hr />
                                        <h4>CSI COMRADES!!!!</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-events">
                            <a class="colorbox" href="images/seniors.jpg" data-group="gallery-events">
                                <div class="CSI-project-box">
                                    <img src="images/seniors.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Events</h5>
                                        <hr />
                                        <h4>OUR SENIORS!!!</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-after-parties" >
                            <a class="colorbox" href="images/pic3.jpg" data-group="gallery-after-parties">
                                <div class="CSI-project-box">
                                    <img src="images/pic3.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>After Parties</h5>
                                        <hr />
                                        <h4>FOOD FOOD!!!</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-team-work" >
                            <a class="colorbox" href="images/team_csi.jpg" data-group="gallery-team-work">
                                <div class="CSI-project-box">
                                    <img src="images/team_csi.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Team work</h5>
                                        <hr />
                                        <h4>OUR STRENGHT!!!</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-orientation" >
                            <a class="colorbox" href="images/pic4.jpg" data-group="gallery-orientaion">
                                <div class="CSI-project-box">
                                    <img src="images/pic4.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Orientation</h5>
                                        <hr />
                                        <h4>LET'S INTERACT!!! </h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-after-parties" >
                            <a class="colorbox" href="images/pic2.jpg" data-group="gallery-after-parties">
                                <div class="CSI-project-box">
                                    <img src="images/pic2.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>After Parties</h5>
                                        <hr />
                                        <h4>YEAH!!!!</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul><!-- /.gallery -->
                </div>
                <div class="clearfix"></div>
                <div class="row text-center">
        
                </div>
            </div><!-- /.container -->
        </div> <!-- /.CSI-gallery -->


        <div id="CSI-fests">
            <div class="container">

            <div class="row">
                    <div class="CSI-slogan text-center">
                    <span class="txt_darkgrey"></span><span class="txt_orange">Events</span>
                    <br class="clearfix"/>
            </div>

                 

                <!--div class="row">
                    <div class="CSI-line-header"  >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey"><strong>EVENTS</strong></span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <br class="clearfix"/>
                </div-->
                
       <div class="blog_box">
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                            
                                    <img class="img-responsive" src="images/ORI.jpg" alt="gallery 1" />
                                
                            </li>
                            <li  class="col-md-8">
                                <div class="pull-left">
                                
                                    <span class="blog_header"><i><strong>ORIENTATION</strong></i></span><br/>
                                    
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-orange" href="events.php#ORI" role="button">Read More</a>
                                </div> 

                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    Meet Us and Join Us - The most interactive, fun loving and advanced techno-management society of DTU. Face-to-face orientation to know who we are, what we do and our vision. Don't miss this golden opportunity :)
                                </p>
                            </li>
                        </ul>

                        

                    </div> <!-- /.blog_post 1 -->

                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                            
                                    <img class="img-responsive" src="images/IDG.jpg"  alt="gallery 4" />
                            
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header"><i><strong>IDGs</strong></i></span><br/>
                                    
                                </div>

                                <div class="pull-right">
                                    <a class="btn btn-orange" href="events.php#IDG" role="button">Read More</a>
                                </div> 

                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                "INTEREST DEVELOPMENT GROUPS(IDGs)" is a platform to enhance your skills a learn a lot more.Special classes on coding,android development,web deplopment,etc. are organised by seniors.The classes are held on weekly basis.
                                    </p>
                            </li>
                        </ul>

                        

                    </div> <!-- /.blog_post 6 -->

                    
                    
                    <div class="CSI_clear"></div>
                    
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                <img class="img-responsive" src="images/SCT.jpg" alt="gallery 3" />
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header"><i><strong>SECRETS OF TRADE</strong></i></span><br/>
                                   </div>
                                   
                                   <div class="pull-right">
                                    <a class="btn btn-orange" href="events.php#SCT" role="button">Read More</a>
                                    
                                    </div> 
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                        An Interactive session where seniors placed in companies such as Google, Goldman Sachs, Amazon, EPIC, ZS Associates, etc will not only tell you their interview experiences but also clear all your doubts regarding the placement session.All Juniors are Invited.
                                </p>
                            </li>
                        </ul>   
                    </div><!-- /.blog_post 3 -->
                    
                    
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                
                                    <img class="img-responsive" src="images/HLV.jpg"  alt="gallery 4" />
                                
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header"><i><strong>HASTA LA VISTA</strong></i></span><br/>
                                </div>

                                <div class="pull-right">
                                    <a class="btn btn-orange" href="events.php#HLV" role="button">Read More</a>
                                </div> 
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    "Hasta la Vista" is the Fuchcha Week organised, co-ordinated and volunteered by first year members of the Computer Society of India-DTU Chapter. It's the chance to participate in some simple mind games and grab prizes !
                                </p>
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 5 -->

                    <div class="clearfix"></div>        <!-- this is a bug fix here -->
                    
                    
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                
                                    <img class="img-responsive" src="images/PH.jpg"  alt="gallery 4" />
                            
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header"><i><strong>PHOENIX</strong></i></span><br/>
                                </div>

                                <div class="pull-right">
                                    <a class="btn btn-orange" href="events.php#PHOENIX" role="button">Read More</a>
                                </div> 

                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    "PHOENIX" is the annual techno management fest organised in the month of febuary.Many technical and non technical events are organised. 
                                </p>
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 7-->



                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                <img class="img-responsive" src="images/EHW.jpg" alt="gallery 2" />
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header"><i><strong>ETHICAL HACKING WORKSHOP</strong></i></span><br/>
                                </div>

                                <div class="pull-right">
                                    <a class="btn btn-orange" href="events.php#ETW" role="button">Read More</a>
                                </div> 
                                
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                        "Ethical Hacking & Cyber Forensics" workshop is organised by CSI-DTU. It is a 2 day workshop (total of 16 hours) meant for all those interested in learning hacking and cyber security.
                                        We collaborate with different security consulting firms and conduct the workshop.
                                </p>
                            </li>
                        </ul>   
                    </div><!-- /.blog_post 2 -->

                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                
                                    <img class="img-responsive" src="images/AVT.jpg"  alt="gallery 4" />
                                
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header"><i><strong>AVANTGARDE</strong></i></span><br/>
                                </div>

                                <div class="pull-right">
                                    <a class="btn btn-orange" href="events.php#AVT" role="button">Read More</a>
                                </div>  
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    "Avantgarde" is a techinical week organised just after our tiring mid sems exams.It is a 3-4 days event with many competitions.
                                </p>
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 4 -->

                    
                </div>
            </div>
        </div>      



        <div id="CSI-contact">
            <div class="container">
                
                 <div class="row">
                    <div class="CSI-slogan text-center">
                    <span class="txt_darkgrey"></span><span class="txt_orange">Contact Us</span>
                    </div>


                <!--div class="row">
                    <div class="CSI-line-header head_contact">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey"><strong>CONTACT US</strong></span>
                            <hr class="team_hr team_hr_right hr_gray"/>
                        </div>
                    </div-->

                    <div class="col-md-8">
                        <div class="CSI-contact-map" id="map-canvas"> </div>  
                        <div class="clearfix"></div>
                        <i>You can find us  <a href="http://dtu.ac.in/" target="blank" ><strong>@ DELHI TECHNOLOGICAL UNIVERSITY</strong>,</a> Bawana Road, Rohini, Delhi</i>
                    </div>
                    <div class="col-md-4 contact_right">
                        
                        <p><img src="images/location.png" alt="icon 1" /> Computer Society of India @ Delhi Technological University, Delhi</p>
                        <p><img src="images/phone1.png"  alt="icon 2" /> 010-020-0340</p>
                        <p><img src="images/globe.png" alt="icon 3" /><a class="link_orange" href="http://phoenix.csidtu.in/" target="_blank"><span class="txt_orange"><strong>www.phoenix.csidtu.in</strong></span></a></p>


                        <form class="form-horizontal" action="contact.php" id="contactform">
                            <div class="form-group">
                                
                                <input type="text" name="name" class="form-control" placeholder="Your Name..." maxlength="40" />
                            </div>
                            <div class="form-group">
                                
                                <input type="email" name="email" class="form-control" placeholder="Your Email..." maxlength="40" />
                            </div>
                            <div class="form-group">
                                
                                <textarea class="form-control" name="comment" style="height: 130px;" placeholder="Write down your message..."></textarea>
                                

                            </div>
                            <button type="submit" class="btn btn-orange btn-lg pull-right">SEND</button>
                            
                        </form>
                        	
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /#CSI-contact -->


        

        <div class="CSI-sponsors" id="CSI-sponsors">
            <div class="container">
                     <div class="row">
                    <div class="CSI-slogan text-center">
                    <span class="txt_darkgrey"></span><span class="txt_orange">Our Sponsors</span>
                    </div>



                <!--div class="row">
                    <div class="CSI-line-header">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey"><strong>OUR SPONSORS</strong></span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div-->


                    <div class="text-center" style="margin-top:30px; margin-left:8%;">

                        
                            <ul class="list-inline">
                                <li class="sponsor col-sm-3 col-md-3 CSI-partner-item " style="opacity: 0.4;">
                                    <img src="Sponsors/member1.png" class="img-responsive" alt="memeber 1" />
                                </li>
                                <li class="sponsor col-sm-3 col-md-3 CSI-partner-item">
                                    
                                    <img src="Sponsors/member2.png" class="img-responsive" alt="memeber 2" />
                                </li>
                                <li class="sponsor col-sm-3 col-md-3 CSI-partner-item">
                                    
                                    <img src="Sponsors/member3.png" class="img-responsive" alt="memeber 3" />
                                </li>
                                <li class="sponsor col-sm-3 col-md-3 CSI-partner-item">
                                   
                                    <img src="Sponsors/member4.png" class="img-responsive" alt="memeber 4" />
                                </li>
                            </ul>
                             <ul class="list-inline">
                                
                                <li class="sponsor col-sm-3 col-md-3 CSI-partner-item">
                                    
                                    <img src="Sponsors/member5.png" class="img-responsive" alt="memeber 5" />
                                </li>
                                <li class="sponsor col-sm-3 col-md-3 CSI-partner-item">
                                    
                                    <img src="Sponsors/member6.png" class="img-responsive" alt="memeber 6" />
                                </li>
                                <li class=" sponsor col-sm-3 col-md-3 CSI-partner-item">
                                    
                                    <img src="Sponsors/member7.png" class="img-responsive" alt="memeber 7" />
                                </li>
                                <li class=" sponsor col-sm-3 col-md-3 CSI-partner-item">
                                    
                                    <img src="Sponsors/member8.png" class="img-responsive" alt="memeber 8" />
                                </li>
                            </ul>

                        

                    </div>
                </div>
            </div>
        </div>


         <div class="height30"></div>
          <div class="height30"></div>


          <!--  Quotes section starts here -->
<div class="design1">
        
                <div class="wmuSlider example1" id="item">
                   <div class="wmuSliderWrapper">
                       <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class=" item-in">
                                <img class="dotted"  src="images/qu.png" alt="" >                                     
                                <p>“Not all of us can do great things, but we can do small things with great love."</p>
                                <span>-Mother Teresa</span>
                            </div>  
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            
                                <div class=" item-in">
                                <img class="dotted" src="images/qu.png" alt="" >    
                                <p>“We make a living by what we get. We make a life by what we give.”</p>
                                <span>-Winston Churchill</span>
                            </div>                      
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class=" item-in">
                                <img class="dotted" src="images/qu.png" alt="" >    
                                <p>“The best way to find yourself is to lose yourself in the service of others.” </p>
                                <span>-Mahatma Gandhi</span>
                            </div>      
                        </article>                      
                     </div>
                    <ul class="wmuSliderPagination">
                        <li><a href="#" class="">0</a></li>
                        <li><a href="#" class="">1</a></li>
                        <li><a href="#" class="">2</a></li>
                    </ul>
                </div>
                                                                 
            </div>
<!-- Quotes section ends here -->

        

        <!--start-footer-->
    <div class="footer">
        <div class="container">
            <div class="footer-main">
                <div class="col-md-6 footer-left">
                    <ul>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="twit"> </span></a></li>
                        <li><a href="#"><span class="in"> </span></a></li>
                    </ul>
                </div>
                <div class="col-md-6 footer-right">
                    <p>Copyright © 2015 CSI-DTU   |   Design By : <a href="web.php">WEB-D TEAM CSI-DTU</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
       
            <script type="text/javascript">
                                    $(document).ready(function() {
                                        /*
                                        var defaults = {
                                            containerID: 'toTop', // fading element id
                                            containerHoverID: 'toTopHover', // fading element hover id
                                            scrollSpeed: 1200,
                                            easingType: 'linear' 
                                        };
                                        
                                        */
                                        $().UItoTop({ easingType: 'easeOutQuart' });
                                        
                                    });
                                </script>
                    <a href="#CSI-carousel" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
    <!--end-footer-->

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/CSI_script.js"  type="text/javascript"></script>
       


        <!---- start-smoth-scrolling---->

        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>

<!---- start-smoth-scrolling---->
       

        

        <script src="js/jquery.wmuSlider.js"></script> 
        <script>
           $('.example1').wmuSlider(
                
            );         
        </script><!-- deals with quotes  --> 
    </body>
<script type='text/javascript' src='js/logging.js'></script>
</html>