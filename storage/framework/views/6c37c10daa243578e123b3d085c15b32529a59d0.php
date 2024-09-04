<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulaire_test</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
		<link href='\stylesdoc\form_style.css' rel='stylesheet'/>

    </head>
    <body class="antialiased">
	
		<div id="form_box">
			<h1>Formulaire Test</h1>
		
			<form action="/red" method="POST">
				<?php echo csrf_field(); ?>
				<div id="form_elements2">
					<label for="inp3Co">Type de connexion:</label>
					<select name="inp3Co">
						<option value="ftth">FTTH</option>
						<option value="ftto">FTTO</option>
						<option value="adsl">ADSL</option>
						<option value="sdsl">SDSL</option>
						<option value="4G">4G</option>
					</select>
					<div id="submit_section3">
						<input type="submit" name="inp3SubFinal" value="envoyer"></input>
						<input type="submit" name="inp3SubB" value="retour"/>
					</div>
				</div>
			</form>
			
			<h3>créé par Alistair Vaisse pour revtelecoms</h3>
	
	</body>
</html><?php /**PATH C:\Users\alist\proj_test\test\resources\views/step3.blade.php ENDPATH**/ ?>