<div class="ui container">
<h1></h1>
<div class="ui four cards">
    <div class="ui card visible">
    <div class="image dimmable">
      <div class="ui blurring inverted dimmer transition hidden">
        <div class="content">
          <div class="center">
            <div class="ui teal button">Add Friend</div>
          </div>
        </div>
      </div>
      <img src="<?= base_url('assets/img/image.png')  ?>">
    </div>
    <div class="content">
      <div class="header">Title</div>
      <div class="meta">
        <a class="group">Meta</a>
      </div>
      <div class="description">One or two sentence description that may go to several lines</div>
    </div>
    <div class="extra content">
      <a class="right floated created">Comments</a>
        <a class="friends">
            <i class="heart icon"></i>2
        </a>
    </div>
  </div>
</div>


<?php $this->load->view('partials/footer') ?>