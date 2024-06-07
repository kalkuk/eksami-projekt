<script setup>
    import MainLayout from '@/Layouts/MainLayout.vue';
    import Message from '@/Components/Message.vue';
    import {Head, useForm} from '@inertiajs/vue3';

    const form = useForm({
        email: '',
        successMessages: [],
    });

    const addContact = () => {
        form.successMessages = [];
        form.clearErrors();

        axios.post(
            route('contact.store'),
            {email: form.email}
        ).then((response) => {
            form.successMessages = response.data.messages;
            form.email = '';
        }).catch(
            (error) => {
                form.errors = error.response.data.errors;
            }
        );
    };
</script>

<template>
    <Head title="Contact Us" />
    <MainLayout>
        <!--Contact form-->
        <div class="flex flex-col items-center justify-center">

            <div class="mx-auto mt-32 my-auto max-w-3xl">
                <div class="bg-dark-800 p-16 rounded text-center">
                    <form @submit.prevent="addContact">
                        <h2>Don't miss out!</h2>
                        <p class="mt-6 ">Join our newsletter. Latest news and best offers once a week</p>
                        <input
                            v-model="form.email"
                            type="email" id="email"
                            class="mt-4 h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 pr-20 font-normal text-white outline outline-0 focus:border-2 focus:border-gray-400 placeholder:italic placeholder:text-slate-4000"
                            placeholder="name@email.com" required="required" />
                        <Message type='error' :messages="form.errors.email" class="mt-2" />
                        <Message type='success' :messages="form.successMessages" class="mt-2"/>
                        <button class="btn-primary mt-8">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </MainLayout>
</template>
