<?php
  if (!isset($_POST['firstname'])) {
        header('Location: error.php?e=firstname');
        exit;
    }

    // 1) Text inputs
    $firstname  = trim($_POST['firstname']);
    $lastname   = trim($_POST['lastname']);
  
    // 2) Radio button
    $species    = $_POST['species'] ?? '';
  
    // 3) Age (text)
    $age        = trim($_POST['age']);
  
    // 4) Checkboxes come in as an array – join them into a string:
    $bookings   = isset($_POST['book']) 
                  ? implode(', ', $_POST['book']) 
                  : 'none';
  
    // 5) Dropdown
    $food       = $_POST['food'] ?? 'none';
  
    // 6) Party size
    $partySize  = trim($_POST['partySize']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rohirrim Booking</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Rohirrim Booking Form" />
	<meta name="keywords"    content=" " />
</head>
<body>
    <h1>Thank you, <?= htmlspecialchars($firstname) ?>!</h1>
    <p>You’ve booked: <?= htmlspecialchars($bookings) ?></p>
    <p>Species: <?= htmlspecialchars($species) ?>, Age: <?= htmlspecialchars($age) ?></p>
    <p>Menu: <?= htmlspecialchars($food) ?></p>
    <p>Travelers: <?= htmlspecialchars($partySize) ?></p>
</body>
</html>