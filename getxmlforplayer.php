<?php
$c = file_get_contents('http://rss.sonibyte.com/rssfeed/56.xml');
preg_match_all('/enclosure url="(.*)" length/', $c, $out, PREG_PATTERN_ORDER);
preg_match_all('"|<[title]+>StarTalk:(.*)</[title]+>|U"length/', $c, $titles, PREG_PATTERN_ORDER);
if(sizeof($out[1]) >= 3 && sizeof($titles[1]) >= 3) {
    echo '[';   
    $e = end($out[1]); $b = reset($titles[1]);   echo '{ title:"StarTalk:' . $b . '", mp3:"'.$e.'" },';
    $e = prev($out[1]); $b = next($titles[1]);  echo '{ title:"StarTalk:' . $b . '", mp3:"'.$e.'" },';
    $e = prev($out[1]); $b = next($titles[1]);  echo '{ title:"StarTalk:' . $b . '", mp3:"'.$e.'" }';
    echo ']';
}

