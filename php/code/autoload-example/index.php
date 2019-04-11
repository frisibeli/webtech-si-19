<?php
spl_autoload_register(function($className){ 
  include 'classes/'.$className . '.class.php';
});

$obj = new MyClass("this is my message");
$obj->saySomething();
?>

<?php
  $elements = [1, 2, 3, 4];
?>
  ...
<? if (count($elements) > 0){ ?>
  <ul>
  <? foreach($elements as $element){ ?>
    <li><?= $element ?></li>
  <? } ?>
  </ul>
<? }else{ ?>
  <div>No elements</div>
<? } ?>