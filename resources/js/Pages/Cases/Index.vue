<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import {Link} from "@inertiajs/vue3";

defineProps({
    labCases: {
        type: Object,
    }
})
</script>

<template>
    <Head title="Cases" />
    <AuthenticatedLayout>

        <div class="lg:my-10 bg-white rounded-md shadow overflow-x-auto">
            <table class="table-auto  w-full whitespace-nowrap mx-auto">
                <thead>
                <tr class="text-left font-bold">
                    <th class="pb-4 pt-6 px-6">Due Date</th>
                    <th class="pb-4 pt-6 px-6">Date Out</th>
                    <th class="pb-4 pt-6 px-6">Pan</th>
                    <th class="pb-4 pt-6 px-6">Customer</th>
                    <th class="pb-4 pt-6 px-6">Patient</th>
                    <th class="pb-4 pt-6 px-6">Amount</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="labCase in labCases" :key="labCase.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
<!--                        Due Date-->
                        <td class="border-t">
                            <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/cases/${labCase.id}`">
                                {{labCase.updated_at}}
                            </Link>
                        </td>
<!--                        Date Out-->
                        <td class="border-t">
                            <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/cases/${labCase.id}`">
                                {{labCase.updated_at}}
                            </Link>
                        </td>
<!--                        Pan-->
                        <td class="border-t">
                            <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/cases/${labCase.id}`">
                                {{labCase.pan_number}}
                            </Link>
                        </td>
<!--                        Customer-->
                        <td class="border-t">
                            <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/cases/${labCase.id}`">
                                {{labCase.pan_number}}
                            </Link>
                        </td>
<!--                        Patient-->
                        <td class="border-t">
                            <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/cases/${labCase.id}`">
                                {{labCase.patient_first_name}} {{labCase.patient_last_name}}
                            </Link>
                        </td>
<!--                        Amount-->
                        <td class="border-t">
                            <Link method="get" class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/cases/${labCase.id}`">
                                <span v-if="labCase.price">${{labCase.price}}</span>
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
