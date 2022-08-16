<!-- <?php
echo '<h1>Hello world</h1>';
?> -->

<!DOCTYPE html>
<html>
    <body>
        <?php

            // TOPIC: PHP OOP - Classes and Objects
            class Fruit {
                // Properties
                public $name;
                public $color;

                // Methods
                function set_name($name){
                    $this->name = $name;
                }
                
                function get_name(){
                    return $this->name;
                }

                function set_color($color){
                    $this->color = $color; 
                }

                function get_color(){
                    return $this->color;
                }
            }

            $apple = new Fruit();
            $banana = new Fruit();
            $apple->set_name('Apple');
            $apple->set_color('red');
            $banana->set_name('Banana');

            echo "NAME:" . $apple->get_name();
            echo "<br>";
            echo "COLOR:" . $apple->get_color();
            echo "<br>";
            echo $banana->get_name();
            echo "<br>";

            // Data Types
            var_dump($apple instanceof Fruit); // bool(true)
            echo "<br>";
            $x = 1234.12;
            var_dump($x); //float(1234.12)
            
            echo "<br>";
            $colors = array("RED", "BLUE", "YELLOW");
            var_dump($colors); // array(3) { [0]=> string(3) "RED" [1]=> string(4) "BLUE" [2]=> string(6) "YELLOW" }
            echo "<br>";

            // STRING Length
            echo strlen("Hello Rodeo!");
            echo "<br>";

            // STRING Word Count
            echo "COunt is : " . str_word_count("Hello Rodeo!");
            echo "<br>";

            //MATH (min,max)
            echo(min(0, 150, 30, 20, -8, -200). "<br>");  // returns -200
            echo(max(0, 150, 30, 20, -8, -200). "<br>");  // returns 150

            //Creating Constant
            define("myPlace", "Bond street");
            echo(myPlace);

            define("cars", [
                "Alfa Romeo",
                "BMW",
                "Toyota"
            ]);
            echo cars[0];

            // TOPIC :
        ?>
    </body>
</html>