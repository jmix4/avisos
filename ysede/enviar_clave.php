<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>ysede.com Crea tu páginas web gratis y nos ayudarás</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
#imagen, #navega, #eltexto, #eltexto2, #formulario, #menu, #eltextoasociaciones {border:0px solid #000;}
#imagen {
top:0px;
width:1017px;
height:1053px;
z-index:0;
margin:-1 auto;

border: 0px;
-moz-border-radius: 0px;
padding: 0px;
}
#navega {
        margin:0 auto;
        width:1017px;
        
        height:94px;
        position:relative;
        margin-top:-1050px;
        -moz-border-radius: 0px;
        padding: 0px;
}

#eltexto {
margin:0 auto;
width:1017px;
height:0px;
z-index:0;


position:relative;
margin-top:-40px;
_margin-top:-120px;
-moz-border-radius: 0px;
        padding: 0px;

}

#eltexto2 {
margin:0 auto;
width:1017px;
height:0px;
z-index:0;


position:relative;
margin-top:240px;
-moz-border-radius: 0px;
        padding: 0px;

}

#eltextoasociaciones {
margin:0 auto;
width:1017px;
height:0px;
z-index:0;


position:relative;
margin-top:300px;
-moz-border-radius: 0px;
        padding: 0px;

}

#formulario {
margin:0 auto;
width:500px;
height:200px;
z-index:0;


position:relative;
margin-top:100px;


-moz-border-radius: 0px;
        padding: 0px;

}

#menu {
margin:0 auto;
width:1017px;
height:100px;
z-index:0;


position:relative;
margin-top:-100px;
_margin-top:-140px;
-moz-border-radius: 0px;
padding: 0px;

}

body {
        margin-top: 0px;
        position:relative;
        text-align : center;
        _width: 100%;
}
.Estilo1 {
        color: #00CC33;
        font-weight: bolder;
        font-size: 36px;
        font-family: "Maiandra GD";
        font-variant: normal;
        font-style: normal;
}
.Estilo2 {
        color: #FF0000;
        font-weight: bolder;
        font-size: 36px;
        font-family: "Maiandra GD";
        font-variant: normal;
        font-style: normal;
}
.Estilo3 {
        color: #003399;
        font-weight: bolder;
        font-size: 16px;
        font-family: "Maiandra GD";
        font-variant: normal;
        font-style: normal;
}
.Estilo4 {
        color: #003399;
        font-weight: bolder;
        font-size: 36px;
        font-family: "Maiandra GD";
        font-variant: normal;
        font-style: normal;
}
-->
</style>

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<style type="text/css">
 div.c2 {text-align: left}
 div.c1 {text-align: center}
</style>
</head>
<body>
<?php
?>
<div class="c1">
<div class="c1" id="imagen"><img src="../ysede_fondoweb.jpg" width="1017" height="1053" alt="fondo de ysede.com"></div>
<div id="navega" class="Estilo2">
<table width="1017" border="0">
<tr>
<td width="17"><a href="../index.html"><img src="../ysede_logo_trasparente.gif" alt="ysede.com" border="0"></a> </td>
<td width="17"><a href="../ysede_que_es.html"><img src="../ysede_boton_que_es.jpg" alt="ysede que hacemos" width="160" height="35" border="0"></a><br>
  <br><br><br><br><br><br><br></td>
<td width="17"><a href="../ysede_porque.html"><img src="../ysede_boton_porque.jpg" alt="ysede por que lo hacemos" width="160" height="35" border="0"></a><br><br><br><br><br><br><br><br> </td>
<td width="167"></td>
<td width="167"></td>
<td width="0"> </td>
<td width="0"><a href="pcontrol/indexpcontrol.php"><img src="../ysede_boton_pcontrol.jpg" alt="ysede panel de control" width="160" height="36" border="0"></a><br><br><br><br><br><br><br><br> </td>
<td width="0"> </td>
<td width="0"> </td>
<td width="136"></td>
</tr>
</table>
</div>
<div class="c1">
<div id="eltexto" class="Estilo4">Creada para Ayudar</div>
<?php
$validausuario_web=$_POST['solicitoemail'];
$link=mysql_connect("82.194.88.56","adminysedebd","trueno21");
mysql_select_db("ysede_bd",$link);
$miro=mysql_query("SELECT * FROM usuarios_web WHERE (usuario_web='$validausuario_web')");

IF ($row=mysql_fetch_array($miro) ){
        echo "<br>";
         echo "<br>";
          echo "<br>";
            echo "<br>";
         echo "<br>";
           echo "<br>";
         echo "<br>";
          echo "<br>";
            echo "<br>";
         echo "<br>";
          echo "<br>";
          echo "<br>";
	echo "<div class='Estilo3'>Se ha enviado un email con su contraseña</div>";
        $envia= 'info@ysede.com';
        $contras=$row['password_usuario'];
	$direccioncita=$validausuario_web;
        $cabeceras = "From: $envia ";		
	mail($direccioncita,"Recordatorio de ysede.com","Estimado colaborador su contraseña es: $contras
	Recuerda que puedes cambiar tu clave en el panel de control",$cabeceras,'-finfo@ysede.com');
			
}else{
       echo "<br>";
         echo "<br>";
          echo "<br>";
            echo "<br>";
         echo "<br>";
          echo "<br>";
          echo "<br>";
	echo "No tenemos esa dirección de email registrada";
}
echo "  <form name='form1' method='post' action='http://www.ysede.com'>";
echo "      <input type='submit' name='Submit' value='VOLVER'> ";
?>
</div>
</div>
</body>
</html>