@extends('base')

@section('content')
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-lg-10 col-xl-8">
                <div class="card text-black" style="border-radius: 25px;">
                  <div class="card-body p-md-5">
                    <div class="d-flex justify-content-center mb-4">
                        <div  class=" items-center justify-center text-center">
            <h1  class="text-dark"><b>Welcome Mga Idolo!!!</b></h1>
            @if (!Auth::check())
            <a href="{{url('/register')}}"
                class="btn btn-text-dark btn btn-outline-success">
            Get Started
            </a>
            @endif

        </div>
    </div>
</div>
</div>
<style>
    #welcome{
        margin-top: 50px;
    }
</style>
@endsection