<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form UI</title>
  <style>
    body {
      background-color: #ff5733;
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    h3 {
      margin-top: 30px;
    }

    .group {
      border: 1px solid #ccc;
      padding: 10px;
      margin-top: 10px;
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .btn-radio, .btn-checkbox {
      padding: 10px 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background: #fff;
      cursor: pointer;
      display: inline-block;
    }

    input[type="radio"],
    input[type="checkbox"] {
      display: none;
    }

    /* RADIO BUTTONS */
    input[type="radio"]:checked + .btn-radio {
      background-color: #ff5733;
      color: Black;
      border-color: #ff5733;
    }

    /* CHECKBOXES */
    input[type="checkbox"]:checked + .btn-checkbox {
      background-color: #ff5733;
      color: Black;
      border-color: #ff5733;
    }
    
  </style>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "input" ).checkboxradio();
  } );
  </script>
</head>
<body>
<h1>Checkbox and radio button widgets</h1>
  <h3>Radio Group</h3>
  <div>
    <label>Select a Location:</label>
    <div class="group">
      <label>
        <input type="radio" name="location" checked>
        <span class="btn-radio">New York</span>
      </label>
      <label>
        <input type="radio" name="location">
        <span class="btn-radio">Paris</span>
      </label>
      <label>
        <input type="radio" name="location">
        <span class="btn-radio">London</span>
      </label>
    </div>
  </div>

  <h3>Checkbox</h3>
  <div>
    <label>Hotel Ratings:</label>
    <div class="group">
      <label>
        <input type="checkbox">
        <span class="btn-checkbox">2 Star</span>
      </label>
      <label>
        <input type="checkbox">
        <span class="btn-checkbox">3 Star</span>
      </label>
      <label>
        <input type="checkbox">
        <span class="btn-checkbox">4 Star</span>
      </label>
      <label>
        <input type="checkbox">
        <span class="btn-checkbox">5 Star</span>
      </label>
    </div>
  </div>

  <h3>Checkbox nested in label</h3>
  <div>
    <label>Bed Type:</label>
    <div class="group">
      <label>
        <input type="checkbox">
        <span class="btn-checkbox">2 Double</span>
      </label>
      <label>
        <input type="checkbox">
        <span class="btn-checkbox">2 Queen</span>
      </label>
      <label>
        <input type="checkbox">
        <span class="btn-checkbox">1 Queen</span>
      </label>
      <label>
        <input type="checkbox">
        <span class="btn-checkbox">1 King</span>
      </label>
    </div>
  </div>

</body>
</html>
