<?php
include('conn.php');
	session_start();
// AND, must retrieve document that has both search terms, narrow result
if($_REQUEST['submit1']){
$text = $_GET['text'];
$text1 = $_GET['text1'];
if(empty($text)||empty($text1)){
	$msg = '<h4>You must type a word to search!</h4>';
}else{
	$msg = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM data WHERE text LIKE '%$text%'";
	$sele1 = "SELECT * FROM data WHERE text LIKE '%$text1%'";
	
  //$sele="SELECT * FROM data WHERE text LIKE '%" . $text .  "%' AND text LIKE '%" . $text1 ."%'"; 
	$result = mysqli_query($conn,$sele);
	$result1 = mysqli_query($conn,$sele1);
	
	if(($mak = mysqli_num_rows($result) > 0)
		&&($mak1 = mysqli_num_rows($result1) > 0)){
		while(($row = mysqli_fetch_assoc($result))
			&&($row1 = mysqli_fetch_assoc($result1))){
		echo '<h4> Id: '.$row['id'];
		echo '<br> name: '.$row['name'];
		echo '<br> text: '.$row['text'];
		
		echo '<h4> Id: '.$row1['id'];
		echo '<br> name: '.$row1['name'];
		echo '<br> text: '.$row1['text'];
		echo '</h4>';
	}
}else{
echo'<h2> Search Result</h2>';

print ($msg);
}
mysqli_free_result($result);
mysqli_free_result($result1);
mysqli_close($conn);
}
}

?>
