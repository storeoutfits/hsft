<?php
if ($_GET['sld'] == true) {
$url = "https://storeoutfits.github.io/hsft/";
$count = 0;
foreach (new DirectoryIterator(__DIR__) as $file) {
  if ($file->isFile()) {
    $a = $file->getFilename();
    if (strpos($a, '.jpg') !== false || strpos($a, '.png') !== false) {
    $count++;
    if ($count == 1) {
      echo '<div class="wallpaperc c'.$count.' active" style="background-image:url('.$url.'/'.$file->getFilename().')"><img src="'.$url.'/'.$file->getFilename().'"></div>';
    }else{
    echo '<div class="wallpaperc c'.$count.'" style="background-image:url('.$url.'/'.$file->getFilename().')"></div>';
    }

  }}
}
}
?>
