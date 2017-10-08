<?php include 'includes/header.php'; ?>


<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-9">
			<div class="box box-success">
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Facebook Profile</label>
								<input type="text" class="form-control" placeholder="Facebook Profile">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Twitter Handle</label>
								<input type="text" class="form-control" placeholder="Twitter Handle">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Google+ Handle</label>
								<input type="text" class="form-control" placeholder="Google+ Handle">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">GitHub Handle</label>
								<input type="text" class="form-control" placeholder="GitHub Handle">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Short Bio</label>
								<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
							</div>
						</div>
						
					</div>
				</div>
				<div class="box-footer">
		                <input type="submit" class="btn btn-primary" value="Update Profile">
		        </div>
			</div>
          

        </div><!-- /.col -->
        <div class="col-md-3">
	        <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo $_SESSION['profilepic']; ?>" alt="<?php echo $_SESSION['login_firstname']. ' '. $_SESSION['login_lastname']; ?>">

              <h3 class="profile-username text-center"><?php echo $_SESSION['login_firstname'] . ' ' . $_SESSION['login_lastname']; ?></h3>

              <p class="text-muted text-center">Software Engineer</p>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->

      </div><!-- /.row -->

    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->

<?php include 'includes/footer.php'; ?>