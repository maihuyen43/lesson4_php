<?php
//Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
function parityCheck($number) {
    if($number % 2==0){
        return true;
    }else{
        return false ;
    }
}
    $number=8;
    if(parityCheck($number)){
        echo"$number là số chẵn ";
    }else{
        echo"$number không là số chẵn";
    }
    ?>