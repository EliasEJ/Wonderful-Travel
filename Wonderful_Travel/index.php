<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Wonderful Travel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="estils/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="estils/form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <script>
      // for time;
      const deg = 6; 
      // 360 / (12 * 5);

      const hr = document.querySelector('#hr');
      const mn = document.querySelector('#mn');
      const sc = document.querySelector('#sc');

      setInterval(() => {
          
          let day = new Date();
          let hh = day.getHours() * 30;
          let mm = day.getMinutes() * deg;
          let ss = day.getSeconds() * deg;
          let msec = day.getMilliseconds();
          
          // VERY IMPORTANT STEP:
          
          hr.style.transform = `rotateZ(${(hh) + (mm / 12)}deg)`;
          mn.style.transform = `rotateZ(${mm}deg)`;
          sc.style.transform = `rotateZ(${ss}deg)`;
          
          // gives the smooth transitioning effect, but there's a bug here!
          // sc.style.transition = `1s`;

      })
      </script>
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Wonderful Travel</h2>
    </div>

    <div class="clock">

      <div class="hour">
          <div class="hr" id="hr" style="transform: rotateZ(447deg);">

          </div>
      </div>

      <div class="min">
          <div class="mn" id="mn" style="transform: rotateZ(324deg);">

          </div>
      </div>

      <div class="sec">
          <div class="sc" id="sc" style="transform: rotateZ(276deg);">

          </div>
      </div>

  </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Product name</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Second product</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Third item</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">−$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$20</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Dades del viatge</h4>

        <!-- Formulari principal dades viatge. -->
        <form class="needs-validation" novalidate>

          <div class="row g-3">
            <div class="col-sm-6">
              <label for="data" class="form-label">Data</label>
              <input type="date" class="form-control" id="data" value="" required oninput="validarData()">
            </div>
            
            <div class="col-md-5">
              <label for="destiLabel" class="form-label">Desti</label>
              <select class="form-select" id="desti" required onchange="canviDesti()">
                <option value="nada">Selecciona desti</option>
                <option value="europa">Europa</option>
                <option value="asia">Asia</option>
                <option value="america">Amèrica</option>
                <option value="africa">Àfrica</option>
                <option value="oceania">Oceania</option>
              </select>
              </div>

              <div class="col-md-5">
                <label for="destiPaisLabel" class="form-label"><br></label>
                <select class="form-select" id="destiPais" required>
                </select>
              </div>

              <div class="col-md-5">
                <label for="imgDesti" class="form-label"><br></label>
                <?php ?>
              </div>
            </div>

            <div class="col-sm-6">
              <label for="preu" class="form-label">Preu</label>
              <input type="text" class="form-control" id="preu" placeholder="" value="" disabled>
            </div>

            <br>

            <div class="col-sm-6">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" placeholder="" value="" required>
            </div>

            <br>

            <div class="col-12">
              <label for="telf" class="form-label">Telèfon</label>
              <input type="tel" class="form-control" id="telf" placeholder="" required>
            </div>

            <br>

            <div class="col-12">
              <label for="numPersones" class="form-label">Persones</label>
              <input type="number" class="form-control" id="numPersones" placeholder="" required>
            </div>
            <br>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="descompte">
            <label class="form-check-label" for="descompte">Descompte 20%</label>
          </div>
          <br>
          <button class="w-100 btn btn-primary btn-lg" type="submit">Afegir</button>
          <hr class="my-4">
        </form>


      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">

  </footer>
</div>

      <script src="controlador/form-validation.js"></script>
  </body>
</html>