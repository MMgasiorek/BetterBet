@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-12 text-center">
            <h4>Hello : <b>{{ Auth::user()->name }}</b></h4>
        </div>
    <div class="row">
        <div class="col-12 text-center">
            <h4>You notifications</h4>
        @foreach($notifications as $notification)
            <div>
                <h3>{{ $notification->data['message'] }}</h3>
            </div>
        @endforeach
        </div>
    </div>
    </div>
    <div class="row mt-5">
        <div class="col-4">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="text-body-secondary">Zero Taxes</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-1 px-sm-2 mt-1 mb-1 card-img-top scale" style="width: 15rem;"
                             src="img/graph/2.png" alt="...">
                        </div>
                             <p>Add some quality, svg illustrations to your project courtesy of <a
                                target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                constantly updated collection of beautiful svg images that you can use
                                 completely free and without attribution!
                            </p>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class="btn btn-success btn-sm">Check</button>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="text-body-secondary">Pure Gambling</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-1 px-sm-2 mt-1 mb-1 card-img-top scale" style="width: 15rem;"
                             src="img/graph/4.png" alt="...">
                        </div>
                             <p>Add some quality, svg illustrations to your project courtesy of <a
                                target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                constantly updated collection of beautiful svg images that you can use
                                 completely free and without attribution!
                            </p>                        
                </div>
                <div class="card-footer text-center">
                    <button type="button" class="btn btn-warning btn-sm">Check</button>
                </div>  
            </div>
        </div>
        <div class="col-4">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="text-body-secondary">Best Odds</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-1 px-sm-2 mt-1 mb-1 card-img-top scale" style="width: 15rem;"
                             src="img/graph/6.png" alt="...">
                        </div>
                             <p>Add some quality, svg illustrations to your project courtesy of <a
                                target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                constantly updated collection of beautiful svg images that you can use
                                 completely free and without attribution!
                            </p>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class="btn btn-primary btn-sm">Check</button>
                </div>
            </div>
        </div>
    </div>



    <div class="row mt-5 mb-5">
        <div class="col-12">
            <h6 class="text-center">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </h6>
        </div>
    </div>
 
</div>

@endsection
