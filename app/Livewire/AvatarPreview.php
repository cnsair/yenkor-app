<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class AvatarPreview extends Component
{
    use WithFileUploads;

    public $photo;
    public $photoPreview;

    public function updatedPhoto()
    {
        // Validate that the file is an image, but don't upload it
        $this->validate([
            'photo' => 'image|max:5120', // 5MB Max
        ]);

        // Create a temporary URL for preview
        $this->photoPreview = $this->photo->temporaryUrl();
    }

    public function render()
    {
        return view('driver.edit-profile');
    }
}


