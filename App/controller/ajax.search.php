<?php

// ----------------------- search data with the help of ajax -----------------------
use core\App;
use core\database\QueryBuilder;

$search = $_REQUEST['search'];
$table = $_REQUEST['table'];
$link = $_REQUEST['link'];
$option = [
    'columns' => null,
    'contain' => null,
    'condition' => null
];
$data = App::get('database')->select($table, $option);
$users = App::get('database')->select('users', $option);

if (!empty($data)) {
    if ($link == "assets") {
        $option = [
            'columns' => array('products.id', 'product_name', 'category_name', 'user_id', 'fname', 'lname'),
            'contain' => array(
                'join1' => array('INNER JOIN', 'categories', 'ON category_id = categories.id'),
                'join2' => array('LEFT JOIN', 'users', 'ON user_id = users.id'),
            ),
            'condition' => null
        ];
        $data = App::get('database')->select($table, $option);
        $arr = array_keys($data[0]);
        unset($arr[0]);
        // print_r($data[0]);die();
        foreach ($arr as $key => $value) {
            $a[] = "$value LIKE '%$search%'";
        }
        $where = implode(" OR ", $a);
        $option = [
            'columns' => array('products.id', 'product_name', 'category_name', 'user_id', 'fname', 'lname'),
            'contain' => array(
                'join1' => array('INNER JOIN', 'categories', 'ON category_id = categories.id'),
                'join2' => array('LEFT JOIN', 'users', 'ON user_id = users.id'),
            ),
            'condition' => $where
        ];
        // $data = App::get('database')->select('categories', $option);
        // $arr = array_keys($data[0]);
        $statement = App::get('database')->select($table, $option);
        if (!empty($statement)) {
            $output = '<table class="w-full">
            <thead class="text-primary-green font-semibold" >
                    <tr>
                        <th class="py-4">Sr no.</th>
                        <th class="py-4">Product Name</th>
                        <th class="py-4">Product Category</th>
                        <th class="py-4">Update or Delete</th>
                        <th class="py-4">Status</th>
                    </tr>
                </thead>';
            for ($i = 0; $i < count($statement); $i++) {
                $output .= '<tbody class="bg-white">
                <tr>
                <td class="py-6 text-center font-semibold">' . $i + 1 . '</td>
            <td class="py-6 text-center font-semibold">' . $statement[$i]['product_name'] . '</td>
            <td class="py-6 text-center font-semibold">' . $statement[$i]['category_name'] . '</td>
            <td class="py-6 text-center font-semibold text-white flex items-center justify-center gap-1">
                <button value="' . $statement[$i]['id'] . '"
                    class="assign-btn py-3 flex items-center gap-1 px-4 border border-primary-gray rounded-lg hover:bg-yellow-500 bg-yellow-400">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                        enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="currentColor">
                        <g>
                            <rect fill="none" height="24" width="24"></rect>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <path
                                        d="M18 13c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5zm3 5.5h-2.5V21h-1v-2.5H15v-1h2.5V15h1v2.5H21v1z">
                                    </path>
                                </g>
                                <g>
                                    <path
                                        d="M11.69 15c.36-.75.84-1.43 1.43-2H7v-2h11c1.07 0 2.09.25 3 .69V5c0-1.1-.9-2-2-2h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h6.69c-.44-.91-.69-1.93-.69-3 0-.34.03-.67.08-1H7v-2h4.69zM12 2.75c.41 0 .75.34.75.75s-.34.75-.75.75-.75-.34-.75-.75.34-.75.75-.75zM7 7h10v2H7V7z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span>Assign</span>
                </button>
                <button id="history"
                    class="py-3 flex items-center gap-1 px-4 border border-primary-gray rounded-lg hover:bg-blue-600 bg-blue-500">
                    <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"><!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                        <path
                            d="M504 255.531c.253 136.64-111.18 248.372-247.82 248.468-59.015.042-113.223-20.53-155.822-54.911-11.077-8.94-11.905-25.541-1.839-35.607l11.267-11.267c8.609-8.609 22.353-9.551 31.891-1.984C173.062 425.135 212.781 440 256 440c101.705 0 184-82.311 184-184 0-101.705-82.311-184-184-184-48.814 0-93.149 18.969-126.068 49.932l50.754 50.754c10.08 10.08 2.941 27.314-11.313 27.314H24c-8.837 0-16-7.163-16-16V38.627c0-14.254 17.234-21.393 27.314-11.314l49.372 49.372C129.209 34.136 189.552 8 256 8c136.81 0 247.747 110.78 248 247.531zm-180.912 78.784l9.823-12.63c8.138-10.463 6.253-25.542-4.21-33.679L288 256.349V152c0-13.255-10.745-24-24-24h-16c-13.255 0-24 10.745-24 24v135.651l65.409 50.874c10.463 8.137 25.541 6.253 33.679-4.21z">
                        </path>
                    </svg>
                    <span>History</span>
                </button>
                <button id="delete" data-id="' . $statement[$i]['id'] . '" class="py-3 flex items-center gap-1 px-4 border border-primary-gray rounded-lg hover:bg-red-600 bg-red-500">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                        enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="currentColor">
                        <g>
                            <path d="M0,0h24v24H0V0z" fill="none"></path>
                        </g>
                        <g>
                            <path
                                d="M6,19c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V7H6V19z M9.17,12.59c-0.39-0.39-0.39-1.02,0-1.41c0.39-0.39,1.02-0.39,1.41,0 L12,12.59l1.41-1.41c0.39-0.39,1.02-0.39,1.41,0s0.39,1.02,0,1.41L13.41,14l1.41,1.41c0.39,0.39,0.39,1.02,0,1.41 s-1.02,0.39-1.41,0L12,15.41l-1.41,1.41c-0.39,0.39-1.02,0.39-1.41,0c-0.39-0.39-0.39-1.02,0-1.41L10.59,14L9.17,12.59z M18,4h-2.5 l-0.71-0.71C14.61,3.11,14.35,3,14.09,3H9.91c-0.26,0-0.52,0.11-0.7,0.29L8.5,4H6C5.45,4,5,4.45,5,5s0.45,1,1,1h12 c0.55,0,1-0.45,1-1S18.55,4,18,4z">
                            </path>
                        </g>
                    </svg>
                    <span>Delete</span>
                </button>
            </td>
                    ';
                if (strlen($statement[$i]['user_id']) > 0) {
                    $output .= '<td class="text-center font-semibold">Assets assigned to ' . $statement[$i]['fname'] . ' ' . $statement[$i]['lname'] . '</td></tr>';
                } else {
                    $output .= '<td class="py-6 text-center font-semibold">Available</td></tr>';
                }
            }
            $output .= '</tbody>
            </table>
            ';
            echo $output;
        } else {
            echo '<table><tr><td colspan="5" class="py-6 text-center font-semibold"><h2>No Record Found</h2></td></tr></table>';
        }
    } elseif ($link == "users") {
        $option = [
            'columns' => array('users.id', 'username', 'role', 'product_name', 'fname', 'lname'),
            'contain' => array(
                'join1' => array('INNER JOIN', 'roles', 'ON role_id = roles.id'),
                'join2' => array('LEFT JOIN', 'products', 'ON product_id = products.id'),
                // 'join3' => array('LEFT JOIN', 'history', 'ON users.id = history.user_id'),
            ),
            'condition' => null
        ];
        $data = App::get('database')->select($table, $option);
        foreach ($data[0] as $key => $value) {
            if ($key == 'id') {
                $a[] = "$table.$key LIKE '%$search%'";
            } else {
                $a[] = "$key LIKE '%$search%'";
            }
        }
        $where = implode(" OR ", $a);
        $option = [
            'columns' => array('users.id', 'username', 'role', 'product_name', 'fname', 'lname'),
            'contain' => array(
                'join1' => array('INNER JOIN', 'roles', 'ON role_id = roles.id'),
                'join2' => array('LEFT JOIN', 'products', 'ON product_id = products.id'),
            ),
            'condition' => $where
        ];
        $statement = App::get('database')->select($table, $option);
        if (!empty($statement)) {
            $output = '<table  class="w-full py-4">
            <thead class="text-primary-green font-semibold">
                    <tr>
                        <th class="py-4">Emp ID</th>
                        <th class="py-4">NAME</th>
                        <th class="py-4">User Name</th>
                        <th class="py-4">Role</th>
                        <th class="py-4">Product Name</th>
                        <th class="py-4">Update or Delete</th>
                    </tr>
                </thead>
                <tbody class="bg-white" id="table-data">';
            for ($i = 0; $i < count($statement); $i++) {
                $output .= '
                    <tr>
                    <td class="py-6 text-center font-semibold">' . $statement[$i]['id'] . '</td>
                    <td class="py-6 text-center font-semibold">' . $statement[$i]['fname'] . ' ' . $statement[$i]['lname'] . '</td>
                    <td class="py-6 text-center font-semibold">' . $statement[$i]['username'] . '</td>
                    <td class="py-6 text-center font-semibold">' . $statement[$i]['role'] . '</td>';
                if (isset($statement[$i]["product_name"])) {
                    $output .= '<td class="py-6 text-center font-semibold">' . $statement[$i]['product_name'] . '</td>';
                } else {
                    $output .= '<td class="py-6 text-center font-semibold text-gray-400">Not Assigned</td>';
                }

                $output .= '<td class="py-6 text-center font-semibold text-white flex items-center justify-center gap-1">
                        <button value="'. $statement[$i]["id"].'"
                            class="history-btn py-3 flex items-center gap-1 px-4 border border-primary-gray rounded-lg hover:bg-blue-600 bg-blue-500">
                            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                                <path
                                    d="M504 255.531c.253 136.64-111.18 248.372-247.82 248.468-59.015.042-113.223-20.53-155.822-54.911-11.077-8.94-11.905-25.541-1.839-35.607l11.267-11.267c8.609-8.609 22.353-9.551 31.891-1.984C173.062 425.135 212.781 440 256 440c101.705 0 184-82.311 184-184 0-101.705-82.311-184-184-184-48.814 0-93.149 18.969-126.068 49.932l50.754 50.754c10.08 10.08 2.941 27.314-11.313 27.314H24c-8.837 0-16-7.163-16-16V38.627c0-14.254 17.234-21.393 27.314-11.314l49.372 49.372C129.209 34.136 189.552 8 256 8c136.81 0 247.747 110.78 248 247.531zm-180.912 78.784l9.823-12.63c8.138-10.463 6.253-25.542-4.21-33.679L288 256.349V152c0-13.255-10.745-24-24-24h-16c-13.255 0-24 10.745-24 24v135.651l65.409 50.874c10.463 8.137 25.541 6.253 33.679-4.21z">
                                </path>
                            </svg>
                            <span>History</span>
                        </button>
                        <button value="'. $statement[$i]["id"].'"
                            class="py-3 delete-btn flex items-center gap-1 px-4 border border-primary-gray rounded-lg hover:bg-red-600 bg-red-500">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                viewBox="0 0 24 24" fill="currentColor">
                                <g>
                                    <path d="M0,0h24v24H0V0z" fill="none"></path>
                                </g>
                                <g>
                                    <path
                                        d="M6,19c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V7H6V19z M9.17,12.59c-0.39-0.39-0.39-1.02,0-1.41c0.39-0.39,1.02-0.39,1.41,0 L12,12.59l1.41-1.41c0.39-0.39,1.02-0.39,1.41,0s0.39,1.02,0,1.41L13.41,14l1.41,1.41c0.39,0.39,0.39,1.02,0,1.41 s-1.02,0.39-1.41,0L12,15.41l-1.41,1.41c-0.39,0.39-1.02,0.39-1.41,0c-0.39-0.39-0.39-1.02,0-1.41L10.59,14L9.17,12.59z M18,4h-2.5 l-0.71-0.71C14.61,3.11,14.35,3,14.09,3H9.91c-0.26,0-0.52,0.11-0.7,0.29L8.5,4H6C5.45,4,5,4.45,5,5s0.45,1,1,1h12 c0.55,0,1-0.45,1-1S18.55,4,18,4z">
                                    </path>
                                </g>
                            </svg>
                            <span>Delete</span>
                        </button>
                    </td>
                    </tr>
                    ';
            }
            $output .= '
            </tbody>
            </table>';
            echo $output;
        } else {
            echo '<table><tr><td colspan="7" class="py-6 text-center font-semibold"><h2>No Record Found</h2></td></tr></table>';
        }
    } elseif ($link == "categories") {
        $option = [
            'columns' => 'category_name',
            'contain' => array(
                'join2' => array('LEFT JOIN', 'products', 'ON categories.id = category_id'),
            ),
            'condition' => null
        ];
        $data = App::get('database')->select($table, $option);
        foreach ($data[0] as $key => $value) {
            if ($key == 'id') {
                $a[] = "$table.$key LIKE '%$search%'";
            } else {
                $a[] = "$key LIKE '%$search%'";
            }
        }
        $where = implode(" OR ", $a);
        $option = [
            'columns' => array('categories.id', 'category_name', 'user_id', 'category_id'),
            'contain' => array(
                'join2' => array('LEFT JOIN', 'products', 'ON categories.id = category_id'),
            ),
            'condition' => $where
        ];
        // $data = App::get('database')->select('categories', $option);
        // $arr = array_keys($data[0]);
        $statement = App::get('database')->select($table, $option);
        // echo "<pre>";
        // print_r($option);
        // echo "</pre>";
        // die();
        if (!empty($statement)) {
            $output = "<table>";
            $sr = 1;
            for ($i = 0; $i < count($statement); $i++) {
                $count = 0;
                $r[] = $statement[$i]['id'];
                $statement[$i]['count_assign'] = 0;
                $statement[$i]['total_count'] = 0;
                if (isset($statement[$i]['user_id'])) {
                    $statement[$i]['count_assign'] += 1;
                }
                for ($j = 0; $j < count($statement); $j++) {
                    if ($statement[$i]['id'] == $statement[$j]['category_id']) {
                        $statement[$i]['total_count'] += 1;
                    }
                }
                for ($k = 0; $k < count($r); $k++) {
                    for ($j = 0; $j < count($r) && $j != $k; $j++) {
                        if ($r[$k] == $r[$j]) {
                            $count++;
                            $r[$k] = null;
                            break;
                        }
                    }
                }
                if ($count < 1) {
                    $output .= '
                    <tr>
                    <td class="py-6 text-center font-semibold">' . $sr . '</td>
                    <td class="py-6 text-center font-semibold">' . $statement[$i]['category_name'] . '</td>
                    <td class="py-6 text-center font-semibold">' . $statement[$i]['total_count'] . '</td>
                    <td class="py-6 text-center font-semibold">' . $statement[$i]['count_assign'] . '</td>
                    </tr>';
                    $sr++;
                }
            }
            $output .= "</table>";
            echo $output;
        } else {
            echo '<table><tr><td colspan="6" class="py-6 text-center font-semibold"><h2>No Record Found</h2></td></tr></table>';
        }
    } else {
        echo '<tr><td colspan="5" class="py-6 text-center font-semibold"><h2>No Found Available</h2></td></tr>';
    }
}