<x-layouts.app :title="__('Edit Comment')">
    <div class="container mx-auto p-4 max-w-3xl text-gray-600">
        <h1 class="text-2xl font-bold mb-6">Edit Comment: {{ $comment->name }}</h1>

        <form action="{{ route('dashboard.comment.update', $comment) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <label class="block mb-2">Content

             <textarea name="content" id="content" rows="4" class="w-full mb-4 border px-3 py-2 rounded">{{ old('content', $comment->content) }}</textarea>
            </label>
            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Update Comment</button>
        </form>

        {{-- Delete button --}}
        <form action="{{ route('dashboard.comment.destroy', $comment) }}" method="POST" onsubmit="return confirm('Confirm delete?')" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Delete Comment</button>
        </form>
    </div>
</x-layouts.app>
