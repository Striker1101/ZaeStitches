<x-layouts.app :title="__('Medias')">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Medias List</h1>
            {{-- <a href="{{ route('dashboard.media.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + New Media
            </a> --}}
        </div>

        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-500">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">URL</th>
                    <th class="px-4 py-2">mime_type</th>
                    <th class="px-4 py-2">size</th>
                    <th class="px-4 py-2">extension </th>
                    <th class="px-4 py-2">Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($medias as $media)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2">{{ $media->id }}</td>
                        <td class="px-4 py-2">{{ $media->name }}</td>
                        <td class="px-4 py-2">
                            <img src="{{ asset($media->url) }}" alt="{{ $media->name }}">
                        </td>
                        <td class="px-4 py-2">{{ $media->mime_type }}</td>
                        <td class="px-4 py-2">{{ $media->size }}</td>
                        <td class="px-4 py-2">{{ $media->extension }}</td>
                        <td class="px-4 py-2">{{ $media->type }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('dashboard.media.edit', $media) }}"
                                class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('dashboard.media.destroy', $media) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this media?');">
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
            {{ $medias->links() }}
        </div>
    </div>
</x-layouts.app>
