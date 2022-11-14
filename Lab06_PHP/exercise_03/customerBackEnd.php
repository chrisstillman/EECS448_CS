<html>
    <head>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
            $username = $_POST["user"];
            $password = $_POST["pass"];
            $option1 = $_POST["option1"];
            $option2 = $_POST["option2"];
            $option3 = $_POST["option3"];
            $shipping = $_POST["shipping"];
            $total = $option1*20+$option2*30+$option3*40;
            echo "<h3>Username: ".$username."</h3>";
            echo "<h3>You logged in with password: ".$password."</h3>";
        ?>
        <table>
            <tr class="header">
                <td></td>
                <td>Quantity</td>
                <td>Cost Per Unit</td>
                <td>Subtotal</td>
            </tr>
            <tr>
                <td>Short Sleeve Tee</td>
                <td><?php echo $option1;?></td>
                <td>$20</td>
                <td>$<?php echo $option1*20;?></td>
            </tr>
            <tr>
                <td>Long Sleeve Tee</td>
                <td><?php echo $option2;?></td>
                <td>$30</td>
                <td>$<?php echo $option2*30;?></td>
            </tr>
            <tr>
                <td>Hoodie</td>
                <td><?php echo $option3;?></td>
                <td>$40</td>
                <td>$<?php echo $option3*40;?></td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td colspan="2"><?php echo $shipping;?></td>
                <td>
                    <?php
                        if($shipping == "Standard") {
                            echo "$0";
                        } else if ($shipping == "Plus") {
                            echo "$5";
                            $total += 5;
                        } else if ($shipping == "Premium") {
                            echo "$50";
                            $total += 50;
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">Total Cost</td>
                <td>$<?php echo $total;?></td>
            </tr>
        </table>
    </body>
</html>