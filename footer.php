<?php if (!defined('FLUX_ROOT')) exit; ?>
						
		</div>
		</div> <!--cont -->
	</div> <!-- container -->
</div> <!-- main-content-->

<!--swiming-->
<div class="swimming">
	<div class="container">
		<div class="swimming-main" data-wow-delay="0.3s">
			<div class="swimming-top">
				<h3 style="color: #CE2029;">Statistics</h3>
			</div>
			<div class="swimmimg-bot text-center">
				<div class="col-md-2 swimming-grid">
					<div class="sg">
					<h4><span class="counter"><?php include 'main/total_accounts.php'; ?></span></h4>
					<span class="swim-icon-1"> </span>
					<h5>Total Accounts</h5>
					</div>
				</div>
				<div class="col-md-2 swimming-grid">
					<div class="sg">
					<h4><span class="counter"><?php include 'main/total_guild.php'; ?></span></h4>
					<span class="swim-icon-2"> </span>
					<h5>Total Guilds</h5>
					</div>
				</div>
				<div class="col-md-4"><img class="img-responsive center-block" src="<?php echo $this->themePath('img/st1.png'); ?>"></div>
				<div class="col-md-2 swimming-grid">
					<div class="sg">
					<h4><span class="counter"><?php include 'main/total_char.php'; ?></span></h4>
					<span class="swim-icon-3"> </span>
					<h5>Total Characters</h5>
					</div>
				</div>
				<div class="col-md-2 swimming-grid">
					<div class="sg"/>
					<h4><span class="counter"><?php include 'main/total_party.php'; ?></span></h4>
					<span class="swim-icon-4"> </span>
					<h5>Parties</h5>
					</div>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>

<!--swimmg emd here-->
<!--information start here-->
<div class="information">
	<div class="container">
		<div class="information-main">
			  <div class="information-grid five-star wow slideInLeft" data-wow-delay="0.3s">
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img class="img-responsive" src='<?php echo $this->themePath('img/s1.png') ?>'; alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>star players</h4>
			  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img class="img-responsive" src='<?php echo $this->themePath('img/s2.png') ?>'; alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>services</h4>
			  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img class="img-responsive" src='<?php echo $this->themePath('img/s3.png') ?>'; alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>anti-hack</h4>
			  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="clearfix"> </div>
			  </div>
			  <div class="information-grid wow slideInRight" data-wow-delay="0.3s">
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img class="img-responsive" src='<?php echo $this->themePath('img/s4.png') ?>'; alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>secure</h4>
			  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img class="img-responsive" src='<?php echo $this->themePath('img/s5.png') ?>'; alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>player vs player</h4>
			  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img class="img-responsive" src='<?php echo $this->themePath('img/s6.png') ?>'; alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>boss hunt</h4>
			  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="clearfix"> </div>
			  </div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--information end here-->
<!-- PvP Ranking and Guild capture div -->
<div class="container-fluid pvpg">
	<div class="swimming-top warh3 wow zoomIn" data-wow-delay="0.3s" style="border-bottom: none;">
		<h3>War of Emperium</h3>
	</div>
	<div class="container">
		<div class="row" style="padding-bottom:25px;">
			<div class="col-md-4 gui wow slideInRight" data-wow-delay="0.3s">
				<?php include 'main/guild.php' ?>
			</div>
			<div class="col-md-4 cd wow zoomIn" data-wow-delay="1.6s">
				<h2>WoE starts in..</h2>
				<?php include 'main/woeschd.php' ?>
			</div>
			<div class="col-md-4 cd1" >
				<div class="wow slideInLeft" data-wow-delay="0.3s"">
					<h2 style="padding-top: 15px;">WoE Schedule</h2>
					<p><?php echo $master['castle1']; ?></p>
					<p><?php echo $master['castle2']; ?></p>
					<p><?php echo $master['castle3']; ?></p>
				</div>
			</div>			
		</div>
	</div>
</div>
<!--leaves start here-->
<div class="leaves" id="d">
	<div class="container">
		
		<div class="leaves-main wow zoomIn" data-wow-delay="0.3s">
			<h1>You Never Leave Us</h1>
			<h6>100% Friendly services</h6>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
		   <a href="<?php echo $this->url('account', 'create')."#x"; ?>" class="hvr-push">Register Now</a>
		   <a href="<?php echo $master['download']; ?>" target="_blank" class="hvr-push" style="text-decoration: none;">Download Client</a>
		   <a href="<?php echo $master['rms']; ?>" target="_blank" class="hvr-push" style="text-decoration: none;">Write a Review</a>
		   <a href="<?php echo $master['facebook']; ?>" target="_blank" class="hvr-push" style="text-decoration: none;">Share us on Facebook</a>
		</div>
		
	</div>
