<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Assets</title>
    <link rel="stylesheet" href="./public/css/output.css">
</head>

<body class="h-screen">
    <header
        class="flex items-center justify-between bg-white h-28 px-4 border-b-8 border-primary-green fixed top-0 w-full z-20">
        <img src="https://tse1.mm.bing.net/th?id=OIP.DJZo6RAIP4CsdExz7NAOdgAAAA&pid=Api&P=0&h=180" alt="" class="w-32">
    </header>
    <main class="bg-secondary-gray h-full pt-28 px-4 flex flex-col gap-4 items-center justify-center">
        <section class="w-1/4 h-1/2 bg-white rounded-xl py-8">
            <header class="text-center pb-4">
                <h1 class="text-3xl font-bold">LOGIN HERE..</h1>
            </header>
            <p class="block px-6 py-2 text-center">
                <?php if (isset($msg)) {
                    echo '<span class="text-red-400 block bg-red-200 rounded-lg text-center">' . $msg . '</span>';
                } ?>
            </p>
            <form method="post" action="/FINALTASKPHP/login"
                class="flex py-4 flex-col gap-4 items-center justify-center">
                <input required placeholder="Username" class="border py-2 px-6 border-primary-gray rounded-lg bg-slate-200"
                    type="text" name="username" id="usename">
                <input required placeholder="Password" class="border py-2 px-6 border-primary-gray rounded-lg bg-slate-200"
                    type="password" name="password" id="password">
                <button type="submit" name="login" value="true"
                    class="border py-2 px-8 text-white hover:bg-green-500 border-primary-gray rounded-lg bg-primary-green">LOGIN</button>
            </form>
        </section>
    </main>

</body>

</html>