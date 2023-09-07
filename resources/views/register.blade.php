@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">


                    <h1 > Registration Form </h1>



            </div>
    </div>
          <hr />





    <div class="row">
    @if(session()->has('success'))
    <div style="margin-left: 40px;">
      <div class="alert alert-success alert-dismissible" style="width:40%; text-align:center;" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>{{ session()->get('success') }}</strong>
      </div>
</div>
    @endif




<form action="/" method="POST"   class="form-horizontal">
    @csrf
    <fieldset>

<!-- Form Name -->
<div class="form-group">
<label class="col-sm-4 control-label" for="fname">First Name</label>
<div class="col-sm-6">
<input type="text" name="fname" placeholder="Name" value="{{ old('fname') }}" class="form-control" required>
</div>
</div>

<div class="form-group">
   <label class="col-sm-4 control-label" for="lname">Last Name</label>
   <div class="col-sm-6">
   <input type="text" name="lname" placeholder="Last Name" value="{{ old('lname') }}" class=" form-control" required>
   </div>
   </div>


<div class="form-group">
<label class="col-sm-4 control-label" for="address">Address</label>
<div class="col-sm-6">
<input type="text" name="address" value="{{ old('address') }}" placeholder="Address"  class=" form-control">
</div>
</div>

<!-- Destination -->
<div class="form-group">
<label class="col-sm-4 control-label" for="tel">Telephone</label>
<div class="col-sm-6">
<input type="text" name="tel" value="{{ old('tel') }}" placeholder="Contact Number" class="form-control">
</div>
</div>


<div class="form-group">
<label class="col-sm-4 control-label" for="email">Email</label>
   <div class="col-sm-6">
   <input type="email" name="email" value="{{ old('email') }}"  placeholder="Email" class=" form-control">
   </div>
   </div>

   <div class="form-group">
    <label class="col-sm-4 control-label" for="password">Password</label>
       <div class="col-sm-6">
       <input type="password" name="password"  placeholder="Password" class=" form-control">
       </div>
       </div>





<div class="form-group">
  <label class="col-sm-4 control-label" for="proglang">Programming Language</label>
  <div class="col-sm-6">
    <select name="proglang"  class="form-control" required>
                          <option value="">Choose a language </option >
                          <option value="Python">Python </option >
                          <option value="Php">Php </option >

                          </select>
  </div>
</div>




<div class="form-group">
  <label class="col-sm-4 control-label"  for="reason">Reason of Learning</label>
      <div class="col-sm-6">
      <textarea name="reason" class="form-control" value="{{ old('reason') }}" placeholder="Reason to learn"></textarea>
      </div>
      </div>

      <div class="control-group">
       <div class="controls">
         <center>
           <input type="submit" name="btn" class="btn btn-success" id="btn" value="Submit">
         </center>
       </div>
     </div>
</fieldset>




    </form>

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
