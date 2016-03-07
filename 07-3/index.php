<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <p>
        <?php
        $myname = "Vasilis";
        $myage = 11;

        if ($myage > 16) {
            echo "You can buy specs!";
        }
        else if ($myage > 18) {
            echo "You can buy specs and mugs!";
        }
        else if ($myage > 21) {
            echo "You can buy specs, mugs and sausage rolls!";
        }
        ?>
    </p>
</body>
</html>