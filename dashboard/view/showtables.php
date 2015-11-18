<?php require'../includes/db_connection.php';
?>
<table border="1">
     <tr>
         <th>table_catalog </th>
         <th>table_schema</th>
         <th>table_name</th>

     </tr>
<?php 
   
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
      //echo "<td>".$row[4] ."</td>";
      echo "</tr>";
   }
   echo "Operation done successfully\n";
   pg_close($db);
?>
</table>