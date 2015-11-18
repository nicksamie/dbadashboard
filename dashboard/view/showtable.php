<?php include ('layouts/header.php');
    require_once'../includes/db_connection.php';?>   

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Bootstrap dataTables with Toolbar</div>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">
                                       <div class="table-toolbar">
                                          <div class="btn-group">
                                             <a href="#"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
                                          </div>
                                          <div class="btn-group pull-right">
                                             <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                             <ul class="dropdown-menu">
                                                <li><a href="#">Print</a></li>
                                                <li><a href="#">Save as PDF</a></li>
                                                <li><a href="#">Export to Excel</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                        
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                            <thead>
                                                <tr>
                                                    <th>table_catalog</th>
                                                    <th>table_schema</th>
                                                    <th>table_name</th>
                                                    <th>table_type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php 

   $sql =<<<EOF
      SELECT *from INFORMATION_SCHEMA.TABLES ;
EOF;

   //echo "Host Name : ".$host . "</br>";
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
   //echo "Operation done successfully\n";
   pg_close($db);
?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                </div>
                            <!-- /block -->
            </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Bootstrap dataTables</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                        <thead>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    
                </div>
            </div>
            <hr>
           
    </div>
        <!--/.fluid-container-->

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>