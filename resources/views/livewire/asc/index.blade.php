<div>
    <div class="px-54 py-10">
        <div class=" container mx-auto px-2">

            <div class="md:flex flex-wrap justify-between items-baseline mb-3">
                <div class="flex">
                    <h3 class=" font-bold text-gray-800 text-2xl flex-100 inline-flex items-center">ASC Divisions
                    </h3>
                    <livewire:floating-action-button link="/ascs/create">
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
                                        <th> Distric </th>
                                        <th>ASC In English </th>
                                        <th>ASC In Sinhala </th>
                                        <th>ASC In Tamil</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($ascs as $asc)

                                    <tr>
                                        <td class="font-medium">{{ $asc->id }}</td>
                                        <td class="font-medium"> {{ $asc->district }} </td>
                                        <td class="font-medium"> {{ $asc->name }} </td>
                                        <td> {{ $asc->name_si }} </td>
                                        <td> {{ $asc->name_ta }} </td>
                                        <td>

                                                <div class="whitespace-no-wrap flex items-center">
                                                    <x-btn-edit href="{{ route('ascs.edit',$asc) }}" />
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
                {!! $ascs->onEachSide(0)->links() !!}
            </div>
        </div>
    </div>
</div>
