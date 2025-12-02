<?php include 'header.php'; ?>

<?php
// Music pieces with price and stock
$pieces = [
    "Pamugun"        => ["price" => 12.99, "stock" => 12],
    "Shenandoah"     => ["price" => 9.99,  "stock" => 5],
    "Petrus"         => ["price" => 16.50, "stock" => 5],
    "Cantate Domino" => ["price" => 2.10,  "stock" => 20]
];

$total = 0;
$orderPlaced = false;

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderPlaced = true;
    $orderQuantities = $_POST['quantity']; // associative array: piece => qty
}
?>

<h1>Order Your Favorite Music Piece Now!</h1>

<form method="post">
    <table>
        <tr>
            <th>Music Piece</th>
            <th>Price</th>
            <th>Available Stock</th>
            <th>Quantity</th>
        </tr>
        <?php foreach ($pieces as $name => $info): ?>
        <tr>
            <td><?= $name ?></td>
            <td>$<?= number_format($info['price'], 2) ?></td>
            <td><?= $info['stock'] ?></td>
            <td>
                <input type="number" name="quantity[<?= $name ?>]" value="0" min="0" max="<?= $info['stock'] ?>">
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <button type="submit" class="button">Calculate Price</button>
</form>

<?php if ($orderPlaced): ?>
<h2>Order Summary</h2>
<ul>
<?php
foreach ($orderQuantities as $name => $qty) {
    $price = $pieces[$name]['price'];
    $stock = $pieces[$name]['stock'];

    if ($qty == 0) {
        echo "<li>No copies of <strong>$name</strong> ordered.</li>";
    } elseif ($qty > $stock) {
        echo "<li>Cannot order $qty copies of <strong>$name</strong>. Only $stock available.</li>";
    } else {
        $subtotal = $price * $qty;
        $total += $subtotal;
        $pieces[$name]['stock'] -= $qty;
        echo "<li><strong>$name</strong> x $qty @ $$price each — Subtotal: $" . number_format($subtotal, 2) . "</li>";
    }
}
?>
</ul>

<h2>Total Price: $<?= number_format($total, 2) ?></h2>

<h2>Remaining Stock</h2>
<ul>
<?php
foreach ($pieces as $name => $info) {
    $stockMessage = $info['stock'] > 0 ? "Remaining: {$info['stock']} copies" : "Out of stock";
    echo "<li><strong>$name</strong> — $stockMessage</li>";
}
?>
</ul>

<a href="<?= $_SERVER['PHP_SELF'] ?>" class="button">Make Another Order</a>
<?php endif; ?>

<?php include 'footer.php'; ?>
