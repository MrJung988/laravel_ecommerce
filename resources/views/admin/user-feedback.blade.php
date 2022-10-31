@extends('admin.layouts.app')
@section('title','Add Product')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection


@section('content') 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-6">
                <h1 class="m-0 text-bold">User Feedbacks</h1>
            </div>
            <div class="col-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">User Feedbacks</li>
                </ol>
            </div>            
        </div>
        
        <table class="table table-striped" id="feedbackTable">
            <thead>
                <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">User's Name</th>
                    <th scope="col">User's Email</th>
                    <th scope="col">User's Contact</th>
                    <th scope="col">User's Address</th>
                    <th scope="col">User's Message</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach($messages as $message)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$message->username}}</td>
                    <td>{{$message->useremail}}</td>
                    <td>{{$message->usercontact}}</td>
                    <td>{{$message->useraddress}}</td>
                    <td>{{$message->usermessage}}</td>
                </tr>
                @php
                $i++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@push('js')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#feedbackTable').DataTable();
        } );
    </script>
@endpush