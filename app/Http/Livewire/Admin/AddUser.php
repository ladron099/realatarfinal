<?php

namespace App\Http\Livewire\Admin;

use App\Models\Permission;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddUser extends Component
{
    use WithFileUploads;
    public $photo;
    public $name;
    public $email;
    public $twitter;
    public $facebook;
    public $youtube;
    public $birthdate;
    public $utype;



    public function render()
    {
        $permissions=Permission::all();
        $title = "Add User";
        return view('livewire.admin.add-user',compact('permissions'))->layout('layouts.master', compact('title'));
    }


}
