<?php $this->load->view('partials/header') ?>
<br>
<div class="row">
	<div class="container">
		<div class="col-sm-5 col-sm-offset-3">
			<hr class="colorgraph">
			<div class="form-group">
				<input type="text" class="form-control input-lg" name="username" placeholder="Username"> 
			</div>
			<div class="form-group">
				<input type="password" class="form-control input-lg" name="password" placeholder="Password"> 
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-12">
					Dont Have Account ?<label>&nbsp;<a href="register">Register Here</a></label>
					<input type="submit" class="btn btn-primary btn-block input-lg" value="Login"> 
					</div>
				</div>
			</div>
			<hr class="colorgraph">
		</div>
	</div>
</div>
<?php $this->load->view('partials/footer') ?>