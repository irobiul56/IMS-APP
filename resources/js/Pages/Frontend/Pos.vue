<template>
    <FrontendLayout>
        <Head title="Point Of Sell"></Head>
        <div class="bg-gray-100 p-6">
            <!-- Full width search bar -->
            <div class="w-full mb-6">
                <input type="text" class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Search products...">
            </div>

            <!-- Main section -->
            <div class="flex flex-wrap -mx-3">
                <!-- Product cart table (30% width) -->
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold mb-4">Cart</h2>
                        <table class="w-full text-left">
                            <thead>
                                <tr>
                                    <th class="border-b-2 p-2">Product</th>
                                    <th class="border-b-2 p-2">Quantity</th>
                                    <th class="border-b-2 p-2">Price</th>
                                    <th class="border-b-2 p-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example cart items -->

                                <tr>
                                    <td class="border-b p-2">Product 2</td>
                                    <td class="border-b p-2">
                                        <div class="flex items-center space-x-1">
                                            <button id="decrease"
                                                class="w-5 h-5 flex items-center justify-center bg-gray-300 hover:bg-gray-400 text-black rounded">-</button>
                                            <input id="quantity" type="text" value="1"
                                                class="w-5 text-center border border-gray-300 rounded" />
                                            <button id="increase"
                                                class="w-5 h-5 flex items-center justify-center bg-gray-300 hover:bg-gray-400 text-black rounded">+</button>
                                        </div>
                                    </td>
                                    <td class="border-b p-2">$10.00</td>
                                    <td class="border-b p-2">
                                        <button
                                            class="w-5 h-5 flex items-center justify-center bg-red-600 hover:bg-gray-400 text-white rounded ">
                                            - </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="border-b p-2">Product 2</td>
                                    <td class="border-b p-2">
                                        <div class="flex items-center space-x-1">
                                            <button id="decrease"
                                                class="w-5 h-5 flex items-center justify-center bg-gray-300 hover:bg-gray-400 text-black rounded">-</button>
                                            <input id="quantity" type="text" value="10"
                                                class="w-5 text-center border border-gray-300 rounded" />
                                            <button id="increase"
                                                class="w-5 h-5 flex items-center justify-center bg-gray-300 hover:bg-gray-400 text-black rounded">+</button>
                                        </div>
                                    </td>
                                    <td class="border-b p-2">$10.00</td>
                                    <td class="border-b p-2">
                                        <button
                                            class="w-5 h-5 flex items-center justify-center bg-red-600 hover:bg-gray-400 text-white rounded ">
                                            - </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="border-b p-2">Product 2</td>
                                    <td class="border-b p-2">
                                        <div class="flex items-center space-x-1">
                                            <button id="decrease"
                                                class="w-5 h-5 flex items-center justify-center bg-gray-300 hover:bg-gray-400 text-black rounded">-</button>
                                            <input id="quantity" type="text" value="2"
                                                class="w-5 text-center border border-gray-300 rounded" />
                                            <button id="increase"
                                                class="w-5 h-5 flex items-center justify-center bg-gray-300 hover:bg-gray-400 text-black rounded">+</button>
                                        </div>
                                    </td>
                                    <td class="border-b p-2">$10.00</td>
                                    <td class="border-b p-2">
                                        <button
                                            class="w-5 h-5 flex items-center justify-center bg-red-600 hover:bg-gray-400 text-white rounded ">
                                            - </button>
                                    </td>
                                </tr>
                                <!-- Add more items as needed -->
                            </tbody>
                        </table>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-lg mt-3">
                        <h2 class="text-2xl font-semibold mb-3"></h2>
                        <table class="w-full text-left">
                            <tr>
                                <td colspan="2" class="border-b-2 p-2">Total Quantity</td>
                                <td class="border-b-2 p-2">2</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border-b-2 p-2">Sub Total</td>
                                <td class="border-b-2 p-2">2</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border-b-2 p-2">Tax</td>
                                <td class="border-b-2 p-2">2%</td>
                            </tr>
                            <tr>
                                <td class="border-b-2 p-2">Discount</td>
                                <td class="border-b-2 p-2"><input class="w-20 text-center border border-gray-300 rounded"
                                        value="0" type="text"></td>
                                <td class="border-b-2 p-2">0</td>
                            </tr>

                            <tr>
                                <td colspan="2" class="border-b-2 p-2">Total</td>
                                <td class="border-b-2 p-2">2</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Product search and category navbar + product cards (70% width) -->
                <div class="w-full md:w-2/3 px-3">
                    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg mb-4"
                            placeholder="Search products...">
                        <nav class="flex space-x-4 mb-6">
                            <a href="#" class="text-blue-500 hover:underline">Category 1</a>
                            <a href="#" class="text-blue-500 hover:underline">Category 2</a>
                            <a href="#" class="text-blue-500 hover:underline">Category 3</a>
                            <!-- Add more categories as needed -->
                        </nav>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Example product card -->
                            <div class="bg-white p-4 rounded-lg shadow-lg">
                                <img src="https://via.placeholder.com/150" alt="Product Image"
                                    class="w-full h-32 object-cover mb-2 rounded">
                                <h3 class="text-lg font-semibold mb-2">Product 1</h3>
                                <span class="text-xl font-bold">$10.00</span>
                            </div>

                            <div class="bg-white p-4 rounded-lg shadow-lg">
                                <img src="https://via.placeholder.com/150" alt="Product Image"
                                    class="w-full h-32 object-cover mb-2 rounded">
                                <h3 class="text-lg font-semibold mb-2">Product 1</h3>
                                <span class="text-xl font-bold">$10.00</span>
                            </div>

                            <div class="bg-white p-4 rounded-lg shadow-lg">
                                <img src="https://via.placeholder.com/150" alt="Product Image"
                                    class="w-full h-32 object-cover mb-2 rounded">
                                <h3 class="text-lg font-semibold mb-2">Product 1</h3>
                                <span class="text-xl font-bold">$10.00</span>
                            </div>

                            <div class="bg-white p-4 rounded-lg shadow-lg">
                                <img src="https://via.placeholder.com/150" alt="Product Image"
                                    class="w-full h-32 object-cover mb-2 rounded">
                                <h3 class="text-lg font-semibold mb-2">Product 1</h3>
                                <span class="text-xl font-bold">$10.00</span>
                            </div>

                            <div class="bg-white p-4 rounded-lg shadow-lg">
                                <img src="https://via.placeholder.com/150" alt="Product Image"
                                    class="w-full h-32 object-cover mb-2 rounded">
                                <h3 class="text-lg font-semibold mb-2">Product 1</h3>
                                <span class="text-xl font-bold">$10.00</span>
                            </div>

                            <div class="bg-white p-4 rounded-lg shadow-lg">
                                <img src="https://via.placeholder.com/150" alt="Product Image"
                                    class="w-full h-32 object-cover mb-2 rounded">
                                <h3 class="text-lg font-semibold mb-2">Product 1</h3>
                                <span class="text-xl font-bold">$10.00</span>
                            </div>

                            <div class="bg-white p-4 rounded-lg shadow-lg">
                                <img src="https://via.placeholder.com/150" alt="Product Image"
                                    class="w-full h-32 object-cover mb-2 rounded">
                                <h3 class="text-lg font-semibold mb-2">Product 1</h3>
                                <span class="text-xl font-bold">$10.00</span>
                            </div>

                            <div class="bg-white p-4 rounded-lg shadow-lg">
                                <img src="https://via.placeholder.com/150" alt="Product Image"
                                    class="w-full h-32 object-cover mb-2 rounded">
                                <h3 class="text-lg font-semibold mb-2">Product 1</h3>
                                <span class="text-xl font-bold">$10.00</span>
                            </div>
                            <!-- Add more product cards as needed, up to 12 total -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontendLayout>
</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>