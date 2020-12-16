<x-app-layout>
    <x-slot name="header">



    </x-slot>

    <div class="py-10">
        <div class=" max-w-4xl mx-auto ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class="font-bold text-gray-800 text-3xl flex-100 mb-4 pb-2 border-b border-gray-200 ">New Product
                    Title
                </h3>

                <form method="POST" action="/items">
                @csrf

                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full px-3">
                           
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
                        <button
                            class=" bg-green-700 px-4 py-2 rounded focus:outline-none hover:bg-green-600 transition-colors duration-150 ease-in-out text-white font-bold leading-relaxed"
                            type="submit">
                            Create 
                        </button>
                        </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
