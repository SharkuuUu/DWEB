<?php include 'header.php'; ?>

<?php
$Pamugun = 12;
$Shenandoah = 0;
$Petrus = 5;
$CantateDomino = 20;

if ($Pamugun > 0) {
    $pamugunStock = "There are $Pamugun copies available of Pamugun.";
}

if ($Shenandoah > 0) {
    $shenandoahStock = "There are $Shenandoah copies available of Shenandoah.";
}

if ($Petrus > 0) {
    $petrusStock = "There are $Petrus copies available of Petrus.";
}

if ($CantateDomino > 0) {
    $cantateDominoStock = "There are $CantateDomino copies available of Cantate Domino.";
}
?>

<h1>Music Pieces Stock (If Statement)</h1>

<h2>Pamugun</h2>
<p><?= $pamugunStock ?? "Pamugun is out of stock." ?></p>

<h2>Shenandoah</h2>
<p><?= $shenandoahStock ?? "Shenandoah is out of stock." ?></p>

<h2>Petrus</h2>
<p><?= $petrusStock ?? "Petrus is out of stock." ?></p>

<h2>Cantate Domino</h2>
<p><?= $cantateDominoStock ?? "Cantate Domino is out of stock." ?></p>

<?php include 'footer.php'; ?>
