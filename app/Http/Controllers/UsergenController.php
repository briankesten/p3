<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker;


class UsergenController extends Controller
{

    public function __construct()
    {
        # Not in use but here for future enhancement
    }

    public function getPage(Request $request)
    {
        //Returns User Generator Template with Get Request
        return view('usergen');
    }

    public function postPage(Request $request)
    {
        //return $request->email;
        // Validate the request data
        // Is required, must be numeric, must be between 1 - 500
        $this->validate($request, [
            'users' => 'required|numeric|min:1|max:500',
            'email' => 'in:on',
            'password' => 'in:on',
            'location' => 'in:on',
            'profile' => 'in:on',
            'birthdate' => 'in:on',
        ]);

        // Passed validation now time to generate users
        $numusers = $request->input('users');

        $faker = Faker\Factory::create();

        $name = array();
        $email = array();
        $password = array();
        $location = array();
        $profile = array();
        $birthdate = array();

        for ($i = 0; $i < $numusers; $i++) {
            $name[] = $faker->name;

            if ($request->input('email') == "on") {
                $email[] = $faker->email;
            }
            else
            {
                unset($email);
            }

            if ($request->input('password') == "on") {
                $password[] = $faker->password(6, 8);

            }
            else
            {
                unset($password);
            }
            if ($request->input('location') == "on") {
                $location[] = $faker->address;

            }
            else
            {
                unset($location);
            }
            if ($request->input('profile') == "on") {
                $profile[] = $faker->text(100);

            }
            else
            {
                unset($profile);
            }
            if ($request->input('birthdate') == "on") {
                $birthdate[] = $faker->date();

            }
            else
            {
                unset($birthdate);
            }

        }
        return view('usergen', compact('name', 'email', 'password', 'location', 'profile','birthdate'));

        /*
        return view('usergen', ['name' => $name,
                                'email' => $email,
                                'password' => $password,
                                'location' => $location,
                                'profile' => $profile]);*/
    }
}

?>