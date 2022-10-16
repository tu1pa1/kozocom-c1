<template>
    <div class="flex justify-between h-20 px-7 border rounded-lg border-t-8 border-t-stone-900 mt-10">
        <div class="flex items-center">
            <img class="h-3/4" :src="logo" alt="The kozoc1m Logo">
            <Link href="/dashboard">
                <h3 class="text-base text-gray-800 font-bold tracking-normal leading-tight ml-3 hidden lg:block">The
                    kozoC1m</h3>
            </Link>
        </div>
        <div class="flex items-center gap-6">
            <LinkTable 
                href="/result"
                title="Result" 
                :isActive="$page.component === 'Result'"
            />
            <LinkTable 
                href="/rank"
                title="Rank" 
                :isActive="$page.component === 'Rank'"
            />
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import LinkTable from "@/Components/Frontend/LinkTable.vue";

export default {
    data() {
        return {
            logo: 'https://s1.vnecdn.net/vnexpress/restruct/c/v1474/dulieubongda/pc/images/graphics/UEFA_champions_league_lite.svg',
        }
    },
    components: {
        Link,
        LinkTable
    },
}
</script>