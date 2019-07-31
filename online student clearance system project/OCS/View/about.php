<?php 
    $title = "View Request";
    $active = "viewRequest";
    $approved = false;
    $rejected = false;
    include_once('./template/header.php');
    include_once('../Controller/RequestController.php');
    include_once('../Model/Request.php');
    $requestController = new RequestController();
    ?>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Online Student Clearance System</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>
<style>
</style>
    <body>
        <!-- <div>TODO write content</div>-->

<!-- <div class="h1"> -->
<div>
<h1 class="text-center my-5">Online Student Clearance System</h1>
<div class="row">
  <div class="col-md-3">
  <img src="images (1).jpg" class="img-fluid z-depth-1 rounded-circle"
      alt="Responsive image">
  </div>
  <div class="col-md-6">
  <div>
  <p>Online student clearance system is a process a student needs to complete before they leave university. They need clearance of all borrowed items from different offices. The system allows the users to check their clearance status as to whether they are in any way obligated to the university, fill and submit their clearance form, and obtain their clearance letter. Students has two status when they sick clearance: when they graduate or when they withdraw from the university. 
Users in the Existing System</p></div>
  </div>
</div>
<h1 class="text-center my-5"> Tigist Ashine</h1>
<div class="row mb-4">
  <div class="col-md-6 ml-5">
  <p>Tigist Ashine is a asoftware developer and web site manager she did an online student clearance system process a student needs to complete before they leave university. They need clearance of all borrowed items from different offices. The system allows the users to check their clearance status as to whether they are in any way obligated to the university, fill and submit their clearance form, and obtain their clearance letter. Students has two status when they sick clearance: when they graduate or when they withdraw from the university. 
Users in the Existing System</p>
  </div>
  <div class="col-md-3">
  <img src="photo_2018-04-12_20-00-14.jpg" class="img-fluid z-depth-1 rounded-circle"
      alt="Responsive image">
  </div>
</div>

 
      

  
  <!-- Grid column -->

  <!-- Grid column -->
 

<?php include_once('./template/footer.php'); ?>
    </body>
</html>
