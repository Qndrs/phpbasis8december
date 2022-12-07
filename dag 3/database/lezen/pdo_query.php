<?php
# verbinding maken en functie definieren (uit basis php)
require_once("../inc/mysql_pdo_con.php") ;
# met het PDO object worden opdrachten naar de database-server gezonden
# het resultaat wordt in een variabele opgeslagen
$query = "select 'hallo wereld'";

$db_query = $db->query($query);
$db_result = $db_query->fetchAll(PDO::FETCH_OBJ);
