<x-layouts.app :title="__('comments')">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Comments List</h1>
        </div>

        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-500">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>
                     <th class="px-4 py-2">Commentable Type</th>
                       <th class="px-4 py-2">Commentable ID</th>
                     <th class="px-4 py-2">Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($comments as $comment)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2">{{ $comment->id }}</td>
                            <td class="px-4 py-2">{{ $comment->user->name ?? "Anonymous"}}</td>
                        <td class="px-4 py-2">{{ $comment->commentable_type }}</td>
                         <td class="px-4 py-2">{{ $comment->commentable_id }}</td>
                         <td class="px-4 py-2">{{ $comment->created_at }}</td>
                         <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('dashboard.comment.edit', $comment) }}" class="text-blue-600 hover:underline">Edit</a>

                            <form action="{{ route('dashboard.comment.destroy', $comment) }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this comment?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-gray-500">No comments found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $comments->links() }}
        </div>
    </div>
</x-layouts.app>
