<?php
<html>
 <head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="Dunder.css" type="text/css" />  
</head>
<body>
<h1>Games</h1>

$connection = mysql_connect('localhost', 'root', 'obscure');
mysql_select_db('abcd');

$query = "SELECT * FROM inventory_group";
$result = mysql_query($query);

echo "<table>";

while($row = mysql_fetch_array($result)){
echo "<tr><td>" . $row['Title'] . "</td><td>" . $row['Price'] . "</td></tr>";
}

echo "</table>";

mysql_close();
</body>
</html>
?>