<?php include 'header.php'; ?>

<?php
$pieces = ["Pamugun", "Shenandoah", "Petrus", "Cantate Domino"];
$prices = [12.99, 9.99, 16.50, 2.10];

$counter = 0;
?>

<h1>Music Piece Prices</h1>

<p>
<?php
while ($counter < count($pieces)) {
    echo $pieces[$counter] . " costs $ " . $prices[$counter];
    echo "<br>";
    $counter++;
}
?>
</p>

<?php include 'footer.php'; ?>
