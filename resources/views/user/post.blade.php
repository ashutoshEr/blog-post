@extends('user/app')

@section('bg-img',asset('user/img/post-bg.jpg'))

@section('title', $postslug->title)

@section('subheading',$postslug->subtitle)

@section('main-content')

<!-- Facebook Comment Script -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 mx-auto">
              <small>Created at {{ $postslug->created_at }} By {{ $postslug->posted_by }} </small>
              @foreach ($postslug->categories as $category)
              <small class="pull-right badge badge-secondary" style="margin-right: 20px;">  
                <a style=" color:white" href="{{ route('category',$category->slug) }}">{{ $category->name }}</a>
              </small>
              @endforeach
              <div class="row">
                <div class="col-lg-8 col-md-8 mx-auto">
                  <p>{!! htmlspecialchars_decode($postslug -> body) !!} </p>
                </div>
                <div class="col-lg-4 col-md-4 mx-auto">
                  <p><img style="width:100%" src="{{ $postslug->image }}" alt=""> </p>
                </div>
              </div>

             {{-- Tag clouds --}}
                <h3>Tag Clouds</h3>
                @foreach ($postslug->tags as $tag)
                <a href="{{ route('tag',$tag->slug) }}"><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">  
                                    {{ $tag->name }}
                                </small></a>
                @endforeach
            <br><hr>
            <!-- Facebook Comment Link -->
             <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="10"></div>
          </div>
        </div>
      </div>
    </article>
    <hr>
@endsection