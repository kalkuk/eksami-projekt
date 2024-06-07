<script setup>
import { computed } from 'vue';
import $ from 'jquery';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    hash: {
        type: String,
    },
    active: {
        type: Boolean,
    },
    title: String,
});

const classes = computed(() =>
    props.active
        && (!props.hash && !window.location.hash || window.location.hash === '#' + props.hash)
        ? 'navlink-active'
        : ''
);

const href = computed(() =>
    props.hash
        ? props.href + '#' + props.hash
        : props.href + '#'
);

function setActive(event) {
    $('.nav').removeClass('navlink-active');
    $(event.target).addClass('navlink-active');
}
</script>

<template>
    <li>
        <a @click="setActive" :href="href" class="nav navlink" :class="classes">{{ title }}</a>
    </li>
</template>
