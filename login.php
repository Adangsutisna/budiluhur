
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Ionicons -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<?php
 if (isset($_POST["login"])) {
	 
	session_start();

	$loginhstr=trim($_POST['loginhs']); 
	$loginhs = htmlentities(htmlspecialchars($loginhstr), ENT_QUOTES);

	if($loginhs=='login') {
		
		$_SESSION['loginhsqu'] = $loginhs;
		
		echo "<script> alert('berhasil');window.location='home'</script>";	
				
	}
	else{
		echo "<script> alert('gagal coba lagi')</script>";
	}
 }
?>

<body class="hold-transition lockscreen" >
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="home"><b>Admin Jothy Body Care</b></a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name"></div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
		<img src="https://cdn4.iconfinder.com/data/icons/general24/png/256/administrator.png" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
   <form class="lockscreen-credentials" action="" enctype='multipart/form-data' method="post" >
      <div class="input-group">
        <input type="password" name="loginhs" class="form-control" placeholder="password">

        <div class="input-group-btn">
          <button type="submit"  name="login"  class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your password to retrieve your session
  </div>
  <div class="text-center">
   
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2019 <b><a href="Hijabshazfa.com" class="text-black">kelompok 6</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
