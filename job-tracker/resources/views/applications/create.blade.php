@extends('layouts.app')

@section('content')
<h1>Create Job Application</h1>
@include('applications.form', ['action' => route('applications.store'), 'isEdit' => false])
@endsection