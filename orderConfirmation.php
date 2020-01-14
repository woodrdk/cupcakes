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
    include("data.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcake Fundraiser Order Confirmation</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/jpg" href="images/cupcake.png">
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container" id="main">
    <div class="jumbotron bg-success" >
        <h1 class="display-4 font-weight-bold">GRC Cupcake fundraiser</h1>
        <p class="lead font-weight-bold text-right"> Project</p>
        <p class="lead font-weight-bold font-italic text-right">Rob</p>
        <hr class="my-2">
    </div>
    <div class="container">

    <?php
    // php code section
       // var_dump($_POST); // for testing what gets sent from the order form
        if(isset($_POST["name"]) && trim($_POST["name"]) != "") {
            $name = trim($_POST["name"]);
            $message = "Thank you, ".$name.", for your order!<br>";
        }
        else { // name field was not set
            $message = "Please insert a name for your order<br>";
        }

        $cupcakes = $_POST['cupcakes']; // the cupcakes chosen by the user
        // prints out thank you message to the user
        echo $message;
            //var_dump($order);
        if(sizeof($cupcakes) > 0){
            foreach($order as $key=>$value){
                foreach($cupcakes as $cups){
                    if($cups == $key){
                        echo  "<li>$value</li>";
                    }
                }
            }
        }
        else{
            echo "Please select a valid cupcake<br>";
        }


        // total variable initialization
        $total = 0.00;
        // cost of each cupcake
        $cost = 3.50;
        // calculates the total cost
        $total = $cost * sizeof($cupcakes);
        // formats the cost to $XX.XX
        $total = number_format((float)$total, 2, '.', '');
        // prints out the order total
        echo "<br>Order Total: $".$total;
    ?>
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