<?php require("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
	<title><?php echo $site_title ; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/rangeslider.css" rel="stylesheet">
	<link href="css/sweet-alert.css" rel="stylesheet">
	<link href="css/bootstrap-switch.min.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/comments.css"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="<?php echo $site_description ; ?>">
	<meta property="og:title" content="<?php echo $site_title ; ?>"/>
	<meta property="og:description" content="<?php echo $site_description ; ?>"/>
	<meta property="og:type"   content="article" />
	<meta property="og:image"  content="<?php echo $site_img ; ?>" />
</head>
<body>
	<noscript>
		<div class="alert alert-warning alert-dismissable">
		  <strong>Warning!</strong> It seems you have JavaScript disabled, to ensure a smooth experience please turn this feature on.
		</div>
	</noscript>
	<div id="loading_modal" class="mfp-hide white-popup-block">
		<div class="row">
			<div class="col-md-12">
				<div class="loading_area">
					<div class="loader"></div>
					<br class="clearfix"/>
					<p>Connecting to <strong id="m-accname">ACCNAME</strong> using <strong id="m-device">EUW</strong> simulator</p>
					<div class="progress">
						<div class="progress-bar progress-bar-success progress-bar-striped active g-progressbar connect_progressbar" role="progressbar" style="width: 0%"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
   <div id="gen_modal" class="mfp-hide white-popup-block final-section text-left">
		<div class="row">
			<div class="col-md-12">
				<div class="generator_finished_area">
						</br>
						<div class="section-content">
						<p style="color:#474747; font-family:tahoma;">Before we add the Gold Coins to your account you need to VERIFY that you are human and not a automated bot</p>
						<center>
						</br>
							 <input type="button" class="btn btn-success" value="Verify Now !" onClick="location.href = '<?php echo $cpa_link ; ?>';">
						</br>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="index.php" ><img src="img/header.png" class="img-responsive top-logo" alt="Spider niche tool"></a>
				</div>
			</div>
			<br class="clearfix"/>
		</div>
	</header>
	<section class="connect_section">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<div class="inside-section">
						<div class="section-heading">
							<div class="row">
								<div class="col-md-12">
									<h2>Coins Generator</h2>
									<p>Enter Username or Email</p>
								</div>
							</div>
						</div>
						<div class="section-content">
							<div class="account_connect_area">
								<div class="connected_msg">
									<div class="overlay"></div>
									<div class="connect_message">
										<p>Sync Successful</p>
									</div>
								</div>
								<div class="inside_area">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label style="color:#474747;" for="usernameInput"><i class="fa fa-user"></i> Username/Email</label>
												<input type="email" class="form-control" id="usernameInput" placeholder="Username">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label style="color:#474747; for="deviceInput"><i class="fa fa-desktop"></i> Select Platform</label>
												<select id="deviceInput" class="form-control">
													<option value="Android">Android</option>
													<option value="iOS">iOS	</option>
													<option value="Android">Facebook</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<label  style="color:#474747; for="asesInput"><i class="fa fa-random"></i> Encrypt</label>
											<div class="form-group">
												<input type="checkbox" id="aesInput">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="connect-btn-area">
												<button class="connect-button">Connect</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="gen_section" class="gen-section inactive">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<div class="inside-section">
						<div class="section-heading">
							<div class="row">
								<div class="col-md-12">
									<h1>Generator</h1>
									<p>Select amount Then click Generate</p>
								</div>
							</div>
						</div>
						<div class="section-content">
							<div class="generator-section">
								<div class="row">
									<div class="col-md-12">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label style="color:#474747;" for="lives_select">Gold Coins amount</label>
											<select id="lives_select" class="form-control gen-select gen-select-gold">
												<option value="1_100_000">21,000</option>
												<option value="200_000">55,000</option>
												<option value="400_000">110,000</option>
												<option value="500_000">250,000</option>
												<option value="800_000">499,000</option>
												<option value="900_000">Maximum Amount</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label style="color:#474747;" for="lives_select">Get Other Items</label>
											<select id="lives_select" class="form-control gen-select gen-select-lockerg">
												<option value="1_100_000">Yes</option>
												<option value="200_000">No</option>
											</select>
										</div>
									</div>
								</div>
								<br class="clearfix"/>
								<div class="row">
									<div class="col-md-12">
										<button class="gen-button"><i class="fa fa-gear"></i>  Generate</button>
									</div>
								</div>
							</div>
							<div class="gen-console-area">
								<div class="row">
									<div class="col-md-12">
										<div class="loading-spinner"></div>
										<h3 class="gen-loading-msg">Processing your request</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="gen-dev-console">
											<ul class="dev-console-text"></ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p><?php echo $site_copyrights ; ?>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sweet-alert.min.js"></script>
	<script src="js/bootstrap-switch.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>