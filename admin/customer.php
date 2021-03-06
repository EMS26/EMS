<?php include_once('../config.php') ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <?php
        include_once('menu.php')
        ?>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <!-- /page-content" -->

                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header ">
                                <h5>Add New Customer Details</h5>
                                <!-- insert database  -->
                                <?php
                                if(isset($_POST['btnsubmit']))
                                {
                                    $name=$_POST['Txtname'];
                                    $address=$_POST['Txtaddress'];
                                    $phone=$_POST['Txtphoneno'];
                                    $email=$_POST['Txtemail'];
                                    $Regdate=$_POST['Regdate'];
                                    $nicno=$_POST['Txtnicno'];
                        
                                    $sql="insert into customer (Customer_name,Customer_address,Customer_tpno,Customer_email,Cus_reg_date,Cus_nicno) values ('$name','$address',$phone,'$email','$Regdate','$nicno')";
                                    if(mysqli_query($con,$sql))
                                    {
                                        ?>
                                <div class="alert alert-success" role="alert">
                                    Insert sucessfully!
                                    <?php  echo "<meta http-equiv='refresh' content='0.6'>"; ?>
                                </div>
                               
                                <?php
                                    }
                                    else
                                    {
                                        echo "Error: " . $sql . "<br>" .
                                        mysqli_error($con);
                                    }
                                }
                                ?>
                                <!-- /insert database  -->
                            </div>
                            <div class="card-body ">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label > <b>Customer Name </b></label></div>
                                            <div class="col-md-9 "> <input type="text" name="Txtname" class="form-control" required></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label> <b>Address</b></label></div>
                                            <div class="col-md-9"><textarea name="Txtaddress" id="" cols="30" rows="3" class="form-control"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label ><b>Phone Number</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control" name="Txtphoneno" required></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                      
                                        <div class="col-md-3" style="text-align: right;" > <label><b> Email address</b></label></div>
                                        <div class="col-md-9"><input type="email" class="form-control" name="Txtemail" placeholder="name@example.com"></div>
                                       
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label ><b>Registered Date</b></label></div>
                                            <div class="col-md-9"><input type="Date" class="form-control" name="Regdate" required></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label ><b>NIC NO</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control" name="Txtnicno" required></div>
                                        </div>
                                    </div>

                                    

                                    
                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col-auto"><input type="submit" value="Add" class="btn btn-success" name="btnsubmit">
                                    <input type="Reset" value="Reset" class="btn btn-primary" name="reset"> </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ./page-content" -->
            </div>
        </main>

    </div>
    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>