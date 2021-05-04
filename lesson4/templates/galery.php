
    <div id="main__galery">
		<div class="post_title">
			<h2>Моя галерея</h2>
		</div>
		<div class="gallery">
        <?php foreach ($galery as $item):?>
			<a rel="gallery" class="photo" href="images/big/<?=$item?>"><img src="images/small/<?=$item?>" width="150"
					height="100" /></a>
        <?php endforeach;?>
		</div>
	</div>



