<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jokes;

class JokesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num = config('jokesconf.number_of_jokes');
        $category = config('jokesconf.joke_category');
        $b_url = config('jokesconf.base_url');

        $messages = Jokes::getJokes($num,$category,$b_url);

        foreach($messages as $key=>$value) {
            return view('jokes.index')->with($key, $value);
        }
    }

}
