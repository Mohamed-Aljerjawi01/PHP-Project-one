@extends('SiteFive.master')

@section('content')
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    
                    <!-- 
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">A simple danger alert—check it out!</div>
                    @endif 
                    -->
                    
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
               
                </div>
                <form id="contactForm" method="post" action="{{ route('site5.postcontact') }}" enctype="multipart/form-data">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- hidden input ==> old way to create token to form -->
                                <input type="hidden" name="_token" value=" {{ csrf_token() }} "/>
                            </div>
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" type="text" name="name" placeholder="Your Name *" />
                                
                                @error('name')
                                    <small style='color: red;'>{{ $message }}</small>
                                @enderror
                            
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" type="email" name="email" placeholder="Your Email *" required/>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control is-invalid" type="tel" name="phone" placeholder="Your Phone : 012-3-456-789"/>

                                @error('phone')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror

                            </div>

                            <div class="form-group mb-md-0" style="margin-top: 20px;">
                                <!-- file input-->
                                <input class="form-control" type="file" name="image"/>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control @error('massege') is-invalid  @enderror" name="massege" placeholder="Your Message *"></textarea>
                                
                                @error('massege')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
@stop