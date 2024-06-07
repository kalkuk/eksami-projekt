<script setup>
    defineProps(['product']);
</script>

<template>
    <div v-for="image in product.images" class="carousel-item hidden">
        <img :src="('/assets/' + image)" :alt="product.name" class="h-auto w-full max-w-full rounded-lg">
    </div>
</template>
