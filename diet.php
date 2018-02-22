<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include"connect.php";
include"selection.php";
$selectedGender =$_POST["genderType"];
$selectedAge=$_POST["ageCat"];

if(isset($_POST["btnGo"]) & $selectedGender != "neutral" &  $selectedAge!= "neutral"){
	
	$query1= "SELECT fgid,servings FROM serving WHERE (gender=:sex && age=:ageCat)";
	$result1=$connect->prepare($query1);
	$result1->bindparam(':sex',$selectedGender);
	$result1->bindparam(':ageCat',$selectedAge);
	$result1->execute();
	
	while($row1=$result1->fetch(PDO::FETCH_ASSOC)){
		selectFoodItems($row1['fgid'],$row1['servings']);		
		?>
        <br>
        <?php
		} 

}else{
	header("location:index.php");
}
?>
</body>
</html>