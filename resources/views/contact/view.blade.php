@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Details</div>

                <div class="card-body">
                    <p>{{ $contact->name }}</p>
                    <p>{{ $contact->address }}</p>
                    <p>{{ $contact->mobile }}</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
