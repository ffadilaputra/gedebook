<?php $this->load->view('partials/header-user'); ?>
<h3 class="ui center aligned header"></h3>
<div class="ui container">
	<div class="ui two column grid">
		<div class="four wide column">
			<div class="ui vertical menu">
				<div class="ui card">
					<div class="image">
						<img src="<?= base_url('assets/img/image.png') ?>">
					</div>
				</div>
			</div>
			<div class="ui labeled button" tabindex="0">
				<div class="ui teal button">
					<i class="heart icon"></i> Like
				</div>
				<a class="ui basic teal left pointing label">
					0
				</a>
			</div>
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
					<h3>Judul</h3>
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