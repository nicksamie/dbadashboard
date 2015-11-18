<?php 
require'../includes/db_connection.php';
   $sql =<<<EOF
      SELECT *from INFORMATION_SCHEMA.TABLES ;
EOF;

   echo "Host Name : ".$host . "</br>";
   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
      exit;
   } 
   while($row = pg_fetch_row($ret)){
      echo "<tr>";
      echo "<td>".$row[0] . "</td>";
      echo "<td>".$row[1] ."</td>";
      echo "<td>".$row[2] ."</td>";
      echo "<td>".$row[3] ."</td>";
      //echo "<td>".$row[4] ."</td>";
      echo "</tr>";
   }
   echo "Operation done successfully\n";
   pg_close($db);
?>