<?php include 'header.php'; ?>

<?php
$pieces = ["Pamugun", "Shenandoah", "Petrus", "Cantate Domino"];
$prices = [12.99, 9.99, 16.50, 2.10];

$counter = 0;
?>

<h1>Music Piece Prices</h1>

<div>
<?php
while ($counter < count($pieces)) {
    echo "<p><strong>{$pieces[$counter]}</strong> costs \$" . number_format($prices[$counter], 2) . "</p>";
    $counter++;
}
?>
</div>

<?php include 'footer.php'; ?>
