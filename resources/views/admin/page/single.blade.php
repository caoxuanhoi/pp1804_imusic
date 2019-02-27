
@extends('frontend.trangchu')
@section('content')
<!-- //header-ends -->
<div id="page-wrapper">
<div class="inner-content single">
<!--/music-right-->
<div class="tittle-head">
    <h3 class="tittle">Single <span class="new">Page</span></h3>
    <div class="clearfix"> </div>
</div>
<div class="single_left">
    <!--/video-main-->
    <div class="video-main">
        <div class="video-record-list">
            <div id="jp_container_1" role="application" aria-label="media player">
                <div class="jp-type-playlist">
                    
                    <div class="jp-gui">
                        
                        <div class="jp-interface">
                            <div class="jp-progress">
                                <div class="jp-seek-bar" style="width: 100%;">
                                    <div class="jp-play-bar" style="width: 0%;"></div>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="jp-no-solution" style="display: none;">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- script for play-list -->
    <link href="css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="source/js/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="source/js/jplayer.playlist.min.js"></script>
    <script type="text/javascript">       
    </script>
    <!-- //script for play-list -->
    <!--//video-main-->
    <!-- /agileinfo -->
</div>

<div class="response">
    
    <h4>Responses</h4>
    @foreach($artists as $artist)
    <div class="media response-info">
        <div class="media-left response-text-left">
            <a href="{{ route('single','$artist->id')}} ">
            <img class="media-object" src=" {{$artist->image}} ">
            </a>
            <h5><a href="{{ route('single','$artist->id')}} ">{{$artist->artist_name}}</a></h5>
        </div>
        <div class="media-body response-text-right">
            <p>{{$artist->description}}</p>
            <ul>
                <li>{{$artist->birthday}}</li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
   @endforeach
</div>
<!-- /agileits -->
<div class="clearfix"> </div>
<!--//music-right-->
<div class="coment-form">
>
@endsection
