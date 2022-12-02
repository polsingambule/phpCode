<!DOCTYPE html>
<html>
<head>
<title>Admin | C A F E N A</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/x-icon" href="images/logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
span.admin-table-txt {
    background: #dbd8d8;
    margin-left: 15px;
    border-radius: 0px 0px 0px 100px;
}
span.admin-table-txt i {
    padding: 0px 0px 0px 15px;
}
.banner_content form label {
    display: block;
    font-size: 18px;
} 
.banner_content input {
    margin: 10px 0px 20px 0px;
    width: 100%;
    height: 35px;
    padding: 0px 10px;
    border: 1px solid #d3ad7f;
}
.banner_content input:focus{
    outline: none;
}
.banner_content {
    margin: 0px 15px;
}
.banner_btn {
    text-align: right;
}
.banner_btn button {
    background: #d3ad7f;
    padding: 5px 20px;
    border: 1px solid #913b1f;
    font-weight: bold;
    cursor: pointer;
    transition: 0.5s;
}
.banner_btn button:hover{
 letter-spacing: 3px;
     border-radius: 5px;  
}
.banner_content_heading h3 {
    font-weight: bold;
    color: #221409;
}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-center">Admin Panel</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="images/logo.png" class="w3-circle w3-margin-right" style="width:85px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Mike</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr style="margin: 5px 0;">
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="http://localhost/company_project/task2/admin.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-dashboard"></i>  My Dashboard</a>
    <a href="http://localhost/company_project/task2/banner.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Banner Section</a>
    <a style="text-decoration: none;" href="http://localhost/company_project/task2/banner_tbl.php"> <span class="w3-bar-item w3-button w3-padding admin-table-txt"><i class="fa-solid fa-table"></i> Banner Table</span></a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  About Us</a>
    <span class="w3-bar-item w3-button w3-padding admin-table-txt"><i class="fa-solid fa-table"></i> About Us Table</span>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Our Menu</a>
    <span class="w3-bar-item w3-button w3-padding admin-table-txt"><i class="fa-solid fa-table"></i> Our Menu Table</span>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Our Products</a>
    <span class="w3-bar-item w3-button w3-padding admin-table-txt"><i class="fa-solid fa-table"></i> Our Products Table</span>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Cusromer's Review</a>
    <span class="w3-bar-item w3-button w3-padding admin-table-txt"><i class="fa-solid fa-table"></i> Cusromer's Review Table</span>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Contact Us</a>
    <span class="w3-bar-item w3-button w3-padding admin-table-txt"><i class="fa-solid fa-table"></i> Contact Us Table</span>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  Our Blog</a>
    <span class="w3-bar-item w3-button w3-padding admin-table-txt"><i class="fa-solid fa-table"></i> Our Blog Table</span>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Messages</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Views</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Shares</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>
  <div class="banner_content">
    <div class="banner_content_heading">
      <h3>-- Banner Section --</h3>
    </div>
    <form action="" method="POST"> 
      <label>First Heading Banner</label>
      <input type="text" name="first_heading_banner" placeholder="First Heading Banner">
      <label>Second Heading Banner</label>
      <input type="text" name="second_heading_banner" placeholder="Second Heading Banner">
      <div class="banner_btn">
        <button>Submit</button>
      </div>
    </form>
  </div>

</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
