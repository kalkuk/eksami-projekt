<script setup>
import { computed } from 'vue';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    hash: {
        type: String,
    },
    title: String,
});

const href = computed(() =>
    props.hash
        ? props.href + '#' + props.hash
        : props.href + '#'
);
</script>

<template>
    <li>
        <a :href="href" class="hover:underline me-4 md:me-6">{{ title }}</a>
    </li>
</template>
