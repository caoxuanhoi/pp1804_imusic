<div class="profile_details">
    <div class="col-md-4 serch-part">
        <div id="sb-search" class="sb-search">
            <form action="#" method="post">
                <input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
                <input class="sb-search-submit" type="submit" value="">
                <span class="sb-icon-search"> <img src="source/image/search.png" /></span>
            </form>
        </div>
    </div>
    <!-- search-scripts -->
    <script src="source/js/classie.js"></script>
    <script src="source/js/uisearch.js"></script>
    <script>
        new UISearch( document.getElementById( 'sb-search' ) );
    </script>
    <!-- //search-scripts -->
    <!---->
    <div class="col-md-4 player">

        <div class="audio-player">

        <audio id="head_music" controls="controls" preload="auto">
<i>Your browser does not support the audio element.</i>
</audio>

            <!-- <audio controls="controls">
                <source  id="head_music" src="" type="audio/mp3" />
            </audio> -->
        </div>
    </div>
    <div class="col-md-4 login-pop">
        <div id="loginpop">
            <a href="{{ route('login') }}" id="loginButton"><span>Login </span></a><a class="top-sign" href="{{ route('register') }}" data-toggle="modal" data-target="#myModal5"><img src="source/image/user.png" /></a>
            <div id="loginBox">
                <form action="#" method="post" id="loginForm">
                    <fieldset id="body">
                        <fieldset>
                            <label for="email">Email Address</label>
                            <input type="text" name="email" id="email">
                        </fieldset>
                        <fieldset>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </fieldset>
                        <input type="submit" id="login" value="Sign in">
                        <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                    </fieldset>
                    <span><a href="#">Forgot your password?</a></span>
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-------->
</div>
<div class="clearfix"></div>
