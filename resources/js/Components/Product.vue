<script setup>
    defineProps(['product']);
</script>

<template>
    <div>
        <a :href="route('product', product.id)">
            <img class="h-auto max-w-full rounded-lg" :src="('/assets/' + product.images[0])" :alt="product.name">
        </a>
    </div>
</template>
