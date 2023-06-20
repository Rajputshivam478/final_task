<?php
session_start();
use core\App;

class PageController
{
    // ------------------ logout ------------------- 
    public function logout()
    {
        if (isset($_REQUEST['logout'])) {
            session_destroy();
            header('location: /FINALTASKPHP/login');
        }
    }

    //-------------------- employee page -------------------
    public function employee()
    {
        if (isset($_SESSION['role_id']) && $_SESSION['role_id'] != 1) {
            require_once "./App/views/employee.view.php";
        } else {
            header('location: /FINALTASKPHP/login');
        }
    }

    //------------------- admin assets page ------------------------
    public function home()
    {
        //------------ check the login person details ----------------------
        if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == '1') {
            $assets = "active-class";
            if (isset($_REQUEST['delete'])) {
                $id['product_id'] = $_REQUEST['delete'];
                App::get('database')->delete('products', 'id', $_REQUEST['delete']);
                $id['product_id'] = null;
                App::get('database')->update('users', $id, 'product_id', $_REQUEST['delete']);
            }
            
            //--------------- assign assets ----------------------

            if (isset($_REQUEST['assign'])) {

                $product['user_id'] = $_REQUEST['user_id'];
                $user['product_id'] = $_REQUEST['assign'];

                if ($_REQUEST['user_id'] == 'null') {
                    $user['product_id'] = 'null';
                    $product['user_id'] = 'null';
                    App::get('database')->update('users', $user, 'product_id', $_REQUEST['assign']);
                    App::get('database')->update('products', $product, 'id', $_REQUEST['assign']);
                } else {
                    $option1 = [
                        'columns' => null,
                        'contain' => null,
                        'condition' => null
                    ];
                    $p = App::get('database')->select('products', $option1);

                    for ($i = 0; $i < count($p); $i++) {
                        if ($p[$i]['user_id'] == $_REQUEST['user_id']) {
                            $count = 1;
                            $msg = "user have already assigned assets";
                        }
                    }
                    if (!isset($count)) {
                        App::get('database')->update('products', $product, 'id', $user['product_id']);
                        App::get('database')->update('users', $user, 'id', $product['user_id']);
                        $user['user_id'] = $product['user_id'];
                        App::get('database')->insert('history', $user);
                    }
                }
            }

            //-------------------- add asstes ------------------------
            if (isset($_REQUEST['addassets'])) {
                foreach ($_REQUEST as $key => $value) {
                    $_REQUEST[$key] = trim($value);
                    if (strlen($_REQUEST[$key]) == 0) {
                        $msg = "Please Enter Valid Data .. ";
                        goto e;
                    }
                }
                unset($_REQUEST['addassets']);
                if ($_REQUEST['user_id'] == 'null') {
                    $_REQUEST['user_id'] = null;
                }
                $option1 = [
                    'columns' => null,
                    'contain' => null,
                    'condition' => null
                ];
                $history = App::get('database')->select('history', $option1);
                $p = App::get('database')->select('products', $option1);
                // die(print_r($_REQUEST));
                if (count($p) > 0) {
                    for ($i = 0; $i < count($p); $i++) {
                        if ($p[$i]['user_id'] != $_REQUEST['user_id']) {
                            $set = true;
                        } else {
                            $set = null;
                            $msg = 'user have already assigned asset';
                        }
                    }
                }
                if (isset($set) || count($p) == 0) {
                    App::get('database')->insert('products', $_REQUEST);
                    $p = App::get('database')->select('products', $option1);
                    for ($i = count($p) - 1; $i < count($p); $i++) {
                        $data['product_id'] = $p[$i]['id'];
                    }
                    if (($_REQUEST['user_id'])) {
                        App::get('database')->update('users', $data, 'user_id', $_REQUEST['user_id']);
                        $data['user_id'] = $_REQUEST['user_id'];
                        App::get('database')->insert('history', $data);
                    }
                }
            }

            e:   // goto statement exopnent

            // $entries = $_REQUEST['entries'];
            $option1 = [
                'columns' => null,
                'contain' => null,
                'condition' => null
            ];
            $category = App::get('database')->select('categories', $option1);
            $users = App::get('database')->select('users', $option1);
            $option = [
                'columns' => array('products.id', 'product_name', 'category_name', 'user_id', 'fname', 'lname'),
                'contain' => array(
                    'join1' => array('INNER JOIN', 'categories', 'ON category_id = categories.id'),
                    'join2' => array('LEFT JOIN', 'users', 'ON user_id = users.id'),
                ),
                'condition' => null
            ];
            $statement = App::get('database')->select('products', $option);

            // ------------------------ pagination ------------------

            if (isset($_REQUEST['entries']) || isset($_REQUEST['page'])) {
                if (isset($_REQUEST['entries'])) {
                    $_SESSION['entries'] = $_REQUEST['entries'];
                }
                if (!isset($_REQUEST['page'])) {
                    $_REQUEST['page'] = 1;
                }
                $page = isset($_REQUEST['page']) && is_numeric($_REQUEST['page']) ? $_REQUEST['page'] : 1;
                $total_record = count($statement);
                $pages = ceil($total_record / $_SESSION['entries']);
                $start = ($page - 1) * $_SESSION['entries'];
                $option = [
                    'columns' => array('products.id', 'product_name', 'category_name', 'user_id', 'fname', 'lname'),
                    'contain' => array(
                        'join1' => array('INNER JOIN', 'categories', 'ON category_id = categories.id'),
                        'join2' => array('LEFT JOIN', 'users', 'ON user_id = users.id'),
                    ),
                    'condition' => null,
                    'limit' => ' LIMIT ' . $start . ',' . $_SESSION['entries']
                ];
                $statement = App::get('database')->select('products', $option);

            }
            require_once "./App/views/assets.view.php";
        } else {
            header('location: /FINALTASKPHP/login');
        }
    }

    //---------------------- categories page ----------------------
    public function category()
    {
        //--------------------- check the login details ---------------------
        if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == '1') {
            $category = "active-class";
            if (isset($_REQUEST['addcategory'])) {
                unset($_REQUEST['addcategory']);
                App::get('database')->insert('categories', $_REQUEST);
            }
            $option = [
                'columns' => array('categories.id', 'category_name', 'user_id', 'category_id'),
                'contain' => array(
                    'join2' => array('LEFT JOIN', 'products', 'ON categories.id = category_id'),
                ),
                'condition' => null
            ];

            $statement = App::get('database')->select('categories', $option);

            //-------------------- pagination ----------------------
            if (isset($_REQUEST['entries']) || isset($_REQUEST['page'])) {
                if (isset($_REQUEST['entries'])) {
                    $_SESSION['entries'] = $_REQUEST['entries'];
                }
                if (!isset($_REQUEST['page'])) {
                    $_REQUEST['page'] = 1;
                }
                $page = isset($_REQUEST['page']) && is_numeric($_REQUEST['page']) ? $_REQUEST['page'] : 1;
                $total_record = count($statement);
                $pages = ceil($total_record / $_SESSION['entries']);
                $start = ($page - 1) * $_SESSION['entries'];
                $option = [
                    'columns' => array('categories.id', 'category_name', 'user_id', 'category_id'),
                    'contain' => array(
                        'join2' => array('LEFT JOIN', 'products', 'ON categories.id = category_id'),
                    ),
                    'condition' => null,
                    'limit' => ' LIMIT ' . $start . ',' . $_SESSION['entries']
                ];
                $statement = App::get('database')->select('categories', $option);

            }
            require_once "./App/views/category.view.php";
        } else {
            header('location: /FINALTASKPHP/login');
        }
    }

    //-------------------- users page -------------------------
    public function user()
    {
        //------------------- check the login details ----------------------------
        if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == '1') {
            $user = "active-class";

            //------------------- delete user ------------------
            if (isset($_REQUEST['delete'])) {
                $id['user_id'] = $_REQUEST['delete'];
                App::get('database')->delete('users', 'id', $_REQUEST['delete']);
                $id['user_id'] = null;
                App::get('database')->update('products', $id, 'user_id', $_REQUEST['delete']);
            }

            //-------------------- add user -----------------------
            if (isset($_REQUEST['adduser'])) {
                foreach ($_REQUEST as $key => $value) {
                    $_REQUEST[$key] = trim($value);
                    if (strlen($_REQUEST[$key]) == 0) {
                        $msg = "Please Enter Valid Data .. ";
                        goto e;
                    }
                }
                unset($_REQUEST['adduser']);
                App::get('database')->insert('users', $_REQUEST);
            }

            e: //goto statement

            $option1 = [
                'columns' => null,
                'contain' => null,
                'condition' => null
            ];
            $role = App::get('database')->select('roles', $option1);

            $option = [
                'columns' => array('users.id', 'username', 'role', 'product_name', 'fname', 'lname'),
                'contain' => array(
                    'join1' => array('INNER JOIN', 'roles', 'ON role_id = roles.id'),
                    'join2' => array('LEFT JOIN', 'products', 'ON product_id = products.id'),
                    // 'join3' => array('LEFT JOIN', 'history', 'ON users.id = history.user_id'),
                ),
                'condition' => null
            ];
            $statement = App::get('database')->select('users', $option);

            //------------------------ pagination ----------------------
            if (isset($_REQUEST['entries']) || isset($_REQUEST['page'])) {
                if (isset($_REQUEST['entries'])) {
                    $_SESSION['entries'] = $_REQUEST['entries'];
                }
                if (!isset($_REQUEST['page'])) {
                    $_REQUEST['page'] = 1;
                }
                $page = isset($_REQUEST['page']) && is_numeric($_REQUEST['page']) ? $_REQUEST['page'] : 1;
                $total_record = count($statement);
                $pages = ceil($total_record / $_SESSION['entries']);
                $start = ($page - 1) * $_SESSION['entries'];
                $option = [
                    'columns' => array('users.id', 'username', 'role', 'product_name', 'fname', 'lname'),
                    'contain' => array(
                        'join1' => array('INNER JOIN', 'roles', 'ON role_id = roles.id'),
                        'join2' => array('LEFT JOIN', 'products', 'ON product_id = products.id'),
                        // 'join3' => array('LEFT JOIN', 'history', 'ON users.id = history.user_id'),
                    ),
                    'condition' => null,
                    'limit' => ' LIMIT ' . $start . ',' . $_SESSION['entries']
                ];
                $statement = App::get('database')->select('users', $option);
            }
            require_once "./App/views/users.view.php";
        } else {
            header('location: /FINALTASKPHP/login');
        }
    }

    //-------------------------- login page -----------------------
    public function login()
    {
        if (isset($_REQUEST['login'])) {
            foreach ($_REQUEST as $key => $value) {
                $_REQUEST[$key] = trim($value);
                if (strlen($_REQUEST[$key]) == 0) {
                    $msg = "Please Enter Valid Data .. ";
                    goto e;
                }
            }
            $option1 = [
                'columns' => null,
                'contain' => null,
                'condition' => array('username' => $_REQUEST['username'], 'password' => $_REQUEST['password'])
            ];
            $user = App::get('database')->select('users', $option1);

            // ----------------------- fetch data from database to check and match the details with login data -----------------------
            if (count($user) > 0) {
                session_start();
                $_SESSION = $user[0];
                if ($_SESSION['role_id'] == '1') {
                    header('location: /FINALTASKPHP/assets');
                } else {
                    header('location: /FINALTASKPHP/employee');
                }
            } else {
                $msg = "Invalid Credentials";
            }
        }
        e:
        require_once "./App/views/login.view.php";
    }

    // ---------------------- page not found -------------------
    public function error_404()
    {
        require_once "./App/views/404.php";
    }

    public function ajax_search()
    {
        require_once "./App/controller/ajax.search.php";
    }
    public function ajax_update()
    {
        require_once "./controller/ajax.update.php";
    }
    public function ajax_history()
    {
        require_once "./controller/ajax.history.php";
    }
    public function ajax_delete()
    {
        require_once "./controller/ajax.delete.php";
    }
}