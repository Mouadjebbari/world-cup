<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg " style="background-color: #8C1B2F;">
            <div class="container-fluid">
                <img src="imgg/logo.png" alt="" srcset="" style="width: 10%; margin-bottom: 20px; margin-right: 50px" />
            </div>
        </nav>
    </header>


    <form action="page1.php" method="POST">

        <div class="container w-75  text-center mt-5">
            <div class="row" id="border">
                <div class="col test">23 NOV-11:00H</div>
                <div class="col " id="final">final</div>
                <div class="col ">Match 9</div>
            </div>
            <div class="row">

                <div class="col ">
                    <img src="imgg/morocco.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
                    <span style="padding-left:20px">Morocco</span>
                </div>
                <div class="col  d-flex justify-content-around align-items-center" style="background-color: #0e0549;">

                    <input type="text" name="note1" value="<?php echo isset($_POST['note1']) ? $_POST['note1'] : '0'; ?>" style="width: 15%; height:6vh ; ">-
                    <input type="text" name="note2" value="<?php echo isset($_POST['note2']) ? $_POST['note2'] : '0'; ?>" style="width: 15%; height:6vh ;  ">


                </div>
                <div class="col ">
                    <img src="imgg/croitia.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
                    <span style="padding-left:20px">Croatia</span>
                </div>
            </div>
        </div>

        <div class="container w-75  text-center mt-3">
            <div class="row" id="border">
                <div class="col test">23 NOV-20:00H</div>
                <div class="col " id="final">final</div>
                <div class="col ">Match 12</div>
            </div>
            <div class="row">
                <div class="col ">
                    <img src="imgg/belgium.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
                    <span style="padding-left:20px">Belgium</span>
                </div>
                <div class="col d-flex  justify-content-around align-items-center" style="background-color: #0e0549;">

                    <input type="text" name="note3" id="note3" value="<?php echo isset($_POST['note3']) ? $_POST['note3'] : '0'; ?>" style="width: 15%; height:6vh ;">-
                    <input type="text" name="note4" id="note4" value="<?php echo isset($_POST['note4']) ? $_POST['note4'] : '0'; ?>" style="width: 15%; height:6vh ;">
                </div>
                <div class="col">
                    <img src="imgg/canada.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
                    <span style="padding-left:20px">Canada</span>
                </div>
            </div>
        </div>

        <div class="container w-75 text-center mt-3">
            <div class="row" id="border">
                <div class="col test">27 NOV-14:00H</div>
                <div class="col " id="final">final</div>
                <div class="col ">Match 26</div>
            </div>
            <div class="row ">
                <div class="col  ">
                    <img src="imgg/belgium.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
                    <span style="padding-left:20px">Belgium</span>
                </div>
                <div class="col  d-flex justify-content-around align-items-center" style="background-color: #0e0549;">

                    <input type="text" name="note5" id="note5" value="<?php echo isset($_POST['note5']) ? $_POST['note5'] : '0'; ?>" style="width: 15%; height:6vh ;">-
                    <input type="text" name="note6" id="note6" value="<?php echo isset($_POST['note6']) ? $_POST['note6'] : '0'; ?>" style="width: 15%; height:6vh ;">
                </div>
                <div class="col">
                    <img src="imgg/morocco.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
                    <span style="padding-left:20px">Morocco</span>
                </div>
            </div>
        </div>

        <div class="container w-75  text-center mt-3">
            <div class="row" id="border">
                <div class="col test">27 NOV-17:00H</div>
                <div class="col " id="final">final</div>
                <div class="col ">Match 27</div>
            </div>
            <div class="row ">
                <div class="col  ">
                    <img src="imgg/croitia.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
                    <span style="padding-left:20px">Croatia</span>
                </div>
                <div class="col  d-flex justify-content-around align-items-center" style="background-color: #0e0549;">

                    <input type="text" name="note7" id="note7" value="<?php echo isset($_POST['note7']) ? $_POST['note7'] : '0'; ?>" style="width: 15%; height:6vh ;">-
                    <input type="text" name="note8" id="note8" value="<?php echo isset($_POST['note8']) ? $_POST['note8'] : '0'; ?>" style="width: 15%; height:6vh ;">
                </div>
                <div class="col ">
                    <img src="imgg/canada.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
                    <span style="padding-left:20px">Canada</span>
                </div>
            </div>
        </div>

        <div class="container w-75  text-center  mt-3">
            <div class="row" id="border">
                <div class="col test">01 NOV-16:00H</div>
                <div class="col " id="final">final</div>
                <div class="col ">Match 41</div>
            </div>
            <div class="row ">
                <div class="col ">
                    <img src="imgg/croitia.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
                    <span style="padding-left:20px">Croatia</span>
                </div>
                <div class="col  d-flex justify-content-around align-items-center" style="background-color: #0e0549;">

                    <input type="text" name="note9" id="note9" value="<?php echo isset($_POST['note9']) ? $_POST['note9'] : '0'; ?>" style="width: 15%; height:6vh ;">-
                    <input type="text" name="note10" id="note10" value="<?php echo isset($_POST['note10']) ? $_POST['note10'] : '0'; ?>" style="width: 15%; height:6vh ;">
                </div>
                <div class="col">
                    <img src="imgg/belgium.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
                    <span style="padding-left:20px">Belgium</span>
                </div>
            </div>
        </div>

        <div class="container w-75  text-center mt-3 ">
            <div class="row" id="border">
                <div class="col test">01 DIC-16:00H</div>
                <div class="col " id="final">final</div>
                <div class="col ">Match 42</div>
            </div>
            <div class="row ">
                <div class="col">
                    <img src="imgg/canada.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
                    <span style="padding-left:20px">Canada</span>
                </div>
                <div class="col  d-flex justify-content-around align-items-center" style="background-color: #0e0549;">

                    <input type="text" name="note11" id="note11" value="<?php echo isset($_POST['note11']) ? $_POST['note11'] : '0'; ?>" style="width: 15%; height:6vh ;">-
                    <input type="text" name="note12" id="note12" value="<?php echo isset($_POST['note12']) ? $_POST['note12'] : '0'; ?>" style="width: 15%; height:6vh ;">
                </div>
                <div class="col">
                    <img src="imgg/morocco.png" alt="" sizes="" srcset="" style="width: 70px; margin-bottom: 10px;">
                    <span style="padding-left:20px">Morocco</span>
                </div>
            </div>
        </div>

        <div class="container col-md-12 text-center mt-5 mb-3 ">
            <input class="btn btn-lg" type="submit" style="background-color: #c2165e" value="Submit">
        </div>






    </form>
    <?php
    $par = 0;
    $marocPoint = 0;
    $croatiaPoint = 0;
    $belguimPoint = 0;
    $canadaPoint = 0;


    ////////// Varialbels ////////////


    $marocGan = 0;
    $croatiaGan = 0;
    $belguimGan = 0;
    $canadaGan = 0;

    $morocco_emp = 0;
    $croatia_emp = 0;
    $belgium_emp = 0;
    $canada_emp = 0;

    $morocco_lost = 0;
    $croatia_lost = 0;
    $belgium_lost = 0;
    $canada_lost = 0;

    $morocco_GF = 0;
    $croatia_GF = 0;
    $belgium_GF = 0;
    $canada_GF = 0;


    //////////// Inputs //////////////     
    $n1 = 0;
    $n3 = 0;
    $n2 = 0;
    $n4 = 0;
    $n5 = 0;
    $n6 = 0;
    $n7 = 0;
    $n8 = 0;
    $n9 = 0;
    $n10 = 0;
    $n11 = 0;
    $n12 = 0;

    if (isset($_POST['note1'])  && isset($_POST['note2'])) {
        $n1 = $_POST['note1'];
        $n2 = $_POST['note2'];
        if ($n1 < $n2) {
            $croatiaPoint = +3;
            $croatiaGan = $croatiaGan + 1;
            $morocco_lost = $morocco_lost  + 1;
        } else if ($n1 == $n2) {
            $marocPoint = +1;
            $croatiaPoint = +1;
            $morocco_emp =  $morocco_emp + 1;
            $croatia_emp = $croatia_emp  + 1;
        } else {
            $marocPoint = +3;
            $marocGan = $marocGan + 1;
            $croatia_lost = $croatia_lost  + 1;
        }

        // echo $marocPoint . "-" . $croatiaPoint;
        $par = 3;
    }
    if (isset($_POST['note3'])  && isset($_POST['note4'])) {
        $n3 = $_POST['note3'];
        $n4 = $_POST['note4'];
        if ($n3 < $n4) {
            $canadaPoint = +3;
            $canadaGan = $canadaGan + 1;
            $belgium_lost = $belgium_lost  + 1;
        } else if ($n3 == $n4) {
            $belguimPoint = +1;
            $canadaPoint = +1;
            $belgium_emp =  $belgium_emp + 1;
            $canada_emp = $canada_emp  + 1;
        } else {
            $belguimPoint = +3;
            $belguimGan = $belguimGan + 1;
            $canada_lost = $canada_lost  + 1;
        }

        // echo "<br>" . $belguim . "-" . $canada;
    }

    if (isset($_POST['note5'])  && isset($_POST['note6'])) {
        // echo "<br>" . $belguim;
        $n6 = $_POST['note6'];
        $n5 = $_POST['note5'];
        if ($n6 > $n5) {
            $marocPoint = $marocPoint + 3;
            $marocGan = $marocGan + 1;
            $belgium_lost = $belgium_lost  + 1;
        } else if ($n6 == $n5) {
            $belguimPoint = $belguimPoint + 1;
            $marocPoint = $marocPoint + 1;
            $belgium_emp =  $belgium_emp + 1;
            $morocco_emp = $morocco_emp  + 1;
        } else {
            $belguimPoint = $belguimPoint + 3;
            $belguimGan = $belguimGan + 1;
            $morocco_lost = $morocco_lost  + 1;
        }

        // echo "<br>" . $belguim . "-" . $marocPoint;
    }
    if (isset($_POST['note7'])  && isset($_POST['note8'])) {
        $n7 = $_POST['note7'];
        $n8 = $_POST['note8'];
        if ($n7 < $n8) {
            $canadaPoint = $canadaPoint + 3;
            $canadaGan = $canadaGan + 1;
            $croatia_lost = $croatia_lost  + 1;
        } else if ($n7 == $n8) {
            $canadaPoint = $canadaPoint + 1;
            $croatiaPoint = $croatiaPoint + 1;
            $canada_emp =  $canada_emp + 1;
            $croatia_emp = $croatia_emp  + 1;
        } else {
            $croatiaPoint = $croatiaPoint + 3;
            $croatiaGan = $croatiaGan + 1;
            $canada_lost = $canada_lost  + 1;
        }

        // echo "<br>" . $croatiaPoint . "-" . $canada;
    }
    if (isset($_POST['note9'])  && isset($_POST['note10'])) {
        $n9 = $_POST['note9'];
        $n10 = $_POST['note10'];
        if ($n9 < $n10) {
            $belguimPoint = $belguimPoint + 3;
            $belguimGan = $belguimGan + 1;
            $croatia_lost = $croatia_lost  + 1;
        } else if ($n9 == $n10) {
            $belguimPoint = $belguimPoint + 1;
            $croatiaPoint = $croatiaPoint + 1;
            $belgium_emp =  $belgium_emp + 1;
            $croatia_emp = $croatia_emp  + 1;
        } else {
            $croatiaPoint = $croatiaPoint + 3;
            $croatiaGan = $croatiaGan + 1;
            $belgium_lost = $belgium_lost  + 1;
        }

        // echo "<br>" . $croatiaPoint . "-" . $belguim;
    }
    if (isset($_POST['note11'])  && isset($_POST['note12'])) {
        $n11 = $_POST['note11'];
        $n12 = $_POST['note12'];
        if ($n11 < $n12) {
            $marocPoint = $marocPoint + 3;
            $marocGan = $marocGan + 1;
            $canada_lost = $canada_lost  + 1;
        } else if ($n11 == $n12) {
            $marocPoint = $marocPoint + 1;
            $canadaPoint = $canadaPoint + 1;
            $morocco_emp =  $morocco_emp + 1;
            $canada_emp = $canada_emp  + 1;
        } else {
            $canadaPoint = $canadaPoint + 3;
            $canadaGan = $canadaGan + 1;
            $morocco_lost = $morocco_lost  + 1;
        }

        // echo "<br>" . $canada . "-" . $marocPoint;
    }

    // GF Calculation
    $morocco_GF = $n1 + $n6 + $n12;
    $croatia_GF = $n2 + $n7 + $n9;
    $belgium_GF = $n3 + $n5 + $n10;
    $canada_GF = $n4 + $n8 + $n11;
    // GC Calculation
    $morocco_GC = $n2 + $n5 + $n11;
    $croatia_GC = $n1 + $n8 + $n10;
    $belgium_GC = $n4 + $n6 + $n9;
    $canada_GC = $n3 + $n7 + $n1;
    // Goal Difference
    $morocco_goal_dif =  $morocco_GF + $morocco_GC;
    $croatia_goal_dif =  $croatia_GF + $croatia_GC;
    $belgium_goal_dif =  $belgium_GF + $belgium_GC;
    $canada_goal_dif  =  $canada_GF  + $canada_GC;

    echo "
    <div  class='table-responsive{-sm|-md|-lg|-xl|-xxl} mt-4'> 
    <table style=' border-collapse:separate;border-spacing:0 10px; ' class='table text-center align-middle table-bordered ' >
    <thead style='border: #c2165e solid 1px; background-color: #8C1B2F;' class='text-light' > 
      <tr > 
        <th class='w-25'>#</th>
        <th class='w-50'>Selection</th>
        <th class='w-25'>PTS</th>
        <th class='w-25'>PAR</th>
        <th class='w-25'>GAN</th>
        <th class='w-25'>EMP</th>
        <th class='w-25'>PER</th>
        <th class='w-25'>G.F</th>
        <th class='w-25'>G.C</th> 
        <th class='w-25'>+/-</th>
      </tr>
    </thead>";


    $placement = array(
        array("Morocco", $marocPoint, $par, $marocGan, $morocco_emp, $morocco_lost, $morocco_GF, $morocco_GC, $morocco_goal_dif),
        array("croatia", $croatiaPoint, $par, $croatiaGan, $croatia_emp, $croatia_lost, $croatia_GF, $croatia_GC, $croatia_goal_dif),
        array("belgium", $belguimPoint, $par, $belguimGan, $belgium_emp, $belgium_lost, $belgium_GF, $belgium_GC, $belgium_goal_dif),
        array("canada", $canadaPoint, $par, $canadaGan, $canada_emp, $canada_lost, $canada_GF, $canada_GC, $canada_goal_dif)
    );
    //  Array sorting ///////////////
    usort($placement, function ($a, $b) {
        if ($a[1] != $b[1]) {
            return $b[1] <=> $a[1];
        } else if ($a[8] != $b[8]) {
            return $b[8] <=> $a[8];
        } else if ($a[6] != $b[6]) {
            return $b[6] <=> $a[6];
        }
        return 0;
    });

    // Table body  
    echo " <tbody style='border: #c2165e solid 1px;' class='text-light'>";
    // Table tr
    for ($row = 0; $row < 4; $row++) {
        echo " <tr style='background-color: #870036;'><td>" . $row + 1 . "</td>";
        // Table td
        for ($col = 0; $col < 9; $col++) {
            echo  "<td class=''>" .  $placement[$row][$col] . "</td>";
        }
        echo "</tr> ";
    }
    echo " </table></div>";
    ?>
    </div>











</body>

</html>