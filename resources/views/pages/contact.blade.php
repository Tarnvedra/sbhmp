@extends('welcome')


@section('content')

<div class="container pt-5">
    <h2 class="pt-5">Contact<span class="text-muted"></span></h2>

    <div class="col-md-5 pb-5 pt-5">
        <h6 class="pb-3">Hand crafted pictures made with care and love</h6>
        <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/aboutsb.jpg') }}" data-src="holder.js/500x500/aut" alt="Generic placeholder image">
      </div>

    <form id="contact-form" method="post" action="#" role="form">

        <div class="messages"></div>

        <div class="controls">

            <div class="row pt-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_name" class="font-weight-bold">Firstname *</label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_lastname" class="font-weight-bold">Lastname *</label>
                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_email"class="font-weight-bold">Email *</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_subject"class="font-weight-bold">Subject</label>
                        <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Please enter your subject">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_message" class="font-weight-bold">Message *</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted font-weight-bold" >* These fields are required.</p>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
