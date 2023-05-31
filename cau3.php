<?php
//Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
function yearCheck($number) {
    if($number % 2==0 && $number >=0){
        return true;
    }else{
        return false ;
    }
}
    $number=2023;
    if(yearCheck($number)){
        echo"$number là năm chẵn ";
    }else{
        echo"$number là năm lẻ";
    }