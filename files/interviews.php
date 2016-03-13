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
<?php

    include_once('header.php');
    include_once('menu.php');
    include_once('breadcrumb.php');
?>

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