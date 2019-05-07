--TEST--
enchant_broker_free() function
--CREDITS--
marcosptf - <marcosptf@yahoo.com.br>
--SKIPIF--
<?php
if(!extension_loaded('enchant')) die('skip, enchant not loader');
if (!is_resource(enchant_broker_init())) {die("skip, resource dont load\n");}
?>
--FILE--
<?php
$broker = enchant_broker_init();
if (is_resource($broker)) {
    echo("OK\n");

    if (enchant_broker_free($broker)) {
        echo("OK\n");
    } else {
        echo("broker free failed\n");
    }
} else {
    echo("init failed\n");
}
echo("OK\n");
?>
--EXPECT--
OK
OK
OK
