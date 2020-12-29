<div>
    <div class="px-54 py-10">
        <div class=" container mx-auto px-2">

            <div class="md:flex flex-wrap justify-between items-baseline mb-3">
                <div class="flex">
                    <h3 class=" font-bold text-gray-800 text-2xl flex-100 inline-flex items-center">Purchaser List
                    </h3>
                    <livewire:floating-action-button link="/buyers/create">
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
                                        <th> Business </th>
                                        <th>Re.No </th>
                                        <th>Type</th>
                                        <th>Telephone</th>
                                        <th>Contacted Person</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($buyers as $buyer)

                                    <tr>
                                        <td class="font-medium">{{ $buyer->id }}</td>
                                        <td class="font-medium"> {{ $buyer->business }} </td>
                                        <td> {{ $buyer->registration_no }} </td>
                                        <td> {{ $buyer->type }} </td>
                                        <td> {{ $buyer->telephone }} </td>
                                        <td class="font-medium"> {{ $buyer->contacted_person }} </td>
                                        <td> {{ $buyer->mobile_1 }} </td>
                                        <td> {{ $buyer->email }} </td>

                                        <td>
                                            <div class="whitespace-no-wrap flex items-center">
                                                <x-btn-edit href="{{ route('buyers.edit',$buyer) }}" />
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
                {!! $buyers->onEachSide(0)->links() !!}
            </div>
        </div>
    </div>
</div>
