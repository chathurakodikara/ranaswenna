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
                                        <td> {{ $farmer->asc->name }} - {{ $farmer->gs->name }} </td>
                                        <td> {{ $farmer->telephone_1 }} </td>
                                        <td> {{ $farmer->telephone_2 }} </td>

                                        <td>

                                            <div class="whitespace-no-wrap flex items-center">
                                                <x-btn-edit href="{{ route('farmers.edit',$farmer) }}" />
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

        </div>
    </div>
</div>
