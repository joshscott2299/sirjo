<?php session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
#cssload-pgloading {}

#cssload-pgloading:after {
		content: "";
		z-index: -1;
		position: absolute;
		top: 0; right: 0; bottom: 0; left: 0;
}
#cssload-pgloading .cssload-loadingwrap {position:absolute;top:45%;bottom:45%;left:25%;right:25%;}
#cssload-pgloading .cssload-bokeh {
		font-size: 163px;
		width: 2em;
		height: 2em;
		position: relative;
		margin: 0 auto;
		list-style: none;
		padding:0;
		border-radius: 50%;
		-o-border-radius: 50%;
		-ms-border-radius: 50%;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
}

#cssload-pgloading .cssload-bokeh li {
		position: absolute;
		width: .3em;
		height: .3em;
		border-radius: 50%;
		-o-border-radius: 50%;
		-ms-border-radius: 50%;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
}

#cssload-pgloading .cssload-bokeh li:nth-child(1) {
		left: 50%;
		top: 0;
		margin: 0 0 0 -.2em;
		background: rgb(0,193,118);
		transform-origin: 50% 250%;
		-o-transform-origin: 50% 250%;
		-ms-transform-origin: 50% 250%;
		-webkit-transform-origin: 50% 250%;
		-moz-transform-origin: 50% 250%;
		animation: 
				cssload-rota 1.3s linear infinite,
				cssload-opa 4.22s ease-in-out infinite alternate;
		-o-animation: 
				cssload-rota 1.3s linear infinite,
				cssload-opa 4.22s ease-in-out infinite alternate;
		-ms-animation: 
				cssload-rota 1.3s linear infinite,
				cssload-opa 4.22s ease-in-out infinite alternate;
		-webkit-animation: 
				cssload-rota 1.3s linear infinite,
				cssload-opa 4.22s ease-in-out infinite alternate;
		-moz-animation: 
				cssload-rota 1.3s linear infinite,
				cssload-opa 4.22s ease-in-out infinite alternate;
}

#cssload-pgloading .cssload-bokeh li:nth-child(2) {
		top: 50%; 
		right: 0;
		margin: -.2em 0 0 0;
		background: rgb(255,0,60);
		transform-origin: -150% 50%;
		-o-transform-origin: -150% 50%;
		-ms-transform-origin: -150% 50%;
		-webkit-transform-origin: -150% 50%;
		-moz-transform-origin: -150% 50%;
		animation: 
				cssload-rota 2.14s linear infinite,
				cssload-opa 4.93s ease-in-out infinite alternate;
		-o-animation: 
				cssload-rota 2.14s linear infinite,
				cssload-opa 4.93s ease-in-out infinite alternate;
		-ms-animation: 
				cssload-rota 2.14s linear infinite,
				cssload-opa 4.93s ease-in-out infinite alternate;
		-webkit-animation: 
				cssload-rota 2.14s linear infinite,
				cssload-opa 4.93s ease-in-out infinite alternate;
		-moz-animation: 
				cssload-rota 2.14s linear infinite,
				cssload-opa 4.93s ease-in-out infinite alternate;
}

#cssload-pgloading .cssload-bokeh li:nth-child(3) {
		left: 50%; 
		bottom: 0;
		margin: 0 0 0 -.2em;
		background: rgb(250,190,40);
		transform-origin: 50% -150%;
		-o-transform-origin: 50% -150%;
		-ms-transform-origin: 50% -150%;
		-webkit-transform-origin: 50% -150%;
		-moz-transform-origin: 50% -150%;
		animation: 
				cssload-rota 1.67s linear infinite,
				cssload-opa 5.89s ease-in-out infinite alternate;
		-o-animation: 
				cssload-rota 1.67s linear infinite,
				cssload-opa 5.89s ease-in-out infinite alternate;
		-ms-animation: 
				cssload-rota 1.67s linear infinite,
				cssload-opa 5.89s ease-in-out infinite alternate;
		-webkit-animation: 
				cssload-rota 1.67s linear infinite,
				cssload-opa 5.89s ease-in-out infinite alternate;
		-moz-animation: 
				cssload-rota 1.67s linear infinite,
				cssload-opa 5.89s ease-in-out infinite alternate;
}

#cssload-pgloading .cssload-bokeh li:nth-child(4) {
		top: 50%; 
		left: 0;
		margin: -.2em 0 0 0;
		background: rgb(136,193,0);
		transform-origin: 250% 50%;
		-o-transform-origin: 250% 50%;
		-ms-transform-origin: 250% 50%;
		-webkit-transform-origin: 250% 50%;
		-moz-transform-origin: 250% 50%;
		animation: 
				cssload-rota 1.98s linear infinite,
				cssload-opa 6.04s ease-in-out infinite alternate;
		-o-animation: 
				cssload-rota 1.98s linear infinite,
				cssload-opa 6.04s ease-in-out infinite alternate;
		-ms-animation: 
				cssload-rota 1.98s linear infinite,
				cssload-opa 6.04s ease-in-out infinite alternate;
		-webkit-animation: 
				cssload-rota 1.98s linear infinite,
				cssload-opa 6.04s ease-in-out infinite alternate;
		-moz-animation: 
				cssload-rota 1.98s linear infinite,
				cssload-opa 6.04s ease-in-out infinite alternate;
}







