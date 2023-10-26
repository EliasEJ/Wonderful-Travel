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


function canviDesti(desti) {
  var desti = document.getElementById("desti").value;
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
        destiPais.innerHTML += '<option value="' + arrayEuropa[i] + '">' + arrayEuropa[i] + '</option>';
      }
      break;
    case 'america':
      destiPais.innerHTML = '';
      for (let i = 0; i < arrayAmerica.length; i++) {
        destiPais.innerHTML += '<option value="' + arrayAmerica[i] + '">' + arrayAmerica[i] + '</option>';
      }
      break;
    case 'asia':
      destiPais.innerHTML = '';
      for (let i = 0; i < arrayAsia.length; i++) {
        destiPais.innerHTML += '<option value="' + arrayAsia[i] + '">' + arrayAsia[i] + '</option>';
      }
      break;
    case 'africa':
      destiPais.innerHTML = '';
      for (let i = 0; i < arrayAfrica.length; i++) {
        destiPais.innerHTML += '<option value="' + arrayAfrica[i] + '">' + arrayAfrica[i] + '</option>';
      }
      break;
    case 'oceania':
      destiPais.innerHTML = '';
      for (let i = 0; i < arrayOceania.length; i++) {
        destiPais.innerHTML += '<option value="' + arrayOceania[i] + '">' + arrayOceania[i] + '</option>';
      }
      break;
  }

}
