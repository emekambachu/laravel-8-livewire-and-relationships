@extends('layouts.app')

@section('title')
    Create
    @endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create</div>
                    <div class="card-body">
                        <livewire:counter />
                        <x-alert/>
                        <form method="post" action="{{ route('todos.submit') }}">
                            @csrf
                            <input name="title" placeholder="Title" class="form-control mb-2" required>
                            <button class="btn btn-info text-white">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
