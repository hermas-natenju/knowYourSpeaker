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
    <title>INTERVIEWS</title>
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
                <li role="presentation"><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li role="presentation" class="active"><a href="#"><span class="glyphicon glyphicon-folder-open"></span> Interviews</a></li>
                <li role="presentation"><a href="speakers.php"><span class="glyphicon glyphicon-plus"></span> speakers</a></li>
                <li role="presentation"><a href="newInterview.php"><span class="glyphicon glyphicon-plus"></span> new interview</a></li>
            </ul>
        </div>
    </div>
</nav>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Interviews</li>
</ol>

<div id="container">
    <div class="panel panel-primary row col-xs-12 col-sm-4 col-md-3 col-lg-3" id="menu-right">
        <div class="panel-heading">Interviews <span class="badge">top 10</span></div>
        <table class="table table-condensed table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>nom</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Essai1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Essai2: un long, tres long, tre tres long titre</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="detail-container" class="row col-xs-12 col-sm-8 col-md-9 col-lg-">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div><b>id:</b> 1</div>
                <div><b>nom:</b> Essai1</div>
                <div><b>objectif:</b> premier test</div>
                <div><b>intervenants:</b> moi et 2 autres personnes</div>
            </div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                    Ea, est, quidem! Ab accusamus deserunt odit, pariatur perspiciatis quia temporibus ut velit?
                    <br>At id impedit, nobis officiis reprehenderit veniam voluptatibus. <br>
                    Hic!</p>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid">Copyright &copy; TNH <b><?=date("Y");?></b></footer>
</body>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mycss.css">
<script src="js/bootstrap.min.js"></script>
</html>