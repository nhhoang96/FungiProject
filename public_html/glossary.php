
<?php
//Fungi Team 2015
include "../private_html/setup.php";

//---- Query to pull from glossary and glossary_image ----//
$query = "SELECT Term, Image_Name, Caption, Description FROM glossary
          LEFT JOIN glossary_image ON Glossary_FK = Glossary_ID";

$statement = $pdo->prepare($query);
$statement ->execute();

$terms = array();
$tempPic = array();
$tempTerm = array();
$previous_term = -1;

//---- Retrieve images and assign them to given term ----//
while($row = $statement->fetch(PDO::FETCH_ASSOC)){
    if($previous_term != $row['Term']) {
        if ($previous_term != -1) {
            $tempTerm["Images"] = $tempPic;
            $terms[] = $tempTerm;
        }
            $tempTerm = array(
                "Term" => $row['Term'],
                "Def" => $row['Description']
            );
            $previous_term = $row['Term'];
            $tempPic = array();
        }
        $tempPic[] = array(
            "Image_Name" => $row['Image_Name'],
            "Caption" => $row['Caption']
        );
}


$tempTerm["Images"] = $tempPic;
$terms[] = $tempTerm;


$smarty->assign('terms', $terms);
$smarty->display('glossary.tpl');

?>