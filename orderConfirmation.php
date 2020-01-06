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
        //var_dump($_POST);
        $name = $_POST['name'];
        $order = array(
                 "grasshopper" => "The Grasshopper",
                 "maple" => "Whiskey Maple Bacon",
                 "carrot" => "Carrot Walnut",
                 "caramel" => "Salted Caramel Cupcake",
                 "velvet" => "Red Velvet",
                 "lemon" => "Lemon Drop",
                 "tiramisu" => "Tiramisu"
              );

        echo "Thank you, ".$name.", for your order!<br>";
        echo "Order Summary:<br>";
        // write loop to show whats in array that was choosen for cupcake order
        foreach($order as $key=>$value){
            echo "<input type='checkbox' name='$key' value='$key'>$value<br>";
        }
        $total = 0.00;
        $cost = 3.50;
        $total = $cost * sizeof($order);

        echo "Order Total: $".$total;



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