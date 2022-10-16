<template>
        <Head title="Dashboard" />
</template>
<script>
    import { Head, usePage } from "@inertiajs/inertia-vue3";
    
    export default {
        name:"Dashboard",
        data() {
            return {
                logo: 'https://s1.vnecdn.net/vnexpress/restruct/c/v1474/dulieubongda/pc/images/graphics/UEFA_champions_league_lite.svg',
                pageRender: ''
            }
        },
        components: {
            Head
        }
    }
</script>
