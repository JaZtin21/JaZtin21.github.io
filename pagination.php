<?php
include('database.php');
$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
$categorytype = "";
$sortertype = "name";
$sorterorder = "ASC";
$sort = "";


if(isset($_GET['sorted'])){
   $sort = $_GET['sorted'];
}


if(isset($_GET['categorytype'])){
   $categorytype = $_GET['categorytype'];
}
if ($categorytype == '') { 
$categorytypes ="";
}
elseif ($categorytype == 'candies') { 
$categorytypes ="WHERE category='candy'";
}
elseif ($categorytype == 'lollipop') { 
$categorytypes ="WHERE category='lollipop'";
}
elseif ($categorytype == 'chocolate') { 
$categorytypes ="WHERE category='chocolate'";
}


if ($sort == 'nameasc') { // If you Sort it with value of your  select options
$sortertype = "name";
$sorterorder = "ASC";

} elseif ($sort == 'namedesc') { // else if you do not pass any value from select option will return this
$sortertype = "name";
$sorterorder = "DESC";
} elseif ($sort == 'priceasc') { // else if you do not pass any value from select option will return this
$sortertype = "price";
$sorterorder = "ASC";
}elseif ($sort == 'pricedesc') { // else if you do not pass any value from select option will return this
$sortertype = "price";
$sorterorder = "DESC";
}
$sql = "SELECT * FROM producttable $categorytypes ORDER BY $sortertype $sorterorder LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql);

$sqls = "SELECT COUNT(id) FROM producttable $categorytypes ORDER BY $sortertype $sorterorder LIMIT $start_from, $limit";  
$rs_results = mysqli_query($conn, $sqls);
$row = mysqli_fetch_row($rs_results);  
$total_records = $row[0]; 
$total_pages = ceil($total_records / $limit); 

?>
 <?php




if (mysqli_num_rows($rs_result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($rs_result)) {

echo' <div class="card my-3  productcard" >';

echo '<div class="row no-gutters d-inline-flex py-md-3 py-2 px-md-3 px-2" >';
echo '  <div class="col d-flex" style="flex:30%;background-color:#1F0130;max-width:189px;">';

echo '      <img class="img-fluid w-100 itemimg" src="cand.png" class="card-img" alt="...">';
echo '  </div>';
echo '  <div class="card-body p-0 d-flex" style="flex:70%;"> ';
echo '      <div class="col pr-0"> ';
echo '      <h4 class="card-title itemname my-0  w-100 ">'. $row["name"].'</h4>';
echo '     <p class="card-text itemprice my-0 my-1 ">'."$ ". $row["price"].'</p> ';
echo '     <p class="card-text itemdescription my-1  w-100">'. $row["description"]. '</p>';
echo '     </div>';

 echo '  </div>';
 echo '</div>';
 echo '</div>';
 
 

  }
  
} 
 else {
  echo "0 results";
}
mysqli_close($conn);
?> 
<nav class="mt-3" >
					<ul class="pagination mx-1 mx-md-0">
                    <?php 
					if(!empty($total_pages)){
						for($i=1; $i<=$total_pages; $i++){
							
								if($i == 1){
									?>
								<li class="pageitem active" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" data-id="<?php echo $i;?>" class="page-link" ><?php echo $i;?></a></li>
															
								<?php 
								}
								else{
									?>
								<li class="pageitem" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" class="page-link" data-id="<?php echo $i;?>"><?php echo $i;?></a></li>
								<?php
								}
						}
					}
								?>
					</ul>
               </ul>
        </nav>
		
<script>
 $(document).ready(function(){
	 
 $(document).on("click", ".card-body" , function() {
		
		document.write("yoow");

        });

});	
</script>