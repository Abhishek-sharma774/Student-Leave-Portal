<?php require'header.php';

$qry = mysqli_query($db,"select * from applications where ref_id ='".urldecode(base64_decode($_REQUEST['id']))."'");
$data = mysqli_fetch_array($qry);

?>



            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong><?php echo ucwords($data['full_name']); ?></strong> leave Application Request [<?php echo $data['ref_id'] ?>]</h1>

                   


                    <div class="row">

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-warning text-white text-center"> Personal Information</div>

                                <div class="card-body">

                                	<table width="100%">

                                		<tr>
                                			<th><?php echo ucwords($data['full_name']) ?></th>
                                			<th><?php echo strtoupper($data['enr_no']) ?></th>

                                		</tr>

                                		<tr>
                                            <th><?php echo ucwords($data['mobile']) ?></th>
                                            <th><?php echo strtolower($data['email']) ?></th>

                                        </tr>

                                		<tr>
                                            <th><?php echo strtoupper($data['college']) ?></th>
                                            <th><?php echo strtoupper($data['course']) ?></th>

                                        </tr>

                                		<tr>
                                            <th><?php echo strtoupper($data['semester']) ?></th>
                                            <th><?php echo strtoupper($data['batch_year']) ?></th>

                                        </tr>


                                        <tr>
                                            <th><?php echo strtoupper($data['st_type']) ?></th>
                                         
                                        </tr>

                                        <tr>
                                            <th>From: <?php echo date('d-M-Y',strtotime($data['from_date'])) ?></th>
                                             <th>To: <?php echo date('d-M-Y',strtotime($data['to_date'])) ?></th>

                                        </tr>


                                        <tr>
                                            <th style="color:red;">Reason:</th>
                                        </tr>

                                		<tr>
                                			<th colspan="2">
                                				<?php echo ($data['application']) ?>
                                			</th>

                                		</tr>

                                	

                                   </table>
                                 
                                </div>

                            </div>
                        </div>





                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-primary text-white text-center"> Status</div>

                                <div class="card-body">

                                    <center>
                                        <h2>
                                            <?php 

                                            if($data['application_status']=='Pending'){echo '<b style="color:darkmaroon;">Pending...!</b>';}

                                            if($data['application_status']=='Approved'){echo '<b style="color:green;">Approved</b>';}

                                            if($data['application_status']=='Rejected'){echo '<b style="color:red;">Rejected</b>';}


                                             ?>
                                        </h2>
                                    </center>



<?php 
if (isset($_SESSION['username'])) 
{
  ?>

                                    <hr>



                                     <?php 
                                    if (isset($_POST['update'])) 
                                    {
                                        $sql="UPDATE applications SET application_status='".$_POST['application_status']."', cmnt='".$_POST['cmnt']."'  WHERE ref_id='".$data['ref_id']."' ";

                                         $run=mysqli_query($db,$sql);

    if($run)
    {
       echo'<div class="alert alert-success text-success"> 
      <strong>Done..!</strong> Application has been: '.ucwords($_POST['application_status']).'.
      <a onclick="history.back()" class="close" data-dismiss="alert" style="float:right;" aria-label="close">&times;</a>
    
    </div>';
                }

            if(!$run){echo'<div class="alert alert-danger text-danger"> 
      <strong>OOops..!</strong> Technical Error... Please try again.
      <a onclick="history.back()" class="close" data-dismiss="alert" style="float:right;" aria-label="close">&times;</a>
    
    </div>';}
                                    }



                                    ?>





                                     
                                    <form action="" method="POST">
                                        <table width="100%">
                                            <tr>
                                                <th>Status:
                                                    <select name="application_status" class="form-control" required>
                                                    <option value="">---Select---</option>
                                                    <option value="Approved">Approved</option>
                                                    <option value="Rejected">Rejected</option>

                                                </select>
                                                    
                                                </th>

                                            </tr>
                                            <tr>

                                                <th><textarea style="height: 200px;" name="cmnt" class="form-control" required placeholder="Write Rejection Reason if not Rejected type NA"></textarea></th>
                                            </tr>

                                            <tr>
                                                <th><input type="submit" name="update" class="btn btn-success" style="float: right;"></th>
                                            </tr>
                                        </table>
                                    </form>

                                   


                                 
                                </div>

                            </div>
                        </div>

                        


             <?php } ?>        



</div>









                </div>
            </main>



<style type="text/css">
    .card-body{padding: 2px 2px 2px 2px;}


</style>

<?php require 'footer.php';?>