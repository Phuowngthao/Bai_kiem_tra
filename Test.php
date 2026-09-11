<?php //Chỉ mở PHP 1 lần
//Bài 1: Viết một chương trình PHP để in ra số chẵn từ 1 đến 10.
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
echo '<br><br>';

//Bài 2: Viết một chương trình kiểm tra
function kiemTraSoNguyenTo($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return false; 
        }
    }
    return true; 
}
// Thử nghiệm với một số nguyên cụ thể
$number = 17;
if (kiemTraSoNguyenTo($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}
echo '<br><br>';

//BÀI 3: Viết một hàm PHP có tên inHinhChuNhat nhận vào hai tham số là chiều rộng và chiều cao, và in ra một hình chữ nhật sử dụng dấu sao (*) với kích thước đã cho. Gọi hàm này để in ra một hình chữ nhật có chiều rộng là 5 và chiều cao là 3
function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($i = 0; $i < $chieuCao; $i++) {
        for ($j = 0; $j < $chieuRong; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

// Gọi hàm với chiều rộng là 5 và chiều cao là 3
inHinhChuNhat(5, 3);
?>
