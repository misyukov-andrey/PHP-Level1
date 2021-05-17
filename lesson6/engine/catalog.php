<?php

function getGoods(){
    return getAssocResult("SELECT * FROM goods");
}

function getGoodsOne($id){
    return getOneResult("SELECT * FROM goods WHERE id = {$id}");
}