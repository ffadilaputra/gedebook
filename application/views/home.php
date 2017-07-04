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
      <!-- abel  -->
      <div class="ui blue labels">
        <a class="ui label">
          Fun <i class="icon close"></i>
        </a>
        <a class="ui label">
          Happy
          <div class="detail">22</div>
        </a>
        <a class="ui label">
          Smart
        </a>
        <a class="ui label">
          Insane
        </a>
        <a class="ui label">
          Exciting
        </a>
      </div>
      <!-- abel  -->
      <!-- writer -->
      <h3>Top Writer</h3>
      <a class="ui image label">
        <img src="<?= base_url('assets/img/image.png') ?>" class="hoverZoomLink">
        Joe
      </a>
      <a class="ui image label">
        <img src="<?= base_url('assets/img/image.png') ?>" class="hoverZoomLink">
        Elliot
      </a>
      <a class="ui image label">
        <img src="<?= base_url('assets/img/image.png') ?>" class="hoverZoomLink">
        Stevie
      </a>
      <!-- writer -->
    </div>
    <div class="eleven wide column">
      <div class="ui three column grid">
        <?php foreach($book as $key): ?>
        <div class="column">
          <div class="ui card">
            <div class="blurring dimmable image">
              <div class="ui dimmer transition hidden">
                <div class="content">
                  <div class="center">
                    <a class="ui inverted button">Read More</a>
                  </div>
                </div>
              </div>
              <?php if ($key->img == 'NULL' || $key->img == ''): ?>
              <img class="hoverZoomLink" src="<?= base_url('assets/img/image.png') ?>">
              <?php else: ?>
              <img class="hoverZoomLink" src="<?= base_url('assets/uploads') ?>/<?= $key->img ?>">
              <?php endif ?>
            </div>
            <div class="content">
              <div class="header"><?= $key->judul ?></div>
              <div class="meta">
                <a class="group"><?= $key->genre ?></a>
              </div>
              <!--  <div class="description"><?= word_limiter($key->sinopsis, 10);  ?></div> -->
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