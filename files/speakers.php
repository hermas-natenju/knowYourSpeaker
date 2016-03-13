<?php
/**
 * Created by PhpStorm.
 * User: W8.1
 * Date: 2016-02-22
 * Time: 2:09 PM
 */
    require_once('dbConfig.php');
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <script src="js/jquery.js"></script>
    <script src="js/npm.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var maxField = 5; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<fieldset class="row col-lg-6 form-fieldset"> <legend><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="remove-icon.png" width="46" height="46"/></a></legend><label><input type="text" name="name[]" placeholder="name" required></label><br><label><input type="text" name="fname[]" placeholder="first name" required></label><br>Sex:<label><input type="radio" name="sex[]" value="M">M</label><label><input type="radio" name="sex[]" value="F">F</label><br> <label><input type="number" name="age[]"></label></fieldset>'; //New input field html
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('legend').parent().remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        function showResult(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";

            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET", "gethint.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mycss.css">
    <link rel="stylesheet" href="css/contacts.css">
</head>
<body>
<?php

    include_once('header.php');
    include_once('menu.php');
    include_once('breadcrumb.php');
?>
<form class="row col-lg-6 col-md-4 col-sm-5" name="bulk_action_form" action="action.php" method="post" id="contacts">
    <?php
        $statement = "SELECT * FROM speaker WHERE visibility='ON'";
        $query = $db->prepare($statement);
        $query->execute();
        $rows = $query->fetchAll();
        foreach ($rows as $row) {
            ?>
            <div class="row col-lg-4 someone">
                <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                <img src="speakers_avatar/<?= $row['avatar']; ?>" alt="person" width="96" height="96"/>
                <span><?= $row['fname']; ?></span>
            </div>
            <?php
        }
    ?>
</form>
<form class="row col-lg-5 col-lg-push-1" method="post" action="action.php" name="speakers_add_form" id="add-form">
    <?php if (isset($msg))
        echo '<div><span class="closebtn"  onclick="this.parentElement.style.display=\'none\'">&times;</span>' . $msg . '</div>'; ?>
    <div class="field_wrapper row">
        <fieldset class="row col-lg-6 form-fieldset">
            <legend><a href="javascript:void(0);" class="add_button" title="Add field"><img src="add.png" width="46" height="46"/></a></legend>
            <label><input type="text" name="name[]" placeholder="name" required></label><br>
            <label><input type="text" name="fname[]" placeholder="first name"></label><br>
            <span>
                Sex: <label><input type="radio" name="sex[]" value='M'>M</label>
                <label><input type="radio" name="sex[]" value='F'>F</label>
            </span>
            <label><input type="number" name="age[]"></label>
        </fieldset>
    </div>
    <button type="submit" class="btn btn-default" name="add_speaker">ADD</button>
</form>
<br>

<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on left</button>

<footer>Copyright &copy; TNH <b><?= date("Y"); ?></b></footer>
</body>
</html>