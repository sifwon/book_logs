<?php
    //指定された文字列を取ってhtmlspecialcharsで変換(エスケープ)した文字列を返す
    function escape($string){
        return htmlspecialchars($string , ENT_QUOTES , 'UTF-8');
    }
?>