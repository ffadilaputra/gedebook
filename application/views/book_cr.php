<?php
  $this->load->view('partials/header-penulis');
  $session_data = $this->session->userdata('logged_in');
?>
<br>
<div class="ui middle">
  <div class="ui container">
    <?php
    $attr = array('class' => 'ui form');
    echo form_open_multipart('books/create',$attr);
    ?>
    <div class="field">
      <label>Title</label>
      <input type="text" name="title" placeholder="Ttile">
    </div>
    <div class="field">
      <label>Writer</label>
      <input type="text" name="writer" placeholder="Writer" value="<?php echo $session_data['nama']; ?>" readonly>
    </div>
    <div class="field">
      <label>Image</label>
      <input type="file" name="image">
    </div>
    <div class="field">
      <label>Subjects</label>
      <select name="subjects[]" class="ui fluid dropdown" multiple="">
        <option value="horror">Horror</option>
        <option value="comedy">Comedy</option>
        <option value="life">life</option>
      </select>
    </div>
    <div class="field">
      <label>Publisher</label>
      <input type="text" name="publisher" placeholder="Publisher">
    </div>
    <div class="field">
      <label>Synopsys</label>
      <textarea name="synopsys"></textarea>
    </div>
    <input type="hidden" name="posted_by" value="<?php echo $session_data['id_pengguna']; ?>">
    <div class="field">
      <button class="ui button primary" type="submit">Submit</button>
    </div>
    <br>
    <?php echo form_close() ?>
    <?php echo validation_errors(); ?>
  </div>
</div>
<?php $this->load->view('partials/footer'); ?>