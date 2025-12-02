<?php include 'header.php'; ?>

<?php
$pieces = [
    "Pamugun"        => ["price" => 12.99, "stock" => 12],
    "Shenandoah"     => ["price" => 9.99,  "stock" => 0],
    "Petrus"         => ["price" => 16.50, "stock" => 5],
    "Cantate Domino" => ["price" => 2.10,  "stock" => 20]
];
?>

<h1>Music Pieces and Prices</h1>

<ul>
<?php
foreach ($pieces as $name => $info) {
    $price = number_format($info['price'], 2);
    $stockMessage = $info['stock'] > 0 
        ? "There are {$info['stock']} copies available."
        : "Out of stock. More coming soon.";
    
    echo "<li><strong>$name</strong>: $$price — $stockMessage</li>";
}
?>
</ul>

<?php include 'footer.php'; ?>
    
