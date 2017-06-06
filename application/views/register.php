<?php $this->load->view('partials/header') ?>
<br>
<div class="row">
	<div class="container">
		<div class="col-sm-5 col-sm-offset-3">
			<div class="form-group">
				<center>
				<img src="<?php echo base_url('assets/images/group.png') ?>">
				</center>
			</div>
			<hr class="colorgraph">
			<!-- Form Start -->
			<div class="form-group">
				<input type="text" class="form-control input-lg" name="username" placeholder="Fullname">
			</div>
			<div class="form-group">
				<input type="text" class="form-control input-lg" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<input type="email" class="form-control input-lg" name="email" placeholder="Email">
			</div>
			<div class="form-group">
				<input id="datepicker" name="date" type="text" class="form-control input-lg" placeholder="Birthdate">
			</div>
			<div class="form-group">
				<select name="" id="input" class="form-control input-lg" required="required">
					<option value="0">--Choose--</option>
					<option value="1">Male</option>
					<option value="2">Female</option>
				</select>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-12">
						<input type="submit" class="btn btn-primary btn-block input-lg" value="Register">
					</div>
				</div>
			</div>
			<!-- Form End -->
			<hr class="colorgraph">
		</div>
	</div>
</div>
<?php $this->load->view('partials/footer') ?>