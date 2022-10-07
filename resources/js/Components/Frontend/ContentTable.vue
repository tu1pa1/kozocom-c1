<template>
    <div class="mt-4 h-full border rounded-t-lg">
        <div class="flex gap-2 py-3 px-6 bg-blue-dark">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-arrows-vertical text-green-600" width="20"
                height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M18 21v-14"></path>
                <path d="M9 15l3 -3l3 3"></path>
                <path d="M15 10l3 -3l3 3"></path>
                <line x1="3" y1="21" x2="21" y2="21"></line>
                <line x1="12" y1="21" x2="12" y2="12"></line>
                <path d="M3 6l3 -3l3 3"></path>
                <path d="M6 21v-18"></path>
            </svg>
            <h2 class="text-white">Rank</h2>
        </div>

        <div class="overflow-x-auto relative">
            <table class="w-full text-sm dark:text-gray-400">
                <thead class="text-xs text-gray-500 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Position
                        </th>
                        <th scope="col" class="py-3 pl-14 text-left">
                            Club
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Played
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Won
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Drawn
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Lost
                        </th>
                        <th scope="col" class="py-3 px-6">
                            GF
                        </th>
                        <th scope="col" class="py-3 px-6">
                            GA
                        </th>
                        <th scope="col" class="py-3 px-6">
                            GD
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Points
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Form
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                        <th scope="row" class="text-center py-4 px-6 font-medium w-0">
                            1
                        </th>
                        <td class="py-4 px-6 flex items-center text-base">
                            <img src="https://resources.premierleague.com/premierleague/badges/25/t1.png" alt="Manchester United Logo">
                            <span class="px-4">Manchester United</span>
                        </td>
                        <td class="py-4 px-6 w-0">
                            1
                        </td>
                        <td class="py-4 px-6 w-0">
                            2
                        </td>
                        <td class="py-4 px-6 w-0">
                            3
                        </td>
                        <td class="py-4 px-6 w-0">
                            3
                        </td>
                        <td class="py-4 px-6 w-0">
                            3
                        </td>
                        <td class="py-4 px-6 w-0">
                            3
                        </td>
                        <td class="py-4 px-6 w-0">
                            3
                        </td>
                        <td class="py-4 px-6 w-0">
                            3
                        </td>
                        <td class="py-4 px-3 inline-flex items-center">
                            <button
                                type="button"
                                class="text-white bg-gray-500 font-medium rounded-full w-8 h-8 flex justify-center items-center mr-1"
                            >
                                <p class="font-bold">D</p>
                            </button>
                       
                            <button
                                type="button"
                                class="text-white bg-green-700 font-medium rounded-full w-8 h-8 flex justify-center items-center mr-1"
                            >
                                <p class="font-bold">W</p>
                            </button>
                            <button
                                type="button"
                                class="text-white bg-red-700 font-medium rounded-full w-8 h-8 flex justify-center items-center mr-1"
                            >
                                <p class="font-bold">L</p>
                            </button>
                            <button
                                type="button"
                                class="text-white bg-gray-500 font-medium rounded-full w-8 h-8 flex justify-center items-center mr-1"
                            >
                                <p class="font-bold">D</p>
                            </button>
                            <button
                                type="button"
                                class="text-white bg-green-700 font-medium rounded-full w-8 h-8 flex justify-center items-center mr-1"
                            >
                                <p class="font-bold">W</p>
                            </button>
                        </td>
                    </tr>
                    <!-- --- -->
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                        <th scope="row" class="text-center py-4 px-6 font-medium w-0">
                            1
                        </th>
                        <td class="py-4 px-6 flex items-center text-base">
                            <img src="https://resources.premierleague.com/premierleague/badges/25/t1.png" alt="Manchester United Logo">
                            <span class="px-4">Manchester United</span>
                        </td>
                        <td class="py-4 px-6 w-0">
                            1
                        </td>
                        <td class="py-4 px-6 w-0">
                            2
                        </td>
                        <td class="py-4 px-6 w-0">
                            3
                        </td>
                        <td class="py-4 px-6 w-0">
                            3
                        </td>
                        <td class="py-4 px-6 w-0">
                            3
                        </td>
                        <td class="py-4 px-6 w-0">
                            3
                        </td>
                        <td class="py-4 px-6 w-0">
                            3
                        </td>
                        <td class="py-4 px-6 w-0">
                            3
                        </td>
                        <td class="py-4 px-3 inline-flex items-center">
                            <button
                                type="button"
                                class="text-white bg-gray-500 font-medium rounded-full w-8 h-8 flex justify-center items-center mr-1"
                            >
                                <p class="font-bold">D</p>
                            </button>
                       
                            <button
                                type="button"
                                class="text-white bg-green-700 font-medium rounded-full w-8 h-8 flex justify-center items-center mr-1"
                            >
                                <p class="font-bold">W</p>
                            </button>
                            <button
                                type="button"
                                class="text-white bg-red-700 font-medium rounded-full w-8 h-8 flex justify-center items-center mr-1"
                            >
                                <p class="font-bold">L</p>
                            </button>
                            <button
                                type="button"
                                class="text-white bg-gray-500 font-medium rounded-full w-8 h-8 flex justify-center items-center mr-1"
                            >
                                <p class="font-bold">D</p>
                            </button>
                            <button
                                type="button"
                                class="text-white bg-green-700 font-medium rounded-full w-8 h-8 flex justify-center items-center mr-1"
                            >
                                <p class="font-bold">W</p>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>