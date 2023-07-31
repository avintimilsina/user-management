<?php

use App\Http\Livewire\UserForm;
use App\Models\User;

use function Pest\Laravel\get;
use function Pest\Livewire\livewire;

test(
    'It displays Home Page',
    fn () => get('/')
        ->assertOk()
);
test(
    'Home Page contains UserForm livewire component',
    fn () => get('/')
        ->assertSeeLivewire(UserForm::class)
);

test('Submits the form', function () {
    livewire(UserForm::class)
        ->set('first_name', 'John')
        ->set('last_name', 'Doe')
        ->set('email', 'john@doe.com')
        ->set('phone_number', '1234567890')
        ->set('identification_number', '1234567890')
        ->set('gender', 'Male')
        ->set('date_of_birth', '2021-01-01')
        ->set('country', 'India')
        ->set('street_address', '123')
        ->set('city', 'Bangalore')
        ->set('province', 'Karnataka')
        ->set('zipcode', '560001')
        ->set('about', 'About')
        ->call('submit');

    $this->assertTrue(User::whereEmail('john@doe.com')->exists());
    User::whereEmail('john@doe.com')->delete();
});

test('First Name is required', function () {
    livewire(UserForm::class)
        ->set('first_name', '')
        ->call('submit')
        ->assertHasErrors(['first_name' => 'required']);
});

test('Last Name is required', function () {
    livewire(UserForm::class)
        ->set('last_name', '')
        ->call('submit')
        ->assertHasErrors(['last_name' => 'required']);
});

test('Email is required', function () {
    livewire(UserForm::class)
        ->set('email', '')
        ->call('submit')
        ->assertHasErrors(['email' => 'required']);
});

test('Should be a valid email', function () {
    livewire(UserForm::class)
        ->set('email', 'abcdefghijxlmnopqrstuvwxyz')
        ->call('submit')
        ->assertHasErrors(['email' => 'email']);
});

test('Phone Number is required', function () {
    livewire(UserForm::class)
        ->set('phone_number', '')
        ->call('submit')
        ->assertHasErrors(['phone_number' => 'required']);
});

test('Phone Number must be 10 digits long', function () {
    livewire(UserForm::class)
        ->set('phone_number', '826128901683')
        ->call('submit')
        ->assertHasErrors(['phone_number' => 'digits:10']);
});

test('Identification Number is required', function () {
    livewire(UserForm::class)
        ->set('identification_number', '')
        ->call('submit')
        ->assertHasErrors(['identification_number' => 'required']);
});

test('Gender must be selected', function () {
    livewire(UserForm::class)
        ->set('gender', '')
        ->call('submit')
        ->assertHasErrors(['gender' => 'required']);
});

test('Date of birth is required', function () {
    livewire(UserForm::class)
        ->set('date_of_birth', '')
        ->call('submit')
        ->assertHasErrors(['date_of_birth' => 'required']);
});

test('Date of birth must be in date format', function () {
    livewire(UserForm::class)
        ->set('date_of_birth', '0983qe4r903')
        ->call('submit')
        ->assertHasErrors(['date_of_birth' => 'date']);
});

test('Country is required', function () {
    livewire(UserForm::class)
        ->set('country', '')
        ->call('submit')
        ->assertHasErrors(['country' => 'required']);
});

test('Street Address is required', function () {
    livewire(UserForm::class)
        ->set('street_address', '')
        ->call('submit')
        ->assertHasErrors(['street_address' => 'required']);
});

test('City is required', function () {
    livewire(UserForm::class)
        ->set('city', '')
        ->call('submit')
        ->assertHasErrors(['city' => 'required']);
});

test('Province is required', function () {
    livewire(UserForm::class)
        ->set('province', '')
        ->call('submit')
        ->assertHasErrors(['province' => 'required']);
});

test('Zipcode is required', function () {
    livewire(UserForm::class)
        ->set('zipcode', '')
        ->call('submit')
        ->assertHasErrors(['zipcode' => 'required']);
});

test('About is required', function () {
    livewire(UserForm::class)
        ->set('about', '')
        ->call('submit')
        ->assertHasErrors(['about' => 'required']);
});

test('Email must be unique', function () {
    $existingEmail = 'existing@email.com';
    User::factory()->create(['email' => $existingEmail]);
    livewire(UserForm::class)
        ->set('email', $existingEmail)
        ->call('submit')
        ->assertHasErrors(['email' => 'unique']);
    User::whereEmail($existingEmail)->delete();
});

// test('Reset the form', function () {
//     livewire(UserForm::class)
//         ->set('first_name', 'John')
//         ->set('last_name', 'Doe')
//         ->set('email', 'john@doe.com')
//         ->set('phone_number', '1234567890')
//         ->set('identification_number', '1234567890')
//         ->set('gender', 'Male')
//         ->set('date_of_birth', '2021-01-01')
//         ->set('country', 'India')
//         ->set('street_address', '123')
//         ->set('city', 'Bangalore')
//         ->set('province', 'Karnataka')
//         ->set('zipcode', '560001')
//         ->set('about', 'About')
//         ->call('resetManually');

//     $this->assertNull(
//         get('first_name'),

//     );
// });
