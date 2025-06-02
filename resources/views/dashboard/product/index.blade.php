<x-layouts.app :title="__('Products')">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Product List</h1>
            <a href="{{ route('dashboard.product.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + New Product
            </a>
        </div>
  <div class="overflow-x-auto">
        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-500">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Slug</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Discount</th>
                    <th class="px-4 py-2">Rating</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $product->title }}</td>
                        <td class="px-4 py-2">{{ $product->slug }}</td>
                        <td class="px-4 py-2">₦{{ number_format($product->price, 2) }}</td>
                        <td class="px-4 py-2">₦{{ number_format($product->discount_price, 2) }}</td>
                        <td class="px-4 py-2">{{ $product->rating }}</td>
                        <td class="px-4 py-2 capitalize">{{ $product->status }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('dashboard.product.edit', $product) }}" class="text-blue-600 hover:underline">Edit</a>

                            <form action="{{ route('dashboard.product.destroy', $product) }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-gray-500">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
</div>

        <div class="mt-4">
            {{ $products->links() }}
        </div>
    </div>
</x-layouts.app>
