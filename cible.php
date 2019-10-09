<!-- EXO FORMULAIRE Correction -->
<?php
    
    //echo var_dump($_POST);
    
    	$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$date = $_POST['date'];
			
			$choix = $_POST['choix'];

			$chkbx1 = isset($_POST['chk1']);
      $chkbx2 = isset($_POST['chk2']);
			$chkbx3 = isset($_POST['chk3']);
			$chkbx4 = isset($_POST['chk4']);
?>

<form action ="cible.php" method="post">
  <input type = "text" name ="nom" value="<?php echo $nom;?>"/>
  <input type = "text" name ="prenom" value="<?php echo $prenom;?>"/>
  <input type = "date" name ="date"  value="<?php echo $date;?>"/>
 
  
 
  
  <p> 
  <?php 
  if(isset($choix)){
    echo $choix;
  } 
  ?> 
  <p>
    
  <select name = "choix">
  	<option value="choix1" <?php if ($choix === "choix1"){
          echo"selected";}?> 
      >choix01</option>

  	<option value="choix2"  <?php if ($choix === "choix2"){
          echo"selected";}?> >choix02</option>
      
  	<option value="choix3"  <?php if ($choix === "choix3"){
          echo"selected";}?>
      >choix03</option>
  </select>
  


  <label for='chk1'>Poulet</label>
  <input type = "checkbox" name ="chk1" 
    <?php if ($chkbx1 == "on"){echo 'checked';}?>/>  
    
  <label for='chk2'>Lapin</label>
  <input type = "checkbox" name ="chk2" <?php if ($chkbx2 == "on"){echo 'checked';}?>/>
    
  <label for='chk3'>Cabri</label>
  <input type = "checkbox" name ="chk3" <?php if ($chkbx3 == "on"){echo 'checked';}?>/>
    
  <label for='chk4'>Porc</label>
  <input type = "checkbox" name ="chk4" <?php if ($chkbx4 == "on"){echo 'checked';}?>/>
    
  <input type = "submit" name ="valider"/>
</form>



<!-- A TERMINER (RAJOUTER REGEX) -->


 