@keyframes cssload-rota {
		from { }
		to { transform: rotate(360deg); }
}

@-o-keyframes cssload-rota {
		from { }
		to { -o-transform: rotate(360deg); }
}

@-ms-keyframes cssload-rota {
		from { }
		to { -ms-transform: rotate(360deg); }
}

@-webkit-keyframes cssload-rota {
		from { }
		to { -webkit-transform: rotate(360deg); }
}

@-moz-keyframes cssload-rota {
		from { }
		to { -moz-transform: rotate(360deg); }
}

@keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}

@-o-keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}

@-ms-keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}

@-webkit-keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}

@-moz-keyframes cssload-opa {
		0% { }
		12.0% { opacity: 0.80; }
		19.5% { opacity: 0.88; }
		37.2% { opacity: 0.64; }
		40.5% { opacity: 0.52; }
		52.7% { opacity: 0.69; }
		60.2% { opacity: 0.60; }
		66.6% { opacity: 0.52; }
		70.0% { opacity: 0.63; }
		79.9% { opacity: 0.60; }
		84.2% { opacity: 0.75; }
		91.0% { opacity: 0.87; }
}
</style>

	</head>
<body>
<div id="cssload-pgloading">
		<div class="cssload-loadingwrap">
			<ul class="cssload-bokeh">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>

</body>

</html>
<?php 
include('dist/includes/dbcon.php');

if(isset($_POST['login']))
{

$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];
$branch=$_POST['branch'];

$user = mysqli_real_escape_string($con,$user_unsafe);
$pass1 = mysqli_real_escape_string($con,$pass_unsafe);

$pass=md5($pass1);
$salt="a1Bz20ydqelm8m1wql";
$pass=$salt.$pass;

date_default_timezone_set('Asia/Manila');

$date = date("Y-m-d H:i:s");

$query=mysqli_query($con,"select * from user natural join branch where username='$user' and password='$pass' and branch_id='$branch' and status='active'")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
           $id=$row['user_id'];
           $name=$row['name'];
		   $sect=$row['section'];
           $counter=mysqli_num_rows($query);

           $id=$row['user_id'];
           $_SESSION['branch']=$row['branch_id'];
           $_SESSION['skin']=$row['skin'];

  	if ($counter == 0) 
	  {	
	  echo "<script type='text/javascript'>alert('Invalid Username or Password!');
	  document.location='index.php'</script>";
	  } 
	  elseif ($sect == "General")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='pages/home.php'</script>";
	  }
	  elseif ($sect == "CSR")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "Ward")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Pharmacy")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "Rehabilitation")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "Medical I")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Medical II")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Medical III")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Medical IV")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "Operating Room")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	    elseif ($sect == "Emergency Room")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "Diabetes Clinic")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Heart Station")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }

        elseif ($sect == "Pediatrics")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
         elseif ($sect == "SICU")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	    elseif ($sect == "Pallative")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "Hemodialysis Unit")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	    elseif ($sect == "OB-GYN WARD")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "OB-OR")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "OPD")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Oncology")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Surgery")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Surgery II")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Endoscopy")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Breast Clinic")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "OB-ER")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "IPCU")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Delivery Room")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "CAO")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Dental")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "NICU")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Medical2")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "MICU I")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "MICU II")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "MICU III")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "MICU IV")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Radiology")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "Laboratory")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "ASU")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "medical1")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "ISO1")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='ISO1/home.php'</script>";
	  }
	  elseif ($sect == "ISO2")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='ISO2/home.php'</script>";
	  }
	  elseif ($sect == "ISO3")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='ISO3/home.php'</script>";
	  }
	   elseif ($sect == "GSO")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "ISO4")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='ISO4/home.php'</script>";
	  }
	  elseif ($sect == "ISO5")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='ISO5/home.php'</script>";
	  }
	  elseif ($sect == "ISO6")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='ISO6/home.php'</script>";
	  }
	  elseif ($sect == "ISO7")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='ISO7/home.php'</script>";
	  }
	   elseif ($sect == "pallative")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Pallative/home.php'</script>";
	  }
	   elseif ($sect == "ERCOVID")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='ERCOVID/home.php'</script>";
	  }
	  elseif ($sect == "Engineering")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "RUMED")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "Molecular Lab")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Molecular Lab/home.php'</script>";
	  }
	   elseif ($sect == "TIDU Lab")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='TIDU Lab/home.php'</script>";
	  }
	   elseif ($sect == "Dietary")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "surgeryext")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "Finance")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Finance/home.php'</script>";
	  }
	   elseif ($sect == "Respiratory Unit")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "RT")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='RT/home.php'</script>";
	  }
	   elseif ($sect == "MCC")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "Medical Records")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  elseif ($sect == "Ambulatory")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "EREID")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	  
	   elseif ($sect == "PHU")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "Family Medicine")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "Geriatrics")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='Ward/home.php'</script>";
	  }
	   elseif ($sect == "ADMIN")
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="has logged in the system at ";  
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($con));

	
                 

		 echo "<script type='text/javascript'>document.location='IT/home.php'</script>";
	  }
}	 
?>

	
