<?php 
		require_once("header.php");

			$id=$_GET['id'];
			$sql_edita_sliders="SELECT * FROM upb_slider WHERE idupb_slider='$id'";
			$res=mysql_query($sql_edita_sliders,$con);
			$reg=mysql_fetch_array($res);
?>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading">
  <h1>Crear Nuevo Post</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
				
                <?php				
						if (isset($_GET["e"]))
						{
							
							switch ($_GET["e"])
								{
									
									case '4':
									?>
                                    <!--  start message-green -->
                                    <div id="message-green">
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="green-left">Nuevo post añadido con exito!.</td>
                                        <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
                                    </tr>
                                    </table>
                                    </div>
                                    <!--  end message-green -->
                                    <?php 
									break;
									
									case '1':
									?>
                                    <!--  start message-red -->
                                    <div id="message-red">
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="red-left">Error en las dimensiones de la imagen, Por favor intentelo una vez mas. </td>
                                        <td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
                                    </tr>
                                    </table>
                                    </div>
                                    <!--  end message-red -->
                                    <?php 
									break;
									case '2':
									?>
                                    <!--  start message-red -->
                                    <div id="message-red">
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="red-left">Error en en Tamaño de la imagen, Por favor intentelo una vez mas. </td>
                                        <td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
                                    </tr>
                                    </table>
                                    </div>
                                    <!--  end message-red -->
                                    <?php 
									break;
									case '1':
									?>
                                    <!--  start message-red -->
                                    <div id="message-red">
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="red-left">Error en el tipo de Archivo de la imagen, Por favor intentelo una vez mas. con las Extensiones ".jpg" o ".png"</td>
                                        <td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
                                    </tr>
                                    </table>
                                    </div>
                                    <!--  end message-red -->
                                    <?php 
									break;
								}	
								
						}

				?>

    <table border="0" width="100%" cellpadding="0" cellspacing="0">
	<form name="form" method="post" action="q/edita_post.php" enctype="multipart/form-data">
     <input name="idupb_post" type="hidden" value="<?php echo $reg["idupb_slider"];?>"/>
    <tr valign="top">
	<td>
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<th valign="top">Tipo Post:</th>
		<td>	
		  <p>
		    <select name="tipo_post" class="styledselect_form_1">
		      <option <?php if($reg["tipo_slider"]=="main"){echo 'selected';}else{echo '';}?> value="main">Principal</option>
		      <option <?php if($reg["tipo_slider"]=="side"){echo 'selected';}else{echo '';}?> value="side">Side</option>
		    </select>
		</td>
		<td></td>
		</tr>
		<tr>
			<th valign="top">Titulo Slider:</th>
			<td><input name="titulo_slider" type="text" class="inp-form" value="<?php echo $reg["titulo_slider"];?>"/></td>
			<td></td>
		</tr>
        <tr>
			<th valign="top">Nombre Slider:</th>
			<td><input name="nombre_slider" type="text" class="inp-form" value="<?php echo $reg["nombre_slider"];?>"/></td>
			<td></td>
		</tr>
         <tr>
			<th valign="top">Imagen Anterior:</th>
			<td> <img src="<?php echo $base_url."admin/uploads_sliders/".$reg['nombre_slider'];?>" width="150" height="100"/> </td>
			<td></td>
		</tr>
         <tr>
	
    <th>Imagen nueva:</th>
	<td><input style="border: 1px solid #acacac;padding: 8px; border-radius:5px; width:370px;" name="foto" type="file" class="imagen"/></td>
	<td>
	<div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, PNG 2MB Tama&ntilde;o maximo de la imagen.</div>
	<div class="bubble-right"></div>
	</td>
	</tr>
        <tr>
		<th valign="top">Descripci&oacute;n Slider:</th>
		<td><textarea name="descripcion_slider" rows="" cols="" class="form-textarea" ><?php echo $reg["descripcion_slider"];?></textarea></td>
		<td></td>
	</tr>
		
   <tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" />
			<input name="" type="reset" class="form-reset" />
		</td>
		<td></td>
	</tr>
   	</form>
	</table>
 
	<!-- end id-form  -->

	</td>
	<td>

	<!--  start related-activities -->
	<div id="related-activities">
		
		<!--  start related-act-top -->
		<div id="related-act-top">
		<img src="images/forms/header_related_act.gif" width="271" height="43" alt="" />
		</div>
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			<!--  start related-act-inner -->
			<div id="related-act-inner">
			
				<div class="left"><a href=""><img src="images/forms/icon_plus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Add another product</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				
				<div class="left"><a href=""><img src="images/forms/icon_minus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Delete products</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				
				<div class="left"><a href=""><img src="images/forms/icon_edit.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Edit categories</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				<div class="clear"></div>
				
			</div>
			<!-- end related-act-inner -->
			<div class="clear"></div>
		
		</div>
		<!-- end related-act-bottom -->
	
	</div>
	<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>

<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

<div class="clear">&nbsp;</div>
 
<?php require_once("footer.php");?>