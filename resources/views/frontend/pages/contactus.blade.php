{{-- @extends('frontend.master')

@section('content')
<br>



<section class="mb-4 mt-5 me-auto ms-5">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Us</h2>
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
        directly. Our team will come back to you within a matter of hours to help you throughout by email.</p>
    <form action="{{ route('contactus.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mx-5 my-auto">
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <label for="contact" class="">Contact</label>
                    <input type="number" id="contact" name="contact" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="md-form mb-0">
                    <label for="email" class="">Your email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
            </div>

            <div class="col-md-12">
                <div class="md-form mb-0">
                    <label for="topic" class="">Topic</label>
                    <input type="text" id="topic" name="topic" class="form-control">
                </div>
            </div>

            <div class="col-md-12">
                <div class="md-form">
                    <label for="message">Your message</label>
                    <textarea type="text" id="message" name="message" rows="2"
                        class="form-control md-textarea"></textarea>
                </div>
            </div>
        </div>


            <button type="submit" class="btn btn-primary text-center">Submit</button>

    </form>
        <div class="status"></div>
</section>


@endsection --}}


@extends('frontend.master')
 @section('content')
<br> <br> <br>
 <div class="container mb-5">
    <h2>Share Your Opinion </h2>
    <form action="{{ route('contactus.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="tel" pattern="[0-9]{1,13}" class="form-control" id="" name="contact" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="" name="email" required>
        </div>
        <div class="form-group">
            <label for="topic">Topic:</label>
            <input type="text" class="form-control" id="" name="topic" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <input type="text" class="form-control" id="" name="message" required>
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
 @endsection
