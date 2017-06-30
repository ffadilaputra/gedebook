<?php 
	$this->load->view('partials/header-penulis'); 
	$session_data = $this->session->userdata('logged_in');
?>
<h3 class="ui center aligned header">Your Books</h3>
<div class="ui container">
	<div class="ui relaxed divided items">
	<?php foreach ($buku as $key ): ?>
		<div class="item">
			<div class="ui small image">
				<img src="<?php echo base_url('assets/img/image.png') ?>">
			</div>
			<div class="content">
				<a class="header"><?= $key->judul ?></a>
				<div class="meta">
					<?php 
						//$test = implode(array($key->genre));
						echo $key->genre
					?>
				</div>
				<div class="description">
					<?= $key->sinopsis ?>
				</div>
				<div class="extra">
					<img src="<?php echo base_url('assets/uploads') ?>/<?= $session_data['ava']; ?>" class="ui circular avatar image"><?php echo $session_data['nama']; ?>
					<div class="ui right floated">
						<a href="" class="ui primary button">Edit</a>
						<a href="" class="ui primary button">Delete</a>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
</div>
<?php $this->load->view('partials/footer'); ?>