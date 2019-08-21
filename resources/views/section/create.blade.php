@extends('layouts.app')

@section('content')
<div class="card card-default ">
    <div class="card-header">
Create section
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
        <form action="{{ route('section.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" value=''>
            </div>

            <div class="form-group">
            <label for="class_id">Class Id</label>
            <!-- <section>
                <option value="{{ route('class.index') "></option>    
            </section> -->
            <input type="number" class="form-control" name="name" value=''>
            </div>

            <div class="form-group">
            <label for="sec_name">Sec_name</label>
            <input type="text" class="form-control" name="name" value=''>
            </div>

            <div class="form-group">
                <button class="btn btn-success">
                Add Section
                    
            </button>
            </div>


        </form>
    </div>
</div>
@endsection