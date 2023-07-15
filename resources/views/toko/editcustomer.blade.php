@extends('template.admin')

@section('content')
<h1>Edit Pelanggan</h1>
<form action="{{ route('pelanggan.updatecustomer', $customer) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}">
    </div>
    <div class="form-group">
        <label for="price">Address:</label>
        <input type="text" name="address" id="address" class="form-control" value="{{ $customer->address }}">
    </div>
    <div class="form-group">
        <label for="description">No. HP:</label>
        <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $customer->no_hp }}">
    </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection