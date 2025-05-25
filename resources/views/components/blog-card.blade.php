@props(['blog'])

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        <img src="{{ $blog->featured_image }}" alt="{{ $blog->title }}" class="w-full h-64 object-cover">
        <span class="absolute bottom-2 left-2 bg-white text-black text-xs font-bold px-2 py-1 uppercase">
            {{ $blog->category ?? 'Style' }}
        </span>
    </div>
    <div class="p-4">
        <h2 class="text-lg font-bold mb-2">{{ $blog->title }}</h2>
        <div class="text-sm text-gray-500 mb-4">
            By {{ $blog->user->name ?? 'Admin' }} &nbsp;|&nbsp;
            {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }} &nbsp;|&nbsp;
            <span class="inline-block">{{ $blog->comments->count() ?? 0 }}</span>
        </div>
        <p class="text-gray-700 text-sm leading-relaxed mb-4 line-clamp-4">
            {{ Str::limit(strip_tags($blog->content), 300) }} [...]
        </p>
        <div class="flex justify-between items-center text-sm text-gray-500">
            <a href="{{ route('blog.show', $blog->id) }}" class="text-black font-semibold underline">Continue
                Reading</a>
            <span>{{ $blog->duration }} min read</span>
        </div>
    </div>
</div>
