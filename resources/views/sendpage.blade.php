<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulaire_test</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body class="antialiased">
		<!-- étape 2></-->
		<!-- en-tête></-->
		<form action="/send" method="POST">
			<input type="submit" name="inp3SubFinal" value="envoyer"></input>
			<input type="submit" name="inp3SubB" value="retour"/>
		</form>
	
	</body>
</html>