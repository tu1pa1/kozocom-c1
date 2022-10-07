<template>
    <div class="flex justify-between h-20 px-7 border rounded-lg border-t-8 border-t-stone-900 mt-10">
        <div class="flex items-center">
            <img class="h-3/4" :src="logo" alt="The kozoc1m Logo">
            <a href="">
                <h3 class="text-base text-gray-800 font-bold tracking-normal leading-tight ml-3 hidden lg:block">The
                    kozoC1m</h3>
            </a>
        </div>
        <div class="flex items-center gap-8">
            <a href="#" class="py-2 px-6 border rounded-lg border-stone-400 hover:bg-slate-100">
                <h2>Kết quả</h2>
            </a>
            <a href="#" class="py-2 px-6 border rounded-lg border-stone-400 hover:bg-slate-100">
                <h2>Bảng điểm</h2>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            logo: 'https://s1.vnecdn.net/vnexpress/restruct/c/v1474/dulieubongda/pc/images/graphics/UEFA_champions_league_lite.svg',
        }
    },
}
</script>