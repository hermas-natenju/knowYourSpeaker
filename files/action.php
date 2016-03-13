<?php
session_start();
    require_once('dbConfig.php');
if (isset($_POST['bulk_delete_submit'])) {
    $idArr = $_POST['checked_id'];
    foreach ($idArr as $id) {
        $db->query("UPDATE speaker SET visibility='OFF' WHERE id_speaker=" . $id);
    }
    header("Location:speakers.php");
}
    // ADD A NEW SPEAKE
    function addUpAvatar() {
        if (isset($_FILES['avatar']) and !empty($_FILES['avatar']['name'] AND isset($row['id']))) {
            $maxSize = 2067152;// taille maximum de la photo en octets
            $validExt = array('jpg', 'jpeg', 'gif', 'png'); // liste des extensions autorisées

            if ($_FILES['avatar']['size'] <= $maxSize) {
                $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
                if (in_array($extensionUpload, $validExt)) {
                    $dir = "speakers_avatar/" . $row['id'] . "." . $extensionUpload;
                    $result = move_uploaded_file($_FILES['avatar']['tmp_name'], $dir);
                    if ($result) {
                        $new_avatar = $row['id'] . "." . $extensionUpload;
                        $id = $row['id'];

                        $avatarUpdate = $db->prepare("UPDATE speaker SET avatar=:avatar WHERE id_speaker=:id");
                        $avatarUpdate->execute(array(':avatar' => $row['id'] . "." . $extensionUpload, ':id' => $row['id']));
                        if ($db->exec("$avatarUpdate") > 0) {
                            $msg = "well done!";
                        }

                        header('location:speakers.php');
                    } else {
                        $msg = "<b>ERROR</b> during file importation";
                    }
                } else {
                    $msg = "invalid file format!";
                }
            } else {
                $msg = "maximum file size: 2Mo";
            }
        }
    }

    if (isset($_POST['add_speaker'])) {
        if (isset($_REQUEST['name']) && !empty($_REQUEST['name'])) {
            $names = $_REQUEST['name'];
            $fnames = $_REQUEST['fname'];
            $sexes = $_REQUEST['sex'];
            $ages = $_REQUEST['age'];
            try {
                $db->beginTransaction();
                $statement = "INSERT INTO speaker(name, fname, sex, age)  VALUES(:name,:fname, :sex, :age)";

                $prep = $db->prepare($statement);
                for ($i = 0; $i < count($names); $i++) {
                    $prep->execute(array(':name' => $names[$i], ':fname' => $fnames[$i], ':sex' => $sexes[$i], ':age' => $ages[$i]));
                }

                if ($db->exec($statement) > 0) {
                    $db->commit();
                    echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>success!</strong></div>';
                }
            } catch (PDOException $e) {
                $db->rollBack();
                echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>ERROR!</strong></div>';
            }
        }
        header('location:speakers.php');
    }
