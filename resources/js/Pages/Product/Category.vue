<script setup>
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import { Head } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";
import { ref, computed } from 'vue'

const users = ref([
    { id: 1, name: 'John Doe', image: 28, slug: 'John-Doe' },
    { id: 2, name: 'Jane Smith', image: 34, slug: 'John-Doe' },
    { id: 3, name: 'Mike Johnson', image: 45, slug: 'John-Doe' },
    { id: 4, name: 'Sarah Williams', image: 25, slug: 'sJohn-Doe' },
    { id: 5, name: 'Chris Brown', image: 38, slug: 'cJohn-Doe' },
    { id: 6, name: 'Nancy Lee', image: 32, slug: 'nJohn-Doe' },
    { id: 7, name: 'Paul Walker', image: 27, slug: 'John-Doe' },
    { id: 8, name: 'Emma Davis', image: 40, slug: 'John-Doe' },
    { id: 9, name: 'Jake White', image: 29, slug: 'John-Doe' },
    { id: 10, name: 'Laura Green', image: 36, slug: 'lJohn-Doe' },
    { id: 10, name: 'Laura Green', image: 36, slug: 'lJohn-Doe' },
    { id: 10, name: 'Laura Green', image: 36, slug: 'lJohn-Doe' },
    { id: 10, name: 'Laura Green', image: 36, slug: 'lJohn-Doe' },
    { id: 10, name: 'Laura Green', image: 36, slug: 'lJohn-Doe' },
    { id: 10, name: 'Laura Green', image: 36, slug: 'lJohn-Doe' },
    { id: 10, name: 'Laura Green', image: 36, slug: 'lJohn-Doe' },
    { id: 10, name: 'Laura Green', image: 36, slug: 'lJohn-Doe' },
])

const itemsPerPage = ref(10)
const currentPage = ref(1)
const searchQuery = ref('')

const filteredUsers = computed(() => {
    const filtered = users.value.filter(user =>
        user.name.toLowerCase().includes(searchQuery.value.toLowerCase())
    )
    const start = (currentPage.value - 1) * itemsPerPage.value
    const end = start + itemsPerPage.value
    return filtered.slice(start, end)
})

const totalPages = computed(() => {
    return Math.ceil(
        users.value.filter(user =>
            user.name.toLowerCase().includes(searchQuery.value.toLowerCase())
        ).length / itemsPerPage.value
    )
})

const nextPage = () => {
    if (currentPage.value < totalPages.value) {
        currentPage.value++
    }
}

const prevPage = () => {
    if (currentPage.value > 1) {
        currentPage.value--
    }
}

</script>

<template>
    <FrontendLayout>

        <Head title="Category page"></Head>
        <div class="container mx-auto">
            <div class="relative mx-4 lg:mx-0 mb-2">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3"><svg class="w-5 h-5 text-gray-500"
                        viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg></span>
                <input v-model="searchQuery"
                    class="w-32 pl-10 pr-4 text-indigo-600 border-gray-200 rounded-md sm:w-64 focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                    type="text" placeholder="Search">
            </div>

            <table class="min-w-full bg-white shadow-md rounded-lg">
                <thead>
                    <tr class="text-left">
                        <th class="py-2 px-4 border-b-2">#</th>
                        <th class="py-2 px-4 border-b-2">Category</th>
                        <th class="py-2 px-4 border-b-2">Image</th>
                        <th class="py-2 px-4 border-b-2">Slug</th>
                        <th class="py-2 px-4 border-b-2">Count</th>
                        <th class="py-2 px-4 border-b-2">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr v-for="user in filteredUsers" :key="user.id" class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b">{{ user.id }}</td>
                        <td class="py-2 px-4 border-b">{{ user.name }}</td>
                        <td class="py-2 px-4 border-b">{{ user.image }}</td>
                        <td class="py-2 px-4 border-b">{{ user.slug }}</td>
                        <td class="py-2 px-4 border-b">5</td>
                        <td class="py-2 px-4 border-b flex">
                            <Link :href="route('category')">
                            <svg class="w-6 h-6 text-green-600 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            </Link>

                            <Link :href="route('category')">
                            <svg class="w-6 h-6 text-blue-400 dark:text-white ml-5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                            </svg>
                            </Link>

                            <Link :href="route('category')">
                            <svg class="w-6 h-6 text-red-400 dark:text-white ml-5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            </Link>
                        </td>
                    </tr>
                </tbody>

            </table>
            <tfoot class="flex items-center mt-4">

                <button class="py-2 px-4 bg-gray-300 hover:bg-gray-400 rounded" :disabled="currentPage === 1"
                    @click="prevPage">
                    Previous
                </button>
                <span class="ml-2">Page {{ currentPage }} of {{ totalPages }}</span>
                <button class="py-2 px-4 bg-gray-300 hover:bg-gray-400 rounded ml-2"
                    :disabled="currentPage === totalPages" @click="nextPage">
                    Next
                </button>
            </tfoot>
        </div>
    </FrontendLayout>
</template>
