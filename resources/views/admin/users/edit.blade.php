@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edit {{ $model->name }}</h1>
    <form action="{{ route('users.update', ['user'=>$model->id]) }}" method="POST">
        {{ method_field('PUT') }}
        @csrf
        
        @foreach($roles as $role)
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="roles[]" value="{{ $role->id }}" {{ ($model->hasRole($role->name) ? 'checked' : '') }} />
                {{ $role->name }}
            </label>
            
        </div>
        @endforeach
        
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="sumbit" />
        </div>
    </form>
</div>

@endsection
