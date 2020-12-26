<div>
    <div class="px-54 py-10">
        <div class=" container mx-auto px-2">

            <div class="md:flex flex-wrap justify-between items-baseline mb-3">
                <div class="flex">
                    <h3 class=" font-bold text-gray-800 text-2xl flex-100 inline-flex items-center">Categories' List
                    </h3>
                    <livewire:floating-action-button link="/categories/create">
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
                                        <th> Category </th>
                                        <th> Category </th>
                                        <th> Category </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($categories as $category)

                                    <tr>
                                        <td class="font-medium">{{ $category->id }}</td>
                                        <td> {{ $category->name }} </td>
                                        <td> {{ $category->name_si }} </td>
                                        <td> {{ $category->name_ta }} </td>
                                        <td>
                                            <div class="whitespace-no-wrap flex items-center">
                                                <x-btn-edit href="{{ route('categories.edit',$category) }}" />
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
                {!! $categories->onEachSide(0)->links() !!}
            </div>
        </div>
    </div>
</div>
