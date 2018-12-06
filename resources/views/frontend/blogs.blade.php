@extends('frontend.layouts.app')

@section('content')
   <div class="row">
        @foreach( $blogs as $blog)
            <div>
                <h3>{{$blog->name}}</h3>
                <p>{!! $blog->content !!}</p>
            </div>
            @endforeach
   </div>
@endsection