<?php
//Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 
function printNumber($i){
    return($i);
}
for($i= 1; $i<= 100; $i++){
    if($i %2 == 0){
        echo "<b>$i </b>";
    }
    else{
        echo " $i". "  ";
    }
}
        
?>
