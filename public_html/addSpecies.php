<?php

include "../private_html/setup.php";

$smarty->assign("adminActive", "active");
$smarty->assign("title", "Admin");

//------ Add Species -----
    if(isset($_POST["addSpecies"])) {
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
        // ------ Input Error Checking ------

        $errorFlag = false;
        $smarty->assign('errorFlag', $errorFlag);

        $msg = "<strong>Missing Information!</strong>";
        $msg2 = "<strong>Add failed!</strong><br>";

        if ($_POST["commonName"] == "") {
            $errorFlag = true;
            $msg .= "<br>Common Name: empty";
        } else {
            $smarty->assign('commonName', $_POST["commonName"]);
        }
        if ($_POST["nameDerivation"] == "") {
            $errorFlag = true;
            $msg .= "<br>Name Derivation: empty";
        } else {
            $smarty->assign('nameDerivation', $_POST["nameDerivation"]);
        }
        if ($_POST["scientificName"] == "") {
            $errorFlag = true;
            $msg .= "<br>Scientific Name: empty";
        } else {
            $smarty->assign('scientificName', $_POST["scientificName"]);
        }
        if ($_POST["phylum"] == "") {
            $errorFlag = true;
            $msg .= "<br>Phylum: empty";
        } else {
            $smarty->assign('phylum', $_POST["phylum"]);
        }
        if ($_POST["order"] == "") {
            $errorFlag = true;
            $msg .= "<br>Order: empty";
        } else {
            $smarty->assign('order', $_POST["order"]);
        }
        if ($_POST["family"] == "") {
            $errorFlag = true;
            $msg .= "<br>Family: empty";
        } else {
            $smarty->assign('family', $_POST["family"]);
        }
        if ($_POST["comments"] == "") {
            $errorFlag = true;
            $msg .= "<br>Comments: empty";
        } else {
            $smarty->assign('comments', $_POST["comments"]);
        }
        if ($_POST["woodSubstrate"] == "") {
            $errorFlag = true;
            $msg .= "<br>Wood Substrate: empty";
        } else {
            $smarty->assign('woodSubstrate', $_POST["woodSubstrate"]);
        }
        if ($_POST["dimensions"] == "") {
            $errorFlag = true;
            $msg .= "<br>Dimensions: empty";
        } else {
            $smarty->assign('dimensions', $_POST["dimensions"]);
        }
        if ($_POST["shape"] == "") {
            $errorFlag = true;
            $msg .= "<br>Shape: empty";
        } else {
            $smarty->assign('shape', $_POST["shape"]);
        }
        $msg = $msg . "<br>";
        if ($errorFlag) {
            $smarty->assign('msg', $msg);
            $smarty->display('addSpecies.tpl');
            exit();
        }

        // ------ Queries ------
        $query = "INSERT INTO species (Species_ID, Common_Name, Name_Derivation, Scientific_Name, Phylum, Sp_Order, Family,
              Comments, Wood_substrate, Dimensions, Shape_FK, URL)
              VALUES (DEFAULT, :commonName, :nameDerivation, :scientificName, :phylum, :order, :family,
               :comments, :woodSubstrate, :dimensions, :shape, :url)";

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
        $statement->bindValue(':shape', $_POST['shape']);
        $statement->bindValue(':url', $url);
        $statement->execute();

        $msg3 = "Add Successful!";

    } elseif (isset($_POST["updateSpecies"])){

        $errorFlag = false;
        $smarty->assign('errorFlag', $errorFlag);

        $msg = "<strong>Missing Information!</strong>";

        // ------ Input Error Checking ------
        if ($_POST["updateShapeName"] == "") {
            $errorFlag = true;
            $msg .= "<br> Shape Name: empty.";
        } else {
            $smarty->assign('updateShapeName', $_POST["updateShapeName"]);
        }

        if ($_POST["updateShapeDescription"] == "") {
            $errorFlag = true;
            $msg .= "<br> Shape Name: empty.";
        } else {
            $smarty->assign('updateShapeDescription', $_POST["updateShapeDescription"]);
        }

        if ($errorFlag) {
            $msg = $msg . "<br>";
            $smarty->assign('msg', $msg);
            $smarty->display('addSpecies.tpl');
            exit();
        }

        //---- Update Query
        $query = "UPDATE shape
              SET Name = :updateShapeName, Description = :updateShapeDescription
              WHERE Shape_Category_ID = :shapeID";

        $statement = $pdo->prepare($query);
        $statement->bindValue(':updateShapeName', $_POST["updateShapeName"]);
        $statement->bindValue(':updateShapeDescription', $_POST["updateShapeDescription"]);
        $statement->bindValue(':shapeID', $_POST["shapeID"]);
        $statement->execute();

    } elseif (isset($_POST["deleteSpecies"])) {
        $errorFlag = false;
        $smarty->assign('errorFlag', $errorFlag);

        $msg = "<strong>Missing Information!</strong>";

        // ------ Input Error Checking ------
        if ($_POST["removedSpecies"] == "") {
            $errorFlag = true;
            $msg .= "<br>Error, No Admin Username Was Passed.";
        } else {
            $smarty->assign('removedSpecies', $_POST["removedSpecies"]);
        }

        if ($errorFlag) {
            $msg = $msg . "<br>";
            $smarty->assign('msg', $msg);
            $smarty->display('addSpecies.tpl');
            exit();
        }

        //---- Delete Query -----

        $query = "DELETE FROM species WHERE Species_ID = :removedSpecies";

        $statement = $pdo->prepare($query);
        $statement->bindValue(':removedSpecies', $_POST["removedSpecies"]);
        $statement->execute();

        $msg3 = "Removal Successful!";

    }elseif (isset($_POST["selectSpecies"])) {

        $query = "SELECT Species_ID, Common_Name, Name_Derivation, Scientific_Name, Phylum, Sp_Order,
                  Family, Comments, Wood_Substrate, Dimensions, Shape_FK  FROM species WHERE Species_ID = :speciesID";

        $statement = $pdo->prepare($query);
        $statement->bindValue(':speciesID', $_POST["editSpecies"]);
        $statement->execute();
        $shapeResults = array();
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

                $smarty->assign("speciesID", $speciesID);
                $smarty->assign("commonName", $commonName);
                $smarty->assign("nameDerivation", $nameDerivation);
                $smarty->assign("scientificName", $scientificName);
                $smarty->assign("phylum", $phylum);
                $smarty->assign("order", $order);
                $smarty->assign("family", $family);
                $smarty->assign("comments", $comments);
                $smarty->assign("woodSubstrate", $woodSubstrate);
                $smarty->assign("dimensions", $dimensions);
                $smarty->assign("shapeID", $shapeID);

            }
        } else {
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

$smarty->display('addSpecies.tpl');