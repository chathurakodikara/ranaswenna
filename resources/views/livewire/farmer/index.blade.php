<div>
    <div class="px-54 py-10">
        <div class=" container mx-auto px-2">

 
                <div class="md:flex flex-wrap justify-between items-baseline mb-3">
                    <div class="flex">
                        <h3 class=" font-bold text-gray-800 text-2xl flex-100 inline-flex items-center">Registerd Farmers List</h3>
                        <livewire:floating-action-button link="/farmers/create">
                    </div>
                    <livewire:search-index-input>
                </div>



            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="py-2 align-middle inline-block min-w-full ">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 simple-table">


                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> NIC </th>
                                        <th> Name </th>
                                        <th> Agrarian Divition </th>
                                        <th> Telephone *</th>
                                        <th> Telephone 2 </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($farmers as $farmer)

                                    <tr>
                                        <td class="font-medium">{{ $farmer->id }}</td>
                                        <td> {{ $farmer->nic }} </td>
                                        <td> {{ $farmer->name }} </td>
                                        <td> {{ $farmer->asc_id }} - {{ $farmer->gs_id }} </td>
                                        <td> {{ $farmer->telephone_1 }} </td>
                                        <td> {{ $farmer->telephone_2 }} </td>

                                        <td>

                                            <div class="whitespace-no-wrap flex items-center">
                                                <x-btn-edit wire:click="editFarmer{{ $farmer->id }}" />
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>


                        </div>
                    </div>

                </div>
            </div>
            <div class="mt-4 ">

                {!! $farmers->onEachSide(0)->links() !!}
            </div>

            {{-- <div class=" flex sm:items-center justify-between mt-4 work-sans">
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

            </div> --}}
        </div>
    </div>
    {{-- <x-jet-dialog-modal wire:model="neweditfarmer" footerCss="hidden" >
        <x-slot name="title"> Update Farmer </x-slot>
        <x-slot name="content">
            {{ $data }}
            <livewire:farmer.edit-farmer>

        </x-slot>
        <x-slot name="footer"> </x-slot>
    </x-jet-dialog-modal> --}}
</div>
