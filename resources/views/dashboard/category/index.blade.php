<x-layouts.app :title="__('Categories')">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Category List</h1>
            <a href="{{ route('dashboard.category.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + New Category
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
                    @forelse($categories as $category)
                        <tr class="border-t border-gray-200">
                            <td class="px-4 py-2">{{ $category->id }}</td>
                            <td class="px-4 py-2">{{ $category->name }}</td>
                            <td class="px-4 py-2">{{ $category->slug }}</td>
                            <td class="px-4 py-2">{{ $category->description }}</td>
                            <td class="px-4 py-2">{{ $category->type }}</td>
                            <td class="px-4 py-2 flex gap-2">
                                <a href="{{ route('dashboard.category.edit', $category) }}"
                                    class="text-blue-600 hover:underline">Edit</a>

                                <form action="{{ route('dashboard.category.destroy', $category) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this category?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-4 text-gray-500">No categories found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $categories->links() }}
        </div>
    </div>
</x-layouts.app>
