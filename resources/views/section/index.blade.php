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
                <th>Class Id </th>
                <th>Sec_name</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($section as $section)
                <tr>
                    <td>
                        {{ $section->name }}
                    </td>
                    <td>
                        {{ $section->class_id }}
                    </td>
                    <td>
                        {{ $section->sec_name }}
                    </td>
                    <td>
                        <a href="{{ route('section.edit',$section->id) }}" class="btn btn-info btn-small">
                            Edit
                        </a>
                    </td>
                    <td>

                        <form action="{{ route('section.destroy', $section->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="Submit" class="btn btn-sm  btn-danger" value="Delete">
                        </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>