<x-app-layout>
    <x-slot name="header">


    </x-slot>

    <div class="py-10">
        <div class=" max-w-4xl mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class=" font-bold text-gray-800 text-3xl flex-100 mb-4 pb-2 border-b border-gray-200">Add products to market Place</h3>
                <form method="POST" action=" ">
                    @csrf
                    <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-6 gap-y-3 mb-2">
                        <div>
                            <label for="nic">Farmer's Nic</label>
                            <input id="searchfield" placeholder="Search..." autofocus="autofocus" class="form-input w-full">
                        </div>
                        <div class="col-span-2">
                            <label >Full Name</label>
                            <input class="form-input w-full bg-gray-100 focus:shadow-none focus:border-gray-100 border-gray-100" readonly>
                        </div>
                        
                    </div>


                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-3 mb-2">
                        <div>
                            <label for="grid-Product-category">Product Category</label>
                            <select class="form-select w-full" id="product_category">
                                <option>-Select-</option>
                                <option>Missouri</option>
                                <option>Texas</option>
                            </select>
                        </div>
                        <div>
                            <label for="title_id">Item</label>
                            <select class=" form-select w-full" id="title_id">
                                <option>-Select-</option>
                                <option>Missouri</option>
                                <option>Texas</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="description" >Product Description </label>
                        <textarea class=" form-textarea w-full" id="description" type="text" rows="3" name="description" placeholder="Enter Product Description."></textarea>
                    </div>

                    <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-6 gap-y-3 mb-2">
                        <div>
                            <label for="unit">Unit</label>
                            <select class="form-select w-full" id="unit" name="unit">
                                <option value="Kg">Kg</option>
                                <option value="">Units</option>
                            </select>
                        </div>
                        <div>
                            <label for="qty">QTY</label>
                            <input class="form-input w-full" id="qty" type="text" name="qty">

                        </div>
                        <div>
                            <label for="unit_price">Unit Price</label>
                            <input class="form-input w-full" id="unit_price" type="text" name="unit_price" placeholder="Rs">
                        </div>

                    </div>

                    <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-6 gap-y-3 mb-2 pt-2">
                        <div>
                            <label class="inline-flex items-cente">
                                <input type="checkbox" class="form-checkbox h-6 w-6" name="organic">
                                <span class="ml-2 text-gray-700 text-sm font-bold ">Organic product </span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-cente">
                                <input type="checkbox" class="form-checkbox h-6 w-6" name="transport">
                                <span class="ml-2 text-gray-700 text-sm font-bold">Transport Avalabe </span>
                            </label>
                        </div>

                    </div>

                    <div class="flex mt-6">
                       

                        
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
