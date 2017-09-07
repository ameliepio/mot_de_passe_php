

<!-- <form action="secret.php" method="post"enctype="multipart/form-data">

<p>
<input type="password"name="mdp"/><br>

<input type="submit" value="mot de passe"/>
</p>
</form> -->

<?php
if (isset($_POST["mdp"]) AND $_POST["mdp"] == "kangourou"){

 echo "kangourou";

 }else{

  ?>

   <form action="formulaire.php" method="post" enctype="multipart/form-data">

   <p>
   <input type="password" name="mdp"/><br>

   <input type="submit" value="mot de passe"/>
   </p>
  </form>
<?php
}
?>
