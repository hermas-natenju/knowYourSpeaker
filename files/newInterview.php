<?php
/**
 * Created by PhpStorm.
 * User: W8.1
 * Date: 2016-02-22
 * Time: 2:09 PM
 */
    include_once('dbConfig.php');
?>
<!doctype html>
<html>
<head>
    <title>NEW INTERVIEW</title>
    <meta charset="utf-8">
</head>
<body>
<?php

    include_once('header.php');
    include_once('menu.php');
    include_once('breadcrumb.php');
?>

<form action="">
    <div>
        <label for="question[]">Question 1:</label>
        <select name="questions[]" id="question[]">
            <option value=""></option>
        </select>
        <input type="text" name="answers[]" placeholder="answer">
    </div>
</form>

<footer class="container-fluid">Copyright &copy; TNH <b><?=date("Y");?></b></footer>
</body>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mycss.css">
<script src="js/bootstrap.min.js"></script>
</html>