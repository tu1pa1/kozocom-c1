<template>
    <Link
        class='py-2 px-6 border rounded-lg border-stone-400 hover:bg-green-500'
        :class="{'bg-green-500': isActive}">
        <h2 v-text="title"></h2>
    </Link>
</template>

<script>
    import {Link} from "@inertiajs/inertia-vue3"

    export default {
        props: {
            title: String,
            isActive: Boolean,
        },
        components: {
            Link
        }
    }

</script>