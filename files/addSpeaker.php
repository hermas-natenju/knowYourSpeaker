<?php
/**
 * Created by PhpStorm.
 * User: W8.1
 * Date: 2016-02-22
 * Time: 2:09 PM
 */
if(isset($_POST['addspeaker'])){
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['fname'])&&!empty($_POST['fname'])){
        $nom = htmlspecialchars(trim($_POST['name']));
        $prenom = $_POST['fname'];
        try{
            $db = new PDO('mysql:dbname=kys;host=localhost', 'root', '');
            $db->beginTransaction();
            $prep = $db->prepare("INSERT INTO speaker VALUES('',:name, :fname)");
            $prep->execute(array(
                    ':name' =>$nom,
                    ':fname' => $prenom
                )
            );
            $db->commit();
            echo '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                everything is <b>ok</b> <i><b>1</b></i> speaker added
              </div>';
        }catch (PDOException $e){
            $db->rollBack();
            echo $e->getMessage("could'n connect to database or insert data");
            echo '<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p>everything is <b>ok</b> <i><b>1</b></i> speaker added</p>
              </div>';
        }
    }else{
        header("addSpeaker.php");
    }
}

echo '<div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
?>
<!doctype html>
<html>
<head>
    <title>ADD SPEAKER</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mycss.css">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>
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
                <li role="presentation"><a href="interviews.php"><span class="glyphicon glyphicon-folder-open"></span> Interviews</a></li>
                <li role="presentation" class="active"><a href="#"><span class="glyphicon glyphicon-plus"></span> add speaker</a></li>
                <li role="presentation"><a href="newInterview.php"><span class="glyphicon glyphicon-plus"></span> new interview</a></li>
            </ul>
        </div>
    </div>
</nav>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">add Speaker</li>
</ol>

<form method="post" action="addSpeaker.php">
    <fieldset>
        <label><input type="text" name="name" placeholder="name" required></label>
        <label><input type="text" name="fname" placeholder="first name" required></label>
    </fieldset>
    <button type="submit" class="btn btn-primary" name="addspeaker">ADD</button>
</form>

<footer class="container-fluid">Copyright &copy; TNH <b><?=date("Y");?></b></footer>
</body>
</html>