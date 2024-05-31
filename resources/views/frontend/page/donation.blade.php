@extends('layouts.frontend.app')

@section('content')
    <div class="container">
        <div class="donate-form-area">
            <form action="#" class="donate-form default-form">
                <h2>Donation Information</h2>

                <h4>Select Currency</h4>
                <select class="form-control" id="currency">
                    <option value="BDT">BDT</option>
                    <option value="USD">USD</option>
                    <option value="AUD">Australian dollar</option>
                    <option value="CAD">Canadian dollar</option>
                </select>
                <hr>
                <h4>How much would you like to donate:</h4>
                <ul class="chicklet-list clearfix">
                    <li>
                        <input type="radio" id="donate-amount-1"  value="1000" name="donate-amount" />
                        <label for="donate-amount-1" data-amount="1000">1000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-2" value="2000" name="donate-amount" checked="checked" />
                        <label for="donate-amount-2" data-amount="2000">2000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-3"  value="3000" name="donate-amount" />
                        <label for="donate-amount-3" data-amount="3000">3000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-4"  value="4000" name="donate-amount" />
                        <label for="donate-amount-4" data-amount="4000">4000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-5"  value="5000" name="donate-amount" />
                        <label for="donate-amount-5" data-amount="5000">5000</label>
                    </li>
                    <li class="other-amount">

                        <div class="input-container" data-message="Every dollar you donate helps end hunger.">
                            <span>Or</span><input type="text" id="other-amount" placeholder="Other Amount" />
                        </div>
                    </li>
                </ul>
                <h3>Donor Information</h3>
                <div class="form-bg">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <p>Your Name*</p>
                                <input type="text" id="name" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <p>Email*</p>
                                <input type="text" id="email" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <p>Address*</p>
                                <input type="text" id="address" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <p>Phn Num*</p>
                                <input type="text" id="phone" placeholder="" required>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="center">
                    <button type="submit" class="btn-one" id="sslczPayBtn"
                        order="If you already have the transaction generated for current order" endpoint="/pay-via-ajax">
                        Donate Now
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $("#sslczPayBtn").click(function(e) {
        
            e.preventDefault();
            var obj = {};
            obj.currency = $('#currency').val();

            let otherAmount = $("#other-amount").val();

            if(otherAmount > 0){
                obj.amount = otherAmount;
            }
            else{
                obj.amount = $('input[name="donate-amount"]:checked').val();
            }

            obj.name = $('#name').val() || "Customer Name";
            obj.email = $('#email').val() || "customer@mail.com";
            obj.address = $('#address').val() || "Customer Address";
            obj.phone = $('#phone').val() || "8801XXXXXXXXX";

            

            console.log(obj);
            $(this).prop('postdata', obj);
        });
    </script>
@endpush
