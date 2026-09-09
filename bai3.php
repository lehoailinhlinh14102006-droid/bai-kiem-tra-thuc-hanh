echo "<b>Bài 3: In hình chữ nhật (chỗ rộng 5, cao 3)</b><br>";

function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($i = 0; $i < $chieuCao; $i++) {
        for ($j = 0; $j < $chieuRong; $j++) {
            echo "* ";
        }
        echo "<br>"; // Xuống dòng sau mỗi hàng
    }
}

// Gọi hàm in hình chữ nhật có chiều rộng 5, chiều cao 3
inHinhChuNhat(5, 3);

?>