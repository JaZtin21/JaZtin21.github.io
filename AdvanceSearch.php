<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet"  href="styles/CETproj.css" />
     <script src="/scripts/CETproj.js"></script>
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
  <script src="assets/vendors/jquery.min.js"></script>
  <script src="assets/owlcarousel/owl.carousel.js"></script>
  <link rel="stylesheet"  href="assets/css/animate.css" />

        <script src="scripts/CETproj.js"></script>


<style>
html {
  height: 100%;
}
body {
  height: calc(100% - 32px);
}


</style>

</head>

<body style="background-color:white;background-size:cover;background-attachment:fixed;" >



<nav class="navbar-expand-md fixed-top py-1" style="background-color:#A31F1F;box-shadow: 0px 0 18px rgba(55, 66, 59, 0.08);box-shadow:   0px 0.1px 5px 0px white; z-index:5;" >
<div class="container" style="max-width:1150px;">
<div class="d-flex" > 

<div class="d-inline-flex align-items-center " style="">
  <button onclick="Opensidenav()" class=" ml-2 mr-1 ml-md-0 d-sm-block d-md-none my-0 align-items-center d-flex " type="button"  style="background-color:white;font-size:25px;border:1px solid #F2FCFF;border-radius:3px;">   
    <span class="fas fa-bars my-1 opensidenav " style="background-color:white;color:black;line-height:1.1!important" ></span>
  </button> 
 <a class="navbar-brand justify-content-center py-0 my-0 px-0 mr-1 d-none d-md-block" href="CETproj.html" style="width:100%;">
    <img class="d-flex justify-content-center " src="assets/images/puplogo.png" alt="Logo" style="height:38px;">
  </a>
</div>


<div class="d-flex " style="">
<div class="collapse navbar-collapse ml-0  " id="collapsibleNavbar"   >
    <ul class="navbar-nav "  >
      <li class="nav-item ">
        <a class="nav-link"  style="color:white;text-decoration:none;" href="CETproj.html">Welcome Visitor!</a>
      </li>



    </ul>
</div>
</div>

<div class="collapse navbar-collapse ml-1   " id="collapsibleNavbar"  >
<div class=" d-flex ml-auto " style="">

 <span class="navline my-1 " ></span>

    <ul class="navbar-nav "  >
	
      <li class="nav-item bg-sm-dark">
        <a class="nav-link navlinkbuttons" href="CETprojCartpage.html">Other Resources</a>
      </li>	  
	<li class="nav-item">
        <a class="nav-link navlinkbuttons" href="#" data-toggle="modal" data-target="#myModal">Contact Us</a>
      </li>
    </ul>

</div>
</div>




</div>
</div>
</nav>






<div class="container mt-0 px-lg-3  px-md-2 px-1 navchange h-25 " style="max-width:1150px;">

<div class="d-inline-flex w-100" >

<div class="leftblock d-none d-lg-block mt-3 " >

<div class="logo d-flex align-items-center justify-content-center mb-3 w-100 bg-dark">
<div class="logobox d-flex align-items-center justify-content-center w-100 bg-dark  px-4 py-4">
<img class="logoimg " src="assets/images/puplogo.png" alt="Card image"  >
</div>
<div class="logoname d-flex align-items-center justify-content-center mb-4 w-100 bg-dark text-light">

<h4 class="" >PUP CEA</h4>
<h3 class="" >Web Library</h3>
</div>

</div>
<ul class="homebuttons" style="padding: 0;list-style-type: none;">
<?php echo "<a class='bookdescriptioncontainerhome text-decoration-none ' href ='LibraryHome.php'>"; ?>
<li class="homebutton  d-flex align-items-center mt-2  w-100 " >
<i class="fas fa-home h-10 mr-2 align-items-center "></i><h5 class=" buttontext align-items-center mt-2 justify-content-center" >Home</h5>
</li>
</a>

