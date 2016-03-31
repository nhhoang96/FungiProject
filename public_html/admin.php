<?php
session_start();
include "../private_html/setup.php";
include_once WEB_PATH . 'CAS_includes/CAS.php';
phpCAS::client(CAS_VERSION_2_0, 'sso.messiah.edu', 443, '/cas/',false);
phpCAS::setNoCasServerValidation();
phpCAS::handleLogoutRequests(false);
phpCAS::forceAuthentication();
$logout_url = "https://sso.messiah.edu/cas/logout";
$_SERVER['REMOTE_USER'] = strtolower(phpCAS::getUser());

//echo strtolower(phpCAS::getUser());

//::getUser();
$sql = "SELECT * FROM Administrator WHERE Username = :e";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":e", strtolower(phpCAS::getUser()));
$stmt->execute();

If($stmt->rowCount() == 0){
    //Jump back to whatever page you’re on

    Exit();
}
Else {
    //Display to Admin Dashboard tpl
    //echo "You are on the admin Dashboard";



    //------ Determine which submit button was hit ------
    //------ Add Species -----
        if (isset($_POST["addSpecies"])) {
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
                $smarty->display('admin.tpl');
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

        //------ Add Shape ------
        } elseif (isset($_POST["addShape"])) {

            $errorFlag = false;
            $smarty->assign('errorFlag', $errorFlag);

            $msg = "<strong>Missing Information!</strong>";
            $msg2 = "<strong>Add failed!</strong><br>";

            // ------ Input Error Checking ------
            if ($_POST["shapeName"] == "") {
                $errorFlag = true;
                $msg .= "<br>Shape Name: empty";
            } else {
                $smarty->assign('shapeName', $_POST["shapeName"]);
            }
            if ($_POST["description"] == "") {
                $errorFlag = true;
                $msg .= "<br>Shape Text: empty";
            } else {
                $smarty->assign('description', $_POST["description"]);
            }


            if ($errorFlag) {
                $msg = $msg . "<br>";
                $smarty->assign('msg', $msg);
                $smarty->display('admin.tpl');
                exit();
            }


            // ------ Queries ------
            $query = "INSERT INTO shape (Shape_Category_ID, Name, Description, Image)
              VALUES (DEFAULT, :shapeName, :description, :image)";

            $testImage = "testImage.jpg";
            $statement = $pdo->prepare($query);
            $statement->bindValue(':shapeName', $_POST["shapeName"]);
            $statement->bindValue(':description', $_POST["description"]);
            $statement->bindValue(':image', $testImage);
            $statement->execute();

            $msg3 = "Add Successful!";
        } elseif (isset($_POST["addAdmin"])) {
            $errorFlag = false;
            $smarty->assign('errorFlag', $errorFlag);

            $msg = "<strong>Missing Information!</strong>";

            // ------ Input Error Checking ------
            if ($_POST["newAdmin"] == "") {
                $errorFlag = true;
                $msg .= "<br>Shape Admin Email: empty";
            } else {
                $smarty->assign('newAdmin', $_POST["newAdmin"]);
                }

                if ($errorFlag) {
                $msg = $msg . "<br>";
                $smarty->assign('msg', $msg);
                $smarty->display('admin.tpl');
                exit();
            }

            //------ Insert Query -----

            $query = "INSERT INTO Administrator (Admin_ID, Username)
              VALUES (DEFAULT, :newAdmin)";

            $statement = $pdo->prepare($query);
            $statement->bindValue(':newAdmin', $_POST["newAdmin"]);
            $statement->execute();

            $msg3 = "Add Successful!";
        }elseif (isset($_POST["deleteAdmin"])) {
            $errorFlag = false;
            $smarty->assign('errorFlag', $errorFlag);

            $msg = "<strong>Missing Information!</strong>";

            // ------ Input Error Checking ------
            if ($_POST["removeAdmin"] == "") {
                $errorFlag = true;
                $msg .= "<br>Error, No Admin Username Was Passed.";
            } else {
                $smarty->assign('removeAdmin', $_POST["removeAdmin"]);
            }

            if ($errorFlag) {
                $msg = $msg . "<br>";
                $smarty->assign('msg', $msg);
                $smarty->display('admin.tpl');
                exit();
            }

            //------ Insert Query -----

            $query = "DELETE FROM administrator WHERE Admin_ID = :removeAdmin";

            $statement = $pdo->prepare($query);
            $statement->bindValue(':removeAdmin', $_POST["removeAdmin"]);
            $statement->execute();

            $msg3 = "Removal Successful!";
        }

//------ Build Associative Shape Array ------
    $query = "SELECT Shape_Category_ID, Name FROM shape";

    $statement = $pdo->prepare($query);
    $statement->execute();
    $shapeResults = array();
    if ($statement -> rowCount() > 0){
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
            $shapeResults[$row['Shape_Category_ID']] = $row['Name'];
        }
    }else{
        $smarty->assign("error1", 'Database Error');
    }
    $smarty->assign("shapeArray", $shapeResults);
    //------ Build Associative Shape Array ------
    $query = "SELECT Admin_ID, Username FROM administrator";

    $statement = $pdo->prepare($query);
    $statement->execute();
    $adminResults = array();
    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $adminResults[$row['Admin_ID']] = $row['Username'];
        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }
    $smarty->assign("adminArray", $adminResults);
    $smarty->display('admin.tpl');
}
//include "../private_html/setup.php";

//$smarty->display('admin.tpl');

