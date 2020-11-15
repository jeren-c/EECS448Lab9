<?php
echo "<link rel='stylesheet' type='text/css' href='style.css' />";

$btn = $_POST["btn"];
$rtn = $_POST["rtn"];
$bpn = $_POST["bpn"];
$rpn = $_POST["rpn"];
$shipping = $_POST["shipping"];
$shippingPrice = 0;

$total = ($btn * 4.99) + ($rtn * 5.99) + ($bpn * 10.99) + ($rpn * 11.99);
if ($shipping == "overNight")
{
    $total = $total + 50;
    $shippingPrice = 50;
}
else if ($shipping == "threeDay")
{
    $total = $total + 5;
    $shippingPrice = 5;
}

echo "<br>Thank you for your purchase.<br>";
echo "Here is your receipt<br>";
echo "<table>";
echo "<tr>";
echo "<th></th> <th>Quantity</th> <th>Cost</th> <th>Subtotal</th>";
echo "</tr><tr>";
echo "<th>Chocolate</th>";
echo "<td>" . $btn . "</td><td>15</td>" . "<td>" . $btn*4.99 . "</td>";
echo "</tr><tr><th>rtn</th>";
echo "<td>" . $rtn . "</td><td>20</td>" . "<td>" . $rtn*5.99 . "</td>";
echo "</tr><tr><th>bpn</th>";
echo "<td>" . $bpn . "</td><td>30</td>" . "<td>" . $bpn*10.99 . "</td>";
echo "</tr><tr><th>rpn</th>";
echo "<td>" . $rpn . "</td><td>32</td>" . "<td>" . $rpn*11.99 . "</td>";
echo "</tr><tr><th>Shipping</th><td colspan = 2>" . $shipping . "</td><td>" . $shippingPrice . "</td></tr>";
echo "<tr><th colspan=3>Total cost</th> <td>" . $total . "</tr>";
echo "</table>";
?>