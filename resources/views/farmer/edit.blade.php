<x-app-layout>
    <x-slot name="header">



    </x-slot>

    <div class="px-64 py-10">
        <div class=" container mx-auto ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('farmers.update',$farmer) }}" method="POST">
                    @csrf
                    @method('put')

                    <h3 class="font-bold text-gray-800 text-3xl flex-100 ">Farmer infomation Update</h3>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class=" text-gray-700 text-sm font-bold mb-2" for="grid-Farmer-nic">
                                Farmer Nic
                            </label>
                            <input class="form-input w-full" id="grid-farmer-nic" name="nic" type="text"
                                value="{{$farmer->nic}}">
                        </div>

                        <div class="w-full md:w-1/2 px-3">
                            <label class=" text-gray-700 text-sm font-bold mb-2" for="grid-full-name">
                                Full Name
                            </label>
                            <input class="form-input w-full" id="grid-full-name" name="name" type="text"
                                value="{{$farmer->name}}">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class=" text-gray-700 textsm font-bold mb-2" for="grid-birthday">
                                Birthday
                            </label>
                            <input class=" form-input w-full" id="grid-birthday" name="birthday" type="text"
                                value="{{$farmer->birthday}}">
                        </div>
                    </div>

                    <div class=" flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class=" text-gray-700 text-sm font-bold mb-2" for="grid-business-name">
                                Business Name
                            </label>
                            <input class="form-input w-full" id="grid-business-name" name="business_name" type="text" value="{{$farmer->business_name}}">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block">
                                <span class="text-gray-700 text-sm font-bold mb-2" for="grid-about-farmer">
                                    About Farmer
                                </span>
                                <textarea class="form-input w-full" id="grid-about-farmer" name="about"
                                    value="{{$farmer->about}}" type="text" rows="3"></textarea>
                            </label>
                        </div>
                    </div>



                    <div class=" flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-Distict">
                                District
                            </label>
                            <div class="relative">
                                <select class="form-input w-full" id="grid-Distict" name="district" value="">
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
                                <select class="form-input w-full" id="grid-ASC-division" name="asc_id"
                                    value="{{$farmer->asc_id}}">
                                    <option>-Select-</option>
                                    <option value="2">Missouri</option>
                                    <option value="3">Texas</option>
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
                            <input class="form-input w-full" id="grid-gs-aria" name="gs_id" type="text"
                                value="{{$farmer->gs_id}}">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-Telephone">
                                Telephone
                            </label>
                            <input class="form-input w-full" id="grid-Telephone" type="text" name="telephone_1"
                                value="{{$farmer->telephone_1}}">
                        </div>

                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-Mobile">
                                Mobile
                            </label>
                            <input class="form-input w-full" id="grid-Mobile" type="text" name="telephone_2"
                                value="{{$farmer->telephone_2}}">
                        </div>

                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class=" tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-Email">
                                Email
                            </label>
                            <input class="form-input w-full" id="grid-Email" type="text" name="email"
                                value="{{$farmer->email}}">
                        </div>
                    </div>


                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class=" text-gray-700 text-sm font-bold mb-2" for="grid-address">
                                Address
                            </label>
                            <textarea class="form-input w-full" id="grid-address" type="text" name="address"
                                value="{{$farmer->address}}"></textarea>
                        </div>
                    </div>



                    <button
                        class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-3 border-b-4 border-red-700 hover:border-red-500 rounded">
                        Delete
                    </button>
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1
                                 px-3 border border-blue-500 hover:border-transparent rounded">
                        New
                    </button>
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold px-3 py-2  rounded-full"
                        type="submit">
                        Create Farmer
                    </button>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
