<?php
//function arrayToString($a, $level = 0){
//    $str = "";
//    $pad = "";
//    for($i = 0; $i < $level; $i++){
//        $pad .= "&nbsp;&nbsp;&nbsp;&nbsp;";
//    }
//    foreach($a as $key=>$value){
//        $str .= "$pad $key = ";
//        if(is_array($value)){
//            $str .= "ARRAY<br>";
//            $str .= arrayToString($value, $level + 1 );
//        } else {
//            $str .= "$value<br>";
//        }
//    }
//    return $str;
//}

session_start();
include "../private_html/setup.php";
include_once WEB_PATH . 'CAS_includes/CAS.php';
phpCAS::client(CAS_VERSION_2_0, 'sso.messiah.edu', 443, '/cas/',false);
phpCAS::setNoCasServerValidation();
phpCAS::handleLogoutRequests(false);
phpCAS::forceAuthentication();
$logout_url = "https://sso.messiah.edu/cas/logout";
$_SERVER['REMOTE_USER'] = strtolower(phpCAS::getUser());

if(!isset($_SESSION['admin'])){
    $smarty->display('index.tpl');
    exit();
}
    $smarty->assign("isAdmin", true);

    $smarty->assign("adminActive", "active");
    $smarty->assign("title", "Admin");

