<x-layouts.app :title="__('Orders')">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Orders List</h1>
            {{-- <a href="{{ route('dashboard.order.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + New Order
            </a> --}}
        </div>

          <div class="overflow-x-auto">
        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-500">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Payment Type</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Total Amount</th>
                    <th class="px-4 py-2">Currency</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2">{{ $order->order_number }}</td>
                        <td class="px-4 py-2">{{ $order->payment_method }}</td>
                        <td class="px-4 py-2">{{ $order->status }}</td>
                        <td class="px-4 py-2">{{ $order->total_amount }}</td>
                        <td class="px-4 py-2">{{ $order->country_code }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('dashboard.order.show', $order) }}"
                                class="text-blue-600 hover:underline">View</a>
                            {{-- <form action="{{ route('dashboard.order.destroy', $order) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this order?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-gray-500">No orders found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
          </div>

        <div class="mt-4">
            {{ $orders->links() }}
        </div>
    </div>
</x-layouts.app>
