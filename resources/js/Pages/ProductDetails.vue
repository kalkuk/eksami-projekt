<script setup>
    import MainLayout from '@/Layouts/MainLayout.vue';
    import {Head} from '@inertiajs/vue3';

    defineProps(['product']);
</script>

<template>
    <Head title="Product" />
    <MainLayout>
        <section class="bg-dark-900">
            <div>
                <div class="bg-dark-800 mx-auto mt-16 max-w-3xl">
                    <div class="bg-dark-800 p-16 rounded text-center">
                        <h2>{{ product.name }}</h2>
                        <p>{{ product.description }}</p>
                        <p>Category: {{ product.category }}</p>
                        <p v-if="product.price">Price: {{ product.price }} €</p>
                        <p v-if="product.sizes.length">Available sizes: {{ product.sizes.join(', ') }}</p>
                        <p v-if="product.colors.length">Available colors: {{ product.colors.join(', ') }}</p>
                        <small>Added: {{ new Date(product.created_at).toLocaleString() }}</small>
                    </div>
                    <div class="grid grid-cols-1 gap-2 pt-2 sm:grid-cols-1 text-center">
                        <div>
                            <div>
                                <div class="carousel sm:max-w-4xl container mx-auto mb-16 ">
                                    <div v-for="image in product.images" class="carousel-item hidden">
                                        <img :src="('/assets/' + image)" :alt="product.name" class="h-auto w-full max-w-full" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </MainLayout>

</template>
