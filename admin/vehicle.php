<?php include_once('../config.php') ?>
<html lang="en">
<body>
   
        <?php
        if(isset($_GET['option']))
        {
            if($_GET['option']=="new")
       
        ?>
        

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header ">
                                <h5>Add New Vehicle Details</h5>
                              <!-- insert database  -->
                              <?php
                                if(isset($_POST['btnsubmit']))
                                {
                                    
                                    {
                                        $sqlinsertfamilydiv="insert into family(familyid,areaid,gsid,address,tpno)
                                        values('".mysqli_real_escape_string($con,$_POST['txtfamilyid'])."',
                                        '".mysqli_real_escape_string($con,$_POST['txtareaname'])."',
                                        '".mysqli_real_escape_string($con,$_POST['txtgsdiv'])."',
                                        '".mysqli_real_escape_string($con,$_POST['txtaddress'])."',
                                        '".mysqli_real_escape_string($con,$_POST['txttpno'])."')";
                                        $resultfamilydiv=mysqli_query($con,$sqlinsertfamilydiv)or die("Error in sqlinsert familydetails section:".mysqli_error($con));
                                    
                                        echo '<script> window.location.href="index.php?pg=family.php&option=create&familyid='.$_POST['txtfamilyid'].'"; </script>';
                                        
                                    }
                                ?>
                                <!-- /insert database  -->

                                
                            </div>
                            <div class="card-body ">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label ><b>Vehicle No</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control" name="txtvehicleno" required></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label ><b>Provider Name</b></label></div>
                                            <div class="col-md-9"><input type="text" class="form-control" name="txtprovidername" required></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label ><b>No Of Seats</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control" name="txtnoofseats" required></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3"  style="text-align: right;"><label><b>Vehicle Type 1</b></label></div>
                                            <div class="col-md-9">
                                                <select name="txtvehicletype1" id="" class="form-control" required>
                                                    <option value="" selected disabled>--select--</option>
                                                    <option value="car">Car</option>
                                                    <option value="bus">Bus</option>
                                                    <option value="van">Van</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3"  style="text-align: right;"><label><b>Vehicle Type</b></label></div>
                                            <div class="col-md-9">
                                                <select name="txtvtype" id="" class="form-control" required>
                                                    <option value="" selected disabled>--select--</option>
                                                    <option value="AC">AC</option>
                                                    <option value="Non-AC">Non-AC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label ><b>KM Rate</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control" name="kmrate" required></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label ><b>Advanced</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control" name="advanced" required></div>
                                        </div>
                                    </div>
                                    
                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col-auto"><input type="submit" value="Add" name="btnsubmit" class="btn btn-success">
                                                         <input type="Reset" value="Reset" class="btn btn-primary"> </div>
                                                         <a href="index.php?pg=vehicle.php&option=view"> <input type="button" name="submit" value="Cancel" class="btn btn-success"></a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
              
                <?php
        
    }
    
    else  if($_GET['option']=="view")
    {
        
$sqlview="select * from vehicle";
$result=mysqli_query($con,$sqlview) or die("Error in sqlview: ".mysqli_error($con));
echo '<div class="col-md-12">
   <div class="card">
       <div class="card-header ">
           <h5>Add New vehicle Details</h5>
           <div>
           <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-1">
                    <a href="index.php?pg=vehicle.php&option=new"><input type="button" name="submit" style="float:right" value="Add " class="btn btn-success"></a>
                </div>
                <div class="col-md-1">
                    <input type="button" name="Print" style="float:left" value="Print " class="btn btn-success">    
                </div> 
            </div>
        </div>
        </div>
        <div class="card-body ">';

            echo'<table class="table table-bordered table-condensed table-hover table-striped"><thead><tr>
            <th>Vehicle No</th>

            <th>Provider Name</th>
            <th>Vehicle type</th>
            <th>KM rate</th>
            <th>Advanced</th>
        
            </tr></thead><tbody>';

            while($row=mysqli_fetch_assoc($result))
            {
                echo '<tr><td>'.$row ['Vehicle_no'].'</td>
                            <td>'.$row['No_of_seat'].'</td>
                            <td>'.$row['Vehicle_type'].'</td>
                            <td>'.$row['Km_rate'].'</td>
                            <td>'.$row['Advance'].'</td>
                            </tr>';
                }
                echo '</tbody></table>';
echo '</div></div></div>';


}
   ?>
</body>

</html>