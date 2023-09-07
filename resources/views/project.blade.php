@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">


                    <h1 > Project Page </h1>



            </div>
    </div>
          <hr />






    <div class="row">
    @if(session()->has('success'))
    <div style="margin-left: 40px;">
      <div class="alert alert-warning alert-dismissible" style="width:40%; text-align:center;" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>{{ session()->get('success') }}
    @if (session()->get('projectCount') < 2)  you need to submit one more project

    @endif
    </strong>
      </div>
</div>
    @endif


    <form action="/createproject" method="POST"   class="form-horizontal" ">
        @csrf
        <fieldset>



    <!-- Form Name -->
    <div class="form-group">
    <label class="col-sm-4 control-label" for="fname">Project Title</label>
    <div class="col-sm-6">
    <input type="text" name="title" value="{{ old('title') }}" placeholder="Project Title" class="form-control" >
    </div>
    </div>


    <div class="form-group">
       <label class="col-sm-4 control-label" for="lname">Project Description</label>
       <div class="col-sm-6">
        <textarea name="description" class="form-control" value="{{ old('description') }}" placeholder="Reason to learn"></textarea>
       </div>
       </div>


    <div class="form-group">
    <label class="col-sm-4 control-label" for="address">Project Reason</label>
    <div class="col-sm-6">
        <textarea name="reason" class="form-control" value="{{ old('reason') }}" placeholder="Reason to learn"></textarea>
    </div>
    </div>

    <!-- Destination -->

          <div class="control-group">
            <div class="controls">
              <center>
                <input type="submit" name="btn" class="btn btn-success" id="btn" value="Submit">
              </center>
            </div>
          </div>


    </fieldset>



    @if($errors->any())
    <div class="col-sm-6">
            @foreach ($errors->all() as $error)
                <li style="color: red;">
                        {{ $error }}
                </li>
            @endforeach
    </div>
    @endif
</div>
@endsection
