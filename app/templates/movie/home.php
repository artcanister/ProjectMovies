<h1>Film</h1>
<div class="flexBoxRow">
	<div class="col-sm-2 col-md-2">
		<?php foreach ($movies as $movie): ?>
			<div class="thumbnail">
				<img  class ="miniature" src="<?= $movie->getUrlPoster(); ?>" alt="">
				<div class="caption">
					<h4><?=$movie->getTitle(); ?></h4>
				</div>
				<p>
					<a href="<?= BASE_URL ?>/movie?id=<?= $movie->getId()?>" class="btn btn-primary" role="button">Fiche</a> 
				</p>
			</div>
		<?php endforeach ?>
	</div>
</div>