<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
    </header>
    <main>
        <div class="container">
            <h1> Car sale listing!</h1>
            <div class="inline-left-block">
                <h2>Please fill in your personal details below.</h2>
                <form method="POST" action="assessment.php">
                    <input type="text" placeholder="First Name..." data-cy="first_name" name="first_name">
                    <input type="text" placeholder="Last Name..." data-cy="last_name" name="last_name">
                    <input type="email" placeholder="E-mail..." data-cy="email" name="email">
                    <input type="tel" placeholder="Contact Number..." data-cy="mobile_num" name="phone_no">
                    <input class="wide-input" type="text" placeholder="Address..." data-cy="address" name="address">
                    <input class="wide-input" type="password" placeholder="A password for no particular reason..." data-cy="password" name="password">
                    <textarea class="long-input" type="text" placeholder="Reason for sale..." data-cy="sale_reason" name="sale"></textarea>

                    <h2>Contact Us!</h2>
                    <p>
                        123 Main Street,<br>
                        Edinburgh, EH11HE,<br>
                        Scotland<br>
                        Call Us: +44123456789<br>
                        Open from Monday to Friday 09:00 am - 16:00 am.
                    </p>
            </div>
            <div class="inline-right-block">
                <h2 class="h2-right">Please fill your car's details.</h2>


                <input type="number" placeholder="Year..." data-cy="year" name="year">
                <input type="number" placeholder="Mileage..." data-cy="mileage" name="mileage">
                <label for="cars">Choose type:</label>
                <select name="cars" id="cars">
                    <option data-cy="automatic" value="Automatic" name="automatic">Automatic</option>
                    <option data-cy="manual" value="manual" name="manual">Manual</option>
                    <option data-cy="hybrid" value="hybrid" name="hybrid">Hybrid</option>

                </select>
                <input class="wide-input" type="text" placeholder="Make (and model)" data-cy="make" name="make">
                <h4>Please choose the specs of your car.</h4>
                <label>Convertible
                    <input data-cy="convertible" name="extra" value="convertible" type="checkbox">
                </label>
                <label>Tempomat
                    <input data-cy="tempomat" name="extra" value="tempomat" type="checkbox">
                </label>
                <label>Electric windows
                    <input data-cy="electric_windows" name="extra" value="electric-windows" type="checkbox">
                </label>

                <button type="submit" data-cy="submit" value="submit">
                    Submit
                </button>
                </form>
                <table>
                    <?php


                    foreach ($_POST as $key => $value) {
                        echo "<tr>";
                        echo "<td>";
                        echo $key . ":";
                        echo "</td>";
                        echo "<td>";
                        echo $value;
                        echo "</td>";
                        echo "</tr>";
                    }


                    ?>
                </table>
            </div>


        </div>
    </main>
</body>

</html>