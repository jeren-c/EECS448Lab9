<!DOCTYPE html>
<html>
<body>
  <?php
  $count = 0;
  $q1 =  $_POST["sex"];
  $q2 =  $_POST["name"];
  $q3 =  $_POST["apple"];
  $q4 =  $_POST["color"];
  $q5 =  $_POST["homework"];

echo "Your Quiz Solution: " . "<br>";
echo "1. you choose my gender is: " . "$q1" . "<br>";
echo "correct answer is male" . "<br>";
echo "2. you choose my name is:" . "$q2" . "<br>";
echo "correct answer is runzhou" . "<br>";
echo "3. you choose the thrid question is: " . "$q3" . "<br>";
echo "correct answer is yes" . "<br>";
echo "4. you choose my favorite color is: " . "$q4" . "<br>";
echo "correct answer is blue" . "<br>";
echo "5. you choose the answer is: " . "$q5" . "<br>";
echo "correct answer is yes" . "<br>";

if($q1 = "male"){
    $count += 20;
}
if($q2 = "true"){
    $count += 20;
}
if($q3 = "yes"){
    $count += 20;
}
if($q4 = "blue"){
    $count += 20;
}
if($q5 = "yes"){
    $count += 20;
}
echo "your persentage is: %" .  "$count";
?>

</body>
</html>