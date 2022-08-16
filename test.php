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


            // TOPIC :
        ?>
    </body>
</html>