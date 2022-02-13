@extends('admin.layout')
@section('content')
<div class="container">
              <h3>Marks Recording</h3>
              <div class="col-md-12">
    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
   @endif
  </div>
              <form action="/MarksRecord" class="row g-3" method="POST" >
                @csrf
                 <div class="col-md-6">

                  <label for="index" class="form-label">index Number</label>
                  <input type="number" class="form-control" name="indexnumber" placeholder="Enter Index Number" >
                </div>
                <div class="col-md-6">

                  <label for="Mean Marks" class="form-label">Mean Marks</label>
                  <input type="number" class="form-control" name="mean" placeholder="Enter The Mean Marks" >
                </div>
                <br>
                <br>
              <div class="col-md-12">
                <button type="submit" class="btn btn-success">Save Details</button>
                <a href="/MarksRecord"  class="btn btn-danger" style="float:right"> Drop Entry</a>
              </div>
            </form>

</div>


@endsection
