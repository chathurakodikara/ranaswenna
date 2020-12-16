<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="px-5 py-10">
        <!-- New Categories-Panal -->
        <div class=" container  flex flex-wrap  ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 w-1/3">

                <form method="POST" action="">
 
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full px-3">
                            <div class="font-bold text-gray-800 text-3sm flex-100 mb-4 pb-2 border-b border-gray-200 ">
                                New Categories
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap  mb-2">
                        <div class="w-full mb-2 px-3">
                            <label for="name"> Category in English </label>
                            <input class="form-input w-full" id="name" name="name" type="text"
                                value="{{ old('name') }}">
                            <x-jet-input-error for="name" />
                        </div>
                    </div>

                    <div class="flex flex-wrap  mb-2">
                        <div class="w-full mb-2 px-3">
                            <label for="name_si">Category in Sinhala </label>
                            <input class="form-input w-full" id="name_si" type="text" name="name_si"
                                value="{{ old('name_si') }}">
                            <x-jet-input-error for="name_si" />
                        </div>
                    </div>
                    <div class="flex flex-wrap  mb-2">
                        <div class="w-full mb-2 px-3">
                            <label for="name_ta">Category in Tamil </label>
                            <input class="form-input w-full" id="name_ta" type="text" name="name_ta"
                                value="{{ old('name_ta') }}">
                            <x-jet-input-error for="name_ta" />
                        </div>
                    </div>

                    <div class="flex flex-wrap  mb-2">
                        <div class="w-full mb-2 px-3">
                            <label for="img">Category image URL </label>
                            <input class="form-input w-full" id="img" type="text" name="img" value="{{ old('img') }}">
                            <x-jet-input-error for="img" />
                        </div>
                    </div>

                    <div class=" flex w-full justify-end mt-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-3 py-2  rounded-full"
                            type="submit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <!--End New Categories-Panal -->


            <!-- New Product Title-Panal -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-7 p-4 w-2/3  ">
                <form method=" POST" action="">

                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full px-3">
                            <div class="font-bold text-gray-800 text-3sm flex-100 mb-4 pb-2 border-b border-gray-200 ">
                                New Product Title
                            </div>

                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-2 ">

                            <div>
                                <label for="category_id"> Product Category </label>
                                <select class="form-select w-full" id="category_id" name="category_id">
                                    {{-- @if ( old('category_id') == )
                                    
                                    @endif --}}
                                    <option value="">-Select-</option>
                                            @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    
                                   
                                    @endforeach
                                </select>
                                
                                <x-jet-input-error for="category_id" />
                            </div>
                        </div>

                        <div class="w-full md:w-2/3 px-3 mb-3">

                            <div class="w-full mb-2 px-3">
                                <label for="img">Product image URL </label>
                                <input class="form-input w-full" id="img" type="text" name="img"
                                    value="{{ old('img') }}">
                                <x-jet-input-error for="img" />
                            </div>
                        </div>


                        <div class="w-full md:w-1/3 px-3 mb-3 ">
                            <div>
                                <label for="name">Title in English </label>
                                <input class="form-input w-full" id="name" type="text" name="name"
                                    value="{{ old('name') }}">
                                <x-jet-input-error for="name" />

                            </div>
                        </div>

                        <div class="w-full md:w-1/3 px-3 mb-3 ">
                            <div>
                                <label for="name_si">Title in Sinhala </label>
                                <input class="form-input w-full" id="name_si" type="text" name="name_si"
                                    value="{{ old('name_si') }}">
                                <x-jet-input-error for="name_si" />
                            </div>
                        </div>

                        <div class="w-full md:w-1/3 px-3 mb-3 ">
                            <div>
                                <label for="name_ta">Title in Tamil </label>
                                <input class="form-input w-full" id="name_ta" type="text" name="name_ta"
                                    value="{{ old('name_ta') }}">
                                <x-jet-input-error for="name_ta" />
                            </div>
                        </div>



                        <div class="w-full mb-3 px-3">
                            <div>
                                <lable for="keywords">Keywords</lable>

                                <textarea class="form-input w-full" id="keywords" name="keywords" type="text"
                                    rows="3">{{ old('keywords') }}</textarea>
                                <x-jet-input-error for="keywords" />

                            </div>
                        </div>

                        <div class=" flex w-full justify-end mt-2">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-3 py-2  rounded-full"
                                type="submit">
                                Submit
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End New Product Title-Panal -->

    <!-- New Categories Table-Panal -->
    <div class=" py-5">
        <div class=" flex flex-wrap  ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 w-1/3   ">


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

                                <a href=" "
                                    class="px-3 py-1 bg-gray-500 hover:bg-gray-700 text-white font-bold  rounded">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

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


                                        <a href=" "
                                            class="px-3 py-1 bg-gray-500 hover:bg-gray-700 text-white font-bold  rounded">Edit</a>
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
