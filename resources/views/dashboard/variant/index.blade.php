<x-layouts.app :title="__('Variants')">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Variant List</h1>
            <a href="{{ route('dashboard.variant.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + New Variant
            </a>
        </div>

        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-500">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Variant Name</th>
                    <th class="px-4 py-2">Size</th>
                    <th class="px-4 py-2">Color</th>
                    <th class="px-4 py-2">Stock</th>
                      <th class="px-4 py-2">Price</th>
                </tr>
            </thead>
            <tbody>
                @forelse($variants as $variant)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $variant->product->title ?? "" }}</td>
                        <td class="px-4 py-2">{{ $variant->size->name ?? "" }}</td>
                        <td class="px-4 py-2">{{ $variant->color->name ?? ""}}</td>
                        <td class="px-4 py-2 capitalize">{{ $variant->stock }}</td>
                        <td class="px-4 py-2 capitalize">{{ $variant->price }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('dashboard.variant.edit', $variant) }}"
                                class="text-blue-600 hover:underline">Edit</a>

                            <form action="{{ route('dashboard.variant.destroy', $variant) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this variant?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-gray-500">No variants found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $variants->links() }}
        </div>
    </div>
</x-layouts.app>
