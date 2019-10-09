<form action ="cible.php" method="post">
  <input type = "text" name ="nom"/>
  <input type = "text" name ="prenom"/>
  <input type = "date" name ="date"/>
  
  <select name = "choix">
  	<option value="choix1">choix01</option>
  	<option value="choix2">choix02</option>
  	<option value="choix3">choix03</option>
  </select>
  
  <p>
  <label for='chk1'>Poulet</label>
  <input type = "checkbox" name ="chk1"/>  
  </p>
  
  <p>
  <label for='chk2'>Lapin</label>
  <input type = "checkbox" name ="chk2"/>
  </p>

  <p>
  <label for='chk3'>Cabri</label>
  <input type = "checkbox" name ="chk3"/>
  </p>
  
  <p>
  <label for='chk4'>Porc</label>
  <input type = "checkbox" name ="chk4"/>
  </p> 
  
  <p>
  <input type = "submit" name ="valider"/>
  </p>

</form> 
