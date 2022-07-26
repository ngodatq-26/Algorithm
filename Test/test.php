<?php
$a = array(
    'name' => 'nullable|required',
    'email' => 'nullable|required'
);

print_r($a);
echo '<br>';

foreach ($a as $data => $item) {
    echo $data;

    echo '<br>';
}

if(isset($a)) {
    echo 'a ton tai';
}
echo '<br>';

