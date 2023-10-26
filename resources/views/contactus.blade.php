<!--extending layouts.main here-->
@extends('layouts.main')

<!--pushing title here-->
    @push('title')
        Contact Us
    @endpush
<!--pushing title ends here-->  

<!--contactus-section starts here-->
@section('contactus')
    <!--main-categorious starts here-->
    <div class="main-categorious">
        <!--main-contact starts here-->
        <div class="main-contact">
        
            <!--layouts.leftlist starts here-->
            @include('layouts.leftlist')
            <!--layouts.leftlist ends here-->

            <!--contact starts here-->
            <div class="contact">
                <!--contactus starts here-->
                <div class="contact-us">
                    <p>CONTACT US</p>
                </div>
                <!--contactus ends here-->

                <!--customer-info starts here-->
                <div class="costomer-info">
                    <!--cutomer-service starts here-->
                    <div class="costomer-service">
                        <p>Customer Service:91 7508115758</p>
                        <p>Ludhiana,Punjab,INDIA</p>
                        <p>Yorex Infotec.</p>
                    </div>
                    <!--customer-service ends here-->
                    <hr class="hr">
                    <!--info starts here-->
                    <div class="info">
                        <div class="required-info">
                            <h4>Contact Us</h4>
                            <p>Have a question? We have 24x7 Costomer Service.</p>
                            <p>Befor you contact us,skim through our self Serve opton and Frequently Asked Question for Quicker answer.</p>
                            <p>Want to know more about the status of the orders?</p>
                            <p>Login to view our order.</p>
                        </div>
                    </div>
                    <!--info ends here-->

                    <!--border starts here-->
                    <div class="border">
                        <!--border-1 starts here-->
                        <div class="border-1">
                            <!--border-2 starts here-->
                            <div class="border-2">
                                <p>Contact Us</p>
                            </div>
                            <!--border-2 ends here-->
                            <!--requir-info starts here-->
                            <div class="requir-info">
                                <span>*Required information</span>
                            </div>
                            <!--requir-info ends here-->

                            <!--input-info starts here-->
                            <div class="input-info">
                                <!--input-information starts here-->
                                <div class="input-information">
                                    <!--form starts here-->
                                    <form>
                                        <table class=" form">
                                            <tr>
                                                <td ><p>full Name* </p></td>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <tr>
                                                <td > <p>E-mail Address </p></td>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <tr>
                                                <td> <p>Message</p></td>
                                                <td><textarea></textarea></td>
                                            </tr>
                                        </table>
                                    </form>
                                    <!--form ends here-->
                                </div>
                                <!--input-information ends here-->
                            </div>
                            <!--input-info ends here-->
                        </div>
                        <!--border-1 ends here-->
                    </div>
                    <!--border ends here-->

                    <!--snd-btn starts here-->
                    <div class="snd-btn">
                        <button>Send Now</button>
                    </div>
                    <!--snd-btn ends here-->
                </div>
                <!--customer-info ends here-->
            </div>
            <!--contact ends here-->
        </div>
        <!--main-contact ends here-->
    </div>      
    <!--main-categorious ends here-->  
@endsection
<!--contactus-section ends here-->