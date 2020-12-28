<div>
    <div class="px-54 py-10">
        <div class=" container mx-auto px-2">

            <div class="md:flex flex-wrap justify-between items-baseline mb-3">
                <div class="flex">
                    <h3 class=" font-bold text-gray-800 text-2xl flex-100 inline-flex items-center">Post of Products
                    </h3>
                    <livewire:floating-action-button link="/myshop/create">
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
                                        <th>
                                            #</th>
                                        <th>
                                            Item Name</th>
                                        <th>
                                            Farmer</th>
                                        <th>
                                            Qty</th>
                                        <th>
                                            Unit Price</th>
                                        <th>
                                            Published</th>
                                        <th>
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach($products as $product)
                                    <tr>

                                        <td class="font-medium"> {{$product->id}}</td>
                                        <td>
                                            {{$product->items_id}}
                                        </td>
                                        <td>
                                            {{$product->farmer->name}}</td>
                                        <td>
                                            {{$product->qty}}</td>
                                        <td>
                                            {{$product->unit_price}}</td>
                                        </td>
                                        <td>
                                            {{$product->created_at}}</td>
                                        <td>

                                            <div class="whitespace-no-wrap flex items-center">
                                                <x-btn-edit href="{{ route('myshop.edit',$product) }}" />
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
                {!! $products->onEachSide(0)->links() !!}
            </div>
        </div>
    </div>
</div>
