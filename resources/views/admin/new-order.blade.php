@extends('admin.layouts.app')
@section('title','New Orders')
@section('content') 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-bold">New Orders</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">New Orders</li>
                </ol>
            </div>
        </div>

        <table class="table table-striped" id="newOrder">
            <thead>
                <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Product Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Quantity</th>
                    <th scope="col">Shipping Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                <tr>
                    <td>{{$i}}</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                </tr>
                @php
                $i++;
                @endphp
            </tbody>
        </table>
   
    </div>
</div>
@endsection

@push('js')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#newOrder').DataTable();
        } );
    </script>
@endpush