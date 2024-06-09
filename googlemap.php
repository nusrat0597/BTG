<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-Your">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

		<link rel="stylesheet" type="text/css" href="map.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpdYouryknf1YoNbCzqRKc4qyorYourgaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

	.full{
		height:200px;
		width:100%;
		background-color:rgba(1, 1, 12, 0.3);
		display: flex;
		justify-content: space-evenly;
		margin-top:10px;
		
	}
	.search{
    margin-top:10px;
	height:100px;
	width:450px;
	background-color:tranparent;
	
	display: flex;
    justify-content: center;
    align-items: center;

}

.search #address{

	margin-top:0;
	font-size:20px;
	color:black;
	font-weight:400;
	border-radius:4px;
}

.search #submit{

	margin-left:90px;
	font-size:18px;
	font-weight:700;
	margin-bottom:3px ;
	
}
 


.search1{
    margin-top:10px;
	height:150px;
	width:450px;
	background-color:tranparent;
	
	display: flex;
    justify-content: center;
    align-items: center;

}

.search1 #lati{

	margin-top:0;
	font-size:20px;
	color:black;
	font-weight:400;
	border-radius:4px;
}

.search1 #long{

margin-top:0;
font-size:20px;
color:black;
font-weight:400;
border-radius:4px;
}


.search1 #submit{

	margin-left:90px;
	font-size:18px;
	font-weight:700;
	margin-bottom:3px ;
	
}
</style>
	
</head>
<body>

<?php
if(isset($_POST["submit_address"]))
{
	$address = $_POST["address"];
	$address = str_replace("","+", $address);
	?>

<iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>

<?php
}
if(isset($_POST["submit_coordinates"]))
{
	$latitude = $_POST["latitude"];
	$longitude = $_POST["longitude"];
	?>

<iframe width=100% height ="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"> </iframe>	

	<?php
}
?>

<div class ="full">

<div class= "search" >

<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
<p>
	 <input type="text" name="address" id="address" placeholder="Enter your destination" required>
</p>

<input type="submit" name="submit_address" id="submit" required>

</form>

</div>

<div class="search1">

<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>"> 
	<p>
	
		<input type="text" name="latitude" id="lati"  placeholder="Enter latitude" required>

</p>

<p>
		<input type="text" name="longitude" id="long"  placeholder="Enter longitude" required>

</p>
         <input type="submit" name="submit_coordinates"  id="submit">

</form>

</div>
</body>
</html>