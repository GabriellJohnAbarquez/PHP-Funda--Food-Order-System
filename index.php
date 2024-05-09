<!DOCTYPE html>
<html>
    <head>
        <title>Food Order System</title>
    </head>
<body>
    <h2>Welcome to Fistac's Snack Stop!</h2>
    <form method="post" action="">
        <label>Snack 1: French Fries</label>
        <label>Price: &#8369;25</label><br><br>

        <label>Snack 2: Cheese Sticks</label>
        <label>Price: &#8369;15</label><br><br>

        <label>Snack 3: Potato wedges</label>
        <label>Price: &#8369;30</label><br><br>

        <label for="quantity1">Quantity of Food 1:</label>
        <input type="number" id="quantity1" name="quantity1" min="0" required><br><br>

        <label for="quantity2">Quantity of Food 2:</label>
        <input type="number" id="quantity2" name="quantity2" min="0" required><br><br>
        
        <label for="quantity1">Quantity of Food 3:</label>
        <input type="number" id="quantity3" name="quantity3" min="0" required><br><br>

        <label for="cash">Amount of Cash:</label>
        <input type="number" id="cash" name="cash" required><br><br>

        <input type="submit" name="submit" value="Submit Order">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $quantity1 = $_POST['quantity1'];
        $quantity2 = $_POST['quantity2'];
        $quantity3 = $_POST['quantity3'];
        $price1 = 25;
        $price2 = 15;
        $price3 = 30;
        $cash = $_POST['cash'];

        $total_cost = ($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3);
        $change = $cash - $total_cost;

        echo"<h3>Receipt:</h3>";
        echo"Total Cost: &#8369;". $total_cost. "<br>";
        if ($change >= 0){
            echo"Change: &#8369;". $change;
        }else{
            echo"Insufficient cash, Please pay the exact amount.";
        
        }
        }
        ?>
</body>
</html>

    