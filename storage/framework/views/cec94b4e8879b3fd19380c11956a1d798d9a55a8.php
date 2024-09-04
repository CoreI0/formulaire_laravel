<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulaire_test</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body class="antialiased">
        
		<!-- étape 1></-->
		<!-- en-tête></-->
		<form method="GET">
			<input type="text" name="inp1CodP" value="code postal"></input>
			<input type="text" name="inp1Ville" value="ville"></input>
			<input type="text" name="inp1Rue" value="rue"></input>
			<input type="text" name="inp1Num" value="numéro"></input>
			<input type="submit" name="inp1Sub" value="suivant"></input>
		</form>
		<?php
			Route::get('/', function () {
				return redirect('step2');
			});
		?>
		<!-- étapes suivantes dans d'autres vues;
			possibilité de revenir à une vue précédente:
				-> stockage des données dans une base pour ne pas qu'elles soient perdus du moment que l'on reste dans le formulaire
				-> suppression de ces données si on sort du formulaire:
					-> tracker si la page est ouverte ou non (sessions utilisateurs)
				-> suppression de ces données une fois l'envoie des infos par mail (fin du formaulaire) >
			bouton submit impossible à activer tant que pas toutes les informations sont données pour une étape
		</-->
    </body>
</html>
<?php /**PATH C:\Users\alist\proj_test\test\resources\views/welcome.blade.php ENDPATH**/ ?>