<?php $this->load->view('partials/header') ?>
<br>
<div class="ui middle">
	<div class="ui container">
		<div class="ui three column stackable grid">
			<div class="column">
			</div>		
			<div class="column">
				<h1>Login</h1>
		<?php 
			$attr = array('class' => 'ui form');
      		echo form_open('auth/login',$attr);  
		?>
		<?php echo validation_errors(); ?>
			<div class="field">
				<label>Username</label>
				<input type="text" name="username" placeholder="Username">
			</div>
			<div class="field">
				<label>Password</label>
				<input type="password" name="password" placeholder="Password">
			</div>
			<div class="field">
				<input type="submit" class="ui button primary">
				<input type="reset" class="ui button">
			</div>
		<?php echo form_close() ?>		
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('partials/footer') ?>