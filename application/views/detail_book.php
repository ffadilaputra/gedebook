<?php $this->load->view('partials/header-user');

	if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['id_pengguna'];
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
			<!-- Proses Like --> 
			<?= form_open('like') ?>
			<div class="ui labeled button" tabindex="0">
				<input type="hidden" value="<?= $book[0]->kd_buku ?>" name="kd_buku">
				<input type="hidden" value="<?= $session_data['id_pengguna'] ?>" name="kd_pengguna">
				<button type="submit" class="ui teal button">
					<i class="heart icon"></i> Like
				</button>
				<a class="ui basic teal left pointing label">
					<?= "0" ?>
				</a>
			</div>
			<?= form_close() ?>
			<!-- Proses Like -->
			<!-- abel  -->
			<h3> Book Category </h3>
			<div class="ui blue labels">
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
			<h3>Download As</h3>
			<div class="ui small basic icon buttons">
				<a class="ui button"><i class="download icon"></i>PDF</a>
			</div>
			
		</div>
		<div class="eight wide column">
			<div class="ui three column grid">
				<div class="field">
					<h3></h3>
					<h3><?= $book[0]->judul  ?></h3>
					<h3>Sinopsis</h3>
				</div>
				
			</div>
		</div>
		<div class="four wide column">
			<div class="field">
				<h3></h3>
				<div class="ui comments">
					<h3 class="ui dividing header">Review</h3>
					<div class="comment">
						<a class="avatar">
							<img src="<?= base_url('assets/img/image.png') ?>">
						</a>
						<div class="content">
							<a class="author">Matt</a>
							<div class="metadata">
								<span class="date">Today at 5:42PM</span>
							</div>
							<div class="text">
								How artistic!
							</div>
							<div class="actions">
								<a class="reply">Reply</a>
							</div>
						</div>
					</div>
					
					<form class="ui reply form">
						<div class="field">
							<textarea></textarea>
						</div>
						<div class="ui blue labeled submit icon button">
							<i class="icon edit"></i> Make a Review
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php $this->load->view('partials/footer'); ?>