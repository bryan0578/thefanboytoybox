@extends('layouts.app')
@section('title') Profile :: @parent @stop
@section('content')
  <div class="photos-container">
            <div class="cover-photo">
                <img src="img/Cincinnati-Skyline-Header.jpg" width="1060" >
            </div>    
            <div class="profile-photo">
                <img class="img-circle" src="img/me4v2.png">
            </div>
        </div> 
        <div class="welcome-message">
            <h1>Welcome to Darth Bryan's Page</h1>
        </div> 
        <div class="row">
            <div class="col-sm-6">

                <div class="profile-content"> 
                    <nav class="profile-nav">
                        <ul>
                            <li><a href=""><h2>Bio</h2></a></li> 
                            <li><a href=""><h2>Images</h2></a></li>
                            <li><a href=""><h2>Stories</h2></a></li> 
                        </ul> 
                    </nav>
                    <p>Hi, my name is Bryan. I love to collect all things Star Wars. Everything from toys to collectible glasses. When I was a kid I had so many Star Wars toys that I was litterally disappointed at Christmas and my birthday because my family would try to buy me more Star Wars toys but I already had whatever they had bought for me. I started collecting again a few years ago and have recovered a few vintage treasures, but I am also collecting newer items as well. I  also love going to conventions, I have met Billy Dee Williams, Peter Mayhew(Chewbacca), Jeremy Bulloch(Boba Fett), and Ray Park(Darth Maul). Check out my pictures to see my autographs and photo ops.</p> 
                    <button>EDIT</button>
                </div>
            </div>
                <div class="col-sm-6">
                    <div id="carousel-id" class="carousel slide" data-interval="false">
                         <h2>Collectors</h2>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-id" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                
                                <div class="collectors">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                         <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                         <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                
                                <div class="collectors">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                         <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                         <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                
                                <div class="collectors">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                         <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                        <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>
                                         <div class="col-sm-3">
                                            <img class="img-circle" src="img/me4v2.png" >
                                        </div>

                                    </div>
                                </div>

                            </div>
                        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
@endsection