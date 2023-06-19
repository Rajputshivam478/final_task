<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coursea | Home</title>
    <link rel="stylesheet" href="./public/css/output.css">
</head>

<body class="font-sans bg-black">

    <?php
    require './App/views/partial/header.php';
    ?>
    <main>
        <section
            class="pt-64 sm:pt-28 md:pt-8 px-0 lg:px-32 bg-white lg:h-screen rounded-br-[5rem] lg:rounded-br-[15rem] rounded-bl-[5rem] lg:rounded-bl-[15rem] relative overflow-hidden">
            <header class="h-1/2">
                <hgroup class="flex flex-col justify-center items-center text-center h-full gap-2">
                    <h4 class="font-bold py-2 px-8 text-xs border-2 border-black rounded-full">WELCOME TO COURSEA</h4>
                    <h1 class="font-bold text-5xl sm:text-[5rem]">Meet the Professional <span
                            class="block">Mentor</span>
                    </h1>
                </hgroup>
            </header>
            <section class="flex flex-col sm:flex-row items-center h-1/2 lg:-mt-24 z-10 p-8">
                <div
                    class="absolute bottom-0 left-1/4 top-[50%] w-[52%] h-full rounded-full bg-yellow-300 z-0 hidden lg:block">
                </div>
                <div class="w-1/2 z-10 space-y-4">
                    <div class="space-y-2">
                        <svg class="w-14 h-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z">
                                </path>
                            </g>
                        </svg>
                        <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui blanditiis obcaecati
                            ad et repellat iure doloribus labore atque nihil voluptatem.
                        </p>
                    </div>
                    <div class="space-y-2">
                        <span class="block text-3xl font-bold">10K+</span>
                        <span class="block">Mentors</span>
                    </div>
                </div>
                <div class="w-full h-full z-10">
                    <img src="./public/images/student-removebg-preview.png" alt=""
                        class="sm:absolute -bottom-48 sm:-bottom-32 md:-bottom-20 lg:-bottom-28 -left-[15%] md:-left-[10%]  lg:-left-[7%] w-full h-full sm:h-[80%] object-contain">
                    <div
                        class="bg-white flex flex-col lg:flex-row justify-between p-8 lg:p-3 rounded-3xl lg:rounded-full lg:w-[21rem] left-[35%] md:left-[38%] lg:left-[40%] gap-4 sm:absolute bottom-5 lg:bottom-10">
                        <a href="#"
                            class="flex items-center justify-center gap-4 rounded-full border border-black py-3 px-6 text-xs font-semibold text-black bg-yellow-300 shadow-lg shadow-black">
                            <span>Request Demo</span>
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="flex items-center justify-center gap-4 rounded-full border border-black py-3 px-8 text-xs font-semibold">I'm
                            Mentor</a>
                    </div>
                </div>
                <div class="w-1/2 z-10 flex flex-col items-start sm:items-end gap-4">
                    <div class="flex gap-1 text-yellow-400">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <p class="sm:text-right">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui blanditiis
                        obcaecati ad et
                        repellat
                        iure doloribus labore atque nihil voluptatem.
                    </p>
                    <div class="flex gap-4 flex-row-reverse sm:flex-row items-center">
                        <div class="flex flex-col items-end">
                            <span class="font-bold">Pristia Candra</span>
                            <span class="text-xs text-gray-500">UUX Designer</span>
                        </div>
                        <div class="w-14 h-14">
                            <img src="https://tse1.mm.bing.net/th?id=OIP.l8Gq2tMTiFsD_rbHJcoY6QHaLO&pid=Api&P=0" alt=""
                                class="w-full h-full object-cover object-top rounded-full">
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section class="px-6 md:px-20 lg:px-32 pt-20 py-8 space-y-16 overflow-hidden relative">
            <section class="flex flex-col md:flex-row justify-between gap-32 relative ">
                <section class="space-y-16 md:w-1/2">
                    <header class="text-white space-y-6">
                        <h2 class="text-3xl font-semibold">Learner Outcomes <span class="block">On Coursea</span></h2>
                        <p class="text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, harum
                            porro necessitatibus
                            cum rerum a.</p>
                    </header>
                    <div class="text-white flex">
                        <span class="flex items-center gap-1 px-3 border-r border-gray-400">
                            <svg class="w-5 h-6 text-yellow-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                            </svg>
                            <span class="text-2xl font-semibold">87%</span>
                        </span>
                        <p class="text-gray-400 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                            et blanditiis fuga? Qui
                            voluptates, sequi eum eligendi sint ipsam unde.</p>
                    </div>
                </section>
                <div class="flex flex-col xs:flex-row gap-8 md:w-4/6 md:absolute -right-[28%]">
                    <div class="border border-gray-800 p-8 rounded-[2rem] space-y-5">
                        <div class="flex gap-1 text-yellow-400">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quos
                            distinctio fugiat
                            doloremque magni itaque ex ipsa illum vitae. Nemo.</p>
                        <div class="flex gap-4 items-center">
                            <div class="w-14 h-14">
                                <img src="https://tse1.mm.bing.net/th?id=OIP.l8Gq2tMTiFsD_rbHJcoY6QHaLO&pid=Api&P=0"
                                    alt="" class="w-full h-full object-cover object-top rounded-full">
                            </div>
                            <div class="flex flex-col">
                                <span class="font-bold text-white">Pristia Candra</span>
                                <span class="text-xs text-gray-500">UUX Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-800 p-8 rounded-[2rem] space-y-5">
                        <div class="flex gap-1 text-yellow-400">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quos
                            distinctio fugiat
                            doloremque magni itaque ex ipsa illum vitae. Nemo.</p>
                        <div class="flex gap-4 items-center">
                            <div class="w-14 h-14">
                                <img src="https://tse1.mm.bing.net/th?id=OIP.l8Gq2tMTiFsD_rbHJcoY6QHaLO&pid=Api&P=0"
                                    alt="" class="w-full h-full object-cover object-top rounded-full">
                            </div>
                            <div class="flex flex-col">
                                <span class="font-bold text-white">Pristia Candra</span>
                                <span class="text-xs text-gray-500">UUX Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div
                class="grid xs:grid-cols-2 gap-4 sm:flex items-center sm:justify-between sm:gap-2  px-8 md:px-20 lg:px-44 py-12 bg-gray-900 rounded-3xl md:rounded-full">
                <div class="flex flex-col items-center gap-2">
                    <span class="text-4xl text-yellow-400 font-bold">34k+</span>
                    <span class="text-gray-500">Classes</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <span class="text-4xl text-yellow-400 font-bold">34k+</span>
                    <span class="text-gray-500">Classes</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <span class="text-4xl text-yellow-400 font-bold">34k+</span>
                    <span class="text-gray-500">Classes</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <span class="text-4xl text-yellow-400 font-bold">34k+</span>
                    <span class="text-gray-500">Classes</span>
                </div>
            </div>
        </section>

        <section
            class="py-16 md:pb-96 px-2 sm:px-10 lg:px-32 bg-white space-y-28 rounded-[5rem] lg:rounded-[7%] relative">
            <header class="space-y-4">
                <a href="#" class="px-8 py-2 text-xs font-bold border-2 border-black rounded-full inline-block">LET'S
                    START</a>
                <div class="flex flex-col xs:flex-row justify-between sm:items-center gap-8 sm:gap-0">
                    <h2 class="text-4xl font-bold">Explore Inspiring Online Courses</h2>
                    <a href="#" class="text-xs font-bold">SEE ALL</a>
                </div>
            </header>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                <div class="rounded-[2rem] border border-black p-4 space-y-4">
                    <div class="rounded-[2rem] h-[15rem] border-2 border-black overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                            alt="" class="object-cover object-center w-full h-full">
                    </div>
                    <div class="space-y-1">
                        <small class="text-sm font-bold">Fundamentals of UI/UX</small>
                        <span class="block text-sm font-bold">Design</span>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://www2.deloitte.com/content/dam/Deloitte/nl/Images/promo_images/deloitte-nl-cm-digital-human-promo.jpg"
                                alt="" class="w-12 h-12 overflow-hidden rounded-full">
                            <span class="font-semibold">Ashlynn Bergson</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>4.5</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-[2rem] border border-black p-4 space-y-4">
                    <div class="rounded-[2rem] h-[15rem] border-2 border-black overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                            alt="" class="object-cover object-center w-full h-full">
                    </div>
                    <div class="space-y-1">
                        <small class="text-sm font-bold">Fundamentals of UI/UX</small>
                        <span class="block text-sm font-bold">Design</span>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://www2.deloitte.com/content/dam/Deloitte/nl/Images/promo_images/deloitte-nl-cm-digital-human-promo.jpg"
                                alt="" class="w-12 h-12 overflow-hidden rounded-full">
                            <span class="font-semibold">Ashlynn Bergson</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>4.5</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-[2rem] border border-black p-4 space-y-4">
                    <div class="rounded-[2rem] h-[15rem] border-2 border-black overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                            alt="" class="object-cover object-center w-full h-full">
                    </div>
                    <div class="space-y-1">
                        <small class="text-sm font-bold">Fundamentals of UI/UX</small>
                        <span class="block text-sm font-bold">Design</span>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://www2.deloitte.com/content/dam/Deloitte/nl/Images/promo_images/deloitte-nl-cm-digital-human-promo.jpg"
                                alt="" class="w-12 h-12 overflow-hidden rounded-full">
                            <span class="font-semibold">Ashlynn Bergson</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>4.5</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-[2rem] border border-black p-4 space-y-4">
                    <div class="rounded-[2rem] h-[15rem] border-2 border-black overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                            alt="" class="object-cover object-center w-full h-full">
                    </div>
                    <div class="space-y-1">
                        <small class="text-sm font-bold">Fundamentals of UI/UX</small>
                        <span class="block text-sm font-bold">Design</span>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://www2.deloitte.com/content/dam/Deloitte/nl/Images/promo_images/deloitte-nl-cm-digital-human-promo.jpg"
                                alt="" class="w-12 h-12 overflow-hidden rounded-full">
                            <span class="font-semibold">Ashlynn Bergson</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>4.5</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-[2rem] border border-black p-4 space-y-4">
                    <div class="rounded-[2rem] h-[15rem] border-2 border-black overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                            alt="" class="object-cover object-center w-full h-full">
                    </div>
                    <div class="space-y-1">
                        <small class="text-sm font-bold">Fundamentals of UI/UX</small>
                        <span class="block text-sm font-bold">Design</span>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://www2.deloitte.com/content/dam/Deloitte/nl/Images/promo_images/deloitte-nl-cm-digital-human-promo.jpg"
                                alt="" class="w-12 h-12 overflow-hidden rounded-full">
                            <span class="font-semibold">Ashlynn Bergson</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>4.5</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-[2rem] border border-black p-4 space-y-4">
                    <div class="rounded-[2rem] h-[15rem] border-2 border-black overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                            alt="" class="object-cover object-center w-full h-full">
                    </div>
                    <div class="space-y-1">
                        <small class="text-sm font-bold">Fundamentals of UI/UX</small>
                        <span class="block text-sm font-bold">Design</span>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://www2.deloitte.com/content/dam/Deloitte/nl/Images/promo_images/deloitte-nl-cm-digital-human-promo.jpg"
                                alt="" class="w-12 h-12 overflow-hidden rounded-full">
                            <span class="font-semibold">Ashlynn Bergson</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>4.5</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-[2rem] border border-black p-4 space-y-4">
                    <div class="rounded-[2rem] h-[15rem] border-2 border-black overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                            alt="" class="object-cover object-center w-full h-full">
                    </div>
                    <div class="space-y-1">
                        <small class="text-sm font-bold">Fundamentals of UI/UX</small>
                        <span class="block text-sm font-bold">Design</span>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://www2.deloitte.com/content/dam/Deloitte/nl/Images/promo_images/deloitte-nl-cm-digital-human-promo.jpg"
                                alt="" class="w-12 h-12 overflow-hidden rounded-full">
                            <span class="font-semibold">Ashlynn Bergson</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>4.5</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-[2rem] border border-black p-4 space-y-4">
                    <div class="rounded-[2rem] h-[15rem] border-2 border-black overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                            alt="" class="object-cover object-center w-full h-full">
                    </div>
                    <div class="space-y-1">
                        <small class="text-sm font-bold">Fundamentals of UI/UX</small>
                        <span class="block text-sm font-bold">Design</span>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://www2.deloitte.com/content/dam/Deloitte/nl/Images/promo_images/deloitte-nl-cm-digital-human-promo.jpg"
                                alt="" class="w-12 h-12 overflow-hidden rounded-full">
                            <span class="font-semibold">Ashlynn Bergson</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>4.5</span>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="hidden absolute -bottom-[9%] xl:-bottom-[15%] left-[10%] right-[10%] w-[80%] xl:h-[30%] rounded-full bg-yellow-300 md:flex items-center sm:px-20 md:px-40 lg:px-52 justify-end">
                <div class="w-full h-full">
                    <img src="./public/images/student-removebg-preview.png" alt=""
                        class="absolute bottom-0 -left-[35%] w-full h-[35rem] object-contain">
                </div>
                <div class="space-y-6 w-1/2 lg:w-full py-12 px-4 md:px-0 md:py-4">
                    <h2 class="text-5xl font-bold">Learner Outcomes On Coursea</h2>
                    <p class="text-gray-800">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error, voluptatum
                        fugiat exercitationem
                        molestias harum debitis.</p>
                    <a href="#"
                        class="py-3 px-4 border-2 border-black bg-white rounded-full flex gap-3 justify-center xl:w-1/2">
                        <span>Become Mentor</span>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <footer class="px-4 md:px-12 lg:px-32 py-16 md:pt-80 space-y-8">
            <div class="flex flex-col md:flex-row gap-20 md:gap-32 lg:gap-56 w-full justify-between">
                <div class="w-full">
                    <ul class="flex items-center justify-between gap-8">
                        <li>
                            <ul class="space-y-4">
                                <li><span class="text-sm font-bold text-white">For Candidates</span></li>
                                <li><a href="#" class="text-xs text-gray-500">Explore Jobs</a></li>
                                <li><a href="#" class="text-xs text-gray-500">Discover Companies</a></li>
                                <li><a href="#" class="text-xs text-gray-500">Browse Collections</a></li>
                                <li><a href="#" class="text-xs text-gray-500">The Carrer Blog</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="space-y-4">
                                <li><span class="text-sm font-bold text-white">For Candidates</span></li>
                                <li><a href="#" class="text-xs text-gray-500">Explore Jobs</a></li>
                                <li><a href="#" class="text-xs text-gray-500">Discover Companies</a></li>
                                <li><a href="#" class="text-xs text-gray-500">Browse Collections</a></li>
                                <li><a href="#" class="text-xs text-gray-500">The Carrer Blog</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="space-y-4">
                                <li><span class="text-sm font-bold text-white">For Candidates</span></li>
                                <li><a href="#" class="text-xs text-gray-500">Explore Jobs</a></li>
                                <li><a href="#" class="text-xs text-gray-500">Discover Companies</a></li>
                                <li><a href="#" class="text-xs text-gray-500">Browse Collections</a></li>
                                <li><a href="#" class="text-xs text-gray-500">The Carrer Blog</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="text-white space-y-6 md:w-1/2">
                    <span class="text-sm font-bold text-white block">Social Media</span>
                    <div class="flex items-center gap-8 md:gap-3">
                        <a href="#" class="p-3 bg-gray-900 rounded-full">
                            <svg class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.19795 21.5H13.198V13.4901H16.8021L17.198 9.50977H13.198V7.5C13.198 6.94772 13.6457 6.5 14.198 6.5H17.198V2.5H14.198C11.4365 2.5 9.19795 4.73858 9.19795 7.5V9.50977H7.19795L6.80206 13.4901H9.19795V21.5Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                        <a href="#" class="p-3 bg-gray-900 rounded-full">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="p-3 bg-gray-900 rounded-full">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path fill-rule="nonzero"
                                        d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                        <a href="#" class="p-3 bg-gray-900 rounded-full">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <img src="https://res.cloudinary.com/dfljhx1gx/image/upload/v1675755396/coursera-logo-white-rgb_otouj9.png"
                alt="" class="w-full">
            <div
                class="px-4 sm:px-12 py-8 text-gray-600 flex flex-col gap-8 sm:flex-row items-center justify-between bg-gray-900 rounded-[2rem]">
                <a href="#">Copyright @2023 Coursea</a>
                <ul class="flex items-center flex-col xs:flex-row gap-4">
                    <li><a href="#">Term Of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Licencing</a></li>
                </ul>
            </div>
        </footer>
    </main>
</body>

</html>