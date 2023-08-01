<?php

use App\Http\Livewire\Footer;
use App\Http\Livewire\Navbar;
use App\Http\Livewire\UserForm;
use App\Http\Livewire\UserTable;
use App\Models\User;

use function Pest\Laravel\get;
use function Pest\Livewire\livewire;

test(
    'It displays Registration Page',
    fn () => get('/')
        ->assertOk()
);
test(
    'Registration Page contains Navbar livewire component',
    fn () => get('/')
        ->assertSeeLivewire(Navbar::class)
);
test(
    'Registration Page contains UserForm livewire component',
    fn () => get('/')
        ->assertSeeLivewire(UserForm::class)
);
test(
    'Registration Page contains UserTable livewire component',
    fn () => get('/')
        ->assertSeeLivewire(UserTable::class)
);
test(
    'Registration Page contains Footer livewire component',
    fn () => get('/')
        ->assertSeeLivewire(Footer::class)
);

test('It submits the form if every field in the form is filled properly and inserts it in the database', function () {
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

test('It displays first name is required error message', function () {
    livewire(UserForm::class)
        ->set('first_name', '')
        ->call('submit')
        ->assertHasErrors(['first_name' => 'required']);
});

test('It displays last name is required error message', function () {
    livewire(UserForm::class)
        ->set('last_name', '')
        ->call('submit')
        ->assertHasErrors(['last_name' => 'required']);
});

test('It displays email is required error message', function () {
    livewire(UserForm::class)
        ->set('email', '')
        ->call('submit')
        ->assertHasErrors(['email' => 'required']);
});

test('It displays email is invalid error message', function () {
    livewire(UserForm::class)
        ->set('email', 'abcdefghijxlmnopqrstuvwxyz')
        ->call('submit')
        ->assertHasErrors(['email' => 'email']);
});

test('It displays phone number is required error message', function () {
    livewire(UserForm::class)
        ->set('phone_number', '')
        ->call('submit')
        ->assertHasErrors(['phone_number' => 'required']);
});

test('It displays phone number must be 10 digits long', function () {
    livewire(UserForm::class)
        ->set('phone_number', '826128901683')
        ->call('submit')
        ->assertHasErrors(['phone_number' => 'digits:10']);
});

test('It displays identification number is required error message', function () {
    livewire(UserForm::class)
        ->set('identification_number', '')
        ->call('submit')
        ->assertHasErrors(['identification_number' => 'required']);
});

test('It displays gender must be selected error message', function () {
    livewire(UserForm::class)
        ->set('gender', '')
        ->call('submit')
        ->assertHasErrors(['gender' => 'required']);
});

test('It displays date of birth is required error message', function () {
    livewire(UserForm::class)
        ->set('date_of_birth', '')
        ->call('submit')
        ->assertHasErrors(['date_of_birth' => 'required']);
});

test('It displays date of birth must be in date format', function () {
    livewire(UserForm::class)
        ->set('date_of_birth', '0983qe4r903')
        ->call('submit')
        ->assertHasErrors(['date_of_birth' => 'date']);
});

test('It displays country is required error message', function () {
    livewire(UserForm::class)
        ->set('country', '')
        ->call('submit')
        ->assertHasErrors(['country' => 'required']);
});

test('It displays street address is required error message', function () {
    livewire(UserForm::class)
        ->set('street_address', '')
        ->call('submit')
        ->assertHasErrors(['street_address' => 'required']);
});

test('It displays city is required error message', function () {
    livewire(UserForm::class)
        ->set('city', '')
        ->call('submit')
        ->assertHasErrors(['city' => 'required']);
});

test('It displays province is required error message', function () {
    livewire(UserForm::class)
        ->set('province', '')
        ->call('submit')
        ->assertHasErrors(['province' => 'required']);
});

test('It displays zipcode is required error message', function () {
    livewire(UserForm::class)
        ->set('zipcode', '')
        ->call('submit')
        ->assertHasErrors(['zipcode' => 'required']);
});

test('It displays about is required error message', function () {
    livewire(UserForm::class)
        ->set('about', '')
        ->call('submit')
        ->assertHasErrors(['about' => 'required']);
});

test('It displays email must be unique', function () {
    $existingEmail = 'existing@email.com';
    User::factory()->create(['email' => $existingEmail]);
    livewire(UserForm::class)
        ->set('email', $existingEmail)
        ->call('submit')
        ->assertHasErrors(['email' => 'unique']);
    User::whereEmail($existingEmail)->delete();
});

test('Pressing reset button resets User form fields', function () {

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
        //calls the reset method
        ->call('resetManually')
        ->assertSet('first_name', '')
        ->assertSet('last_name', '')
        ->assertSet('email', '')
        ->assertSet('phone_number', '')
        ->assertSet('identification_number', '')
        ->assertSet('gender', '')
        ->assertSet('date_of_birth', '')
        ->assertSet('country', '')
        ->assertSet('street_address', '')
        ->assertSet('city', '')
        ->assertSet('province', '')
        ->assertSet('zipcode', '')
        ->assertSet('about', '');
});

test(
    'It deletes the participant record from the database',
    function () {
        User::factory()->create(['email' => 'delete@user.com']);

        livewire(UserTable::class)->call('delete', User::latest()->first()->id);

        $this->assertFalse(User::whereEmail('delete@user.com')->exists());
        User::whereEmail('delete@user.com')->delete();
    }
);

// test(
//     'It displays the result page with the correct data',
//     function () {
//         User::factory()->create(['email' => 'sucess@page.com']);
//         get('/success?id=' . User::latest()->first()->id . '&is=' . User::latest()->first()->id . '&pnr=' . User::latest()->first()->pnr)
//             ->assertOk();
//         User::find(User::latest()->first()->id)->delete();
//     }
// );
