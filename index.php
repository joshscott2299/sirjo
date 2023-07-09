<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login - <?php include('dist/includes/title.php'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
p.space {
  line-height: 1.0;
}
</style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition login-page">

  <section class="login-box">

    <div class="row">
      <div class="login-logo col-md-12">
     <img src="img/gcgmmc.png" style="width:300px; height:50px;">
      <p class="space">Central Supply Room<br>
	       E-RIS SYSTEM</p>
      <b></b>
      </div><!-- /.login-logo -->
    </div>

    <div class="row">
      <div class="login-box-body col-md-12">
        <p class="login-box-msg">Sign in to start your session</p>
        <center>
          <form action="login.php" method="post">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="Username" name="username" required>
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="Password" name="password" required>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <select class="form-control select2" style="width:100%" name="branch" required>
                <?php
				include('dist/includes/dbcon.php');

                   $query3=mysqli_query($con,"select * from branch order by branch_name")or die(mysqli_error($con));
                      while($row3=mysqli_fetch_array($query3)){
                ?>
                    <option value="<?php echo $row3['branch_id'];?>"><?php echo $row3['branch_name'];?></option>
                  <?php }?>
                </select>
            </div>
            <div class="row">
              <div class="col-xs-6 pull-right">
                <button type="submit" class="btn btn-success btn-block btn-flat" name="login" default>Sign In</button>
              </div><!-- /.col -->
              <div class="col-xs-6 pull-right">
                <button type="reset" class="btn btn-danger btn-block btn-flat">Clear</button>
              </div><!-- /.col -->
            </div>
          </form>
          </center>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <center>Version 3.0 - JCRIS 2023 - So Gallares So Kind &trade;</p></center><p>

         <center>THIS IS THE NEW MODULE OF ELECTRONIC REQUISITION. PLEASE FOLLOW THE STEPS To LOG IN:</p></center><p>
             <center>1. default log in username and password is your last name (all small caps) Only Nurses has this authority</p></center><p>
                  <center>2. Select your Ward assignment. If you cant log in, please send an email to joloveai12.aj@icloud.com or messenger for access</p></center><p>
                      
                       <center>UPDATES </p></center><p>
             <center>1. 06-29-2023 ELECTRONIC RETURN SYSTEM - use this module same process with requisition</p></center><p>
                  <center>2. 06-28-2023 Bug Fixes in the duplicated id entry in ward stock card</p></center><p>
                      <center>3. The old data has already been archive, so the e-requisitions record can still be accessible</p></center><p>
                       <center>THANK YOU!</p></center><p>
  </section>

      
   


  <!-- jQuery 2.1.4 -->
  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="plugins/fastclick/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>