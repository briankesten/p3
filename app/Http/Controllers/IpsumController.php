<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Badcow\LoremIpsum;


class IpsumController extends Controller
{

    public function __construct()
    {
        # Not in use but here for future enhancement
    }

    public function getPage(Request $request)
    {
        return view('ipsum');
    }

    public function postPage(Request $request)
    {

        // Validate the request data
        $this->validate($request, [
            'paragraph' => 'required|in:1,2,3,4,5,6,7,8,9,10',
        ]);
        // Passed validation now time to generate Ipsum Text
        $paragraph = $request->input('paragraph');
        //New Instance of Lorem Ipsum Generator Class
        $generator = new LoremIpsum\Generator();
        //Get paragraphs of text
        $value = $generator->getParagraphs($paragraph);
        //Return array value containing Lorem Ipsum text back to blade template (ipsum.blade.php)
        return view('ipsum', ['value' => $value]);
    }
}

?>