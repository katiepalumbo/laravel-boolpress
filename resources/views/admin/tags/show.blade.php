@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Tag Details</h1>

                <div><strong>Tag Name: </strong> {{$tag->tag_name}}</div>
                <div><strong>Tag Slug: </strong> {{$tag->tag_slug}}</div>

                <div>
                    <h5 class="mt-5">Posts Which Use These Tags:</h5>
                    <ul>
                        @foreach ($tag->posts as $post)
                            <li>
                                <a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <a href="{{route('admin.tags.index')}}" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
@endsection