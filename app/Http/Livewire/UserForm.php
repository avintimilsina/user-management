<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserForm extends Component
{
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
    
    public function submit()
    {
        $this->validate();
        User::create([
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "email" => $this->email,
            "phone_number" => $this->phone_number,
            "identification_number"=>$this->identification_number,
            "gender"=> $this->gender,
            "date_of_birth"=> $this->date_of_birth,
            "country"=> $this->country,
            "street_address"=> $this->street_address,
            "city"=> $this->city,
            "province"=> $this->province,
            "zipcode"=> $this->zipcode,
        ]);
    }
    public function render()
    {
        return view('livewire.user-form');
    }
}
