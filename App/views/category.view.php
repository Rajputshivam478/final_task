<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Categories</title>
    <link rel="stylesheet" href="./public/css/output.css">
</head>

<body>
    <?php
    require './App/views/partial/header.php';
    require './App/views/partial/sidebar.php';
    ?>
    <main class="bg-secondary-gray ml-64 h-full pt-28 px-4">
        <div id="model" class="w-full h-full fixed inset-0 bg-black/40 text-center z-30 hidden">
            <form method="post" action="/FINALTASKPHP/categories"
                class="w-3/4 h-3/4 bg-white relative left-56 top-20 text-primary-gray flex flex-col gap-3 items-center justify-center">
                <button id="close"
                    class="absolute top-0 right-0 p-4 px-6 bg-red-500 -translate-y-4 translate-x-4 text-white font-bold rounded-full">X</button>
                <h2 class="absolute top-0 text-6xl font-bold py-6">Add Category</h2>
                <p class="block px-6 py-2 text-center">
                    <?php if (isset($msg)) {
                        echo '<span class="text-red-400 block bg-red-200 rounded-lg text-center">' . $msg . '</span>';
                    } ?>
                </p>
                <table cellpadding="10px" class="block pt-20">
                    <tr>
                        <td class="text-start font-semibold">
                            <label for="fname" class="flex items-center gap-2">
                                <span>Category Name</span>
                            </label>
                        </td>
                        <td>
                            <input required type="text" name="category_name" id="category_name"
                                placeholder="Category Name"
                                class="border-2 border-primary-gray px-6 py-2 focus:border-primary-green rounded-lg outline-none">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-start py-8"><button type="submit" name="addcategory" value="Add"
                                class="border border-primary-gray px-12 py-3 rounded-lg hover:bg-blue-400 bg-blue-500 text-white">Add</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <section>
            <header class="text-center py-8 relative">
                <h1 class="text-4xl font-semibold">All Categories</h1>
                <button id="addcategory"
                    class="py-3 px-4 bg-primary-green font-semibold text-lg hover:bg-green-500 text-white rounded-lg block absolute right-2 top-9">Add
                    Catergory</button>
            </header>
            <div class="flex items-center justify-between border-b border-primary-gray py-2">
                <div class="flex items-center gap-1 text-primary-green font-semibold">
                    <span>Show</span>
                    <form action="/FINALTASKPHP/categories" method="post">
                        <select name="entries" id="entries" class="px-2 text-black">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span>entries</span>
                        <button type="submit" name="entry"
                            class="text-white bg-primary-green mx-4 px-4 py-2">Show</button>
                    </form>
                </div>
                <input type="search" name="search" id="search" placeholder="Search by category name.."
                    class="px-4 py-2 pr-4 border-2 border-primary-gray focus:border-primary-green outline-none">
            </div>
            <table class="w-full py-4">
                <thead class="text-primary-green font-semibold">
                    <tr>
                        <th class="py-4">Sr no.</th>
                        <th class="py-4">Category Name</th>
                        <th class="py-4">Product Available</th>
                        <th class="py-4">Product Assigned</th>
                    </tr>
                </thead>
                <tbody class="bg-white" id="table-data">
                    <?php
                    // echo "<pre>";
                    // print_r($statement);
                    // echo "</pre>";
                    // die();
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
                        // die();
                        if ($count < 1) {
                            echo '<tr>';
                            echo '<td class="py-6 text-center font-semibold">' . $sr . '</td>';
                            echo '<td class="py-6 text-center font-semibold">' . $statement[$i]['category_name'] . '</td>';
                            echo '<td class="py-6 text-center font-semibold">' . $statement[$i]['total_count'] . '</td>';
                            echo '<td class="py-6 text-center font-semibold">' . $statement[$i]['count_assign'] . '</td>';
                            echo '</tr>';
                            $sr++;
                        }
                    }
                    if (isset($pages) && $_REQUEST['page']) {
                        echo '<tr><td colspan="4">';
                        echo '<ul id="pagination" class="flex items-center justify-center gap-2 py-6">';
                        for ($i = 1; $i <= $pages; $i++) {
                            if ($_REQUEST['page'] == $i) {
                                echo '<li class="rounded-full bg-primary-gray text-white" id="' . $i . '"><a  class="px-4 py-2" href="/FINALTASKPHP/categories?page=' . $i . '">' . $i . '</a></li>';
                            } else {
                                echo '<li class="bg-primary-green rounded-full text-white hover:bg-blue-400" id="' . $i . '"><a class="px-4 py-2" href="/FINALTASKPHP/categories?page=' . $i . '">' . $i . '</a></li>';
                            }
                        }
                        echo '</ul>';

                        echo '</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#search").on("keyup", function () {
                var search_term = $(this).val();
                var table = "categories";
                var link = "categories";
                $.ajax({
                    url: "ajax.search.php",
                    type: "POST",
                    data: { search: search_term, table: table, link: link },
                    success: function (data) {
                        $("#table-data").html(data)
                    }
                })
            });
        });
        $(document).ready(function () {
            $("#addcategory").on("click", function () {
                $("#model").show();
            });
        });
        $(document).ready(function () {
            $("#close").on("click", function () {
                $("#model").hide();
            });
        });
    </script>
</body>

</html>