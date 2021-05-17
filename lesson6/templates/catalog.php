 <div class="product">
    <?php foreach ($goods as $item) : ?>
    <h2><a class="product__title" href="catalogone/?id=<?= $item['id'] ?>" ><?= $item['title'] ?></a></h2>
    <img src="images/goods/<?= $item['url'] ?>" alt="photo" class="product__img">
    <p class="product__price"><?= $item['price'] ?>p.</p>
    <button class="product__btn" type="submit">Заказать</button>
    <?php endforeach; ?>  
</div>
