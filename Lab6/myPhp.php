<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body> 
    <form action="myPhp.php" method="post">

        <!-- Task 1 -->
        <div class="container task_1">
            <div class="input_form">
                <h1>TASK 1</h1>
                <p>Write a program that reads some text and counts the occurrences of each character in it. Print the results.</p>
                <input type="text" name="text" id="text" placeholder="Enter some text:"> <br>
                <input type="submit" id="submit">
            </div>
            <div class="output_form">
                <label >Result: </label>
                <?php
                $textUser = filter_input(INPUT_POST, "text");
                $occurrences_of_each_character = array();

                for ($i = 0; $i < strlen($textUser); $i++) {
                    $character = $textUser[$i];

                    if (isset($occurrences_of_each_character[$character])) {
                        $occurrences_of_each_character[$character]++;
                    } else {
                        $occurrences_of_each_character[$character] = 1;
                    }
                }

                // In ra kết quả
                foreach ($occurrences_of_each_character as $char => $count) {
                    echo $char . ": " . $count . "<br>";
                }
            ?>

            </div>
        </div>

        <!-- Task 2 -->
         <!-- <div class="container task_2">
            <div class="input_form">
                
            </div>
            <div class="output_form">
               
            </div>
        </div> -->

        <!-- Task 3 -->
         <!-- <div class="container task_3">
            <div class="input_form">

            </div>
            <div class="output_form">

            </div> -->
        </div>

        <!-- Task 6 -->
         <div class="container task_6">
            <div class="input_form">
                <h1>Task 6</h1>
                <p>Write a function that determines whether a point is inside the volume, defined by the box, shown on the right</p>
                <input type="number" name="x" placeholder="X Coordinatees">
                <input type="number" name="y" placeholder="Y Coordinatees">
                <input type="number" name="z" placeholder="Z Coordinatees">
                <br>
                <input type="submit" id="submit">
            </div>
            <div class="output_form">
                <?php
                    $x = filter_input(INPUT_POST, "x");
                    $y = filter_input(INPUT_POST, "y");
                    $z = filter_input(INPUT_POST, "z");
                    if(isVolume($x, $y, $z)){
                        echo "Result: Inside";
                    }else{
                        echo "Result: Outside";
                    }

                    function isVolume($x, $y, $z){
                        $x1 = 10; $x2 = 50;
                        $y1 = 20; $y2 = 80;
                        $z1 = 15; $z2 = 50;

                        if($x >=$x1 && $x<=$x2){
                            if($y >=$y1 && $y<=$y2){
                                if($z >=$z1 && $z<=$z2)
                                return true;
                            }
                        }
                        return false;
                    }
                ?>
            </div>
         </div>

         <!-- Task 7 -->
          <div class="container task_7">
            <div class="input_form">
                <h1>Task 7</h1>
                <p>Write a function that determines whether a driver is within the speed limit</p>
                <input type="number" name="speed" placeholder="Speed">
                <input type="text" name="zone" placeholder="zone">
                <br>
                <input type="submit" id="submit">
            </div>
            <div class="output_form">
                <?php
                    function getLimit($zone){
                        switch($zone){
                            case 'motorway':
                                $speedLimit = 130;
                                break;
                            case 'interstate':
                                $speedLimit = 90;
                                break;
                            case 'city':
                                $speedLimit = 50;
                                break;
                            case 'residential':
                                $speedLimit = 20;
                                break;
                        }
                        return $speedLimit;
                    }

                    function getInterstate($overSpeed){
                        if($overSpeed >){
                            echo "Error";
                        } elseif($overSpeed >0 && $overSpeed <19){
                            echo "Speeding";
                        }elseif($overSpeed >=20 && $overSpeed <39){
                            echo "Excessive speeding";
                        }
                        else{
                            echo "reckless driving";
                        }
                    }

                    $speed = filter_input(INPUT_POST, "speed");
                    $zone = filter_input(INPUT_POST, "zone");
                    $speedLimit = getLimit($zone);

                    $overSpeed = $speed - $speedLimit;
                    getInterstate($overSpeed);
                ?>
            </div>
          </div>
    </form>    
</body>
</html>