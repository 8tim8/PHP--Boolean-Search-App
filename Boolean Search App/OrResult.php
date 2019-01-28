<?php
include('conn.php');
	session_start();
//OR, must retrieve all document that has search terms, broaden results
if($_REQUEST['submit2']){
$text1 = $_GET['text'];
$text2 = $_GET['text2'];
if(empty($text1)||empty($text2)){
	$msg = '<h4>You must type a word to search!</h4>';
}else{
	$msg = '<h4>No match found!</h4>';
	$select1 = "SELECT * FROM data WHERE text LIKE '%$text1%'";
	$select2 = "SELECT * FROM data WHERE text LIKE '%$text2%'";
	
  //$sele="SELECT * FROM data WHERE text LIKE '%" . $text1 .  "%' AND text LIKE '%" . $text2 ."%'"; 
	$result1 = mysqli_query($conn,$select1);
	$result2 = mysqli_query($conn,$select2);
	
	if(($mak = mysqli_num_rows($result1) > 0)
		||($mak1 = mysqli_num_rows($result2) > 0)){
			
		while(($row1 = mysqli_fetch_assoc($result1))
			||($row2 = mysqli_fetch_assoc($result2))){
		echo '<h4> Id: '.$row1['id'];
		echo '<br> name: '.$row1['name'];
		echo '<br> text: '.$row1['text'];
		
		echo '<h4> Id: '.$row2['id'];
		echo '<br> name: '.$row2['name'];
		echo '<br> text: '.$row2['text'];
		echo '</h4>';
	}
}else{
echo'<h2> Search Result</h2>';

print ($msg);
}
mysqli_free_result($result1);
mysqli_free_result($result2);
mysqli_close($conn);
}
}

?>
