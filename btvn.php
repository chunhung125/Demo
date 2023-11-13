<?php
//Câu1: Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
echo "Câu 1: <br>";
function ktSoChan($i) {
    if ($i % 2 == 0) {
        echo $i. " Là số chẵn!";
        echo"<br>";
    } else {
        echo $i. " không phải là số chẵn!";
        echo"<br>"; 
    }
}
ktSoChan(5);
echo "<hr>";

//Câu 2: Viết chương trình PHP để tính tổng của các số từ 1 đến n.
echo "Câu 2: <br>";
 function tinhTong($n) {
    $tong =0;
    for ($i = 0; $i <= $n; $i++){
        $tong += $i;
    }
    return $tong;
 }
 $n = 10;
 echo "Tổng các số từ 1 đến $n = " .tinhTong($n);
echo "<hr>";

//Câu 3:Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
echo "Câu 3: <br>";
function cuuChuong($n) {
    for ($i = 1; $i <= $n; $i++) {
        $ketQua = $n * $i;
        echo " $n * $i = $ketQua <br>";
}
} 
cuuChuong(10);
echo"<hr>";

//Câu 4: Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
echo "Câu 4: <br>";
function ktChuoi($a, $b){
      $viTri = strpos($a, $b);
    if ($viTri !== false) {
        echo "Chuỗi '$a' chứa từ '$b'.";
    } else {
        echo "Chuỗi '$a' không chứa từ '$b'.";
    }
}
ktChuoi("Hello, baby!", "my darling");
Echo "<hr>";

//Câu 5: Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
Echo "Câu 5: <br> ";
function gtnn($mang){
     $min = $mang[0];
    foreach ($mang as $giaTri) {
        if ($giaTri < $min) {
            $min = $giaTri;
        }
    }
    return $min;
}
function gtln($mang) {
    $max = $mang[0];
    foreach ($mang as $giaTri) {
        if ($giaTri > $max) {
            $max = $giaTri;
        }
    }
    return $max;
}
$mangDuLieu = array(56 , 78 , 32, 55, 13, 98, 100);
$max = gtln($mangDuLieu);
$min = gtnn($mangDuLieu);
echo "Ta có mảng sau: " . implode(', ', $mangDuLieu) . "<br>";
echo "Giá trị lớn nhất trong mảng: $max <br>";
echo "Giá trị nhỏ nhất trong mảng: $min <br>";
echo "<hr>";

//Câu 6: Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
echo "Câu 6: <br>";
function xsMang($mang){
    sort ( $mang );
    return $mang;
}
$mangDuLieu = array(56, 78, 32, 55, 13, 98, 100);
$ket_qua = xsMang($mangDuLieu);
echo "Mảng trước khi sắp xếp: " . implode(', ', $mangDuLieu) .'<br>';
echo "Mảng sau khi sắp xếp theo thứ tự tăng dần: " . implode(', ', $ket_qua) .'<br>';
echo "<hr>";

//Câu 7: Viết chương trình PHP để tính giai thừa của một số nguyên dương.
echo "Câu 7: <br>";
function giaiThua($x) {
    if ($x == 0 || $x == 1) {
        return 1;
    } else {
        return $x * giaiThua($x - 1);
    }
}
$x = 5;
$ket_qua = giaiThua($x);
echo "Giai thừa của $x là: $ket_qua";
echo "<hr>";

