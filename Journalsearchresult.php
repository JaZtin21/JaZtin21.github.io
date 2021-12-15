<?php
include('database.php');

	session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
  <script src="assets/owlcarousel/owl.carousel.js"></script>
  
  <script src="./scripts/CETproj.js"></script>
  <link rel="stylesheet" href="./styles/CETproj.css" />

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
        <a class="nav-link"  style="color:white;text-decoration:none;" href="CETproj.html">Welcome 
<?php 
		
if (isset($_SESSION['logintype'])){
   
   if ($_SESSION['firstname'] && $_SESSION['lastname']) {
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname']; 
  echo "$firstname $lastname";  
}?>	
<?php       
	 }else  {
		 echo ("Visitor");   
}
?></a>
      </li>



    </ul>
</div>
</div>

<div class="collapse navbar-collapse ml-1   " id="collapsibleNavbar"  >
<div class=" d-flex ml-auto " style="">

<ul class="navbar-nav "  >
	
<?php
if (isset($_SESSION['logintype'])){
    if ($_SESSION['logintype'] === 'admin') {?>

	  <li class="nav-item bg-sm-dark">
        <a class="nav-link navlinkbuttons" href="ManageBookspageAdd.php">Manage Books</a>
      </li>	
	   <li class="nav-item bg-sm-dark">
        <a class="nav-link navlinkbuttons" href="CETprojCartpage.html">Manage Transactions</a>
      </li>	 

<?php       
    }else if ($_SESSION['logintype'] === 'student') {
?>
	   <li class="nav-item bg-sm-dark">
        <a class="nav-link navlinkbuttons" href="CETprojCartpage.html">Borrow Records</a>
      </li>	  
<?php       
    }
}
?>
 <span class="navline my-1 " ></span>

	
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






<div class="container mt-0 px-lg-3  px-md-2 px-0 navchange h-25 " style="max-width:1150px;">

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
<?php echo "<a class='bookdescriptioncontainerhome text-decoration-none ' href ='index.php'>"; ?>
<li class="homebutton  d-flex align-items-center mt-2  w-100 " >
<i class="fas fa-home h-10 mr-2 align-items-center "></i><h5 class=" buttontext align-items-center mt-2 justify-content-center" >Home</h5>
</li>
</a>

<?php echo "<a class='bookdescriptioncontainerhome text-decoration-none d-flex' href ='AdvanceSearch.php'>"; ?>
<li class="homebutton d-flex align-items-center mt-2 w-100 ">
<i class="fas fa-search mr-2 align-items-center  "></i><h5 class="buttontext align-items-center mt-2 justify-content-center" >Browse</h5>
</li>
</a>
<?php
if (isset($_SESSION['logintype'])){
    if ($_SESSION['logintype'] === 'admin' || $_SESSION['logintype'] === 'student' ) {?>
	
<?php echo "<a class='bookdescriptioncontainerhome text-decoration-none d-flex' href ='logout.php'>"; ?>
<li class="homebutton d-flex align-items-center mt-2 w-100 ">

<i class="fas fa-sign-in-alt mr-2 align-items-center  "></i><h5 class="buttontext align-items-center mt-2 justify-content-center" >Logout</h5>
</li>
</a>


<?php       
	} }else  {
?>

<?php echo "<a class='bookdescriptioncontainerhome text-decoration-none d-flex' href ='LoginPage.php'>"; ?>
<li class="homebutton d-flex align-items-center mt-2 w-100 ">
<i class="fas fa-sign-in-alt mr-2 align-items-center  "></i><h5 class="buttontext align-items-center mt-2 justify-content-center" >Login</h5>
</li>
</a>

<?php       
}
?>
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
<?php
include('database.php');

$Department = $_GET['Department'];

$limit = 5;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$start_from = ($page-1) * $limit;  

$sql = "SELECT * FROM journals where Department= '" . $Department . "' LIMIT $start_from, $limit ";
$bookselect = mysqli_query($conn, $sql);



?>
<?php
	/*
		Place code to connect to your DB here.
	*/
	
	// How many adjacent pages should be shown on each side?
	$adjacents = 1;

	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
