<!-- ----------------------------- user page ------------------------- -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | User</title>
    <link rel="stylesheet" href="./public/css/output.css">
</head>

<body>
    <?php
    require './App/views/partial/header.php';
    require './App/views/partial/sidebar.php';
    ?>
    <main class="bg-secondary-gray ml-64 h-full pt-28 px-4">
        <div class="w-full h-full fixed inset-0 bg-black/40 text-center z-30 hidden" id="model">
            <form method="post" action="/FINALTASKPHP/user"
                class="w-3/4 h-3/4 bg-white relative left-56 top-20 text-primary-gray flex flex-col gap-3 items-center justify-center">
                <button id="close"
                    class="absolute top-0 right-0 p-4 px-6 bg-red-500 -translate-y-4 translate-x-4 text-white font-bold rounded-full">X</button>
                <h2 class="absolute top-0 text-6xl font-bold py-6">Add User</h2>
                <table cellpadding="10px" class="block pt-20">
                    <tr>
                        <td class="text-start font-semibold">
                            <label for="fname" class="flex items-center gap-2">
                                <span>First Name </span>
                            </label>
                        </td>
                        <td>
                            <input required type="text" name="fname" id="fname" placeholder="First Name"
                                class="border-2 border-primary-gray px-6 py-2 focus:border-primary-green rounded-lg outline-none">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start font-semibold">
                            <label for="lname" class="flex items-center gap-2">
                                <span>Last Name </span>
                            </label>
                        </td>
                        <td>
                            <input required type="text" name="lname" id="lname" placeholder="Last Name"
                                class="border-2 border-primary-gray px-6 py-2 focus:border-primary-green rounded-lg outline-none">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start font-semibold">
                            <label for="lname" class="flex items-center gap-2">
                                <span>UserName </span>
                            </label>
                        </td>
                        <td>
                            <input required type="text" name="username" id="username" placeholder="UserName"
                                class="border-2 border-primary-gray px-6 py-2 focus:border-primary-green rounded-lg outline-none">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start font-semibold">
                            <label for="lname" class="flex items-center gap-2">
                                <span>Password </span>
                            </label>
                        </td>
                        <td>
                            <input required type="password" name="password" id="password" placeholder="Password"
                                class="border-2 border-primary-gray px-6 py-2 focus:border-primary-green rounded-lg outline-none">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start font-semibold">
                            <label for="roles">
                                <span>Role </span>
                            </label>
                        </td>
                        <td class="text-start font-semibold">
                            <select required name="role_id" id="roles"
                                class="w-full border-2 border-primary-gray px-6 py-2 focus:border-primary-green rounded-lg outline-none">
                                <?php
                                for ($i = 0; $i < count($role); $i++) {
                                    if ($role[$i]['id'] != '1') {
                                        echo '<option value="' . $role[$i]['id'] . '">' . $role[$i]['role'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-start py-8"><button type="submit" name="adduser" value="Add"
                                class="border border-primary-gray px-12 py-3 rounded-lg hover:bg-blue-400 bg-blue-500 text-white">Add</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <section>
            <header class="text-center py-8 relative">
                <h1 class="text-4xl font-semibold">All Users</h1>
                <p class="block px-6 py-6 text-center">
                    <?php if (isset($msg)) {
                        echo '<span class="text-red-400 block bg-red-200 rounded-lg text-center">' . $msg . '</span>';
                    } ?>
                </p>
                <button id="adduser"
                    class="py-3 px-4 bg-primary-green font-semibold text-lg hover:bg-green-500 text-white rounded-lg block absolute right-2 top-9">Add
                    User</button>
            </header>
            <div class="flex items-center justify-between border-b border-primary-gray py-2">
                <div class="flex items-center gap-1 text-primary-green font-semibold">
                    <span>Show</span>
                    <form action="/FINALTASKPHP/user" method="post">
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
                <input type="search" name="search_term" id="search" placeholder="Search here.."
                    class="px-4 py-2 border-2 border-primary-gray focus:border-primary-green outline-none">
            </div>
            <!-- <form action="" method="get">
                <input required type="search" name="search" id="search" placeholder="Search here.."
                    class="px-4 py-2 border-2 border-primary-gray focus:border-primary-green outline-none">
            </form> -->
            </div>
            <div id="history-data" class="w-full h-full fixed inset-0 bg-black/40 text-center z-30 hidden">
                <div
                    class="w-3/4 h-3/4 bg-white relative left-56 top-20 text-primary-gray flex flex-col gap-3 items-center">
                    <button
                        class="close absolute top-0 right-0 p-4 px-6 bg-red-500 -translate-y-4 translate-x-4 text-white font-bold rounded-full">X</button>
                    <h2 class="text-6xl font-bold py-6">History</h2>
                    <table class="w-3/4" id="history-table">
                    </table>
                </div>
            </div>
            <div id="delete" class="hidden w-full h-full fixed inset-0 bg-black/40 text-center z-30">

            </div>
            <table class="w-full py-4" id="table-data">
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
                <tbody class="bg-white">
                    <?php
                    for ($i = 0; $i < count($statement); $i++) {
                        echo '<tr>';
                        echo '<td class="py-6 text-center font-semibold">' . $statement[$i]['id'] . '</td>';
                        echo '<td class="py-6 text-center font-semibold">' . $statement[$i]['fname'] . ' ' . $statement[$i]['lname'] . '</td>';
                        echo '<td class="py-6 text-center font-semibold">' . $statement[$i]['username'] . '</td>';
                        echo '<td class="py-6 text-center font-semibold">' . $statement[$i]['role'] . '</td>';
                        if (isset($statement[$i]['product_name'])) {
                            echo '<td class="py-6 text-center font-semibold">' . $statement[$i]['product_name'] . '</td>';
                        } else {
                            echo '<td class="py-6 text-center font-semibold text-gray-400">Not Assigned</td>';
                        }
                        ?>
                        <td class="py-6 text-center font-semibold text-white flex items-center justify-center gap-1">
                            <button value="<?php echo $statement[$i]['id']; ?>"
                                class="history-btn py-3 flex items-center gap-1 px-4 border border-primary-gray rounded-lg hover:bg-blue-600 bg-blue-500">
                                <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"><!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                                    <path
                                        d="M504 255.531c.253 136.6  4-111.18 248.372-247.82 248.468-59.015.042-113.223-20.53-155.822-54.911-11.077-8.94-11.905-25.541-1.839-35.607l11.267-11.267c8.609-8.609 22.353-9.551 31.891-1.984C173.062 425.135 212.781 440 256 440c101.705 0 184-82.311 184-184 0-101.705-82.311-184-184-184-48.814 0-93.149 18.969-126.068 49.932l50.754 50.754c10.08 10.08 2.941 27.314-11.313 27.314H24c-8.837 0-16-7.163-16-16V38.627c0-14.254 17.234-21.393 27.314-11.314l49.372 49.372C129.209 34.136 189.552 8 256 8c136.81 0 247.747 110.78 248 247.531zm-180.912 78.784l9.823-12.63c8.138-10.463 6.253-25.542-4.21-33.679L288 256.349V152c0-13.255-10.745-24-24-24h-16c-13.255 0-24 10.745-24 24v135.651l65.409 50.874c10.463 8.137 25.541 6.253 33.679-4.21z">
                                    </path>
                                </svg>
                                <span>History</span>
                            </button>
                            <button value="<?php echo $statement[$i]['id']; ?>"
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
                        <?php
                    }
                    if (isset($pages) && $_REQUEST['page']) {
                        echo '<tr><td colspan="6">';
                        echo '<ul id="pagination" class="flex items-center justify-center gap-2 py-6">';
                        for ($i = 1; $i <= $pages; $i++) {
                            if ($_REQUEST['page'] == $i) {
                                echo '<li class="rounded-full bg-primary-gray text-white" id="' . $i . '"><a  class="px-4 py-2" href="/FINALTASKPHP/user?page=' . $i . '">' . $i . '</a></li>';
                            } else {
                                echo '<li class="bg-primary-green rounded-full text-white hover:bg-blue-400" id="' . $i . '"><a class="px-4 py-2" href="/FINALTASKPHP/user?page=' . $i . '">' . $i . '</a></li>';
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
                var table = "users";
                var link = "users";
                $.ajax({
                    url: "ajax.search.php",
                    type: "POST",
                    data: { search: search_term, table: table, link: link },
                    success: function (data) {
                        $("#table-data").html(data)
                        $(document).ready(function () {
                            $(".delete-btn").on("click", function () {
                                $("#delete").show();
                                var pid = $(this).val();
                                $.ajax({
                                    url: "ajax.delete.php",
                                    type: "POST",
                                    data: { user_id: pid },
                                    success: function (data) {
                                        $("#delete").html(data);
                                    }
                                });
                            });
                        });
                        $(document).ready(function () {
                            $("#close").on("click", function () {
                                $("#delete").hide();
                            });
                        });
                        $(document).ready(function () {
                            $(".history-btn").on("click", function () {
                                $("#history-data").show();
                                var pid = $(this).val();
                                $.ajax({
                                    url: "ajax.history.php",
                                    type: "POST",
                                    data: { user_id: pid },
                                    success: function (data) {
                                        $("#history-table").html(data);
                                    }
                                });
                            });
                        });
                        $(document).ready(function () {
                            $(".close").on("click", function () {
                                $("#history-data").hide();
                            });
                        });
                    }
                });
            });
        });
        $(document).ready(function () {
            $("#adduser").on("click", function () {
                $("#model").show();
            });
        });
        $(document).ready(function () {
            $("#close").on("click", function () {
                $("#model").hide();
            });
        });
        $(document).ready(function () {
            $(".delete-btn").on("click", function () {
                $("#delete").show();
                var pid = $(this).val();
                $.ajax({
                    url: "ajax.delete.php",
                    type: "POST",
                    data: { user_id: pid },
                    success: function (data) {
                        $("#delete").html(data);
                    }
                });
            });
        });
        $(document).ready(function () {
            $("#close").on("click", function () {
                $("#delete").hide();
            });
        });
        $(document).ready(function () {
            $(".history-btn").on("click", function () {
                $("#history-data").show();
                var pid = $(this).val();
                $.ajax({
                    url: "ajax.history.php",
                    type: "POST",
                    data: { user_id: pid },
                    success: function (data) {
                        $("#history-table").html(data);
                    }
                });
            });
        });
        $(document).ready(function () {
            $(".close").on("click", function () {
                $("#history-data").hide();
            });
        });
    </script>

</body>

</html>