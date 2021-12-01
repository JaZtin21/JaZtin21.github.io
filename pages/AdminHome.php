<?php
include("../includes/db.inc.php");
session_start();
if ($_SESSION['firstname'] && $_SESSION['lastname']) {
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
} else {
  header('Location: ../index.php?login=false');
}

$query = "SELECT * FROM user.books ORDER BY date_of_addition DESC LIMIT 5;";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles/CETproj.css" />
  <script src="../scripts/CETproj.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.min.css">

  <script src="../assets/owlcarousel/owl.carousel.js"></script>
  <link rel="stylesheet" href="../assets/css/animate.css" />
  <script src="../scripts/CETproj.js"></script>


  <style>



  </style>

</head>

<body style="background-color:white;background-size:cover;background-attachment:fixed;">



  <nav class="navbar-expand-md sticky-top py-1" style="background-color:#A31F1F;box-shadow: 0px 0 18px rgba(55, 66, 59, 0.08);box-shadow:   0px 0.1px 5px 0px white; z-index:5;">
    <div class="container" style="max-width:1150px;">
      <div class="d-flex">

        <div class="d-inline-flex align-items-center " style="">
          <button onclick="Opensidenav()" class=" ml-2 mr-1 ml-md-0 d-sm-block d-md-none my-0 align-items-center d-flex " type="button" style="background-color:white;font-size:25px;border:1px solid #F2FCFF;border-radius:3px;">
            <span class="fas fa-bars my-1 opensidenav " style="background-color:white;color:black;line-height:1.1!important"></span>
          </button>
          <a class="navbar-brand justify-content-center py-0 my-0 px-0 mr-1 d-none d-md-block" href="CETproj.html" style="width:100%;">
            <img class="d-flex justify-content-center " src="../assets/images/puplogo.png" alt="Logo" style="height:38px;">
          </a>
        </div>


        <div class="d-flex " style="">
          <div class="collapse navbar-collapse ml-0  " id="collapsibleNavbar">
            <ul class="navbar-nav ">
              <li class="nav-item ">
                <a class="nav-link" style="color:white;text-decoration:none;" href="CETproj.html">Welcome <?php echo "$firstname $lastname" ?></a>
              </li>



            </ul>
          </div>
        </div>


        <div class="collapse navbar-collapse ml-1   " id="collapsibleNavbar">
          <div class=" d-flex ml-auto " style="">


            <ul class="navbar-nav ">
              <li class="nav-item bg-sm-dark">
                <a class="nav-link navlinkbuttons" href="ManageBookspageAdd.php">Manage Books</a>
              </li>
              <li class="nav-item bg-sm-dark">
                <a class="nav-link navlinkbuttons" href="CETprojCartpage.html">Manage Transactions</a>
              </li>
              <span class="navline my-1 "></span>
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

    <div class="d-inline-flex w-100">

      <div class="leftblock d-none d-lg-block mt-3 ">

        <div class="logo d-flex align-items-center justify-content-center mb-3 w-100 bg-dark">
          <div class="logobox d-flex align-items-center justify-content-center w-100 bg-dark  px-4 py-4">
            <img class="logoimg " src="../assets/images/puplogo.png" alt="Card image">
          </div>
          <div class="logoname d-flex align-items-center justify-content-center mb-4 w-100 bg-dark text-light">

            <h4 class="">PUP CEA</h4>
            <h3 class="">Web Library</h3>
          </div>

        </div>
        <ul class="homebuttons" style="padding: 0;list-style-type: none;">
          <a href="../index.html">
            <li class="homebutton  d-flex align-items-center mt-2  w-100 ">
              <i class="fas fa-home h-10 mr-2 align-items-center "></i>
              <h5 class=" buttontext align-items-center mt-2 justify-content-center">Home</h5>
            </li>
          </a>
          <a href="AdvanceSearch.html">
            <li class="homebutton d-flex align-items-center mt-2 w-100 ">
              <i class="fas fa-search mr-2 align-items-center  "></i>
              <h5 class="buttontext align-items-center mt-2 justify-content-center">Browse</h5>
            </li>
          </a>
          <a href="Login Page.php">
            <li class="homebutton d-flex align-items-center mt-2 w-100 ">
              <i class="fas fa-sign-in-alt mr-2 align-items-center  "></i>
              <h5 class="buttontext align-items-center mt-2 justify-content-center">Logout</h5>
            </li>
          </a>
        </ul>

      </div>

      <div class="rightblock d-block ml-0 ml-lg-3 mt-0">
        <div class="searchbox d-flex align-items-center mt-2 d-block d-lg-none">
          <div class="input-group ml-2 d-inline-flex" style="">
            <i class="fas fa-search mr-2 align-items-center  my-auto"></i>
            <input type="text" class="form-control my-auto" placeholder="Search " style="border:0;height:30px;padding-left:2px; outline:none;box-shadow:none;">
            <div class="input-group-append">
              <button class="btn " type="submit" style="box-shadow:none;outline:none;">
                <i class="fa fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="pt-3 sticktodapat d-none d-lg-block">
          <div class="searchbox d-flex align-items-center">
            <div class="input-group ml-2 d-inline-flex" style="">
              <i class="fas fa-search mr-2 align-items-center  my-auto"></i>
              <input type="text" class="form-control my-auto" placeholder="Search " style="border:0;height:30px;padding-left:2px; outline:none;box-shadow:none;">
              <div class="input-group-append">
                <button class="btn " type="submit" style="box-shadow:none;outline:none;">
                  <i class="fa fa-arrow-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="searchfeaturebox ">

          <div class="featuredbox mt-3 ">
            <div class="d-inline-flex w-100 h-100">

              <div class="bookimagecontainerhome justify-content-center d-block-flex h-100 ">

                <div class="d-flex pt-4 pl-4" style="height:20%;">
                  <h3 style="color:#A31F1F;">Featured</h3>
                </div>
                <div class="bookdescriptionhome d-block-flex pt-4 mx-auto mb-0 ">
                  <h2>Harry Potter and the Philosopher's Stone</h2>
                  <h4>-JK Rowling</h4>




                </div>
              </div>

              <div class="bookdescriptioncontainerhome d-flex  ">

                <div class="bookimagehome  px-2 pt-2">
                  <div class="bookimagebox d-flex align-items-center justify-content-center h-100  ">
                    <img class="bookimg " src="../assets/harry.jpg" alt="Card image">
                  </div>


                </div>

              </div>

            </div>
          </div>
        </div>


        <div class="recentlyadded" style="margin-top:18px;">
          <h3 class="d-flex align-items-center" style="font-family:cambria;font-weight:700;margin-bottom:0!important;">
            Recently Added </h3>
          <div class="recentadded mt-0  h-100 w-100">
            <div class="owl-carousel owlnew row mt-1 mx-0 low ">
              <?php
              foreach ($result as $book) {

                echo "
                <div class=\"p-1 w-100\" onclick=\"location.href='Openproducts.html';\">
                <div class=\"card newitems w-100 py-1 px-1\">
                  <div class=\"card-img-top d-flex mx-auto w-100 align-items-center justify-content-center\">
                    <img class=\"cardimg \" src='" . $book["image_url"] . "' alt=\"Card image\">
                  </div>
                  <div class=\"card-body pt-1 pb-0 px-0\">
                    <p class=\"card-title newitemname mb-0\">" . $book["book_name"] . "</p>
                    <p class=\"card-text itemauthor mb-0\">-" . $book["book_author"] . "</p>
                  </div>
                </div>
              </div>
                ";
              }
              ?>
            </div>
          </div>
        </div>

      </div>


    </div>

  </div>


</body>

</html>