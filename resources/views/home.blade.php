<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vehicle Marketplace</title>
    
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  </head>

  <body>

    <header>
      <h1>Vehicle Marketplace</h1>
      <nav>
        <ul>
            

          <li><a href="/buy/data">Buy</a></li>
          <li><a href="/sell">Sell</a></li>
          <li><a href="/">about us</a></li>
          <li><a href="/reg">Sign Up</a></li>
          <li><a href="/login">Sign In</a></li>
          <li><a href="/logout">logout</a></li>
          <li><a href="/sell">POST AN AD</a></li>
        </ul>
      </nav>
    </header>

    <section class="search-section">
      <h2>Find Your Vehicle</h2>
      <form>
        <input type="text" placeholder="Enter make, model, or type" />
        <button type="submit">Search</button>
      </form>
    </section>

   

        
      
       



    <h2>Featured Listings</h2>
    <section class="featured-listings">
      <div class="vehicle-listing">
      
        
        <h3>BMW</h3>
        
        <button>Show Details</button>
      </div>

      <div class="vehicle-listing">
        <img src="image/Honda.jpeg" alt="Honda" />
        <h3>Honda</h3>
        <p>Year: 2019 | Mileage: 8,000 miles | Price: 42,00000</p>
        <button>Show Details</button>
      </div>

      <div class="vehicle-listing">
        <img src="image/Yaris.jpeg" alt="Yaris" />
        <h3>Yaris</h3>
        <p>Year: 2021 | Mileage: 1,000 miles | Price: 47,00000</p>
        <button>Show Details</button>
      </div>

      <div class="vehicle-listing">
        <img src="image/Daihatsu.jpeg" alt="Daihatsu" />
        <h3>Daihatsu</h3>
        <p>Year: 2012 | Mileage: 2,000 miles | Price: 38,00000</p>
        <button>Show Details</button>
      </div>

      <div class="vehicle-listing">
        <img src="image/Honda City.jpeg" alt="Honda City" />
        <h3>Honda City</h3>
        <p>Year: 2020 | Mileage: 1500 miles | Price: 62,00000</p>
        <button>Show Details</button>
      </div>

      <div class="vehicle-listing">
        <img src="image/Honda City Aspire.jpeg" alt="Honda City Aspire" />
        <h3>Honda City Aspire</h3>
        <p>Year: 2018 | Mileage: 15,000 miles | Price: 47,00000</p>
        <button>Show Details</button>
      </div>
    </section>








    <section>
      <div class="container">
        <h2>New Cars Make by</h2>
        <div class="vehicle-model-0 list-unstyled item active clearfix">
          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Suzuki');"
                href="/new-cars/suzuki/"
                id="amk_suzuki"
                title="Suzuki Cars in Pakistan"
              >
                <img
                  alt="Suzuki"
                  height="65"
                  loading="lazy"
                  src="https://cache3.pakwheels.com/system/car_manufacturers/manufacturers/000/000/041/resized/Suzuki.png"
                />
                <h3 class="nomargin">Suzuki</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Toyota');"
                href="/new-cars/toyota/"
                id="amk_toyota"
                title="Toyota Cars in Pakistan"
              >
                <img
                  alt="Toyota"
                  height="65"
                  loading="lazy"
                  src="https://cache4.pakwheels.com/system/car_manufacturers/manufacturers/000/000/042/resized/Tyota.png"
                />
                <h3 class="nomargin">Toyota</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Honda');"
                href="/new-cars/honda/"
                id="amk_honda"
                title="Honda Cars in Pakistan"
              >
                <img
                  alt="Honda"
                  height="65"
                  loading="lazy"
                  src="https://cache2.pakwheels.com/system/car_manufacturers/manufacturers/000/000/014/resized/Honda.png"
                />
                <h3 class="nomargin">Honda</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'KIA');"
                href="/new-cars/kia/"
                id="amk_kia"
                title="KIA Cars in Pakistan"
              >
                <img
                  alt="KIA"
                  height="65"
                  loading="lazy"
                  src="https://cache3.pakwheels.com/system/car_manufacturers/manufacturers/000/000/021/resized/kia.png"
                />
                <h3 class="nomargin">KIA</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Hyundai');"
                href="/new-cars/hyundai/"
                id="amk_hyundai"
                title="Hyundai Cars in Pakistan"
              >
                <img
                  alt="Hyundai"
                  height="65"
                  loading="lazy"
                  src="https://cache3.pakwheels.com/system/car_manufacturers/manufacturers/000/000/016/resized/hyundai.png"
                />
                <h3 class="nomargin">Hyundai</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Changan');"
                href="/new-cars/changan/"
                id="amk_changan"
                title="Changan Cars in Pakistan"
              >
                <img
                  alt="Changan"
                  height="65"
                  loading="lazy"
                  src="https://cache3.pakwheels.com/system/car_manufacturers/manufacturers/000/000/068/resized/1.jpg"
                />
                <h3 class="nomargin">Changan</h3>
              </a>
            </li>
          </ul>
        </div>
        <div class="vehicle-model-1 list-unstyled item clearfix">
          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'MG');"
                href="/new-cars/mg/"
                id="amk_mg"
                title="MG Cars in Pakistan"
              >
                <img
                  alt="MG"
                  height="65"
                  loading="lazy"
                  src="https://cache1.pakwheels.com/system/car_manufacturers/manufacturers/000/000/060/resized/580b57fcd9996e24bc43c498.png"
                />
                <h3 class="nomargin">MG</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'BMW');"
                href="/new-cars/bmw/"
                id="amk_bmw"
                title="BMW Cars in Pakistan"
              >
                <img
                  alt="BMW"
                  height="65"
                  loading="lazy"
                  src="https://cache1.pakwheels.com/system/car_manufacturers/manufacturers/000/000/003/resized/BMW.png"
                />
                <h3 class="nomargin">BMW</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Audi');"
                href="/new-cars/audi/"
                id="amk_audi"
                title="Audi Cars in Pakistan"
              >
                <img
                  alt="Audi"
                  height="65"
                  loading="lazy"
                  src="https://cache4.pakwheels.com/system/car_manufacturers/manufacturers/000/000/053/resized/Audi.png"
                />
                <h3 class="nomargin">Audi</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Proton');"
                href="/new-cars/proton/"
                id="amk_proton"
                title="Proton Cars in Pakistan"
              >
                <img
                  alt="Proton"
                  height="65"
                  loading="lazy"
                  src="https://cache1.pakwheels.com/system/car_manufacturers/manufacturers/000/000/080/resized/proton-logo-png-for-website.png"
                />
                <h3 class="nomargin">Proton</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'United');"
                href="/new-cars/united/"
                id="amk_united"
                title="United Cars in Pakistan"
              >
                <img
                  alt="United"
                  height="65"
                  loading="lazy"
                  src="https://cache4.pakwheels.com/system/car_manufacturers/manufacturers/000/000/113/resized/United.png"
                />
                <h3 class="nomargin">United</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Porsche');"
                href="/new-cars/porsche/"
                id="amk_porsche"
                title="Porsche Cars in Pakistan"
              >
                <img
                  alt="Porsche"
                  height="65"
                  loading="lazy"
                  src="https://cache2.pakwheels.com/system/car_manufacturers/manufacturers/000/000/070/resized/porche.png"
                />
                <h3 class="nomargin">Porsche</h3>
              </a>
            </li>
          </ul>
        </div>
        <div class="vehicle-model-2 list-unstyled item clearfix">
          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Mercedes Benz');"
                href="/new-cars/mercedes-benz/"
                id="amk_mercedes-benz"
                title="Mercedes Benz Cars in Pakistan"
              >
                <img
                  alt="Mercedes Benz"
                  height="65"
                  loading="lazy"
                  src="https://cache2.pakwheels.com/system/car_manufacturers/manufacturers/000/000/027/resized/mercedes.png"
                />
                <h3 class="nomargin">Mercedes Benz</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Prince');"
                href="/new-cars/prince/"
                id="amk_prince"
                title="Prince Cars in Pakistan"
              >
                <img
                  alt="Prince"
                  height="65"
                  loading="lazy"
                  src="https://cache4.pakwheels.com/system/car_manufacturers/manufacturers/000/000/115/resized/prince.png"
                />
                <h3 class="nomargin">Prince</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'DFSK');"
                href="/new-cars/dfsk/"
                id="amk_dfsk"
                title="DFSK Cars in Pakistan"
              >
                <img
                  alt="DFSK"
                  height="65"
                  loading="lazy"
                  src="https://cache3.pakwheels.com/system/car_manufacturers/manufacturers/000/000/102/resized/DFSK.png"
                />
                <h3 class="nomargin">DFSK</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Isuzu');"
                href="/new-cars/isuzu/"
                id="amk_isuzu"
                title="Isuzu Cars in Pakistan"
              >
                <img
                  alt="Isuzu"
                  height="65"
                  loading="lazy"
                  src="https://cache4.pakwheels.com/system/car_manufacturers/manufacturers/000/000/018/resized/Isuzu.png"
                />
                <h3 class="nomargin">Isuzu</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'FAW');"
                href="/new-cars/faw/"
                id="amk_faw"
                title="FAW Cars in Pakistan"
              >
                <img
                  alt="FAW"
                  height="65"
                  loading="lazy"
                  src="https://cache4.pakwheels.com/system/car_manufacturers/manufacturers/000/000/093/resized/FAW.png"
                />
                <h3 class="nomargin">FAW</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Haval');"
                href="/new-cars/haval/"
                id="amk_haval"
                title="Haval Cars in Pakistan"
              >
                <img
                  alt="Haval"
                  height="65"
                  loading="lazy"
                  src="https://cache1.pakwheels.com/system/car_manufacturers/manufacturers/000/000/121/resized/haval-logo-for-website.png"
                />
                <h3 class="nomargin">Haval</h3>
              </a>
            </li>
          </ul>
        </div>
        <div class="vehicle-model-3 list-unstyled item clearfix">
          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'BAIC');"
                href="/new-cars/baic/"
                id="amk_baic"
                title="BAIC Cars in Pakistan"
              >
                <img
                  alt="BAIC"
                  height="65"
                  loading="lazy"
                  src="https://cache4.pakwheels.com/system/car_manufacturers/manufacturers/000/000/120/resized/baic.png"
                />
                <h3 class="nomargin">BAIC</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Peugeot');"
                href="/new-cars/peugeot/"
                id="amk_peugeot"
                title="Peugeot Cars in Pakistan"
              >
                <img
                  alt="Peugeot"
                  height="65"
                  loading="lazy"
                  src="https://cache1.pakwheels.com/system/car_manufacturers/manufacturers/000/000/032/resized/peugeot.png"
                />
                <h3 class="nomargin">Peugeot</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'JW Forland');"
                href="/new-cars/jw-forland/"
                id="amk_jw-forland"
                title="JW Forland Cars in Pakistan"
              >
                <img
                  alt="JW Forland"
                  height="65"
                  loading="lazy"
                  src="https://cache2.pakwheels.com/system/car_manufacturers/manufacturers/000/000/112/resized/JW-Forland.png"
                />
                <h3 class="nomargin">JW Forland</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Chery');"
                href="/new-cars/chery/"
                id="amk_chery"
                title="Chery Cars in Pakistan"
              >
                <img
                  alt="Chery"
                  height="65"
                  loading="lazy"
                  src="https://cache3.pakwheels.com/system/car_manufacturers/manufacturers/000/000/069/resized/car-logos_chery.png"
                />
                <h3 class="nomargin">Chery</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'JMC');"
                href="/new-cars/jmc/"
                id="amk_jmc"
                title="JMC Cars in Pakistan"
              >
                <img
                  alt="JMC"
                  height="65"
                  loading="lazy"
                  src="https://cache1.pakwheels.com/system/car_manufacturers/manufacturers/000/000/114/resized/JMC.png"
                />
                <h3 class="nomargin">JMC</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'Daehan');"
                href="/new-cars/daehan/"
                id="amk_daehan"
                title="Daehan Cars in Pakistan"
              >
                <img
                  alt="Daehan"
                  height="65"
                  loading="lazy"
                  src="https://cache4.pakwheels.com/system/car_manufacturers/manufacturers/000/000/111/resized/Daehan.png"
                />
                <h3 class="nomargin">Daehan</h3>
              </a>
            </li>
          </ul>
        </div>
        <div class="vehicle-model-4 list-unstyled item clearfix">
          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a
                onclick="trackEvents('NewCars', 'Makes - FromHome', 'GUGU ');"
                href="/new-cars/gugu/"
                id="amk_gugu"
                title="GUGU  Cars in Pakistan"
              >
                <img
                  alt="GUGU "
                  height="65"
                  loading="lazy"
                  src="https://cache4.pakwheels.com/system/car_manufacturers/manufacturers/000/000/126/resized/White-Base-PS.jpg"
                />
                <h3 class="nomargin">GUGU</h3>
              </a>
            </li>
          </ul>

          <ul class="make-list col-sm-2 list-unstyled new-car-list">
            <li class="heading">
              <a id="amk_seres" title="Seres Cars in Pakistan">
                <img
                  alt="Seres"
                  height="65"
                  loading="lazy"
                  src="https://www.pakwheels.com/colored-wheel.png"
                />
                <h3 class="nomargin">Seres</h3>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <br /><br /><br /><br /><br />
    <footer>
      <p>&copy; 2023 Vehicle Marketplace</p>
    </footer>

    <script src="./Javascript/script.js"></script>
  </body>
