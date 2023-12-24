<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Selling Website</title>
    <!-- <link rel="stylesheet" href="./CSS/styles.css" /> -->
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

    <!-- Modal for displaying details -->
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

    <script src="./Javascript/script.js"></script>
  </body>
</html>
