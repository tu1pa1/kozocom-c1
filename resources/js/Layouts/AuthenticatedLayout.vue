<script setup>
import { ref } from 'vue';
import NavBar from '@/Components/Frontend/NavBar.vue';
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <NavBar />
            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
