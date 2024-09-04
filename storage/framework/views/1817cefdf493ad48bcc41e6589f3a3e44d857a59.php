<!DOCTYPE html>
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
				<div id="form_elements">
					<input type="text" name="inp1CodP" placeholder="code postal"></input>
					<input type="text" name="inp1Ville" placeholder="ville"></input>
					<input type="text" name="inp1Rue" placeholder="rue"></input>
					<input type="text" name="inp1Num" placeholder="numéro"></input>
					<div id="submit_section1">
						<input type="submit" name="inp1Sub" value="suivant" id="button"></input>
					</div>
				</div>
			</form>
			
			<h3>créé par Alistair Vaisse pour revtelecoms</h3>
			
		</div>
    </body>
</html>
<?php /**PATH C:\Users\alist\proj_test\test\resources\views/step1.blade.php ENDPATH**/ ?>