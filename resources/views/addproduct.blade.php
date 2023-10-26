<!--extending layouts.main here-->
@extends('layouts.main')

<!--pushing title here-->
@push('title')
AddProduct
@endpush
<!--pushing title ends here-->

<!--addproduct-section starts here-->
@section('addproduct');
    <!--main-categorious starts here-->
    <div class="main-categorious">
        <!--if-else starts here-->
        @if(session('Success'))
        {{session('Success')}}
        @elseif(session('errorr'))
        {{session('errorr')}}
        @else
        {{session('error')}}
        @endif
        <!--if-else ends here-->

        <!--main-content starts here-->
        <div class="main-content">

            <!--layouts.leftlist starts here-->
            @include('layouts.leftlist')
            <!--layouts.leftlist ends here-->

            <!--contact starts here-->
            <div class="contact">
                <!--contact-us starts here-->
                <div class="contact-us">
                    @foreach($products as $items)
                    <p>{{$items->pname}}</p>
                </div>
                <!--contact-us ends here-->
                <!--dish-info starts here-->
                <div class="dish-info">

                    <!--machine-pic starts here-->
                    <div class="machine-pic">
                        <!--img starts here-->
                        <div class="img">
                            <img src="{{asset($items->pimage)}}">
                        </div>
                        <!--img ends here-->
                        <!--stock starts here-->
                        <div class="stock">
                            <p>In Stock:{{$items->pstock}}</p>
                        </div>
                        <!--stock ends here-->
                    </div>
                    <!--machine-pic ends here-->

                    <!--machine-info starts here-->
                    <div class="machine-info">
                        <!--washer starts here-->
                        <div class="washer">
                            <p>{{$items->pname}}</p>
                        </div>
                        <!--washer ends here-->

                        <!--model-info starts here-->
                        <div class="model-info">
                            <span>Model:{{$items->pname}}</span>
                            <p>Manufacturer:{{$items->description}}</p>
                        </div>
                        <!--model-info ends here-->

                        <!--form starts here-->
                        <form method="post" action="{{route('cart_add')}}">
                            @csrf
                            <!--quantity starts here-->
                            <div class="quantity">
                                <table>
                                    <tr>
                                        <td><input type="hidden" name="userid" value="{{$userId}}"></td>
                                        <td><input type="hidden" name="productid" value="{{$items->id}}"></td>
                                        <td><input type="hidden" name="productstock" value="{{$items->pstock}}"></td> 
                                        <td class="qty">Enter quantity</td>
                                        <td><input type="text" name="quantity"></td>
                                    </tr>
                                </table>
                                <!--price starts here-->
                                <div class="price">
                                    <span>Rs. {{$items->pprice}}</span>
                                </div>
                                <!--price ends here-->
                            </div>
                            <!--quantity ends here-->
                            <!--cart starts here-->
                            <div class="cart">
                                <input type="submit" name="addcart" value="Add to Cart">
                            </div>
                            <!--cart ends here-->
                        </form>
                        <!--form ends here-->

                        <!--checkout starts here-->
                        <div class="checkout">
                            <input type="submit" name="" value="checkout">
                        </div>
                        <!--checkout ends here-->
                    </div>
                    <!--machine-info ends here-->
                </div>
                <!--dish-info ends here-->
                @endforeach

                <!--info starts here-->
                <div class="info">
                    <form>
                        <!--table-info starts here-->
                        <table class="table-info">
                            <tr>
                                <td class="nme">Enter name</td>
                                <td><input type="" name=""></td>
                            </tr>
                            <tr>
                                <td class="nme">Enter Email</td>
                                <td><input type="" name=""></td>
                            </tr>
                            <tr>
                                <td class="nme">Enter Review</td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td class="nme">Rating</td>
                                <td><input type="" name=""></td>
                            </tr>
                            <tr>
                                <td class="btnn-1">
                                    <input type="submit" name="" value="Submit query">
                                </td>
                            </tr>
                        </table>
                        <!--table-info ends here-->
                    </form>
                </div>
                <!--info ends here-->
            </div>
            <!--contact ends here-->
        </div> 
        <!--main-content ends here-->
    </div>   
    <!--main-categorious starts here-->
@endsection
<!--addproduct-section ends here-->