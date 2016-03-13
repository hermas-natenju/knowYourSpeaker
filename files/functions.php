<?php
    function stressBold($str, $q) {/*
        $exp = explode($q,$str,1);
        return $exp[0]."<b>".$q."</b>".substr($str,stripos($str,$q));*/
        return substr_replace($str, "<b>" . $q . "</b>", stripos($str, $q), strlen($q));
    }