$result_db = mysqli_query($conn,"SELECT COUNT(*) FROM journals where Department= '" . $Department . "'"); 
$row_db = mysqli_fetch_row($result_db);  
$total_pages = $row_db[0];  

	
	/* Setup vars for query. */
	$limit = 5; 								//how many items to show per page
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */

	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a class=' page mr-1 px-2 pb-1' href='Journalsearchresult?Department=".$Department."&page=".$prev."'>«</a>";
		else
			$pagination.= "<span class=\"disabled pb-1 d-none\">« previous</span>";	
		
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"activepage-items mx-1 px-2 \">$counter</span>";
				else
					$pagination.= "<a class='  page mx-1 px-2' href='Journalsearchresult?Department=".$Department."&page=".$counter."'>$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"activepage-items mr-1 px-2 \">$counter</span>";
					else
						$pagination.= "<a class='  page mr-1 px-2' href='Journalsearchresult?Department=".$Department."&page=".$counter."'>$counter</a>";					
				}
				$pagination.= "<span class=\"mr-1 \">...</span>";
				$pagination.= "<a class='  page mr-1 px-2 ' href='Journalsearchresult?Department=".$Department."&page=".$lpm1."' >$lpm1</a>";
				$pagination.= "<a class='  page mr-1 px-2 ' href='Journalsearchresult?Department=".$Department."&page=".$lastpage."' >$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a class='  page mr-1 px-2 ' href='Journalsearchresult?Department=".$Department."&page=1' >1</a>";
				$pagination.= "<a class='  page mr-1 px-2 ' href='Journalsearchresult?Department=".$Department."&page=2' >2</a>";
				$pagination.= "<span class=\"mr-1 \">...</span>";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"activepage-items mr-1 px-2 \">$counter</span>";
					else
						$pagination.= "<a class='  page mr-1 px-2 ' href='Journalsearchresult?Department=".$Department."&page=".$counter."' >$counter</a>";					
				}
				$pagination.= "<span class=\"mr-1 \">...</span>";
				$pagination.= "<a class='  page mr-1 px-2 ' href='Journalsearchresult?Department=".$Department."&page=".$lpm1."' >$lpm1</a>";
				$pagination.= "<a class='   page mr-1 px-2 ' href='Journalsearchresult?Department=".$Department."&page=".$lastpage."' >$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a class='  page mr-1 px-2' href='Journalsearchresult?Department=".$Department."&page=1' >1</a>";
				$pagination.= "<a class='   page mr-1 px-2' href='Journalsearchresult?Department=".$Department."&page=2'>2</a>";
				$pagination.= "<span class=\"mr-1 \">...</span>";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"activepage-items mr-1 px-2 \">$counter</span>";
					else
						$pagination.= "<a class='   page mr-1 px-2 pb-1 ' href='Journalsearchresult?Department=".$Department."&page=".$counter."'>$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a class='   page mr-1 px-2 pb-1' href='Journalsearchresult?Department=".$Department."&page=".$next."' >»</a>";
		else
			$pagination.= "<span class=\"disabled d-none\">next »</span>";
		$pagination.= "</div>\n";		
	}
?>


<div class="logincontainer browsecontainer d-flex px-3 pb-3 " style="width:99.3%;margin-top:64px;">
<!-- Nav tabs -->
<div class="resultsection mt-2 d-flex align-items-center  w-100">
<h5 class="resulttext" > Search Result: </h5>
<h5 class="resultfor mx-2 px-2 py-1" >
<?php echo $Department ?>
</h5>




</div>
<div id="target-content" class="productsitemlist   mt-2 mx-0 mx-md-0" style="" >
<?php while($row = mysqli_fetch_assoc($bookselect)) { 
?>

	<?php echo "<a class='card  my-3 productcard d-block text-decoration-none ' href ='Openjournal.php?id=".$row["id"]."'>"; ?>
	<div class="row no-gutters d-inline-flex py-md-3 py-2 px-md-3 px-2" >
	<div class="col d-flex mx-auto h-100 align-items-center justify-content-center productcardimg" >
	<?php echo '<img class="cardimg text-dark"  alt="No Image Preview " src="'.$row['image'] .'"/>';  ?>

	</div>
    <div class="card-body p-0 d-flex productcardbody" >
	<div class="col pr-0"> 
        <h4 class="card-title itemname my-0  w-100 "><?php echo $row["JournalTitle"]; ?></h4>
        <p class="card-text itemprice px-2 bg-dark my-1 d-inline-flex">-<?php echo substr($row['Author'], 0, 20) .((strlen($row['Author']) > 20) ? '...' : ''); ?> </p> 
        <p class="card-text itemdescription my-1  w-100">Adaptation of the first of J.K. Rowling's popular children's novels about Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own. He is summoned from his life as an unwanted child to become a student at Hogwarts, an English boarding school for wizards. There, he meets several friends who become his closest allies and help him discover the truth about his parents' mysterious deaths.</p>
    </div>

    </div>
	</div>
	</a>	
	
    <?php
    }

?>
<?=$pagination?>







</div>


</div>



</div>







</div>


</div>

</div>


</body>

</html>