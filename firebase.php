<?php 
include "vendor/autoload.php";

const DEFAULT_URL = 'https://chat-5ac81.firebaseio.com/';
const DEFAULT_TOKEN = 'aq6Rl8qrExzlw4bEAnZQYYtQSfFpxv3ki3gAkoXA';
const DEFAULT_PATH = '/peopleAttibute';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

// --- storing an array ---
// $test = array(
//     "foo" => "bar",
//     "i_love" => "lamp",
//     "id" => 42
// );
// $dateTime = new DateTime();
// $firebase->set(DEFAULT_PATH . '/' . $dateTime->format('c'), $test);

// // --- storing a string ---
// $firebase->set(DEFAULT_PATH . '/name/contact001', "John Doe");

// --- reading the stored string ---
$name = $firebase->get(DEFAULT_PATH);
var_dump($name);
?>