<?php 

class SampleClassName {

}

$sample = new SampleClassName();
echo "Object: " . ($sample::class) . PHP_EOL;
echo "Object: " . (get_class($sample)) . PHP_EOL;
echo "Object: " . (SampleClassName::class) . PHP_EOL;

?>