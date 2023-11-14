<?php
//Trắc nghiệm
//Câu 1: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
//Câu 2: A. True
//Câu 3: A. array()
//Câu 4: A. readfile()
//Câu 5: B. Chuyển đổi một đối tượng thành một chuỗi
//Thực hành
//Câu 1:
function generateFibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    for ($i = 2; $i < $n; $i++) // Tính và thêm các giá trị tiếp theo của dãy Fibonacci vào mảng.
    {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}
$fibonacci = generateFibonacci(10);
echo "Dãy số Fibonacci đầu tiên có $numberOfElements phần tử là: " . implode(", ", $fibonacci);//Sử dụng implode để chuyển mảng fibonacci thành một chuỗi
echo "<hr>";
echo"<br>";
//Câu 2: 
$students = array(
    array("id" => 1, "name" => "Nguyễn Thị Hồng Cúc", "age" => 20, "grade" => 8.5),
    array("id" => 2, "name" => "Nguyễn Yến Linh", "age" => 20, "grade" => 9.0),
    array("id" => 3, "name" => "Đỗ Văn Long", "age" => 20, "grade" => 8.7),
    array("id" => 4, "name" => "Hoàng Thị Mai", "age" => 21, "grade" => 9.2),
    array("id" => 5, "name" => "Hoàng Thị Quỳnh Nga", "age" => 10, "grade" => 8.8),
    array("id" => 6, "name" => "Chu Thị Hồng Nhung", "age" => 20, "grade" => 9.0),
);
echo "<html><body>";
echo "<h2>Thông tin của tất cả học sinh:</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Grade</th></tr>";

function displayStudents($students) {
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student["id"] . "</td>";
        echo "<td>" . $student["name"] . "</td>";
        echo "<td>" . $student["age"] . "</td>";
        echo "<td>" . $student["grade"] . "</td>";
        echo "</tr>";
    }
}
displayStudents($students);
echo "</table>";
function highestGrade($students) {
    $highestGrade = 0;
    $bestStudent = null;

    foreach ($students as $student) {
        if ($student["grade"] > $highestGrade) {
            $highestGrade = $student["grade"];
            $bestStudent = $student;
        }
    }
    return $bestStudent;
}
$bestStudent = highestGrade($students);
echo "<p>Học sinh có điểm cao nhất là: " . $bestStudent["name"] . " với tổng điểm là " . $bestStudent["grade"] . "</p>";
echo "</body></html>";
?>
