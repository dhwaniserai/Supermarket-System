//SELECT * FROM ORDERS ORDER BY AMOUNT;

$result1 = mysqli_query($db,"SELECT * FROM ORDERS ORDER BY AMOUNT;");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "Invalid QUERY";
	} else {
		header('location: admin.php');
	}

//SELECT * FROM ORDERS WHERE ORDER_STATUS='PENDING';

$result2 = mysqli_query($db,"SELECT * FROM ORDERS WHERE ORDER_STATUS='PENDING';");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "Invalid QUERY";
	} else {
		header('location: admin.php');
	}

//SELECT DISTINCT CATEGORY FROM PRODUCT;

$result3 = mysqli_query($db,"SELECT DISTINCT CATEGORY FROM PRODUCT;");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "Invalid QUERY";
	} else {
		header('location: admin.php');
	}

//SELECT DISTINCT AVG(Amount)  FROM ORDERS GROUP BY CUSTOMER_ID;

$result4 = mysqli_query($db,"SELECT DISTINCT AVG(Amount)  FROM ORDERS GROUP BY CUSTOMER_ID;");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "Invalid QUERY";
	} else {
		header('location: admin.php');
	}

//SELECT AVG(Amount) from Orders;

$result5 = mysqli_query($db,"SELECT AVG(Amount) from Orders;");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "Invalid QUERY";
	} else {
		header('location: admin.php');
	}
