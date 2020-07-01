<?php

$animalOwnerArray = array(array("Tom", "Harry", "Linda", "Karen"), array("Cow", "Sheep", "Dog", "Giraffe"));

/* Note, using echo to send value of element from multidimensional array should be done with the variable not wrapped in
double quotes e.g. "$animalOwnerArray[0][1]" unlike a language like bash. See result below for example of incorrect use */

echo "$animalOwnerArray[0][1]"; //Gives output Array[1], instead of desired ouput: 'Harry'
echo "Owner: ". $animalOwnerArray[0][1]. "\n"; //. is used to concatenate resultant string from array index to owner and newline
echo "Animal: ". $animalOwnerArray[1][2];

?>