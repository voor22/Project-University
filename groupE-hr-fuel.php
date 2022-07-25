<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Phalanx Security Fuel Cost Calculation Results</title>
   <link rel="stylesheet" type="text/css" href="groupE-hr-style.css">              
</head>

<body>
    <div class="container">
        <?php
        $trip_length = $_POST['trip_length'];
        $avg_mpg = $_POST['avg_mpg'];
        $gas_cost = $_POST['gas_cost'];

        $travel_cost = "$".number_format(($trip_length / $avg_mpg) * $gas_cost, 2);

        print("
            <main><header><h1>Fuel Cost Calculation - Results".".</h1>
            <h2>The expected total cost of your travels is <span class="highlighter">$travel_cost</span>"."</h2></header>".
            "<br>".
            "<h2>Your calculation:</h2>".
            "<p>Your expected trip length (in miles): ".$trip_length." miles.</p>".
            "<p>The average MPG of your vehicle: ".$avg_mpg."</p>".
            "<p>The cost of gas $".number_format($gas_cost, 2)."</p>".
            "<p>All together: $travel_cost = ($trip_length / $avg_mpg) * $gas_cost</p>
              </main>");
    ?>

    <br /> 
    <footer class="fctr">
          <p><a href="groupE-hr-fuel.html" class="white">Back to input page</a></p>
          <p class="white">&copy;2022 by Group E</p>
        </footer>
      </div>
    </body>
</html>