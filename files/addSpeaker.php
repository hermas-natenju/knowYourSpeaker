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
        $field_name_array = $_REQUEST['name'];
        $field_fname_array = $_REQUEST['fname'];
        try{
            $db = new PDO('mysql:dbname=kys;host=localhost', 'root', '');
            $db->beginTransaction();
            $prep = $db->prepare("INSERT INTO speaker(name, fname)  VALUES(:name, :fname)");
            $prep->execute(array(
                    ':name' =>$field_name_array,
                    ':fname' => $field_fname_array
                )
            );
            $db->commit();
            echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>success!</strong>
</div>';
        }catch (PDOException $e){
            $db->rollBack();
            echo '<div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>ERROR!</strong>
                  </div>';
        }
    }else{
        header("addSpeaker.php");
    }
}

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
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div><label><input type="text" name="name" placeholder="name" required></label> <label><input type="text" name="fname" placeholder="first name" required></label><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="remove-icon.png"/></a></div>'; //New input field html
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    </script>
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
    <div class="field_wrapper">
        <div>
            <label><input type="text" name="name" placeholder="name" required></label>
            <label><input type="text" name="fname" placeholder="first name" required></label>
            <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="addspeaker">ADD</button>
</form>

<footer class="container-fluid">Copyright &copy; TNH <b><?=date("Y");?></b></footer>
</body>
</html>