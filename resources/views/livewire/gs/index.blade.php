<div>
    <div class="px-54 py-10">
        <div class=" container mx-auto px-2">

            <div class="md:flex flex-wrap justify-between items-baseline mb-3">
                <div class="flex">
                    <h3 class=" font-bold text-gray-800 text-2xl flex-100 inline-flex items-center">GS Aria </h3>
                    <livewire:floating-action-button link="/gss/create">
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
                                        <th> ASC Division </th>
                                        <th>GS In English </th>
                                        <th>GS In Sinhala </th>
                                        <th>GS In Tamil</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($gss as $gs)

                                    <tr>
                                        <td class="font-medium">{{ $gs->id }}</td>
                                        <td class="font-medium"> {{ $gs->asc->name }} </td>
                                        <td class="font-medium"> {{ $gs->name }} </td>
                                        <td> {{ $gs->name_si }} </td>
                                        <td> {{ $gs->name_ta }} </td>
                                        <td>
                                            {{-- class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium ">
                                            <a href="{{ route('gss.edit', $gs) }}"
                                            class="px-2 py-1 border-yellow-500 border text-yellow-500 rounded transition
                                            duration-300 hover:bg-yellow-300 hover:text-white
                                            focus:outline-none">Edit</a> --}}
                                            <div class="whitespace-no-wrap flex items-center">
                                                <x-btn-edit href="{{ route('gss.edit',$gs) }}" />
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
                {!! $gss->onEachSide(0)->links() !!}
            </div>
        </div>
    </div>
</div>
