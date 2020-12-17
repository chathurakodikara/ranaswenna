<x-app-layout>
    <x-slot name="header">



    </x-slot>

    <div class="px-54 py-10">
        <div class=" container mx-auto px-2">

            <div class="md:flex flex-wrap justify-between items-baseline mb-3">
                <div class="flex">
                    <h3 class=" font-bold text-gray-800 text-2xl flex-100 inline-flex items-center">Post of Products
                    </h3>

                    <div class=" relative px-4">
                        <a href="{{ route('myshop.create') }}"
                            class=" -mt-2 p-0 w-12 h-12 absolute flex items-center justify-center bg-red-600 rounded-full hover:bg-red-700 active:shadow-lg shadow transition ease-in duration-200 focus:outline-none">
                            <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-8 h-8 inline-block">
                                <path fill="#FFFFFF"
                                    d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601 C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399 C15.952,9,16,9.447,16,10z" />
                            </svg>
                        </a>
                    </div>

                </div>
                <div>
                    <div class="w-full md:w-96 inline-block relative ">
                        <input type="" name=""
                            class="leading-snug border border-gray-300 block w-full appearance-none bg-gray-100 text-lg text-gray-600 py-2 px-4 pl-8 rounded-lg"
                            placeholder="Search" />

                        <div
                            class="pointer-events-none absolute pl-3 inset-y-0 left-0 flex items-center px-2 text-gray-300">

                            <svg class="fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 511.999 511.999">
                                <path
                                    d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z" />
                            </svg>
                        </div>
                    </div>

                </div>

            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="py-2 align-middle inline-block min-w-full ">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 simple-table">


                                <thead>
                                    <tr>
                                        <th>
                                            ID</th>
                                        <th>
                                            Item Name</th>
                                        <th>
                                            Farmer</th>
                                        <th>
                                            Qty</th>
                                        <th>
                                            Unit Price</th>
                                        <th>
                                            Published</th>
                                        <th>
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach($products as $product)
                                    <tr>

                                        <td class="font-medium"> {{$product->id}}</td>
                                        <td>
                                            {{$product->items_id}}
                                        </td>
                                        <td>
                                            {{$product->farmer_id}}</td>
                                        <td>
                                            {{$product->qty}}</td>
                                        <td>
                                            {{$product->unit_price}}</td>
                                        </td>
                                        <td>
                                            {{$product->created_at}}</td>
                                        <td
                                            class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium ">
                                            <a href=""
                                                class="px-2 py-1 border-yellow-500 border text-yellow-500 rounded transition duration-300 hover:bg-yellow-300 hover:text-white focus:outline-none">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach




                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <div class=" flex sm:items-center justify-between mt-4 work-sans">
                <div>
                    <p class="text-sm leading-5 text-blue-700">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">200</span>
                        of <span class="font-medium">2000</span> results
                    </p>
                </div>
                <div id="pagination" class="flex items-center">
                    <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9 12C9 12.2652 9.10536 12.5196 9.29289 12.7071L13.2929 16.7072C13.6834 17.0977 14.3166 17.0977 14.7071 16.7072C15.0977 16.3167 15.0977 15.6835 14.7071 15.293L11.4142 12L14.7071 8.70712C15.0977 8.31659 15.0977 7.68343 14.7071 7.29289C14.3166 6.90237 13.6834 6.90237 13.2929 7.29289L9.29289 11.2929C9.10536 11.4804 9 11.7348 9 12Z"
                                fill="#2C2C2C" />
                        </g>
                    </svg>

                    <p class="leading-relaxed cursor-pointer mx-2 text-blue-600 hover:text-blue-600 text-sm">1</p>
                    <p class="leading-relaxed cursor-pointer mx-2 text-sm hover:text-blue-600">2</p>
                    <p class="leading-relaxed cursor-pointer mx-2 text-sm hover:text-blue-600"> 3 </p>
                    <p class="leading-relaxed cursor-pointer mx-2 text-sm hover:text-blue-600"> 4 </p>

                    <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15 12C15 11.7348 14.8946 11.4804 14.7071 11.2929L10.7071 7.2929C10.3166 6.9024 9.6834 6.9024 9.2929 7.2929C8.9024 7.6834 8.9024 8.3166 9.2929 8.7071L12.5858 12L9.2929 15.2929C8.9024 15.6834 8.9024 16.3166 9.2929 16.7071C9.6834 17.0976 10.3166 17.0976 10.7071 16.7071L14.7071 12.7071C14.8946 12.5196 15 12.2652 15 12Z"
                            fill="#18A0FB" /> </svg>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
