<x-app-layout>


    <div class="py-10">
        <div class=" max-w-4xl mx-auto ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class="font-bold text-gray-800 text-3xl flex-100 mb-4 pb-2 border-b border-gray-200">Update GS Aria
                </h3>

                <form action="{{ route('gss.update',$gs) }}" method="POST">
                    @csrf
                    @method('put')

                    <div class=" grid sm:grid-cols-2 grid:cols-1 gap-x-6 gap-y-3 mb-3 ">
                        <div>
                            <x-form-label>
                                <span>ASC Divisions *</span>
                                <x-form-select name="asc_id">
                                    <option value="">-Select-</option>
                                    @foreach($ascs as $asc)
                                    <option value="{{ $asc->id }}" {{ $asc->id == $gs->asc_id ? 'selected' : '' }}>
                                        {{ $asc->name }}</option>
                                    @endforeach
                                </x-form-select>
                            </x-form-label>
                            <x-jet-input-error for="asc_id" />
                        </div>

                        <div>
                            <x-form-label>
                                <span>Gs in English *</span>
                                <x-form-input name="name " value="{{ $gs->name }}" />
                            </x-form-label>
                            <x-jet-input-error for="name" />
                        </div>
                    </div>

                    <div class=" grid sm:grid-cols-2 grid:cols-1 gap-x-6 gap-y-3 mb-3 ">
                        <div>
                            <x-form-label>
                                <span>Gs in Sinhala</span>
                                <x-form-input name="name_si" value="{{ $gs->name_si }}" />
                            </x-form-label>
                            <x-jet-input-error for="name_si" />
                        </div>

                        <div>
                            <x-form-label>
                                <span>Gs in Tamil </span>
                                <x-form-input name="name_ta " value="{{ $gs->name_ta }}" />
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
