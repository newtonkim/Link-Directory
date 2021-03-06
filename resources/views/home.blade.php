@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in the link App!
                </div>
                <div><a class="btn btn-primary" href="http://localhost:8000/create" role="button">Add Link Directory</a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
