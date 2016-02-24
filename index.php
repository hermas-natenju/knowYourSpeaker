<?php
/**
 * Created by PhpStorm.
 * User: W8.1
 * Date: 2016-02-22
 * Time: 2:09 PM
 */
?>
<!doctype html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
</head>
<body>
<header class="page-header">
    <h1>Know Your Speaker <small>an exercise to persuade</small></h1>
</header>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav" id="menu">
                <li role="presentation" class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li role="presentation"><a href="files/interviews.php"><span class="glyphicon glyphicon-folder-open"></span>  open Interview</a></li>
                <li role="presentation"><a href="files/addSpeaker.php"><span class="glyphicon glyphicon-plus"></span> add speaker</a></li>
                <li role="presentation"><a href="files/newInterview.php"><span class="glyphicon glyphicon-plus"></span> new interview</a></li>
            </ul>
        </div>
    </div>
</nav>
<ol class="breadcrumb">
    <li class="active">Home</li>
    <li><a href="#"></a></li>
</ol>

<footer class="container-fluid">Copyright &copy; TNH <b><?=date("Y");?></b></footer>
</body>
<link rel="stylesheet" href="files/css/bootstrap.min.css">
<link rel="stylesheet" href="files/css/mycss.css">

<script src="files/js/bootstrap.min.js"></script>
</html>