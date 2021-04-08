<?php
if (isset($_POST["save"])){
$name=$_POST["name"];
$id=$_POST["id"];
if ($name=="Soap" && $id=="1")
{
  echo "<div class=\"check\">Correct entry!!</div>";
}
elseif ($name=="Milk" && $id=="2")
{
  echo "<div class=\"check\">Correct entry!!</div>";
}
elseif ($name=="Cereals" && $id=="3")
{
  echo "<div class=\"check\">Correct entry!!</div>";
}
else{
  echo "<div class=\"uncheck\">Incorrect entry!!Check the Id No.or Name!!</div>";
}
}
// define variables and set to empty values
$nameErr = $idErr = $priceErr = $addErr = "";
$name = $id = $price = $mfg = $exp = $add = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["id"])) {
    $idErr = "Item Id is required";
  } else {
    $id = test_input($_POST["id"]);
  }
    
  if (empty($_POST["price"])) {
    $priceErr = "Item Price is required";
  } else {
    $price = test_input($_POST["price"]);
  }

  if (empty($_POST["address"])) {
    $addErr = "Item Location is required";
  } else {
    $add = test_input($_POST["address"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Super Mart</title>
  <link rel="stylesheet" type="text/css" href="css/adminloginstyle.css">
</head>
<script type="text/javascript">
  function validateform(){
    var name=document.forms["adminform"]["name"];
    var id=document.forms["adminform"]["id"];
    var price=document.forms["adminform"]["price"];
    var location=document.forms["adminform"]["location"];
    if (name.value==null || name.value==""){
      alert("Name can't be left blank");
    }
    
    if (isNaN(id.value)){
      alert("Id should be a number");
    }
    
    if (isNaN(price.value)){
      alert("Price should be a number");
    }
   
    if (location.value==null || location.value==""){
      alert("Location can't be left blank");
    }
  
  }

</script>
<body>
  <h1>Admin Login Page</h1>

<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="adminform" onsubmit="return validateform()">
    <div class="input-group">
      <label>Item Name</label>
      <input type="text" name="name" value="">
      <span style="color:red;">*<?php echo $nameErr;?></span>
    </div>
    <div class="input-group">
      <label>Item Id</label>
      <input type="text" name="id" value="">
      <span style="color:red;">*<?php echo $idErr;?></span>
    </div>
     <div class="input-group">
      <label>Item Price</label>
      <input type="text" name="price" value="">
      <span style="color:red;">*<?php echo $priceErr;?></span>
    </div>
     <div class="input-group">
      <label>Item Manufacturing Date</label>
      <input type="date" 
               pattern="\d{2, 1}/\d{2, 1}/\d{4}"> 
    </div>
     <div class="input-group">
      <label>Item Expiry Date</label>
      
      <input type="date" 
               pattern="\d{2, 1}/\d{2, 1}/\d{4}"> 
    </div>
    <div class="input-group">
      <label>Item Location in Store</label>
      <input type="text" name="address" value="">
      <style="color:red;">*<?php echo $addErr;?></span>
    </div>
    <div class="input-group">

      <button class="btn" type="submit" name="save" >Add</button>
    
      <button class="btn" type="submit" name="save" >Update</button>
   
      <button class="btn" type="submit" name="save" >Delete</button>
    </div>
  </form>
</body>
<style type="text/css">
.check{
    margin-top: 5px;
    padding: 5px;
    background-color: darkgray;
    border: 2px solid #666;
    width: auto;
    color:white;
  font-family:serif;
  font-size:xxxlarge;
  text-align:center;
  
  position: fixed;
  
  border: 7px solid #8AC007;
}
.uncheck{
     margin-top: 5px;
    padding: 5px;
    background-color: darkgray;
    border: 2px solid #666;
    width: auto;
    color:white;
  font-family:serif;
  font-size:xxxlarge;
  text-align:center;
  
  position: fixed;
  
  border: 7px solid red;
}
  h1 {text-align: center;}
  body {background: url('http://all4desktop.com/data_images/original/4236532-background-images.jpg');
background-size: 100% 100%;
    
    font-size: 19px;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}

form {
   background-color: white;
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {

    margin: 10px 40px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
  align-items: right;
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}

 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
 display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
</style>
</html>