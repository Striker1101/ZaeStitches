<x-layouts.app :title="__('Currencies')">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Currencies List</h1>
            <a href="{{ route('dashboard.currency.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + New Currency
            </a>
        </div>

        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-500">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>
                     <th class="px-4 py-2">Code</th>
                     <th class="px-4 py-2">Symbol</th>
                      <th class="px-4 py-2">Rate To Naira</th>
                       <th class="px-4 py-2">Country Code</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($currencies as $currency)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2">{{ $currency->id }}</td>
                        <td class="px-4 py-2">{{ $currency->name }}</td>
                         <td class="px-4 py-2">{{ $currency->code }}</td>
                        <td class="px-4 py-2">{{ $currency->symbol }}</td>
                        <td class="px-4 py-2">{{ $currency->rate_to_naira }}</td>
                        <td class="px-4 py-2">{{ $currency->country_code }}</td>
                         <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('dashboard.currency.edit', $currency) }}" class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('dashboard.currency.destroy', $currency) }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this currency?');">
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
            {{ $currencies->links() }}
        </div>
    </div>
</x-layouts.app>
