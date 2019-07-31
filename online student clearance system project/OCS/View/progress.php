<?php 
    $title = "progress";
    $active = "progress";
    $approved = false;
    $rejected = false;
    include_once('./template/header.php');
    include_once('../Controller/RequestController.php');
    include_once('../Model/Request.php');   
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>OCS</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <body>
   <a class="github-source" href="https://github.com/speeedsam/CSS3-Animated-Skill-Prograss-bar"  target="_blank"><i class="fa fa-github"></i></a>
<div class="wrapper">
        <h2 class="how-title">Progress</h2>
				<br><br>
        <div class="office">
            <p>registral</p>
            <div class="skill-bar skill1 wow slideInLeft animated">
                <span class="skill-count1">95%</span>
            </div>
        </div>
        <div class="office">
            <p>proctore</p>
            <div class="skill-bar skill2 wow slideInLeft animated">
                 <span class="skill-count2">85%</span>
            </div>
        </div>
        <div class="office">
            <p>intutute</p>
            <div class="skill-bar skill3 wow slideInLeft animated">
                <span class="skill-count3">75%</span>
            </div>
        </div>
        <div class="office">
            <p>laybriary</p>
            <div class="skill-bar skill4 wow slideInLeft animated">
                <span class="skill-count4">65%</span>
            </div>
        </div>
        <div class="office">
            <p>bookstore</p>
            <div class="skill-bar skill5 wow slideInLeft animated">
                <span class="skill-count5">80%</span>
            </div>
        </div>
        <div class="office">
            <p>caffe</p>
            <div class="skill-bar skill6 wow slideInLeft animated">
                <span class="skill-count6">90%</span>
            </div>
        </div>
    </div><!-- end of /.coloumn -->



        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
 <!-- Default form login -->
 </body>
 </html>
<?php include_once('./template/footer.php'); ?>