@extends('layouts.app')

@section('content')
<div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
    <div class="row w-100">
        <div class="col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header">Matibabu Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p class="text-gray mb-2">
                        A NON-INVASIVE DIAGNOSTIC KIT USED TO DETECT MALARIA
                        </p>
                        @if (Auth::check())
                        <a href="http://matibabu.thinkitlimited.com/" type="button" class="btn btn-info btn-fw" target="_blank">Visit Matibabu Site</a>
                        <a href="{{ url('/home') }}" type="button" class="btn btn-success btn-fw">Go to Dashboard</a>
                    @else
                        <a href="http://matibabu.thinkitlimited.com/" type="button" class="btn btn-info btn-fw" target="_blank">Visit Matibabu Site</a>
                        <a href="{{ url('/login') }}" type="button" class="btn btn-success btn-fw">Login to Dashboard</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
