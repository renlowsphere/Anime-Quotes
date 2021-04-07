<?php
    $ch = curl_init();
      $url = "https://animechan.vercel.app/api/random";
  curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Android 8.1.0; Mob
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  $last = curl_exec($ch);
 curl_close($ch);
   $dec = json_decode($last);
   system("clear");
    echo "
                       Ren Lowsphere
                     _________________

   ";
  echo "Anime: ". $dec->anime;
   sleep(1);
  echo "\n Charachter: ". $dec->character;
   sleep(1);
   echo "\n Quote: ". $dec->quote;
 ?>
