<?php

namespace App\Http\Livewire\School;

use App\Http\Requests\Connict\StoreSchoolRequest;
use App\Http\Traits\Utils;
use App\Models\School;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateSchool extends Component
{
    use WithFileUploads, Utils;

    public $name;
    public $address;
    public $contact_number;
    public $logo;
    public $background_image;
    public int $imageUpload = 0;

    public function rules()
    {
        return (new StoreSchoolRequest())->rules();
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function resetFormFields()
    {
        $this->reset();
        $this->imageUpload++;
    }

    public function store()
    {
        $imageName = $this->logo ? $this->newFileName($this->logo) : null;
        School::create(array_merge($this->validate(), [
            'logo' => Storage::putFileAs('public/shool-logo', $this->logo, $imageName),
        ]));

        flash()->addSuccess('New school has been added.');
        $this->resetFormFields();
    }

    public function render()
    {
        return view('livewire.school.create-school', [
            'imageUpload' => $this->imageUpload
        ]);
    }
}