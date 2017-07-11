<h3 class="ui center aligned header"></h3>
<div class="ui container">
  <div class="ui two column grid">
    <div class="four wide column">
      <div class="ui vertical menu">
        <div class="item">
          <div class="header">New Releases</div>
          <div class="menu">
            <?php foreach($book as $ayy): ?>
            <div class="ui divided selection list">
              <a href="<?= base_url('books/details/')?><?= $ayy->kd_buku ?>" class="item">
                <div class="ui red horizontal label"><?= $ayy->judul ?></div>
                <?= $ayy->posted_date ?>
              </a>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="item">
          <div class="ui small feed">
            <h4 class="ui header">Recent Activity</h4>
            <div class="event">
              <div class="content">
                <?php foreach($feed as $vue): ?>
                <div class="summary">
                  <a href="<?= base_url('user/us') ?>/<?php echo $vue->id_pengguna ?>"><?= $vue->nama ?></a> comments on <a href="<?= base_url('books/details') ?>/<?php echo $vue->kd_buku ?>"><?= $vue->judul ?></a>
                  <br>
                  <br>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- writer -->
      <h3>Writer</h3>
      <?php foreach($uwer as $a): ?>
      <!-- href: nampilin list buku dr id yg dipilih -->
      <a class="ui image label" href="<?php echo base_url('user/us') ?>/<?php echo $a->id_pengguna ?>">
        <img src="<?= base_url('assets/uploads') ?>/<?= $a->ava ?>" class="hoverZoomLink">
        <?= $a->nama ?>
      </a>
      <?php endforeach; ?>
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
                    <a href="<?= base_url('books/details') ?>/<?= $key->kd_buku ?>" class="ui inverted button">Read More</a>
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
              
            </div>
            <div class="content">
              <img class="ui avatar image" src="<?= base_url('assets/uploads') ?>/<?= $key->ava ?>"> <?= $key->penulis ?>
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