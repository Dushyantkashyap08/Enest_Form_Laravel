<!--extending layouts.main here-->
@extends('layouts.main')

<!--pushing title here-->
    @push('title')
        home
    @endpush
<!--pushing title ends here-->    

<!--home-section starts here-->
@section('home')

    <!--main-categorious starts here-->
    <div class="main-categorious">

        <!--main-content starts here-->
        <div class="main-content">
            <!--main-img starts here-->
            <div class="main-img">
                <img src="assets/images/16.png">
            </div>
            <!--main-img ends here-->

            <!--layout.leftlist starts here-->
            @include('layouts.leftlist')
            <!--layout.leftlist ends here-->
            
            <!--contact starts here-->
            <div class="contact">

                <!--contact-us starts here-->
                <div class="contact-us">
                    <p>FEATURED PRODUCTS</p>
                </div>
                <!--contact-us ends here-->

                @foreach($products as $product)
                    <!--Camera-info starts here-->
                    <div class="Camera-info">
                        <!-- samsung-cam starts here-->
                        <div class="samsung-cam">

                            <!-- cam-info starts here-->
                            <div class="cam-info">
                                <img src="{{asset($product->pimage)}}">

                                <!-- sam-prc starts here-->
                                <div class="sam-prc">
                                    <span>{{$product->pname}}</span>
                                    <p>Rs.{{$product->pprice}}</p>
                                </div>
                                <!-- sam-prc ends here-->

                                <hr class="hr2">

                                <!--cart-btn starts here-->
                                <div class="cart-btn">
                                    <i class="fa fa-plus-circle iconn" aria-hidden="true"></i>
                                    <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    <input type="submit" name="" value="Add to cart">
                                </div>
                                <!-- cart-btn ends here-->

                            </div>
                            <!-- cam-info ends here-->

                        </div>
                        <!-- samsung-cam ends here-->

                    </div>
                    <!-- camera-info ends here-->
                @endforeach

            </div>
            <!--contact ends here-->

        </div>
        <!--main-content ends here-->

    </div>        
    <!--main-categorious ends here-->
    
@endsection
<!--home-section ends here-->