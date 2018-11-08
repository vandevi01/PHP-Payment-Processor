@include('header')
<div class='container main-box'>
    <div class='row'>
        <div class='col-md-12'>
            <div id='mainContentWrapper'>
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="title">
                        Review Your Order &amp; Complete Checkout
                    </h2>
                    <div class="shopping_cart">
                        <form class="form-horizontal" role="form" action="{{route('saveCheckout')}}" method="post" id="payment-form">
                            @csrf
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Review Your Order</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="items">
                                                <table class="table">
                                                    <thead>
                                                    <tr class="product-heading">
                                                        <th>
                                                            <h3>Product Details</h3>
                                                        </th>
                                                        <th width="30%" class="text-right">
                                                            <h3>Price</h3>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tr>
                                                        <td>
                                                            {{--<a class="btn btn-warning btn-sm pull-right" href="#" title="Remove Item">X</a>--}}
                                                            <h4>Product 1</h4>
                                                            <p class="product-desc">Includes One Job Posting Credit, Job Distribution</p>

                                                        </td>
                                                        <td width="30%" class="text-right">
                                                            <h4>${{round(session('orderAmount'),2) - 5}}</h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            {{--<a class="btn btn-warning btn-sm pull-right" href="#" title="Remove Item">X</a>--}}
                                                            <h4>Product 2</h4>
                                                            <p  class="product-desc">Includes Social Media Distribution</p>
                                                        </td>
                                                        <td width="30%" class="text-right">
                                                            <h4>${{round(session('orderAmount'),2) - 10}}</h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h3>Order Total</h3>
                                                        </td>
                                                        <td width="30%" class="text-right">
                                                            <h3><span class="text-green">${{round(session('orderAmount'),2)}}</span></h3>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <button type="button" class="btn btn-success btn-lg cart-info-btn" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class=" btn btn-success" onclick="$(this).fadeOut(); $('#payInfo').fadeIn();">Continue to Billing Information &raquo;</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Contact and Billing Information</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p class="product-heading">Help us keep your account safe and secure, please verify your billing information.</p>
                                        <table class="my-table">
                                            <tr>
                                                <td class="label-width-175">
                                                    <label for="fname">First name:</label></td>
                                                <td>
                                                    <input class="form-control" id="fname" name="fname"
                                                           required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label-width-175">
                                                    <label for="lname">Last name:</label></td>
                                                <td>
                                                    <input class="form-control" id="lname" name="lname"
                                                           required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label-width-175">
                                                    <label for="company">Company:</label></td>
                                                <td>
                                                    <input class="form-control" id="company" name="company"
                                                           required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label-width-175">
                                                    <label for="addy1">Address Line 1:</label></td>
                                                <td>
                                                    <input class="form-control" id="addy1"
                                                           name="addy1" required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label-width-175">
                                                    <label for="addy2">Address Line 2:</label></td>
                                                <td>
                                                    <input class="form-control" id="addy2"
                                                           name="addy2" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label-width-175">
                                                    <label for="city">City:</label></td>
                                                <td>
                                                    <input class="form-control" id="city" name="city"
                                                           required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label-width-175">
                                                    <label for="state">State:</label></td>
                                                <td>
                                                    <select class="form-control" id="state" name="state">
                                                        <option value="AK">Alaska</option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="CA">California</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="DC">Washington D.C.</option>
                                                        <option value="WV">West Virginia</option>
                                                        <option value="WI">Wisconsin</option>
                                                        <option value="WY">Wyoming</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label-width-175">
                                                    <label for="zip">Zip:</label></td>
                                                <td>
                                                    <input class="form-control" id="zip" name="zip"
                                                           required="required" type="text"/>
                                                </td>
                                            </tr>
                                        </table>

                                        <button type="button" class="btn btn-success btn-lg personal-info-btn" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" id="payInfo" onclick="$(this).fadeOut();document.getElementById('collapseThree').scrollIntoView()">Enter Payment Information &raquo;</button>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            <b>Payment Information</b>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <span class='payment-errors'></span>
                                        <p class="product-heading">What method would you like to pay with today?</p>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="card-holder-name">Name on
                                                Card</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="cardName" class="form-control" stripe-data="name"
                                                       id="name-on-card" required="required" placeholder="Card Holder's Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="card-number">Card
                                                Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" stripe-data="number"
                                                       id="card-number" name="cardNo" required="required" placeholder="Debit/Credit Card Number">
                                                <br/>
                                                <div><img src="img/cc.png" class="cc-img">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="expiry-month">Expiration
                                                    Date</label>
                                                <div class="col-sm-9">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <select class="form-control col-sm-2"
                                                                    data-stripe="exp-month" id="card-exp-month" name="exMo" required="required">
                                                                <option>Month</option>
                                                                <option value="01">Jan (01)</option>
                                                                <option value="02">Feb (02)</option>
                                                                <option value="03">Mar (03)</option>
                                                                <option value="04">Apr (04)</option>
                                                                <option value="05">May (05)</option>
                                                                <option value="06">June (06)</option>
                                                                <option value="07">July (07)</option>
                                                                <option value="08">Aug (08)</option>
                                                                <option value="09">Sep (09)</option>
                                                                <option value="10">Oct (10)</option>
                                                                <option value="11">Nov (11)</option>
                                                                <option value="12">Dec (12)</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <select class="form-control" data-stripe="exp-year" name="exYr" required="required"
                                                                    id="card-exp-year">
                                                                <option>Year</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="cvv">Card CVC</label>
                                                <div class="col-sm-3">
                                                    <input type="text" name="cardCode" required="required" class="form-control" stripe-data="cvc"
                                                           id="card-cvc" placeholder="Security Code">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg cart-pay-btn">Pay Now</button>
                                        <br/>
                                        <div><br/>
                                            By submiting this order you are agreeing to our <a href="#">universal
                                                billing agreement</a>, and <a href="#">terms of service</a>.
                                            If you have any questions about our products or services please contact us
                                            before placing this order.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('footer')