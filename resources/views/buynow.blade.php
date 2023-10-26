<!--extending layouts.main here-->
@extends('layouts.main')

<!--pushing title here-->
@push('title')
Buynow
@endpush
<!--pushing title ends here-->

<!--buynow-section starts here-->
@section('buynow')
    <!--main-categorious starts here-->
    <div class="main-categorious">

        <!--main-content starts here-->
        <div class="main-content">

            <!--layouts.leftlist starts here-->
            @include('layouts.leftlist')
            <!--layouts.leftlist ends here-->

            <!--contact starts here-->
            <div class="contact">
                <!--contact-us starts here-->
                <div class="contact-us">
                    @foreach($category as $item)
                        <p>{{$item->categoryname}}</p>
                    @endforeach
                </div>
                <!--contact-us ends here-->
                <!--product-info starts here-->
                <div class="product-info">
                    <span>Sort by:</span>
                    <form>
                        <select>
                            <option>product name</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </form>
                </div>
                <!--product-info ends here-->
                <!--display-product starts here-->
                <div class="display-product">
                    <span>Displaying 1 to 5 (of 6 new products)</span>
                    <div class="btnnn">
                        <input class="pre" type="submit" name="" value="Previous">
                        <input class="nxt" type="submit" name="" value="Next">
                    </div>
                </div>
                <!--display-product ends here-->
                @foreach($product as $item)

                <!--dish-info starts here-->
                <div class="dish-info">

                    <!--machine-pic starts here-->
                    <div class="machine-pic">
                        <!--img starts here-->
                        <div class="img">
                            <img src="{{asset($item->pimage)}}">
                        </div>
                        <!--img ends here-->
                        <!--stock starts here-->
                        <div class="stock">
                            <p>In Stock: {{$item->pstock}}</p>
                        </div>
                        <!--stock ends here-->
                    </div>
                    <!--machine-pic ends here-->

                    <!--machine-info starts here-->
                    <div class="machine-info">
                        <!--date starts here-->
                        <div class="date">
                            <span> Date:{{\Carbon\Carbon::now()->format('jS F Y')}}</span>
                        </div>
                        <!--date ends here-->
                       <!--washer starts here-->
                        <div class="washer">
                            <p>{{$item->pname}}</p>
                        </div>
                        <!--washer ends here-->
                        <!--model-info starts here-->
                        <div class="model-info">
                            <span>Model: {{$item->pname}}</span>
                            <p>Manufacturer: {{$item->pname}}</p>
                        </div>
                        <!--model-info ends here-->
                        <!--price starts here-->
                        <div class="price">
                            <span>Rs.{{$item->pprice}}</span>
                        </div>
                        <!--price ends here-->
                        <!--checkout starts here-->
                        <div class="checkout">
                            @if (!Auth::guard('signup')->check())
                                <!-- Show the "Login First" button when the user is not authenticated -->
                                <a href="{{ url('/') }}">
                                    <input type="button" value="Login First">
                                </a>
                            @else
                                <a href="{{ url('addproduct/' . $item->id) }}">
                                    <input type="button" value="Buy Now">
                                </a>
                            @endif
                        </div>
                        <!--checkout ends here-->
                    </div>
                    <!--machine-info ends here-->
                    
                </div>
                <!--dish-info ends here-->
                @endforeach
            </div>
            <!--dcontact ends here-->
        </div>
        <!--main-content ends here-->
    </div>
    <!--main-categorious ends here-->
@endsection
<!--buynow-section ends here-->
