

@extends('frontend.trangchu')
@section('content')
<div id="page-wrapper">
<div class="inner-content">
    <div class="music-browse">
        <!--albums-->
        <!-- pop-up-box --> 
        <link href="source/css/popuo-box.css" rel="stylesheet" type="text/css" media="all">	
        <!--//pop-up-box -->
        <div class="browse">
            <div class="tittle-head two">
                <h3 class="tittle">New Album <span class="new">New</span></h3>
                <a href="{{ route('browse')}} ">
                    <h4 class="tittle third">See all</h4>
                </a>
                <div class="clearfix"> </div>
            </div>
            @foreach($songs as $song)
            <div class="col-md-3 content-grid">
                @foreach($song->artists as $artist)
                <a  href="{{ route('single', $song->id)}} "><img src="{{ $artist->image}}" title="allbum-name"></a>
                @endforeach
                <a href="{{ route('single', $song->id)}} "></a>
                <a class="sing" href="{{ route('single', '$song->id')}} ">{{$song->name}}</a>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
        <!--//End-albums-->
        
        <!--//End-albums-->
        <!--//discover-view-->
        <!--//music-left-->
    </div>
    <!--body wrapper start-->
    
</div>
<div class="clearfix"></div>
<!--body wrapper end-->
<!-- /w3l-agile-info -->
@endsection
