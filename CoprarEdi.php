<html>
<body>

<head>
<title>Export Booking Excel to Coprar Converter
</title>
</head>

<h2>Export Booking Excel to Corprar Converter</h2>

<?php
echo "Receiver Code:";
?> 

<form>
	<input type="text" placeholder="RECEIVER">
</form>

<?php
echo "Please change before file select. <br>";
echo "<br>Callsign Code:";
?>

<form>
	<input type="text" placeholder="XXXXX">
</form>

<?php
echo "Please change before file select. <br>";
echo "<br>Export booking excel file:";
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br>
    <a href="sample.xlsx">Sample Excel</a>
</form>

<textarea class="form-control" rows="20" cols="40">
</textarea>


	

</body>
</html>

