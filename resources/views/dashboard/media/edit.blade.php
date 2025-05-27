@php use Illuminate\Support\Str; @endphp

<x-layouts.app :title="__('Edit Media')">
    <div class="container mx-auto p-4 max-w-3xl text-gray-600">
        <h1 class="text-2xl font-bold mb-6">Edit Media: {{ $media->name }}</h1>

        {{-- Current Preview --}}
        <div class="mb-6">
            @if (Str::startsWith($media->mime_type, 'image/'))
                <img id="current-preview" src="{{ asset($media->url) }}" alt="{{ $media->name }}"
                    class="w-full rounded shadow mb-4" />
            @elseif(Str::startsWith($media->mime_type, 'video/'))
                <video id="current-preview" controls class="w-full rounded shadow mb-4">
                    <source src="{{ asset($media->url) }}" type="{{ $media->mime_type }}">
                </video>
            @else
                <p class="italic text-sm">No preview available for this file type.</p>
            @endif
        </div>

        <form action="{{ route('dashboard.media.update', $media) }}" method="POST" enctype="multipart/form-data"
            class="space-y-4">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <div>
                <label class="block mb-1 font-semibold">Name</label>
                <input type="text" name="name" value="{{ old('name', $media->name) }}" required
                    class="w-full border px-3 py-2 rounded" />
                @error('name')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror
            </div>

            {{-- Type --}}
            <div>
                <label class="block mb-1 font-semibold">Type</label>
                <select name="type" required class="w-full border px-3 py-2 rounded">
                    @foreach (['blog', 'product', 'both'] as $type)
                        <option value="{{ $type }}" {{ old('type', $media->type) === $type ? 'selected' : '' }}>
                            {{ ucfirst($type) }}
                        </option>
                    @endforeach
                </select>
                @error('type')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror
            </div>

            {{-- Replace File --}}
            <div>
                <label class="block mb-1 font-semibold">Replace File</label>
                <input type="file" name="file" id="new-file" accept="image/*,video/*"
                    class="w-full border px-3 py-2 rounded" />
                <small class="text-gray-500">Upload a new image or video to replace the existing one.</small>
                @error('file')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                @enderror
            </div>

            {{-- New File Preview --}}
            <div id="new-preview-container" class="mb-4" style="display:none;">
                <p class="font-semibold mb-2">New Preview:</p>
                <div id="new-preview"></div>
            </div>

            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">
                Update Media
            </button>
        </form>

        {{-- Delete button --}}
        <form action="{{ route('dashboard.media.destroy', $media) }}" method="POST"
            onsubmit="return confirm('Confirm delete?')" class="mt-6">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">
                Delete Media
            </button>
        </form>
    </div>

    {{-- JS for live preview of newly selected file --}}
    <script>
        document.getElementById('new-file').addEventListener('change', function(e) {
            const container = document.getElementById('new-preview-container');
            const preview = document.getElementById('new-preview');
            preview.innerHTML = '';
            const file = e.target.files[0];
            if (!file) {
                container.style.display = 'none';
                return;
            }
            container.style.display = 'block';
            const url = URL.createObjectURL(file);

            if (file.type.startsWith('image/')) {
                const img = document.createElement('img');
                img.src = url;
                img.className = 'w-full rounded shadow';
                preview.appendChild(img);
            } else if (file.type.startsWith('video/')) {
                const video = document.createElement('video');
                video.src = url;
                video.controls = true;
                video.className = 'w-full rounded shadow';
                preview.appendChild(video);
            } else {
                preview.textContent = 'No preview available for this file type.';
            }
        });
    </script>
</x-layouts.app>
