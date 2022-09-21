@extends('layouts.dashboard')
@section('content')
<form action="{{ route('anggota.store') }}" method="post">
    @csrf
    <h3>Form Input Data</h3>
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="enter your name here">
    </div>
    @error('name') <div class="text-muted">{{$message}}</div> @enderror
    <div class="mb-3">
      <label for="date" class="form-label">Date birth</label>
      <input type="date" class="form-control" id="date_birth" name="date_birth">
    </div>
    @error('date_birth') <div class="text-muted">{{$message}}</div> @enderror
    <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
        <select name="gender" class="form-control" id="gender">
            <option disabled selected>--choose your gender--</option>
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
    </div>
    @error('gender') <div class="text-muted">{{$message}}</div> @enderror
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <textarea name="address" class="form-control" id="address" rows="10" cols="20"></textarea>
    </div>
    @error('address') <div class="text-muted">{{$message}}</div> @enderror
    <div class="mb-3">
      <label for="major" class="form-label">Major</label>
        <select name="major" class="form-control" id="major">
            <option selected disabled>--choose your major--</option>
            <option value="Infomatics Computer">Infomatics Computer</option>
            <option value="System Information">System Information</option>
            <option value="Management Bussiness">Management Bussiness</option>
        </select>
    </div>
    @error('major') <div class="text-muted">{{$message}}</div> @enderror
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-outline-success">Submit</button>
  </form>
@endsection
