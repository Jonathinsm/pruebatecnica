<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba Técnica</title>
</head>
<body>
<?php

echo "<h2>Servidor de pruebas PHP</h2>";
echo "<br/>";

# Llena las variables con la información de la base de datos MYSQL

$dbname = 'dbname';
$dbuser = 'user';
$dbpass = 'pass';
$dbhost = 'host';
$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("<b style='color:red;'>Unable to Connect to '$dbhost'</b>");
mysqli_select_db($link, $dbname) or die("<b style='color:red;'>Could not open the db '$dbname'</b>");
$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($link, $test_query);
$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}
if (!$tblCnt) {
  echo "<b style='color:green;'>No existen tablas</b><br />\n";
} else {
  echo "<b style='color:green;'>Hay $tblCnt tablas</b><br />\n";
}

?>
</body>
</html>