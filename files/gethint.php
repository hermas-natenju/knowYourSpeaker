<?php
    /**
     * Created by PhpStorm.
     * User: W8.1
     * Date: 2016-03-07
     * Time: 4:45 AM
     */
    require_once('dbConfig.php');

    require_once('functions.php');
    // Array with names
    $a = $db->query("SELECT concat(concat(name,' '),fname) AS name FROM speaker WHERE visibility='ON'");

    // get the q parameter from URL
    $q = $_REQUEST["q"];

    $hint = "";

    // lookup all hints from array if $q is different from ""
    if ($q !== "") {
        $q = strtolower($q);
        $len = strlen($q);
        foreach ($a as $name) {
            if (stristr($q, substr($name['name'], stripos($name['name'], $q), $len))) {
                if ($hint === "") {
                    $hint = $name['name'];
                } else {
                    /*$hint .= "<br>". $name['name'];
                       echo substr($n, strripos($n, $q), strlen($q));
                    $word = substr($name['name'], strripos($name['name'], $q), strlen($q));
                    $str_begin = substr($name['name'],0, strlen(substr($name['name'],stripos($name['name'],$q),strlen($q))));
                    $hint = $str_begin;
                    $a = stristr($name['name'], $q); // the string from the beginning of word typed
                    $b = substr($a, stripos($a,substr($a, -1, 1))); // the rest of the string after the word typed
                    $hint = $a.$b - $a;
                    $str_end = substr($name['name'],strspn($name['name'],$q),strlen($name['name']-substr($name['name'],0,strspn($name['name'],$q))));
                    $hint = $strbg."". substr($name['name'], stripos($name['name'],$q), strspn($name['name'],$q))."".;
                    */
                    $hint .= "<hr>" . strtoupper(stressBold($name['name'], $q));
                }
            }
        }
    }

    // Output "no suggestion" if no hint was found or output correct values
    echo $hint === "" ? "no suggestion" : $hint;