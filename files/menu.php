<?php
    $arr_dir = explode("/", str_replace('\\', '/', dirname(__FILE__)));
    $arr_dir[3] == 'files' ? $index = '../index.php' : $index = 'index.php';

?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav" id="menu">
                <li role="presentation"><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li role="presentation"><a href="interviews.php"><span class="glyphicon glyphicon-folder-open"></span> Interviews</a></li>
                <li role="presentation"><a href="speakers.php"><span class="glyphicon glyphicon-plus"></span> speakers</a></li>
                <li role="presentation"><a href="newInterview.php"><span class="glyphicon glyphicon-plus"></span> new interview</a></li>
            </ul>
            <form action="speakers.php" class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" onkeyup="showResult(this.value)">

                    <div class="popup-msg" id="txtHint"></div>
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
        </div>
    </div>
</nav>