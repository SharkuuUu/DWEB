<?php include 'header.php'; ?>

<?php
$pieces = [
    "Pamugun" => 12.99,
    "Shenandoah" => 9.99,
    "Petrus" => 16.50,
    "Cantate Domino" => 2.10
];
?>

<h1>Music Pieces and Prices</h1>

<ul>
<?php
foreach ($pieces as $name => $price) {
    echo "<li>$name costs $$price</li>";
}
?>
</ul>

<?php include 'footer.php'; ?>
