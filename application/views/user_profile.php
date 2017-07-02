<?php 
	$this->load->view('partials/header-user');
	$session_data = $this->session->userdata('logged_in');
?>

<h1></h1>

<div class="ui middle">
    <div class="ui container">
      <h1>Edit Profile</h1>
      <br>
    </div>
</div>

<div class="ui middle">
    <div class="ui container">
      <?php
      $attr = array('class' => 'ui form');
      echo form_open_multipart('user/updateProfil/'.$session_data['id_pengguna'],$attr); 
      ?>
        <div class="field">
          <label>Nama</label>
          <input type="text" name="fullname" placeholder="Fullname" value="<?php echo $profile[0]->nama ?>">
        </div>
        <div class="field">
          <label>Email</label>
          <input type="text" name="email" placeholder="Email" value="<?php echo $profile[0]->email ?>">
        </div>
        <div class="field">
          <label>Gender</label>
        <div class="field">
        <select name="gender" class="ui fluid search dropdown" value="<?php echo $profile[0]->jk;  ?>" >
          <option <?php if( $profile[0]->jk =='male'){echo "selected"; } ?> value='male'>Male</option>
          <option <?php if( $profile[0]->jk =='female'){echo "selected"; } ?> value='female'>Female</option>
        </select>
        </div>
        <div class="field">
        <label>Ava Image</label>
        	<input type="file" name="ava" placeholder="Image" value="" size="20">
        </div>
        <div class="field">
          <label>Username</label>
          <input type="text" name="username" placeholder="Username" value="<?php echo $profile[0]->username ?>">
        </div>
        <div class="field">
          <label>Password</label>
          <input type="password" name="password" placeholder="Password" value="">
        </div>
      </div>

      <div class="field">
      <label>Choose Role</label>
       <input name="role" type="text" placeholder="Password" value="<?php echo $profile[0]->role ?>" readonly>
        </div>

        <button class="ui button primary" type="submit">Submit</button>
        <div class="ui pink message"><?php echo validation_errors(); ?></div>
        <br>

      <?php echo form_close() ?>
    </div>
</div>

<?php $this->load->view('partials/footer'); ?>