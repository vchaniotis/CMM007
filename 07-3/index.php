<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <p>
        <?php
        $myname = "Vasilis";
        $myage = 19;

        if ($myage > 16) {
            echo "You can buy specs!";
        }
        else if ($myage > 18) {
            echo "You can buy specs and mugs!";
        }
        else if ($myage > 21) {
            echo "You can buy specs, mugs and sausage rolls!";
        }

        $wantedgood = "specs";

        switch ($wantedgood) {
            case "specs":
                echo "You have to be at least 16 to buy specs";
                break;
            case "mugs":
                echo "You have to be at least 18 to buy mugs";
                break;
            case "sausage rolls":
                echo "You have to be at least 21 to buy sausage rolls";
                break;
            default:
                echo "You cannot buy anything";
        }
        ?>
    </p>
</body>
</html>