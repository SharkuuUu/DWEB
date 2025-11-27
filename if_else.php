<?php include 'header.php'; ?>

<?php
$Pamugun = 12;
$Shenandoah = 0;
$Petrus = 5;
$CantateDomino = 20;

if ($Pamugun > 0) {
    $pamugunStock = "There are $Pamugun copies available of Pamugun.";
} else {
    $pamugunStock = "There are no more copies of Pamugun. More stock coming soon.";
}

if ($Shenandoah > 0) {
    $shenandoahStock = "There are $Shenandoah copies available of Shenandoah.";
} else {
    $shenandoahStock = "There are no more copies of Shenandoah. More stock coming soon.";
}

if ($Petrus > 0) {
    $petrusStock = "There are $Petrus copies available of Petrus.";
} else {
    $petrusStock = "There are no more copies of Petrus. More stock coming soon.";
}

if ($CantateDomino > 0) {
    $cantateDominoStock = "There are $CantateDomino copies available of Cantate Domino.";
} else {
    $cantateDominoStock = "There are no more copies of Cantate Domino. More stock coming soon.";
}
?>

<h1>Music Pieces Stock</h1>

<h2>Pamugun</h2>
<p><?= $pamugunStock ?></p>

<h2>Shenandoah</h2>
<p><?= $shenandoahStock ?></p>

<h2>Petrus</h2>
<p><?= $petrusStock ?></p>

<h2>Cantate Domino</h2>
<p><?= $cantateDominoStock ?></p>

<?php include 'footer.php'; ?>
