@extends('layouts.app')
@section('css')
    <!-- CSS only -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" >
@endsection

@section('content')
    <div style="margin: 20px !important" class="card">
        <div class="card-body text-center text-primary">
           <h3 >Welcome to Ohuka Ikenna Valentine Zuri Task <br>on<br>
            PHP Laravel MVC Hosting</h3><br><br>
            <a  href="{{ route('users.get') }}" class="btn btn-primary btn-sm">Goto Task</a>
            <a href="https://github.com/sirval/zuri-task-8/blob/main/README.md" target="_blank" class="btn btn-secondary btn-sm">Goto Task Github ReadMe</a>
        </div>
    </div>
@endsection

@section('scripts')
<script src="../assets/js/bootstrap.bundle.min.js"></script>
@endsection
