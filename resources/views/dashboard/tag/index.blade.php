<x-layouts.app :title="__('Tags')">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Tags List</h1>
            <a href="{{ route('dashboard.tag.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + New Tag
            </a>
        </div>

        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-500">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>
                     <th class="px-4 py-2">Slug</th>
                     <th class="px-4 py-2">Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tags as $tag)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2">{{ $tag->id }}</td>
                        <td class="px-4 py-2">{{ $tag->name }}</td>
                         <td class="px-4 py-2">{{ $tag->slug }}</td>
                        <td class="px-4 py-2">{{ $tag->type }}</td>
                         <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('dashboard.tag.edit', $tag) }}" class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('dashboard.tag.destroy', $tag) }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this tag?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-gray-500">No tags found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $tags->links() }}
        </div>
    </div>
</x-layouts.app>
