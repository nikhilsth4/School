@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('class.create') }}" class="btn btn-success ">Add class</a>

</div>
<div class="card card-default ">
    <div class="card-header">
        Classes
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Name</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($classes as $class)
                <tr>
                    <td>
                        {{ $class->name }}
                    </td>
                    <td>
                        <a href="{{ route('class.edit',$class->id) }}" class="btn btn-info btn-small">
                            Edit
                        </a>
                    </td>
                    <td>

                        <form action="{{ route('class.destroy', $class->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="Submit" class="btn btn-sm  btn-danger" value="Delete">
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>