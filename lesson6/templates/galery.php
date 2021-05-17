<div id="main__galery">
	<div class="post_title">
		<h2>Моя галерея</h2>
	</div>
	<div class="gallery">
		<?php foreach ($galery as $item) : ?>
			<a rel="gallery" class="photo" href="/galeryone/?id=<?= $item['id'] ?>"><img src="images/small/<?= $item['url'] ?>" width="150" height="100" /></a>
			<span><?= $item['views']?></span>
		<?php endforeach; ?>
	</div>
</div>