//globals 
var step = 1;
var inputs = [];
var placeholders = [];
//var overlayOpacity = 0;

//functions

function formValidate(id){
	for(let i=0; i<inputs.length; i++){
		if(inputs[i].parentNode.getAttribute("id") == "step"+id.toString()){
			if(inputs[i].value == ""){
				return false;
			}
		}
	}
	return true;
}

function fadeAnimate(id, direction=1 | -1){
	document.getElementById("step"+id.toString()).style.color = "rgba(255,255,255,"+overlayOpacity.toString()+")";
	overlayOpacity = overlayOpacity + 0.1 * direction;
	//fonction non finie - c'était pout faire un overlay permettant des transitions fluides entre étapes
	
}

function updateSteps(id) {
	if(formValidate(id-1)){
		let steps = document.getElementsByClassName("step");
		
		//window.setInterval(fadeAnimate(id, 1),50);
		
		for(let i=0; i<steps.length; i++){
			steps[i].style.display = "none";
		}
		document.getElementById("step"+id.toString()).style.display = "flex";
		document.getElementById("warning1").style.color = "rgba(0,0,0,0)";
		
	} else {
		document.getElementById("warning1").style.color = "red";
	}
}

function setEventListeners(){	
	for(let i=0; i<inputs.length; i++){		
		inputs[i].addEventListener('focus', function() {
			placeholders[i].style.color = "rgba(0, 0, 0, 0)";
		})
				
		inputs[i].addEventListener('blur', function() {
			if(inputs[i].value==""){
				placeholders[i].style.color = "rgba(0, 0, 0, 0.5)";
			}
		})
	}
}

function setInputs(){
	let inputList = document.getElementsByClassName("inp");
	let decrement = 0;
	let limit = inputList.length;
	
	for(let i=0; i<limit; i++){
		if(inputList[0].getAttribute("type")){
			inputs.push(document.getElementById("inp"+(i+1-decrement).toString()));
			placeholders.push(document.getElementById("pla"+(i+1-decrement).toString()));
		} else {
			decrement++;
			limit++;
		}
	}
}

function initValues(){
	for(let i=0; i<inputs.length; i++){
		inputs[i].value="";
	}
}