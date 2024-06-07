<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import CarouselItem from '@/Components/CarouselItem.vue';
import {Head} from '@inertiajs/vue3';


defineProps(['popularProducts']);

</script>

<template>
    <Head title="Main" />
    <MainLayout>
        <!-- Hero section-->
        <section id="home">

            <div class="hero relative container mx-auto h-screen flex items-center">
                <div class="relative mx-auto mt-16 max-w-3xl">
                    <div class="bg-dark-800 p-16 rounded text-center">
                        <div class="flex justify-center">
                            <img src="/assets/YoloSentinels_logo_wordmark_dark.png" alt="wordmark logo">
                        </div>
                        <h2 class="mt-8">Dedication. Passion. Victory</h2>
                        <p class="mt-4">At Yolo Sentinels, we live by the creed of champions. Our team is fueled by relentless dedication and unyielding passion. Every match showcases our skill, strategy, and the spirit that drives us to victory.</p>
                        <button class="btn-primary mt-8">
                            <a :href="route('contact.index')">Become a Fan</a>
                        </button>
                    </div>
                </div>
                <div class=" bg-video" >
                    <video class="bg-video_content" autoPlay muted loop>
                        <source src="/assets/keyboard.mp4" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </section>
        <!--Meet the team-->
        <section class="bg-dark-900">
            <div>
                <div class="mx-auto mt-16 max-w-3xl">
                    <div class="bg-dark-800 p-16 rounded text-center">
                        <h2 id="team">Get to know Us</h2>
                        <p>Get to know the champions behind the Yolo Sentinels. Our team is a diverse group of talented individuals who bring their unique skills, strategies, and passion to the game. Each member is dedicated to the pursuit of excellence</p>
                    </div>
                    <div class="grid grid-cols-1 gap-2 pt-2 sm:grid-cols-2">
                        <div>
                            <div>
                                <img src="/assets/team/player1.jpg" alt="player1 image">
                            </div>
                            <div class="text-center bg-dark-800 py-6 ">
                                <h2 class="text-primary font-bold">Rzr </h2>
                                <p>aka</p> <h2>Maxim McMuffin</h2>
                                <p class="mt-4">19 y o</p>
                                <p>In-Game-Leader</p>
                            </div>
                        </div>

                        <div>
                            <div>
                                <img src="/assets/team/player2.jpg" alt="player2 image">
                            </div>
                            <div class="text-center bg-dark-800 py-6 ">
                                <h2 class="text-primary font-bold"> Phoenix</h2>
                                <p>aka</p> <h2>Li Xiaping</h2>
                                <p class="mt-4">17 y o</p>
                                <p>Support</p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/team/player3.jpg" alt="player3 image">
                            </div>
                            <div class="text-center bg-dark-800 py-6 ">
                                <h2 class="text-primary font-bold">MX16-4 </h2>
                                <p>aka</p> <h2>Summer Donalds</h2>
                                <p class="mt-4">18 y o</p>
                                <p>Flex Player</p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/team/player4.jpg" alt="player4 image">
                            </div>
                            <div class="text-center bg-dark-800 py-6 ">
                                <h2 class="text-primary font-bold">Wiz </h2>
                                <p>aka</p> <h2>Jose Jesus</h2>
                                <p class="mt-4">20 y o</p>
                                <p>Defencive Specialist</p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/team/player5.jpg" alt="player5 image">
                            </div>
                            <div class="text-center bg-dark-800 py-6 ">
                                <h2 class="text-primary font-bold">MadMan </h2>
                                <p>aka</p> <h2>Yan Hop</h2>
                                <p class="mt-4">18 y o</p>
                                <p>Sniper</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!--Games we play-->
        <section>
            <div class="mx-auto mt-32 max-w-3xl">
                <h2 class="text-center mt-16">Games We Play</h2>
                <div class="grid-cols-2 mt-16 ">
                    <div class="flex justify-between items-center bg-dark-800 px-6">
                        <div class="">Honor of Kings</div>
                        <div  class="py-1">
                            <img src="/assets/games/Honor_of_Kings.png" alt="game logo">
                        </div>
                    </div>
                    <div class="flex justify-between items-center ">
                        <div class="px-6">Apex Legends</div>
                        <div class="px-6 py-1">
                            <img src="/assets/games/apex-legends.png" alt="game logo">
                        </div>
                    </div>
                    <div class="flex justify-between items-center bg-dark-800 px-6">
                        <div>Dota 2</div>
                        <div class="py-1">
                            <img src="/assets/games/Dota-2.png" alt="game logo">
                        </div>
                    </div>
                    <div class="flex justify-between items-center ">
                        <div class="px-6">Fortnite</div>
                        <div class="px-8 py-1">
                            <img src="/assets/games/Fortnite.png" alt="game logo">
                        </div>
                    </div>
                    <div class="flex justify-between items-center bg-dark-800 px-6">
                        <div>Valorant</div>
                        <div  class="py-1">
                            <img src="/assets/games/valorant.png" alt="game logo">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Games Chart-->
        <section>
            <div class="mx-auto mt-32 max-w-3xl mb-16">
                <h2 class="text-center mt-16" id="results">Played Games Chart</h2>
                <div class="grid-cols-4 mt-16">
                    <div class="flex justify-between items-center bg-dark-800 px-6">
                        <p>2024-06-05</p>
                        <img src="/assets/games/Dota-2.png" alt="game logo">
                        <p class="text-green-400 font-bold">WIN</p>
                        <p>TeaM</p>
                    </div>
                    <div class="flex justify-between items-center  px-6">
                        <p>2024-06-02</p>
                        <img src="/assets/games/apex-legends.png" alt="game logo">
                        <p class="text-red-600 font-bold">LOST</p>
                        <p>Nova</p>
                    </div>
                    <div class="flex justify-between items-center bg-dark-800 px-6">
                        <p>2024-05-30</p>
                        <img src="/assets/games/Dota-2.png" alt="game logo">
                        <p class="text-green-400 font-bold">WIN</p>
                        <p>Y-T-T</p>
                    </div>
                    <div class="flex justify-between items-center  px-6">
                        <p>2024-05-27</p>
                        <img src="/assets/games/valorant.png" alt="game logo">
                        <p class="text-green-400 font-bold">WIN</p>
                        <p>2080</p>
                    </div>
                    <div class="flex justify-between items-center bg-dark-800 px-6">
                        <p>2024-05-24</p>
                        <img src="/assets/games/Honor_of_Kings.png" alt="game logo">
                        <p class="text-red-600 font-bold">LOST</p>
                        <p>TeaM</p>
                    </div>
                    <div class="flex justify-between items-center  px-6">
                        <p>2024-05-21</p>
                        <img src="/assets/games/Dota-2.png" alt="game logo">
                        <p class="text-red-600 font-bold">LOST</p>
                        <p>Kodz</p>
                    </div>
                    <div class="flex justify-between items-center bg-dark-800 px-6">
                        <p>2024-05-18</p>
                        <img src="/assets/games/Fortnite.png" alt="game logo">
                        <p class="text-green-400 font-bold">WIN</p>
                        <p>eBttl</p>
                    </div>
                    <div class="flex justify-between items-center px-6">
                        <p>2024-05-15</p>
                        <img src="/assets/games/Honor_of_Kings.png" alt="game logo">
                        <p class="text-red-600 font-bold">LOST</p>
                        <p>TeaM</p>
                    </div>
                    <div class="flex justify-between items-center bg-dark-800 px-6">
                        <p>2024-05-12</p>
                        <img src="/assets/games/Honor_of_Kings.png" alt="game logo">
                        <p class="text-green-400 font-bold">WIN</p>
                        <p>Kodz</p>
                    </div>
                    <div class="flex justify-between items-center  px-6">
                        <p>2024-05-09</p>
                        <img src="/assets/games/Dota-2.png" alt="">
                        <p class="text-green-400 font-bold">WIN</p>
                        <p>2080</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Shop slider-->
        <section>
            <div class="carousel sm:max-w-4xl container mx-auto mb-16 ">
                <CarouselItem v-for="product in popularProducts" :product="product" />
            </div>
        </section>
    </MainLayout>
</template>
