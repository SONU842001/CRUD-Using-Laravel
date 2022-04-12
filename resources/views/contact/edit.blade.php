@extends('layouts.app');

@section('content')
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">
                     Update Contact
                     </div>
                     <div class="card-body">
                         <form action="{{ route('contact.update',[$contact->id])  }}" method="POST">@csrf
                             <div class="form-group">
                                 <label for="">Name</label>
                                 <input type="text" name="name" value ="{{ $contact->name }}"class="form-control">
                             </div>
                             <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="address" value ="{{ $contact->address }}"class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Mobile-no</label>
                                <input type="text" name="mobile" value="{{ $contact->mobile }}"class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
@endsection
