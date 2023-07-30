<?php require'header.php';?>



            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Leave Application</h1>

         

<?php 

if (isset($_POST['apply'])) 
{ 
    $tca=strtoupper($_POST['enr_no']);



    if (substr($tca, 0,3)=='TCA') 
    {
       

      $ref_id=mt_rand(11111,999999);

       $sql="INSERT INTO applications (ref_id, full_name, enr_no, mobile, email, college, course, semester, batch_year, st_type, application, application_status, ip,from_date,to_date)  
          VALUES ('".$ref_id."','".$_POST['full_name']."','".$_POST['enr_no']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['college']."','".$_POST['course']."','".$_POST['semester']."','".$_POST['batch_year']."','".$_POST['st_type']."','".$_POST['application']."','Pending','".$_SERVER['REMOTE_ADDR']."','".$_POST['from_date']."','".$_POST['to_date']."') " ;

    $run=mysqli_query($db,$sql);

    if($run)
    {
       echo ' <div class="alert alert-success text-success"> 
      <strong>Yaaay..!</strong> Your Application has been submitted successfully with Ref no.: <b>'.$ref_id.'</b>
      <a  class="close" data-dismiss="alert" style="float:right;" aria-label="close">&times;</a>
    
    </div>';
                }

            if(!$run){ echo ' <div class="alert alert-warning text-danger"> 
      <strong>OOops..!</strong> Technical Error. Please try again
      <a  class="close" data-dismiss="alert" style="float:right;" aria-label="close">&times;</a>
    
    </div>';} 
    }



    if (substr($tca, 0,3)!='TCA') 
    {
       echo ' <div class="alert alert-warning text-danger"> 
      <strong>Error..!</strong> Enrolment No. must start with <b>TCA</b> only.
      <a  class="close" data-dismiss="alert" style="float:right;" aria-label="close">&times;</a>
    
    </div>';
    }


            
}

?>


   

                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-warning text-white text-center"> Personal Information</div>

                                <div class="card-body">
<form action="" method="POST">
                                	<table width="100%">

                                		<tr>
                                			<td><input type="text" name="full_name" class="form-control" required placeholder="Full Name"></td>
                                			<td><input type="text" name="enr_no" class="form-control" required placeholder="Enrollment No."></td>

                                		</tr>

                                		<tr>
                                			<td><input type="text" name="mobile" onkeypress="return /[0-9]/i.test(event.key)" class="form-control" maxlength="10" required placeholder="Mobile number"></td>
                                			<td><input type="email" name="email" class="form-control" required placeholder="Email"></td>

                                		</tr>

                                		<tr>
                                			<td><input type="text" name="college" class="form-control" required placeholder="College Name"></td>
                                			<td><input type="text" name="course" class="form-control" required placeholder="course"></td>

                                		</tr>

                                		<tr>
                                			<td><input type="text" name="semester" class="form-control" required placeholder="Semester"></td>
                                			<td><input type="text" name="batch_year" class="form-control" required placeholder="Year"></td>

                                		</tr>


                                        <tr>
                                            <td>
                                                <select name="st_type" class="form-control " required> 
                                                    <option value="">---Please Select----</option>
                                                    <option value="day_scholar">Day Scholar</option>
                                                    <option value="hostler">Hostler</option>

                                                </select>
                                            </td>
                                           
                                        </tr>

                                        <tr>
                                            <th>From:<br><input type="date" name="from_date" class="form-control" required></th>

                                            <th>To:<br><input type="date" name="to_date" class="form-control" required></th>

                                        </tr>

                                		<tr>
                                			<td colspan="2">
                                				<textarea style="height: 200px;" name="application" class="form-control" required placeholder="Write your Application here"></textarea>
                                			</td>

                                		</tr>

                                		<tr>
                                			<th></th>

                                            <?php if(!isset($_SESSION['username']))
                                            {
                                                ?>
                                			<th><input type="submit" name="apply" class="btn btn-success" style="float: right;"></th>

                                        <?php } ?>

                                		</tr>

                                   </table>
                                  
                                  </form>
                                </div>

                            </div>
                        </div>

                        


                  



</div>









                </div>
            </main>



<style type="text/css">
    .card-body{padding: 2px 2px 2px 2px;}


</style>

<?php require 'footer.php';?>