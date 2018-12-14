@extends('frontend.layouts.app')

@section('content')
   <div class="row">
        @foreach( $blogs as $blog)
            <div>
                <h3>{{$blog->name}}</h3>
                <p>{!! $blog->content !!}</p>
                <p>{{$blog->featured_image}}</p>
                <img src="{{ Storage::disk('public')->url('img/blog/'. $blog->featured_image) }}" height="80" width="80">
            </div>
            @endforeach
   </div>
@endsection