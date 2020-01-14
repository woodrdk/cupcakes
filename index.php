<?php
/*
  * Rob Wood
  * 1/13/2020
  * This is a PHP Review Assignment: Cupcakes
  * This is a webpage to fake order some cupcakes. User can input their name and click on the flavors
  * that they want to order and will show a confirmation page of the order and the cost of the order
  * when they submit the order.
  * http://rwood.greenriverdev.com/328/cupcakes/index.php
  * https://github.com/woodrdk/cupcakes
  */
// code to include the data.php file so that the assoc array of the cupcake flavors is available
include("data.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcake Fundraiser Order Form</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/jpg" href="images/cupcake.png">
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container" id="main">
    <div class="jumbotron bg-success" >
        <h1 class="display-4 font-weight-bold">Cupcake fundraiser</h1>
        <p class="lead font-weight-bold text-right"> GRC </p>
        <p class="lead font-weight-bold font-italic text-right">Rob</p>
        <hr class="my-2">
    </div>
    <div class="container">
        <div>
            <form id="order-form" action="orderConfirmation.php" method="post">
                <fieldset class="form-group">
                    <div class="row">
                        <div class="form-group">
                            <label for="name">
                            <span class="font-weight-bold">Your Name</span>
                           <!-- <span class="req">*</span>
                            <span class="err" id="err-name"> Please enter a first name </span>-->
                            </label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Please input your name">

                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <span class="font-weight-bold">Cupcake Flavors:</span> <br>
                            <?php
                            // php code section
                            // foreach loop to print out in a checkbox format the cupcake flavors from the
                            // associative array in data.php
                            foreach($order as $key=>$value){
                                // echo "<input type='checkbox' name='$key' value='$key'> $value<br>";
                                echo "<div class='form-check'>
                                <input class='form-check-input' type='checkbox' value='$key' id='$key' name='cupcakes[]' >
                                <label class='form-check-label' for='$key'>
                                $value
                                </label>
                             
                            </div>";
                            }
                            ?>
                        </div>
                    </div>
                </fieldset>

                <button id="submit" type="submit" class="btn btn-primary "> Order</button>
<!--                <input type="submit" value="Order" class="btn btn-primary">-->
            </form>
        </div>
    </div>
</div>

<!-- jQuery first, then Popper, then Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>

</script>
</body>
</html>