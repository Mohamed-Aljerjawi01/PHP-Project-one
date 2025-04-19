@extends('SiteTwo.master')
@section('content')
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>

                <form id="contactForm" method="post" action="{{ route('site2.postcontact') }}">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- hidden input ==> old way to create token to form -->
                                <input type="hidden" name="_token" value=" {{ csrf_token() }} "/>
                            </div>
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" type="text" name="name" placeholder="Your Name *" data-sb-validations="required" />
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" type="email" name="email" placeholder="Your Email *" data-sb-validations="required,email" />
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" type="tel" name="phone" placeholder="Your Phone *" data-sb-validations="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" name="massege" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
@stop