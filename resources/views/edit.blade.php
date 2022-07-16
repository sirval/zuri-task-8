@extends('layouts.app')
@section('css')
    <!-- CSS only -->
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" >
@endsection

@section('content')
    <div style="margin-top: 20px !important; margin-left:20%; margin-right:20%;" class="card">
        <div class="card-body">
               @include('layouts.partials.message')
                {{-- @foreach ($user as $user) --}}
            <form  action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                   
                <div style="padding: 50px; margin-left: 50px;" class="row g-2 align-items-center">
                    <div class="col-4">
                        <label for="name" class="col-form-label">Name</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" >
                    </div>
                    <div class="col-4">
                        <label for="email" class="col-form-label">Email</label>
                    </div>
                    <div class="col-8">
                        <input type="email" id="email" name="email" class="form-control " name="email" value="{{ $user->email }}" >
                    </div>
                    
                    <div class="col-4">
                        <label for="phone" class="col-form-label">Phone</label>
                    </div>
                    <div class="col-8">
                        <input type="tel" id="phone" name="phone" class="form-control" value="{{ $user->phone }}">
                        
                    </div><br>
                    <br>
                </div>
                 
                <div class="col-12">
                    <button type="submit" class="btn btn-sm btn-primary  float-end">Update</button>
                </div>
                
                
            </form>
            {{-- @endforeach --}}
            
        </div>
    </div>
@endsection

@section('scripts')
    <!-- JavaScript Bundle with Popper -->
    <script src="../../assets/js/jquery-3.6.0.min.js" ></script>
@endsection
