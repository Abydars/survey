@extends('layouts.home')

@section('title', 'Contact Us')

@section('content')

    <!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
        <div class="container">
            <div class="gt_sub_banner_hdg  default_width">
                <h3>Contact Us</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">
        <section class="gt_c_bg">
            <!--Contact Info Wrap Start-->
            <div class="container">
                <div class="gt_contact_info_outer_wrap">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="gt_contact_info_element_wrap">
                                <i class="fa fa-map-marker"></i>
                                <h5>ADDRESS</h5>
                                <p>{{ $contact->address }}</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="gt_contact_info_element_wrap active">
                                <i class="fa fa-phone"></i>
                                <h5>Phone Number</h5>
                                <p>{{ $contact->number }}</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="gt_contact_info_element_wrap">
                                <i class="fa fa-envelope-o"></i>
                                <h5>Email Address</h5>
                                <p>{{ $contact->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Contact Info Wrap End-->

           
            <!--Map Wrap Start-->
            <div class="default_width">
                <div class="map-canvas gt_contact_us_map" id="map-canvas"></div>
                <!--Map Wrap End-->
                <div class="gt_form_map">
                    <div class="gt_hdg_1">
                        <h3>Send Us a Message</h3>
                    </div>
                    
                    <div class="gt_hdg_1">
                         @if (session()->has('message'))
		                <div class="alert alert-{!! session()->get('type')  !!} alert-dismissable">
		                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                    {!! session()->get('message')  !!}
		                </div>
		            @endif
		
		            @if($errors->any())
		                @foreach ($errors->all() as $error)
		
		                    <div class="alert alert-danger alert-dismissable">
		                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                        {!!  $error !!}
		                    </div>
		                @endforeach
		            @endif
                    </div>
                    
                   
                    
                    <form class="gt_contact_form" id="contact-form" action="{{ route('contact-send') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-4">
                            <div class="gt_contact_us_field">
                                <input class="c_ph" type="text" placeholder="Your Name" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gt_contact_us_field">
                                <input class="c_ph" type="text" placeholder="Email Address:" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gt_contact_us_field">
                                <input class="c_ph" type="text" placeholder="Phone Number" id="subject" name="phone" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="gt_contact_us_field">
                                <textarea class="gt_c_bg" name="message" id="message" placeholder="Write Your Message here...!" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="gt_contact_us_field">
                                <input id="submit-message" type="submit" value="Send Now" name="submit_msg">
                            </div>
                            <!--Alert Message-->
                            <div id="contact-result">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!--Main Content Wrap End-->

@endsection