<?php

require 'class.base.php';
$base_instance=new base();

$userid=$base_instance->get_userid();

$item=isset($_REQUEST['item']) ? (int)$_REQUEST['item'] : exit;

if ($item) {

$base_instance->query("DELETE FROM {$base_instance->entity['KNOWLEDGE']['MAIN']} WHERE ID='$item' AND user='$userid'");

$base_instance->query("DELETE FROM {$base_instance->entity['KNOWLEDGE']['FLASHCARDS']} WHERE word_id='$item' AND user='$userid'");

echo 'item',$item,'|';

}

?>