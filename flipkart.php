<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
<style>
<!--for dropdown -->
.dropdown{
  position : relative;
  display : inline-block;
  }
.dropdown-content{
  display : none;
  position : absolute;
  background-color:white;
  padding:12px 16px;
  }
 .dropdown:hover .dropdown-content{
  display:block;
  }
 .zoom:hover {
  -ms-transform: scale(1.5); 
  -webkit-transform: scale(1.5);
  transform: scale(1.5); 
}

</style>
<title>Flipkart website</title>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body bgcolor="snow">
<table border="0" width="100%" bgcolor="#2874F0">
<tr>
<td align="right"><a href="http://localhost/login/flipkart.php"><img src="logo.png"></a></td>
<th><input type="text" placeholder="search for products,brands and more" style="width:550px;height:25px;"><a href="/users/edit"><i class="fas fa-search" style="color:white"></i>
<div id="Dropdown" class="dropdown-content">
<a href="#support">Cameras</a>
<a href="#tools">jewellers</a>
<a href="#tools">Femalewatchs</a>
<a href="#furnitures">furnitures</a>
</div>
<th><a href="http://localhost/login/login.php">Login</a></th>
<th>More</th>
<th style="color:white"><a href="http://localhost/login/cart.php"><img src="cart.png"></a></th>
<table border="0" width="100%" bgcolor="white">
<tr>
<th width="12.5%">
<div class="dropdown">
<span>Electronics</span>
<div class="dropdown-content">
<p>phones</a></p>
<p>Laptops</p>
<p>Headphones</p>
<p>Mobile charges</p>
<p>Powerbank</p>
<p>
</th>
<th width="12.5%">
<div class="dropdown">
<span>TV & Appliances</span>
<div class="dropdown-content">
<p>Television</p>
<p>Microwaveoven</p>
<p>Air conditioners</p>
<p>Refrigerators</p>
<p>WaterPurifiers</p></th>
<th width="12.5%">
<div class="dropdown">
<span>Men</span>
<div class="dropdown-content">
<p>Clothing</p>
<p>Footwear</p>
<p>Perfumes</p>
<p>Sunglasses</p>
<p>Men's Grooming</p></th>
<th width="12.5%">
<div class="dropdown">
<span>Women</span>
<div class="dropdown-content">
<p>Clothing</p>
<p>Footwear</p>
<p>Jewellery</p>
<p>Beauty products</p>
<p>Watches</p></th>
<th width="12.5%">
<div class="dropdown">
<span>Baby & kids</span>
<div class="dropdown-content">
<p>kids clothing</p>
<p>Kidsfootwear</p>
<p>Toys</p>
<p>School bags</p>
<p>Lunch Box</p></th>
<th width="12.5%">
<div class="dropdown">
<span>Home & Furniture</span>
<div class="dropdown-content">
<p>Cookware</p>
<p>Dinnerware</p>
<p>Livingroom Furniture</p>
<p>Kitchen Storage</p>
<p>Home Decor</p></th>
<th width="12.5%">
<div class="dropdown">
<span>Sports,Books& Offers</span>
<div class="dropdown-content">
<p>Cricket bat</p>
<p>Batminton bat</p>
<p>Web-design book</p>
<p>C-programming book</p>
<p>Thomas calculas</p></th>
<th width="12.5%">
<div class="dropdown">
<span>Flights Offer Zone</span>
<div class="dropdown-content">
<p>clothes on 20% off</p>
<p>Laptops on 10% off</p>
<p>Headphones on 5% off</p></th>
</table>
<table>
<div class="banner">
<style>
.banner {
    width: 100%;
	height: 405px;
    background-position: center;
    background-image:
    url(https://img.global.news.samsung.com/in/wp-content/uploads/2021/06/8410_M32-Newsroom-Cover-Banners_1000x563.jpg);
  }
</style>
</div>
</table>
<br>
<table border="0" width="100%" bgcolor="white">
<tr>
<td colspan="5"><h2>Cameras</h2><hr></td>
<tr>
<th><img src="https://m.media-amazon.com/images/I/71L-ZUu6fvL._SX355_.jpg" width="60%" class="zoom"></th>
<th><img src="https://www.freeiconspng.com/uploads/camera-icon--reality-icons--softiconsm-29.png" width="65%" class="zoom"></th>
<th><img src="https://i.pinimg.com/736x/69/76/46/69764619239a7fb8a5dcb5d21e44f06a.jpg" width="20%" class="zoom"></th>
<th><img src="https://www.freeiconspng.com/thumbs/camera-photo-png/displaying-19-images-for--video-camera-png-16.png" width="60%" class="zoom"></th>
<th><img src="https://p.kindpng.com/picc/s/53-534249_camera-png-image-free-download-searchpng-canon-m50.png" width="60%" class="zoom"></th>
</tr>
<tr>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<tr>
<th><font color="red">Price:999/-</font></th>
<th><font color="red">Price:899/-</font></th>
<th><font color="red">Price:1020/-</font></th>
<th><font color="red">Price:1050/-</font></th>
<th><font color="red">Price:799/-</font></th>
</tr>
<tr>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
</tr>
</table>
<br>
<table border="0" width="100%" bgcolor="white">
<td colspan="5"><h2>Books</h2><hr></td>
<tr>
<th><img src="https://studio.uxpincdn.com/studio/wp-content/uploads/2017/01/the-book.png" width="60%" class="zoom"></th>
<th><img src="https://images-na.ssl-images-amazon.com/images/I/712XlaVQ8OL.jpg" width="30%" class="zoom"></th>
<th><img src="https://media.wiley.com/product_data/coverImage300/17/11195268/1119526817.jpg" width="60%" class="zoom"></th>
<th><img src="https://m.media-amazon.com/images/I/5172fLTlvpL.jpg" width="60%" class="zoom"></th>
<th><img src="https://cdn.codegym.cc/images/article/63752ba5-1c33-4cf3-b813-5143b91775c1/512.jpeg" width="60%" class="zoom"></th>
</tr>
<tr>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<tr>
<th><font color="red">Price:2000/-</font></th>
<th><font color="red">Price:4999/-</font></th>
<th><font color="red">Price:3000/-</font></th>
<th><font color="red">Price:4050/-</font></th>
<th><font color="red">Price:1000/-</font></th>
</tr>
<tr>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart1.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart1.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart1.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart1.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart1.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
</tr>
</table>
<br>
<table border="0" width="100%" bgcolor="white">
<td colspan="5"><h2>Jewellerys</h2><hr></td>
<tr>
<th><img src="https://m.media-amazon.com/images/I/81LMvUUqQ3L._UL1500_.jpg" width="70%" class="zoom"></th>
<th><img src="https://www.teahub.io/photos/full/49-495389_gold-jewellery-wallpaper-best-necklace-designs-in-gold.jpg" width="70%" class="zoom"></th>
<th><img src="https://images.naptol.com/usr/local/csp/staticContent/product_images/horizontal/750x750/Set-of-2-Gold-Jewellery-Collection-2.jpg" width="70%" class="zoom"></th>
<th><img src="https://www.businessinsider.in/thumb/msid-86839939,width-640,resizemode-4/Master.jpg" width="70%" class="zoom"></th>
<th><img src="https://jewelboxstore.com/wp-content/uploads/2021/02/sliders-3.png" width="70%" class="zoom"></th>
</tr>
<tr>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<tr>
<th><font color="red">Price:1050/-</font></th>
<th><font color="red">Price:800/-</font></th>
<th><font color="red">Price:499/-</font></th>
<th><font color="red">Price:2999/-</font></th>
<th><font color="red">Price:999/-</font></th>
</tr>
<tr>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart2.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart2.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart2.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart2.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart2.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
</tr>
</table>
<br>
<table border="0" width="100%" bgcolor="white">
<td colspan="5"><h2>Phones</h2><hr></td>
<tr>
<th><img src="https://images-na.ssl-images-amazon.com/images/I/717KHGCJ6eL._AC._SR360,460.jpg" width="80%" class="zoom"></th>
<th><img src="https://images-na.ssl-images-amazon.com/images/I/61vGqZ1RVbS._AC._SR360,460.jpg" width="50%" class="zoom"></th>
<th><img src="https://m.media-amazon.com/images/I/71tm+ZgeR4S._AC_SX679_.jpg" width="50%" class="zoom"></th>
<th><img src="https://m.media-amazon.com/images/I/51uEwkqjZTL._AC_SX522_.jpg" width="50%" class="zoom"></th>
<th><img src="https://img.republicworld.com/republic-prod/stories/images/15915972555eddd8c7cc0d3.jpg" width="50%" class="zoom"></th>
</tr>
<tr>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<tr>
<th><font color="red">Price:9999/-</font></th>
<th><font color="red">Price:12999/-</font></th>
<th><font color="red">Price:8999/-</font></th>
<th><font color="red">Price:15950/-</font></th>
<th><font color="red">Price:19999/-</font></th>
</tr>
<tr>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart3.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart3.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart3.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart3.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart3.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
</tr>
</table>
<br>
<table border="0" width="100%" bgcolor="white">
<td colspan="5"><h2>Female Watches</h2><hr></td>
<tr>
<th><img src="https://m.media-amazon.com/images/I/61CJWR5qMpL._SY355_.jpg" width="60%" class="zoom"></th>
<th><img src="https://m.media-amazon.com/images/I/61ecFVc1bfL._UX342_.jpg" width="60%" class="zoom"></th>
<th><img src="https://m.media-amazon.com/images/I/61Z5u9dS+LL._AC_UX522_.jpg" width="40%" class="zoom"></th>
<th><img src="https://m.media-amazon.com/images/I/61ZHKtDKjnL._AC_UX522_.jpg" width="30%" class="zoom"></th>
<th><img src="https://m.media-amazon.com/images/I/81WYba+zHQL._AC_UL320_.jpg" width="60%" class="zoom"></th>
</tr>
<tr>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
</th>
<tr>
<th><font color="red">Price:1059/-</font></th>
<th><font color="red">Price:2999/-</font></th>
<th><font color="red">Price:999/-</font></th>
<th><font color="red">Price:1050/-</font></th>
<th><font color="red">Price:3999/-</font></th>
</tr>
<tr>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
</tr>
</table>
<br>
<table border="0" width="100%" bgcolor="white">
<td colspan="5"><h2>Furniture</h2><hr></td>
<tr>
<th><a href="file:///C:/xampp/furniture.html"><img src="https://m.media-amazon.com/images/I/61C2X6tVhxL._SX425_.jpg" width="70%" class="zoom"></th>
<th><a href="file:///C:/xampp/furniture.html"><img src="https://s3.envato.com/files/253761246/Bed%20in%20the%20wooden%20box%2006%20(1).jpg" width="70%" class="zoom"></th>
<th><a href="file:///C:/xampp/furniture.html"><img src="https://m.media-amazon.com/images/I/61tio3GSk2L._SX425_.jpg" width="60%" class="zoom"></th>
<th><a href="file:///C:/xampp/furniture.html"><img src="https://m.media-amazon.com/images/I/41gMSkvOFHL._SX425_.jpg" width="60%" class="zoom"></th>
<th><a href="file:///C:/xampp/furniture.html"><img src="https://m.media-amazon.com/images/I/61+hj58-++L._SX425_.jpg" width="60%" class="zoom"></th>
</tr>
<tr>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
</th>
<tr>
<th><font color="red">Price:99999/-</font></th>
<th><font color="red">Price:12000/-</font></th>
<th><font color="red">Price:28999/-</font></th>
<th><font color="red">Price:999/-</font></th>
<th><font color="red">Price:15999/-</font></th>
</tr>
<tr>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
</tr>
</table>
<br>
<table border="0" width="100%" bgcolor="white">
<td colspan="5"><h2>Sports</h2><hr></td>
<tr>
<th><img src="https://m.media-amazon.com/images/I/A1WSVmJBojL._AC_SX425_.jpg" width="50%" class="zoom"></th>
<th><img src="https://m.media-amazon.com/images/I/31easbFLhrL._SX425_.jpg" width="60%" class="zoom"></th>
<th><img src="https://images-eu.ssl-images-amazon.com/images/I/5153HQ3tKoL._AC._SR360,460.jpg" width="50%" class="zoom"></th>
<th><img src="https://images-eu.ssl-images-amazon.com/images/I/61eGHgDn-1L._AC._SR360,460.jpg" width="50%" class="zoom"></th>
<th><img src="https://m.media-amazon.com/images/I/71iPZsU69GL._SX425_.jpg" width="50%" class="zoom"></th>
</tr>
<tr>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
</th>
<th>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</th>
<tr>
<th><font color="red">Price:999/-</font></th>
<th><font color="red">Price:699/-</font></th>
<th><font color="red">Price:899/-</font></th>
<th><font color="red">Price:150/-</font></th>
<th><font color="red">Price:489/-</font></th>
</tr>
<tr>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
<th>
<a href="http://localhost/login/form.php"><img src="https://freepngimg.com/thumb/buy/1-2-buy-now-png-clipart.png" width="90" height="90">
<a href="http://localhost/login/cart4.php"><img src="https://www.eatingthaifood.com/wp-content/uploads/2011/12/add-to-cart.png" width="95" height="95">
</th>
</tr>
</table>
</br></br></br>
<table border="0" width="100%" bgcolor="DarkBlue">
<tr>
<td><font color="white" width="25%"><b>Quickdelivery</b></font></td>
<td><font color="white" width="25%"><b>Social</b></font></td>
<td><font color="white" width="25%"><b>Help</b></font></td>
<td><font color="white" width="25%"><b>Policy</b></font></td>
<td><font color="white" width="25%"><b>Address</b></font></td>
</tr>
<tr>
<td><font color="white">
<ul>
<li>Electronics</a></li>
<li>TV & Appliances</li>
<li>Men</li>
<li>Women</li>
<li>Kids</li></font></ul>
<td><font color="white">
<ul>
<li>Facebook</li>
<li>Instagram</li>
<li>Youtube</li>
<li>LinkedIn</li>
<li>Twitter</li></font>
</ul>
<td><font color="white">
<ul>
<li>Shipping</li>
<li>FAQ</li>
<li>Report</li>
<li>Payments</li>
<li>Cancellation</li></font></ul>
<td><font color="white">
<ul>
<li>Return policy</li>
<li>Terms of use</li>
<li>Security</li>
<li>Privacy</li></font></ul>
<td><font color="white">
<ul>
<li>Flipkart Internet private limited,</li>
<li>Buildings Alyssa,Begonia&</li>
<li>Clove Embassy Tech Village,</li>
<li>Outer Ring Road,</li>
<li>Karnataka</li></font></ul></tr>
</td>
<th colspan="5"><hr><font color="white"><h3><b>This website is copy right by us</b></h3></font></th>
</body>
</html>