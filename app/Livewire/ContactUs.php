<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactUsForm;
use Livewire\Component;

class ContactUs extends Component
{
    public ContactUsForm $form;

    public function storeQuery() {
        $this->form->validate();
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.contact-us')->title('Contact Us');
    }
}
