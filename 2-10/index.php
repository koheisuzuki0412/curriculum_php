<?php
  function TriangleVolume($vertical, $width, $height) {
    $volume = $vertical * $width * $height;
    echo $volume . "m3";
  }
  TriangleVolume(5,10,8);
?>