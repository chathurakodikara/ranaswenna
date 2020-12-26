<div>
    <div class="px-54 py-10">
        <div class=" container mx-auto px-2">

            <div class="md:flex flex-wrap justify-between items-baseline mb-3">
                <div class="flex">
                    <h3 class=" font-bold text-gray-800 text-2xl flex-100 inline-flex items-center">Product Title
                    </h3>
                    <livewire:floating-action-button link="/items/create">
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
                                        <th> Image </th>
                                        <th> Title English </th>
                                        <th> Title Sinhala </th>
                                        <th>Title Tamil</th>
                                        <th>Category</th>
                                        <th>Keywords</th>
                                        <th>---</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($items as $item)

                                    <tr>
                                        <td class="font-medium">{{ $item->id }}</td>
                                        <td> {{ $item->img }} </td>
                                        <td> {{ $item->name }} </td>
                                        <td> {{ $item->name_si }} </td>
                                        <td> {{ $item->name_ta }} </td>
                                        <td> {{ $item->category->name }} </td>
                                        <td> {{ $item->keywords }} </td>
                                        <td>
                                            <div class="whitespace-no-wrap flex items-center">
                                                <x-btn-edit href="{{ route('items.edit',$item) }}" />
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
                {!! $items->onEachSide(0)->links() !!}
            </div>
        </div>
    </div>
</div>
