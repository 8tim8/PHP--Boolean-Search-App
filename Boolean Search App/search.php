<html>
<title> PHP MYSQL - Search</title>
<head>
</head>

<body bgcolor= lightgreen>
<form action="result.php" method="POST">
<center><h1>Boolean Search</h1></center>
<center><h3>Search Database</h3></center>
<center><table>
<tr>
	<td>Search</td>
	<td><input type="text" name="text" size="100"></td>
	<td><input type="submit" name="submit"></td>
</tr>

</table></center>
</form>
<form action="AndResult.php" method="get">
<center><h3>Search Database</h3></center>
<center><table>

<tr>
	<td>Search "AND"</td>
	<td><input type="text" name="text" size="50"></td>
	<td><input type="text" name="text1" size="50"></td>
	<td><input type="submit" name="submit1"></td>
</tr>
</table></center>
</form>
<form action="OrResult.php" method="get">
<center><h3>Search Database</h3></center>
<center><table>

<tr>
	<td>Search "OR"</td>
	<td><input type="text" name="text" size="50"></td>
	<td><input type="text" name="text2" size="50"></td>
	<td><input type="submit" name="submit2"></td>
</tr>
</table></center>
</form>
<form action="NotResult.php" method="get">
<center><h3>Search Database</h3></center>
<center><table>

<tr>
	<td>Search "NOT"</td>
	<td><input type="text" name="text" size="50"></td>
	
	<td><input type="submit" name="submit3"></td>
</tr>
</table></center>
</form>
</body>

</html>