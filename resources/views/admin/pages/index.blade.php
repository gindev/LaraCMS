@extends('layouts.app')

@section('content')

<div class="container">
    @if(session('status'))
    <div class="alert alert-info mb-3">
        {{ session('status') }}
    </div>
    @endif
    <a href="{{ route('pages.create') }}" class="btn btn-primary">Create New</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>URL</th>
                <th></th>
            </tr>
        </thead>
        @foreach($pages as $page)
            <tr>
                <td>
                    <a href="{{ route('pages.edit', ['page'=>$page->id]) }}">{!! $page->present()->paddedTitle !!}</a>
                </td>
                <td>{{ $page->url }}</td>
                <td>
                    <a 
                        href="{{ route('pages.destroy', ['page' => $page->id])}}"
                        class="btn btn-danger delete-link"
                        data-message="Are you sure you want to delete this pate?"
                        data-form="delete-form"
                    >
                        Delete
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $pages->links() !!}

    <form action="" id="delete-form" method="POST">
        {{ method_field('DELETE') }}
        @csrf
    </form>
</div>

@endsection
