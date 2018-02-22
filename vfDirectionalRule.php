<?php

$vfcat_idArray=array(0,1,2);
$grcat_idArray=array(3,4);
$micat_idArray=array(5,6);
$mecat_idArray=array(7,8);



function randomGen($min,$max, $count) {
    $arr = range($min, ($max-1)); 
    shuffle($arr); 
    $nonrepeatarray = array_slice($arr, 0, $count); 
    return $nonrepeatarray;
}

    

function categorizer($data,$getCat,$servings,$counter){

	global $vfcat_idArray;
    global $grcat_idArray;
    global $micat_idArray;
	global $mecat_idArray;

	$selectedArray=array(array("","",""));
    
	switch($getCat){
		case 'vf':
		 $zeroArray=array("","","","");
	     $oneArray=array("","","","");
	     $twoArray=array("","","","");
	     $zeroCount=0;
	     $oneCount=0;
	     $twoCount=0;
		for($x=0;$x < $counter; $x++){
			   if($data[$x][0] == $vfcat_idArray[0]){
				   $zeroArray[$zeroCount][0]=$data[$x][0];
				   $zeroArray[$zeroCount][1]=$data[$x][1];
				   $zeroArray[$zeroCount][2]=$data[$x][2];
				   $zeroArray[$zeroCount][3]=$x;
				   $zeroCount++;
				 }
				if($data[$x][0] == $vfcat_idArray[1]){
					   $oneArray[$oneCount][0]=$data[$x][0];
					   $oneArray[$oneCount][1]=$data[$x][1];
					   $oneArray[$oneCount][2]=$data[$x][2];
					   $oneArray[$oneCount][3]=$x;
					   $oneCount++;
				 }
				 if($data[$x][0] == $vfcat_idArray[2]){
					   $twoArray[$twoCount][0]=$data[$x][0];
					   $twoArray[$twoCount][1]=$data[$x][1];
					   $twoArray[$twoCount][2]=$data[$x][2];
					   $twoArray[$twoCount][3]=$x;
					   $twoCount++;
				   }
	    }
		            $res=$servings-2;
					if($servings==1){
		            $rnd1= randomGen(0,$oneCount,1);
					$selectedArray[0][0]=$oneArray[$rnd1[0]][0];
		            $selectedArray[0][1]=$oneArray[$rnd1[0]][1];
		            $selectedArray[0][2]=$oneArray[$rnd1[0]][2];
					}
					
					if($servings==2){
					$rnd1= randomGen(0,$oneCount,1);
					$selectedArray[0][0]=$oneArray[$rnd1[0]][0];
		            $selectedArray[0][1]=$oneArray[$rnd1[0]][1];
		            $selectedArray[0][2]=$oneArray[$rnd1[0]][2];
					
					$rnd2= randomGen(0,$twoCount,1);
					$selectedArray[1][0]=$twoArray[$rnd2[0]][0];
		            $selectedArray[1][1]=$twoArray[$rnd2[0]][1];
		            $selectedArray[1][2]=$twoArray[$rnd2[0]][2];
					}
					if($servings>2){
					      $rule1=false;
					      $rule2=false;
					      $rnd2= randomGen(0,$counter,$servings);
					      $prsArray=array();
					      for($r1=0;$r1<$servings;$r1++){
						      if($data[$rnd2[$r1]][0]==1){//if fgcat_id==1
							      $rule1=true;
						      }
						      if($data[$rnd2[$r1]][0]==2){
							      $rule2=true;
							  }
						      $prsArray[$r1]=$data[$rnd2[$r1]][0];
						  } 
						 if(!$rule1){
							 for($rr=0;$rr<$servings;$rr++){
								 if($prsArray[$rr]==0){
									 //$index1=randomGen(0,$oneCount,1);
									 $rnd2[$rr]=$oneArray[$rr][3];
									 $prsArray[$rr]=1;
									 $rule1=true;
									 break;
								 }
								 if($rule1==true){
									 break;
								}	 
							 }	 
						 }
						 if(!$rule2){
							 for($r2=0;$r2<$servings;$r2++){
								 if($prsArray[$r2]==0){
									 //$index2=randomGen(0,$twoCount,1);
									 $rnd2[$r2]=$twoArray[$r2][3];									 
									 $prsArray[$r2]=2;
									 $rule2=true;
									 break;
								 }
								 if($rule1==true){
									 break;
								} 
							 }							 
						 }
						for($r=0;$r<$servings;$r++){
						      
							  $selectedArray[$r][0]=$data[$rnd2[$r]][0];
							  $selectedArray[$r][1]=$data[$rnd2[$r]][1];
							  $selectedArray[$r][2]=$data[$rnd2[$r]][2];						      
						  }											     
					     } 
						 
						 /*?>
                         <p><h1>Vegetable and Fruites ----(<?php echo $servings?> Servings per each day)</h1></p>
                         <table border="1" align="left" cellpadding="10" dir="center">
                               <tr><b>
                                  <th>FOOD</th>
                                  <th>SERVING SIZE</th>
                                  <th>CATEGORY ID</th>
                               </b></tr><?php
						 
                         for($r=0;$r<$servings;$r++){
							 ?>
                             <tr>
                                 <td> <?php echo $selectedArray[$r][1];    ?></td>
                                 <td> <?php echo $selectedArray[$r][2];    ?></td>
                                 <td> <?php echo $selectedArray[$r][0];    ?></td>
                             </tr>
						     <?php						
					}?><br><?php*/
					return $selectedArray;		
		break;
		
	
	
			   		   
		   case "gr":
		   $threeArray=array("","","","");
		   $fourArray=array("","","","");
		   $threeCount=0;
		   $fourCount=0;
		   for($x=0;$x < $counter; $x++){
			   if($data[$x][0] == $grcat_idArray[0]){
				   $threeArray[$threeCount][0]=$data[$x][0];
				   $threeArray[$threeCount][1]=$data[$x][1];
				   $threeArray[$threeCount][2]=$data[$x][2];
				   $threeArray[$threeCount][3]=$x;
				   $threeCount++;
				   }elseif($data[$x][0] == $grcat_idArray[1]){
					   $fourArray[$fourCount][0]=$data[$x][0];
					   $fourArray[$fourCount][1]=$data[$x][1];
					   $fourArray[$fourCount][2]=$data[$x][2];
					   $fourArray[$fourCount][3]=$data[$x][2];
					   $fourCount++;
				   }
		   }
		   $res=$servings-1;
		   if($servings==1){
		            $rnd1= randomGen(0,$threeCount,1);
					$selectedArray[0][0]=$threeArray[$rnd1[0]][0];
		            $selectedArray[0][1]=$threeArray[$rnd1[0]][1];
		            $selectedArray[0][2]=$threeArray[$rnd1[0]][2];
			}

			if($servings>1){
					$rule1=false;
					$rnd2= randomGen(0,$counter,$servings);
					$prsArray=array();
					for($r1=0;$r1<$servings;$r1++){
						   if($data[$rnd2[$r1]][0]==3){//if fgcat_id==3
							      $rule1=true;
						    }
						      $prsArray[$r1]=$data[$rnd2[$r1]][0];
						  } 
						 if(!$rule1){
							 for($rr=0;$rr<$servings;$rr++){
								 if($prsArray[$rr]==4){
									 
									 $rnd2[$rr]=$threeArray[$rr][3];
									 $prsArray[$rr]=3;
									 $rule1=true;
									 break;
								 }
								 if($rule1==true){
									 break;
								}	 
							 }	 
						 }
						 
						for($r=0;$r<$servings;$r++){
						      
							  $selectedArray[$r][0]=$data[$rnd2[$r]][0];
							  $selectedArray[$r][1]=$data[$rnd2[$r]][1];
							  $selectedArray[$r][2]=$data[$rnd2[$r]][2];						      
						  }											     
					     } 
						 
						 
						 /*?>
                         <p><h1>Grains ----(<?php echo $servings?> Servings per each day)</h1></p>
                         <table border="1" align="left" cellpadding="10" dir="center">
                               <tr><b>
                                  <th>FOOD</th>
                                  <th>SERVING SIZE</th>
                                  <th>CATEGORY ID</th>
                               </b></tr><?php
						 
                         for($r=0;$r<$servings;$r++){
							 ?>
                             <tr>
                                 <td> <?php echo $selectedArray[$r][1];    ?></td>
                                 <td> <?php echo $selectedArray[$r][2];    ?></td>
                                 <td> <?php echo $selectedArray[$r][0];    ?></td>
                             </tr>
						     <?php						
					}?><br><?php*/
					return $selectedArray;		
		   break;
		   
		   case "mi":
		   $fiveArray=array("","","","");
		   $sixArray=array("","","","");
		   $fiveCount=0;
		   $sixCount=0;
		   for($x=0;$x < $counter; $x++){
			   if($data[$x][0] == $micat_idArray[0]){
				   $fiveArray[$fiveCount][0]=$data[$x][0];
				   $fiveArray[$fiveCount][1]=$data[$x][1];
				   $fiveArray[$fiveCount][2]=$data[$x][2];
				   $fiveArray[$fiveCount][3]=$x;
				   $fiveCount++;
				   }elseif($data[$x][0] == $micat_idArray[1]){
					   $sixArray[$sixCount][0]=$data[$x][0];
					   $sixArray[$sixCount][1]=$data[$x][1];
					   $sixArray[$sixCount][2]=$data[$x][2];
					   $sixArray[$sixCount][3]=$x;
					   $sixCount++;
				   }
		   }
		   
		   
		   $res=$servings-1;
		   if($servings==1){
		            $rnd1= randomGen(0,$fiveCount,1);
					$selectedArray[0][0]=$fiveArray[$rnd1[0]][0];
		            $selectedArray[0][1]=$fiveArray[$rnd1[0]][1];
		            $selectedArray[0][2]=$fiveArray[$rnd1[0]][2];
			}

			if($servings>1){
					$rule1=false;
					$rnd2= randomGen(0,$counter,$servings);
					$prsArray=array();
					for($r1=0;$r1<$servings;$r1++){
						   if($data[$rnd2[$r1]][0]==5){//if fgcat_id==5
							      $rule1=true;
						    }
						      $prsArray[$r1]=$data[$rnd2[$r1]][0];
						  } 
						 if(!$rule1){
							 for($rr=0;$rr<$servings;$rr++){
								 if($prsArray[$rr]==6){
									 
									 $rnd2[$rr]=$fiveArray[$rr][3];
									 $prsArray[$rr]=3;
									 $rule1=true;
									 break;
								 }
								 if($rule1==true){
									 break;
								}	 
							 }	 
						 }
						 
						for($r=0;$r<$servings;$r++){
						      
							  $selectedArray[$r][0]=$data[$rnd2[$r]][0];
							  $selectedArray[$r][1]=$data[$rnd2[$r]][1];
							  $selectedArray[$r][2]=$data[$rnd2[$r]][2];						      
						  }											     
					     } 
		   
		   
		   return $selectedArray;

		   break;
		   
		   case "me":
		   $rnd2= randomGen(0,$counter,$servings);
		   for($r=0;$r<$servings;$r++){						      
					$selectedArray[$r][0]=$data[$rnd2[$r]][0];
					$selectedArray[$r][1]=$data[$rnd2[$r]][1];
					$selectedArray[$r][2]=$data[$rnd2[$r]][2];						      
			}
		   
           return $selectedArray;
		   break;
		   
				
		}
	
	
	
	
}	
	
	

?>
