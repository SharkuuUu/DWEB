<?php include 'header.php'; ?>

<?php
$Pamugun = 12.99;
$Shenandoah = 9.99;
$Petrus = 16.50;
$CantateDomino = 2.10;

if ($Pamugun >= 15) {
    $pamugunMsg = "Pamugun price is $Pamugun. This is a premium product.";
} elseif ($Pamugun > 10 && $Pamugun < 15) {
    $pamugunMsg = "Pamugun price is $Pamugun. This is a mid-range product.";
} else {
    $pamugunMsg = "Pamugun price is $Pamugun. This is a budget product.";
}


if ($Shenandoah >= 15) {
    $shenandoahMsg = "Shenandoah price is $Shenandoah. This is a premium product.";
} elseif ($Shenandoah > 10 && $Shenandoah < 15) {
    $shenandoahMsg = "Shenandoah price is $Shenandoah. This is a mid-range product.";
} else {
    $shenandoahMsg = "Shenandoah price is $Shenandoah. This is a budget product.";
}

if ($Petrus >= 15) {
    $petrusMsg = "Petrus price is $Petrus. This is a premium product.";
} elseif ($Petrus > 10 && $Petrus < 15) {
    $petrusMsg = "Petrus price is $Petrus. This is a mid-range product.";
} else {
    $petrusMsg = "Petrus price is $Petrus. This is a budget product.";
}

if ($CantateDomino >= 15) {
    $cantateDominoMsg = "Cantate Domino price is $CantateDomino. This is a premium product.";
} elseif ($CantateDomino > 10 && $CantateDomino < 15) {
    $cantateDominoMsg = "Cantate Domino price is $CantateDomino. This is a mid-range product.";
} else {
    $cantateDominoMsg = "Cantate Domino price is $CantateDomino. This is a budget product.";
}
?>

<h1>Music Piece Price Classification</h1>

<h2>Pamugun</h2>
<p><?= $pamugunMsg ?></p>

<h2>Shenandoah</h2>
<p><?= $shenandoahMsg ?></p>

<h2>Petrus</h2>
<p><?= $petrusMsg ?></p>

<h2>Cantate Domino</h2>
<p><?= $cantateDominoMsg ?></p>

<?php include 'footer.php'; ?>
