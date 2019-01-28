<?php

include('conn.php');
	session_start();
// NOT, must not retrieve document that has both search terms, narrow result
if($_REQUEST['submit3']){
$text = $_GET['text'];
//$text1 = $_GET['text3'];
if(empty($text)){
	$msg = '<h4>You must type a word to search!</h4>';
}else{
	$msg = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM data WHERE text NOT LIKE '%$text%'";
	//$sele1 = "SELECT * FROM data WHERE text LIKE '%$text3%'";
	
  //$sele="SELECT * FROM data WHERE text LIKE '%" . $text .  "%' AND text LIKE '%" . $text1 ."%'"; 
	$result = mysqli_query($conn,$sele);
	//$result1 = mysql_query($sele1);
	
	if($mak = mysqli_num_rows($result) > 0){
		//&&($mak1 = mysql_num_rows($result1) > 0)){
		while($row = mysqli_fetch_assoc($result)){
			//&&($row1 = mysql_fetch_assoc($result1))){
		echo '<h4> Id: '.$row['id'];
		echo '<br> name: '.$row['name'];
		echo '<br> text: '.$row['text'];
		
		//echo '<h4> Id: '.$row1['id'];
		//echo '<br> name: '.$row1['name'];
		//echo '<br> text: '.$row1['text'];
		echo '</h4>';
	}
}else{
echo'<h2> Search Result</h2>';

print ($msg);
}
mysqli_free_result($result);
//mysql_free_result($result1);
mysqli_close($conn);
}
}

?>
