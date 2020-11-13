<x-app-layout>
    <x-slot name="header">


    </x-slot>

    <div class="px-64 py-10">
        <div class=" container mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class=" font-bold text-gray-800 text-3xl flex-100">Add products to market Place</h3>
                <form method=" POST " action=" ">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class=" text-gray-700 text-sm font-bold mb-2" for="grid-Farmer-nic">
                                Farmer's Nic
                            </label>

                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">

                            <input id="searchfield" type="search" placeholder="Search..." autofocus="autofocus"
                                class=" form-input w-full">

                        </div>

                        <div class="w-full md:w-1/2 px-3">
                            <input class="form-input w-full" id="grid-farmer-name" type=" text">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class=" text-gray-700 text-sm font-bold mb-2" for="grid-Product-category">
                                Product Category
                            </label>
                            <div class="relative">
                                <select class="form-input w-full" id="grid-product-category">
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

                        <div class="w-full md:w-1/2 px-3">
                            <label class=" text-gray-700 text-sm font-bold mb-2" for="grid-product-title">
                                Product Title
                            </label>
                            <div class="relative">
                                <select class="form-input w-full" id="grid-product-title">
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
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block">
                                <span class="text-gray-700 text-sm font-bold mb-2" for="grid-description">
                                    Product Description
                                </span>
                                <textarea class="form-input w-full" id="grid-description" type="text" rows="3"
                                    name="description" placeholder="Enter Product Description."></textarea>
                            </label>
                        </div>
                    </div>
                    <div class="flex mt-2">
                        <h3 class="text-gray-700 text-xs font-bold mb-2">
                            Product Description
                        </h3>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                for="grid-unit">
                                Unit
                            </label>
                            <input class="form-input w-full" id="grid-unit" type="text" name="unit" placeholder="Kg">
                        </div>

                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                for="grid-qty">
                                Selling QTY
                            </label>
                            <input class="form-input w-full" id="grid-qty" type="text" name="qty"
                                placeholder="Selling QTY">
                        </div>

                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                for="grid-unit_price">
                                Selling Price per unit
                            </label>
                            <input class="form-input w-full" id="grid-unit_price" type="text" name="unit_price"
                                placeholder="Rs">
                        </div>
                    </div>

                    <div class="flex mt-6">
                        <label class=" inline-flex items-center">
                            <input type="checkbox" class="form-checkbox" name="organic">
                            <span class="ml-2 text-gray-700 text-sm font-bold ">Organic product </span>
                        </label>



                        <label class="inline-flex items-center ml-15">
                            <input type="checkbox" class="form-checkbox" name="transport">
                            <span class="ml-2 text-gray-700 text-sm font-bold">Transport Avalabe </span>
                        </label>
                    </div>



                    <div class="flex mt-10">
                        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1
                                 px-3 border border-blue-500 hover:border-transparent rounded
                                 inline-flex items-center ">
                            New
                        </button>


                        <button
                            class="bg-green-500 hover:bg-green-700 text-white font-bold px-3 py-2  rounded-full inline-flex items-center ml-2"
                            type="submit">
                            Create Farmer
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
