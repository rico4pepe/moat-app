@extends('layouts.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">

        @if (Auth::check() &&  auth()->user()->name === 'Admin')
        <h2> View Student Project </h2>

        @elseif (Auth::check() &&  auth()->user()->name === 'st')
        <h2> View Your Project </h2>
        @endif
    </div>
</div>
<hr />

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                 Student Project.
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                  <form method="POST" action="/updateprojectstatus">
                                        @csrf
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                            <th>Project Title</th>
                                <th>Project Description</th>
                                    <th>Project Reason</th>
                                        <th>Status</th>
                                        @if (Auth::check() &&  auth()->user()->name === 'Admin')
                                        <th>Action</th>
                                        @endif


                                                </tr>
                                                </thead>
                        <tbody>


                            @foreach ($user->project as $project)
                            <tr>


                                <td>{{ $project->title }}</td>
                                <td>{{ $project->description }}</td>

                                <td>{{ $project->reason }}</td>
                                <td>{{ $project->status }}</td>
                                @if (Auth::check() &&  auth()->user()->name === 'Admin')
                                <td>

                                     <select name="statuses[{{ $project->id }}]"  class="form-control project-status" data-project-id="{{ $project->id }}" required>

                                    <option value="">Choose a language </option >
                                    <option value="approved">Approved </option >
                                    <option value="disapproved">Disapproved</option >
                                        <option value="pending">Pending </option >

                                    </select>

                                </td>
                                </tr>
                                @endif
                            @endforeach





                        </tbody>
                    </table>
                    <div>
                        <button type="submit" class="btn btn-primary">Update Status</button>
                        </div>
                      </form>
                     
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
