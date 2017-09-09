<?php
  session_start();
  session_destroy();
  echo "...Logging out...";
  $url='index.php';
  echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
?>