<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {Link} from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
</script>

<template>
<!--    nav-->
    <header class="max-w-screen-full bg-gray-300 mx-auto px-20 py-10 flex-1 justify-between">
        <nav>
            <div class="flex items-center justify-between flex-col sm:flex-row max-w-screen-3xl mx-auto">
                <Link href="/">
                    <ApplicationLogo class="w-16 h-16 fill-current text-gray-500" />
                </Link>
                <div class="w-full flex h-full flex-col sm:flex-row items-center justify-end">
                    <Link class="flex items-center ml-4 px-3 py-2 rounded-md text-lg font-medium transition duration-300" :href="route('pricing')">
                        <div class="flex-1 items-center justify-center">Pricing</div>
                    </Link>
                    <PrimaryButton class="ml-4">
                        <Link :href="route('login')">Log In</Link>
                    </PrimaryButton>
                    <PrimaryButton class="ml-4">
                        <Link :href="route('login')">Request Account</Link>
                    </PrimaryButton>
                </div>
            </div>
        </nav>
    </header>

    <slot/>
</template>

<style scoped>

</style>
