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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header ">
                                <h5>Add New Provider Details</h5>
                                <!-- insert database  -->
                                <?php
                                if(isset($_POST['submit']))
                                {
                                    $name=$_POST['name'];
                                    $contactperson=$_POST['contactperson'];
                                    $phone=$_POST['phone'];
                                    $email=$_POST['email'];
                                    $address=$_POST['address'];
                                    $accountno=$_POST['accountno'];
                                    $bankname=$_POST['bankname'];

                                    $sql="insert into providers (Provider_name,Contact_person,Provider_phno,Provider_email,Provider_address,Provider_accountno,Bank_name) values ('$name','$contactperson',$phone,'$email','$address','$accountno','$bankname')";
                                    if(mysqli_query($con,$sql))
                                    {
                                        ?>
                                <div class="alert alert-success" role="alert">
                                    Insert sucessfully!
                                </div>
                                <?php  echo "<meta http-equiv='refresh' content='0.6'>"; ?>
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
                                            <div class="col-md-3" style="text-align: right;"> <label> <b>Provider Name
                                                    </b></label></div>
                                            <div class="col-md-9 "> <input type="text" name="name" class="form-control"
                                                    required></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label> <b>Contact Person
                                                    </b></label></div>
                                            <div class="col-md-9 "> <input type="text" name="contactperson"
                                                    class="form-control" required></div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label><b>Phone
                                                        Number</b></label></div>
                                            <div class="col-md-9"><input type="number" onchange="myFunction(this.value)"
                                                    class="form-control" name="phone" required>
                                                <p id="phone" style="color: red; "></p>
                                            </div>

                                        </div>
                                    </div>

                                    <script>
                                        function myFunction(val) {
                                            var n = val.length;
                                            if (n != 10) {
                                                document.getElementById("phone").innerHTML =
                                                    "Phone number have ten numbers";
                                            } else {
                                                document.getElementById("phone").innerHTML = "";
                                            }
                                        }
                                    </script>
                                    <div class="form-group">
                                        <div class="row">

                                            <div class="col-md-3" style="text-align: right;"> <label><b> Email-Address
                                                    </b></label></div>
                                            <div class="col-md-9"><input type="email" class="form-control" name="email"
                                                    placeholder="name@example.com"></div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label>
                                                    <b>Address</b></label></div>
                                            <div class="col-md-9"><textarea name="address" id="" cols="30" rows="3"
                                                    class="form-control"></textarea></div>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label><b>Account
                                                        No</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control"
                                                    name="accountno" required></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label> <b>Bank Name
                                                    </b></label></div>
                                            <div class="col-md-9 "> <input type="text" name="bankname"
                                                    class="form-control" required></div>
                                        </div>
                                    </div>



                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col-auto"><input type="Reset" value="Reset" class="btn btn-primary">
                                        <input type="submit" name="submit" value="Add provider" class="btn btn-success">
                                       <a href="index.php?pg=provider.php&option=view"> <input type="button" name="submit" value="Cancel" class="btn btn-success"></a>
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
                
       $sqlview="select * from providers";
       $result=mysqli_query($con,$sqlview) or die("Error in sqlview: ".mysqli_error($con));
       echo '<div class="col-md-12">
           <div class="card">
               <div class="card-header ">
                   <h5>Add New Provider Details</h5>
                   <div>
                   <div class="row">
                        <div class="col-md-10"></div>
                        <div class="col-md-1">
                            <a href="index.php?pg=provider.php&option=new"><input type="button" name="submit" style="float:right" value="Add " class="btn btn-success"></a>
                        </div>
                        <div class="col-md-1">
                            <input type="button" name="Print" style="float:left" value="Print " class="btn btn-success">    
                        </div> 
                    </div>
                </div>
                </div>
                <div class="card-body ">';
       
                    echo'<table class="table table-bordered table-condensed table-hover table-striped"><thead><tr>
                    <th>provider Id</th>

                    <th>provider name</th>
                    <th>Contact person</th>
                    <th>provider TPNo</th>
                    <th>Provider Email</th>
                    <th>Provider address</th>
                    <th>Provider AccountNo</th>
                    <th>Bank Name</th>
                    </tr></thead><tbody>';

                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo '<tr><td>'.$row ['Provider_id'].'</td>
                                    <td>'.$row['Provider_name'].'</td>
                                    <td>'.$row['Contact_person'].'</td>
                                    <td>'.$row['Provider_phno'].'</td>
                                    <td>'.$row['Provider_email'].'</td>
                                    <td>'.$row['Provider_address'].'</td>
                                    <td>'.$row['Provider_accountno'].'</td>
                                    <td>'.$row['Bank_name'].'</td>
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