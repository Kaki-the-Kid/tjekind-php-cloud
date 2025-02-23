<?php
header("Location: /admin/");
//exit();


require_once('config/init.php');

$user = new User();
$user->auth();
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tjek ind | Aarhus Tech SKP</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="/assets/css/custom.scss">
		<link rel="stylesheet" type="text/css" href="/assets/css/mobile.scss">

		<script>
			function startTime() {
				var today = new Date();
				var h = today.getHours();
				var m = today.getMinutes();
				var s = today.getSeconds();
				m = checkTime(m);   
				s = checkTime(s);
				document.getElementById('clock').innerHTML =
				"- " + h + ":" + m + ":" + s + " -";
				var t = setTimeout(startTime, 500);
				document.getElementById("studiekort").focus();
			}
			function checkTime(i) {
				if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
				return i;
			}
		</script>
	</head>
	<body onload="startTime()" style="overflow-y: hidden;"  oncontextmenu="event.stopImmediatePropagation(); return false;">
		<div class="container">
			<div class="row vcenter">
				<div class="col-md-8">

					<?php echo Errors::getErrorMessage('index_error'); ?>
					<?php echo Errors::getSuccessMessage('index_success'); ?>

					<div class="card card-default">
						<div id="splash" class="card-body" >
							<h3 class="text-center" id="clock">&nbsp;</h3>
							<h4 class="text-center">LOG IND MED TJEK-IND KORT</h4>
							<br />
							<center>
								<form method="post" name="studiekort-login-form" action="/" onsubmit="return validateFormStudiekort()">
									<div class="form-group">
										<input type="password" id="studiekort" class="form-control" name="studiekort" autocomplete="off" autofocus>
									</div>
									<!-- a id="bruger-login-btn" class="btn btn-success">Gå til brugernavn og adgangskode</a-->
								</form>
							</center>
							<br />
							<center><p class="text-center">&copy; Aarhus Tech SKP <?php echo date('Y'); ?><br />Udviklet af elever fra SKP Data IT</p></center>
						</div>

					</div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>		<script src="/assets/js/dismiss-alerts.js"></script>
		<script src="/assets/js/sortlist.js"></script>
		<script src="/assets/js/dismiss-alerts.js"></script>
		<script src="/assets/js/login-page.js"></script>
		<!--<script type="text/javascript" src="/assets/js/ajax-login.js"></script>-->
	</body>
</html>
