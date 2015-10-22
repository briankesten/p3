<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Badcow\LoremIpsum;
use netcare\passbuilder;
use DB;

class XkcdController extends Controller
{

    public function __construct()
    {
        # Not in use but here for future enhancement
    }

    public function getPage(Request $request)
    {
        //return xkcd view
        return view('xkcd');
    }

    public function postPage(Request $request)
    {
        //Validate the request data that was submitted
        $this->validate($request, [
            'wordcount' => 'required|numeric|min:3|max:6',
            'specialcharacter' => 'numeric|min:0|max:5',
            'addnumericprefix' => 'in:Yes,No',
            'addnumericsuffix' => 'in:Yes,No',
            'capitlizefirstletter' => 'in:Yes,No',

        ]);


        //Array for special characters which matches form.  Do not want to allow form to pass special characters
        $characters = [
            "0" => "",
            "1" => "!",
            "2" => "#",
            "3" => "?",
            "4" => "-",
            "5" => "@"
        ];

        //Set Values from form
        //Numbers of word in passsword
        $wordcount = $request->input('wordcount');
        //Set the special character option from form
        $specialcharacter = $request->input('specialcharacter');
        //Set numeric prefix option in form
        $addnumericprefix = ($request->input('addnumericprefix') == "Yes" ? true : false);
        //Set the numeric suffix option in form
        $addnumericsuffix = ($request->input('addnumericsuffix') == "Yes" ? true : false);
        //Set the capitilize first letter of each word in password option
        $capitlizefirstletter = ($request->input('capitlizefirstletter') == "Yes" ? true : false);

        //set final special character based on form results
        $finalchar = $characters[$specialcharacter];

        $wordarray = array();

        //SQL of words in database
        $words = DB::select("SELECT wn_synset.synset_id, wn_synset.word, wn_synset.ss_type, wn_gloss.gloss FROM wn_synset, wn_gloss WHERE wn_synset.synset_id = wn_gloss.synset_id ORDER BY rand() LIMIT $wordcount");

        //Loop through query object and generate Word array for new password
        foreach ($words as $word) {
            $wordarray[] = $word->word;
        }

        //Create a new password builder instance
        $generator = new Passbuilder();

        //Run the password_buildier method to generate the final password
        $value = $generator->password_builder($wordarray,$finalchar,$addnumericprefix,$addnumericsuffix,$capitlizefirstletter);

        //Return the xkcd view and pass the $value (final password) and $words array (info and definitions of words)
        return view('xkcd', ['final' => $value], ['words' => $words]);
    }
}

?>