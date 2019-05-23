<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {

    header('location:index.php');
} else {

    

    ?>


    <!doctype html>
    <html lang="en" class="no-js">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="theme-color" content="#3e454c">

        <title>Car Rental Portal |Admin Reports </title>

        <!-- Font awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Sandstone Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap Datatables -->
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
        <!-- Bootstrap social button library -->
        <link rel="stylesheet" href="css/bootstrap-social.css">
        <!-- Bootstrap select -->
        <link rel="stylesheet" href="css/bootstrap-select.css">
        <!-- Bootstrap file input -->
        <link rel="stylesheet" href="css/fileinput.min.css">
        <!-- Awesome Bootstrap checkbox -->
        <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
        <!-- Admin Stye -->
        <link rel="stylesheet" href="css/style.css">
        <style>
            .errorWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #dd3d36;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }

            .succWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #5cb85c;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }
        </style>

    </head>

    <body>


    <?php include('includes/header.php'); ?>

    <div class="ts-main-content">
        <?php include('includes/leftbar.php'); ?>
        <div class="content-wrapper">

            <div class="container-fluid">
                <div class="wrapper">
					<button class="btn btn-default" id="printButton" onclick="printThisDom()">Print</button>
                    <div id="printable">

					<br><br><br>
					<b> <h1><center>Bookings</center></h1></b>
					<br>
					  <?php
					                      $sql = "SELECT * from tblbooking";

                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    ?>
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <tr>

                            <th>userEmail</th>
                            <th>VehicleId</th>
                            <th>FromDate</th>
                            <th>ToDate</th>
                            <th>message</th>
                            <th>Status</th>
                            <th>PostingDate</th>
                        </tr>

                        <?php
                        foreach ($results as $result){


                            echo "<tr>";

                            echo "<td>" . $result->userEmail . "</td>";

                            echo "<td>" . $result->VehicleId . "</td>";

                            echo "<td>" . $result->FromDate . "</td>";

                            echo "<td>" . $result->ToDate . "</td>";

                            echo "<td>" . $result->message . "</td>";

                            echo "<td>" . $result->Status . "</td>";

                            echo "<td>" . $result->PostingDate . "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </table>


						<br><br><br><br><br><br><br><br><br><br><br>
					<b> <h1><center>users</center></h1></b>
							<br>
		<?php

                    $sql = "SELECT * from tblusers";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    ?>
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <tr>
							<th>FullName</th>
                            <th>EmailId</th>                            
                            <th>ContactNo</th>
                            <th>dob</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>RegDate</th>
                            <th>UpdationDate</th>
                        </tr>

                        <?php
                        foreach ($results as $result){


                            echo "<tr>";

                            echo "<td>" . $result->FullName . "</td>";

                            echo "<td>" . $result->EmailId . "</td>";

                            echo "<td>" . $result->ContactNo . "</td>";

                            echo "<td>" . $result->dob . "</td>";

                            echo "<td>" . $result->Address . "</td>";

                            echo "<td>" . $result->City . "</td>";

                            echo "<td>" . $result->Country . "</td>";

                            echo "<td>" . $result->RegDate . "</td>";

                            echo "<td>" . $result->UpdationDate . "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </table>



                    <br><br><br><br><br><br><br><br><br><br><br>
<b> <h1><center>Vehicles</center></h1></b>
<br>

<?php
                    $sql = "SELECT * from tblvehicles";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    ?>
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <tr>
							<th>VehiclesBrand</th>
                            <th>VehiclesTitle</th>                            
                            <th>VehiclesOverview</th>
                            <th>PricePerDay</th>
                            <th>PricePerKM</th>
                            <th>FuelType</th>
                            <th>ModelYear</th>
                            <th>SeatingCapacity</th>
                            <th>RegDate</th>
                            <th>UpdationDate</th>
                        </tr>

                        <?php
                        foreach ($results as $result){


                            echo "<tr>";

                            echo "<td>" . $result->VehiclesBrand . "</td>";

                            echo "<td>" . $result->VehiclesTitle . "</td>";

                            echo "<td>" . $result->VehiclesOverview . "</td>";

                            echo "<td>" . $result->PricePerDay . "</td>";

                            echo "<td>" . $result->PricePerKM . "</td>";

                            echo "<td>" . $result->FuelType . "</td>";

                            echo "<td>" . $result->ModelYear . "</td>";

                            echo "<td>" . $result->SeatingCapacity . "</td>";

                            echo "<td>" . $result->RegDate . "</td>";

                            echo "<td>" . $result->UpdationDate . "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </table>



                             <br><br><br><br><br><br><br><br><br>
<b> <h1><center>Testimonial</center></h1></b>
<br>
<?php

                    $sql = "SELECT * from tbltestimonial";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    ?>
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <tr>
							<th>UserEmail</th>
                            <th>Testimonial</th>                            
                            <th>PostingDate</th>
                            <th>status</th>                                                   
                        </tr>

                        <?php
                        foreach ($results as $result){


                            echo "<tr>";
                            
                            echo "<td>" . $result->UserEmail . "</td>";

                            echo "<td>" . $result->Testimonial . "</td>";

                            echo "<td>" . $result->PostingDate . "</td>";

                            echo "<td>" . $result->status . "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </table>



                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <br><br>
<b> <h1><center>Contactusquery</center></h1></b>
<br>
<?php

                    $sql = "SELECT * from tblcontactusquery";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    ?>
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <tr>							
							<th>name</th>
                            <th>EmailId</th>
                            <th>ContactNumber</th>
                            <th>Message</th>
                            <th>PostingDate</th>
                            <th>status</th>
                        </tr>

                        <?php
                        foreach ($results as $result){


                            echo "<tr>";                           

                            echo "<td>" . $result->name . "</td>";

                            echo "<td>" . $result->EmailId . "</td>";

                            echo "<td>" . $result->ContactNumber . "</td>";

                            echo "<td>" . $result->Message . "</td>";

                            echo "<td>" . $result->PostingDate . "</td>";

                            echo "<td>" . $result->status . "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </table>

                         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<b> <h1><center>Subscribers</center></h1></b>
<br>
<?php

                    $sql = "SELECT * from tblsubscribers";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    ?>
<table id="zctb" class="display table table-striped table-bordered table-hover"
                                       cellspacing="0" width="100%">




                                            <tr>				
							<th>SubscriberEmail</th>
                            <th>PostingDate</th>                           
                        </tr>

                        <?php
                        foreach ($results as $result){


                            echo "<tr>";                           

                            echo "<td>" . $result->SubscriberEmail . "</td>";

                            echo "<td>" . $result->PostingDate . "</td>";
                         
                            echo "</tr>";
                        }
                        ?>
                    </table>


                </div>
            </div>
        </div>

        <!-- Loading Scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/fileinput.js"></script>
        <script src="js/chartData.js"></script>
        <script src="js/main.js"></script>
        
        <script type="text/javascript">
            
            function printThisDom(){
                $('#printButton').hide();
                window.print(); 
                $('#printButton').show();
            }
        </script>

    </body>
    </html>
<?php } ?>