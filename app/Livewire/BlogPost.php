<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post; // assume you have a Post model

class BlogPost extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = Post::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.blog-post');
    }
}

