<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Staff;
use App\Activity;
use App\Event;



class WebpagesController extends Controller
{

    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */

    /*
    public function index() {
        return view('pages.index');
    }*/
    
    public function index() {
        // $users = DB::select('select * from users');

        $staff = Staff::all();
        $activities = Activity::all();
        $events = Event::all();
        // return view('pages.index', ['users' => $users]);
        return view('pages.index')
            ->with('staff', $staff)
            ->with('activities', $activities)
            ->with('events', $events);
    }


    public function summer() {
        return view('pages.summer');
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function terms() {
        return view('pages.terms');
    }

    public function privacy() {
        return view('pages.privacy');
    }
}
