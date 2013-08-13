<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Internet Dreams</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<a href="index.php"><img src="images/shared/logo.png" width="156" height="40" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	    <?php
if(isset($_GET['m']))
{
	?>
    <div id="forgotbox-text">Por favor revise su correo electr&oacute;nico.</div>
    <?php } ?>
    <div id="login-inner">
		<form id="loginform" method="post" action="logueo.php">
        <table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th style="text-align:right;">Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<td><input name="nombre_user" type="text"  class="login-inp" /></td>
		</tr>
		<tr>
			<th style="text-align:right;">Contrase&ntilde;a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<td><input name="password" type="password" value="************"  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th></th>
			<td valign="top"><br /><br /></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" class="submit-login"  /></td>
		</tr>
        </table>
	</form>
    </div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	<a href="" class="forgot-pwd">Olvido tu Contrase&ntilde;a?</a>
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		
        <div id="forgotbox-text">Por favor envíenos su correo electr&oacute;nico y le restablezca su contrase&ntilde;a.</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Direcci&oacute;n de Correo:</th>
			<td><input type="text" value=""   class="login-inp" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input name="envia" type="button" class="submit-login" onclick="envia_1()"/></td>
		
        </tr>
		</table>
		</div>
		<!--  end forgot-inner -->
		 <br />       
        <div class="clear"></div>
		<br />
<a href="" class="back-login">Volver al Inicio.</a>
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
<script languaje="javascript">
  function envia_1(){
    window.location.href="correo/procesa.php";
    self.close();
  }
</script>
</html>