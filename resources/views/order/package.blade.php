@extends('layouts.app-raw')

@section('ecss')
<style type="text/css">
    #packages li{
	list-style: none;
	padding: 5px 15px;
    background-color: #fff;
    display: flex;
    align-items: center;
    flex-direction: row;
    justify-content: space-between;
    height: 55px;
    flex-wrap: wrap;
}

#packages li.primary{
    background-color: #3eaa6d;
    margin:15px 0;
    padding: 15px;
    height: 85px;
}

#packages li label{
	margin:0;
	font-size: 1.3em;
	font-weight: 500;
	text-align: left;
	color: #000;
}

#packages li.primary label{
   color: #fff;
}

.ch-item{
	border-bottom: solid 1px #b4b4b4;
	padding: 20px 10px;
	display: flex;
	justify-content: space-between;
	flex-direction: row;
}
.ch-item h3{
  font-size: 1.2em;
  font-weight: 500;
  width: 70%;
  color: #000;
}
.ch-item span{
  font-size: 1.2em;
  font-weight: 500;
  width: 30%;
  text-align: right;
  color: #000;
}
.pkg-footer{
	border: none;
	background-color: #e2e2e2;
	margin:0;
    right: 0;
    position: absolute;
    bottom: 0;
    width: 100%;
    left: 0;
}
.pkg-footer span{
	font-size: 1.4em;
	color: #000;
	font-weight: bolder;
}
#package-all, #package-single{
  display: none;
}
</style>
@endsection

@section('content')
<div class="container py-4">
    <header class="section-header text-left w-75">
        <h2 class="text-left">
            WebInter All Packages
        </h2>
        <p class="text-left text-muted">
            Select the packages you want to buy and complete your payment with Debit/ Credit Card, UPI, Paytm etc.
        </p>
    </header>
    <div class="row">
        <div class="col-md-7" id="packages">
            <div id="package-all">
              <h3 class="heading-3 mb-3">
                Packages
            </h3>
            @foreach ($packages as $package)
            @php
              $all_type = $package->type == 2 ? 'all-olympiad' :  'all-olympiad-mock';
              // $all_type = $package->type == 2 ? 'all-olympiad-'.$package->id :  'all-olympiad-mock-'$package->id;
            @endphp 
            <ul class="packages-list" >
                <li class="primary">
                    <label class="checkbox-container">
                        {{ $package->name}}
                        <input name="package_id" type="checkbox" value="{{ $package->id}}"
                          class="multi_packages {{ $all_type }} package-{{ $package->id }}" onclick="handleAddPackage('multi')">
                            <span class="checkmark">
                            </span>
                        </input>
                    </label>
                    <span class="heading-2 text-white">
                        Rs {{ $package->amount}}
                    </span>
                </li>
            </ul>
            @endforeach
          </div>
           
            <div id="package-single">
               <h3 class="heading-3 mb-3 mt-5">
                Single Olympiads
            </h3>
            @foreach ($olympiads as $olympiad)
            <div class="card my-3 py-2">
                <h3 class="heading-3 text-theme pl-3">
                    {{ $olympiad->full_name }} ({{$olympiad->abbr}})
                </h3>
                <ul class="packages-list" >
                    @foreach ($olympiad->packages as $package)
                    @php
                      $sn_type = $package->type == 0 ? 'olympiad' :  'olympiad-mock';
                      $s_type = $package->type == 0 ? "olympiad-{$olympiad->id}" :  "olympiad-mock-{$olympiad->id}";
                    @endphp 
                    <li>
                        <label class="checkbox-container">
                            {{ $package->name}}
                             <input name="package_id" type="checkbox" value="{{ $package->id}}" class="single_packages {{ $s_type }} package-{{ $package->id }}" 
                             onclick="handleAddPackage('single')">
                                <span class="checkmark"></span>
                             </input>
                        </label>
                        <span class="heading-2">
                            Rs {{ $package->amount}}
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-md-5">
            {{-- //not selected any Item --}}
            <div class="card p-5 bg-gray" id="checkout-packages-not-filled-form">
                <p class="heading-2 text-center">
                    Please select the packages 
                   to see the final pricing.
                </p>
            </div>
            {{-- //not selected any Item --}}

            <div class="card p-3 bg-gray mb-5" id="checkout-packages-form">
                <h5 class="text-muted my-3">
                    <span id="total-item">
                        01
                    </span>
                    Items Selected
                </h5>
                <div id="added-packages" class="card-body p-0"></div>
                <div class="card-footer">
                  <div class="ch-item" id="total-amount">
                      <h3 class="w-50">
                          Payable
                      </h3>
                      <span class="w-50 heading-3" >Rs <span id="totalAmount"></span></span>
                  </div>

                 <form action="{{ route('order/create') }}" method="POST">
                   @csrf
                   <input type="hidden" name="amount" id="amount">
                   <input type="hidden" name="package_ids" id="package_ids">
                   <button class="btn btn-primary btn-block my-3" type="submit">Pay</button>
                   <button class="btn btn-link btn-block my-3" type="button" onclick="resetAll()">Reset selection</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">

    window.onload = function() {
           $('#package-all').css('display','block');
           $('#package-single').css('display','block')     
     };

    const all = {!! $all_packages->toJSON() !!} ;
    const totalOlympiad = {!! $olympiads->count() !!};
    var amount = 0;
    var package_ids = [];
    $notFilledForm = $("#checkout-packages-not-filled-form");
    $filledForm = $("#checkout-packages-form");
    var selectedPackages = [];

    function handlePackagesType(type){
       if(type == "multi") {
       	 $('#package-all').css('display','block');
         $('#package-single').css('display','none');
       }else{
       	 $('#package-all').css('display','none');
         $('#package-single').css('display','block');
       }

       if(package_ids.length <= 0){
       	 $('#package-all').css('display','block');
         $('#package-single').css('display','block');
       }
    }

    function handleSelectedPackages() {
      selectedPackages.map(package =>  validatePackage(package));
    }

    function validatePackage(package) {
      $('.single_packages').attr("disabled", false);

       if(package.type == 0){
          $(`.olympiad-${package.product}`).attr("disabled", false);
          $(`.olympiad-mock-${package.product}`).attr("disabled", true);
       }

       if(package.type == 1){
          $(`.olympiad-${package.product}`).attr("disabled", true);
          $(`.olympiad-mock-${package.product}`).attr("disabled", false);
       }

       if(package.type == 2){
          $('.all-olympiad').attr("disabled", false);
          $('.all-olympiad-mock').attr("disabled", true);
       }

       if(package.type == 3){
          $('.all-olympiad').attr("disabled", true);
          $('.all-olympiad-mock').attr("disabled", false);
       }
    }

 	function formShow(){
     if(package_ids.length > 0){
        $notFilledForm.addClass("d-none");
        $filledForm.removeClass("d-none");
      }else{
      	$notFilledForm.removeClass("d-none");
      	$filledForm.addClass("d-none");
      }
 	}

  function resetAll() {
    location.reload();
  }

  function resetChecked(type) {
    handlePackagesType(type);
    $("input[name=package_id]").prop('checked', false);
    package_ids.map(id => 
     $(`.package-${id}`).prop('checked', true)
    )
  }

 	function handleAddPackage(type){ 
      package_ids = $("input[name=package_id]:checked").map(function() {
        return $(this).val();
      }).get();

      const checkAll = package_ids.filter(f => f > 0);
       if(checkAll.length > 3){
         Swal.fire('Warning','You can select combined package! (you can reset your selection by using reset button)','info');
         $(this).prop('checked', false);
         package_ids.pop();
         resetChecked(type);
         return;
       }
      handlePackagesType(type);
      renderAllPackges();
      formShow();
      handleSelectedPackages();
 	}

  function renderAllPackges(){
    let content = "<ul>";
    let totalAmount = 0;
    package_ids.map(p => {
        const package = all.find(i => i.id == p);
        if(package) {
         selectedPackages.push(package);
         totalAmount += +package.amount;
         amount = +totalAmount;
         content += '<li class="ch-item"><h3>'+ package.description +'</h3><span>Rs '+ package.amount +'</span></li>';  
        } 
    });
    content += "</ul>";
    $("#added-packages").html(content);
    $("#totalAmount").html(totalAmount);
    updateFormValue();
  }

  function updateFormValue(){
     $("#amount").val(amount);
     $("#package_ids").val(package_ids);
  }

  formShow();
</script>
@endsection
