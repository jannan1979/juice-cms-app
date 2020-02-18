@extends('layouts.app')


@section('content')
<div class="d-flex justify-content-end mb-2">

<div class="card card-default">
<div class="card-header">

{{ isset($category) ? 'Edit Category' : 'Create Category'}}

</div>

<div class="card-body">

@if($errors->any())

<div class="alert alert-danger">
<ul class="list-group">

@foreach($errors->all() as $error)

<li class="list-group-item class-danger">

{{ $error }}

</li>

@endforeach
</ul>
</div>

@endif

<form action="{{ route('categories.store') }}" method="post">
@csrf
<div class="form-group">

<label for="name">Name</label>

<input type="text" id="name" class="form-control" name="name" value="{{ isset($category) ? $category->name : '' }}">
</div>

<div class="form-group">

<button class="btn btn-success">Add Category</button>

</div>


</form>
</div>
</div>
@endsection