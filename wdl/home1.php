<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Super Mart Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
 
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script>
 $(document).ready(function(){
  $("#hide").click(function(){
    $("p.hide").hide();
    $("button.show").show();
  });
  $(".show").click(function(){
    $("p.hide").show();
    $("button.show").hide();
  });
});
  $(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown(500);
  });
  $("#stop").click(function(){
    $("#panel").stop();
  });
});
var d = new Date();
var greeting;
  var time = new Date().getHours();
  if (time < 10) {
    greeting = "Good morning";
  } else if (time < 18) {
    greeting = "Good Afternoon";
  } else {
    greeting = "Good evening";
  }
  
  document.getElementById("demo").innerHTML = greeting;
  var d = new Date();
document.getElementById("demo1").innerHTML = d.toDateString();


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script type="text/javascript">
  function validateform(){
    var fname=document.forms["adminform"]["fname"];
    var lname=document.forms["adminform"]["lname"];
   
    var subject=document.forms["adminform"]["subject"];
    if (fname.value==null || fname.value==""){
      alert("First Name can't be left blank");
    }
    if (lname.value==null || lname.value==""){
      alert("Last Name can't be left blank");
    }
    
    
   
    if (subject.value==null || subject.value==""){
      alert("Subject can't be left blank");
    }
  
  }

</script>
</head>
<body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
	 <a href="" class="navbar-brand font-weight-bold"> <img src="icon.png" style="height: 100px"><i> GROCERY ON WHEELS</i></a>
	 <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#collapsenavbar">
           <span class="navbar-toggler-icon"> </span>
          </button>
             
            <div class="collapse navbar-collapse text-center" id="collapsenavbar">

              <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                  <a href="" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="nav-link text-white">About</a>
                </li>
                <li class="nav-item">
                  <a href="#news" class="nav-link text-white">News</a>
                </li>
                <li class="nav-item">
                  <a href="#products" class="nav-link text-white">View Products</a>
                </li>
                <li class="nav-item">
                  <a href="#contacts" class="nav-link text-white">Contacts</a>
                </li>
                <li class="nav-item">
                  <a href="login.php" class="nav-link text-white">Logout</a>
                </li>
              </ul>  
 
          </div>
      </div>
	</nav>  <br><div class="bgimg" >
	 <div class="container text-center headerset">
      
        <h1  style="padding-top: 150px; color: black">GROCERY 1O1</h1>
        <h2 style="padding-top: 100px ;color: grey"><marquee behavior="scroll">Super Mart Management System</marquee></h2>
       
      </div>

  </div> <br>
  </div><div class="bgimg2">
 
  <br>
  <br>

  

  <section id="about" style="text-align: ;">
    <h1 style="font-family: serif; text-align:center"><b><u>ABOUT GROCERY 1O1</u></b><h1>
    </br></div>
    <div id="flip" style="font-size:x-large"> <p><b><u><br>Click  here  to know  more  abuot GROCERY 1O1– online grocery store!!!<br></b></u></p></div>
<div id="panel">
 <p class="hide">India’s first comprehensive online megastore,  Grocery101.com, brings products like household cleaning products, beauty and makeup, Grocery101 has everything you need for your daily needs. </br>Grocery101- India’s largest online supermarket, has revolutionized the way India shops for groceries.</br>
When it comes to payment, we have made it easy for our customers can pay through multiple payment channels like Credit and Debit cards, Internet Banking, e-wallets and Sodexo passes or simply pay Cash on Delivery (COD).</br>The convenience of shopping for home and daily needs, while not compromising on quality, has made Grocery101.com the online supermarket of choice for thousands </br></br><button id="hide">Show Less</button>

</t></br></p><button class="show" style="display: none">Show More</button></div><div class="bgimg2">
 <section id="products">
 <h1 style="font-family: serif;"><p id="demo"style="font-family: serif;" ></p><b><u><br>Available Products Today!!</u></b><h1>

<p id="demo1"style="font-family: serif;" ></p></br>

<div class="outer-grid">
<div class="inner-grid">
<img src="https://www.ipuro.in/uploads/ipurofoods/products/hamam-799479_s.jpg"style="heigt:150px;width:300px;"/></br>
<button class="btn" type="submit" name="save" id="myBtn">View Product</button>
 
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p style="font-size: small;"><b>Hamam Neem Tulsi & Aloe Vera Soap, 150 g</b></br> Product details</br></br>
Product Dimensions : 19.6 x 6.3 x 13.2 cm; 1.2 Kilograms</br>
Date First Available : 16 June 2020</br>
Manufacturer : Hindustan Unilever Ltd</br>
ASIN : B08B8QN595</br>
Item part number : 17627</br>
Country of Origin : India</br>
Manufacturer : Hindustan Unilever Ltd, Hindustan Unilever Ltd, Unilever House, B D Sawant Marg, Chakala Andheri East - 400099</br>
Item Weight : 1 kg 200 g</br>
Item Dimensions LxWxH : 19.6 x 6.3 x 13.2 Centimeters</br>
Units : 1200 gram</br>
Product Name : Neem Tulsi & Aloe Vera Soap</br>
Best Sellers Rank: #710 in Beauty</p>
  </div>

</div>


</div>

<div class="inner-grid">
<img class="img1" src="https://img.scoop.it/d-7e8w-AzrblJDHcOcaYcDl72eJkfbmt4t8yenImKBVvK0kTmF0xjctABnaLJIm9" heigt:150px;width:300px;/></br>
<button class="btn" type="submit" name="save" >View Product</button>
</div>
<div class="inner-grid">
<img class="img1" src="https://media.gettyimages.com/photos/full-frame-shot-of-multi-colored-vegetables-for-sale-in-store-picture-id650032511?s=612x612" heigt:150px;width:300px;></br>
<button class="btn" type="submit" name="save" >View Product</button>

</div>

<div class="inner-grid">
<img class="img1" src="https://5.imimg.com/data5/VV/IA/IG/SELLER-859759/vegetable-fruits-rack-500x500.JPG"style="heigt:150px;width:300px;"/></br>
 <button class="btn" type="submit" name="save" >View Product</button>


</div>
<div class="outer-grid">
<div class="inner-grid">
<img class="img1" src="https://5.imimg.com/data5/UI/MM/TI/SELLER-11201646/amul-dairy-products-500x500-250x250.jpg"style="heigt:150px;width:300px;"/>
 <button class="btn" type="submit" name="save" >View Product</button>


</div>
<div class="inner-grid">
<img class="img1" src="https://images.financialexpress.com/2019/11/1-736.jpg" style="heigt:150px;width:300px;"/></br>
<button class="btn" type="submit" name="save" >View Product</button>
</div>
<div class="inner-grid">
<img class="img1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSGv-mvzWYuLmnQQkGwfLBdyiZH7YbN8hWLmg&usqp=CAU" style="heigt:150px;width:300px;"/></br>
<button class="btn" type="submit" name="save" >View Product</button>

</div>

<div class="inner-grid">
<img class="img1" src="https://5.imimg.com/data5/YL/RI/OR/SELLER-95604177/stationeries-500x500-png-500x500.png" style="heigt:150px;
width:300px;"/>
 <button class="btn" type="submit" name="save" >View Product</button></br></br>

</div>
<div class="inner-grid">


</div><div class="inner-grid">


</div><div class="inner-grid">


</div>
<div class="inner-grid">
 <button class="btn1" type="submit" name="save" >CLICK HERE TO PLACE ORDER !!!</button>

</div>
 
</section>

<br>
<br>
<br>
</div><br>
<div class=bgimg2><br><br>
<section id="news">
  <h1 style="font-family: serif;"><b><u>GROCERY 1O1 NEWS</u></b><h1>


  <div class="transbox">
<p><u>Business Today</u></br>
GROCERY 1O1 targets revenue of 1CR in the next year</p></div><a href="" class="a1">Click here to know more...</a><hr>
<div class="transbox">
<p>
<u>HT Times</u></br>
GROCERY 1O1 secret to superior quality products</p></div><a href="" class="a1">Click here to know more...</a><hr><hr>
<div class="transbox"><p><u>
Reuter's</u></br>
GROCERY 1O1 is set to create an organic revolution in India</p></div><a href="" class="a1">Click here to know more...</a><hr><hr>  
</section>
<br>
<br>
<br>
<br>
 

  </section>






</div> 
<br>
  
 <section id="contacts">
   <div class="container1">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Leave us a message here</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="https://get-greenremodeling.com/wp-content/uploads/2019/02/11.png" style="width:100%">
    </div>
    <div class="column">
      <form method="POST" action="" name="adminform" onsubmit="return validateform()">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">India</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit" name="Submit">
      </form>
    </div>
  </div>
</div>
</section><br>
</body>
<style>


.a1{
	color:#9ACD32;
	font-style:Serif;
	font-size:medium;
	float:left;
}
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.container1 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.img1{ heigt:10px;
width:20px;
}
.btn {
  align-items: right;
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #9ACD32;
    border: none;
    border-radius: 5px;
}
.btn1 {

    padding: 10px;
    font-size: 25px;
    color: white;
    font-family: serif;
    background: green;
    border:solid black;
    border-radius: 5px;
}
.outer-grid {
   display: flex;
   flex-wrap: wrap;
   padding: 0 4px;
}
.inner-grid {
   flex: 25%;
   max-width: 25%;
   padding: 0 4px;
}
.inner-grid img {
   margin-top: 8px;
   width: 100%;
   padding: 10px;
}
div.transbox {
  
  background-color: #D6EAF8;
  border: 1px solid black;
  opacity: 0.9;
  padding: 10px 20px;
  border-radius: 15px;
  width:40%;
}

div.transbox p {
  font-family: serif;
  font-weight: bolder;
  font-size: large;


  
  color: #000000;
}
  * {
  box-sizing: border-box;
}

 #panel, #flip {
  padding: 5px;
  font-size: 18px;
  text-align: center;
  background-color: white;
  color: black;
  border: solid 1px #666;
  border-radius: 3px;
  font-family: serif;
}

#panel {
  padding: 50px;
  display: none;
}

.headerset{
  padding-top:250px;
  box-sizing: border-box;
}

.headerset h2{
  color:white;
  font-size: 45px;

}

.headerset h1{
  color:#ffe8df;
  font-size: 60px;
  text-align: center;
}
.container {
  padding:20px 20px;
  margin:auto;
}
.bgimg{
  background-image: url('https://img.freepik.com/free-photo/abstract-blur-supermarket_74190-5265.jpg?size=626&ext=jpg');
  background-size: 100% 100%;
  background-attachment: fixed;
  width: 100%;
  height: 660px;
}
.bgimg2{
  background-color:white;
  background-size: 100% 100%;
  background-attachment: fixed;
  width: 100%;
  height: 100%;
}

* {
  margin: 0px;
  padding: 0px;
}
body {background: #9ACD32;
  font-size: 120%;

}


</style>
</html>