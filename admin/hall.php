<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<?php include_once('../config.php') ?>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body>
    <?php
$provider_id=null;
$hallname=null;
$capacity=null;
$rentac=null;
$rentnonac=null;
$advanced=null;
$provider_name=null;
if(isset($_GET['edit']))
{
    $id=$_GET['edit'];
    $sql="select * from hall where Hall_id=$id";
    $result=mysqli_query($con,$sql);
    if($row=mysqli_fetch_assoc($result))
    {
        $provider=$row['Provider_id'];
        $hallname=$row['Hall_name'];
        $capacity=$row['Hall_capacity'];
        $rentac=$row['Rent_with_ac'];
        $rentnonac=$row['Rent_without_ac'];
        $advanced=$row['Advanced'];
    }

    $sql="select * from providers where Provider_id=$provider";
    $result=mysqli_query($con,$sql);
    if($row=mysqli_fetch_assoc($result))
    {
        $provider_name=$row['Provider_name'];
    }

}
?>
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
                    <div class="col-md-11">
                        <div class="card">
                            <div class="card-header ">
                                <h5>Add New Hall</h5>
                            </div>
                            <div class="card-body ">


                                <!-- database insert  -->
                                <?php
                                if (isset($_POST['submit'])) {
                                    $provider = $_POST['provider'];
                                    $hallname = $_POST['hallname'];
                                    $capacity = $_POST['capacity'];
                                    $rentac = $_POST['rentac'];
                                    $rentnonac = $_POST['rentnonac'];
                                    $advanced = $_POST['advanced'];

                                    $sql = "insert into hall(Provider_id,Hall_name,Hall_capacity,Rent_with_ac,Rent_without_ac,Advanced) values ($provider,'$hallname',$capacity,$rentac,$rentnonac,$advanced)";
                                    if (mysqli_query($con, $sql)) {
                                ?>
                                <div class="alert alert-success" role="alert">
                                    Insert sucessfully!
                                    <?php echo "<meta http-equiv='refresh' content='0.6'>"; ?>
                                </div>
                                <?php
                                    }
                                    else
                                    {
                                        echo "Error: " . $sql . "<br>" .
                                        mysqli_error($con);
                                    }
                                }



                                if (isset($_POST['submit'])){
    $output_dir = "upload/";/* Path for file upload */
	$RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType      = $_FILES['image']['type'][0];
 
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt       = str_replace('.','',$ImageExt);
	$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;
	
	/* Try to create the directory if it does not exist */
	if (!file_exists($output_dir))
	{
		@mkdir($output_dir, 0777);
	}               
	move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );
	     $sql = "INSERT INTO `hall_photos`(`Hall_id`,`photo`) VALUES (1,'$NewImageName')";
		if (mysqli_query($con, $sql)) {
			echo "successfully !";
		}
		else {
		echo "Error: " . $sql . "" . mysqli_error($cn);
	 }
    }
                                ?>
                                <!-- /database insert  -->



                                <!-- database update  -->
                                <?php
                                if (isset($_POST['update'])) {
                                    $provider = $_POST['provider'];
                                    $hallname = $_POST['hallname'];
                                    $capacity = $_POST['capacity'];
                                    $rentac = $_POST['rentac'];
                                    $rentnonac = $_POST['rentnonac'];
                                    $advanced = $_POST['advanced'];

                                    $sql = "UPDATE hall SET Provider_id=$provider,Hall_name='$hallname',Hall_capacity=$capacity,Rent_with_ac=$rentac,Rent_without_ac=$rentnonac,Advanced=$advanced WHERE Hall_id=$id";
                                    if (mysqli_query($con, $sql)) {
                                ?>
                                <div class="alert alert-success" role="alert">
                                    Update sucessfully!
                                    <?php echo "<meta http-equiv='refresh' content='0.6'>"; ?>
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
                                <!-- /database update  -->

                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label> <b> Provider
                                                    </b></label></div>
                                            <div class="col-md-9 ">
                                                <select name="provider" id="" class="form-control">
                                                    <?php if(isset($_GET['edit']))
                                                    {
                                                        ?>
                                                    <option value="<?php echo $provider;?>" selected>
                                                        <?php echo $provider_name;?></option>
                                                    <?php
                                                    }
                                                    else
                                                    {
                                                     ?>
                                                    <option value="" selected disabled>Select provider</option>
                                                    <?php
                                                    }
                                                    ?>

                                                    <?php
                                                    
                                                    $sql = 'SELECT * FROM `providers`';
                                                    $result = mysqli_query($con, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            if($provider_name==$row['Provider_name'])
                                                            {

                                                            }
                                                            else
                                                            {
                                                    ?>

                                                    <option value="<?php echo $row['Provider_id']; ?>"
                                                        style="text-transform: capitalize;">
                                                        <?php echo $row['Provider_name']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    }
                                                    
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label> <b>Hall Name
                                                    </b></label></div>
                                            <div class="col-md-9 "> <input type="text" name="hallname"
                                                    class="form-control" required
                                                    value="<?php if(isset($_GET['edit'])){echo $hallname;}?>"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;">
                                                <label><b>Capacity</b></label>
                                            </div>
                                            <div class="col-md-9"><input type="number" class="form-control"
                                                    name="capacity" required
                                                    value="<?php if(isset($_GET['edit'])){echo $capacity;}?>"></div>
                                        </div>
                                    </div>

                                   

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label><b>Rent With
                                                        AC</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control"
                                                    name="rentac" required
                                                    value="<?php if(isset($_GET['edit'])){echo $rentac;}?>"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label><b>Rent With Non
                                                        AC</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control"
                                                    name="rentnonac" required
                                                    value="<?php if(isset($_GET['edit'])){echo $rentnonac;}?>"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label><b>Advanced
                                                        Amount</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control"
                                                    name="advanced" required
                                                    value="<?php if(isset($_GET['edit'])){echo $advanced;}?>"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;">
                                                <label><b>Image</b></label>
                                            </div>
                                            <div class="col-md-9"><input type="file" class="form-control"
                                            name="image[]" required></div>
                                        </div>
                                    </div>
                                    
                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col-auto">
                                        <?php 
                                          if(isset($_GET['edit']))
                                          {
                                              ?>
                                        <input type="Submit" name="update" value="Update" class="btn btn-primary">
                                        <?php
                                          }
                                          else
                                          {
                                              ?>
                                        <input type="Reset" value="Reset" class="btn btn-primary">
                                        <input type="submit" value="Add hall" name="submit" class="btn btn-success">
                                        <?php
                                          }
                                          ?>

                                    </div>
                                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>