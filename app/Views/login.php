<html>
<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	  <meta name="description" content="">
	  <meta name="author" content="">
	  
	  <link rel="icon" href="http://himalayanbank.com/themes/himalayan/assets/ico/hbl-icon.png">
	  
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css'); ?>">
	<!-- DataTables -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.bootstrap.css');?>">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/skins/skin-black-light.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/skins/skin-black-light.css');?>">
		<!--  <link rel="stylesheet" href="<?php echo base_url('assets/css/blue.css');?>">-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/buttons.dataTables.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/daterangepicker.css'); ?>" />
	<title><?php echo "HBL - KYE";?></title>	  

</head>
<body class="hold-transition login-page">
	<div class="login-box">
	  	<div class="login-logo">	    	
	    	<img height="50px" src="<?php echo base_url(); ?>assets/images/logo.png"/ >
	  	</div>
	  	<!-- /.login-logo -->
	  	<div class="login-box-body">
	  		<p><center><a href="<?php echo base_url(); ?>"><b>HBL KYE Application</b></a></center></p>
	    	<p class="login-box-msg">Sign in to your profile</p>
			<?php if(count($session->getFlashdata())>0){?>
	  		<div class="alert alert-error">      
		        <?php echo $session->getFlashdata("msg")?>
		    </div>
		    <?php } ?>
		    <!--form action="<?php echo base_url().'user/auth_user'; ?>" method="post">
		    	<div class="form-group has-feedback">
		    		<input type="text" name="staffid" class="form-control" id="" placeholder="Staff Id">
		        	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		      	</div>
				<div class="form-group has-feedback">
					<input type="password" name="receiver" class="form-control" id="receiver" placeholder="Mobile number / Email" >
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
			    
			  	<div class="row">
			  		<div class="col-xs-12">
		          		<button type="submit" class="btn btn-primary btn-block btn-flat btn-color">Sign In</button>
		        	</div>
				</div>
		    </form !-->
			<form action="<?php echo base_url().'user/auth_user'; ?>" method="post">
			<!-- Email input -->
			<div class="form-outline mb-4">
				<input type="text" id="staffid" name="staffid" class="form-control" autocomplete="off" required />
				<label class="form-label" for="staffid">Staff Id</label>
			</div>

			<!-- Password input -->
			<div class="form-outline mb-4">
				<input type="password" id="receiver" name="receiver" class="form-control" autocomplete="off" required />
				<label class="form-label" for="receiver">Password</label>
			</div>

			<!-- 2 column grid layout for inline styling -->
			<div class="row mb-4">
				<div class="col d-flex justify-content-center">
				
				</div>    
			</div>

			<!-- Submit button -->
			<button type="submit" class="btn btn-primary btn-block">Sign in</button>
			</form>
		    
		</div>
		<!-- /.login-box-body -->
	</div>
</body>
</html>