//Câu 8: Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
Echo "Câu 8: <br> ";
Function snt ($n){
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function timSNT($x, $y){
$soNguyenTo = array();
    for ($i = $x; $i <= $y; $i++) {
        if (snt($i)) {
            $soNguyenTo[] = $i;
        }
    }
    return $soNguyenTo;
}
$x = 5;
$y = 80;
$ketQua = timSNT($x, $y);
echo "Các số nguyên tố trong khoảng từ $x đến $y là: " . implode(', ', $ketQua);
echo "<hr>";

//Câu 9: Viết chương trình PHP để tính tổng của các số trong một mảng.
echo "Câu 9: <br>";

function tongTrongMang($arr){
    $tong = 0;
    foreach ($arr as $so) {
        $tong += $so;
    }
    return $tong;
}

$mangDuLieu = array(56, 78, 32, 55);
$ket_qua = tongTrongMang($mangDuLieu);
echo "Ta có mảng sau: " . implode(', ', $mangDuLieu) .'<br>';
echo "Tổng các số trong mảng là: $ket_qua <br>";
echo "<hr>";

//Câu 10: Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước
echo "Câu 10: <br>";
function fibonacci($n)
{
    $fibonacciArray = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fibonacciArray[$i] = $fibonacciArray[$i - 1] + $fibonacciArray[$i - 2];
    }
    return $fibonacciArray;
}
function  inFibonacci($a, $b)
{
    if ($a < 0 || $b < 0 || $b< $a) {
        echo "Vui lòng nhập khoảng hợp lệ.";
        return;
    }
    $fibonacciArray = fibonacci($b);
    echo "Các số Fibonacci trong khoảng từ $a đến $b là: ";
    for ($i = 0; $i < $b; $i++) {
        if ($fibonacciArray[$i] >= $a && $fibonacciArray[$i] <= $b) {
            echo $fibonacciArray[$i] . " ";
        }
    }
}
inFibonacci(5, 12);
echo"<hr>";
//Câu 11: Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
echo"Câu 11: <br>";
function armstrong($n)
{
    $soGoc = $n;
    $soChuSo = strlen($n);
    $tong = 0;

    while ($n > 0) {
        $chuSo= $n % 10;
        $tong += pow($chuSo, $soChuSo);
        $n = (int)($n / 10);
    }
    return $tong=== $soGoc;
}
$n = 125;
if (armstrong($n)) {
    echo "$n là số Armstrong.";
} else {
    echo "$n không là số Armstrong.";
}
echo"<hr>";
//Câu 12: Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
echo"Câu 12: <br>";
function chenPhanTu($mang, $phanTu, $viTri)
{
    if ($viTri < 0 || $viTri > count($mang)) {
        echo "Vị trí chèn không hợp lệ.";
        return $mang;
    }
    array_splice($mang, $viTri, 0, $phanTu);
    return $mang;
}
$mang = array(2, 4, 6, 8, 10);
$phanTuChen = 12;
$viTriChen = 5;
$mang = chenPhanTu($mang, $phanTuChen, $viTriChen);
echo "Mảng sau khi chèn phần tử $phanTuChen vào vị trí $viTriChen là: ";
print_r($mang);
echo "<hr>";

//Câu 13: Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
echo"Câu 13: <br>";
function loaiBo($mang)
{
    $mangLoaiBoTrungLap = array_unique($mang);
    return $mangLoaiBoTrungLap;
}
$mang = array(1, 2, 3, 4, 5, 5, 7, 8, 2);
$mangSauKhiLoaiBo = loaiBo($mang);
echo "Mảng sau khi loại bỏ các phần tử trùng lặp là: ";
print_r($mangSauKhiLoaiBo);
echo"<hr>";

//Câu 14: Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
echo "Câu 14: <br>";
function timViTri($mang, $phanTu)
{
    $viTri = array_search($phanTu, $mang);
    if ($viTri !== false) {
        echo "Vị trí của phần tử $phanTu trong mảng là: $viTri";
    } else {
        echo "Phần tử $phanTu không tồn tại trong mảng.";
    }
}
$mang = array(1, 2, 3, 4, 5);
$phanTuTim = 3;
timViTri($mang, $phanTuTim);
echo"<hr>";

//Câu 15: Viết chương trình PHP để đảo ngược một chuỗi.
echo"Câu 15: <br>";
function daoNguoc($a) {
    return strrev($a);
}
$chuoiBanDau = "Chu Thi Hong Nhung";
$chuoiDaoNguoc = daoNguoc($chuoiBanDau);
echo "Chuỗi ban đầu: " . $chuoiBanDau . "<br>";
echo "Chuỗi đảo ngược: " . $chuoiDaoNguoc;
echo "<hr>";

//Câu 16: Viết chương trình PHP để tính số lượng phần tử trong một mảng.
echo "Câu 16: <br>";
function soLuongPhanTu($mang) {
    return count($mang);
}
$myArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$soLuongPhanTu = soLuongPhanTu($myArray);
echo "Số lượng phần tử trong mảng là: " . $soLuongPhanTu;
echo "<hr>";

//Câu 17: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
echo "Câu 17: <br>";
function chuoiPalindrome($str) {
    $str = strtolower(str_replace(' ', '', $str));
    return $str === strrev($str);
}

