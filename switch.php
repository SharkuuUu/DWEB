<?php include 'header.php'; ?>


<?php
$piece = "Petrus";

switch ($piece) {
    case "Pamugun":
        $message = "Pamugun is available in stock.";
        break;
    case "Shenandoah":
        $message = "Shenandoah is available in stock.";
        break;
    case "Petrus":
        $message = "Petrus is available in stock.";
        break;
    case "Cantate Domino":
        $message = "Cantate Domino is available in stock.";
        break;
    default:
        $message = "This music piece is not available in our store.";
}
?>

<h1>Music Piece Availability</h1>
<p><?= $message ?></p>

<?php include 'footer.php'; ?>
