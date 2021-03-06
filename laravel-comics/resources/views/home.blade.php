@extends('layouts.base')

@section('content')

    <section class="comics">
        <div class="container">
             
            <a href="#">
               @foreach ($fumetti as $key => $fumetto)
                    <div class="card">
                        <img src={{$fumetto["thumb"]}} alt="">
                        <a href="/fumetto/{{$key}}"><p class="title">{{$fumetto["series"]}}</p></a>
                    </div>
                @endforeach
            </a>
            
            <div class="long-card">
                <a href="#">
                    <div class="current-series">
                            <h4>LOAD MORE</h4>
                    </div>
                </a>
            </div>
        </div>
    </section>

@endsection