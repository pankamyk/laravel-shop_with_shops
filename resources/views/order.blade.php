@extends('layouts.app')

@section('content')
<div class="container">
    @if($total)
    <div class="container">
      
        <ul class="nav nav-tabs nav-fill" id="tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="data-tab" data-toggle="tab" href="#personaldata" role="tab" aria-controls="Personal data" aria-selected="true">Personal data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="delivery-tab" data-toggle="tab" href="#delivery" role="tab" aria-controls="Delivery method" aria-selected="false">Delivery method</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="Payment" aria-selected="false">Payment</a>
            </li>
        </ul>

        <form>
            <div class="tab-content bg-white" id="TabContent">
                <div class="tab-pane fade show active" id="personaldata" role="tabpanel" aria-labelledby="home-tab">
                    <div class="container pt-3">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="surname" placeholder="Surname">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                            <small id="emailHelp" class="form-text text-muted">We'll send details to this address.</small>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="address" aria-describedby="addressHelp" placeholder="Address">
                            <small id="addressHelp" class="form-text text-muted">Enter your street name followed by your home number.</small>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="postalcode" placeholder="Postal Code">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="city" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="country" placeholder="Country">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="number" placeholder="Phone number">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="container pt-3">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="container">
                                        <input class="form-check-input" type="radio" name="delivery" id="delivery1" value="pickup" checked>
                                    </div>         
                                </td>
                                <td>Personal pickup</td>
                                <td>Free!</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="container">
                                        <input class="form-check-input" type="radio" name="delivery" id="delivery2" value="dpd">
                                        <label class="form-check-label" for="delivery2">
                                            <b>DPD</b>
                                        </label>
                                    </div>
                                </td>
                                <td>Courier</td>
                                <td>Free!</td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="form-group">
                            <input type="text" class="form-control" id="comment" aria-describedby="commentHelp" placeholder="Additional comments">
                            <small id="commentHelp" class="form-text text-muted">If you have anny additional comments for your order, please leave them here</small>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="container py-3">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="container">
                                        <input class="form-check-input" type="radio" name="payment" id="payment1" value="cash" checked>
                                    </div>         
                                </td>
                                <td>Cash on delivery</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="container">
                                        <input class="form-check-input" type="radio" name="payment" id="payment2" value="card">
                                    </div>
                                </td>
                                <td>Credit card</td>
                            </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Order</button>
                    </div>
                </div>
            </div>
        </form>
      
    </div>
    @else
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Your cart is empty!
            </div>
        </div>
    </div>
    @endif
</div>
@endsection