<?php include_once('../config.php') ?>
<html lang="en">

<head>
    
</head>

<body>
    
        <?php
         
         if(isset($_GET['option']))
         {
             if($_GET['option']=="new")
             {
           
        ?>
          <!-- /page-content" -->

                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header ">
                                <h5>Add New Staff</h5>
                                <!-- insert database  -->
                                <?php
                                if (isset($_POST['submit'])) {
                                    $staffname = $_POST['staffname'];
                                    $address = $_POST['address'];
                                    $phoneno = $_POST['phoneno'];
                                    $email = $_POST['email'];
                                    $nicno = $_POST['nicno'];

                                    $sql = "insert into staff (Staff_name,Staff_tpno,Staff_email,Staff_address,Staff_nic) values ('$staffname',$phoneno,'$email','$address','$nicno')";
                                    if (mysqli_query($con, $sql)) {
                                ?>
                                        <div class="alert alert-success" role="alert">
                                            Insert sucessfully!

                                            <?php echo "<meta http-equiv='refresh' content='0.6'>"; ?>
                                        </div>
                                       
                                <?php
                                    } else {
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
                                            <div class="col-md-3" style="text-align: right;"> <label> <b> Name </b></label></div>
                                            <div class="col-md-9 "> <input type="text" name="staffname" class="form-control" required></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label> <b>Address</b></label></div>
                                            <div class="col-md-9"><textarea name="address" id="" cols="30" rows="3" class="form-control"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label><b>Phone Number</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control" name="phoneno" required></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">

                                            <div class="col-md-3" style="text-align: right;"> <label><b> Email address</b></label></div>
                                            <div class="col-md-9"><input type="email" class="form-control" name="email" placeholder="name@example.com"></div>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label><b>NIC NO</b></label></div>
                                            <div class="col-md-9"><input type="text" class="form-control" name="nicno" required></div>
                                        </div>
                                    </div>




                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col-auto"> <input type="Reset" value="Reset" class="btn btn-primary"> 
                                    <input type="submit" value="Add Staff" class="btn btn-success" name="submit">
                                    <a href="index.php?pg=staff.php&option=view"> <input type="button" name="submit" value="Cancel" class="btn btn-success"></a>
                                       
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ./page-content" -->
     
                <?php
        
    }
    
    else  if($_GET['option']=="view")
    {
        
$sqlview="select * from staff";
$result=mysqli_query($con,$sqlview) or die("Error in sqlview: ".mysqli_error($con));
echo '<div class="col-md-12">
   <div class="card">
       <div class="card-header ">
           <h5>Add New Staff Details</h5>
           <div>
           <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-1">
                    <a href="index.php?pg=staff.php&option=new"><input type="button" name="submit" style="float:right" value="Add " class="btn btn-success"></a>
                </div>
                <div class="col-md-1">
                    <input type="button" name="Print" style="float:left" value="Print " class="btn btn-success">    
                </div> 
            </div>
        </div>
        </div>
        <div class="card-body ">';

            echo'<table class="table table-bordered table-condensed table-hover table-striped"><thead><tr>
            <th>Staff Id</th>

            <th>Staff name</th>
            <th>Staff TPNo</th>
            <th>Staff Email</th>
            <th>Staff address</th>
            <th>Staff NIC</th>
            </tr></thead><tbody>';

            while($row=mysqli_fetch_assoc($result))
            {
                echo '<tr><td>'.$row ['Staff_id'].'</td>
                            <td>'.$row['Staff_name'].'</td>
                            <td>'.$row['Staff_tpno'].'</td>
                            <td>'.$row['Staff_email'].'</td>
                            <td>'.$row['Staff_address'].'</td>
                            <td>'.$row['Staff_nic'].'</td>
                            </tr>';
                }
                echo '</tbody></table>';
echo '</div></div></div>';


}
    else  if($_GET['option']=="find")
    {


    }
    else  if($_GET['option']=="edit")
    {


    }
    else  if($_GET['option']=="delete")
    {


    }
}
?>
</body>

</html>