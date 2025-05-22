@extends('layouts.app')

@section('content')
<h1>Edit Job Application</h1>
@include('applications.form', ['action' => route('applications.update', $application), 'isEdit' => true, 'application' => $application])
@endsection