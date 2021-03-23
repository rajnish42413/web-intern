@extends('layouts.admin')
@section('content')
<!-- Breadcrumb-->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Edit Profile
                </h2>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        EDIT PROFILE
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">

                          @if ($student->profile_photo)
                            <img src="/uploads/profile_images/{{$student->profile_photo}}" class="profile-image rounded" width="140px" height="auto">
                           @else
                            <img src='https://avataaars.io/?avatarStyle=Circle&topType=WinterHat4&accessoriesType=Blank&hatColor=Blue01&facialHairType=MoustacheMagnum&facialHairColor=Auburn&clotheType=GraphicShirt&clotheColor=Gray01&graphicType=Pizza&eyeType=Side&eyebrowType=DefaultNatural&mouthType=Sad&skinColor=Tanned'
                             class="profile-image rounded" width="140px" height="auto">                           
                          @endif
                            
                             <h2 class="text-primary text-capitalize my-4">{{ $user->name }} </h2>

                             {{-- <div class="alert alert-success w-50 mx-auto">
                               <strong>Success!</strong> Indicates a successful or positive action.
                             </div> --}}
                        </div>
                       
                        <form action="{{ url('user/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf 
                            {{ method_field('POST') }}

                            <div class="row">
                                <div class="col-md-6 my-3">
                                   <div class="form-group">
                                       <label>
                                           Full Name
                                       </label>
                                       <input class="form-control" placeholder="name" type="name" name="name" value="{{ $user->name }}" />
                                   </div> 
                                </div>
                                <div class="col-md-6 my-3">
                                   <div class="form-group">
                                       <label>
                                           Date of Birth
                                       </label>
                                       <input class="form-control" placeholder="Date of Birth" type="date" name="dob" value="{{ $student->date_of_birth }}" />
                                   </div> 
                                </div>
                                <div class="col-md-6 my-3">
                                   <div class="form-group">
                                       <label>
                                           School Name
                                       </label>
                                       <input class="form-control" placeholder="school name" type="text" name="school_name" value="{{ $student->school_name }}" />
                                   </div> 
                                </div>
                                <div class="col-md-6 my-3">
                                    <label>Standard</label>
                                    <select class="form-control" name="standard">
                                        <option>
                                            Select Class
                                        </option>
                                        @for ($i = 2; $i < 12; $i++)
                                         <option value="{{$i}}" @if ($student->standard == $i) selected @endif>
                                            class {{$i}}th
                                         </option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-md-6 my-3">
                                    <label> Select Profile Photo</label>
                                    <input type="file" name="profile_image" class="form-control">
                                    @error('profile_image')
                                        <div class="small my-1 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                         
                            <div class="text-right">
                                <button class="btn btn-primary px-4" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
