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
        //unset($provisionedActivities[2]);

        foreach($provisionedActivities as $x) {
            print "<p>$x</p>";
        }

        for ($i = 1; $i < 31; $i++)
        {
            if (($i % 2 == 0) && ($i % 3 == 0) && ($i % 4 == 0)) {
                print "On the " . $i . " of the month " . $provisionedActivities[0] . ", " . $provisionedActivities[1] . " and " . $provisionedActivities[2] . " are available";
            }
            else if (($i % 2 == 0) && ($i % 3 == 0)) {
                print "On the " . $i . " of the month " . $provisionedActivities[0] . " and " . $provisionedActivities[1] . " are available";
            }
            else if (($i % 3 == 0) && ($i % 4 == 0)) {
                print "On the " . $i . " of the month " . $provisionedActivities[1] . " and " . $provisionedActivities[2] . " are available";
            }
            else if (($i % 2 == 0) && ($i % 4 == 0)) {
                print "On the " . $i . " of the month " . $provisionedActivities[0] . " and " . $provisionedActivities[2] . " are available";
            }
            else if ($i % 2 == 0) {
                print "On the " . $i . " of the month " . $provisionedActivities[0] . " are available";
            }
            else if ($i % 3 == 0) {
                print "On the " . $i . " of the month " . $provisionedActivities[1] . " are available";
            }
            else if ($i % 4 == 0) {
                print "On the " . $i . " of the month " . $provisionedActivities[2] . " are available";
            }
            else {
                print "On the " . $i . " of the month no products are available";
            }
            print "<br/>";
        }


        print "<br/>";
        print "<br/>";
        print "<br/>";

        $specs = 8;
        $mugs = 8;
        $sausage = 8;
        $j = 1;
        while ($j < 31) {
            if ($specs > 0 && $mugs > 0 && $sausage > 0) {
                $todaysGood = rand(0, 2);
                if ($todaysGood == 0) {
                    $specs--;
                }
                if ($todaysGood == 1) {
                    $mugs--;
                }
                if ($todaysGood == 2) {
                    $sausage--;
                }

                if (($specs != 0) && ($mugs != 0) && ($sausage != 0)) {
                    print "On the " . $j . " of the month " . $provisionedActivities[$todaysGood] . " are available";
                } else {
                    print "No more goods are available this month";
                }
                print "<br/>";

            }
            $j++;
        }

        print "<br/>";
        print "<br/>";
        print "<br/>";

        $myname = "David";
        print strlen($myname);
        print "<br/>";
        print substr($myname, 0, 4);
        print "<br/>";
        print strtoupper($myname);
        print "<br/>";
        print strtolower($myname);
        print "<br/>";
        print strpos($myname, "v");
        print "<br/>";
        print round(4.62);
        print "<br/>";
        print round(M_PI, 4);
        print "<br/>";
        print rand();
        print "<br/>";
        print rand(1, 10);
        print "<br/>";

        print "<br/>";
        print "<br/>";
        print "<br/>";

        $fav_bands = array();
        array_push($fav_bands, "Katy Perry");
        array_push($fav_bands, "The Peapods");
        array_push($fav_bands, "Nickelback");

        print count($fav_bands);
        print "<br/>";
        sort($fav_bands);
        print join(", ", $fav_bands);
        print "<br/>";
        rsort($fav_bands);
        print join(", ", $fav_bands);
        print "<br/>";
        print "<br/>";

        $people = array();
        array_push($people, "a");
        array_push($people, "b");
        array_push($people, "c");
        array_push($people, "d");
        array_push($people, "e");
        array_push($people, "f");
        array_push($people, "g");
        array_push($people, "h");
        array_push($people, "i");
        array_push($people, "j");
        array_push($people, "k");
        array_push($people, "l");
        sort($people);
        $winner = rand(0, count($people));
        print "And the person who wins all the specs iiiiiissssss *drums playing in the background* " . strtoupper($people[$winner]) . "!!!";
        unset($people[$winner]);
        print "<br/>";
        $winner = rand(0, count($people));
        print "And the person who wins all the mugs iiiiiissssss *drums playing in the background* " . strtoupper($people[$winner]) . "!!!";
        unset($people[$winner]);
        print "<br/>";
        $winner = rand(0, count($people));
        print "And the person who wins all the sausage rolls iiiiiissssss *drums playing in the background* " . strtoupper($people[$winner]) . "!!!";

        print "<br/>";
        print "<br/>";
        print "<br/>";


        function squareValue($number) {
            echo $number * $number;
        }

        $n = 6;
        squareValue($n);
        print "<br/>";

        function cleanUp($name, $num_specs, $num_mugs, $num_sausages) {
            echo "Wanted: " . "<b>" . $name . "</b>" . "<br/>" . "Known to be in possession of the following items:" . "<br/>" . "Specs " . $num_specs . "<br/>" . "Mugs " . $num_mugs . "<br/>" . "Sausage Rolls " . $num_sausages . "<br/>" . "Award for capture: " . (5 * (($num_specs * $num_mugs * $num_sausages) * ($num_specs * $num_mugs * $num_sausages)));
        }

        print "<br/>";
        cleanUp("Vasilis", 3, 4, 5);
        print "<br/>";
        print "<br/>";
        cleanUp("Viky", 2, 1, 1);
        print "<br/>";
        print "<br/>";
        cleanUp("John", 1, 0, 3);


        ?>
    </p>
</body>
</html>