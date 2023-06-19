<?php

if (isset($_REQUEST['product_id'])) {
    $output = '
    <div class="w-full h-full flex items-center justify-center">
    <form action="/FINALTASKPHP/assets" method="post"
    class="w-1/4 h-1/4 rounded-3xl bg-white text-primary-gray flex flex-col gap-3 items-center justify-center">
    <table class="w-3/4">
    <tr>
    <th colspan="2" class="py-6 text-lg">Do you really
    want to
    DELETE</th>
    </tr>
    <tr class="flex gap-4">
    <td class="mx-2 w-full"><button type="submit" name="delete" value="' . $_REQUEST['product_id'] . '"
    class="font-bold py-3 rounded-lg border bg-slate-300 hover:bg-blue-300 w-full h-full">Yes</button>
    </td>
    <td class="mx-2 w-full"><button id="close"
    class="py-3 font-bold w-full h-full rounded-lg border bg-slate-300 hover:bg-red-300">No</button>
    </td>
    </tr>
    </table>
    </form>
    </div>';
} elseif (isset($_REQUEST['user_id'])) {

    $output = '
    <div class="w-full h-full flex items-center justify-center">
    <form action="/FINALTASKPHP/user" method="post"
    class="w-1/4 h-1/4 rounded-3xl bg-white text-primary-gray flex flex-col gap-3 items-center justify-center">
    <table class="w-3/4">
    <tr>
    <th colspan="2" class="py-6 text-lg">Do you really
    want to
    DELETE</th>
    </tr>
    <tr class="flex gap-4">
    <td class="mx-2 w-full"><button type="submit" name="delete" value="' . $_REQUEST['user_id'] . '"
    class="font-bold py-3 rounded-lg border bg-slate-300 hover:bg-blue-300 w-full h-full">Yes</button>
    </td>
    <td class="mx-2 w-full"><button id="close"
    class="py-3 font-bold w-full h-full rounded-lg border bg-slate-300 hover:bg-red-300">No</button>
    </td>
    </tr>
    </table>
    </form>
    </div>';
}
echo $output;