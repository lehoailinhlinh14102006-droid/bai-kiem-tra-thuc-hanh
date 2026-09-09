echo "<b>Bài 2: Kiểm tra số nguyên tố</b><br>";

$n = 17; // Thay đổi số cần kiểm tra ở đây

function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

if (isPrime($n)) {
    echo "Số {$n} là số nguyên tố.<br>";
} else {
    echo "Số {$n} không phải là số nguyên tố.<br>";
}

echo "<br><hr><br>";