$chuoi = "Hi guys";
if (chuoiPalindrome($chuoi)) {
    echo "Chuỗi '$chuoi' là chuỗi Palindrome.";
} else {
    echo "Chuỗi '$chuoi' không phải là chuỗi Palindrome.";
}
echo "<hr>";

//Câu 18: Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
echo "Câu 18: <br>";
function soLanXuatHien($mang, $phanTuCanDem) {
    $soLanXuatHien = array_count_values($mang);
    return isset($soLanXuatHien[$phanTuCanDem]) ? $soLanXuatHien[$phanTuCanDem] : 0;
}

$mangDL = array(1, 2, 3, 4, 2, 5, 2, 6, 2, 7);
$phanTuCanDem = 2;
$soLanXuatHien = soLanXuatHien($mangDL, $phanTuCanDem);

// In ra số lần xuất hiện
echo "Số lần xuất hiện của phần tử $phanTuCanDem trong mảng là: " . $soLanXuatHien;
echo "<hr>";

//Câu 19: Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
echo "Câu 19: <br>";
function sapXepArray($a) {
    arsort($a);
    return $a;
}

$mangDL = array(5, 2, 90, 56, 01);
$mangDaSapXep = sapXepArray($mangDL);
echo "Mảng đã sắp xếp giảm dần: " . implode(', ', $mangDaSapXep);
echo "<hr>";

//Câu 20: Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
echo "Câu 20: <br>";
function themVaoDau($mang, $phanTu) {
    array_unshift($mang, $phanTu);
    return $mang;
}

function themVaoCuoi($mang, $phanTu) {
    $mang[] = $phanTu;
    return $mang;
}

$mangDL = array(1, 2, 3, 4, 5);
$phanTuThem = 0;

$mangSauThemVaoDau = themVaoDau($mangDL, $phanTuThem);
echo "Mảng sau khi thêm phần tử $phanTuThem vào đầu: " . implode(', ', $mangSauThemVaoDau);

$mangSauThemVaoCuoi = themVaoCuoi($mangDL, $phanTuThem);
echo "<br> Mảng sau khi thêm phần tử $phanTuThem vào cuối: " . implode(', ', $mangSauThemVaoCuoi);

echo "<hr>";


//Câu 21: Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
echo "Câu 21: <br>";
function soLonThuHai($mang) {
    rsort($mang);
    $soLonThuHai = $mang[1];
    return $soLonThuHai;
}
$mangDL= array(10, 5, 8, 20, 15);
echo "Số lớn thứ hai trong mảng là: " . soLonThuHai($mangDL);
echo "<hr>";

//Câu 22:Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
echo "Câu 22: <br>";
function timUSCLN($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function timBSCNN($a, $b) {
    return abs($a * $b) / timUSCLN($a, $b);
}
$so1 = 12;
$so2 = 18;
echo "Ước số chung lớn nhất của $so1 và $so2 là: " . timUSCLN($so1, $so2) . "<br>";
echo "Bội số chung nhỏ nhất của $so1 và $so2 là: " . timBSCNN($so1, $so2) . "<br>";
echo "<hr>";

//Câu 23:Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
echo "Câu 23: <br>";
function kiemTraSoHoanHao($n) {
    if ($n <= 0) {
        return false;
    }
    $tongUoc = 0;
    for ($i = 1; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            $tongUoc += $i;
        }
    }
    return $tongUoc == $n;
}
$soCanKiemTra = 28;
if (kiemTraSoHoanHao($soCanKiemTra)) {
    echo "$soCanKiemTra là số hoàn hảo <br>";
} else {
    echo "$soCanKiemTra không phải là số hoàn hảo <br>";
}
echo "<hr>";

//Câu 24:Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
echo "Câu 24: <br>";
function timSoLeLonNhat($a) {
    $soLeLonNhat = 0;
    foreach ($a as $so) {
        if ($so % 2 != 0) { // Kiểm tra xem số có phải là số lẻ
            if ($soLeLonNhat === 0 || $so > $soLeLonNhat) {
                $soLeLonNhat = $so;
            }
        }
    }
    return $soLeLonNhat;
}
$mangSo = array(2, 6, 7, 35, 99, 22, 10);
echo "Ta có mảng: " . implode(", ", $mangSo) . "<br>";
$ketQua = timSoLeLonNhat($mangSo);
if ($ketQua !== 0) {
    echo "Số lẻ lớn nhất trong mảng là: " . $ketQua;
} else {
    echo "Không có số lẻ trong mảng.";
}
echo "<hr>";

