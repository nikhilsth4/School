@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('student.create') }}" class="btn btn-success ">Add class</a>

</div>
<div class="card card-default ">
    <div class="card-header">
        Classes
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Sec_id</th>
                <th>Contact</th>
                <th></th>

            </thead>
            <tbody>
                @foreach($student as $student)
                <tr>
                    <td>
                        {{ $student->name }}
                    </td>
                    <td>
                        {{ $student->sec_id }}
                    </td>
                    
                    <td>
                        {{ $student->contact }}
                    </td>

                    <td>
                        <a href="{{ route('student.edit',$student->id) }}" class="btn btn-info btn-small">
                            Edit
                        </a>
                    </td>
                    <td>

                        <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="Submit" class="btn btn-sm  btn-danger" value="Delete">
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>