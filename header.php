<?php if (!defined('FLUX_ROOT')) exit; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php if (isset($metaRefresh)): ?>
		<meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
		<?php endif ?>
		<title><?php echo Flux::config('SiteTitle'); if (isset($title)) echo ": $title" ?></title>
		<link rel='stylesheet' id='webfonts-css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,400italic|Bree+Serif' type='text/css' media='all' />
		<link rel='stylesheet' id='style-css' href='<?php echo $this->themePath('css/style.css') ?>' type='text/css' media='all' />
		<link rel='stylesheet' type='text/css' href='<?php echo $this->themePath('css/bootstrap.min.css') ?>' media='all' />
	<!--	<link rel='stylesheet' type='text/css' href='<?php echo $this->themePath('css/font-awesome.min.css') ?>' media='all' /> -->
		<link rel='stylesheet' type='text/css' href='<?php echo $this->themePath('css/style.css') ?>' media='all' />
		<link rel='stylesheet' type='text/css' href='<?php echo $this->themePath('css/style1.css') ?>' media="screen and (min-width:1200px)" />
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link href="<?php echo $this->themePath('css/flux/unitip.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
		<?php if (Flux::config('EnableReCaptcha')): ?>
		<link href="<?php echo $this->themePath('css/flux/recaptcha.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />

		<?php endif ?>
	
		<script type='text/javascript' src="<?php echo $this->themePath('js/jquery.min.js') ?>"></script> 
 		<script type='text/javascript' src="<?php echo $this->themePath('js/bootstrap.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/jquery-1.8.3.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.datefields.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitip.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/yug.js') ?>"></script>

<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Hind:400,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!--google fonts-->		
<!-- animated-css -->
		<link rel="stylesheet" href='<?php echo $this->themePath('css/animate.css') ?>'  type='text/css' media="screen and (min-width:1200px)">
		<script src="<?php echo $this->themePath('js/wow.min.js') ?>"></script>
		<script>
		 wow = new WOW(
		                       {
		                       boxClass:     'wow',      // default
		                       animateClass: 'animated', // default
		                       offset:       100,          // default
		                       mobile:       false,       // default
		                       live:         false        // default
		                     }
		                     )
		                     wow.init();
		</script>
<!-- animated-css -->
	
		<script type="text/javascript">
			$(document).ready(function(){
			
				$('.money-input').keyup(function() {
					var creditValue = parseInt($(this).val() / <?php echo Flux::config('CreditExchangeRate') ?>, 10);
					if (isNaN(creditValue))
						$('.credit-input').val('?');
					else
						$('.credit-input').val(creditValue);
				}).keyup();
				$('.credit-input').keyup(function() {
					var moneyValue = parseFloat($(this).val() * <?php echo Flux::config('CreditExchangeRate') ?>);
					if (isNaN(moneyValue))
						$('.money-input').val('?');
					else
						$('.money-input').val(moneyValue.toFixed(2));
				}).keyup();
				
				// In: js/flux.datefields.js
				processDateFields();
			});
			
			function reload(){
				window.location.href = '<?php echo $this->url ?>';
			}
		</script>
		
		<script type="text/javascript">
			function updatePreferredServer(sel){
				var preferred = sel.options[sel.selectedIndex].value;
				document.preferred_server_form.preferred_server.value = preferred;
				document.preferred_server_form.submit();
			}
			function updatePreferredTheme(sel){
				var preferred = sel.options[sel.selectedIndex].value;
				document.preferred_theme_form.preferred_theme.value = preferred;
				document.preferred_theme_form.submit();
			}
			// Preload spinner image.
			var spinner = new Image();
			spinner.src = '<?php echo $this->themePath('img/spinner.gif') ?>';
			
			function refreshSecurityCode(imgSelector){
				$(imgSelector).attr('src', spinner.src);
				
				// Load image, spinner will be active until loading is complete.
				var clean = <?php echo Flux::config('UseCleanUrls') ? 'true' : 'false' ?>;
				var image = new Image();
				image.src = "<?php echo $this->url('captcha') ?>"+(clean ? '?nocache=' : '&nocache=')+Math.random();
				
				$(imgSelector).attr('src', image.src);
			}
			function toggleSearchForm()
			{
				//$('.search-form').toggle();
				$('.search-form').slideToggle('fast');
			}
		</script>
		
		<?php if (Flux::config('EnableReCaptcha') && Flux::config('ReCaptchaTheme')): ?>
		<script type="text/javascript">
			 var RecaptchaOptions = {
			    theme : '<?php echo Flux::config('ReCaptchaTheme') ?>'
			 };
		</script>
		<?php endif ?>

		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("myBtn").style.display = "block";
			} else {
			document.getElementById("myBtn").style.display = "none";
		}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
		}
		</script>

		<script>
		  jQuery(document).ready(function( $ ) {
		      $('.counter').counterUp({
		          delay: 20,
		          time: 3000
		      });
		  });
		</script>

	</head>
<body style="padding-top: 113px;">
	
	<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-triangle-top"></span>Top</button>	
	<?php $master = include 'main/master.php'; ?>
		
