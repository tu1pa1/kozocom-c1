<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <NavBar :auth="auth"/>
            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>

<script>
import NavBar from '@/Components/Frontend/NavBar.vue';
import { usePage } from "@inertiajs/inertia-vue3"

export default {
    components: {
        NavBar
    },
    computed: {
        auth() {
            return usePage().props.value.auth.user;
        }
    }
}
</script>
