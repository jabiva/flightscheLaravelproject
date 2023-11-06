<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewManageUser(){
        $data = User::all();
        return view('admin.manageUser', compact('data'));
    }

    public function viewFlightPlan(){
        return view('admin.flightPlanSchedule');
    }

    public function viewInstructor(){
        return view('admin.instructor');
    }
    public function viewStudent(){
        return view('admin.student');
    }
    public function viewMechanic(){
        return view('admin.mechanic');
    }
    public function viewAircraft(){
        return view('admin.aircraft');
    }
    public function viewArchived(){
        return view('admin.archived');
    }
    public function viewInspection(){
        return view('admin.inspection');
    }

    public function newUser(){
        return view('admin.new.userNew');
    }

}
