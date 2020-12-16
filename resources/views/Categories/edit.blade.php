<x-app-layout>


    <div class="py-10">
        <div class=" max-w-4xl mx-auto ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class="font-bold text-gray-800 text-3xl flex-100 mb-4 pb-2 border-b border-gray-200">New Categories
                </h3>

                <form action="{{ route('categories.update',$category) }}" method="POST">
                    @csrf
                    @method('put')

                    <div class="flex flex-wrap  mb-2">
                        <div class="w-full mb-2 px-3">
                            <label for="name"> Category in English </label>
                            <input class="form-input w-full" id="name" name="name" type="text"
                                value="{{$category->name}}">
                            <x-jet-input-error for="name" />
                        </div>
                    </div>

                    <div class="flex flex-wrap  mb-2">
                        <div class="w-full mb-2 px-3">
                            <label for="name_si">Category in Sinhala </label>
                            <input class="form-input w-full" id="name_si" type="text" name="name_si"
                                value="{{$category->name_si}}">
                            <x-jet-input-error for="name_si" />
                        </div>
                    </div>
                    <div class="flex flex-wrap  mb-2">
                        <div class="w-full mb-2 px-3">
                            <label for="name_ta">Category in Tamil </label>
                            <input class="form-input w-full" id="name_ta" type="text" name="name_ta"
                                value="{{$category->name_ta}}">
                            <x-jet-input-error for="name_ta" />
                        </div>
                    </div>

                    <div class="flex flex-wrap  mb-2">
                        <div class="w-full mb-2 px-3">
                            <label for="img">Category image URL </label>
                            <input class="form-input w-full" id="img" type="text" name="img" value="{{$category->img}}">
                            <x-jet-input-error for="img" />
                        </div>
                    </div>

                    <div class=" flex w-full justify-end mt-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-3 py-2  rounded-full"
                            type="submit">
                            Update
                        </button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</x-app-layout>
