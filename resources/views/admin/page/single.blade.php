
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
@foreach($musics as $music)
    <div class="jp-playlist">
                <ul style="display: block;">
                    <li class="jp-playlist-current">
                        <div>
                            <a id="song{{ $music->id }}" onclick="song({{ $music->id }})" data-url="{{ $music->path }}" href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">{{ $serial = $serial + 1 }}.{{$music->name}}
                            </a>
                        </div>
                    </li>
                </ul>
    </div>
@endforeach
<div class="response">
    
    <h4>Description</h4>
    
    @foreach($artists as $artist)
    <div class="col-md-3 content-grid">
        <div class="media-left response-text-left">
            <a href="{{ route('single',$artist->id)}} ">
            <div class="col-md-3 content-grid">
                <img src=" {{ $artist->image }} ">
            </div>  
            </a>
            <h5><a href="{{ route('single',$artist->id )}} ">{{$artist->artist_name}}</a></h5>
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
{{ $artists->links() }}
<!--//music-right-->
<div class="coment-form"> </div>

@endsection
