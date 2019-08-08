@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your event code is {{auth()->user()->event_code}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="card" style="width: 18rem;">
                                        
                                        <div class="card-body">
                                            <h5 class="card-title">Create or Edit Gift List</h5>
                                            <p class="card-text">Lest go to create your gift list.</p>
                                            <a href="/main-table" class="btn btn-primary">GO</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="card" style="width: 18rem;">
                                        
                                        <div class="card-body">
                                            <h5 class="card-title">Your Gifts</h5>
                                            <p class="card-text">Lest go to see your balance of gifts.</p>
                                            <a href="#" class="btn btn-primary">GO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
