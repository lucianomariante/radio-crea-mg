<?php
$hostname_conectar = "mysql01-farm15.uni5.net";
$database_conectar = "radiocreaminas01";
$username_conectar = "radiocreaminas01";
$password_conectar = "zaro3w2021";
$conectar = mysqli_connect($hostname_conectar, $username_conectar, $password_conectar, $database_conectar);

if (!$conectar) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SHOW TABLES FROM $database_conectar";
$result = mysqli_query($conectar, $query);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysqli_error($conectar);
    exit;
}

while ($row = mysqli_fetch_row($result)) {
    echo "Table: {$row[0]}\n";
}

mysqli_free_result($result);
?>
