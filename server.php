<?php
$api = array(
  'https://x1337-1.herokuapp.com/',
  'https://x1337-2.herokuapp.com/',
  'https://x1337-3.herokuapp.com/',
  'https://x1337-4.herokuapp.com/',
  'https://x1337-5.herokuapp.com/'
);
echo $api[shuffle($api) - 1];
?>
