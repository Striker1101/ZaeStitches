<?php
namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogPost extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = Blog::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.blog-post');
    }
}

