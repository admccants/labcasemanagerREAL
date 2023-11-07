<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
    labCases: {
        type: Object,
    }
})
</script>

<template>
    <AuthenticatedLayout>
        Cases!
        <ul>
            <li v-for="labCase in labCases.data" :key="labCase.id" v-text="labCase.patient_first_name">
            </li>
        </ul>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
