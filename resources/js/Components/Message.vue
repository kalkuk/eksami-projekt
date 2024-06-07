<script setup>
    defineProps({
        messages: {
            type: Array,
        },
        type: {
            type: String,
        }
    });
</script>

<template>
    <div v-show="messages">
        <p v-for="message in messages" class="text-sm" :class="{ 'text-red-600': type === 'error', 'text-blue-600': type === 'success'}">
            {{ message }}
        </p>
    </div>
</template>
