<?php

// while loop

// $n = 1;
// while($n <= 10){
//     echo "The Number is $n: <br>";
//     $n ++;
// }

// do while loop

// $n = 15;

// do {
//     echo "<b><p style='color: rgb(27, 45, 206);background-color: cyan;'>The Number is $n: <br><hr></p></b>";
//     $n++;
// } while ($n <= 20);


// $n = 5;
// while($n < 7){
//     echo  $n;
//     $n++;
// }

$images = array("https://static.toiimg.com/photo/80387978.cms?imgsize=174948", "https://media.istockphoto.com/id/594474448/photo/suzuki-gsx-r750.jpg?s=612x612&w=0&k=20&c=uCwfSf44Rya81hZyyxPTqVD815KOSpQ9uZSuZ4WUJ5Y=", "https://t4.ftcdn.net/jpg/02/69/47/51/360_F_269475198_k41qahrZ1j4RK1sarncMiFHpcmE2qllQ.jpg", "https://media.colomio.com/how-to-draw/how-to-draw-a-bicycle-8.jpg",);

foreach($images as $value){
    echo  "<img src='$value' width='200px'> <br>";
}

?>