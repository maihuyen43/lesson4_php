<?php
//Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
//Công thức tính điểm trung bình = (điểm giữa kỳ * 30%) + (điểm cuối kỳ * 70%)
//Điểm trung bình >= 9.0 in ra là hạng "Xuất sắc".
//Điểm trung bình >= 7.0 và < 9.0 in ra là hạng "Giỏi"
//Điểm trung bình >= 5.0 và < 7.0 in ra là hạng "Khá"
//Điểm trung bình < 5.0 in ra là hạng "Trung bình - Yếu"
function academicRanking($score){
   
    return academicRanking($score);
}
$midtermScore= 8;
$endScore=7.5;

    $score= ($midtermScore * 0.3+ $endScore * 0.7);
    if ($score>=9 && $score <10) {
        echo "Xuất sắc";
    }else if ($score >=7 && $score< 9){
        echo "Giỏi";
    }else if ($score >=5 && $score <7){
        echo "Khá";
    }else if ($score <5){
        echo "Trung bình- Yếu";
    }
    else {
        echo "Điểm không hợp lệ";
    }   



?>