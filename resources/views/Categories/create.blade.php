<x-app-layout>


    <div class="py-10">
        <div class=" max-w-4xl mx-auto ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class="font-bold text-gray-800 text-3xl flex-100 mb-4 pb-2 border-b border-gray-200">New Categories
                </h3>
                <form method="POST" action="/categories">
                    @csrf

                    <div class="mb-3">
                        <x-form-label>
                            <span>Category in English *</span>
                            <x-form-input name="name" value="{{ old('name') }}" />
                        </x-form-label>
                        <x-jet-input-error for="name " />
                    </div>

                    <div class="mb-3">
                        <x-form-label>
                            <span>Category in Sinhala </span>
                            <x-form-input name="name_si" value="{{ old('name_si') }}" />
                        </x-form-label>
                        <x-jet-input-error for="name_si " />
                    </div>

                    <div class="mb-3">
                        <x-form-label>
                            <span>Category in Tamil </span>
                            <x-form-input name="name_ta" value="{{ old('name_ta') }}" />
                        </x-form-label>
                        <x-jet-input-error for="name_ta " />
                    </div>

                    <div class="mb-3">
                        <x-form-label>
                            <span>Category image URL </span>
                            <x-form-input name="img" value="{{ old('img') }}" />
                        </x-form-label>
                        <x-jet-input-error for="img " />
                    </div>

                    <div class=" flex w-full justify-end mt-2">
                        <x-btn-primary>Submit</x-btn-primary>
                    </div>
                </form>


            </div>
        </div>
    </div>
</x-app-layout>
