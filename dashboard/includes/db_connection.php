<?php
   $host        = "host=redshift-accolade-new.c5gnv3svzt6p.us-east-1.redshift.amazonaws.com";
   $port        = "port=5439";
   $dbname      = "dbname=dev";
   $credentials = "user=sameer_shrestha password=SMr@9$*2";

//1. Create Connection to POSTGRE database
   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      //echo "Opened database successfully\n"."</br>";
   }
?>