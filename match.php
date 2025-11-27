<?php include 'header.php'; ?>

<?php
$Pamugun = 12.99;
$Shenandoah = 9.99;
$Petrus = 16.50;
$CantateDomino = 2.10;

$pamugunMsg = match (true) {
    $Pamugun >= 15 => "Pamugun price is $Pamugun. This is a premium product.",
    $Pamugun > 10 && $Pamugun < 15 => "Pamugun price is $Pamugun. This is a mid-range product.",
    default => "Pamugun price is $Pamugun. This is a budget product.",
};

$shenandoahMsg = match (true) {
    $Shenandoah >= 15 => "Shenandoah price is $Shenandoah. This is a premium product.",
    $Shenandoah > 10 && $Shenandoah < 15 => "Shenandoah price is $Shenandoah. This is a mid-range product.",
    default => "Shenandoah price is $Shenandoah. This is a budget product.",
};

$petrusMsg = match (true) {
    $Petrus >= 15 => "Petrus price is $Petrus. This is a premium product.",
    $Petrus > 10 && $Petrus < 15 => "Petrus price is $Petrus. This is a mid-range product.",
    default => "Petrus price is $Petrus. This is a budget product.",
};

$cantateDominoMsg = match (true) {
    $CantateDomino >= 15 => "Cantate Domino price is $CantateDomino. This is a premium product.",
    $CantateDomino > 10 && $CantateDomino < 15 => "Cantate Domino price is $CantateDomino. This is a mid-range product.",
    default => "Cantate Domino price is $CantateDomino. This is a budget product.",
};
?>

<h1>Music Pieces</h1>
<h2>Price Classification</h2>

<h3>Pamugun</h3>
<p><?= $pamugunMsg ?></p>

<h3>Shenandoah</h3>
<p><?= $shenandoahMsg ?></p>

<h3>Petrus</h3>
<p><?= $petrusMsg ?></p>

<h3>Cantate Domino</h3>
<p><?= $cantateDominoMsg ?></p>

<?php include 'footer.php'; ?>
