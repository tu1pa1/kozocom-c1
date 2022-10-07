<template>
    <AuthenticatedLayout>
        <Head title="Dashboard" />
        <div class="container mx-auto px-0">
            <HeaderTable />
            <ContentTable />
        </div>
    </AuthenticatedLayout>
</template>
<script>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, usePage } from "@inertiajs/inertia-vue3";
    import HeaderTable from "@/Components/Frontend/HeaderTable.vue";
    import ContentTable from "@/Components/Frontend/ContentTable.vue";
    
    export default {
        name:"Dashboard",
        data() {
            return {
                logo: 'https://s1.vnecdn.net/vnexpress/restruct/c/v1474/dulieubongda/pc/images/graphics/UEFA_champions_league_lite.svg',
            }
        },
        components: {
            AuthenticatedLayout,
            Head,
            HeaderTable,
            ContentTable
        }
    }
</script>
