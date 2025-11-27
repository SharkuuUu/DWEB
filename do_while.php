<?php include 'header.php'; ?>

<?php
$pieces = ["Pamugun", "Shenandoah", "Petrus", "Cantate Domino"];
$prices = [12.99, 9.99, 16.50, 2.10];

$index = 0;
?>

<h1>Music Piece Prices (Do-While Loop)</h1>

<p>
<?php
do {
    echo $pieces[$index] . " costs $ " . $prices[$index];
    echo "<br>";
    $index++;
} while ($index < count($pieces));
?>
</p>

<?php include 'footer.php'; ?>
