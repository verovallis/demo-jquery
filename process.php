<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $number = $_POST['number'];
  $text = $_POST['text'];

  $output = [];
  $i = 0;
  while ($i < $number) {
    $output[] = $text . ' ' . "ke-" . $i;
    $i++;
  }

  header('Content-Type: application/json');
  echo json_encode($output);
}
?>
