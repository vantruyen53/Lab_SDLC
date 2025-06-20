<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php 
        $number = filter_input(INPUT_POST, "number", FILTER_VALIDATE_INT);
        $letterUser = filter_input(INPUT_POST, "letter");
        $letterCheck = array("a", "e", "o", "i", "u", "A","E", "O", "I", "U");
        $edgenumber = filter_input(INPUT_POST, "edgenumber", FILTER_VALIDATE_INT);
        $daynumberUser = filter_input(INPUT_POST, "daynumber");
        $firstedge = filter_input(INPUT_POST, "firstedge", FILTER_VALIDATE_INT);
        $secondedge = filter_input(INPUT_POST, "secondedge", FILTER_VALIDATE_INT);
        $thirdedge = filter_input(INPUT_POST, "thirdedge", FILTER_VALIDATE_INT);
    ?>

    <form action="myPhp.php" method="post">
          <!-- Task 1 -->
        <div class="container task_1">
            <div class="input_form">
                <h1>TASK 1</h1>
                <h4> Read a whole number from the user and displays a message indicating whether the integer is even or odd.</h4>
                <input type="text" name="number" id="number" placeholder="Enter any number:" />
                <br />
                <input type="submit" id="submit" />
            </div>
            <div class="output_form">
                <label for="number">Number: </label>
                <?php
                    if($number !== null && $number !== false){
                        if($number %2 ==0){
                            echo $number." is an even number";
                        } else{
                            echo $number." is a odd number";
                        }
                    }else{
                        echo "...";
                    }
                ?>
            </div>
        </div>

        <!-- Task 2 -->
        <div class="container task_2">
            <div class="input_form">
                <h1>TASK 2</h1>
                <h4>Read a letter from the user and display it is a vowel or consonant</h4>
                <input type="text" name="letter" id="letter" placeholder="Enter a any letter:" > <br>
                <input type="submit" id="submit">
            </div>
            <div class="output_form">
                <label for="letter">Type: </label>
                <?php
                    if(strlen($letterUser) ==1){
                        for($i = 0; $i< 10; $i++){
                            if(!empty($letterUser)){
                                if(strcmp($letterUser, "y")==0){
                                    echo $letterUser." both is a vowel and consonant";
                                    break;
                                }
                                elseif(in_array($letterUser, $letterCheck)){
                                    echo $letterUser." is a vowel";
                                    break;
                                }else{
                                    echo $letterUser." is a consonant";
                                    break;
                                }
                            }else{
                                echo "...";
                            }
                        }
                    } else{
                        echo "Only enter one letter!!!";
                    }
                ?>
            </div>

        </div>

        <!-- Task 3 -->
         <div class="container task_3">
            <div class="input_form">
                <h1>TASK 3</h1>
                <h4>The program determines the name of the figure based on its number of edges</h4>
                <input type="text" name="edgenumber" id="edgenumber" placeholder="Enter number of edges:">
                <input type="submit" id="submit">
            </div>
            <div class="output_form">
                <label for="edgenumber">Name of figure: </label>
                <?php
                    if($edgenumber == 3){
                        echo "Triangular";
                    }
                    elseif ($edgenumber == 4){
                        echo "Quadrilateral";
                    }
                     elseif ($edgenumber == 5){
                        echo "Pentagon";
                    }
                     elseif ($edgenumber == 6){
                        echo "Hexagon";
                    }
                     elseif ($edgenumber == 7){
                        echo "Heptagon";
                    }
                     elseif ($edgenumber == 8){
                        echo "Octagon";
                    }
                     elseif ($edgenumber == 9){
                        echo "Nonagon ";
                    }
                     elseif ($edgenumber == 10  ){
                        echo "Decagon";
                    }
                    else{
                        echo "Please enter again!!";
                    }
                ?>
            </div>
         </div>

         <!-- Task 4 -->
          <div class="container task 4">
            <div class="input_form">
                <h1>TASK 4</h1>
                <h4>TThe program reads the name of a month from the user as a string</h4>
                <input type="text" name="daynumber" id="daynumber" placeholder="Enter name of a month:">
                <input type="submit" id="submit">
            </div>
            <div class="output_form">
                <label for="daynumber">Number of month: </label>
                <?php
                        if ($daynumberUser == "January" || $daynumberUser == "March" || $daynumberUser == "May" ||
                          $daynumberUser == "July" || $daynumberUser == "August" || $daynumberUser == "October" ||
                            $daynumberUser == "December") {
                                echo "There are 31 days.";
                            }
                        elseif ($daynumberUser == "April"|| $daynumberUser =="June"|| $daynumberUser =="September"||
                        $daynumberUser == "November"){
                            echo "There is 30 days.";
                        }
                        elseif($daynumberUser== "February"){
                            echo "There is 28 or 29 days.";
                        }
                        else{
                            echo "Enter againt!!";
                        }
                ?>
            </div>
          </div>

          <!-- task 5 -->
           <div class="container task_5">
                <div class="input_form">
                    <h1>TASK 4</h1>
                    <h4>The program reads the three-sided length of a triangle from the user. 
                        Then display a message indicating the type of triangle.</h4>
                    <input type="text" name="firstedge" id="firstedge" placeholder="First edge:"> <br>
                    <input type="text" name="secondedge" id="secondedge" placeholder="Second edge:"> <br>
                    <input type="text" name="thirdedge" id="thirdedge" placeholder="Third edge:"> <br>
                    <input type="submit" id="submit">
                </div>
                <div class="output_form">
                    <label >Name of triangle: </label>
                    <?php
                        if($thirdedge !== null && $thirdedge !== false){
                            if($firstedge == $secondedge && $firstedge ==$thirdedge){
                            echo "Equilateral triangle";
                            }
                            elseif($firstedge == $secondedge && $firstedge !== $thirdedge || $firstedge ==$thirdedge && $firstedge !== $secondedge){
                                echo "Isosceles triangle";
                            }
                            else{
                                echo "Scalene triangle";
                            }
                        }
                        else{
                            echo "...";
                        }
                    ?>
                </div>
           </div>
    </form>
    
</body>
</html>