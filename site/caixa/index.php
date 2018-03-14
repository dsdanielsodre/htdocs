<!DOCTYPE html>
<html>

<meta charset =  "utf-8">

<head>
	<script type="text/javascript">

	function populate(s1,s2){

		var s1 = document.getElementById(s1);

		var s2 = document.getElementById(s2);


		//console.log(s1.value);

		s2.innerHTML = "";
		
		if(s1.value == "manha") { var optionArray = ["|", "medio|Ensino Médio"] }
			
		if(s1.value == "tarde") { var optionArray = ["|", "TRT|Técnico em Redes de Computadores", "TCT|Técnico em Contabilidade"] }		

		if(s1.value == "noite"){ var optionArray = ["|", "TIN|Técnico em Informática" ]	}

		if(s1.value == "TRT"){var optionArray = ["|", "1 TRT|1 TRT" , "2 TRT|2 TRT", "3 TRT|3 TRT" ]}
		
		if(s1.value == "TCT"){ var optionArray = ["|", "1 TCT|1 TCT" , "2 TCT|2 TCT", "3 TCT|3 TCT"  ]}
		
		if(s1.value == "TIN"){ var optionArray = ["|", "1TIN|1TIN", "2 TIN|2 TIN", "3 TIN|3 TIN" ]}
		
		if(s1.value == "medio"){ var optionArray = ["|", "Ensino Médio|Ensino Médio" ]}
		
		if(s1.value == "h"){ var optionArray = ["|", "Ensino Médio|Ensino Médio" ]}
		
		if(s1.value == "i"){ var optionArray = ["|", "Ensino Médio|Ensino Médio" ]}
		
		if(s1.value == "j"){ var optionArray = []}

		for(var option in optionArray){
			var pair = optionArray[option].split("|");
			
			var newOption = document.createElement("option");
			
			//console.log(pair[0] + ", " + pair[1]);

			newOption.value = pair[0];
			newOption.innerHTML = pair[1];
			s2.options.add(newOption);

		}
		
	}
	</script>
	<title>Caixas</title>
</head>
<body>



	<form>

		<h2>Escolha um periodo:</h2>
		<select id="letras" name="letras" onchange="populate('letras','letras1')"> 
		
			<option value="">Selecione um periodo..</option>
			<option value="manha">Manhã</option>
			<option value="tarde">Tarde</option>
			<option value="noite">Noite</option>
		</select>

		<h2>Escolha um curso:</h2>
		<select id="letras1" name="letras1">
			<option value="">Selecione um curso...</option>
			<option value="d">Técnico em Redes de Computadores</option>
			<option value="e">Técnico em Contabilidade</option>
			<option value="f">Técnico em Informática</option>
			<option value="g">Ensino Médio</option>
		</select>

		<hr>

		<h2>Escolha um modúlo:</h2>
		<select id="letras2" name="letras2">
			<option value="">Selecione um modúlo..</option>
			<option value="h">Ensino Médio</option>
			<option value="i"></option>
			<option value="j"></option>
		</select>


		</form>
	</body>
</html>