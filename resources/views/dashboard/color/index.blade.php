<x-layouts.app :title="__('colors')">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Colors List</h1>
            <a href="{{ route('dashboard.color.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + New Color
            </a>
        </div>

        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-500">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>
                     <th class="px-4 py-2">Hex</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($colors as $color)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2">{{ $color->id }}</td>
                        <td class="px-4 py-2">{{ $color->name }}</td>
                         <td class="px-4 py-2">{{ $color->hex }}</td>
                         <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('dashboard.color.edit', $color) }}" class="text-blue-600 hover:underline">Edit</a>

                            <form action="{{ route('dashboard.color.destroy', $color) }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this color?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-gray-500">No colors found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $colors->links() }}
        </div>
    </div>
</x-layouts.app>
