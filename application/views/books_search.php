<?php
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
        if ($session_data['role'] === 'writer') {
            $this->load->view('partials/header-penulis');
        }elseif($session_data['role'] === 'user'){
          $this->load->view('partials/header-user');
        }
        }else{
        $this->load->view('partials/header');
        }
?>

<br>
<div class="ui middle">
  <div class="ui container">
    <div class="ui three column stackable grid">
      <div class="column"></div>
      <div class="column">
        <table class="ui table" id="daeba">
          <thead>
            <tr>
              <th>Book</th>
              <th>Writer</th>
              <th>Publisher</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($all as $tamvan): ?>
            <tr>
              <td><?= $tamvan->judul ?></td>
              <td><?= $tamvan->penulis ?></td>
              <td><?= $tamvan->penerbit ?></td>
              <td>
                <a href="<?= base_url('books/details/') ?><?= $tamvan->kd_buku ?>" class="ui button lime">
                  Detail
                </a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('partials/footer') ?>