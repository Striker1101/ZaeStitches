<x-layouts.app :title="__('Blogs')">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Blog List</h1>
            <a href="{{ route('dashboard.blog.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + New Blog
            </a>
        </div>

        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-500">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Slug</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Duration</th>
                    <th class="px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blogs as $blog)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $blog->title }}</td>
                        <td class="px-4 py-2">{{ $blog->slug }}</td>
                        <td class="px-4 py-2">{{ $blog->description }}</td>
                        <td class="px-4 py-2">{{ $blog->duration }}</td>
                        <td class="px-4 py-2 capitalize">{{ $blog->status }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('dashboard.blog.edit', $blog) }}"
                                class="text-blue-600 hover:underline">Edit</a>

                            <form action="{{ route('dashboard.blog.destroy', $blog) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-gray-500">No blogs found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $blogs->links() }}
        </div>
    </div>
</x-layouts.app>
