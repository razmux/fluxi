<?php if (!defined('FLUX_ROOT')) exit; ?>
<div class="accountPanel">
	
	<div class="container-fluid packsbg" style="background-color: #1c262f;">
		<div class="container">
			<div class="col-md-2"></div>
			<div class="col-md-8 ipt">
				<?php if (!$session->isLoggedIn()): ?>      
					<form action="<?php echo $this->url('account', 'login', array('return_url' => $params->get('return_url'))) ?>" method="post" autocomplete="off">
						<input type="hidden" name="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>">
						<div class="col-md-3 formm">
							<label class="col-md-12 control-label lbl" for="formGroupInputSmall">Username</label>
							<input type="text" name="username" class="form-control" placeholder="Username">
						</div>
						<div class="col-md-3 formm">
							<label class="col-md-12 control-label lbl" for="formGroupInputSmall">Password*</label>
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
						<div class="col-md-3 formm">
							<label class="col-md-12 control-label lbl lbl1" for="formGroupInputSmall">Trouble signing in?</label>
							<a href="<?php echo $this->url('account','resetpass');?>">Forgot Password?</a>
						</div>
						<div class="col-md-3 bbttnn formm">
							<label class="col-md-12 control-label lbl" for="formGroupInputSmall"></label>
							<button type="submit" value="login" class="loginBtn" >Login</button>
						</div>
					</form>	
				</div>
				<div class="col-md-2"></div>
			</div> 

		
		<?php else:?>
			<div class="logged">
				<p>
					You are currently logged in as <strong><a href="<?php echo $this->url('account', 'view') ?>" ><?php echo htmlspecialchars($session->account->userid) ?></a></strong>
					on <?php echo htmlspecialchars($session->serverName) ?>.
				</p>
				<a href="<?php echo $this->url('account','view')?>">My Account</a>
				<a href="<?php echo $this->url('account','logout')?>" onclick="return confirm('Are you sure you want to logout?')">Logout</a>
			</div>
		<?php endif?>
	</div>
</div>