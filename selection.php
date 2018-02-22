<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style/mystyle.css" type="text/css" media="screen" />
<title>Untitled Document</title>
</head>

<body>
<div id="logo">
  <h1>Your Food Diet</h1>
</div>
<div id="basic-accordian" >
     <div id="test-header" class="accordion_headings header_highlight">To get next suggestion...
     <button type="button" class="btnSecond" onclick="myFunction()">Click Me!</button>
     </div>
     <div id="test-content">
        
<script>
function myFunction() {
    location.reload();
}
</script>
<?php
include"connect.php";
include"vfDirectionalRule.php";


function selectFoodItems($fgid,$servings){
	$counter=0;
    $min=0;
    global $connect;
    $data=array(array("","",""));

	$query= "SELECT fgcat_id,food,srvg_sz FROM foods WHERE fgid=:fgid";
	$result=$connect->prepare($query);
	$result->bindparam(':fgid',$fgid);
	$result->execute();

	while($row=$result->fetch(PDO::FETCH_ASSOC)){		
		$data[$counter][0]=$row['fgcat_id'];
		$data[$counter][1]=$row['food'];
		$data[$counter][2]=$row['srvg_sz'];
		$counter=$counter + 1;
	}
		
	
	
	switch ($fgid) {
    case "vf":
	     $returnedArray=categorizer($data,$fgid,$servings,$counter);
		 ?>
               <div class="accordion_child" style="display:table; width: inherit">
               <h1>Vegetable and Fruits ----(<?php echo $servings?> Servings per each day)</h1>
               <p><table border="1" align="left" class="blueTable" cellpadding="10" dir="center">
                   <tr>
                      <th>FOOD</th>
                      <th>SERVING SIZE</th>
                      <th>CATEGORY ID</th>
                   </tr>           
		 <?php
		 
		 for($i=0;$i<$servings;$i++){
			 ?>
                 <tr>
                    <td> <?php echo $returnedArray[$i][1];    ?></td>
                    <td> <?php echo $returnedArray[$i][2];    ?></td>
                    <td> <?php echo $returnedArray[$i][0];    ?></td>
                 </tr>
		<?php
		 }
		 ?>
         </table></p></div>
		 <?php		 
	     break;
    case "gr":
		$returnedArray=categorizer($data,$fgid,$servings,$counter);
		 ?>
               <div class="accordion_child" style="display:table; width: inherit">
               <h1>Grains ----(<?php echo $servings?> Servings per each day)</h1>
               <p><table border="1" align="left" class="blueTable" cellpadding="10" dir="center">
                   <tr>
                      <th>FOOD</th>
                      <th>SERVING SIZE</th>
                      <th>CATEGORY ID</th>
                   </tr>           
		 <?php
		 
		 for($i=0;$i<$servings;$i++){
			 ?>
                 <tr>
                    <td> <?php echo $returnedArray[$i][1];    ?></td>
                    <td> <?php echo $returnedArray[$i][2];    ?></td>
                    <td> <?php echo $returnedArray[$i][0];    ?></td>
                 </tr>
		<?php
		 }
		 ?>
         </table></p></div>
		 <?php		 
	     break;
    case "mi":
		$returnedArray=categorizer($data,$fgid,$servings,$counter);
		 ?>
               <div class="accordion_child" style="display:table; width: inherit">
               <h1>Milk and Alternatives ----(<?php echo $servings?> Servings per each day)</h1>
               <p><table border="1" align="left" class="blueTable" cellpadding="10" dir="center">
                   <tr>
                      <th>FOOD</th>
                      <th>SERVING SIZE</th>
                      <th>CATEGORY ID</th>
                   </tr>           
		 <?php
		 
		 for($i=0;$i<$servings;$i++){
			 ?>
                 <tr>
                    <td> <?php echo $returnedArray[$i][1];    ?></td>
                    <td> <?php echo $returnedArray[$i][2];    ?></td>
                    <td> <?php echo $returnedArray[$i][0];    ?></td>
                 </tr>
		<?php
		 }
		 ?>
         </table></p></div>
		 <?php		 
	     break;
    case "me":
		$returnedArray=categorizer($data,$fgid,$servings,$counter);
		 ?>
               <div class="accordion_child" style="display:table; width: inherit">
               <h1>Meat and Alternatives ----(<?php echo $servings?> Servings per each day)</h1>
               <p><table border="1" align="left" class="blueTable" cellpadding="10" dir="center">
                   <tr>
                      <th>FOOD</th>
                      <th>SERVING SIZE</th>
                      <th>CATEGORY ID</th>
                   </tr>           
		 <?php
		 
		 for($i=0;$i<$servings;$i++){
			 ?>
                 <tr>
                    <td> <?php echo $returnedArray[$i][1];    ?></td>
                    <td> <?php echo $returnedArray[$i][2];    ?></td>
                    <td> <?php echo $returnedArray[$i][0];    ?></td>
                 </tr>
		<?php
		 }
		 ?>
         </table></p></div>
		 <?php		 
	     break;
    }

		
}
?>
    </div>
</div>
<!--<div id="test-header" class="accordion_headings header_highlight">Get another recommendation</div>
<div id="test-content">
  <div class="footerSecond"> 
       <h1>Get your Balanced Food Diet:</h1>
   </div>
</div>-->
 	
       

</body>
</html>