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
  let arrayEuropa = ['Selecciona un pais', 'Espanya', 'Italia', 'França', 'Alemanya', 'Grècia', 'Portugal']
  let arrayAmerica = ['Selecciona un pais', 'Estats Units', 'Canadà', 'Mèxic', 'Brasil', 'Argentina', 'Perú']
  let arrayAsia = ['Selecciona un pais', 'Japó', 'Xina', 'Corea del Sud', 'Vietnam', 'Filipines', 'Tailàndia']
  let arrayAfrica = ['Selecciona un pais', 'Marroc', 'Egipte', 'Tunísia', 'Senegal', 'Mali', 'Etiòpia']
  let arrayOceania = ['Selecciona un pais', 'Austràlia', 'Nova Zelanda', 'Fiji', 'Samoa', 'Tonga', 'Micronèsia']

  switch (desti) {
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
  //Part 1
  let fecha = new Date();
  let any = fecha.getFullYear();
  let dia = fecha.getDate();
  let _mes = fecha.getMonth();
  _mes = _mes + 1;
  let mes = "";
  if (_mes < 10) {
    mes = "0" + _mes;
  } else {
    mes = _mes.toString;
  }

  let data_minimo = any + '-' + mes + '-' + dia;
  document.getElementById("dataReserva").setAttribute('min', data_minimo)
  /*
    //Part 2
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
  */
}

const deg = 6;
const hour = document.querySelector(".hour");
const min = document.querySelector(".min");
const sec = document.querySelector(".sec");

const setClock = () => {
  let day = new Date();
  let hh = day.getHours() * 30;
  let mm = day.getMinutes() * deg;
  let ss = day.getSeconds() * deg;

  hour.style.transform = `rotateZ(${hh + mm / 12}deg)`;
  min.style.transform = `rotateZ(${mm}deg)`;
  sec.style.transform = `rotateZ(${ss}deg)`;
};

// first time
setClock();
// Update every 1000 ms
setInterval(setClock, 1000);

const switchTheme = (evt) => {
  const switchBtn = evt.target;
  if (switchBtn.textContent.toLowerCase() === "light") {
    switchBtn.textContent = "dark";
    localStorage.setItem("theme", "dark");
    document.documentElement.setAttribute("data-theme", "dark");
  } else {
    switchBtn.textContent = "light";
    localStorage.setItem("theme", "light"); //add this
    document.documentElement.setAttribute("data-theme", "light");
  }
};

const switchModeBtn = document.querySelector(".switch-btn");
switchModeBtn.addEventListener("click", switchTheme, false);

let currentTheme = "dark";
currentTheme = localStorage.getItem("theme")
  ? localStorage.getItem("theme")
  : null;

if (currentTheme) {
  document.documentElement.setAttribute("data-theme", currentTheme);
  switchModeBtn.textContent = currentTheme;
}


// Theme switcher
document.getElementById('themeButton').addEventListener('click', function () {
  var body = document.body;
  var titles = document.getElementsByClassName('theme-title');
  var labels = document.getElementsByClassName('theme-label');
  if (body.classList.contains('bg-dark')) {
    body.classList.remove('bg-dark');
    body.classList.add('bg-light');
    localStorage.setItem('theme', 'light'); // Guarda el tema en localStorage
    for (var i = 0; i < titles.length; i++) {
      titles[i].style.color = 'black';
    }
    for (var i = 0; i < labels.length; i++) {
      labels[i].style.color = 'black';
    }
  } else {
    body.classList.remove('bg-light');
    body.classList.add('bg-dark');
    localStorage.setItem('theme', 'dark'); // Guarda el tema en localStorage
    for (var i = 0; i < titles.length; i++) {
      titles[i].style.color = 'white';
    }
    for (var i = 0; i < labels.length; i++) {
      labels[i].style.color = 'white';
    }
  }
});

window.onload = function () {
  var theme = localStorage.getItem('theme');
  if (theme) {
    var body = document.body;
    body.classList.add('bg-' + theme);
  }
};

function imatgePais(){
  let destiPais = document.getElementById("destiPais").value;
  let img = document.getElementById("imgDesti");

  if (destiData[destiPais]) {
    img.src = destiData[destiPais].imatge;
  }
}

function preuDesti(){
  let destiPais = document.getElementById("destiPais").value;
  let preu = document.getElementById("preu");

  if (destiData[destiPais]) {
    preu.value = destiData[destiPais].preu + ' €';
  }
}