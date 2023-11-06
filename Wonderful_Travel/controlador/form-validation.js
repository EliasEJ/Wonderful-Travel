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
  canviDesti()
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
    alert('Selecciona una data vàlida. Els dies dilluns, dimecres i divendres estan deshabilitats.');
  }
}