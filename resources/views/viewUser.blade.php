@extends('layouts.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">


        <h2> View Student List </h2>



    </div>
</div>
<hr />

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                 Student List.
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                            <th>Student Name</th>
                                <th>Contact</th>
                                    <th>Address</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                             <!--<th>Languge</th>
                                           <th>Reason</th> -->
                                            <!--<th>Edit Seller Info</th> -->


                                                </tr>
                                                </thead>
                        <tbody>

                            
                            @foreach ($users as $user)
                            <tr>


                                @if ($user->student)
                                <td>{{ $user->student->fname }} {{ $user->student->lname }}</td>
                                <td>{{ $user->student->address }}</td>

                                <td>{{ $user->student->tel }}</td>

                                @endif
                                <td>{{ $user->email }}</td>
                                <td><a  href="/student/{{ $user->id }}"  class="btn btn-success" title = "view more info"> <i class="fa-regular fa-eye-slash"></i>
                                View More</a></td>





                                <!--<td align="center">

                                </a> -->


                                </td>

                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
