<template>
    <div>
        <div class="min-h-screen">
            <NavBar :auth="auth"/>
            <div class="container mx-auto px-0">
                <HeaderTable />
                <main>
                    <slot />
                </main>
            </div>

        </div>
    </div>
</template>

<script>
import NavBar from '@/Components/Frontend/NavBar.vue';
import HeaderTable from '@/Components/Frontend/HeaderTable.vue';
import { usePage } from "@inertiajs/inertia-vue3"

export default {
    components: {
        NavBar,
        HeaderTable
    },
    computed: {
        auth() {
            return usePage().props.value.auth.user;
        }
    }
}
</script>
