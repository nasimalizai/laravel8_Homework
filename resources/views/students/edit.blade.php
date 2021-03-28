@extends('students.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 my-5">
      <div class="pull-left">
        <h2>Edit Students</h2>
      </div>
      <div class="pull-right">
        <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
      </div>
    </div>
  </div>
@if($errors->any())
  <div class="alert alert-danger">
    <strong>Whooops!</strong> There were some problems with your input <br><br>
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action="{{ route('students.update', $student->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Student Name : </strong>
        <input type="text" name="student_name" class='form-control' placeholder="Student Name" 
        value="{{ $student->student_name }}">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Course : </strong>
        <input type="text" name="course" class='form-control' placeholder="Course"
        value="{{ $student->course }}">
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>fee : </strong>
        <input type="text" name="fee" class='form-control' placeholder="fee" value="{{ $student->fee }}">
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <button type="submit" class='btn btn-primary mt-4'>Save</button>
    </div>
  </div>
  </form>

@endsection