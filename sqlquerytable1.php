<?php
global $wpdb;
$result = $wpdb->get_results( "SELECT id, time FROM time_stamp ORDER  BY id DESC
LIMIT 1;");
echo "<style>";
echo "body {font-family: Arial;}";
echo ".table_container { padding: 10px 12px 0px 12px;  border: 1px solid #ccc;  }";
echo ".table_container th { background-color:lightblue; color:white; font-weight:bold; border-left: 1px solid white;}";
echo "</style></head>";
echo "<body>";
echo "<div class=\"table_container\"><table>";
echo "<tr><th style=\"padding-left:10px;\">time</th></tr>";
foreach ($result as $row) {
	echo "<tr><td>" . $row->time . "</td></tr>";
}
echo "</table></div>";
?>