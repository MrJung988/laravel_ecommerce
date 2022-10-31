@extends('layouts.master')
@section('title','Add to cart | Blue Bird')
@section('main')
    <br><br><br>
    <div class="container" style="border: 1px solid; padding: 10px; margin-top: 50px; margin-bottom: 50px;">
        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="col-3">
                    <img src="{{ asset('/image/avatar5.png') }}" alt="" height="180" width="180">
                </div>
                <div class="col-4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae ipsum alias ab vero ipsam odit!</p>
                </div>
                <div class="col-2">
                    <p>Rs. 1500</p>
                </div>
                <div class="col-1">
                    <select name="" id="" class="form-select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-2">
                   <button class="btn btn-danger">Buys Now</button>
                </div>
            </div>            
        </div>
    </div>
@endsection