<!DOCTYPE html>
<html lang="en">
 <!-- CISAT-RMUTL  -->
<head>
  <title> CISAT-RMUTL </title>
  <link rel="icon" type="image/jpg" href="Pictures/logo.jpg"  />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="dist/sweetalert.min.js"></script>
  <?php
  error_reporting(E_ALL & ~E_NOTICE);
  ?>
</head>
<?php
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$dbname = "cisat";
	$pdo = new PDO("mysql:dbname=$dbname;host=$host;",$user, $pass);
	@session_start();
?>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav">
      	<li>
      		<a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</abbr></a>
      	</li>
        	<?php
        		if($_SESSION['name'] == 'admin_login')
        		{
        			?>
        			<li class="dropdown">
        			    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-list"></span>
        			    	Staff Menu
        			    <span class="caret"></span></a>
        			    <ul class="dropdown-menu">
			        		<li>
			        			<a href="index.php?admin=true"><span class="glyphicon glyphicon-file"></span> 
			        				Name
			        			</a>
			        		</li>
			        		<li>
			        			<a href="index.php?check=true"><span class="glyphicon glyphicon-check"></span> 
			        				Check Time
			        			</a>
			        		</li>
			        		<li>
			        			<a href="index.php?schedule=true"><span class="glyphicon glyphicon-calendar"></span> 
			        				Schedule
			        			</a>
			        		</li>
			        		<li>
			        			<a href="index.php?contact=true"><span class="glyphicon glyphicon-phone-alt"></span> 
			        				Contact
			        			</a>
			        		</li>
			        		<li>
			        			<a href="index.php?picture=true"><span class="glyphicon glyphicon-picture"></span> 
			        				Pictures
			        			</a>
			        		</li>
			        		<li>
			        			<a href="index.php?downloads=true"><span class="glyphicon glyphicon-download"></span> 
			        				Downloads
			        			</a>
			        		</li>
	        		  	</ul>
	        		  </li>
        			<?php
        		}
        		if($_SESSION['name']=='user_login')
        		{
        			?>
        			<li class="dropdown">
        			    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-list"></span>
        			    	Menu
        			    <span class="caret"></span></a>
        			    <ul class="dropdown-menu">
        			    	<li>
        			    		<a href="index.php?schedule=true"><span class="glyphicon glyphicon-calendar"></span> 
        			    			Schedule
        			    		</a>
        			    	</li>
        			    	<li>
        			    		<a href="index.php?contact=true"><span class="glyphicon glyphicon-phone-alt"></span> 
        			    			Contact
        			    		</a>
        			    	</li>
        			    	<li>
			        			<a href="index.php?picture=true"><span class="glyphicon glyphicon-picture"></span> 
			        				Pictures
			        			</a>
			        		</li>

	        		  	</ul>
	        		  </li>
        			<?php
        		}
        	?>
        <li>
        	<a href="index.php?About=true"><span class="glyphicon glyphicon-question-sign"></span> About</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?Sign=true"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <?php
        if($_SESSION['name'] == 'admin_login' OR $_SESSION['name'] == 'user_login')
        {
        	?>
        		<li><a href="index.php?Logout=true"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        	<?php
        }
        else
        {
        	?>
        		<li><a href="index.php?Login=true"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        	<?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
<?php
	if(!$_GET)
	{
		?>
			<div class="container-fluid" style="background-color:#2196F3;color:#fff;height:50;">
				<h1>College of Integrated Science and Technology</h1>
				<h3>Rajamangala University of Technology Lanna</h3>
			</div>
			<div align="center">
			<div class="row">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-10">
				<h1>
					
				</h1>
				<img src="Pictures\7_20170214085922_5162898.jpg" class="img-rounded" alt="7_20170214085922_5162898.jpg"
				width="100%" style="max-height: 1768px;">
				<h1>
					
				</h1>
			</div>
			<div class="col-sm-1">
			</div>
			</div>
			</div>
			<h1>
				
			</h1>
			<div class="container-fluid" style="background-color:#2196F3;color:#fff;height:50;" align="center">
				<th>Create By: Mr.Supakij Buasod || CISAT-RMUTL</th>
			</div>
		<?php
	}
	else if($_GET["About"]=='true')
	{
		?>
			<div class="container-fluid" style="background-color: #00bcd4;color: #fff;height:50;">
				<h3>About</h3>
			</div>
			<div align="center">
			<div class="row">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-10">
				<h1>
					
				</h1>
				<img src="Pictures\website-logo-th.jpg" class="img-rounded" alt="website-logo-th.jpg" width="100%" style="max-height: 1768px;">
			</div>
			<div class="col-sm-1">
			</div>
			</div>
			</div>
			<br>
			<div class="row">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-3">
				<img src="Pictures\profile.jpg" class="img-rounded" alt="profile.jpg"
				width="100%" style="max-height: 1768px;">
			</div>

			<div class="col-sm-7" align="left">
			<h1 style="color: #6699ff">
				Create By
			</h1>
			<h1 style="color: #000066">
				Mr.Supakij Buasod
			</h1>
			<h2>
				Pre-Engineering
			</h2>
			<h2 style="color:#663300 ">
				College of Integrated Science and Technology
				<br>
				Rajamangala University of Technology Lanna
				<br>
			</h2>
			<h3 style="color: #33cccc">
				E-mail: <a href="https://web.facebook.com/supakij.Buasod">first50@windowslive.com </a></a><br>
				Mobile-Phone:<a href="">086-4293172</a>
			</h3>

			</div>
			<div class="col-sm-1">
			</div>
			</div>
			<h1>
				
			</h1>
			<div class="container-fluid" style="background-color: #00bcd4;color: #fff;height:50;" align="center">
				<th>Create By: Mr.Supakij Buasod || CISAT-RMUTL</th>
			</div>
		<?php
	}
	else if($_GET["admin"]=='true' AND $_SESSION['name'] == 'admin_login') // admin - page
	{
		?>
		<div class="container-fluid" style="background-color: #009900;color: #fff;height:50;">
			<h3>
				Cisat Camp 
			</h3>
		</div>
		<div align="center" class="col-sm-12" ><br>
		<div class="row">
		<div class="col-sm-3">
			<a href="index.php?all=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-success btn-block" name="all">
				All Students
			</button>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?eng=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-danger btn-block" name="eng">
				Pre-Engineer
			</button>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?art=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-warning btn-block" name="art">
				Pre-Architecture
			</button>
			</a>
			</form>
		</div>	
		<div class="col-sm-3">
			<a href="index.php?bsn=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-info btn-block" name="bsn">
				Pre-Bussiness
			</button>
			</a>
			</form>
		</div>
		</div>
		</div>
		<?php
	}
	else if($_GET["Logout"]=='true')
	{
		$_SESSION['name'] = 'Logout';
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.location.href='index.php';
		    </SCRIPT>");
	}
	else if($_GET["all"]=='true' AND $_SESSION['name']=='admin_login') // Show name all - admin page
	{
		?>
		<div class="container-fluid" style="background-color: #009900;color: #fff;height:50;">
		<h3>Cisat Camp >ALL<
			<?php
				$Select = "Select * From user WHERE NOT status='ADMIN' ";
				$Query = $pdo->prepare($Select);
				$Query->execute();
				$Count = $Query->rowCount();
				echo "(";
				echo $Count;
				echo ")";
			?>	
		</h3>
		</div>
		<div align="center" class="col-sm-12" ><br>
		<div class="row">
		<div class="col-sm-3">
			<a href="index.php?all=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-success btn-block" name="all">
				All Students
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?all-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?all-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?eng=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-danger btn-block" name="eng">
				Pre-Engineer
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?eng-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?eng-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?art=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-warning btn-block" name="art">
				Pre-Architecture
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?art-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?art-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>	
		<div class="col-sm-3">
			<a href="index.php?bsn=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-info btn-block" name="bsn">
				Pre-Bussiness
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?bsn-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?bsn-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		</div>
		</div>
		<h1 align="center">
			-----------------
		</h1>
		<div class="col-sm-2" align="left">
		<h5>ชื่อ</h5>
		<?php
			$Select = "SELECT * FROM user WHERE NOT status = 'ADMIN'";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch["sex"];
				echo $Fetch['fname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>นามสกุล</h5>
		<?php
			$Select = "SELECT * FROM user WHERE NOT status = 'ADMIN'";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['lname'];
				echo "(";
				echo $Fetch['subject'];
				echo ")";
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-1" align="left">
		<h5>ชื่อเล่น</h5>
		<?php
			$Select = "SELECT * FROM user WHERE NOT status = 'ADMIN'";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['nname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>เบอร์</h5>
		<?php
			$Select = "SELECT * FROM user WHERE NOT status = 'ADMIN'";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['tel'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-3" align="left">
		<h5>ผู้ปกครอง</h5>
		<?php
			$Select = "SELECT * FROM user WHERE NOT status = 'ADMIN'";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['pfname'];
				echo " ";
				echo $Fetch['plname'];
				echo " || ";
				echo $Fetch['ptell'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>Facebook</h5>
		<?php
			$Select = "SELECT * FROM user WHERE NOT status = 'ADMIN'";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['FB'];
				echo "<br>";
			}
		?>
		</div>
		</div>	
		<?php
	}
	else if($_GET["eng"]=='true' AND $_SESSION['name']=='admin_login') // Show name enineer - admin page
	{
		?>
		<div class="container-fluid" style="background-color: #ff0000;color: #fff;height:50;">
		<h3>Cisat Camp >ENG<
			<?php
				$Select = "Select * from user WHERE subject = 'ต.วศ' AND NOT status='ADMIN' ";
				$Query = $pdo->prepare($Select);
				$Query->execute();
				$Count = $Query->rowCount();
				echo "(";
				echo $Count;
				echo ")";
			?>	
		</h3>
		</div>
		<div align="center" class="col-sm-12" ><br>
		<div class="row">
		<div class="col-sm-3">
			<a href="index.php?all=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-success btn-block" name="all">
				All Students
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?all-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?all-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?eng=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-danger btn-block" name="eng">
				Pre-Engineer
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?eng-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?eng-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?art=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-warning btn-block" name="art">
				Pre-Architecture
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?art-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?art-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>	
		<div class="col-sm-3">
			<a href="index.php?bsn=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-info btn-block" name="bsn">
				Pre-Bussiness
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?bsn-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?bsn-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		</div>
		</div>
		<h1 align="center">
			-----------------
		</h1>

		<div class="col-sm-2" align="left">
		<h5>ชื่อ</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch["sex"];
				echo $Fetch['fname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>นามสกุล</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['lname'];
				echo "(";
				echo $Fetch['subject'];
				echo ")";
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-1" align="left">
		<h5>ชื่อเล่น</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['nname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>เบอร์</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['tel'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-3" align="left">
		<h5>ผู้ปกครอง</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['pfname'];
				echo " ";
				echo $Fetch['plname'];
				echo " || ";
				echo $Fetch['ptell'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>Facebook</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['FB'];
				echo "<br>";
			}
		?>
		</div>
		</div>	
		<?php
	}
	else if($_GET["art"]=='true' AND $_SESSION['name']=='admin_login') // Show name art - admin page
	{
		?>
		<div class="container-fluid" style="background-color: #66ff33 ;color: #fff;height:50;">
		<h3>Cisat Camp >ART<
			<?php
				$Select = "Select * from user WHERE subject = 'ต.สถ' AND NOT status='ADMIN' ";
				$Query = $pdo->prepare($Select);
				$Query->execute();
				$Count = $Query->rowCount();
				echo "(";
				echo $Count;
				echo ")";
			?>	
		</h3>
		</div>
		<div align="center" class="col-sm-12" ><br>
		<div class="row">
		<div class="col-sm-3">
			<a href="index.php?all=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-success btn-block" name="all">
				All Students
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?all-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?all-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?eng=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-danger btn-block" name="eng">
				Pre-Engineer
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?eng-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?eng-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?art=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-warning btn-block" name="art">
				Pre-Architecture
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?art-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?art-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>	
		<div class="col-sm-3">
			<a href="index.php?bsn=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-info btn-block" name="bsn">
				Pre-Bussiness
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?bsn-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?bsn-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		</div>
		</div>
		<h1 align="center">
			-----------------
		</h1>

		<div class="col-sm-2" align="left">
		<h5>ชื่อ</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch["sex"];
				echo $Fetch['fname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>นามสกุล</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['lname'];
				echo "(";
				echo $Fetch['subject'];
				echo ")";
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-1" align="left">
		<h5>ชื่อเล่น</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['nname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>เบอร์</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['tel'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-3" align="left">
		<h5>ผู้ปกครอง</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['pfname'];
				echo " ";
				echo $Fetch['plname'];
				echo " || ";
				echo $Fetch['ptell'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>Facebook</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['FB'];
				echo "<br>";
			}
		?>
		</div>
		</div>	
		<?php
	}
	else if($_GET["bsn"]=='true' AND $_SESSION['name']=='admin_login') // Show name art - admin page
	{
		?>
		<div class="container-fluid" style="background-color: #00ccff ;color: #fff;height:50;">
		<h3>Cisat Camp >BSN<
			<?php
				$Select = "Select * from user WHERE subject = 'ต.บธ' AND NOT status='ADMIN' ";
				$Query = $pdo->prepare($Select);
				$Query->execute();
				$Count = $Query->rowCount();
				echo "(";
				echo $Count;
				echo ")";
			?>	
		</h3>
		</div>
		<div align="center" class="col-sm-12" ><br>
		<div class="row">
		<div class="col-sm-3">
			<a href="index.php?all=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-success btn-block" name="all">
				All Students
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?all-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?all-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?eng=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-danger btn-block" name="eng">
				Pre-Engineer
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?eng-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?eng-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?art=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-warning btn-block" name="art">
				Pre-Architecture
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?art-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?art-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>	
		<div class="col-sm-3">
			<a href="index.php?bsn=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-info btn-block" name="bsn">
				Pre-Bussiness
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?bsn-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?bsn-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		</div>
		</div>	
		<h1 align="center">
			-----------------
		</h1>

		<div class="col-sm-2" align="left">
		<h5>ชื่อ</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch["sex"];
				echo $Fetch['fname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>นามสกุล</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['lname'];
				echo "(";
				echo $Fetch['subject'];
				echo ")";
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-1" align="left">
		<h5>ชื่อเล่น</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['nname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>เบอร์</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['tel'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-3" align="left">
		<h5>ผู้ปกครอง</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['pfname'];
				echo " ";
				echo $Fetch['plname'];
				echo " || ";
				echo $Fetch['ptell'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>Facebook</h5>
		<?php
			$Select = "Select * from user WHERE subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['FB'];
				echo "<br>";
			}
		?>
		</div>
		</div>	
		<?php
	}
	else if($_GET['all-male'] AND $_SESSION['name']=='admin_login') // all male
	{
		?>
		<div class="container-fluid" style="background-color: #009900 ;color: #fff;height:50;">
		<h3>Cisat Camp >ALL-Male<
			<?php
				$Select = "Select * from user WHERE sex = 'นาย' AND NOT status='ADMIN' ";
				$Query = $pdo->prepare($Select);
				$Query->execute();
				$Count = $Query->rowCount();
				echo "(";
				echo $Count;
				echo ")";
			?>	
		</h3>
		</div>
		<div align="center" class="col-sm-12" ><br>
		<div class="row">
		<div class="col-sm-3">
			<a href="index.php?all=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-success btn-block" name="all">
				All Students
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?all-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?all-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?eng=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-danger btn-block" name="eng">
				Pre-Engineer
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?eng-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?eng-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?art=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-warning btn-block" name="art">
				Pre-Architecture
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?art-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?art-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>	
		<div class="col-sm-3">
			<a href="index.php?bsn=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-info btn-block" name="bsn">
				Pre-Bussiness
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?bsn-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?bsn-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		</div>
		</div>	
		<h1 align="center">
			-----------------
		</h1>

		<div class="col-sm-2" align="left">
		<h5>ชื่อ</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch["sex"];
				echo $Fetch['fname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>นามสกุล</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['lname'];
				echo "(";
				echo $Fetch['subject'];
				echo ")";
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-1" align="left">
		<h5>ชื่อเล่น</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['nname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>เบอร์</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['tel'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-3" align="left">
		<h5>ผู้ปกครอง</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['pfname'];
				echo " ";
				echo $Fetch['plname'];
				echo " || ";
				echo $Fetch['ptell'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>Facebook</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['FB'];
				echo "<br>";
			}
		?>
		</div>
		</div>	
		<?php
	}
	else if($_GET['all-female'] AND $_SESSION['name']=='admin_login')
	{
		?>
		<div class="container-fluid" style="background-color: #009900 ;color: #fff;height:50;">
		<h3>Cisat Camp >ALL-Female<
			<?php
				$Select = "Select * from user WHERE sex = 'นางสาว' AND NOT status='ADMIN' ";
				$Query = $pdo->prepare($Select);
				$Query->execute();
				$Count = $Query->rowCount();
				echo "(";
				echo $Count;
				echo ")";
			?>	
		</h3>
		</div>
		<div align="center" class="col-sm-12" ><br>
		<div class="row">
		<div class="col-sm-3">
			<a href="index.php?all=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-success btn-block" name="all">
				All Students
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?all-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?all-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?eng=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-danger btn-block" name="eng">
				Pre-Engineer
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?eng-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?eng-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?art=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-warning btn-block" name="art">
				Pre-Architecture
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?art-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?art-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>	
		<div class="col-sm-3">
			<a href="index.php?bsn=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-info btn-block" name="bsn">
				Pre-Bussiness
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?bsn-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?bsn-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		</div>
		</div>	
		<h1 align="center">
			-----------------
		</h1>

		<div class="col-sm-2" align="left">
		<h5>ชื่อ</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch["sex"];
				echo $Fetch['fname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>นามสกุล</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['lname'];
				echo "(";
				echo $Fetch['subject'];
				echo ")";
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-1" align="left">
		<h5>ชื่อเล่น</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['nname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>เบอร์</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['tel'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-3" align="left">
		<h5>ผู้ปกครอง</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['pfname'];
				echo " ";
				echo $Fetch['plname'];
				echo " || ";
				echo $Fetch['ptell'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>Facebook</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['FB'];
				echo "<br>";
			}
		?>
		</div>
		</div>	
		<?php
	}
	else if($_GET['eng-male'] AND $_SESSION['name']=='admin_login') // eng-male
	{
		?>
		<div class="container-fluid" style="background-color: #ff0000 ;color: #fff;height:50;">
		<h3>Cisat Camp >ENG-Male<
			<?php
				$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
				$Query = $pdo->prepare($Select);
				$Query->execute();
				$Count = $Query->rowCount();
				echo "(";
				echo $Count;
				echo ")";
			?>	
		</h3>
		</div>
		<div align="center" class="col-sm-12" ><br>
		<div class="row">
		<div class="col-sm-3">
			<a href="index.php?all=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-success btn-block" name="all">
				All Students
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?all-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?all-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?eng=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-danger btn-block" name="eng">
				Pre-Engineer
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?eng-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?eng-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?art=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-warning btn-block" name="art">
				Pre-Architecture
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?art-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?art-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>	
		<div class="col-sm-3">
			<a href="index.php?bsn=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-info btn-block" name="bsn">
				Pre-Bussiness
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?bsn-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?bsn-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		</div>
		</div>	
		<h1 align="center">
			-----------------
		</h1>

		<div class="col-sm-2" align="left">
		<h5>ชื่อ</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch["sex"];
				echo $Fetch['fname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>นามสกุล</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['lname'];
				echo "(";
				echo $Fetch['subject'];
				echo ")";
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-1" align="left">
		<h5>ชื่อเล่น</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['nname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>เบอร์</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['tel'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-3" align="left">
		<h5>ผู้ปกครอง</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['pfname'];
				echo " ";
				echo $Fetch['plname'];
				echo " || ";
				echo $Fetch['ptell'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>Facebook</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['FB'];
				echo "<br>";
			}
		?>
		</div>
		</div>	
		<?php
	}
	else if($_GET['eng-female'] AND $_SESSION['name']=='admin_login') // eng-female
	{
		?>
		<div class="container-fluid" style="background-color: #ff0000 ;color: #fff;height:50;">
		<h3>Cisat Camp >ENG-Female<
			<?php
				$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
				$Query = $pdo->prepare($Select);
				$Query->execute();
				$Count = $Query->rowCount();
				echo "(";
				echo $Count;
				echo ")";
			?>	
		</h3>
		</div>
		<div align="center" class="col-sm-12" ><br>
		<div class="row">
		<div class="col-sm-3">
			<a href="index.php?all=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-success btn-block" name="all">
				All Students
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?all-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?all-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?eng=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-danger btn-block" name="eng">
				Pre-Engineer
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?eng-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?eng-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?art=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-warning btn-block" name="art">
				Pre-Architecture
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?art-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?art-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>	
		<div class="col-sm-3">
			<a href="index.php?bsn=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-info btn-block" name="bsn">
				Pre-Bussiness
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?bsn-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?bsn-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		</div>
		</div>	
		<h1 align="center">
			-----------------
		</h1>

		<div class="col-sm-2" align="left">
		<h5>ชื่อ</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch["sex"];
				echo $Fetch['fname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>นามสกุล</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['lname'];
				echo "(";
				echo $Fetch['subject'];
				echo ")";
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-1" align="left">
		<h5>ชื่อเล่น</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['nname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>เบอร์</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['tel'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-3" align="left">
		<h5>ผู้ปกครอง</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['pfname'];
				echo " ";
				echo $Fetch['plname'];
				echo " || ";
				echo $Fetch['ptell'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>Facebook</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.วศ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['FB'];
				echo "<br>";
			}
		?>
		</div>
		</div>	
		<?php
	}
	else if($_GET['art-male'] AND $_SESSION['name']=='admin_login') // art-male
	{
		?>
		<div class="container-fluid" style="background-color: #66ff33 ;color: #fff;height:50;">
		<h3>Cisat Camp >ART-Male<
			<?php
				$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
				$Query = $pdo->prepare($Select);
				$Query->execute();
				$Count = $Query->rowCount();
				echo "(";
				echo $Count;
				echo ")";
			?>	
		</h3>
		</div>
		<div align="center" class="col-sm-12" ><br>
		<div class="row">
		<div class="col-sm-3">
			<a href="index.php?all=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-success btn-block" name="all">
				All Students
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?all-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?all-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?eng=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-danger btn-block" name="eng">
				Pre-Engineer
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?eng-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?eng-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?art=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-warning btn-block" name="art">
				Pre-Architecture
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?art-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?art-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>	
		<div class="col-sm-3">
			<a href="index.php?bsn=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-info btn-block" name="bsn">
				Pre-Bussiness
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?bsn-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?bsn-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		</div>
		</div>	
		<h1 align="center">
			-----------------
		</h1>

		<div class="col-sm-2" align="left">
		<h5>ชื่อ</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch["sex"];
				echo $Fetch['fname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>นามสกุล</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['lname'];
				echo "(";
				echo $Fetch['subject'];
				echo ")";
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-1" align="left">
		<h5>ชื่อเล่น</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['nname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>เบอร์</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['tel'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-3" align="left">
		<h5>ผู้ปกครอง</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['pfname'];
				echo " ";
				echo $Fetch['plname'];
				echo " || ";
				echo $Fetch['ptell'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>Facebook</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['FB'];
				echo "<br>";
			}
		?>
		</div>
		</div>	
		<?php
	}
	else if($_GET['art-female'] AND $_SESSION['name']=='admin_login') // art-female
	{
		?>
		<div class="container-fluid" style="background-color: #66ff33 ;color: #fff;height:50;">
		<h3>Cisat Camp >ART-Female<
			<?php
				$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
				$Query = $pdo->prepare($Select);
				$Query->execute();
				$Count = $Query->rowCount();
				echo "(";
				echo $Count;
				echo ")";
			?>	
		</h3>
		</div>
		<div align="center" class="col-sm-12" ><br>
		<div class="row">
		<div class="col-sm-3">
			<a href="index.php?all=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-success btn-block" name="all">
				All Students
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?all-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?all-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?eng=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-danger btn-block" name="eng">
				Pre-Engineer
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?eng-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?eng-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?art=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-warning btn-block" name="art">
				Pre-Architecture
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?art-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?art-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>	
		<div class="col-sm-3">
			<a href="index.php?bsn=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-info btn-block" name="bsn">
				Pre-Bussiness
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?bsn-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?bsn-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		</div>
		</div>	
		<h1 align="center">
			-----------------
		</h1>

		<div class="col-sm-2" align="left">
		<h5>ชื่อ</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch["sex"];
				echo $Fetch['fname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>นามสกุล</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['lname'];
				echo "(";
				echo $Fetch['subject'];
				echo ")";
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-1" align="left">
		<h5>ชื่อเล่น</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['nname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>เบอร์</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['tel'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-3" align="left">
		<h5>ผู้ปกครอง</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['pfname'];
				echo " ";
				echo $Fetch['plname'];
				echo " || ";
				echo $Fetch['ptell'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>Facebook</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.สถ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['FB'];
				echo "<br>";
			}
		?>
		</div>
		</div>	
		<?php
	}
	else if($_GET['bsn-male'] AND $_SESSION['name']=='admin_login') // bsn-male
	{
		?>
		<div class="container-fluid" style="background-color: #00ccff ;color: #fff;height:50;">
		<h3>Cisat Camp >BSN-Male<
			<?php
				$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
				$Query = $pdo->prepare($Select);
				$Query->execute();
				$Count = $Query->rowCount();
				echo "(";
				echo $Count;
				echo ")";
			?>	
		</h3>
		</div>
		<div align="center" class="col-sm-12" ><br>
		<div class="row">
		<div class="col-sm-3">
			<a href="index.php?all=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-success btn-block" name="all">
				All Students
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?all-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?all-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?eng=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-danger btn-block" name="eng">
				Pre-Engineer
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?eng-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?eng-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?art=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-warning btn-block" name="art">
				Pre-Architecture
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?art-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?art-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>	
		<div class="col-sm-3">
			<a href="index.php?bsn=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-info btn-block" name="bsn">
				Pre-Bussiness
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?bsn-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?bsn-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		</div>
		</div>	
		<h1 align="center">
			-----------------
		</h1>

		<div class="col-sm-2" align="left">
		<h5>ชื่อ</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch["sex"];
				echo $Fetch['fname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>นามสกุล</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['lname'];
				echo "(";
				echo $Fetch['subject'];
				echo ")";
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-1" align="left">
		<h5>ชื่อเล่น</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['nname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>เบอร์</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['tel'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-3" align="left">
		<h5>ผู้ปกครอง</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['pfname'];
				echo " ";
				echo $Fetch['plname'];
				echo " || ";
				echo $Fetch['ptell'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>Facebook</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นาย' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['FB'];
				echo "<br>";
			}
		?>
		</div>
		</div>	
		<?php
	}
	else if($_GET['bsn-female'] AND $_SESSION['name']=='admin_login') // bsn-female
	{
		?>
		<div class="container-fluid" style="background-color: #00ccff ;color: #fff;height:50;">
		<h3>Cisat Camp >BSN-Female<
			<?php
				$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
				$Query = $pdo->prepare($Select);
				$Query->execute();
				$Count = $Query->rowCount();
				echo "(";
				echo $Count;
				echo ")";
			?>	
		</h3>
		</div>
		<div align="center" class="col-sm-12" ><br>
		<div class="row">
		<div class="col-sm-3">
			<a href="index.php?all=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-success btn-block" name="all">
				All Students
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?all-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?all-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-success btn-block " name="all-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?eng=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-danger btn-block" name="eng">
				Pre-Engineer
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?eng-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?eng-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-danger btn-block " name="eng-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		<div class="col-sm-3">
			<a href="index.php?art=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-warning btn-block" name="art">
				Pre-Architecture
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?art-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?art-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-warning btn-block " name="art-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>	
		<div class="col-sm-3">
			<a href="index.php?bsn=true">
			<button style="transition:0.5s;display:inline;height:50px;" class="btn btn-info btn-block" name="bsn">
				Pre-Bussiness
			</button>
			<h5>
				
			</h5>
			<div class="col-sm-6">
			<a href="index.php?bsn-male=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-male">
				Male
			</button>
			</a>
			</div>
			<div class="col-sm-6">
			<a href="index.php?bsn-female=true">
			<button style="transition: 0.5s;display: inline;height: 50px;" class="btn btn-info btn-block " name="bsn-female">
				Female
			</button>
			</a>
			</div>
			</a>
			</form>
		</div>
		</div>
		</div>	
		<h1 align="center">
			-----------------
		</h1>

		<div class="col-sm-2" align="left">
		<h5>ชื่อ</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch["sex"];
				echo $Fetch['fname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>นามสกุล</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['lname'];
				echo "(";
				echo $Fetch['subject'];
				echo ")";
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-1" align="left">
		<h5>ชื่อเล่น</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['nname'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>เบอร์</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['tel'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-3" align="left">
		<h5>ผู้ปกครอง</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['pfname'];
				echo " ";
				echo $Fetch['plname'];
				echo " || ";
				echo $Fetch['ptell'];
				echo "<br>";
			}
		?>
		</div>
		<div class="col-sm-2" align="left">
		<h5>Facebook</h5>
		<?php
			$Select = "Select * from user WHERE sex = 'นางสาว' AND subject = 'ต.บธ' AND NOT status='ADMIN' ";
			$Query = $pdo->prepare($Select);
			$Query->execute();
			while($Fetch = $Query->fetch(PDO::FETCH_ASSOC))
			{
				echo $Fetch['FB'];
				echo "<br>";
			}
		?>
		</div>
		</div>	
		<?php
	}
	else if($_GET['user']=='true' AND $_SESSION['name']=='user_login') // user page
	{
		?>
			<div class="container-fluid" style="background-color: #999966;color: #fff;height:50;">
				<h3>Student</h3>
			</div>
		<?php
	}
	else if($_GET["Sign"]=='true') // Register 
	{
		?>
			<div class="container-fluid" style="background-color: #009900;color: #fff;height:50;">
				<h3>Register</h3>
			</div>
			<div align="center">
			<div class="row">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-10">
				<form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
				<div class="row">
				<div class="col-sm-3">
						<div class="w3-row w3-section">
						<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
						<h6></h6>
							<label class="radio-inline"><input type="radio" name="men">นาย</label>
							<label class="radio-inline"><input type="radio" name="female">นางสาว</label>
						</div>
						</div>
				<div class="col-sm-4">
				<div class="w3-row w3-section">
				    <div class="w3-rest">
				      <input class="w3-input w3-border" name="firstname" type="text" placeholder="ชื่อจริง">
				    </div>
				</div>
				</div>
				<div class="col-sm-4">
				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class=""></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border" name="lastname" type="text" placeholder="นามสกุล">
				    </div>
				</div>
				</div>
				<div class="col-sm-1">
				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class=""></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border" name="nickname" type="text" placeholder="ชื่อเล่น">
				    </div>
				</div>
				</div>
				<div class="col-sm-1">
				</div>
				</div>
				<div class="row">	
						<div class="col-sm-7">
						<div class="w3-row w3-section">
						<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-book"></i></div>
						<h6></h6>
							<label class="radio-inline"><input type="radio" name="pre-eng">เตรียมวิศวกรรมศาสตร์</label>
							<label class="radio-inline"><input type="radio" name="pre-art">เตรียมสถาปัตยกรรมศาสตร์</label>
							<label class="radio-inline"><input type="radio" name="pre-bsn">เตรียมบริหารธุรกิจ</label>
						</div>
						</div>
				</div>
				<div class="row">
				<div class="col-sm-6">
				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border" name="telephone" type="text" placeholder="เบอร์โทรศัพท์ // ไม่ต้องใส่ - ">
				    </div>
				</div>
				</div>

				<div class="col-sm-6">
				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border" name="facebook" type="text" placeholder="FaceBook, E-mall">
				    </div>
				</div>
				</div>
				</div>
				<div class="row">
				<div class="col-sm-6">
				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border" name="pfname" type="text" placeholder="ชื่อผู้ปกครอง">
				    </div>
				</div>
				</div>

				<div class="col-sm-6">
				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class=""></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border" name="plname" type="text" placeholder="นามสกุล">
				    </div>
				</div>
				</div>
				</div>
				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border" name="ptell" type="text" placeholder="เบอร์โทรศัพท์ผู้ปกครอง(สามารถติดต่อได้จริง) // ไม่ต้องใส่ - ">
				    </div>
				</div>
				<input type="submit" name="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" value="Send">
				</form>
			</div>
			</div>
			<h1>
				
			</h1>
			<div class="container-fluid" style="background-color: #009900;color: #fff;height:50;" align="center">
				<th>Create By: Mr.Supakij Buasod || CISAT-RMUTL</th>
			</div>
		<?php
	}
	else if($_GET["Login"]=='true')
	{
		?>
			<div class="container-fluid" style="background-color: #00cc99;color: #fff;height:50;">
				<h3>Login</h3>
			</div>
			<div align="center">
			<div class="row">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-10">
				<form action="" class="w3-container w3-card-4 w3-light-grey w3-text-green w3-margin" method="post">
				<h2 class="w3-center"></h2>
				 
				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border" name="user" type="text" placeholder="ชื่อจริง // ภาษาไทยนะครับ (ไม่ต้องใส่คำนำหน้าชื่อ)">
				    </div>
				</div>

				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border" name="pass" type="text" placeholder="เบอร์โทรศัพท์ // ของนักศึกษา (ไม่ต้องใส่ - )">
				    </div>
				</div>
				<input type="submit" name="login_submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" value="Login">
				</form>
			</div> 
			</div> 
			</div> 
			<h1>
				
			</h1>
			<div class="container-fluid" style="background-color: #00cc99;color: #fff;height:50;" align="center">
				<th>Create By: Mr.Supakij Buasod || CISAT-RMUTL</th>
			</div>
		<?php
	}
	else if($_GET["picture"]=='true' AND $_SESSION['name']=='admin_login' OR $_SESSION['name']=='user_login')
	{
		?>
		<div class="container" align="center">
		<?php
			$files = glob("images/*.*");
			for ($i=1; $i<count($files); $i++)
			{
			   $image = $files[$i];
			   $supported_file = array(
			           'gif',
			           'jpg',
			           'jpeg',
			           'png'
			    );

			    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
			    if (in_array($ext, $supported_file)) 
			    {
			        echo $image ."<br />";
			        echo '<img  class="img-rounded" src="'.$image .'" alt="Random image" width="70%" style="max-height: 1768px;"/>'."<br /><br />";
			    } 
			    else
			    {
			        continue;
			    }
			}
		?>
		</div>
		</div>
		</div>
		<?php
	}
	else if($_GET['downloads']=='true' AND $_SESSION['name']=="admin_login")
	{
		?>
		<div class="container">
		<div class="col-sm-8" align="center">
			<h3>Pictures All</h3>
			<br>
		</div>
		<div class="col-sm-4" align="center">
			<div class="button">
				<a href="\images\images.rar"><button class="btn btn-success btn-lg">Download</button></a>
				<br>
			</div>
		</div>
		<div class="col-sm-8" align="center">
			<h3>Documents</h3>
			<br>
		</div>

		<div class="col-sm-4" align="center">
			<div class="button">
				<a href="\documents\documents.rar"><button class="btn btn-info btn-lg">Download</button></a>
				<br>
			</div>
		</div>
		</div>
		<?php
	}
	else 
	{
		?>
		<div class="container">
			<div class="alert alert-danger" align="center">
				<h1><strong>Error! 404</strong></h1>
				<br>
				<h2>Page Not Found</h2>
			</div>
		</div>
		<?php
	}
?>

<?php // Post_FuncTion << This function use fot add the data to database and check the state of data 
	if(isset($_POST['submit']))
	{
		$Select_user = "SELECT * FROM user WHERE name = :name";
		$Query_user = $pdo->prepare($Select_user);
		$Query_user->execute(Array(
			":name" => $_POST['user']
		));
		$Count = $Query_user->rowCount();
		if($Count >= 1)
		{
			echo "<script>";
			echo "swal(\"ชื่อนี้มีผู้ใช้งานแล้ว\", \"ข้อมูลผิดพลาด\");";
			echo "</script>";
			die();
		}
			// *-------------Check error data or null all-----------------*
			if ($_POST['firstname'] == NULL)
			{
				echo "<script>";
				echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"ชื่อจริง\");";
				echo "</script>";
			}
			else if ($_POST['lastname'] == NULL)
			{
				echo "<script>";
				echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"นามสกุล\");";
				echo "</script>";
			}
			else if ($_POST['nickname'] == NULL)
			{
				echo "<script>";
				echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"ชื่อเล่น\");";
				echo "</script>";
			}
			else if ($_POST['telephone'] == NULL)
			{
				echo "<script>";
				echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"เบอร์โทรศัพท์\");";
				echo "</script>";
			}
			else if ($_POST['pfname'] == NULL)
			{
				echo "<script>";
				echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"ชื่อผู้ปกครอง\");";
				echo "</script>";
			}
			else if ($_POST['pfname'] == NULL)
			{
				echo "<script>";
				echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"นามสกุล(ผู้ปกครอง)\");";
				echo "</script>";
			}
			else if ($_POST['ptell'] == NULL)
			{
				echo "<script>";
				echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"เบอร์โทรศัพท์ผู้ปกครอง\");";
				echo "</script>";
			}
			else
			{
				if($_POST['men']) // check state of sex 
				{
					if($_POST['pre-eng'])
					{
						$Insert_info = "INSERT INTO `user`(`id`,`sex`, `fname`, `lname`, `nname`,`subject`, `tel`, `FB`, `pfname`, `plname`, `ptell`) 
										VALUES (:id,:sex, :fname, :lname, :nname,:subject, :tel, :FB, :pfname, :plname, :ptell);
										SELECT sex, fname, lname, nname, subject, tel, pfname, plname, ptell FROM user
										WHERE sex, fname, lname, nname, subject, tel, pfname, plname, ptell IS NOT NULL;";
						$men = "นาย";
						$subject = "ต.วศ";
						$Query_info = $pdo->prepare($Insert_info);
						$Query_info -> execute(Array(
							":id" => NULL,
							":sex" => $men,
							":fname" => $_POST['firstname'],
							":lname" => $_POST['lastname'],
							":nname" => $_POST['nickname'],
							":subject" => $subject,
							":tel" => $_POST['telephone'],
							":FB" => $_POST['facebook'],
							":pfname" => $_POST['pfname'],
							":plname" => $_POST['plname'],
							":ptell" => $_POST['ptell']
						));
						echo "<script>";
						echo "swal(\"สำเร็จ!\", \"บันทึกข้อมูล\", \"success\")";
						echo "</script>";
					}
					else if($_POST['pre-art'])
					{
						$Insert_info = "INSERT INTO `user`(`id`,`sex`, `fname`, `lname`, `nname`,`subject`, `tel`, `FB`, `pfname`, `plname`, `ptell`) 
										VALUES (:id,:sex, :fname, :lname, :nname,:subject, :tel, :FB, :pfname, :plname, :ptell);
										SELECT sex, fname, lname, nname, subject, tel, pfname, plname, ptell FROM user
										WHERE sex, fname, lname, nname, subject, tel, pfname, plname, ptell IS NOT NULL;";
						$men = "นาย";
						$subject = "ต.สถ";
						$Query_info = $pdo->prepare($Insert_info);
						$Query_info->execute(Array(
							":id" => NULL,
							":sex" => $men,
							":fname" => $_POST['firstname'],
							":lname" => $_POST['lastname'],
							":nname" => $_POST['nickname'],
							":subject" => $subject,
							":tel" => $_POST['telephone'],
							":FB" => $_POST['facebook'],
							":pfname" => $_POST['pfname'],
							":plname" => $_POST['plname'],
							":ptell" => $_POST['ptell']
						));
						echo "<script>";
						echo "swal(\"สำเร็จ!\", \"บันทึกข้อมูล\", \"success\")";
						echo "</script>";
					}
					else if($_POST['pre-bsn'])
					{
						$Insert_info = "INSERT INTO `user`(`id`,`sex`, `fname`, `lname`, `nname`,`subject`, `tel`, `FB`, `pfname`, `plname`, `ptell`) 
										VALUES (:id,:sex, :fname, :lname, :nname,:subject, :tel, :FB, :pfname, :plname, :ptell);
										SELECT sex, fname, lname, nname, subject, tel, pfname, plname, ptell FROM user
										WHERE sex, fname, lname, nname, subject, tel, pfname, plname, ptell IS NOT NULL;";
						$men = "นาย";
						$subject = "ต.บธ";
						$Query_info = $pdo->prepare($Insert_info);
						$Query_info->execute(Array(
							":id" => NULL,
							":sex" => $men,
							":fname" => $_POST['firstname'],
							":lname" => $_POST['lastname'],
							":nname" => $_POST['nickname'],
							":subject" => $subject,
							":tel" => $_POST['telephone'],
							":FB" => $_POST['facebook'],
							":pfname" => $_POST['pfname'],
							":plname" => $_POST['plname'],
							":ptell" => $_POST['ptell']
						));
						echo "<script>";
						echo "swal(\"สำเร็จ!\", \"บันทึกข้อมูล\", \"success\")";
						echo "</script>";
					}
					else // Check for subject
					{
						echo "<script>";
						echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"สาขา\");";
						echo "</script>";
					}
				}
				else if($_POST['female']) // check state of sex 
				{
					if($_POST['pre-eng'])
					{
						$Insert_info = "INSERT INTO `user`(`id`,`sex`, `fname`, `lname`, `nname`,`subject`, `tel`, `FB`, `pfname`, `plname`, `ptell`) 
										VALUES (:id,:sex, :fname, :lname, :nname,:subject, :tel, :FB, :pfname, :plname, :ptell);
										SELECT sex, fname, lname, nname, subject, tel, pfname, plname, ptell FROM user
										WHERE sex, fname, lname, nname, subject, tel, pfname, plname, ptell IS NOT NULL;";
						$female = "นางสาว";
						$subject = "ต.วศ";
						$Query_info = $pdo->prepare($Insert_info);
						$Query_info->execute(Array(
							":id" => NULL,
							":sex" => $female,
							":fname" => $_POST['firstname'],
							":lname" => $_POST['lastname'],
							":nname" => $_POST['nickname'],
							":subject" => $subject,
							":tel" => $_POST['telephone'],
							":FB" => $_POST['facebook'],
							":pfname" => $_POST['pfname'],
							":plname" => $_POST['plname'],
							":ptell" => $_POST['ptell']
						));
						echo "<script>";
						echo "swal(\"สำเร็จ!\", \"บันทึกข้อมูล\", \"success\")";
						echo "</script>";
					}
					else if($_POST['pre-art'])
					{
						$Insert_info = "INSERT INTO `user`(`id`,`sex`, `fname`, `lname`, `nname`,`subject`, `tel`, `FB`, `pfname`, `plname`, `ptell`) 
										VALUES (:id,:sex, :fname, :lname, :nname,:subject, :tel, :FB, :pfname, :plname, :ptell);
										SELECT sex, fname, lname, nname, subject, tel, pfname, plname, ptell FROM user
										WHERE sex, fname, lname, nname, subject, tel, pfname, plname, ptell IS NOT NULL;";
						$female = "นางสาว";
						$subject = "ต.สถ";
						$Query_info = $pdo->prepare($Insert_info);
						$Query_info->execute(Array(
							":id" => NULL,
							":sex" => $female,
							":fname" => $_POST['firstname'],
							":lname" => $_POST['lastname'],
							":nname" => $_POST['nickname'],
							":subject" => $subject,
							":tel" => $_POST['telephone'],
							":FB" => $_POST['facebook'],
							":pfname" => $_POST['pfname'],
							":plname" => $_POST['plname'],
							":ptell" => $_POST['ptell']
						));
						echo "<script>";
						echo "swal(\"สำเร็จ!\", \"บันทึกข้อมูล\", \"success\")";
						echo "</script>";
					}
					else if($_POST['pre-bsn'])
					{
						$Insert_info = "INSERT INTO `user`(`id`,`sex`, `fname`, `lname`, `nname`,`subject`, `tel`, `FB`, `pfname`, `plname`, `ptell`) 
										VALUES (:id,:sex, :fname, :lname, :nname,:subject, :tel, :FB, :pfname, :plname, :ptell);
										SELECT sex, fname, lname, nname, subject, tel, pfname, plname, ptell FROM user
										WHERE sex, fname, lname, nname, subject, tel, pfname, plname, ptell IS NOT NULL;";
						$female = "นางสาว";
						$subject = "ต.บธ";
						$Query_info = $pdo->prepare($Insert_info);
						$Query_info->execute(Array(
							":id" => NULL,
							":sex" => $female,
							":fname" => $_POST['firstname'],
							":lname" => $_POST['lastname'],
							":nname" => $_POST['nickname'],
							":subject" => $subject,
							":tel" => $_POST['telephone'],
							":FB" => $_POST['facebook'],
							":pfname" => $_POST['pfname'],
							":plname" => $_POST['plname'],
							":ptell" => $_POST['ptell']
						));
						echo "<script>";
						echo "swal(\"สำเร็จ!\", \"บันทึกข้อมูล\", \"success\")";
						echo "</script>";
					}
					else
					{
						echo "<script>";
						echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"สาขา\");";
						echo "</script>";
					}

				}
				else
				{
					echo "<script>";
					echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"เพศ\");";
					echo "</script>";
				}
			}
	}

	if(isset($_POST['login_submit']))
	{
			$Select = "SELECT * FROM user WHERE fname = :user AND tel = :pass AND status = :status";
			$Admin = "ADMIN";
			$User = "USER";
			$Query = $pdo->prepare($Select);
			$Query->execute(Array(
			":user" => $_POST['user'],
			":pass" => $_POST['pass'],
			":status" => $Admin
			));
			$Fetch = $Query->fetch(PDO::FETCH_ASSOC);
			$row = $Query->rowCount();

			$Query2 = $pdo->prepare($Select);
			$Query2->execute(Array(
			":user" => $_POST['user'],
			":pass" => $_POST['pass'],
			":status" => $User
			));
			$Fetch2 = $Query2->fetch(PDO::FETCH_ASSOC);
			$row2 = $Query2->rowCount();
		if($row == '1')
		{
			// die('Login');
			echo "<script>";
			echo "swal(\"สำเร็จ!\", \"เข้าสู่ระบบ\", \"success\")";
			echo "</script>";
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.location.href='index.php?admin=true';
		    </SCRIPT>");
			$_SESSION['name'] = 'admin_login';
		}
		if($row2 == 1)
		{
			echo "<script>";
			echo "swal(\"สำเร็จ!\", \"เข้าสู่ระบบ\", \"success\")";
			echo "</script>";
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.location.href='index.php?user=true';
		    </SCRIPT>");
			$_SESSION['name'] = 'user_login';
		}
		else
		{
			// die('Wrong Password');
			echo "<script>";
			echo "swal(\"ผิดพลาด!\", \"ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง\")";
			echo "</script>";
		}
	}
?>
</body>
</html>
