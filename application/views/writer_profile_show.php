
<br>
<div class="ui middle">
  <div class="ui container">
    <div class="ui three column stackable grid">
      <div class="column"></div>
      <div class="column">
        <div class="ui container">
          <center>
          <img class="ui medium circular image" src="<?= base_url('assets/uploads') ?>/<?= $profile[0]->ava; ?>">
          <h2><?= $profile[0]->nama ?></h2>
          <p><?= $profile[0]->email ?></p>
          </center>
        </div>
      </div>
      <div class="column">
        <br>
        <br>
        <br>
        <h1>Book</h1>
        <div class="ui container">
          <div class="ui relaxed divided list">
            <?php foreach($books as $mamam): ?>
            <div class="item">
              <i class="large book middle aligned icon"></i>
              <div class="content">
                <a class="header"><?= $mamam->judul ?></a>
                <div class="description"><?= character_limiter($mamam->sinopsis,20) ?></div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>