<?php
  $this->load->view('partials/header-penulis');
  $session_data = $this->session->userdata('logged_in');
?>
<br>
<div class="ui middle">
  <div class="ui container">
    <?php
    $attr = array('class' => 'ui form');
    echo form_open_multipart('books/update/'.$this->uri->segment(3),$attr);
    ?>

    <div class="field">
      <label>Title</label>
      <input type="text" name="title" placeholder="Ttile" value="<?php echo $buku[0]->judul; ?>">
    </div>
    <div class="field">
      <label>Writer</label>
      <input type="text" name="writer" placeholder="Writer" value="<?php echo $session_data['nama']; ?>" readonly>
    </div>
    <div class="field">
      <label>Image</label>
      <input type="file" name="image" src=<?=base_url("assets/uploads/").$buku[0]->img; ?> >
    </div>
    <div class="field">
      <label>Subjects</label>
      <select name="subjects" class="ui fluid dropdown" multiple="" ">
        <option value="horror">Horror</option>
        <option value="comedy">Comedy</option>
        <option value="romance">Romance</option>
        <option value="fiksi">Fiction</option>
        <option value="biografi">Biography</option>
       
      </select>
    </div>
    <div class="field">
      <label>Publisher</label>
      <input type="text" name="publisher" placeholder="Publisher" value="<?php echo $buku[0]->penerbit; ?>">
    </div>
    <div class="field">
      <label>Synopsys</label>
      <textarea name="synopsys"><?php echo $buku[0]->sinopsis; ?></textarea>
    </div>
    <input type="hidden" name="posted_by" value="<?php echo $session_data['id_pengguna']; ?>">
    <div class="field">
      <button class="ui button primary" type="submit">Submit</button>
    </div>
    <br>
    <?php echo form_close(); ?>
    <?php echo validation_errors(); ?>
  </div>
</div>
<?php $this->load->view('partials/footer'); ?>