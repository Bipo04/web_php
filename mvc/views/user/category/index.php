<?php
echo $data['title'];
echo "<pre></pre>";
foreach($data['categories'] as $key)
{
    echo $key['ID']." ".$key['Category_name'];
    echo "<br>";
}
?>