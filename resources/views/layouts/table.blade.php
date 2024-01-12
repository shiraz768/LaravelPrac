@extends('layouts.app')
@section('content')
<h1 class="text-center"></h1>
 <div class="container mx-auto text-center m-5 p-2">
        <div class="row">
           <div class="col-md-12 mx-auto">
                <table class="table table-striped table-hover border rounded">
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Enrollment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $std)
                        <tr>
                        <td>{{ $std->id}}</td>
                        <td>{{ $std->name}}</td>
                        <td>{{ $std->age}}</td>
                        <td>{{ $std->enrollment}}</td>
                        </tr>
                        @endforeach
                    </tbody>
               </table>

            
            </div>
        </div>
    </div>
    @endsection