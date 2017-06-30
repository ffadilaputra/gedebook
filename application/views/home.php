<h3 class="ui center aligned header"></h3>
<div class="ui container">
  <div class="ui two column grid">
    <div class="four wide column">
      <div class="ui vertical menu">
        <div class="item">
          <div class="header">New Releases</div>
          <div class="menu">
            <a class="item">Test</a>
          </div>
        </div>
        <div class="item">
          <div class="header">Category</div>
          <div class="menu">
            <a class="item">Horror</a>
            <a class="item">Mystery</a>
            <a class="item">Myth</a>
          </div>
        </div>
        <div class="item">
          <div class="header">Popular</div>
          <div class="menu">
            <a class="item">Kunam</a>
          </div>
        </div>
      </div>
    </div>
    <div class="eleven wide column">
      <div class="ui three column grid">
        <?php foreach($book as $key): ?>
        <div class="column">
          <div class="ui card">
            <div class="image">
              <img src="<?php echo base_url('assets/img/image.png') ?>">
            </div>
            <div class="content">
              <div class="header"><?= $key->judul ?></div>
              <div class="meta">
                <a class="group"><?= $key->genre ?></a>
              </div>
              <div class="description"><?= word_limiter($key->sinopsis, 10);  ?></div>
            </div>
            <div class="content">
              <img class="ui avatar image" src="<?php echo base_url('assets/img/square-image.png') ?>"> <?= $key->penulis ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
</div>
<?php $this->load->view('partials/footer') ?>