<?php include_once('../config.php') ?>

<html lang="en">

<head>

</head>

<body>

    <!-- insert database  -->
    <?php
    if (isset($_POST['submit'])) {
        $sqlinsertprovider = "insert into providers(Provider_id,Provider_name,Contact_person,Provider_phno,Provider_email,Provider_address,Provider_accountno,Bank_name)
                                    values('" . mysqli_real_escape_string($con, $_POST['txtproviderid']) . "',
                                    '" . mysqli_real_escape_string($con, $_POST['txtname']) . "',
                                    '" . mysqli_real_escape_string($con, $_POST['txtcontactperson']) . "',
                                    '" . mysqli_real_escape_string($con, $_POST['txtphone']) . "',
                                    '" . mysqli_real_escape_string($con, $_POST['txtemail']) . "',
                                    '" . mysqli_real_escape_string($con, $_POST['txtaddress']) . "',
                                    '" . mysqli_real_escape_string($con, $_POST['txtaccountno']) . "',
                                    '" . mysqli_real_escape_string($con, $_POST['txtbankname']) . "');";
        $sqlinsertprovider = mysqli_query($con, $sqlinsertprovider) or die("Error in sqlinsert provider section:" . mysqli_error($con));

        echo '<script> window.location.href="index.php?pg=provider.php&option=create&Provider_id=' . $_POST['txtproviderid'] . '"; </script>';
    }
    ?>
    <!-- /insert database  -->


    <?php
    if (isset($_GET['option'])) {
        if ($_GET['option'] == "new") {
    ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <h5>Add New Provider Details</h5>

                        </div>
                        <div class="card-body ">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3" style="text-align: right;"> <label> <b>Provider Id
                                                </b></label></div>
                                        <div class="col-md-9 ">

                                            <?php
                                            $sqlproviderid = "select Provider_id from Providers ORDER BY Provider_id DESC";
                                            $resultproviderid = mysqli_query($con, $sqlproviderid) or die("Error in familyid section:" . mysqli_error($con));
                                            if (mysqli_num_rows($resultproviderid) > 0) {
                                                $row = mysqli_fetch_assoc($resultproviderid);
                                                $providerid = ++$row['Provider_id'];
                                            } else {
                                                $p = "P001";
                                            }
                                            ?> <input type="text" name="txtproviderid" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3" style="text-align: right;"> <label> <b>Provider Name
                                                </b></label></div>
                                        <div class="col-md-9 "> <input type="text" name="txtname" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3" style="text-align: right;"> <label> <b>Contact Person
                                                </b></label></div>
                                        <div class="col-md-9 "> <input type="text" name="txtcontactperson" class="form-control" required></div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3" style="text-align: right;"> <label><b>Phone
                                                    Number</b></label></div>
                                        <div class="col-md-9"><input type="number" onchange="myFunction(this.value)" class="form-control" name="txtphone" required>
                                            <p id="phone" style="color: red; "></p>
                                        </div>

                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-md-3" style="text-align: right;"> <label><b> Email-Address
                                                </b></label></div>
                                        <div class="col-md-9"><input type="email" class="form-control" name="txtemail" placeholder="name@example.com"></div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3" style="text-align: right;"> <label>
                                                <b>Address</b></label></div>
                                        <div class="col-md-9"><textarea name="txtaddress" id="" cols="30" rows="3" class="form-control"></textarea></div>
                                    </div>
                                </div>




                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3" style="text-align: right;"> <label><b>Account
                                                    No</b></label></div>
                                        <div class="col-md-9"><input type="number" class="form-control" name="txtaccountno" required></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3" style="text-align: right;"> <label> <b>Bank Name
                                                </b></label></div>
                                        <div class="col-md-9 "> <input type="text" name="txtbankname" class="form-control" required></div>
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

        } else  if ($_GET['option'] == "view") {

            $sqlview = "select * from providers";
            $result = mysqli_query($con, $sqlview) or die("Error in sqlview: " . mysqli_error($con));
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

            echo '<table class="table table-bordered table-condensed table-hover table-striped"><thead><tr>
                    <th>provider Id</th>

                    <th>provider name</th>
                    <th>Contact person</th>
                    <th>provider TPNo</th>
                    <th>Provider Email</th>
                    <th>Provider address</th>
                    <th>Provider AccountNo</th>
                    <th>Bank Name</th>
                    </tr></thead><tbody>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr><td>' . $row['Provider_id'] . '</td>
                                    <td>' . $row['Provider_name'] . '</td>
                                    <td>' . $row['Contact_person'] . '</td>
                                    <td>' . $row['Provider_phno'] . '</td>
                                    <td>' . $row['Provider_email'] . '</td>
                                    <td>' . $row['Provider_address'] . '</td>
                                    <td>' . $row['Provider_accountno'] . '</td>
                                    <td>' . $row['Bank_name'] . '</td>
                                    </tr>';
            }
            echo '</tbody></table>';
            echo '</div></div></div>';
        } else  if ($_GET['option'] == "find") {
        } else  if ($_GET['option'] == "edit") {
        } else  if ($_GET['option'] == "delete") {
        }
    }
    ?>

</body>

</html>