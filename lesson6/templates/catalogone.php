<div class="product">
    <h2><?= $file['title'] ?></h2>
    <img src="/images/goods/<?= $file['url'] ?>" alt="photo" class="product__img">
    <p class="product__text">Описание товара:<?= $file['text'] ?></p>
    <p class="product__price"><?= $file['price'] ?>p.</p>
    <button class="product__btn" type="submit">Заказать</button>
</div>



