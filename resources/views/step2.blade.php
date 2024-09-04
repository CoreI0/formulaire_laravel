<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
				@csrf
				<div id="form_elements">
					<input type="text" name="inp2Soc" placeholder="société"></input>
					<input type="text" name="inp2Addr" placeholder="adresse"></input>
					<input type="text" name="inp2CodP" placeholder="code postal"></input>
					<input type="text" name="inp2Ville" placeholder="ville"></input>
					<div id="submit_section2">
						<input type="submit" name="inp2SubN" value="suivant"></input>
						<input type="submit" name="inp2SubB" value="retour"/>
					</div>
				</div>
			</form>
			
			<h3>créé par Alistair Vaisse pour revtelecoms</h3>
			
		</div>
	
	</body>
</html>