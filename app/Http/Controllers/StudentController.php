<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('/register');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $username = 'st';

        $request->validate([
            "fname" => 'required',
            "lname" => 'required',
            "address" => 'required',
            "tel" => 'required',
            "email" => 'required|unique:users', // Check email uniqueness in students table
            "password" => 'required',
            "proglang" => 'required',
            "reason" => 'required',
        ]);

        // Create a 'User' record with the provided email and password
        $user = User::create([
            'name' => $username,
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Retrieve the user's ID
        $userId = $user->id;

       // dd($userId);

       if( $userId > 0){

        Student::create([
            "fname" => $request->input('fname'),
            "lname" => $request->input('lname'),
            "address" => $request->input('address'),
            "tel" => $request->input('tel'),
            "proglang" => $request->input('proglang'),
            "reason" => $request->input('reason'),
            "user_id" => $userId, // Associate the 'Student' with the 'User'
        ]);

            auth()->login($user);
        session()->flash('success', 'Your Account Has Been Created Successfully');

        return redirect('/session');

       }

        // Create a 'Student' record regardless of the value of $userId

    }



    public function loginstudent(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

       // dd(Hash::make($request->input('password')),$request->input('email') );

            $credentials = $request->only(trim('email'), trim('password'));



            if (Auth::guard('student')->attempt($credentials))
            {
                $request->session()->regenerate();
                return redirect('/sessions')
                    ->withSuccess('You have successfully logged in!');
            }else{
                       throw ValidationException::withMessages(
                            ['email'=>'Invalid Credentials']
                        );
                }







    }


    public function createProject(Request $request){
       $userId = auth()->user()->id;




       $user = User::with('project')->find($userId);
       $projectCount = $user->project->count();





       $request->validate([
        "title" => 'required',
        "description" => 'required',
        "reason" => 'required',

    ]);



    if($projectCount < 2){

        Project::create([
            "title" => $request->input('title'),
            "description" => $request->input('description'),
            "reason" => $request->input('reason'),
            "user_id" => $userId, // Associate the 'Student' with the 'User'
        ]);
        return redirect('/getProject')
        ->with('success', 'Project has been successfully uploaded')
        ->with('projectCount', $projectCount);
    }else{
        return view('/viewProject');
    }




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $student = Student::find($id);
        // dd($student);
          return view('project')->with('student', $student);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $student = Student::find($id);
      // dd($student);
        return view('userinfo')->with('student', $student);
    }

    public function showStudent($id)
    {
        //
        //$user = User::find($id);
        $user = User::whereHas('student')->with('student')->find($id);
        $project = User::with('project')->find($id);
        $projectCount = $project->project->count();

       //dd($projectCount);
      // dd($student);

      return view('userinfo', compact('user', 'projectCount'));
    }



    public function userProject($id)
    {
        //
        //$user = User::find($id);
        //$user = User::whereHas('student')->with('student')->find($id);
        $user = User::with('project')->find($id);
        //dd( $user);
      // dd($student);


      return view('/viewProject', compact('user'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }



    public function updateStatus(Request $request)
    {

        $statuses = $request->input('statuses');
        //dd($statuses);
       // $selectedStatus = $request->input('selectedStatus');



        foreach ($statuses as $projectId => $newStatus) {
            $project = Project::find($projectId);

            if ($project) {
                // Update the project status
                $userId = $project->user_id;
                $project->status = $newStatus;
                $project->save();
            }
        }

         //$userId = auth()->user()->id;

         //dd( $userId);

        // Redirect to the appropriate route
        return redirect("/viewProject/$userId");
    }


    public function updateStudent(Request $request){
        //$user = User::whereHas('student')->with('student')->find($id);






        // dd($request);


        $user = auth()->user();



        $student = $user->student;



        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->address = $request->input('address');
        $student->tel = $request->input('tel');
        $student->proglang = $request->input('proglang');
        $student->reason = $request->input('reason');
        $student->save();

        $userId = auth()->user()->id;

        return redirect("/student/$userId")
        ->with('success', 'Profile has been successfully updated');

    }



}
