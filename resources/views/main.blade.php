<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulaire_test</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
		<link href='\stylesdoc\form_style.css' rel='stylesheet'/>
		
		<!-- Srcipts -->
		<script type="text/javascript" src="\javascripts\manip.js"></script>
		
	

    </head>
    <body class="antialiased">
		<div id="foreground">
		</div>
		<div id="layer1">
		   
			<div id="form_box">
				<h1>Formulaire Test</h1>
				
				<form action="/send" method="POST">
					@csrf
					<div id="step1" class="step">
						<input type="text" name="inp1CodP" id="inp1" class="inp"><span id="pla1" class="placeholder">code postal</span></input>
						<input type="text" name="inp1Ville" id="inp2" class="inp"><span id="pla2" class="placeholder">ville</span></input>
						<input type="text" name="inp1Rue" id="inp3" class="inp"><span id="pla3" class="placeholder">rue</span></input>
						<input type="text" name="inp1Num" id="inp4" class="inp"><span id="pla4" class="placeholder">numéro</span></input>
						<div id="submit_section1" class="sub_section">
							<input type="button" name="inp1Sub" value="suivant" Onclick="updateSteps(2)"></input>
						</div>
					</div>
					
					<div id="step2" class="step">
						<input type="text" name="inp2Soc" id="inp5" class="inp"><span id="pla5" class="placeholder">société</span></input>
						<input type="text" name="inp2Addr" id="inp6" class="inp"><span id="pla6" class="placeholder">adresse</span></input>
						<input type="text" name="inp2CodP" id="inp7" class="inp"><span id="pla7" class="placeholder">code postal</span></input>
						<input type="text" name="inp2Ville" id="inp8" class="inp"><span id="pla8" class="placeholder">ville</span></input>
						<div id="submit_section2" class="sub_section">
							<input type="button" name="inp2SubN" value="suivant" Onclick="updateSteps(3)"></input>
							<input type="button" name="inp2SubB" value="retour" Onclick="updateSteps(1)"/>
						</div>
					</div>
					
					<div id="step3" class="step">
						<label for="inp3Co">Type de connexion:</label>
						<select name="inp3Co">
							<option value="ftth">FTTH</option>
							<option value="ftto">FTTO</option>
							<option value="adsl">ADSL</option>
							<option value="sdsl">SDSL</option>
							<option value="4G">4G</option>
						</select>
						<div id="submit_section3" class="sub_section">
							<input type="submit" name="inp3SubFinal" value="envoyer"></input>
							<input type="button" name="inp3SubB" value="retour" Onclick="updateSteps(2)"/>
						</div>
					</div>
					
				</form>
				
				<h3 id="warning1">veuillez remplir tous les champs!</h3>
				<h3 id="credits">créé par Alistair Vaisse pour revtelecoms</h3>
				
			</div>
		</div>
		
		<script>
		document.getElementById("step2").style.display = "none";
		document.getElementById("step3").style.display = "none";
		setInputs();
		setEventListeners();
		initValues();
		</script>
    </body>
</html>