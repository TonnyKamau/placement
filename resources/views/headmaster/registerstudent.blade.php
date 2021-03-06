@extends('headmaster.layout')

@section('content')
<div class="regbody">
    <div class="container">

<h3>Register New students</h3>
<div class="col-md-12">
    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
   @endif
  </div>
<form method="POST" class="row g-3"  action="{{ route('studentregister') }}">
    @csrf

    <div class="col-md-4">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter  student/staff name " :value="old('name')" required autofocus autocomplete="name" >
      </div>
    <div class="col-md-4">
        <label for="birthCertID" class="form-label">BirthCertificate Number:</label>
        <input type="text" class="form-control" name="birthCertID" placeholder="Enter  student/staff birthCertID " :value="old('birthCertID')" required>
    </div>
    <div class="col-md-4">
        <label for="indexStaffNo" class="form-label">Index Number:</label>
        <input type="text" class="form-control" name="indexStaffNo" placeholder="Enter  student/staff indexStaffNo " :value="old('indexStaffNo')" required >
    </div>
    <div class="col-md-2">
        <label for="cod" class="form-label">Position: </label>
        <select name="role" class="form-control" :value="old('role')" required readonly>
          <option value="1">Student</option>

        </select>
    </div>

    <div class="col-md-6">
        <label for="primarySchoolID" class="form-label">Primary School ID:</label>
        <input type="text" class="form-control" name="primarySchoolID" placeholder="Enter  student/staff primarySchoolID " :value="old('primarySchoolID')">
    </div>
    <div class="col-md-4">
        <label for="cod" class="form-label">Gender: </label>
        <select name="gender" :value="old('gender')" required class="form-control">
          <option value="Other">Other</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="dob" class="form-label">Death Of Birth:</label>
        <input type="date" class="form-control" name="dob" placeholder="Enter  student/staff dob " :value="old('dob')">
    </div>
    <div class="col-md-4">
        <label for="religion" class="form-label">Religion:</label>
        <input type="text" class="form-control" name="religion" placeholder="Enter  student/staff religion " :value="old('religion')">
    </div>

    <div class="col-md-4">
        <label for="cod" class="form-label">Disabled: </label>
        <select name="disabled" :value="old('disabled')" required class="form-control">
          <option value="No">NO</option>
          <option value="Yes">YES</option>
        </select>
    </div>
    <div class="col-md-12">
        <label for="email" class="form-label"> Student Email:</label>
        <input type="email" class="form-control" name="email" placeholder="Enter  student/staff email " :value="old('email')">
    </div>
    <div class="col-md-6">
        <label for="pswd" class="form-label">Password:</label>
        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
    </div>
    <div class="col-md-6">
        <label for="pswdComfirm" class="form-label">Confirm Password:</label>
        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
    </div>


    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
            <x-jet-label for="terms">
                <div class="flex items-center">
                    <x-jet-checkbox name="terms" id="terms"/>

                    <div class="ml-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                        ]) !!}
                    </div>
                </div>
            </x-jet-label>
        </div>
    @endif

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>
        <br><br>
        <div class="col-md-12">
            <button type="submit" class="btn btn-success">Save Record</button>
            <a href="/createMessage"  class="btn btn-danger" style="float:right"> Drop Entry</a>
        </div>
    </div>
</form>
</div>
</div>
@endsection
