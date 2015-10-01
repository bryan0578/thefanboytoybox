@extends('layouts.app')
@section('title') Live Events :: @parent @stop
@section('content')
 <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>User Reviews</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="http://horrorhoundweekend.com">Horrorhound Weekend</a></td>
                            <td>Horror Convention</td>
                            <td><a data-toggle="modal" href='#modal-review'>Reviews</a>
                            <div class="modal fade" id="modal-review">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Reviews</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Username</h4>
                                            <p>HorrorHound Weekend is awesome. The staff are nice but they need to fix an issue with early entry ticket lines.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Add Review</button>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
                            
                        </tr>
                         <tr>
                            <td><a href="http://horrorhoundweekend.com">Horrorhound Weekend</a></td>
                            <td>Horror Convention</td>
                            <td>Review</td>
                        </tr>
                         <tr>
                            <td><a href="http://horrorhoundweekend.com">Horrorhound Weekend</a></td>
                            <td>Horror Convention</td>
                            <td>Review</td>
                        </tr>
                        <tr>
                            <td><a href="http://horrorhoundweekend.com">Horrorhound Weekend</a></td>
                            <td>Horror Convention</td>
                            <td>Review</td>
                        </tr>
                        <tr>
                            <td><a href="http://horrorhoundweekend.com">Horrorhound Weekend</a></td>
                            <td>Horror Convention</td>
                            <td>Review</td>
                        </tr>
                        <tr>
                            <td><a href="http://horrorhoundweekend.com">Horrorhound Weekend</a></td>
                            <td>Horror Convention</td>
                            <td>Review</td>
                        </tr>
                        <tr>
                            <td><a href="http://horrorhoundweekend.com">Horrorhound Weekend</a></td>
                            <td>Horror Convention</td>
                            <td>Review</td>
                        </tr>
                        

                    </tbody>
                </table>
            
           
            <div class="info">
            
                <h2>Live Events</h2>
                <p>Here you will find a list of live events such as comic cons, book signings horror conventions. You can meet your favorite celebrities, buy collectible merchandise, and meet new friends. Don’t forget to check out our <a href='autograph_sellers'>autograph sellers</a> and <a href='collectible_stores'>collectible store</a> lists while your here.</p>
           
        </div>
 
        <div class="cta1">
            <div class="cta-content1">
                <h2>DON'T HAVE AN ACCOUNT</h2>
                <h1 id="green">SIGN UP NOW</h1>
                <p>As a member you can create a profile and get connected with other collectors. Share stories, pictures of your collections, and much more.</p>
                <button data-toggle="modal" data-target='#modal-id'>SIGN UP HERE</button>
            </div>

        
    
        </div>
@endsection