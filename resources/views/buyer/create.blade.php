<x-app-layout>
    <div class="py-10">
        <div class=" max-w-4xl mx-auto ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class="font-bold text-gray-800 text-3xl flex-100 mb-4 pb-2 border-b border-gray-200">New Purchaser
                </h3>

                <form method="POST" action="/buyers">
                    @csrf
                    <div class="font-bold text-sm mb-3">
                        <h2>Business Information</h2>
                    </div>
                    <div class="mb-3">
                        <x-form-label>
                            <span>Business Name *</span>
                            <x-form-input name="business" value="{{ old('business') }}" />
                        </x-form-label>
                        <x-jet-input-error for="business" />
                    </div>
                    <div class=" grid sm:grid-cols-2 grid:cols-1 gap-x-6 gap-y-3 mb-3 ">
                        <div>
                            <x-form-label>
                                <span>Registration No </span>
                                <x-form-input name="registration_no" value="{{ old('registration_no') }}" />
                            </x-form-label>
                            <x-jet-input-error for="registration_no" />
                        </div>
                        <div>
                            <x-form-label>
                                <span>Type *</span>
                                <x-form-select name="type">
                                    <option value="">-select-</option>
                                    <option value="pvt">PVT</option>
                                    <option value="ltd">LTD</option>
                                </x-form-select>
                                <x-jet-input-error for="type" />
                            </x-form-label>
                        </div>

                    </div>

                    <div class=" grid sm:grid-cols-2 grid:cols-1 gap-x-6 gap-y-3 mb-3 ">
                        <div>
                            <x-form-label>
                                <span> Telephone *</span>
                                <x-form-input name="telephone" value="{{ old('telephone') }}" />
                            </x-form-label>
                            <x-jet-input-error for="telephone" />
                        </div>
                        <div>
                            <x-form-label>
                                <span>Fax </span>
                                <x-form-input name="fax" value="{{ old('fax') }}" />
                            </x-form-label>
                            <x-jet-input-error for="fax" />
                        </div>
                    </div>

                    <div class="mb-3">
                        <x-form-label>
                            <span>Description</span>
                            <x-form-textarea name="description">{{ old('description') }}</x-form-textarea>
                        </x-form-label>
                        <x-jet-input-error for="description" />
                    </div>

                    <div class="mb-3">
                        <x-form-label>
                            <span>Address *</span>
                            <x-form-textarea name="address">{{ old('address') }}</x-form-textarea>
                        </x-form-label>
                        <x-jet-input-error for="address" />
                    </div>
                    <div class="font-bold text-sm mb-3">
                        <h2>Contacted Person Information</h2>
                    </div>

                    <div class="grid sm:grid-cols-4 grid-cols-1 gap-x-6 gap-y-3 mb-3">
                        <x-form-label>
                            <span>Title *</span>
                            <x-form-select name="title">
                                <option value="mr">Mr</option>
                                <option value="mrs">Mrs</option>
                                <option value="miss">Miss</option>
                            </x-form-select>
                            <x-jet-input-error for="title" />
                        </x-form-label>

                        <x-form-label class=" col-span-3">
                            <span>Contacted Person *</span>
                            <x-form-input name="contacted_person" value="{{ old('contacted_person') }}" />
                        </x-form-label>
                        <x-jet-input-error for="contacted_person" />
                    </div>

                    <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-2 mb-3">
                        <div>
                            <x-form-label>
                                <span>Mobile *</span>
                                <x-form-input name="mobile_1" value="{{ old('mobile_1') }}" />
                            </x-form-label>
                            <x-jet-input-error for="mobile_1" />
                        </div>
                        <div>
                            <x-form-label>
                                <span>Mobile</span>
                                <x-form-input name="mobile_2" value="{{ old('mobile_2') }}" />
                            </x-form-label>
                            <x-jet-input-error for="mobile_2" />
                        </div>
                        <div>
                            <x-form-label>
                                <span>Email</span>
                                <x-form-input name="email" value="{{ old('email') }}" />
                            </x-form-label>
                            <x-jet-input-error for="email" />
                        </div>
                    </div>

                    <div class=" flex w-full justify-end mt-6">
                        <x-btn-primary>Create</x-btn-primary>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
