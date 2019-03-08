<?php
  $con = mysqli_connect("localhost","root","","project");
  if(isset($_POST['msg']))
  {
    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['subject'];
    $d = $_POST['message'];
  

    $sql = "insert into contact(name,email,subject,message)values('$a','$b','$c','$d')";
    $r = mysqli_query($con,$sql);
    echo "<script type='text/javascript'>alert('Thankyou for your valuable feedback our team will contact you soon.');</script>";
    echo "<script type='text/javascript'>window.open('index0.php','_self');</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDEVELOPER </title>
    <link rel="stylesheet" type="text/css" href="css/ebus.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

        <nav id="header" class="navbar navbar-fixed-top navbar-inverse">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <a id="brand" class="navbar-brand" href="#"><h1>
                    <b style="color: #3ec1d5; font-size: 36px;" >e</b><b style="font-size: 36px;">Developer</b> </h1></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#team">Team</a></li>
      <li><a href="#portfolio">portfolio</a></li>
      <li><a href="#">dropdown</a></li>
      <li><a href="#blog">Blog</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
                </div>
            </div>
        </nav>

 
  


<div id="home" class="slider_area">

	<div class="container-fluid">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="myCarousel" data-slide-to="1"></li>
      <li data-target="myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
   <div class="carousel-inner">


      <div class="item active" >
        <div class="back1">
         <div class="carousel-caption">
          <h2 class="a fadeInDown">The Best Business Information</h2>
          <h1 class="b fadeInUp">We're In The Business Of Helping You Start Your Business</h1>
          <center><button class="btn btn-info"><a href="#services">SEE SERVICES</a></button>
        <button type="button" class="btn btn-default"><a href="#about">LEARN MORE</a></button></center>
         </div>
        </div>

      </div>

      <div class="item">
        <div class="back2">
        <div class="carousel-caption">
          <h2 class="a zoomInLeft ">The Best Business Information</h2>
          <h1 class="b zoomInRight ">We're In The Business Of Get Quality Business Service</h1>
          <center><button class="btn btn-info"><a href="#services">SEE SERVICES</a></button>
        <button type="button" class="btn btn-default"><a href="#about">LEARN MORE</a></button></center>
        </div>
      </div>
      </div>
    
      <div class="item">
        <div class="back3">
        <div class="carousel-caption">
          <h2 class="a bounceInDown">The Best Business Information</h2>
          <h1 class="b bounceInUp">Helping Business Security & Peace of Mind for Your Family</h1>
          <center><button class="btn btn-info"><a href="#services">SEE SERVICES</a></button>
        <button type="button" class="btn btn-default"><a href="#about">LEARN MORE</a></button></center>
        </div>
      </div>
      </div>
  
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

<div id="about" class="about">
    <div class="container">
      <center>
      <div class="row"> 
           <div class="col-md-12">
           <h1 class="h1a">About EDeveloper</h1>
           <hr class="hr">
           </div>
      </div>
      </center> 
      <div class="row">
        <div class="about1">
        <div class="col-md-6">
          <img src="img/about/1.jpg" height=100% width="100%">
        </div>
        <div class="col-md-6">
          <div class="aleft">
         <a href="#">
          <h4 class="h4a">
            PROJECT MAINTENANCE
          </h4></a>
        <p>
         We provide affordable & innovative solutions for achieving superior business results that not only helps our clients solve given challenges, but also enable them to cut costs, streamline business operations, respond quickly to market opportunities and enhance customer service.At eBusiness we provides-

        </p>
        <ul>
          <li> <i class="fa fa-check" style="color:lightblue;"></i> Web Designing</li>
          <li><i class="fa fa-check" style="color:lightblue;"></i>Web Development</li>
          <li><i class="fa fa-check" style="color:lightblue;"></i>Web Security </li>
          <li><i class="fa fa-check" style="color:lightblue;"></i>Database Management</li>
          <li><i class="fa fa-check" style="color:lightblue;"></i>Security Assessment</li>
        </ul>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

<div id="services" class="service">
   
   <div class="container"> <center>
   
   <div class="service1">
    <div class="row">
     <div class="col-md-12">
     
     <h2>Our Services</h2> 
     <hr class="hr">
     </div>
    </div>
    </div>

   <div class="row">
    <div class="col-md-4">
      <a href="#" class="service-icon">
        <i class="fa fa-code"></i>
      </a>
      <h4>Expert Coder</h4>
      <p>will have to make sure that our websites codes is written from expert coder so the chance of mistake is negligible.</p>
 
    </div>
    
    <div class="col-md-4">
      <a href="#" class="service-icon">
        <i class="fa fa-camera-retro"></i></a>
      <h4>Creative Designer</h4>
      <p>will have to provide creative and innovative designs to make your bussiness sites more beautiful and attractive.</p>
    </div>

    <div class="col-md-4">
      <a href="#" class="service-icon">
        <i class="fab fa-wordpress"></i></a>
      <h4>Wordpress Developer</h4>
      <p>will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.</p>
    </div>

   </div>
   <div class="row">
    <div class="col-md-4">
      <a href="#" class="service-icon">
        <i class="fa fa-camera-retro"></i></a>
      <h4>
Social Marketer</h4>
<p>will have to make sure the marketing policies will always compantiate with your bussiness and to beat market you are always ready.</p>
    </div>
    
    <div class="col-md-4">
      <a href="#" class="service-icon">
        <i class="fa fa-chart-bar"></i></a>
      <h4>Seo Expart</h4>
   <p>SeO expert will always there for your help to run your bussiness flurently and without any distrubance.</p> 
 </div>

    <div class="col-md-4">
       <a href="#" class="service-icon">
        <i class="fa fa-ticket"></i></a>
      <h4>24/7 Support</h4>
     
      <p>will provide 24/7 services to make your bussiness growth and develoement in Industrial sector.</p>
    </div>

   </div>

</center>
</div>
</div>



<div class="prog1">
<div class="progress1">
  <div class="container">
  
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">90%</div>
            </div>
            <h3 class="progress2" style="font-weight: 500;
    color: #fff;
    padding: 11px 66px;
    font-size: 24px;">Web Design
            </h3>
        </div>
         <div class="col-md-3 col-sm-6">
            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">59%</div>
            </div>
            <h3 class="progress2" style="font-weight: 500;
    color: #fff;
    padding: 11px 66px;
    font-size: 24px;">Wordpress 
            </h3>
        </div>
         <div class="col-md-3 col-sm-6">
            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">58%</div>
            </div>
            <h3 class="progress2" style="font-weight: 500;
    color: #fff;
    padding: 11px 66px;
    margin-left: 43px;
    font-size: 24px;">Php 
            </h3>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">75%</div>
            </div>
            <h3 class="progress2" style="font-weight: 500;
    color: #fff;
    padding: 11px 66px;
    margin-left: 14px;
    font-size: 24px;">Javascript
            </h3>
        </div>
    </div>
  </div>
</div>
</div>

<div class="faq">
<div class="container">
  
  <div class="faq1">
    <div class="row">
      <div class="col-md-12">
        <h2>Faq Question</h2>
        <hr class="hr">
      </div>
    </div>
    <div class="row">
    <div class="col-md-6">
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" href="#collapseOne" data-toggle="collapse" data-parent="#accordion" style="margin-left: -315px;">
          We are creative
        </a>
      </h4>
    </div>
    <div class="panel-collapse collapse in" id="collapseOne">
      <div class="panel-body">
        <p>Our creativity is the way of designing and implementing each project, from strategy to visual communication. Creating ideas in order to meet our clients needs and ultimately impact business growth.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" href="#collapseTwo" data-toggle="collapse" data-parent="#accordion" style="margin-left: -315px;">
          We are awesome
        </a>
      </h4>
    </div>
    <div class="panel-collapse collapse" id="collapseTwo">
      <div class="panel-body">
        <p>Our organisation has young, innovative and excellently skilled minds. This makes us always up to the ongoing trends. We have a penchant for open source technologies and believe in the power of sharing ideas and resources.</p>
         
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" href="#collapseThree" data-toggle="collapse" data-parent="#accordion" style="margin-left: -315px;">
          We are secured
        </a>
      </h4>
    </div>
    <div class="panel-collapse collapse" id="collapseThree">
      <div class="panel-body">
         <p>We provide secure application, network design and added extra layer of security on our produts and also provide security assessment. We also provide more security at the time of maintanance of product or services.</p>
      </div>
    </div>
  </div>
</div>
</div>

  
        <div class="col-md-6">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active" role="presentation"><a role="tab" aria-controls="home" href="#Section1" data-toggle="tab">Project</a></li>
                    <li role="presentation"><a role="tab" aria-controls="profile" href="#Section2" data-toggle="tab">Planning</a></li>
                    <li role="presentation"><a role="tab" aria-controls="messages" href="#Section3" data-toggle="tab">Success</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs" style="border-left: 2px solid #ccc;
    border-right: 2px solid #ccc;
    border-bottom: 2px solid #ccc;">
                    <div class="tab-pane fade in active" id="Section1" role="tabpanel">
                        <h3 style="color: #333!important; padding: 10px 0 10px!important; font-weight: 600!important; text-transform: capitalize!important;">Project</h3>
                        <p>Our creativity is the way of designing and implementing each project, from strategy to visual communication. Creating ideas in order to meet our clients needs and ultimately impact business growth.</p>
                    </div>
                    <div class="tab-pane fade" id="Section2" role="tabpanel">
                         <h3 style="color: #333!important; padding: 10px 0 10px!important; font-weight: 600!important; text-transform: capitalize!important;">Planing</h3>
                        <p>Our organisation has young, innovative and excellently skilled minds. This makes us always up to the ongoing trends. We have a penchant for open source technologies and believe in the power of sharing ideas and resources.</p>
                    </div>
                    <div class="tab-pane fade" id="Section3" role="tabpanel">
                         <h3 style="color: #333!important; padding: 5px 0 5px!important; font-weight: 600!important; text-transform: capitalize!important;">Success</h3>
                        <p>We provide secure application, network design and added extra layer of security on our produts and also provide security assessment. We also provide more security at the time of maintanance of product or services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
</div>






<div id="team" class="imgoverlay">
  <div class="container">
    

    <div class="imgoverlay1">
      <div class="row">
        <div class="col-md-12">
          <center>
            <div class="imgoverlay11">
            <h2>Our Special Team</h2>
          <hr class="hr">
        </div>
          </center>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="imgover1">
        <div class="imgover">
          <div class="container1">
  <img src="img/team/1.png" alt="Avatar" class="imageover">
  <div class="overlay">
    <div class="textover">
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
       </ul>
    </div>
  </div>
</div>
        </div>
        <div class="imgtext">
          <center>
            <h4>
              Harish Dhakad
            </h4>
            <p>
              Developer and Designer
            </p>
          </center>
        </div>
      </div>
    </div>
      <div class="col-md-3">
        <div class="imgover1">
        <div class="imgover">
          <div class="container1">
  <img src="img/team/2.png" alt="Avatar" class="imageover">
  <div class="overlay">
    <div class="textover">
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
       </ul>
    </div>
  </div>
</div>
        </div>
        <div class="imgtext">
          <center>
            <h4>
              Sonal Parihar
            </h4>
            <p>
              SEO Expert
            </p>
          </center>
        </div>
      </div>
    </div>
      <div class="col-md-3">
        <div class="imgover1">
        <div class="imgover">
          <div class="container1">
  <img src="img/team/3.png" alt="Avatar" class="imageover">
  <div class="overlay">
    <div class="textover">
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
       </ul>
    </div>
  </div>
</div>
        </div>
        <div class="imgtext">
          <center>
            <h4>
              Deepika Dhakad
            </h4>
            <p>
              SEO
            </p>
          </center>
        </div>
      </div>
    </div>
      <div class="col-md-3">
        <div class="imgover1">
        <div class="imgover">
          <div class="container1">
  <img src="img/team/4.png" alt="Avatar" class="imageover">
  <div class="overlay">
    <div class="textover">
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
       </ul>
    </div>
  </div>
</div>
        </div>
        <div class="imgtext">
          <center>
            <h4>
              Anil Dhakad
            </h4>
            <p>
              SEO Expert
            </p>
          </center>
        </div>
      </div>
        </div>
  
             </div>
  </div>
</div>

<div class="team">
  <div class="team1">
    <div class="team11">
      <center>
      <h2>Welcome To Our eBusiness</h2>
      <p>eBusiness is a global software and website development top rated company in India.</p>
      <div class="email">
      <input type="email" name="Email" placeholder="Email">
      <button class="btn btn-info "type="submit" style="margin-top: 0px;">Subscribe</button>
      </div>
      </center>
    </div>
   </div>
</div>

<div id="portfolio" class="pt">
<div class="container">
  
    <div class="row">
        <div class="col-md-12">
          <center>
            <div class="imgoverlay11">
            <h2>Pricing Table</h2>
          <hr class="hr"></div>
          </center>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Bronze</h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1>
                            $10<span class="subscript">/mo</span></h1>
                        
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                1 Account
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                1 Project
                            </td>
                        </tr>
                        <tr>
                            <td>
                                100K API Access
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                100MB Storage
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Custom Cloud Services
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Weekly Reports
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="#" class="btn btn-info" role="button">Sign Up</a></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="cnrflash">
                    <div class="cnrflash-inner">
                        <span class="cnrflash-label">MOST
                            <br>
                            POPULR</span>
                    </div>
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Silver</h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1>
                            $20<span class="subscript">/mo</span></h1>
                        
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                2 Account
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                5 Project
                            </td>
                        </tr>
                        <tr>
                            <td>
                                100K API Access
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                200MB Storage
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Custom Cloud Services
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Weekly Reports
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="#" class="btn btn-info" role="button">Sign Up</a></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Gold</h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1>
                            $35<span class="subscript">/mo</span></h1>
                        
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                5 Account
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                20 Project
                            </td>
                        </tr>
                        <tr>
                            <td>
                                300K API Access
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                500MB Storage
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Custom Cloud Services
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Weekly Reports
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="#" class="btn btn-info" role="button">Sign Up</a></div>
            </div>
        </div>
    </div>
</div>

</div>



 <div class="work">
    <div class="work1">
     <img src="img/about/2.jpg" height="100%" width="100%">
    </div>
      <div class="work2">
          <h2>WORKING WITH US</h2>
          <h5>WEB DESIGN, READY HOME, CONSTRUCTION AND CO-OPERATE OUTSTANDING BUILDINGS.</h5>
          <button class=btn btn-info type="submit">contact us</button>
      </div>
  </div>
  

  <div id="blog" class="news">

  <div class="container">
  <div class="news1"> 
    <div class="row">
      <div class="col-md-12"><center>
        <h2>latest news</h2>    </center> 
        <hr class="hr">  
      </div>
    </div>
  </div>
<div class="news2">
  <div class="row">
    <div class="col-md-4">
      <div class="news21">
        <div class="news21img">
          <img src="img/blog/1.jpg" width="100%" height="auto">
        </div>
        <div class="news22">
          <div class="news221">
            <i class="far fa-comment"></i>
            <a href="#">10 comments</a>
            
          </div>
          <div class="news222">
            <i class="fas fa-calendar-alt"></i>
            <a href="#">2019-01-20/09:45:50</a>
            
          </div>
        </div>
        <div class="news23">
          <h4>Best delievered services</h4>
          <p>"Edeveloper have absolutely delivered for us. They took the time to really understand our needs, researched how best to meet them, and then delivered to contract on time and to quality. I look forward to using them again in the future and have no hesitation in recommending them."
</p>
        </div>
        <div class="news24">
          <button type="submit">READ MORE</button>
        </div>
      </div>
      
    </div>

        <div class="col-md-4">
      <div class="news21">
        <div class="news21img">
          <img src="img/blog/2.jpg" width="100%" height="auto">
        </div>
        <div class="news22">
          <div class="news221">
            <i class="far fa-comment"></i>
            <a href="#">12 comments</a>
            
          </div>
          <div class="news222">
            <i class="fas fa-calendar-alt"></i>
            <a href="#">2019-01-20/09:45:50</a>
            
          </div>
        </div>
        <div class="news23">
          <h4>Appretiable work</h4>
          <p>"Give the highest appreciation to eDeveloper with its great team that understand client's need and know how to deliver it timely."

</p>
        </div>
        <div class="news24">
          <button type="submit">READ MORE</button>
        </div>
      </div>
      
    </div>


    <div class="col-md-4">
      <div class="news21">
        <div class="news21img">
          <img src="img/blog/3.jpg" width="100%" height="auto">
        </div>
        <div class="news22">
          <div class="news221">
            <i class="far fa-comment"></i>
            <a href="#">15 comments</a>
            
          </div>
          <div class="news222">
            <i class="fas fa-calendar-alt"></i>
            <a href="#">2019-01-20/09:45:50</a>
            
          </div>
        </div>
        <div class="news23">
          <h4>Professional organization</h4>
          <p>"It was clear from the first visit to eDeveloper's offic that they are a professional organization in every regard. They have well established processes and take security of their client's data and intellectual property seriously."
</p>
        </div>
        <div class="news24">
          <button type="submit">READ MORE</button>
        </div>
      </div>
      
    </div>

  </div>
</div>

</div>
  
</div>

  <div class="quotes">
  <div class="container-fluid">
  
    <div class="row">
      <div class="col-md-12">
        <div class="quotes1">
        <h3>Welcome to our ebusiness company</h3>
        <button class=btn btn-info type="submit"><a href="#about">get a quote</a></button>
      </div>
    </div>
  </div>
  </div>
</div>


 <section id="carousel">  
 <div class="testimonial">            
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
               
        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
          <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
            <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                    
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item">
                        <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote> 
            </div>
            <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
            <div class="active item">
                        <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
              </blockquote>
            </div>
                    
          </div>
        </div>
         <div class="quote">
          <a href="#"><i class="fa fa-quote-right fa-4x"></i></a>
          </div>
      </div>              
    </div>
  </div></div>
</section>




<div id="contact" class="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact1">
          <h2>Contact Us</h2>
          <hr class="hr">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="contact2">
         <i class="fa fa-mobile"></i>
         <p>
           Call: +91 76-<sub>92</sub>-04-<sub>61</sub>-08
          <br>
           <span>
             Monday-Friday (9am-5pm)
           </span>
         </p>

        </div>
        
      </div>
      <div class="col-md-4">
        <div class="contact2">
          <i class="fa fa-envelope"></i>
          <p>
           Email: info@example.com
          <br>
           <span>
             Web: www.example.com
           </span>
         </p> 
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact2">
          <i class="fa fa-map-marker"></i>
          <p>
            Location: 458558,Mandsaur
          <br>
           <span>
            (MP) INDIA
           </span>
         </p> 
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d421.1063982846556!2d75.3573108264088!3d24.10954517370743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39644a10bf682ba1%3A0x25b8948f8f6cc84!2sAris+Mension!5e1!3m2!1sen!2sin!4v1547710605428" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen>
          
        </iframe>
        
      </div>
      <div class="col-md-6">
        <form method="post">
        <input class ="input1" type="text" name="name" placeholder="Your Name"><br>
        <input class ="input1" type="Email" name="email" placeholder="Your Email"><br>
        <input class ="input1" type="text" name="subject" placeholder="Subject">
        <textarea class ="input2" type="text" name="message" placeholder="Message" row="5"></textarea>
        <div class="input3">
          <button type="submit" name="msg">Send message</button>
        
      </div>
      </form>
      </div>
    </div>
  </div>
</div>
<div class="footer1">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2>
        <b style="color: #3ec1d5;" >e</b>Business 
        </h2>
        <p>We provide affordable & innovative solutions for achieving superior business results that not only helps our clients solve given challenges, but also enable them to cut costs, streamline business operations, respond quickly to market opportunities and enhance customer service.</p>
        <div class="footicon">
          <ul>
            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
            <li><a href=""><i class="fab fa-twitter"></i></a></li>
            <li><a href=""><i class="fab fa-google"></i></a></li>
            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
        </div>

      </div>
      <div class="col-md-4">
        <div class="foot1">
          <div class="foot11">
            <h4>INFORMATION</h4>
            <p>eBusiness is a global software development company. </p>
            <div class="foot12">
              <p>
                <span>Phone:</span>
               +91-7692046108
              </p>
              <p>
                <span>E-mail:</span>
                hdhakad54@gmail.com

              </p>
              <p>
                <span>Working Hours:</span>
                9am-5pm

              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="foot2">
          <div class="foot21">
            <h4>Instagram</h4>
            <div class="image">
              <a href="#">
                <img src="img/portfolio/1.jpg">
              </a>
              <a href="#">
                <img src="img/portfolio/2.jpg">
              </a>
              <a href="#">
                <img src="img/portfolio/3.jpg">
              </a>
              <a href="#">
                <img src="img/portfolio/4.jpg">
              </a>
              <a href="#">
                <img src="img/portfolio/5.jpg">
              </a>
              <a href="#">
                <img src="img/portfolio/6.jpg">
              </a>
            </div>
          </div>
        </div>
      </div>

      
    </div>
  </div>
</div>

<div class="footer2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>
          © Copyright <strong>eBusiness.</strong>All Rights Reserved
        </p>
        <p>Designed by
          <a href="www.arisexpo.com"><strong> SONISH</strong></a>
        </p>
      </div>
      
    </div>
  </div>  
</div>












<script type="text/javascript">
  $(document).ready(function(){

/**
 * This object controls the nav bar. Implement the add and remove
 * action over the elements of the nav bar that we want to change.
 *
 * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
 */
var myNavBar = {

    flagAdd: true,

    elements: [],

    init: function (elements) {
        this.elements = elements;
    },

    add : function() {
        if(this.flagAdd) {
            for(var i=0; i < this.elements.length; i++) {
                document.getElementById(this.elements[i]).className += " fixed-theme";
            }
            this.flagAdd = false;
        }
    },

    remove: function() {
        for(var i=0; i < this.elements.length; i++) {
            document.getElementById(this.elements[i]).className =
                    document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
        }
        this.flagAdd = true;
    }

};

/**
 * Init the object. Pass the object the array of elements
 * that we want to change when the scroll goes down
 */
myNavBar.init(  [
    "header",
    "header-container",
    "brand"
]);

/**
 * Function that manage the direction
 * of the scroll
 */
function offSetManager(){

    var yOffset = 0;
    var currYOffSet = window.pageYOffset;

    if(yOffset < currYOffSet) {
        myNavBar.add();
    }
    else if(currYOffSet == yOffset){
        myNavBar.remove();
    }

}

/**
 * bind to the document scroll detection
 */
window.onscroll = function(e) {
    offSetManager();
}

/**
 * We have to do a first detectation of offset because the page
 * could be load with scroll down set.
 */
offSetManager();
});

  
</script>



</body>
</html>