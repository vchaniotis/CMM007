<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <p>
        <?php
        echo "Hello World";
        echo "Hello," . " " . "world" . "!";
        echo 5 * 7;
        $myname = "Frodo Baggins";
        $myage = 111;
        echo "My name is " . $myname . " and I am " . $myage;

        $name = "Edgar";

        if ($name == "Simon") {
            print "I know you";
        }
        else {
            print "Who are you?";
        }

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