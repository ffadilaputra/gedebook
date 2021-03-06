<?php 

	if ($this->session->userdata('logged_in')) {
	$session_data = $this->session->userdata('logged_in');
	$data['id_pengguna'] = $session_data['id_pengguna'];
	$data['ava'] = $session_data['ava'];
	$data['role'] = $session_data['role'];

	if ($data['role'] == 'writer') {
		$this->load->view('partials/header-penulis');
	}elseif($data['role'] == 'user'){	
		$this->load->view('partials/header-user');
	}else{
		$this->load->view('partials/header');
	}

}
?>
<h3 class="ui center aligned header"></h3>
<div class="ui container">
	<div class="ui two column grid">
		<div class="four wide column">
			<div class="ui vertical menu">
				<div class="ui card">
					<div class="image">
						<?php if($book[0]->img == 'NULL' || $book[0]->img == '' ): ?>
						<img src="<?= base_url('assets/img/image.png') ?>">
						<?php else: ?>
						<img src="<?= base_url('assets/uploads') ?>/<?= $book[0]->img ?>">
						<?php endif; ?>
					</div>
				</div>
			</div>
			<p></p>
			
			<!-- Proses Like -->
			<?= form_open('like') ?>
			<div class="ui labeled button" tabindex="0">
				<input type="hidden" value="<?= $book[0]->kd_buku ?>" name="kd_buku">
				<input type="hidden" value="<?= $session_data['id_pengguna'] ?>" name="kd_pengguna">
				<button type="submit" class="ui teal button">
				<i class="heart icon"></i> Like
				</button>
				<a class="ui basic teal left pointing label">
					<?= $like ?>
				</a>
			</div>
			<?= form_close() ?>
			<!-- Proses Like -->
			<!-- abel  -->
			<h3> Book Category </h3>
			<div class="ui blue labels">
				<a class="ui label">
					<?= $book[0]->genre ?>
				</a>
				<!-- <a class="ui label">
					Insane
				</a>
				<a class="ui label">
					Exciting
				</a> -->
			</div>
			<!-- abel  -->
			<h3>Download As</h3>
			<?php foreach ($buku as $key):?>
			<div class="ui small basic icon buttons">
				<a class="ui button" href="<?php echo base_url('index.php/cetak/index');?>/<?php echo $key->kd_buku ?>"><i class="download icon"></i>PDF</a>
			</div>
			<div class="ui small basic icon buttons">
				<a class="ui button" href="<?php echo base_url('index.php/cetak/cetakExcel');?>/<?php echo $key->kd_buku ?>"><i class="download icon"></i>EXCEL</a>
			</div>
			<div class="ui small basic icon buttons">
				<a class="ui button" href="<?php echo base_url('index.php/cetak/cetakWord');?>/<?php echo $key->kd_buku ?>"><i class="download icon"></i>WORD</a>
			</div>
			<?php endforeach; ?>
			
		</div>
		<div class="eight wide column">
			<div class="ui three column grid">
				<div class="field">
					<br>
					<h3><?= $book[0]->judul ?></h3>
					<h3>Sinopsis</h3>
					<p><?= $book[0]->sinopsis ?></p>
					<h3>Penulis</h3>
					<p><?= $book[0]->penulis ?></p>
					<h3>Penerbit</h3>
					<p><?= $book[0]->penerbit ?></p>
				</div>
				
			</div>
		</div>
		<div class="four wide column">
			<div class="field">
				<h3></h3>
				<div class="ui comments">
					<h3 class="ui dividing header">Review</h3>
					<?php foreach($comments as $data): ?>
					<div class="comment">
						<a class="avatar">
							<img src="<?= base_url('assets/uploads') ?>/<?= $data->ava ?>">
						</a>
						<div class="content">
							<a href="<?php echo base_url('user/us') ?>/<?php echo $data->id_pengguna ?>" class="author"><?= $data->username ?></a>
							<div class="metadata">
								<span class="date">at <?= $data->comment_at ?>
									<?php if($data->id_pengguna == $session_data['id_pengguna']): ?>
									<a href="<?= base_url('review/del') ?>/<?= $data->id_comment ?>" class="reply">Delete</a>
									<?php endif; ?>	
								</span>
							</div>
							<div class="text">
								<?= $data->komentar ?>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					<?php
						$attr = array('class' => 'ui reply form');
						echo form_open('books/details/'.$this->uri->segment(3),$attr);
					?>
					<div class="field">
						<input type="hidden" name="id_buku" value="<?= $book[0]->kd_buku ?>">
						<input type="hidden" name="id_user" value="<?= $session_data['id_pengguna'] ?>">
						<textarea name="reply"></textarea>
					</div>
					<button type="submit" class="ui blue labeled submit icon button">
					<i class="icon edit"></i> Make a Review
					</button>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php $this->load->view('partials/footer'); ?>