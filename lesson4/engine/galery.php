<?php



function getGalery(){
    return array_splice(scandir('images/small'),2);
}