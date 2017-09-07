<?php

var_dump($_POST["mdp"]);

if (isset($_POST["mdp"]) AND $_POST["mdp"] == "kangourou"){

echo "le mot de passe est correct";

}else {

echo "mauvais mot de passe";
}

?>
