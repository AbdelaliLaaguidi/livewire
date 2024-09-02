<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactUsForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class ContactUs extends Component
{
    use WithFileUploads;

    public ContactUsForm $form;

    public function storeQuery() {
        $this->form->validate();

        if ($this->form->images) {
            foreach ($this->form->images as $image) {
                $image->store('images', 'public');
            }
        }

        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.contact-us')->title('Contact Us');
    }
}