</div>
<!--leaves end here-->
<!-- pvp -->
<div class="container-fluid pvpbg" id="p">
	<div class="swimming-top warh3 wow zoomIn" data-wow-delay="0.3s" style="border-bottom: none;">
		<h3 style="color: #CE2029;">Player of the Month</h3>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-2" style=""><img class="img-responsive center-block" src="<?php echo $this->themePath('img/p1.png'); ?>"></div>
			<div class="col-md-8 text-center wow zoomIn" data-wow-delay="0.3s">
				<?php include 'main/pvpranking.php' ?>
			</div>
			<div class="col-md-2" style=""><img class="img-responsive center-block" src="<?php echo $this->themePath('img/p2.png'); ?>"></div>
		</div>
	</div>
</div>
<!-- PvP Ranking and Guild capture div ends here -->
<!--homegrids start here latest news-->
<div class="home-block">
	<div class="container">
		<div class="home-main text-center">
			<div class="home-top">
				<h3>Latests News</h3>
			</div>
			<div class="home-bottom  wow bounceInLeft" data-wow-delay="0.3s">
				<div class="col-md-4 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="<?php echo $master['event']; ?>" target='_blank'>						
							<div class="item-info">
								<div class="headline">
									Events
									<div class="line"> </div>
								</div>
								<div class="date"><?php echo $master['eventdate']; ?></div>							
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src='<?php echo $this->themePath('img/b7.jpg') ?>'; class="img-responsive center-block" alt="">
						</div>
					</div>

				</div>
				<div class="col-md-4 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="<?php echo $master['quests']; ?>" target='_blank'>						
							<div class="item-info">
								<div class="headline">
									Quests
									<div class="line"> </div>
								</div>
								<div class="date"><?php echo $master['questsdate']; ?></div>							
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src='<?php echo $this->themePath('img/b8.jpg') ?>'; class="img-responsive center-block" alt="">
						</div>
					</div>
				</div>
				<div class="col-md-4 home-grid">
					<div class="item item-type-move">
						<a class="item-hover" href="<?php echo $master['features']; ?>" target='_blank'>						
							<div class="item-info">
								<div class="headline">
									Features
									<div class="line"> </div>
								</div>
								<div class="date"><?php echo $master['featuresdate']; ?></div>							
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src='<?php echo $this->themePath('img/b9.jpg') ?>'; class="img-responsive center-block" alt="">
						</div>
					</div>
				</div>
			  <div class="clearfix"> </div>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--home grid end here-->
<!--footer start here-->
<div class="footer" >
	<div class="container">
		<div class="footer-main">
			<div class="col-md-5 ftr-grid wow zoomIn" data-wow-delay="0.3s">
				<h3>change-logs & news</h3>
				<div class="news text-left">
			<?php if($master['enablerss']): include 'main/rsslib.php'; ?>
				<?php echo RSS_Display(array($master['news']), 3); ?>
			<?php endif; ?>
			</div>
				
			</div>
			<div class="col-md-2 ftr-grid ftr-mid wow zoomIn" data-wow-delay="0.3s">
				 <h3>quick info</h3>
				 <span class="ftr-line flm"> </span>
				<p>Pre-renewal</p>
				<p>Max level 99/70 </p>
				<p>Insta Cast 150dex</p>
				<p>Rates 150x150x10x</p>
				<p>MVP Card Drop 0.1%</p>
				
			</div>
			<div class="col-md-3 ftr-grid ftr-rit wow zoomIn" data-wow-delay="0.3s">
				 <h3>Contact Us</h3>
				 <?php echo $master['discord']; ?>
				  
			</div> 
			<div class="col-md-2 ftr-grid ftr-last-gd ftr-rit wow zoomIn" data-wow-delay="0.3s" style="text-align: left;" >
				 <h3>Quick Link</h3>
				  <ul class="ftr-nav">
				 	<li class="h"><a href="<?php echo $this->url('main','features')."#x"; ?>">Server Info</a></li>
				<li><a href="<?php echo $master['forum']; ?>" target="_blank">Community</a></li>
				<li><a href="<?php echo $this->url('account', 'create')."#x"; ?>">Register</a></li>
				<li><a href="<?php echo $this->url('donate')."#x"; ?>">Donation</a></li>
				<li><a href="<?php echo $this->url('vote')."#x"; ?>">Vote 4 Points</a></li>
				<li><a href="<?php echo $master['download']."#x"; ?>" target="_blank">Download Client</a></li>
				<li><a href="<?php echo $master['rms']; ?>" target="_blank">Write a Review</a></li>
		   		<li><a href="<?php echo $master['facebook']; ?>" target="_blank">Share us on Facebook</a></li>
				 </ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--footer end here-->
<!--copy rights start here-->
<div class="copy-right">
	<div class="container">
		 <div class="copy-rights-main">
    	    <p>© 2018 6ix RO. All Rights Reserved | Design & coded by  <a href="http://Yug-WebDev.com/" target="_blank"><strong>Yug-WebDev</strong></a> </p>
    	 </div>
    </div>
</div>
	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->themePath('js/jquery.counterup.min.js') ?>"></script>

	</body>
</html>
