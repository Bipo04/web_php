<?php
echo '<h1>'.$data['title'].'</h1>';
foreach($data['data'] as $key)
{
    echo $key['ID']." ".$key['Category_name'];
    echo "<br>";
}
?>