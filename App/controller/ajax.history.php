<?php
use core\App;

if (isset($_REQUEST['id'])) {
    $option = [
        'columns' => null,
        'contain' => null,
        'condition' => array('product_id' => $_REQUEST['id'])
    ];
    $history = App::get('database')->select('history', $option);
    $output = '
<table class="w-3/4 text-center">
    <thead>
        <tr>
        <th class="border-2 border-primary-gray bg-blue-500 py-4 text-white">Sr no.</th>
        <th class="border-2 border-primary-gray bg-blue-500 py-4 text-white">Emp ID</th>
            <th class="border-2 border-primary-gray bg-blue-500 py-4 text-white">UserName</th>
            <th class="border-2 border-primary-gray bg-blue-500 py-4 text-white">Name</th>
            <th class="border-2 border-primary-gray bg-blue-500 py-4 text-white">Date</th>
            </tr>
    </thead>
    <tbody class="h-3/4 overflow-auto bg-blue-100">';
    if (count($history) > 0) {
        for ($i = 0; $i < count($history); $i++) {
            $option = [
                'columns' => null,
                'contain' => null,
                'condition' => array('id' => $history[$i]['user_id'])
            ];
            $user = App::get('database')->select('users', $option);
            foreach ($user as $key => $value) {
                // die(print_r($value));
                $output .= '<tr>';
                $output .= '<td class="py-2 border-2 border-primary-gray">' . $i + 1 . '</td>';
                $output .= '<td class="py-2 border-2 border-primary-gray">' . $value['id'] . '</td>';
                $output .= '<td class="py-2 border-2 border-primary-gray">' . $value['username'] . '</td>';
                $output .= '<td class="py-2 border-2 border-primary-gray">' . $value['fname'] . ' ' . $value['lname'] . '</td>';
                $output .= '<td class="py-2 border-2 border-primary-gray">' . $history[$i]['date'] . '</td>';
                $output .= '</tr>';
            }
        }
    } else {
        $output .= '<tr><td colspan="5" class="py-2 border-2 border-primary-gray">No Record Found</td></tr>';
    }
    $output .= '</tbody>
</table>
';
} else if (isset($_REQUEST['user_id'])) {
    $option = [
        'columns' => null,
        'contain' => null,
        'condition' => array('user_id' => $_REQUEST['user_id'])
    ];
    $history = App::get('database')->select('history', $option);
    $output = '
<table class="w-3/4">
    <thead>
        <tr>
        <th class="border-2 border-primary-gray bg-blue-500 py-4 text-white">Sr no.</th>
        <th class="border-2 border-primary-gray bg-blue-500 py-4 text-white">Product ID</th>
            <th class="border-2 border-primary-gray bg-blue-500 py-4 text-white">Product Name</th>
            <th class="border-2 border-primary-gray bg-blue-500 py-4 text-white">Category</th>
            <th class="border-2 border-primary-gray bg-blue-500 py-4 text-white">Date</th>
            </tr>
    </thead>
    <tbody class="h-3/4 overflow-auto bg-blue-100">';
    if (count($history) > 0) {
        for ($i = 0; $i < count($history); $i++) {
            $option = [
                'columns' => null,
                'contain' => null,
                'condition' => array('id' => $history[$i]['product_id'])
            ];
            $product = App::get('database')->select('products', $option);
            // echo "<pre>";
            // print_r($product);
            // echo "</pre>";
            if (isset($product[0])) {
                $option = [
                    'columns' => null,
                    'contain' => null,
                    'condition' => array('id' => $product[0]['category_id'])
                ];
                $category = App::get('database')->select('categories', $option);
                $output .= '<tr>';
                $output .= '<td class="py-2 border-2 border-primary-gray">' . $i + 1 . '</td>';
                $output .= '<td class="py-2 border-2 border-primary-gray">' . $product[0]['id'] . '</td>';
                $output .= '<td class="py-2 border-2 border-primary-gray">' . $product[0]['product_name'] . '</td>';
                $output .= '<td class="py-2 border-2 border-primary-gray">' . $category[0]['category_name'] . '</td>';
                $output .= '<td class="py-2 border-2 border-primary-gray">' . $history[$i]['date'] . '</td>';
                $output .= '</tr>';
            }
        }
    } else {
        $output .= '<tr><td colspan="5" class="py-2 border-2 border-primary-gray">No Record Found</td></tr>';
    }
    $output .= '</tbody>
</table>
';
}

echo $output;