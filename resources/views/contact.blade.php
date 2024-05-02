@include('include.header')
 <style>
    @media(max-width:600px){
        .contact-info-wrap {
            margin:41px;
        }
    }
 </style>
<div id="colorlib-contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 style="background-color: #88c8bc;border-radius:4px;  text-align:center;  color:white;"> Contact
                    Information</h2>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-wrap">
                    <h3>Get In Touch</h3>
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname" style="color: black;">First Name</label>
                                    <input type="text" id="fname" class="form-control"
                                        placeholder="Your firstname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname" style="color: black;">Last Name</label>
                                    <input type="text" id="lname" class="form-control"
                                        placeholder="Your lastname">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email" style="color: black;">Email</label>
                                    <input type="text" id="email" class="form-control"
                                        placeholder="Your email address">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="subject" style="color: black;">Subject</label>
                                    <input type="text" id="subject" class="form-control"
                                        placeholder="Your subject of this message">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message" style="color: black;">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                        placeholder="Say something about us"></textarea>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div id="map" class="colorlib-map py-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29772.40738889122!2d79.07871802879508!3d21.130462700360933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4b97b07c1fed7%3A0x4f7666ae4d74ee26!2sVEIN%20HEALTHCARE%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1686916901259!5m2!1sen!2sin"
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="row contact-info-wrap" style="margin-top: 37px; margin-left:66px;">
                        <div class="">
                            <p style="color: black; font-size:17px;"><span><i
                                        class="fa-solid fa-location-dot"></i></span> Lab Addr. / Corp Off.
                                Plot No. 786A, Om Nagar,Sudampuri, Behind Shree Hospital, Sakkardara, Nagpur - 440009.
                            </p>
                        </div>
                        <div class="">
                            <p><span><i class="icon-phone3"></i></span> <a style="color: black; font-size:21px;"
                                    href="tel://+91 7350012241">+91 7350012241</a></p>
                        </div>
                        <div class="">
                            <p><span><i class="icon-paperplane"></i></span> <a style="color: black; font-size:21px;"
                                    href="mailto:info@veinhealthcarelab.com">info@veinhealthcarelab.com</a></p>
                        </div>
                        {{-- <div class="col-md-3">
                            <p><span><i class="icon-globe"></i></span> <a href="#">yoursite.com</a></p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('include.footer')
