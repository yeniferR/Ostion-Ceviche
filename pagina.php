<?php
//$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
//$db=mysql_select_db("usuarios",$link) or die ("<h2> error de conexion</h2>");

$Nombre=$_POST['Nombre'];
$Asunto=$_POST['Asunto'];
$Mensaje=$_POST['Mensaje'];



//echo $Nombre. " ha dicho:<br/>".$Telefono.$Mensage;

if (mail('yenifet58@gmail.com',$Asunto,$Nombre,$Mensaje)){
      echo'<script>
  			alert("El mensaje se ha enviado");
  			location.href="contacto.html";
  		</script>';} else {
             echo"no enviado";
}


//$req=(strlen($Nombre)*strlen($Telefono)*strlen($Mensage)) or die ("No se han llenados todo los campos ");





//ingresamos la informacion a la base de datos
//mysql_query("INSERT INTO usuarios VALUES('','$Nombre','$Telefono','$Mensage')",$link) or die("<h2>Error Guardando los datos</h2>");


 ?>
