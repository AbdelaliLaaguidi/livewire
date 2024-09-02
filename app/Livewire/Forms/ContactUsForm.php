<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactUsForm extends Form
{
    #[Rule('required|min:3|max:50')]
    public $name;

    #[Rule('required|email|min:5|max:50')]
    public $email;

    #[Rule('required|min:3|max:1000')]
    public $message;

    #[Rule('required')]
    #[Rule(['images.*' => 'required|image|max:2048'])]
    public $images;
}