<?php echo "<a class='bookdescriptioncontainerhome text-decoration-none d-flex' href ='AdvanceSearch.php'>"; ?>
<li class="homebutton d-flex align-items-center mt-2 w-100 ">
<i class="fas fa-search mr-2 align-items-center  "></i><h5 class="buttontext align-items-center mt-2 justify-content-center" >Browse</h5>
</li>
</a>
<?php echo "<a class='bookdescriptioncontainerhome text-decoration-none d-flex' href ='LoginPage.php'>"; ?>
<li class="homebutton d-flex align-items-center mt-2 w-100 ">
<i class="fas fa-sign-in-alt mr-2 align-items-center  "></i><h5 class="buttontext align-items-center mt-2 justify-content-center" >Login</h5>
</li>
</a>
</ul>

</div>

<div class="rightblock ml-0 ml-lg-3 pb-4 d-flex align-items-center justify-content-center" style="flex-direction:column;"  >

<div class="pt-3 sticktodapat">
<div class="searchbox d-flex align-items-center">
<form class="input-group ml-2 d-inline-flex" action="search.php" method="GET" >

<i class="fas fa-search mr-2 align-items-center  my-auto"></i>
<input type="text" class="form-control my-auto" name="searchtext" placeholder="Search " style="border:0;height:30px;padding-left:2px; outline:none;box-shadow:none;">
<div class="input-group-append">
      <button class="btn " type="submit" style="box-shadow:none;outline:none;">
        <i class="fa fa-arrow-right"></i>
      </button>
    </div>

</form>
</div>
</div>


<div class="logincontainer browsecontainer  d-flex  pb-3 " style="width:99.3%;margin-top:64px;">
<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item advtabs">
      <a class="nav-link active pt-3" data-toggle="tab" href="#home"><div class="d-flex align-items-center justify-content-center"><i class="fas fa-book"></i></div>Books</a>
    </li>
    <li class="nav-item advtabs">
      <a class="nav-link pt-3" data-toggle="tab" href="#menu1"><div class="d-flex align-items-center justify-content-center"><i class="fas fa-file"></i></div>Journals</a>
    </li>
    <li class="nav-item advtabs">
      <a class="nav-link pt-3" data-toggle="tab" href="#AdvancedSearch"><div class="d-flex align-items-center justify-content-center"><i class="fas fa-search"></i></div>Advanced Search</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content justify-content-center">
    <div id="home" class="container tab-pane active mt-3">
      <h4>Subjects</h4>
<!--       <div class="booksubjects mt-3 bg-dark w-100">	  </div> -->
	  



<div id="accordion" style="height:500px;overflow-y:auto;overflow-x:hidden;">
<?php
include('database.php');



$subjects = "SELECT DISTINCT(subject) FROM books  WHERE subject != '' AND subsubject !='' ORDER BY subject ASC  ";
$rs_result = mysqli_query($conn, $subjects);



while($row = mysqli_fetch_assoc($rs_result)) {

?>  
  <div class="card">
  
    <div class="card-header" id="headingOne">

      <h5 class="mb-0">
	  
	  <?php 
	  $replaced=$row["subject"] ;
	  $replacedstr = str_replace(",","_",$replaced);
	         
	  
	  echo "<button class='btn btn-link accordionbtn' data-toggle='collapse' data-target=".'#'.$replacedstr.">"; ?>
   
		
          <?php echo $row["subject"]; ?>
		  <i class="fas fa-chevron-down" style="right:0;" ></i>
		
        </button>
		
      </h5>
    </div>
<?php $replaced=$row["subject"] ;
	  $replacedstr = str_replace(",","_",$replaced);
	  
	  echo " <div  class='collapse' data-parent='#accordion' id=".$replacedstr.">"; ?>
    
      <div class="card-body row ">
	   <?php 
	   $subsubject = $row["subject"];
	   $subjects_subject = "SELECT * FROM books  WHERE subject ='$subsubject' AND subsubject != '' ORDER BY subsubject ASC ";
	   $rs_results_subject = mysqli_query($conn, $subjects_subject);
	   
	   while($row = mysqli_fetch_assoc($rs_results_subject)) { ?>
	   
	 
        <div class="col-md-6" style="min-width:0;">
	    <?php echo "<a class='px-2 my-1 py-1 d-block text-decoration-none subsubject' href ='Searchresult.php?subsubject=".$row["subsubject"]."'>"; ?>
 		 <?php  echo $row["subsubject"];?> </a>




    </div>

		   
	   <?php
	   }
	   ?>
      </div>
    </div>
  </div>
<?php
}

