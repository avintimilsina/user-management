<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class UserForm extends Component
{
    public User|null $user;
    public $first_name;
    public $last_name;
    public $email;
    public $phone_number;
    public $identification_number;
    public $gender;
    public $date_of_birth;
    public $country;
    public $street_address;
    public $city;
    public $province;
    public $zipcode;
    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users,email',
        'phone_number' => 'required|digits:10',
        'identification_number' => 'required|numeric',
        'gender' => 'required',
        'date_of_birth' => 'required|date',
        'country' => 'required',
        'street_address' => 'required',
        'city' => 'required',
        'province' => 'required',
        'zipcode' => 'required',
    ];

    public function mount()
    {
        if (!!optional($this)->user) {
            $this->first_name = $this->user->first_name;
            $this->last_name = $this->user->last_name;
            $this->email = $this->user->email;
            $this->phone_number = $this->user->phone_number;
            $this->identification_number = $this->user->identification_number;
            $this->gender = $this->user->gender;
            $this->date_of_birth = $this->user->date_of_birth;
            $this->country = $this->user->country;
            $this->street_address = $this->user->street_address;
            $this->city = $this->user->city;
            $this->province = $this->user->province;
            $this->zipcode = $this->user->zipcode;
        }
    }
    public function submit()
    {
        if (!!optional($this)->user) {
            $this->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => ['required', 'email', 'unique:users,email,' . $this->user->id],
                'phone_number' => 'required|digits:10',
                'identification_number' => 'required|numeric',
                'gender' => 'required',
                'date_of_birth' => 'required|date',
                'country' => 'required',
                'street_address' => 'required',
                'city' => 'required',
                'province' => 'required',
                'zipcode' => 'required',
            ]);

            User::where('id', $this->user->id)->update([
                "first_name" => $this->first_name,
                "last_name" => $this->last_name,
                "email" => $this->email,
                "phone_number" => $this->phone_number,
                "identification_number" => $this->identification_number,
                "gender" => $this->gender,
                "date_of_birth" => $this->date_of_birth,
                "country" => $this->country,
                "street_address" => $this->street_address,
                "city" => $this->city,
                "province" => $this->province,
                "zipcode" => $this->zipcode,
            ]);
            $this->reset([
                'first_name',
                'last_name',
                'email',
                'phone_number',
                'identification_number',
                'gender',
                'date_of_birth',
                'country',
                'street_address',
                'city',
                'province',
                'zipcode',
            ]);
            return Redirect::to('/success?id=' . $this->user->id);
        }
        $this->validate();
        User::create([
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "email" => $this->email,
            "phone_number" => $this->phone_number,
            "identification_number" => $this->identification_number,
            "gender" => $this->gender,
            "date_of_birth" => $this->date_of_birth,
            "country" => $this->country,
            "street_address" => $this->street_address,
            "city" => $this->city,
            "province" => $this->province,
            "zipcode" => $this->zipcode,
        ]);

        $this->reset([
            'first_name',
            'last_name',
            'email',
            'phone_number',
            'identification_number',
            'gender',
            'date_of_birth',
            'country',
            'street_address',
            'city',
            'province',
            'zipcode',
        ]);

        return Redirect::to('/success?id=' . User::latest()->first()->id);
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
