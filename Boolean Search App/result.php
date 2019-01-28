<?php
include('conn.php');
	session_start();
// REGULAR, must retrieve all document that has search terms
if($_REQUEST['submit']){
$text = $_POST['text'];

if(empty($text)){
	$msg = '<h4>You must type a word to search!</h4>';
}else{
	$msg = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM data WHERE text LIKE '%$text%'";
	$result = mysqli_query($conn,$sele);
	
	if($mak = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
		echo '<h4> Id						: '.$row['id'];
		echo '<br> name						: '.$row['name'];
		echo '<br> text						: '.$row['text'];
		echo '</h4>';
	}
}else{
echo'<h2> Search Result</h2>';

print ($msg);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}

?>
