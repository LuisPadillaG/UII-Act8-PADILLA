<?php include("header.php"); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Llene el formulario a continuación, le informaremos en caso de ser aceptado</h1>
			</div>

			<div class="articulo">
				<article>
                <form action="/action_page.php" method="get">
  <label for="nname">Nombres:</label>
  <input type="text" id="nname" name="nname"><br><br>
  <label for="aname">Apellidos:</label>
  <input type="text" id="aname" name="aname"><br><br>
  <label for="pago">Edad:</label>
  <input type="text" id="edad" name="edad"><br><br>
  <label for="gmail">Correo electrónico:</label>
  <input type="text" id="gmail" name="gmail"><br><br>
  <label for="gmail">Número teléfonico:</label>
  <input type="text" id="gmail" name="gmail"><br><br>
  <label for="huesped">¿Tiene experiencia laboral?</label>
  <input type="text" id="huesped" name="huesped"><br><br>
  <label for="pago">¿Porque desea trabajar en Hotel Mario?</label>
  <input type="text" id="pago" name="pago"><br><br>
  <label for="pago">¿Qué expectativas tiene sobre el puesto?</label>
  <input type="text" id="pago" name="pago"><br><br>
  <label for="antecedentes">Antecedentes penales:</label>
  <input type="text" id="antecedentes" name="antecedentes"><br><br>
  <input type="submit" value="Submit"><br><br>

</form>
</article>
</div>
<?php include("sidebar.php"); ?>
		</div>
	</section>
	<?php include("footer.php"); ?>
</body>
</html>