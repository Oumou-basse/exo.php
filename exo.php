<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<form action="" method="post">
    <fieldset style="width: 50%; background-color:#ebc3af;">
      <legend>Contact</legend>
    <table>
      <tr>
        <td><label for="nom"> Nom: </label></td>
<td> <input type="text" placeholder="votre nom" name="nom" id="nom"></td>
</tr>
  
  <tr>
    <td>Prenom: </td>
  <td><input type="text" name="prenom"></td>
</tr>
<tr>
  <td>Age:</td>
 <td><input type="number" name="age"></td>
</tr>

<tr> <td>E-mail:</td>
 <td> <input type="email" name="email"> </td>
</tr>
<tr>
 <td>Adresse:</td>
 <td> <input type="text" name="adresse"> </td>
</tr>

<tr> <td><input type="submit" value="envoyer"name="submit"> </td>
 <td align="right"><input type="reset" value="supprimer"name="reset"> </td>
</tr>
</table>
</fieldset>
</form>

  <?php

    if (isset($_POST["submit"])) {
      
      $name = $_POST["nom"];
      $prenom = $_POST["prenom"];
      $age = $_POST["age"];
      $email = $_POST["email"];
      $adresse = $_POST["adresse"];
      
      echo $name."\n\n".$prenom ."\n".$age."\n".$email."\n".$adresse; 
    }
     
 

?>


</body>
</html>

