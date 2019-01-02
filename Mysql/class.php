<?php

class collage{
    var $student = 30;
    var $teacher = 5;

    function department(){
    $this->student =40;
    }
}

$iit = new collage();
echo $iit->student;
$iit->department();
class mumbai extends collage{
    var $student =20;
}
 $nit =new mumbai();
 echo $nit->student;
// if(method_exists("car","movewheel"))
// {
//     echo "yesss";
// }else{
//     echo "noo";
// }


?>