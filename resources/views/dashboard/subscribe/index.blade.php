<x-layouts.app :title="__('subscribes')">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Subscribes List</h1>
            {{-- <a href="{{ route('dashboard.subscribe.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + New Size
            </a> --}}
        </div>

        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-500">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($subscribes as $subscribe)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2">{{ $subscribe->id }}</td>
                        <td class="px-4 py-2">{{ $subscribe->email }}</td>
                         <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('dashboard.subscribe.edit', $subscribe) }}" class="text-blue-600 hover:underline">Edit</a>

                            <form action="{{ route('dashboard.subscribe.destroy', $subscribe) }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this Size?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-gray-500">No subscribes found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $subscribes->links() }}
        </div>
    </div>
</x-layouts.app>
