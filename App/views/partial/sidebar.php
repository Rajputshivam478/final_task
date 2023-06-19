<aside class="fixed h-full top-28 bg-primary-gray w-64">
    <div class="h-24 border-r-4 border-b-4 border-primary-green bg-white flex items-center justify-center">
        <span class="text-bold text-primary-green text-3xl tracking-widest">DASHBOARD</span>
    </div>
    <nav class="w-full text-center">
        <ul class="w-full text-white py-2">
            <li class="w-full hover:bg-white hover:text-primary-green <?php if (isset($assets)) {
                echo $assets;
            } ?>">
                <a href="/FINALTASKPHP/assets" class="flex items-center gap-2 py-4 px-3">
                    <svg class="w-6 h-6 text-primary-green" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z">
                        </path>
                    </svg>
                    <span>Assets</span>
                </a>
            </li>
            <li class="w-full hover:bg-white hover:text-primary-green <?php if (isset($user)) {
                echo $user;
            } ?>">
                <a href="/FINALTASKPHP/user" class="flex items-center gap-2  py-4 px-3">
                    <svg class="w-6 h-6 text-primary-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM7 6v2a3 3 0 1 0 6 0V6a3 3 0 1 0-6 0zm-3.65 8.44a8 8 0 0 0 13.3 0 15.94 15.94 0 0 0-13.3 0z">
                        </path>
                    </svg>
                    <span>Users</span>
                </a>
            </li>
            <li class="w-full hover:bg-white hover:text-primary-green <?php if (isset($category)) {
                echo $category;
            } ?>">
                <a href="/FINALTASKPHP/categories" class="flex items-center gap-2  py-4 px-3">
                    <svg class="w-6 h-6 text-primary-green" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M4 4h6v6h-6z"></path>
                        <path d="M14 4h6v6h-6z"></path>
                        <path d="M4 14h6v6h-6z"></path>
                        <circle cx="17" cy="17" r="3"></circle>
                    </svg>
                    <span>Categories</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>