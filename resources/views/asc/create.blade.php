<x-app-layout>


    <div class="py-10">
        <div class=" max-w-4xl mx-auto ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class="font-bold text-gray-800 text-3xl flex-100 mb-4 pb-2 border-b border-gray-200">New ASC
                </h3>
                <form method="POST" action="/ascs">
                    @csrf

                    <div class=" grid sm:grid-cols-2 grid:cols-1 gap-x-6 gap-y-3 mb-3 ">
                        <div>
                            <x-form-label>
                                <span>District *</span>
                                <x-form-input name="district" value="{{ old('district') }}" />
                            </x-form-label>
                            <x-jet-input-error for="district" />
                        </div>

                        <div>
                            <x-form-label>
                                <span>ASC in English *</span>
                                <x-form-input name="name " value="{{ old('name ') }}" />
                            </x-form-label>
                            <x-jet-input-error for="name" />
                        </div>
                    </div>

                    <div class=" grid sm:grid-cols-2 grid:cols-1 gap-x-6 gap-y-3 mb-3 ">
                        <div>
                            <x-form-label>
                                <span>ASC in Sinhala</span>
                                <x-form-input name="name_si" value="{{ old('name_si') }}" />
                            </x-form-label>
                            <x-jet-input-error for="name_si" />
                        </div>

                        <div>
                            <x-form-label>
                                <span>ASC in Tamil </span>
                                <x-form-input name="name_ta " value="{{ old('name_ta') }}" />
                            </x-form-label>
                            <x-jet-input-error for="name_ta" />
                        </div>
                    </div>

                    <div class=" flex w-full justify-end mt-2">
                        <x-btn-primary>Submit</x-btn-primary>
                    </div>
                </form>


            </div>
        </div>
    </div>
</x-app-layout>
