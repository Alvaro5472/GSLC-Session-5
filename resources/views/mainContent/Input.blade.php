@extends('layout.navbar')

@section('main-content')
<div class="container mt-3">
    <h2>Looping Input</h2>
    <form action="/" method="POST">
      <div class="mb-3 mt-3">
        <label for="number">Input number:</label>
        <input type="number" class="form-control" id="number" placeholder="Enter number" name="number">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection