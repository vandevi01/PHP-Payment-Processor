@include('header')
    <div class='container main-popup'>
        <div class='row' style='padding-top:25px; padding-bottom:25px;'>
            <div class='col-md-12'>
                <div id='mainContentWrapper'>
                    <div class="col-md-8 col-md-offset-2">
                        <h3 style="text-align: center;">
                            Sorry, your Payment was Unsuccessful.
                        </h3>
                        <hr/>
                        <h4 style="text-align: center;">Kindly try again in some time...</h4>
                        <hr />
                        <button type="button" class="btn btn-success btn-lg cart-info-btn" onclick="document.location='{{route("checkoutPage")}}';">Back to Home &raquo;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('footer')