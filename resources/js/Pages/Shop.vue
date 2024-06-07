<script setup>
    import {Head} from '@inertiajs/vue3';
    import MainLayout from '@/Layouts/MainLayout.vue';
    import Product from '@/Components/Product.vue';

    defineProps(['products']);
</script>

<template>
    <Head title="E-Shop" />
    <MainLayout>
        <div class="w-full sm:w-auto sm:mx-20 md:mx-30s my-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <Product
                    v-for="product in products"
                    :key="product.id"
                    :product="product"
                />
            </div>
        </div>
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">


        </div>
    </MainLayout>

</template>