//Câu 25:Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
echo "Câu 25: <br>";
$x = 17;
if (snt($x)) //sử dụng hàm snt ở câu 8
{
    echo "$x là số nguyên tố.<br>";
} else {
    echo "$x không là số nguyên tố.<br>";
}
echo "<hr>";

//Câu 26:Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
echo "Câu 26: <br>";
function timSoDuongLonNhat($a) {
    $soDuongLonNhat = 0;

    foreach ($a as $so) {
        if ($so > 0) {
            if ($soDuongLonNhat === 0 || $so > $soDuongLonNhat) {
                $soDuongLonNhat = $so;
            }
        }
    }

    return $soDuongLonNhat;
}
$mangDL = array(-7, -1, 0, 2, 8, 9);
$ketQua = timSoDuongLonNhat($mangDL);
echo "Ta có mảng: " . implode(", ", $mangDL) . "<br>";
if ($ketQua !== 0) {
    echo "Số dương lớn nhất trong mảng là: " . $ketQua;
} else {
    echo "Không có số dương trong mảng.";
}
echo "<hr>";

//Câu 27:Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
echo "Câu 27: <br>";
function timSoAmLonNhat($a) {
    $soAmLonNhat = 0;

    foreach ($a as $so) {
        if ($so < 0) {
            if ($soAmLonNhat === 0 || $so > $soAmLonNhat) {
                $soAmLonNhat = $so;
            }
        }
    }

    return $soAmLonNhat;
}
$mangDL= array(-7, -1, 0, 2, 8, 9);
echo "Ta có mảng: " . implode(", ", $mangDL) . "<br>";
$ketQua = timSoAmLonNhat($mangDL);
if ($ketQua !== 0) {
    echo "Số âm lớn nhất trong mảng là: " . $ketQua;
} else {
    echo "Không có số âm trong mảng.";
}
echo "<hr>";

//Câu 28:Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
echo "Câu 28: <br>";
function tinhTongSoLe($n) {
    $tong = 0;

    for ($i = 1; $i <= $n; $i += 2) {
        $tong += $i;
    }
    return $tong;
}
$n = 10;
echo "Tổng các số lẻ từ 1 đến $n là: " . tinhTongSoLe($n);
echo "<hr>";

//Câu 29:Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
echo "Câu 29: <br>";
function timSoChinhPhuong($a, $b) {
    $soChinhPhuong = array();
    for ($i = $a; $i <= $b; $i++) {
        $canBacHai = sqrt($i);
        if ($canBacHai == (int)$canBacHai) {
            $soChinhPhuong[] = $i;
        }
    }
    return $soChinhPhuong;
}

$a = 1;
$b = 50;
echo "Ta có khoảng cho trước: $a đến $b <br>";
$ketQua = timSoChinhPhuong($a, $b);

if (!empty($ketQua)) {
    echo "Các số chính phương trong khoảng từ $batDau đến $ketThuc là: " . implode(', ', $ketQua);
} else {
    echo "Không có số chính phương trong khoảng từ $batDau đến $ketThuc.";
}
echo "<hr>";

//Câu 30:Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
echo "Câu 30: <br>";
function laChuoiCon($chuoiMe, $chuoiCon) {
    $doDaiChuoiChinh = strlen($chuoiMe);
    $doDaiChuoiCon = strlen($chuoiCon);

    for ($i = 0; $i <= $doDaiChuoiChinh - $doDaiChuoiCon; $i++) {
        $chuoiPhu = substr($chuoiMe, $i, $doDaiChuoiCon);
        if ($chuoiPhu == $chuoiCon) {
            return true;
        }
    }
    return false;
}
$chuoiMe= "Xin chào các bạn";
$chuoiCon = "Hi guys";
if (laChuoiCon($chuoiMe, $chuoiCon)) {
    echo " '$chuoiCon' là chuỗi con của '$chuoiMe' <br>";
} else {
    echo "'$chuoiCon' không là chuỗi con của '$chuoiMe' <br>";
}
?>





