@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contacts/
                        <span class="float-right"><a href="{{ route('contact.index') }}">Create Contacts</a></span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                 <th>Name</th>
                                 <th>Address</th>
                                 <th>Phone</th>
                                 <th>Edit/View</th>
                                 <th>Delete</th>
                            </thead>
                            <tbody>
                                @foreach ($contact as $contact)
                                    <tr>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->address }}</td>
                                        <td>{{ $contact->mobile }}</td>
                                        <td>
                                            <a href="{{ route('contact.edit',[$contact->id]) }}"><button type="button" class="btn btn-success">Edit</button></a>
                                            <a href="{{ route('contact.view',[$contact->id]) }}"><button type="button" class="btn btn-info">Views</button></a>
                                        </td>

                                            <td>
                                                <form action="{{ route('contact.delete',[$contact->id]) }}" method="POST">@csrf
                                                    <a href=""><button type="submit" class="btn btn-danger">Delete</button></a></form>
                                            </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
