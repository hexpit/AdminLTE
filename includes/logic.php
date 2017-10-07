<?php 
    require_once ('functions.php');

    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	    
	    if (@($_POST['login'])) {
		    $givenusername = mysqli_real_escape_string($conn, $_POST['username']);
		    $givenpassword = mysqli_real_escape_string($conn, $_POST['password']);
		    $cols = array('pwd_hash', 'pwd_salt', 'status');
		    $db->where('email', $givenusername);
		    $users = $db->getOne('tblusers', $cols);
		    if ($db->count > 0) {
			    $remotehash = $users['pwd_hash'];
			    $pwdsalt = $users['pwd_salt'];
			    $status = $users['status'];
			    $localhash = computehash($givenpassword, $pwdsalt);
			    if ($status === 1) {
				    if ($localhash === $remotehash) {
					    $_SESSION['login_user'] = $givenusername;
					    header('Location: profile.php');
				    } else {
					    $error[] = "Your password was incorrect.";
				    }
			    } else {
				    $error[] = 'Your account has been disabled! Please contact administrator.';
			    }
		    } else {
			    $error[] = 'Your username was invalid.';
		    }
	    }//if (@($_POST['login']))
	    
	    if (@($_POST['resumelogin'])) {
		    echo "Hello Brother!";
	    }
        
    }//if ($_SERVER['REQUEST_METHOD'] === 'POST')
    
    
    
    
    
    

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        
    }//if ($_SERVER['REQUEST_METHOD'] === 'GET')
    
    
    
    
    
    


    //Setting Up Environment Variables
    if (!@($_SESSION['login_user'])) {
        if ($_SERVER['PHP_SELF'] !== '/login.php') {
           header ('Location: login.php');
        }
    }else{
       	$db->where('email', $_SESSION['login_user']);
	   	$details = $db->getOne('tblusers');
        $_SESSION['login_firstname'] = $details['firstname'];
		$_SESSION['login_lastname'] = $details['lastname'];
		$_SESSION['login_email'] = $details['email'];
		$_SESSION['login_mobile'] = $details['mobile'];
		$_SESSION['login_role'] = $details['role'];
		$_SESSION['login_id'] = $details['ID'];
		$_SESSION['membersince'] = $details['created'];
		//convert date
		$_SESSION['membersince'] = strtotime($_SESSION['membersince']);
		$db->where('userid', $_SESSION['login_id']);
		$details = $db->getOne('tblprofile');
		$_SESSION['profilepic'] = $details['profilepic'];
    }

   
?>