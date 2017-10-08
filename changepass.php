<?php include "includes/header.php"; ?>







    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content container-fluid">

     <div class="row">
	     <div class="col-md-6">
		     <div class="box box-primary">
			     <div class="box-header with-border">
				     <h3 class="box-title">Change Password</h3>
			     </div>
			     <form method="POST">
				     <div class="box-body">
					     <div class="form-group">
						     <label for="oldpass">Old Password</label>
						     <input type="password" name="oldpass" class="form-control" id="oldpass" placeholder="Old Password">
					     </div>
					     <br>
					     <br>
					     <div class="form-group">
						     <label for="newpass">New Password</label>
						     <input type="password" name="newpass" class="form-control" id="newpass" placeholder="New Password">
					     </div>
					     <div class="form-group">
						     <label for="retypepass">Re-type Password</label>
						     <input type="password" name="retypepass" class="form-control" id="retypepass" placeholder="Re-type Password">
					     </div>
				     </div>
				     
				     <div class="box-footer">
		                <button type="submit" class="btn btn-primary">Change Password</button>
		             </div>
				     
			     </form>
		     </div>
	     </div>
     </div>

    </section>
    <!-- /.content -->






<?php include "includes/footer.php"; ?>