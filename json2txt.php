<?php

$json = file_get_contents('quran.json');
$ayahs = json_decode($json);
$lines = [];
foreach($ayahs->data->surahs as $surah) {
  foreach ($surah->ayahs as $ayah) {
  $lines[] = $ayah->text;
  }
}

file_put_contents('quran.txt', implode("", $lines));

