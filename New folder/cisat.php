<!DOCTYPE html>
<html lang="en">
<head>
  <title>CISAT || RMUTL</title>
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
      		<a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
      	</li>
        <li>
        	<a href="index.php?About=true"><span class="glyphicon glyphicon-question-sign"></span> About</a>
        </li>
        <li>
        	<a href="index.php?Contact=true"><span class="glyphicon glyphicon-envelope"></span> Contact</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?Sign=true"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="index.php?Login=true"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
				<img src="Pictures\smart-farm_21483373_1f4368791a68d3c6f6e42020929fe5131ede2259.png" class="img-rounded" alt="smart-farm_21483373_1f4368791a68d3c6f6e42020929fe5131ede2259.png" width="100%" style="max-height: 1768px;">
			</div>
			<div class="col-sm-1">
			</div>
			</div>
			</div>
			<h1>
				
			</h1>
			<div class="container-fluid" style="background-color: #00bcd4;color: #fff;height:50;" align="center">
				<th>Create By: Mr.Supakij Buasod || CISAT-RMUTL</th>
			</div>
		<?php
	}
	else if($_GET["Contact"]=='true')
	{
		?>
			<div class="container-fluid" style="background-color: #009688;color: #fff;height:50;">
				<h3>Contact</h3>
			</div>
		<?php
	}
	else if($_GET["Sign"]=='true')
	{
		?>
			<div class="container-fluid" style="background-color: #009900;color: #fff;height:50;">
				<h3>Sign Up</h3>
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
				      <input class="w3-input w3-border" name="lastanme" type="text" placeholder="นามสกุล">
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
							<label class="radio-inline"><input type="radio" name="pre-eng">เตรียมวิศวกรรมศาสตร์</label>
							<label class="radio-inline"><input type="radio" name="pre-art">เตรียมสถาปัตยกรรมศาสตร์</label>
							<label class="radio-inline"><input type="radio" name="per-bsn">เตรียมบริหารธุรกิจ</label>
						</div>
						</div>
				</div>
				<div class="row">
				<div class="col-sm-6">
				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border" name="telephone" type="text" placeholder="เบอร์โทรศัพท์">
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
				      <input class="w3-input w3-border" name="ptell" type="text" placeholder="เบอร์โทรศัพท์ผู้ปกครอง(สามารถติดต่อได้จริง)">
				    </div>
				</div>
				<input type="submit" name="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" value="send">
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
				      <input class="w3-input w3-border" name="user" type="text" placeholder="ชื่อผู้ใช้งาน">
				    </div>
				</div>

				<div class="w3-row w3-section">
				  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
				    <div class="w3-rest">
				      <input class="w3-input w3-border" name="pass" type="text" placeholder="รหัสผ่าน">
				    </div>
				</div>

				<input class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" type="submit" name="login_submit">

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
?>

<?php
	if(isset($_POST['submit']))
	{
		$Select_user = "SELECT * FROM user WHERE name = :name";
		$Query_user = $pdo->prepare($Select_user);
		$Query_user->execute(Array(
			":name" => $_POST['user']
		));
		$Count = $Query_user->rowCount();
		if($Count >= 1){
			echo "<script>";
			echo "swal(\"ชื่อนี้มีผู้ใช้งานแล้ว\", \"ข้อมูลผิดพลาด\");";
			echo "</script>";
			die();
		}
		$Insert_info = "INSERT INTO `user`(`id`, `status`, `fname`, `lname`, `nname`, `tel`, `FB`, `pfname`, `plname`, `ptell`) 
						VALUES (:id, :status, :fname, :lname, :nname, :tel, :FB, :pfname, :plname, :ptell);";
		// if($_POST['user'] == NULL)
		// {
		// 	echo "<script>";
		// 	echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"ข้อมูลผิดพลาด\");";
		// 	echo "</script>";
		// }
		// else if($_POST['fname'] == NULL)
		// {
		// 	echo "<script>";
		// 	echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"ข้อมูลผิดพลาด\");";
		// 	echo "</script>";
		// }
		// else if($_POST['lname'] == NULL)
		// {
		// 	echo "<script>";
		// 	echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"ข้อมูลผิดพลาด\");";
		// 	echo "</script>";
		// }
		// else if($_POST['nname'] == NULL)
		// {
		// 	echo "<script>";
		// 	echo "swal(\"กรุณากรอกข้อมูลให้ครบ!\", \"ข้อมูลผิดพลาด\");";
		// 	echo "</script>";
		// }
		// else
		// {		
			$Query_info = $pdo->prepare($Insert_info);
			$Query_info->execute(Array(
				":id" => NULL,
				":fname" => $_POST['firstname'],				
				":lname" => $_POST['lastanme'],
				":nname" => $_POST['nickname'],
				":tel" => $_POST['telephone'],
				":FB" => $_POST['facebook'],
				":pfname" => $_POST['pfname'],
				":plname" => $_POST['plname'],
				":ptell" => $_POST['ptell']
			));
			echo "<script>";
			echo "swal(\"สำเร็จ!\", \"บันทึกข้อมูล\", \"success\")";
			echo "</script>";

		// }
	}

	if(isset($_POST['login_submit']))
	{
			$Select = "SELECT * FROM user WHERE name = :user AND pass = :pass";
			$Query = $pdo->prepare($Select);
			$Query->execute(Array(
			":user" => $_POST['user'],
			":pass" => $_POST['pass']
			));
			$Fetch = $Query->fetch(PDO::FETCH_ASSOC);
			$row = $Query->rowCount();
		if($row == '1')
		{
			// die('Login');
			echo "<script>";
			echo "swal(\"สำเร็จ!\", \"เข้าสู่ระบบ\", \"success\")";
			echo "</script>";
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.location.href='index.php?Control=true';
		    </SCRIPT>");
			$_SESSION['name'] = $Fetch['name'];
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
