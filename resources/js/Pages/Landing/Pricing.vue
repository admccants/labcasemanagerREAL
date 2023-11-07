<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Link } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
</script>

<template>
    <GuestLayout>
        <PrimaryButton>
            <Link :href="route('register')">Register</Link>
        </PrimaryButton>
        Hello world!
        Pricing: 1 month 6 months 12 months 2 years
    </GuestLayout>
</template>

<style scoped>

</style>
