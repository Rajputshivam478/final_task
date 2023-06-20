<?php

// ------------------- update data with help of ajax --------------------- 
use core\App;

$_REQUEST['id'];

$option = [
    'columns' => null,
    'contain' => null,
    'condition' => array('id' => $_REQUEST['id'])
];
$product_data = App::get('database')->select('products', $option);
$option1 = [
    'columns' => null,
    'contain' => null,
    'condition' => null
];
$users = App::get('database')->select('users', $option1);
// print_r($product_data);
// die();
$output = '<tr>
<td class="text-start font-semibold" >
    <label for="users">
        <span>Assigned Assets To</span>
    </label>
</td>
<td>
<select name="user_id" id="users" class="w-full border-2 text-black border-primary-gray px-12 py-2 focus:border-primary-green rounded-lg outline-none">';
$output .= '<option value="null">None</option>';
for ($i = 0; $i < count($users); $i++) {
    $output .= '<option value="' . $users[$i]['id'] . '">' . $users[$i]['fname'] . ' ' . $users[$i]['lname'] . '</option>';
}
$output .= '</select></td></tr>
<tr><td>
<button type="submit" name="assign" value="' . $product_data[0]['id'] . '" class="border border-primary-gray px-12 py-3 rounded-lg hover:bg-blue-400 bg-blue-500 text-white">Assign</button>
</td></tr>
';

echo $output;