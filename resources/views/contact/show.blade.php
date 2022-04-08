@extends('layouts.app')

@section('title')
Contact Detail
@endsection

@section('header')
<h1 class=""><i class="fa fa-lgfa-fw fa-users">Contact Detail</i></h1>
@endsection

@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert aler-success">
        {{ session('status') }}
    </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="section-content">
                <h2 class="section-heading">Contact Information</h2>
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Name<br />
                                <strong><a href="mailto:{{ $contact->email }}">{{ $contact->name }}</a></strong>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Email<br />
                                <strong><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></strong>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Birthday<br />
                                <strong>{{ $contact->birthday }}</strong>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <p><a href="{{ route('contacts.edit', ['contact' => $contact->id]) }}" class="btn btn-primary btn-sm form-btn" data-title="<i class='fa fa-users'></i> Edit Contact">Edit This Contact</a></p>
</div>
@endsection

@section('scripts')
<script>
   
</script>
@endsection