<div class="navbar-default navbar-fixed-top">		
	<div class="top-header">
			<div class="container">
				<div class="top-header-main ">
					<div class="row">
						<div class="col-md-3 top-social">
							<ul>
								<li><h5>Follow Us :</h5></li>
								<li><a href="<?php echo $master['facebook']; ?>" target='_blank'><span class="fb"> </span></a></li>
								<li><a href="#"><span class="tw"> </span></a></li>
								<li><a href="#"><span class="in"> </span></a></li>
								<li><a href="#"><span class="gmail"> </span></a></li>
							</ul>
						</div>

						<div class="col-md-6 stat">
							<?php include 'main/status.php'; ?>
						</div>

						<div class="col-md-3 wstat">
							<?php include 'WOE_STATUS/status.php'; ?>
						</div>

						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>

<!-- navbar starts below -->
<div class="containerr">
	<nav class="navbar navbar-inverse navi navbar-">
		<div class="container-fluid text-center">

			<div class="col-md-2"></div>
			<div class="col-md-2 navbar-header navlogo">
					  <button type="button" class="navbar-toggle gg" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				<a class="navbar-brand navlogo" href="<?php echo $this->url('main'); ?>"><h3><?php echo Flux::config('SiteTitle'); ?></a>
			</div>
			
			<div class="col-md-8 collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo $this->url('main','features')."#x"; ?>">Server Info</a></li>
				<li><a href="<?php echo $master['forum']; ?>" target="_blank">community</a></li>
				<li><a href="<?php echo $this->url('service','tos'); ?>">Rules</a></li>
<!--				<li><a href="--><?php //echo $master['download']; ?><!--">Download</a></li>-->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Download
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu text-center">
                        <li><a href="<?php echo $master['full_client']; ?>">Full Client</a></li>
                        <li><a href="<?php echo $master['lite_client']; ?>">Lite Client</a></li>
                    </ul>
                </li>
				<li><a href="<?php echo $this->url('account', 'create')."#x"; ?>">Register</a></li>
				<li><a href="<?php echo $this->url('donate')."#x"; ?>">Donation</a></li>
				<li><a href="<?php echo $this->url('vote')."#x"; ?>">Vote 4 Points</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Ranking
						<span class="caret"></span></a>
						<ul class="dropdown-menu text-center">
							<li><a href="<?php echo $this->url('ranking', 'character')."#x"; ?>">Character Ranking</a></li>
							<li><a href="<?php echo $this->url('ranking', 'zeny')."#x"; ?>">Zeny Ranking</a></li>
							<li><a href="<?php echo $this->url('ranking', 'death')."#x"; ?>">Death Ranking</a></li>
							<li><a href="<?php echo $this->url('ranking', 'guild')."#x"; ?>">Guild Ranking</a></li>
							<li><a href="#p">PvP Ranking</a></li>
							<li><a href="<?php echo $this->url('ranking', 'blacksmith')."#x"; ?>">Blacksmith Ranking</a></li>
							<li><a href="<?php echo $this->url('ranking', 'alchemist')."#x"; ?>">Alchemist Ranking</a></li>
						</ul>
				</li>
			</ul>
			</div>
		</div>
	</nav>
</div>
</div>
<!--banner  start hwew-->
<div class="banner">
	<div class="container">
		<div class="banner-main wow zoomIn" data-wow-delay="0.01s">
			<h2><?php echo Flux::config('SiteTitle'); ?></h2>
			<h6>Welcome To Our Server</h6>
			<p>A place where everyone can come to settle down!

                6ixRO is a mid rates (150x/150x/10x) Ragnarok Online server, 99/70 Transcendent Job only with pre-Renewal mechanics and official-like gameplay. we'll be adding features and content little by little, so that players will be able to enjoy the 6ix Ragnarok Online.
                To make sure you won't get bored, we offer some fancy little features that official servers lack, an unique Hometown-based skin color system. with a very secured anti-cheat system to make sure that everyone's effort is equal and gained fairly.
                Lastly, as a stable, up to date and long-term server, we can say with confidence that, you won't have any regret in spending your free time with us, because we will always be here!</p>
		</div>
    </div>
</div>
<!--BANNER END HERE-->
<!--############################ form starts below ################################-->
 
 <!--############################ booking form ends here ################################-->
<?php include $this->themePath('main/loginpanel.php', true); ?>

<div id="x" class="main-content">
	<div class="container-fluid">
		
		<div class="cont">
		<!-- Messages -->
		<?php if ($message=$session->getMessage()): ?>
			<p class="message"><?php echo htmlspecialchars($message) ?></p>
		<?php endif ?>

		<!-- Sub menu -->
		<?php include $this->themePath('main/submenu.php', true); ?>

		<!-- Page menu -->
		<?php include $this->themePath('main/pagemenu.php', true); ?>

		<!-- Credit balance -->
		<?php if (in_array($params->get('module'), array('donate', 'purchase'))) include $this->themePath('main/balance.php', true); ?>
