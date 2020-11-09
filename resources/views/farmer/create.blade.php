<x-app-layout>
    <x-slot name="header">



    </x-slot>

    <div class="px-64 py-10">
        <div class=" container mx-auto ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class="font-bold text-gray-800 text-3xl flex-100 ">New Farmer</h3>

                <form class="">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class=" text-gray-700 textsm font-bold mb-2" for="grid-Farmer-nic">
                                Farmer Nic
                            </label>
                            <input class=" form-input w-full" id="grid-farmer-nic" type="text" placeholder="NIC Number">
                        </div>

                        <div class="w-full md:w-1/2 px-3">
                            <label class=" text-gray-700 text-sm font-bold mb-2" for="grid-full-name">
                                Full Name
                            </label>
                            <input class="form-input w-full" id="grid-full-name" type="text" placeholder="Full Name">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class=" text-gray-700 text-sm font-bold mb-2" for="grid-business-name">
                                Business Name
                            </label>
                            <input class="form-input w-full" id="grid-business-name" type="text"
                                placeholder="Business Name">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block">
                                <span class="text-gray-700 text-sm font-bold mb-2" for="grid-about-farmer">
                                    About Farmer
                                </span>
                                <textarea class="form-input w-full" id="grid-about-farmer" type="text" rows="3"
                                    placeholder="Enter About Farmer."></textarea>
                            </label>
                        </div>
                    </div>



                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-Distict">
                                Distict
                            </label>
                            <div class="relative">
                                <select class="form-input w-full" id="grid-Distict">
                                    <option>-Select-</option>
                                    <option>Ampara</option>
                                    <option>Anuradhapura</option>
                                    <option>Badulla</option>
                                    <option>Batticaloa</option>
                                    <option>Colombo</option>
                                    <option>Galle</option>
                                    <option>Gampaha</option>
                                    <option>Hambantota</option>
                                    <option>Jaffna</option>
                                    <option>Kalutara</option>
                                    <option>Kandy</option>
                                    <option>Kegalle</option>
                                    <option>Kilinochchi</option>
                                    <option>Kurunegala</option>
                                    <option>Mannar</option>
                                    <option>Matale</option>
                                    <option>Matara</option>
                                    <option>Monaragala</option>
                                    <option>Mullaitivu</option>
                                    <option>Nuwara Eliya</option>
                                    <option>Polonnaruwa</option>
                                    <option>Puttalam</option>
                                    <option>Ratnapura</option>
                                    <option>Trincomalee</option>
                                    <option>Vavuniya</option>

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

                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-ASC-division">
                                ASC Division
                            </label>
                            <div class="relative">
                                <select class="form-input w-full" id="grid-ASC-division">
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

                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-gs-aria">
                                GS Aria
                            </label>
                            <input class="form-input w-full" id="grid-gs-aria" type="text" placeholder="GS-Aria">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-Telephone">
                                Telephone
                            </label>
                            <input class="form-input w-full" id="grid-Telephone" type="text"
                                placeholder="Telephone Number">
                        </div>

                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-Mobile">
                                Mobile
                            </label>
                            <input class="form-input w-full" id="grid-Mobile" type="text" placeholder="Mobile Number">
                        </div>

                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-Email">
                                Email
                            </label>
                            <input class="form-input w-full" id="grid-Email" type="text" placeholder="Email Address">
                        </div>
                    </div>


                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class=" text-gray-700 text-sm font-bold mb-2" for="grid-address">
                                Address
                            </label>
                            <textarea class="form-input w-full" id="grid-address" type="text"
                                placeholder="Enter Your Address."></textarea>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <button
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-3 border border-blue-500 hover:border-transparent rounded">
                                New
                            </button>
                            <button
                                class="bg-green-500 hover:bg-green-700 text-white font-bold px-3 py-2  rounded-full">
                                Create Farmer
                            </button>
                        </div>
                    </div>


                </form>



            </div>
        </div>
    </div>
</x-app-layout>
