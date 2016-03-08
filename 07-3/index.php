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


        $provisionedActivities = array("Specs", "Mugs", "Sausage rolls");

        foreach($provisionedActivities as $x) {
            print "<p>$x</p>";
        }

        $provisionedActivities[1] = "Hugs";
        unset($provisionedActivities[2]);

        foreach($provisionedActivities as $x) {
            print "<p>$x</p>";
        }

        for ($i = 1; $i < 30; $i++)
        {
            if (($i % 2 == 0) && ($i % 3 == 0) && ($i % 4 == 0)) {
                print "On the " . i . " of the month " . $provisionedActivities[0] . ", " . $provisionedActivities[1] . " and " . $provisionedActivities[2] . " are available";
            }
            else if (($i % 2 == 0) && ($i % 3 == 0)) {
                print "On the " . i . " of the month " . $provisionedActivities[0] . " and " . $provisionedActivities[1] . " are available";
            }
            else if (($i % 3 == 0) && ($i % 4 == 0)) {
                print "On the " . i . " of the month " . $provisionedActivities[1] . " and " . $provisionedActivities[2] . " are available";
            }
            else if (($i % 2 == 0) && ($i % 4 == 0)) {
                print "On the " . i . " of the month " . $provisionedActivities[0] . " and " . $provisionedActivities[2] . " are available";
            }
            else if ($i % 2 == 0) {
                print "On the " . i . " of the month " . $provisionedActivities[0] . " are available";
            }
            else if ($i % 3 == 0) {
                print "On the " . i . " of the month " . $provisionedActivities[1] . " are available";
            }
            else if ($i % 4 == 0) {
                print "On the " . i . " of the month " . $provisionedActivities[2] . " are available";
            }
            else {
                print "On the " . i . " of the month no products are available";
            }
            print "<br/>";
        }


        ?>
    </p>
</body>
</html>