//----- Check if the update species submit button was hit ----
    if (isset($_POST["updateSpecies"])) {

        $errorFlag = false;
        $smarty->assign('errorFlag', $errorFlag);

        $msg = "<strong>Missing Information!</strong>";

        // ------ Input Error Checking ------
        if ($_POST["commonName"] == "") {
            $errorFlag = true;
            $msg .= "<br>Common Name: empty";
        } else {
            //$smarty->assign('commonName', $_POST["commonName"]);
        }
        if ($_POST["nameDerivation"] == "") {
            $errorFlag = true;
            $msg .= "<br>Name Derivation: empty";
        } else {
            //$smarty->assign('nameDerivation', $_POST["nameDerivation"]);
        }
        if ($_POST["scientificName"] == "") {
            $errorFlag = true;
            $msg .= "<br>Scientific Name: empty";
        } else {
            //$smarty->assign('scientificName', $_POST["scientificName"]);
        }
        if ($_POST["phylum"] == "") {
            $errorFlag = true;
            $msg .= "<br>Phylum: empty";
        } else {
            //$smarty->assign('phylum', $_POST["phylum"]);
        }
        if ($_POST["order"] == "") {
            $errorFlag = true;
            $msg .= "<br>Order: empty";
        } else {
            //$smarty->assign('order', $_POST["order"]);
        }
        if ($_POST["family"] == "") {
            $errorFlag = true;
            $msg .= "<br>Family: empty";
        } else {
            //$smarty->assign('family', $_POST["family"]);
        }
        if ($_POST["comments"] == "") {
            $errorFlag = true;
            $msg .= "<br>Comments: empty";
        } else {
            //$smarty->assign('comments', $_POST["comments"]);
        }
        if ($_POST["woodSubstrate"] == "") {
            $errorFlag = true;
            $msg .= "<br>Wood Substrate: empty";
        } else {
            //$smarty->assign('woodSubstrate', $_POST["woodSubstrate"]);
        }
        if ($_POST["dimensions"] == "") {
            $errorFlag = true;
            $msg .= "<br>Dimensions: empty";
        } else {
            //$smarty->assign('dimensions', $_POST["dimensions"]);
        }

        //Upload multiple images


                if (is_array($_FILES["file"]["tmp_name"])) {
                    for ($i = 0; $i < count($_FILES["file"]["tmp_name"]); $i++) {
                        if (is_uploaded_file($_FILES["file"]["tmp_name"][$i])) {
                            $temp = $_FILES["file"]["tmp_name"][$i];
                            $name = $_FILES["file"]["name"][$i];
                            move_uploaded_file($temp, "img/" . $name);

                            $query2 = "INSERT INTO photo (Photo_ID, Photo_Name, Caption, Species_FK) VALUES
                   (DEFAULT, :photoName, :caption, :speciesID)";
                            $statement2 = $pdo->prepare($query2);
                            $statement2->bindValue(':photoName', $name);
                            $statement2->bindValue(':caption', $_POST['caption']);
                            $statement2->bindValue(':speciesID', $_POST['speciesID']);
                            $statement2->execute();
                        }
                    }
                }

                else {
                        move_uploaded_file($_FILES["file"]["tmp_name"], "img/" . $_FILES["file"]["name"]);

                        $query2 = "INSERT INTO photo (Photo_ID, Photo_Name, Caption, Species_FK) VALUES
                   (DEFAULT, :photoName, :caption, :speciesID)";
                        $statement2 = $pdo->prepare($query2);
                        $statement2->bindValue(':photoName', $name);
                        $statement2->bindValue(':caption', $_POST['caption']);
                        $statement2->bindValue(':speciesID', $_POST['speciesID']);
                        $statement2->execute();
                    }





        $msg = $msg . "<br>";
        if ($errorFlag) {
            $smarty->assign('msg', $msg);
            $smarty->display('addSpecies.tpl');
            exit();
        }

        if (is_array($_POST['checkbox'])) {
            for ($i = 0; $i < count($_POST['checkbox']); $i++) {

                $checked = $_POST['checkbox'][$i];

                $query2 = "DELETE FROM photo WHERE Photo_ID = '$checked'";
                $statement2 = $pdo->prepare($query2);
                $statement2->execute();
            }
        }

        //---- Update Query
        $query = "UPDATE species
              SET Common_Name = :commonName, Name_Derivation = :nameDerivation,
              Scientific_name = :scientificName, Phylum = :phylum, Sp_Order = :order,
              Family = :family, Comments = :comments, Wood_Substrate = :woodSubstrate,
              Dimensions = :dimensions
              WHERE Species_ID = :speciesID";

        $url = "filler.com";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':commonName', $_POST['commonName']);
        $statement->bindValue(':nameDerivation', $_POST['nameDerivation']);
        $statement->bindValue(':scientificName', $_POST['scientificName']);
        $statement->bindValue(':phylum', $_POST['phylum']);
        $statement->bindValue(':order', $_POST['order']);
        $statement->bindValue(':family', $_POST['family']);
        $statement->bindValue(':comments', $_POST['comments']);
        $statement->bindValue(':woodSubstrate', $_POST['woodSubstrate']);
        $statement->bindValue(':dimensions', $_POST['dimensions']);
        $statement->bindValue(':speciesID', $_POST['speciesID']);
        $statement->execute();

    } elseif (isset($_POST["selectSpecies"])) {

        $query = "SELECT species.Species_ID, .species.Common_Name,
                  species.Name_Derivation, species.Scientific_Name, species.Phylum, species.Sp_Order,
                  species.Family, species.Comments,
                  species.Wood_Substrate, species.Dimensions, species.Shape_FK
                  FROM species
                  WHERE species.Species_ID = :speciesID";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':speciesID', $_POST["speciesID"]);
        $statement->execute();
        $shapeResults = array();

        $query2 = "SELECT * FROM photo WHERE Species_FK = :speciesID";
        $statement2 = $pdo->prepare($query2);
        $statement2->bindValue(':speciesID', $_POST["speciesID"]);
        $statement2->execute();

        if ($statement->rowCount() > 0) {
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

                $speciesID = $row['Species_ID'];
                $commonName = $row['Common_Name'];
                $nameDerivation = $row['Name_Derivation'];
                $scientificName = $row['Scientific_Name'];
                $phylum = $row['Phylum'];
                $order = $row['Sp_Order'];
                $family = $row['Family'];
                $comments = $row['Comments'];
                $woodSubstrate = $row['Wood_Substrate'];
                $dimensions = $row['Dimensions'];
                $shapeID = $row['Shape_FK'];
//                $photoName = $row['Photo_Name'];
                if($statement2->rowCount() > 0) {
                    while ($row = $statement2->fetch(PDO::FETCH_ASSOC)) {
                        $photos[] = array(
                            "Photo_ID" => $row['Photo_ID'],
                            "Photo_Name" => $row['Photo_Name'],
                            "Caption" => $row['Caption']

                        );
                    } $smarty->assign('photos', $photos);
                }

                    $smarty->assign("speciesID", $speciesID);
                    $smarty->assign("commonName", $commonName);
                    $smarty->assign("nameDerivation", $nameDerivation);
                    $smarty->assign("scientificName", $scientificName);
                    $smarty->assign("phylum", $phylum);
                    $smarty->assign("order", $order);
                    $smarty->assign("family", $family);

                    $comments = preg_replace('/\s\s+/', ' ', $comments);
                    $smarty->assign("comments", $comments);

                    $woodSubstrate = preg_replace('/\s\s+/', ' ', $woodSubstrate);
                    $smarty->assign("woodSubstrate", $woodSubstrate);

                    $dimensions = preg_replace('/\s\s+/', ' ', $dimensions);
                    $smarty->assign("dimensions", $dimensions);
                    $smarty->assign("shapeID", $shapeID);
//                $smarty->assign("photoName", $photoName);


            }
        }


        else {
            $smarty->assign("error1", 'Database Error');
        }
    }
//------ Build Associative Species Array ------
    $query = "SELECT Species_ID, Common_Name FROM species";

    $statement = $pdo->prepare($query);
    $statement->execute();
    $speciesResults = array();
    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $speciesResults[$row['Species_ID']] = $row['Common_Name'];
        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }
    $smarty->assign("speciesArray", $speciesResults);

//------ Build Associative Shape Array ------
    $query = "SELECT Shape_Category_ID, Name FROM shape";

    $statement = $pdo->prepare($query);
    $statement->execute();
    $shapeResults = array();
    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $shapeResults[$row['Shape_Category_ID']] = $row['Name'];
        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }
    $smarty->assign("shapeArray", $shapeResults);

//------ Build Associative Shape Array ------
    $query = "SELECT Shape_Category_ID, Name FROM shape";

    $statement = $pdo->prepare($query);
    $statement->execute();
    $shapeResults = array();
    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $shapeResults[$row['Shape_Category_ID']] = $row['Name'];
        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }
    $smarty->assign("shapeArray", $shapeResults);
    if (isset($msg3)) {
        $smarty->assign('success', $msg3);
    }
    $smarty->display('updateSpecies.tpl');
