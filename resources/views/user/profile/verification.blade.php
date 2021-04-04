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
                          @if ($student && $student->profile_photo)
                            <img src="/uploads/profile_images/{{$student->profile_photo}}" class="profile-image rounded" width="140px" height="auto">
                          @else
                            <img src='https://avataaars.io/?avatarStyle=Circle&topType=WinterHat4&accessoriesType=Blank&hatColor=Blue01&facialHairType=MoustacheMagnum&facialHairColor=Auburn&clotheType=GraphicShirt&clotheColor=Gray01&graphicType=Pizza&eyeType=Side&eyebrowType=DefaultNatural&mouthType=Sad&skinColor=Tanned'
                             class="profile-image rounded" width="140px" height="auto">                           
                           @endif

                             <h2 class="text-primary text-capitalize my-4">{{ $user->name }} </h2>

                             @if (auth()->user()->isVerified())
                                <div class="alert alert-success w-50 mx-auto">
                                 Your Documents Successfully Verified
                               </div>
                             @endif

                             @if (auth()->user()->isUnderVerification())
                                <div class="alert alert-warning w-50 mx-auto">
                                  Please Wait Your Documents are Under Verfication
                               </div>
                             @endif

                             @if (auth()->user()->isDocumnetNotUploaded())
                               <div class="alert alert-warning w-50 mx-auto">
                                  Upload your document to verify your account
                               </div>
                             @endif

                             @if (auth()->user()->isRejected())
                              <div class="alert alert-warning w-50 mx-auto">
                                Your uploaded document is rejected by our admin. ReUpload, your document to verify your account.
                             </div>
                             @endif
                        </div>
                       
                        <form action="{{ url('user/update/id-proof') }}" method="POST" enctype="multipart/form-data">
                            @csrf 
                            {{ method_field('POST') }}

                            <div class="row">
                                <div class="col-md-6 my-3">
                                   <div class="form-group">
                                       <label>
                                           Full Name
                                       </label>
                                       <input class="form-control" placeholder="name" type="name" name="name" value="{{ $user->name }}" readonly />
                                   </div> 
                                </div>
                                <div class="col-md-6 my-3">
                                   <div class="form-group">
                                       <label>
                                           Date of Birth
                                       </label>
                                       <input class="form-control" placeholder="Date of Birth" type="date" name="dob" value="{{ $student->date_of_birth }}" readonly />
                                   </div> 
                                </div>
                                <div class="col-md-6 my-3">
                                   <div class="form-group">
                                       <label>
                                           Identity Proof
                                       </label>
                                       <select class="form-control" name="id_proof">
                                           <option value="aadhar-card">Aadhar Card</option>
                                           <option value="pan-card">Pan card </option>
                                           <option value="passport">Passport </option>
                                           <option value="school-id">School Id </option>
                                       </select>
                                   </div> 
                                </div>
                            </div>



                            <div class="row ">
                                @if (!$student->id_front)
                                <div class="col-md-6 my-3">
                                   <div class="card card-sec p-5 text-center">
                                       <i class="fa fa-upload my-3 icon-lg"></i>
                                       <div class="upload-btn-wrapper">
                                         <button class="btn btn-default">Upload a file</button>
                                         <input type="file" name="id_front" />
                                         @error('id_front')
                                             <div class="small my-1 text-danger">{{ $message }}</div>
                                         @enderror
                                       </div>
                                   </div> 
                                </div>
                                @else
                                <div class="col-md-6">
                                 <img src="{{ asset('uploads/id_proofs/'.$student->id_front) }}" width="100%" height="auto" />
                                 <a href="{{ url('user/id-proof/id_front') }}" class="my-3 text-danger text-right">Delete and ReUpload</a>
                                </div>
                                @endif

                               @if (!$student->id_back)
                                  <div class="col-md-6 my-3">
                                   <div class="card card-sec p-5 text-center">
                                       <i class="fa fa-upload my-3 icon-lg"></i>
                                       <div class="upload-btn-wrapper">
                                         <button class="btn btn-default">Upload a file</button>
                                         <input type="file" name="id_back" />
                                         @error('id_back')
                                             <div class="small my-1 text-danger">{{ $message }}</div>
                                         @enderror
                                       </div>
                                   </div> 
                                </div>
                                @else
                                 <div class="col-md-6">
                                  <img src="{{ asset('uploads/id_proofs/'.$student->id_back) }}" width="100%" height="auto" />
                                   <a href="{{ url('user/id-proof/id_back') }}" class="my-3 text-danger text-right">Delete and ReUpload</a>
                                 </div>
                                @endif
                            </div>
                         
                            <div class="text-right mt-4">
                                <button class="btn btn-primary px-4" type="submit">Save</button>
                                 <button class="btn btn-primary px-4" type="btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
