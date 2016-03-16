<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
 body
    {
        width:20%;
        margin-left:auto;
        margin-right:auto;
    }
}
</style>
</head>
</style>
</head>
<body>
<?php
$dir = 'sqlite:/var/db/tpaper.db';
$db  = new PDO($dir) or die("cannot open the database");
print "<table class ='center'>";
print "<tr><td>Id</td><td>Name</td><td>Buy</td></tr>";
$result = $db->query('SELECT * FROM users');
foreach($result as $row)
{
print "<tr><td>".$row['ID']."</td>";
print "<td>".$row['NAME']."</td>";
print "<td>".$row['BUY']."</td></tr>";
}

print "</table>";
$db = NULL;


?>
</body>
</html>
