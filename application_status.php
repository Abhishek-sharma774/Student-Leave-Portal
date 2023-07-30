<?php 
require'header.php';

?>


   <main class="content">
                <div class="container-fluid p-0">
                	<center><h1><strong>Admin Dashboard</strong></h1></center><br>
                    




                    	<div class="row">

                    		<div class="col-md-12">
                    			<div class="card">
                    				<div class="card-header bg-info text-white text-center">Applications Status</div>

                                    <form action="" method="POST">
                                        <table width="100%">
                                            <tr>
                                                <th>
                                                    <input type="text" name="enr_no" class="form-control" required placeholder="Enrollment no.">
                                                </th>
                                                <th>
                                                    <button type="submit" name="search" class="btn btn-success"><i class="fa fa-search"></i></button>
                                                </th>
                                                </tr>
                                        </table>
                                    </form>

<hr>
                <?php    
error_reporting(0);
                    if(isset($_POST['search']))
                    {

                    $result = mysqli_query($db,"SELECT * FROM applications where enr_no='".$_POST['enr_no']."' order by at desc");


                    }            


                    if (mysqli_num_rows($result) > 0) {

                    ?>



                    <table width="100%">
                    	<tr>

                    		<th style="background-color:black; color:white;">#</th>
                    		<th style="background-color:black; color:white;">Application ID</th>
                    		<th style="background-color:black; color:white;">Name</th>
                    		<th style="background-color:black; color:white;">Enrollment</th>
                    		<th style="background-color:black; color:white;">Type</th>
                    		<th style="background-color:black; color:white;">Status</th>
                    		<th style="background-color:black; color:white;">At</th>

                    	</tr>
   

                    <?php

                    $i=0;

                    while($row = mysqli_fetch_array($result)) {

                    ?>

                    <tr>
                    	<td><?php echo $i+1; ?></td>

                    	<td><a href="application_view.php?id=<?php echo urlencode(base64_encode($row['ref_id'])); ?>"><i class="fa fa-eye"></i> <?php echo $row['ref_id'] ?></a></td>

                    	<td><?php echo ucwords($row['full_name']); ?></td>
                    	<td><?php echo ucwords($row['enr_no']); ?></td>
                    	<td><?php echo ucwords($row['st_type']); ?></td>
                    	

                        <td><?php if($row['application_status']=='Pending'){echo "<b class='text-warning'>Pending</b>";}

                        if($row['application_status']=='Approved'){echo "<b class='text-success'>Approved</b>";}

                        if($row['application_status']=='Rejected'){echo "<b class='text-danger'>Rejected</b>";}

                          ?></td>


                    	<td><?php echo date('d-M-Y',strtotime($row['at'])) ?></td>

                    </tr>

                   

                  <?php

                    $i++;

                    }

                    ?>

                    </table>

                  

                     <?php

                    }

                    else{

                        echo "<b><center>No data found......!</b></center>";

                    }

                    ?>

                    			</div><!--------- end of card---------->
                    		</div><!--------- end of cold md 8---------->




                    	<!------	<div class="col-md-4">
                    			<div class="card"> 
                    				<div class="card-header bg-warning text-white text-center">Search</div>

                    			</div>--------- end of card--------
                    		</div>------ end of cold md 8---------->




                    		
                    	</div><!--------- end of row---------->













                </div>
    </main>








<?php require'footer.php';?>