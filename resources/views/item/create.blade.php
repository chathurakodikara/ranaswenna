<x-app-layout>

    <div class="py-10">
        <div class=" max-w-4xl mx-auto ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class="font-bold text-gray-800 text-3xl flex-100 mb-4 pb-2 border-b border-gray-200 ">New Product
                    Title
                </h3>

                <form method="POST" action="/items">
                    @csrf

                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full md:w-1/3 px-3 mb-2 ">
                            <div>
                                <x-form-label>
                                    <span>Product Categories *</span>
                                    <x-form-select name="category_id">
                                        <option value="">-Select-</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </x-form-select>
                                </x-form-label>
                                <x-jet-input-error for="category_id" />
                            </div>
                        </div>

                        <div class="w-full md:w-2/3 px-3 mb-3">

                            <div class="w-full mb-2 px-3">
                                <x-form-label>
                                    <span>Product image URL </span>
                                    <x-form-input name="img" value="{{ old('img') }}" />
                                </x-form-label>
                                <x-jet-input-error for="img" />
                            </div>
                        </div>

                        <div class="w-full md:w-1/3 px-3 mb-3 ">
                            <div>
                                <x-form-label>
                                    <span>Title in English *</span>
                                    <x-form-input name="name" value="{{ old('name') }}" />
                                </x-form-label>
                                <x-jet-input-error for="name" />
                            </div>
                        </div>

                        <div class="w-full md:w-1/3 px-3 mb-3 ">
                            <div>
                                <x-form-label>
                                    <span>Title in Sinhala</span>
                                    <x-form-input name="name_si" value="{{ old('name_si') }}" />
                                </x-form-label>
                                <x-jet-input-error for="name_si" />
                            </div>
                        </div>

                        <div class="w-full md:w-1/3 px-3 mb-3 ">
                            <div>
                                <x-form-label>
                                    <span>Title in Tamil</span>
                                    <x-form-input name="name_ta" value="{{ old('name_ta') }}" />
                                </x-form-label>
                                <x-jet-input-error for="name_ta" />
                            </div>
                        </div>

                        <div class="w-full mb-3 px-3">
                            <div>
                                <x-form-label>
                                    <span>Keywords</span>
                                    <x-form-textarea name="keywords">{{ old('keywords') }}</x-form-textarea>
                                </x-form-label>
                                <x-jet-input-error for="keywords" />
                            </div>
                        </div>

                        <div class=" flex w-full justify-end mt-2">
                            <x-btn-primary>Create</x-btn-primary>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
