@extends('admin.layout')
@section('content')
<div class="container">
              <h3>Add Highschool</h3>
              <div class="col-md-12">
    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
   @endif
  </div>
              <form action="/CreateHighschool" class="row g-3" method="POST" >
                @csrf
                 <div class="col-md-6">

                  <label for="code" class="form-label">School Code</label>
                  <input type="text" class="form-control" name="schoolcode" placeholder="Enter schoolcode" >
                </div>
                <div class="col-md-6">

                  <label for="regno" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter school name" >
                </div>
                 <div class="col-md-4">
        <label for="cod" class="form-label">Level: </label>
        <select name="level" class="form-control" :value="old('level')" required readonly>
            <option>Choose</option>
            <option value="004">District</option>
            <option value="003">County</option>
            <option value="002">Extra-County</option>
            <option value="001">National</option>
        </select>
    </div>
                <div class="col-md-6">
                  <label for="county" class="form-label">County</label>
                  <input type="text" class="form-control" name="county" placeholder="county " >
                </div>
              <div class="col-md-12">
                <label for="subcounty" class="form-label">Subcounty</label>
                <input type="text" class="form-control" name="subcounty" placeholder="subcounty " >
              </div>
              <div class="col-md-4">
                <label for="type" class="form-label">Type of School </label>
                <select name="type" class="form-control">
                  <option value="Mixed">Mixed</option>
                  <option value="Girls">Girls</option>
                  <option value="Boys">Boys</option>
                  <option value="Special">Special</option>
                </select>
              </div>
              <div class="col-md-8">
                <label for="Capacity" class="form-label">Capacity</label>
                <input type="number" class="form-control" name="capacity" placeholder="Capacity " >
              </div>
              <div class="col-md-6">
                <label for="mean" class="form-label">Mean</label>
                <input type="number" class="form-control" name="mean" placeholder="marks Range" >
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">School Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email" >
              </div>
              <div class="col-md-6">
                <label for="box" class="form-label">Po Box</label>
                <input type="text" class="form-control" name="box" placeholder="Postal address" >
              </div>


              <div class="col-md-12">
                <button type="submit" class="btn btn-success">Save Details</button>
                <a href="/CreateHighschool"  class="btn btn-danger" style="float:right"> Drop Entry</a>
              </div>
            </form>

</div>

@endsection
