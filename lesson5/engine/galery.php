<?php

function getGalery(){
    return getAssocResult("SELECT * FROM galery");
}

function getGaleryOne($id){
    return getOneResult("SELECT * FROM galery WHERE id = {$id}");
}

function getLikes($id){
    executeQuery("UPDATE galery SET like = like +1 WHERE id = {$id}");
}