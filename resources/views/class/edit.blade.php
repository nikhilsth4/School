@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">
        Edit
    </div>

</div>
<div class="card-body">
    <form action="{{ route('class.update', $classes->id ) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="name" class="form-control" value="{{  $classes->name }}">
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection