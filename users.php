<?php include "includes/header.php"; ?>







    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo (SITENAME . ' ' ); ?> Panel Users
        <!--<small>Optional description</small>-->
      </h1>
<!--
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
-->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    	<div class="row">
	    	<div class="col-md-6">
		    	<div class="box box-warning">
			    	<div class="box-header with-border">
				    	<h3 class="box-title">Add New User</h3>
			    	</div>
			    	<form method="POST">
				    	
			    	</form>
		    	</div>
	    	</div>
    	</div>
		
		
		
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">View/ Edit Users</h3>
					</div>
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>SN</th>
								<th>User Name</th>
								<th>Full Name</th>
								<th>Email Address</th>
								<th>Mobile</th>
								<th>Status</th>
							</tr>
							<?php 
								$users = $db->rawQuery("SELECT @a:=@a+1 SN, ID, username, firstname, lastname, email, mobile, status FROM tblusers, (SELECT @a:= 0) AS a;");
								foreach ($users as $user) {
									$fullname = $user['firstname'] . ' ' . $user['lastname'];
									switch ($user['status']) {
										case 0: 
											$status = "<span class='label label-danger'>Deleted</span>";
											break;
										case 1:
											$status = "<span class='label label-success'>Active</span>";
											break;
										case 2:
											$status = "<span class='label label-warning'>Disabled</span>";
											break;
									}
									
									echo "<tr><td>$user[SN]</td><td>$user[username]</td><td>$fullname</td><td>$user[email]</td><td>$user[mobile]</td><td>$status</td></tr>";
									
								}
							?>
						</table>
					</div>
					
				</div>
			</div>
		</div><!-- /.row -->
    </section>
    <!-- /.content -->






<?php include "includes/footer.php"; ?>