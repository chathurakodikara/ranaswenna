<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="px-5 py-10">
        <!-- New Categories-Panal -->
        <div class=" container  flex flex-wrap  ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 w-1/3   ">

                <form class="">
                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full px-3">
                            <label class="text-gray-700 text-base font-bold mb-2 border-b ">New Categories</label>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3">
                            <label class="block">
                                <span class="text-gray-700 text-sm font-bold mb-2" for="grid-in-english">
                                    Category in English
                                </span>
                                <input class="form-input w-full" id="grid-category-english" type="text"
                                    placeholder="In English">
                            </label>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3">
                            <label class="block">
                                <span class="text-gray-700 text-sm font-bold mb-2" for="grid-in-sinhala">
                                    Category in Sinhala
                                </span>
                                <input class="form-input w-full" id="grid-category-sinhala" type="text"
                                    placeholder="In Sinhala">
                            </label>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3">
                            <label class="block">
                                <span class="text-gray-700 text-sm font-bold mb-2" for="grid-in-tamil">
                                    Category in Tamil
                                </span>
                                <input class="form-input w-full" id="grid-category-tamil" type="text"
                                    placeholder="In Tamil">
                            </label>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-0 mb-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-3 py-2  rounded-full">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <!--End New Categories-Panal -->


            <!-- New Product Title-Panal -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 w-2/3  ">
                <form class="">
                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full px-3">
                            <label class="text-gray-700 text-base font-bold mb-2 border-b ">New Product Title</label>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2"
                                for="grid-product-category">
                                Product Category
                                <div class="relative">
                                    <select class="form-input w-full" id="grid-product">
                                        <option>-Select-</option>
                                        <option>Missouri</option>
                                        <option>Texas</option>
                                    </select>

                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                </div>
                        </div>

                        <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-image">
                                Product image URL
                            </label>
                            <input class="form-input w-full" id="grid-image-url" type="text"
                                placeholder="Product Image URL">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2"
                                for="grid-title-in-english" >
                                Title in English
                            </label>
                            <input class="form-input w-full" id="grid-title-english" type="text" placeholder="In English">
                        </div>

                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2"
                                for="grid-title-in-sinhala" >
                                Title in Sinhala
                            </label>
                            <input class="form-input w-full" id="grid-title-sinhala" type="text" placeholder="In Sinhala">
                        </div>

                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2"
                                for="grid-title-in-tamil">
                                Title in Tamil
                            </label>
                            <input class="form-input w-full" id="grid-title-tamil" type="text" placeholder="In Tamil">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3">
                            <label class=" text-gray-700 text-sm font-bold mb-2" for="grid-keyword">
                                Keywords
                            </label>
                            <textarea class="form-input w-full" id="grid-keywords" type="text"
                                placeholder="Keywords"></textarea>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-0 mb-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-3 py-2  rounded-full">
                            Submit
                        </button>
                </form>
            </div>
        </div>
    </div>
    <!-- End New Product Title-Panal -->

    <!-- New Categories Table-Panal -->
    <div class=" py-5">
        <div class=" flex flex-wrap  ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 w-1/3   ">
                <form>

                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border-b-2 border-gray-300 ">ID</th>
                                <th class="px-4 py-2 border-b-2 border-gray-300 ">Category</th>
                                <th class="px-4 py-2 border-b-2 border-gray-300 ">Category</th>
                                <th class="px-4 py-2 border-b-2 border-gray-300 ">Category</th>
                                <th class="px-4 py-2 border-b-2 border-gray-300 "></th>

                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr>
                                <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm leading-5 text-gray-800">#1</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="text-sm leading-5 text-blue-900">Dam</div>
                                </td>
                                <td
                                    class="px-4 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                    hhhh</td>
                                <td
                                    class="px-4 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                    jjjjj</td>


                                <td
                                    class="px-4 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                    <button
                                        class="px-3 py-1 bg-gray-500 hover:bg-gray-700 text-white font-bold  rounded">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!--End  Categories Table-Panal -->


            <!-- Product Title-Panal -->

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 w-2/3  ">

                <form>
                    <div class="w-full px-3">
                        <label class="text-gray-700 text-base font-bold mb-2 border-b ">Product Titles</label>
                    </div>

                    <div
                        class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
                        <div class="flex justify-between">
                            <div class="inline-flex border rounded w-7/12 px-2 lg:px-6 h-12 bg-transparent">
                                <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">
                                    <div class="flex">
                                        <span
                                            class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                                            <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z"
                                                    stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <input type="text"
                                        class="flex-shrink flex-grow  leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs  text-gray-500 font-thin"
                                        placeholder="Search">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 ">ID</th>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 ">Image</th>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 ">Title Englishl</th>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 ">Title Sinhala</th>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 ">Title Tamil</th>
                                    <th class="px-4 py-2 border-b-2 border-gray-300 ">Category</th>
                                    <th class="px-4 py-2 border-b-2 border-gray-300">Keywords</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 text-gray-800">#1</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-sm leading-5 text-blue-900">Dam</div>
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                        hhhh</td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                        jjjjj</td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                        jjjjj</td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                                        September 12</td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                        <button
                                            class="px-3 py-1  bg-gray-500 hover:bg-gray-700 text-white font-bold  rounded">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
                            <div>
                                <p class="text-sm leading-5 text-blue-700">
                                    Showing
                                    <span class="font-medium">1</span>
                                    to
                                    <span class="font-medium">200</span>
                                    of
                                    <span class="font-medium">2000</span>
                                    results
                                </p>
                            </div>
                            <div>
                                <nav class="relative z-0 inline-flex shadow-sm">
                                    <div>
                                        <a href="#"
                                            class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                                            aria-label="Previous"
                                            v-on:click.prevent="changePage(pagination.current_page - 1)">
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-700 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                                            1
                                        </a>
                                        <a href="#"
                                            class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                                            2
                                        </a>
                                        <a href="#"
                                            class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                                            3
                                        </a>
                                    </div>
                                    <div v-if="pagination.current_page < pagination.last_page">
                                        <a href="#"
                                            class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                                            aria-label="Next">
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <!-- End Product Titles-Panal -->

        </div>
</x-app-layout>
