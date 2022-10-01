<template>
    <AuthenticatedLayout>
        <Head title="Dashboard" />
        <div class="container mx-auto px-0 mt-10 bg-white">
            <div class="w-full h-full rounded-md">
                <h1>Here is Dashboard</h1>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, usePage } from "@inertiajs/inertia-vue3";

    export default {
        name:"Dashboard",
        components: {
            AuthenticatedLayout,
            Head
        }
    }
</script>
