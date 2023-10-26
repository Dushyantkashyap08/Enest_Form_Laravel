<!--categorious starts here-->
<div class="categorious">
    <!--cate-heading starts here-->
    <div class="cate-heading">
        <p>CATEGORIES</p>
    </div>
    <!--cate-heading ends here-->

    <!--items starts here-->
    <div class="items">
        <ul>
            @foreach ($data as $item)
            <li><a href="{{url('buynow/'.$item->id)}}">{{$item->categoryname}}</a></li>
            @endforeach
        </ul>
    </div>
    <!--items ends here-->
</div>
<!--categorious ends here-->
