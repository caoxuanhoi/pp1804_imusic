
@extends('frontend.trangchu')
@section('content')
<div id="page-wrapper">
    <div class="inner-content">
        <div class="music-browse">
            <!--albums-->
            <!-- pop-up-box --> 
            <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">	
            <!--//pop-up-box -->
            <div class="browse">
                <div class="tittle-head two">
                    <h3 class="tittle">Artist <span class="new">New</span></h3>
                    <a href="{{ route('radio')}} ">
                        <h4 class="tittle third">See all</h4>
                    </a>
                    <div class="clearfix"> </div>
                </div>
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">                   
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                            <div class="browse-inner">
                                <!-- /agileits -->
                                @foreach($songs as $song)
                                <div class="col-md-3 content-grid">
                                    @foreach($song->artists as $artist)
                                        <a  href="{{ route('single',$artist->id) }} "><img src="{{ $artist->image }}"></a>
                                    
                                    <a class="button popup-with-zoom-anim" href="{{ route('single',$artist->id) }} "> {{$artist->artist_name}} </a>
                                    @endforeach
                                </div>
                                @endforeach
                                
                                <div class="clearfix"> </div>
                                {{ $songs->links() }}

                            </div>
                        </div>
                        
                        
                        </div>
                    </div>
                </div>
                <!-- /agileinfo -->
            </div>
            <!--//End-albums-->
            <!--//discover-view-->
            <div class="albums fourth">
                <div class="tittle-head two">
                    <h3 class="tittle">Albums <span class="new">View</span></h3>
                    <div class="clearfix"> </div>
                </div>
                
                @foreach($albums as $album)
                <div class="col-md-3 content-grid">
                    <a href="{{ route('browse') }}"><img src="{{ $album->image }}" title="{{ $album->album_name}}"></a>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--//discover-view-->
        <!--//music-left-->
    </div>
    <!--body wrapper start-->
    
</div>
<div class="clearfix"></div>
<!--body wrapper end-->
<!-- /w3layouts-agile -->
</div>
</div>
@endsection
