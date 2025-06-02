<x-layouts.app :title="__('Brands')">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Brand List</h1>
            <a href="{{ route('dashboard.brand.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + New Brand
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border border-gray-300">
                <thead class="bg-gray-500">
                    <tr>
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Slug</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($brands as $brand)
                        <tr class="border-t border-gray-200">
                            <td class="px-4 py-2">{{ $brand->id }}</td>
                            <td class="px-4 py-2">{{ $brand->name }}</td>
                            <td class="px-4 py-2">{{ $brand->slug }}</td>
                            <td class="px-4 py-2">{{ $brand->description }}</td>
                            <td class="px-4 py-2">{{ $brand->type }}</td>
                            <td class="px-4 py-2 flex gap-2">
                                <a href="{{ route('dashboard.brand.edit', $brand) }}"
                                    class="text-blue-600 hover:underline">Edit</a>

                                <form action="{{ route('dashboard.brand.destroy', $brand) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this brand?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-4 text-gray-500">No brands found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $brands->links() }}
        </div>
    </div>
</x-layouts.app>
