
<div class="container">

    <h1 class="page-header">Gallery</h1>

    <div class="col-md-6">
        @foreach ($images as $image)
            <img class="thumbnail img-fluid" alt="{{ $image->alt_tag }}" src="{{ $image->url }}" />
        @endforeach
    </div>
    <div class="col-md-6">
        @foreach($tags as $tag)
            <a href="{{ url('gallery/'.$tag->slug) }}" class="btn btn-secondary">{{ $tag->slug }}</a>
        @endforeach
    </div>

</div>


@push('siravel')
    <li class="nav-text">@edit('images')</li>
@endpush