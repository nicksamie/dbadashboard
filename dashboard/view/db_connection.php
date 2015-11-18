<?php
   $host        = "host=redshift-accolade-new.c5gnv3svzt6p.us-east-1.redshift.amazonaws.com";
   $port        = "port=5439";
   $dbname      = "dbname=dev";
   $credentials = "user=sameer_shrestha password=SMr@9$*2";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n"."</br>";
   }

   $sql =<<<EOF
      SELECT *from INFORMATION_SCHEMA.TABLES ;
EOF;

   echo "Host Name : ".$host . "</br>";
?>
   <table border="1">
     <tr>
         <th>table_catalog </th>
         <th>table_schema</th>
         <th>table_name</th>

     </tr>
<?php 
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
<!--  echo "<tr>";
                                                         echo "<td>";
                                                         echo "<td>".$row["table_catalog"]."</td>";
                                                         echo "<td>".$row["table_schema"]."</td>";
                                                         echo "<td>".$row["table_name"]."</td>";
                                                         echo "<td>"; -->