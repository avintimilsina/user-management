<?php

namespace Tests\Feature;

use App\Http\Livewire\AddParticipant;
use App\Http\Livewire\EditForm;
use App\Http\Livewire\Navbar;
use App\Http\Livewire\Footer;
use App\Http\Livewire\UserForm;
use App\Models\Event;
use App\Models\User;

use function Pest\Laravel\get;
use function Pest\Livewire\livewire;

test(
    'It displays the Edit page',
    fn () => get('/edit?id=' . User::latest()->first()->id)
        ->assertOk()
);
test(
    'Edit User Page contains Navbar livewire component',
    fn () => get('/edit?id=' . User::latest()->first()->id)
        ->assertSeeLivewire(Navbar::class)
);
test(
    'Edit User Page contains UserForm livewire component',
    fn () => get('/edit?id=' . User::latest()->first()->id)
        ->assertSeeLivewire(UserForm::class)
);
test(
    'Edit User Page contains Footer livewire component',
    fn () => get('/edit?id=' . User::latest()->first()->id)
        ->assertSeeLivewire(Footer::class)
);

test('It display the user details in fields from the database for editing', function () {

    $user = User::factory()->create()->latest()->first();
    livewire(UserForm::class, ['user' => $user])->assertSet('first_name', $user->first_name)
        ->assertSet('last_name', $user->last_name)
        ->assertSet('email', $user->email)
        ->assertSet('phone_number', $user->phone_number)
        ->assertSet('identification_number', $user->identification_number)
        ->assertSet('gender', $user->gender)
        ->assertSet('date_of_birth', $user->date_of_birth)
        ->assertSet('country', $user->country)
        ->assertSet('city', $user->city)
        ->assertSet('province', $user->province)
        ->assertSet('zipcode', $user->zipcode)
        ->assertSet('about', $user->about);

    User::whereEmail($user->email)->delete();
});

test('It display the updated information after editing the user details', function () {

    $user = User::factory()->create()->latest()->first();
    livewire(UserForm::class, ['user' => $user])
        ->set('email', 'editing@test.com')->call('submit');

    $this->assertTrue(User::whereEmail('editing@test.com')->exists());

    User::whereEmail('editing@test.com')->delete();
});
