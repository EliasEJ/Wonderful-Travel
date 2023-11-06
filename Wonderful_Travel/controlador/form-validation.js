// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

function myOnLoad() {
  canviDesti();
 }

 let desti;

function canviDesti(desti) {
  desti = document.getElementById("desti").value;
  let destiPais = document.getElementById("destiPais");
  let arrayEuropa = ['Espanya', 'Italia', 'França','Alemanya','Grècia','Portugal']
  let arrayAmerica = ['Estats Units', 'Canadà', 'Mèxic','Brasil','Argentina','Perú']
  let arrayAsia = ['Japó', 'Xina', 'Corea del Sud','Vietnam','Filipines','Tailàndia']
  let arrayAfrica = ['Marroc', 'Egipte', 'Tunísia','Senegal','Mali','Etiòpia']
  let arrayOceania = ['Austràlia', 'Nova Zelanda', 'Fiji','Samoa','Tonga','Micronèsia']

  switch(desti) {
    case 'nada':
      destiPais.innerHTML = '';
      break;

    case 'europa':
      destiPais.innerHTML = '';
      for (let i = 0; i < arrayEuropa.length; i++) {
        destiPais.innerHTML += '<option value="' + arrayEuropa[i] + '" id="pais">' + arrayEuropa[i] + '</option>';
      }
      break;
    case 'america':
      destiPais.innerHTML = '';
      for (let i = 0; i < arrayAmerica.length; i++) {
        destiPais.innerHTML += '<option value="' + arrayAmerica[i] + '" id="pais">' + arrayAmerica[i] + '</option>';
      }
      break;
    case 'asia':
      destiPais.innerHTML = '';
      for (let i = 0; i < arrayAsia.length; i++) {
        destiPais.innerHTML += '<option value="' + arrayAsia[i] + '" id="pais">' + arrayAsia[i] + '</option>';
      }
      break;
    case 'africa':
      destiPais.innerHTML = '';
      for (let i = 0; i < arrayAfrica.length; i++) {
        destiPais.innerHTML += '<option value="' + arrayAfrica[i] + '" id="pais">' + arrayAfrica[i] + '</option>';
      }
      break;
    case 'oceania':
      destiPais.innerHTML = '';
      for (let i = 0; i < arrayOceania.length; i++) {
        destiPais.innerHTML += '<option value="' + arrayOceania[i] + '" id="pais">' + arrayOceania[i] + '</option>';
      }
      break;
  }

}

function validarData() {
  let dataSeleccionada = document.getElementById('data').value;
  let data = new Date(dataSeleccionada);
  let diaSetmana = data.getDay();
  
  if(fecha < Date.now()) {
    document.getElementById('data').value = '';
    alert('Selecciona una data vàlida. No es pot seleccionar una data anterior a la data actual.');
  }

  if (diaSetmana === 1 || diaSetmana === 3 || diaSetmana === 5) {
    document.getElementById('data').value = '';
    alert('Selecciona una data vàlida. Els dies dilluns, dimecres i divendres no hi ha vols disponibles.');
  }
}

var canvas = document.getElementById("canvas_reloj");
var objdibujo = canvas.getContext("2d");
var radio = (canvas.height / 2);
objdibujo.translate(radio, radio);
radio = radio * 0.8;
setInterval(reloj_run, 1000); 

function reloj_run()
{
    frente_reloj	(objdibujo, radio);
    numeros_reloj	(objdibujo, radio);
    tiempo_reloj	(objdibujo, radio);
}

function frente_reloj(objdibujo, radio)
{
    var editarcolor;
    objdibujo.beginPath();
    objdibujo.arc(0,0,radio,0,2*Math.PI);
    objdibujo.fillStyle = "white";
    objdibujo.fill();
    editarcolor = objdibujo.createRadialGradient(0,0,radio*0.95, 0,0,radio*1.05);
    editarcolor.addColorStop(0.01, 'black');
    editarcolor.addColorStop(0.1, 'white');
	editarcolor.addColorStop(0.9, 'grey');
	editarcolor.addColorStop(0.3, 'black');
    objdibujo.strokeStyle = editarcolor;
    // objdibujo.lineWidth = radio*0.01;
	objdibujo.lineWidth = radio*0.1
    objdibujo.stroke(); 
    objdibujo.beginPath();
    objdibujo.arc(0,0, radio*0.1,0,2*Math.PI);
    objdibujo.fillStyle = 'black';
    objdibujo.fill();
}

function numeros_reloj(objdibujo, radio) {
    var angulox;
    var numerox;
    objdibujo.font = radio + "% arial";
    objdibujo.textBaseline = "middle";
    objdibujo.textAlign = "center";
    for(numerox=1; numerox < 13; numerox++)
	{ 
        angulox = numerox * Math.PI /6;
        objdibujo.rotate	(angulox);
        objdibujo.translate	(0, -radio*0.85);
        objdibujo.rotate	(-angulox);
        objdibujo.fillText	(numerox.toString(), 0, 0);
        objdibujo.rotate(angulox);
        objdibujo.translate(0, radio*0.85);
        objdibujo.rotate(-angulox);
    }
}

function tiempo_reloj(objdibujo, radio){
    var tiempo_actual = new Date();
    var hora = tiempo_actual.getHours();
    var minutos = tiempo_actual.getMinutes();
    var segundos = tiempo_actual.getSeconds();
    hora = hora%12;
    hora = (hora*Math.PI/6)+(minutos*Math.PI/(6*60))+(segundos*Math.PI/(360*60));
    manecillas_reloj(objdibujo, hora, radio*0.5, radio*0.05);
    minutos=(minutos*Math.PI/30)+(segundos*Math.PI/(30*60));
    manecillas_reloj(objdibujo, minutos, radio*0.7, radio*0.05);
    segundos=(segundos*Math.PI/30);
    manecillas_reloj(objdibujo, segundos, radio*0.9, radio*0.02);
}

function manecillas_reloj(objdibujo, a, b, ancho){
    objdibujo.beginPath();
    objdibujo.lineWidth = ancho;
    objdibujo.lineCap = "round";
    objdibujo.moveTo(0,0);
    objdibujo.rotate(a);
    objdibujo.lineTo(0, -b);
    objdibujo.stroke();
    objdibujo.rotate(-a);
}