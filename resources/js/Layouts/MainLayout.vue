<script setup>
import NavLink from '@/Components/NavLink.vue';
import FooterLink from '@/Components/FooterLink.vue';

</script>

<template>
    <div class="min-h-screen flex flex-col justify-start">
        <nav class=" border-b border-primary dark:bg-neutral-950">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a :href="route('landing')" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="/assets/Yolo_logo_dark.png" class="h-8" alt="Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">YOLO Sentinels</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-light rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-light dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-neutral-950 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0  dark:bg-neutral-950 md:dark:bg-neutral-950 dark:border-neutral-950">
                        <NavLink :href="route('landing')" :active="route().current('landing')" title="Home" />
                        <NavLink :href="route('landing')" hash="team" :active="route().current('landing')" title="Meet the team" />
                        <NavLink :href="route('landing')" hash="results" :active="route().current('landing')" title="Results" />
                        <NavLink :href="route('shop')" :active="route().current('shop')" title="Shop" />
                        <NavLink :href="route('contact.index')" :active="route().current('contact.index')" title="Contact Us" />
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content -->
        <slot />
        <!--Footer-->
        <footer class="bg-primary shadow dark:bg-red-700  mt-auto">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a :href="route('landing')" class="flex justify-center items-center mb-4  space-x-3 rtl:space-x-reverse">
                        <img src="/assets/YoloSentinels_logo_redbg-10.png" class="h-8" alt=" Logo" />
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Yolo Sentinels</span>
                    </a>
                    <ul class="flex flex-wrap justify-center items-center mb-6 text-sm font-medium  sm:mb-0 dark:text-light">
                        <FooterLink :href="route('landing')" :active="route().current('landing')" title="Home" />
                        <FooterLink :href="route('landing')" hash="team" :active="route().current('landing')" title="Meet the team" />
                        <FooterLink :href="route('landing')" hash="results" :active="route().current('landing')" title="Results" />
                        <FooterLink :href="route('shop')" :active="route().current('shop')" title="Shop" />
                        <FooterLink :href="route('contact.index')" :active="route().current('contact.index')" title="Contact Us" />
                    </ul>
                </div>
                <hr class="my-6 border-light sm:mx-auto lg:my-8" />
                <div class=" text-sm text-light flex justify-center items-center">
                    <a href="#" class="text-light hover:text-gray-900" >
                        <img class="h-4 px-3 sm:px-1 " src="/assets/socials/discord.png" alt="discord icon">
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-light hover:text-gray-900 ms-5">
                        <img class="h-4  px-3 sm:px-1"  src="/assets/socials/insta.png" alt="insta icon">
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="#" class="text-light hover:text-gray-900  ms-5">
                        <img class="h-4  px-3 sm:px-1"  src="/assets/socials/twitch.png" alt="twitch icon">
                        <span class="sr-only">Twitch page</span>
                    </a>
                    <a href="#" class="text-light hover:text-gray-900  ms-5">
                        <img class="h-4  px-3 sm:px-1"  src="/assets/socials/twitter.png" alt="twitter icon">
                        <span class="sr-only">X page</span>
                    </a>
                    <a href="#" class="text-light hover:text-gray-900  ms-5">
                        <img class="h-4  px-3 sm:px-1"  src="/assets/socials/yt.png" alt="youtube icon">
                        <span class="sr-only">Youtube page</span>
                    </a>

                </div>
            </div>
        </footer>
    </div>
</template>
