@extends('layouts.app')

@section('content')
<div class="card card-default ">
    <div class="card-header">
        Create class
    </div>
    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <div class="ul list-group">
                    @foreach($errors->all() as $error)
                        <div class="li list-group text-danger">
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <form action="{{ route('class.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" value=''>
            </div>
            <div class="form-group">
                <button class="btn btn-success">
                Add Category
                    
            </button>
            </div>


        </form>
    </div>
</div>
@endsection