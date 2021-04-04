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
</style>
@endsection

@section('content')
<div class="container py-4">
    <header class="section-header text-left w-75">
        <h2 class="text-left">
            Checkout Now
        </h2>
        <p class="text-left text-muted">
            Select the packages you want to buy and complete your payment with Debit/ Credit Card, UPI, Paytm etc.
        </p>
    </header>
    <div class="row">
        <div class="col-md-7" id="packages">
            <h3 class="heading-3 mb-3">
                Packages
            </h3>
            @foreach ($packages as $package)
            <ul class="packages-list">
                <li class="primary">
                    <label class="checkbox-container">
                        {{ $package->name}}
                        <input name="package_id" type="checkbox" value="{{ $package->id}}" class="multi_packages" onclick="handleAddPackage('multi')">
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
            <h3 class="heading-3 mb-3 mt-5">
                Single Olympiads
            </h3>
            @foreach ($olympiads as $olympiad)
            <div class="card my-3 py-2">
                <h3 class="heading-3 text-theme pl-3">
                    {{ $olympiad->full_name }} ({{$olympiad->abbr}})
                </h3>
                <ul class="packages-list">
                    @foreach ($olympiad->packages as $package)
                    <li>
                        <label class="checkbox-container">
                            {{ $package->name}}
                            <input name="package_id" type="checkbox" value="{{ $package->id}}" class="single_packages" onclick="handleAddPackage('single')">
                                <span class="checkmark">
                                </span>
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
                  <button id="rzp-button1" class="btn btn-primary btn-block my-3">Pay</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
    const all = {!! $all_packages->toJSON() !!} ;
    var amount = 0;
    var package_ids = [];
    $notFilledForm = $("#checkout-packages-not-filled-form");
    $filledForm = $("#checkout-packages-form");

    function handlePackagesType(type){
       if(type == "multi") {
       	 $('.multi_packages').attr("disabled", false);
       	 $('.single_packages').attr("disabled", true);
       }else{
       	$('.single_packages').attr("disabled", false);
       	$('.multi_packages').attr("disabled", true);
       }

       if(package_ids.length <= 0){
       	 $('.single_packages').attr("disabled", false);
       	 $('.multi_packages').attr("disabled", false);
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

 	function handleAddPackage(type){
 	  handlePackagesType(type);
      package_ids = $("input[name=package_id]:checked").map(function() {
        return $(this).val();
      }).get();
      renderAllPcakges();
      formShow();
      handlePackagesType(type);
 	}

      function renderAllPcakges(){
        let content = "<ul>";
        let totalAmount = 0;
        package_ids.map(p => {
            const package = all.find(i => i.id == p);
            if(package) {
             totalAmount += +package.amount;
             amount = +totalAmount;
             content += '<li class="ch-item"><h3>'+ package.description +'</h3><span>Rs '+ package.amount +'</span></li>';  
            } 
        });
        content += "</ul>";
        $("#added-packages").html(content);
        $("#totalAmount").html(totalAmount);
      }

      function updateOrder(){

      }

      formShow();


      const data = {
      	name : "rajnish Singh",
      	contact : "9876543210",
      	email : "example@example.com",
      }

      var options = {
          "key": "rzp_test_h8UmSy9FCwhLO7", 
          "amount": 5000, 
          "currency": "INR",
          "name": "WebIntern",
          "description": "Test Transaction",
          "image": "https://example.com/your_logo",
          "handler": function (response){
              alert(response.razorpay_payment_id);
              alert(response.razorpay_order_id);
              alert(response.razorpay_signature)
          },
          "prefill": {
              "name": data.name,
              "email": data.email,
              "contact": data.contact
          },
          "notes": {
              "address": "Razorpay Corporate Office"
          },
          "theme": {
              "color": "#3EAA6D"
          }
      };
      var rzp1 = new Razorpay(options);
      rzp1.on('payment.failed', function (response){
              alert(response.error.code);
              alert(response.error.description);
              alert(response.error.source);
              alert(response.error.step);
              alert(response.error.reason);
              alert(response.error.metadata.order_id);
              alert(response.error.metadata.payment_id);
      });
      document.getElementById('rzp-button1').onclick = function(e){
          rzp1.open();
          e.preventDefault();
      }
</script>
@endsection