</html>

























 <!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Selling Website</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  </head>
  <style>
      .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
  </style>

  <body>
    <header>
      <h1>Vehicle Marketplace</h1>
      <nav>
        <ul>
            
          <li><a href="/home.html">Home</a></li>
          <li><a href="#">Buy</a></li>
          <li><a href="#">Sell</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="/reg">Sign Up</a></li>
          <li><a href="/login">Sign In</a></li>
          <li><a href="/logout">logout</a></li>
        </ul>
      </nav>
    </header>

    <section class="search-section">
      <h2>Find Your Vehicle</h2>
      <form>
        <input type="text" placeholder="Enter make, model, or type" />
        <button type="submit">Search</button>
      </form>
    </section>
      
    <h2>Featured Listings</h2>
    <section class="featured-listings">
      <div class="vehicle-listing">
        <img src="image/BMW.jpeg" alt="BMW" />
        <h3>BMW</h3>
        <button onclick="showDetails('BMW')">Show Details</button>
      </div>

      <div class="vehicle-listing">
        <img src="image/Honda.jpeg" alt="Honda" />
        <h3>Honda</h3>
        <button onclick="showDetails('Honda')">Show Details</button>
      </div>

      <div class="vehicle-listing">
        <img src="image/Yaris.jpeg" alt="Yaris" />
        <h3>Yaris</h3>
        <button onclick="showDetails('Yaris')">Show Details</button>
      </div>

      <div class="vehicle-listing">
        <img src="image/Daihatsu.jpeg" alt="Daihatsu" />
        <h3>Daihatsu</h3>
        <button onclick="showDetails('Daihatsu')">Show Details</button>
      </div>

      <div class="vehicle-listing">
        <img src="image/Honda City.jpeg" alt="Honda City" />
        <h3>Honda City</h3>
        <button onclick="showDetails('Honda City')">Show Details</button>
      </div>

      <div class="vehicle-listing">
        <img src="image/Honda City Aspire.jpeg" alt="Honda City Aspire" />
        <h3>Honda City Aspire</h3>
        <button onclick="showDetails('Honda City Aspire')">Show Details</button>
      </div>
    </section>


    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="hideDetails()">&times;</span>
            <h2 id="modal-title"></h2>
            <p id="modal-details"></p>
        </div>
    </div>
    
    <br /><br /><br /><br /><br />
    <footer>
      <p>&copy; 2023 Vehicle Marketplace</p>
    </footer>
      
    <script>
        
        function showDetails(vehicle) {
            var details = getDetailsForVehicle(vehicle);

            
            document.getElementById('modal-title').innerText = vehicle;
            document.getElementById('modal-details').innerText = details;
            
            document.getElementById('modal').style.display = 'block';
        }

        function hideDetails() {
            document.getElementById('modal').style.display = 'none';
        }
        
        function getDetailsForVehicle(vehicle) {
            switch (vehicle) {
                case 'BMW':
                    return 'Year: 2008 \n Mileage: 500 miles \n Price: 80,00000';
                case 'Honda':
                    return 'Year: 2019 \n Mileage: 8,000 miles \n Price: 42,00000';
                case 'Yaris':
                    return 'Year: 2021 \n Mileage: 1,000 miles \n Price: 47,00000';
                case 'Daihatsu':
                    return 'Year: 2012 \n Mileage: 2,000 miles \n Price: 38,00000';
                case 'Honda City':
                    return 'Year: 2020 \n Mileage: 1500 miles \n Price: 62,00000';
                case 'Honda City Aspire':
                    return 'Year: 2018 \n Mileage: 15,000 miles \n Price: 47,00000';
                default:
                    return 'Details not available.';
            }
        }
    </script>


  </body>
</html> -->