?>

   

</div>
    </div>
    <div id="menu1" class="container tab-pane fade mt-3 "  >
      <h4>Journals</h4>
	  <div class="" style="height:500px;overflow:auto;">	
<?php

$journalsdb = "SELECT DISTINCT(Department) FROM journals  WHERE Department != ''  ORDER BY Department ASC  ";
$journals_result = mysqli_query($conn, $journalsdb);



while($row = mysqli_fetch_assoc($journals_result)) {

?>  	


    
	  <?php echo "<a class='journalstab d-flex px-2 d-block text-decoration-none ' href ='Journalsearchresult.php?Department=".$row["Department"]."'>"; ?>
	  <?php echo $row["Department"]; ?>
	  </a>
<?php
}

?>

  </div>
	</div>
    <div id="AdvancedSearch" class="container tab-pane fade ">
	<div class="d-flex advform justify-content-center px-0 mx-0 mt-3">
      		<form class="" action="confirmation.php" method="post" autocomplete="false" autocomplete="off"  >
				<div class="modal-header align-items-center justify-content-center py-2 ">				
					<h4 class="modal-title">Advanced Search</h4>
		
				</div>
				<div class="modal-body  ">				
					<div class="form-group">
						<label>Title:</label>
						<input type="text" class="form-control" required="required" autocomplete="off"  autocomplete="false" >
					</div>
					<div class="form-group">
						<label>Author:</label>
						<input type="text" class="form-control" required="required" autocomplete="off"  autocomplete="false" >
					</div>
	                <div class="form-group">
						<label>ISBN:</label>
						<input type="text" class="form-control" required="required" autocomplete="off"  autocomplete="false" >
					</div>
					

                    <div class="form-group">
						<label>Publisher:</label>
						<input type="text" class="form-control" required="required" autocomplete="off"  autocomplete="false" >
					</div>
					<div class="form-group">
						<label>Keyword:</label>
						<input type="text" class="form-control" required="required" autocomplete="off"  autocomplete="false" >
					</div>
				</div>
				<div class="modal-footer justify-content-center bg-light ">
					
		
					<input type="submit" class="btn btn-dark"   value="Search" style="width:100%;border:1px solid black;">
				</div>
			</form>
			</div>
    </div>


</div>

<!-- 		<form action="confirmation.php" method="post" autocomplete="false" autocomplete="off"  >
				<div class="modal-header align-items-center justify-content-center">				
					<h4 class="modal-title">Advanced Search</h4>
		
				</div>
				<div class="modal-body">				
					<div class="form-group">
						<label>Title:</label>
						<input type="text" class="form-control" required="required" autocomplete="off"  autocomplete="false" >
					</div>
					<div class="form-group">
						<label>Author:</label>
						<input type="text" class="form-control" required="required" autocomplete="off"  autocomplete="false" >
					</div>
	                <div class="form-group">
						<label>ISBN:</label>
						<input type="text" class="form-control" required="required" autocomplete="off"  autocomplete="false" >
					</div>
					

                    <div class="form-group">
						<label>Publisher:</label>
						<input type="text" class="form-control" required="required" autocomplete="off"  autocomplete="false" >
					</div>
					<div class="form-group">
						<label>Keyword:</label>
						<input type="text" class="form-control" required="required" autocomplete="off"  autocomplete="false" >
					</div>
				</div>
				<div class="modal-footer justify-content-center">
					
		
					<input type="submit" class="btn btn-light"   value="Search" style="background-color:white !important;color:black;width:50%;box-shadow:0px 1px 1px 0px black;">
				</div>
			</form> -->
		



</div>



</div>







</div>


</div>

</div>


</body>

</html>