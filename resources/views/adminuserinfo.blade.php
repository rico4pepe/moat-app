@extends('layouts.layout')


@section('content')
<div class="row">
    <div class="col-lg-12">


                    <h1 > Details of Student Form </h1>



            </div>
    </div>
          <hr />





    <div class="row">


<form action="/updatestudent" method="POST"   class="form-horizontal" ">
    @csrf
    <fieldset>

<!-- Form Name -->
<div class="form-group">
<label class="col-sm-4 control-label" for="fname">First Name</label>
<div class="col-sm-6">
<input type="text" name="fname" value="{{ $user->student->fname }}" placeholder="Name" class="form-control" style="border: 0px !important;" disabled>
</div>
</div>

<div class="form-group">
   <label class="col-sm-4 control-label" for="lname">Last Name</label>
   <div class="col-sm-6">
   <input type="text" name="lname" value="{{ $user->student->lname }}" placeholder="Last Name" class=" form-control" style="border: 0px !important;" disabled>
   </div>
   </div>


<div class="form-group">
<label class="col-sm-4 control-label" for="address">Address</label>
<div class="col-sm-6">
<input type="text" name="address" value="{{ $user->student->address }}" placeholder="Address" class=" form-control" style="border: 0px !important;" disabled>
</div>
</div>

<!-- Destination -->
<div class="form-group">
<label class="col-sm-4 control-label" for="tel">Telephone</label>
<div class="col-sm-6">
<input type="text" name="tel" value="{{ $user->student->tel }}" placeholder="Contact Number" class="form-control" style="border: 0px !important;" disabled>
</div>
</div>


<div class="form-group">

   <div class="col-sm-6">
    @if (Auth::check() &&  auth()->user()->name === 'st')
    <label class="col-sm-4 control-label" for="email" style="display:none">Email</label>
   <input type="email" name="email" style="display:none" value="{{ $user->email }}" placeholder="Email" class=" form-control" style=display:none">
   @elseif ((Auth::check() &&  auth()->user()->name === 'Admin') )
   <input type="email" name="email" value="{{ $user->email }}" placeholder="Email" class=" form-control" style="border: 0px !important;" disabled>
   @endif
   </div>
   </div>


   <div class="form-group">
    <label class="col-sm-4 control-label" for="proglang">Programming Language</label>
       <div class="col-sm-6">

       <input type="text" name="email" value="{{$user->student->proglang }}" placeholder="Email" class=" form-control" style="border: 0px !important;" disabled>
       </div>
       </div>








<div class="form-group">
  <label class="col-sm-4 control-label"  for="reason">Reason of Learning</label>
      <div class="col-sm-6">
      <textarea name="reason" class="form-control" placeholder="Reason to learn" style="border: 0px !important;" disabled>
        {{ $user->student->reason }}
    </textarea>
      </div>
      </div>

      <div class="control-group">
        <div class="controls">
          <center>

            @if (Auth::check() &&  auth()->user()->name === 'st')
                @if( $projectCount >= 2)
                <a  href="/project" style="visibility: none; display:none"  class="btn btn-success" title = "view more info"> <i class="fa-regular fa-eye-slash"></i>
                Create Project</a>
                @else

                <a  href="/getProject"   class="btn btn-success" title = "view more info"> <i class="fa-regular fa-eye-slash"></i>
                    Create Project</a>
                @endif
            <input type="checkbox" id="edt" name="edt" />Check to Edit
            <button class="btn btn-success" id="editProfileButton" disabled> Edit Profile </button>
                @elseif (Auth::check() &&  auth()->user()->name === 'Admin')
            <a  href="/viewProject/{{ $user->id }}"  class="btn btn-success" title = "view more info"> <i class="fa-regular fa-eye-slash"></i>
                View Student Project</a>
            @endif
          </center>
        </div>
      </div>


</fieldset>




    </form>
</div>
@endsection
