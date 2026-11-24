@include('partials.galeri-banner')
@include('partials.galeri-spotlight')
@include('partials.galeri-filter')
@include('partials.galeri-grid')
@include('partials.galeri-video')

@foreach (range(1, 6) as $id)
    <x-modal-lightbox id="lightbox-{{ $id }}" title="Dokumentasi kegiatan {{ $id }}" />
@endforeach
@foreach (['video-1', 'video-2'] as $id)
    <x-modal-lightbox :id="$id" title="Video dokumentasi" meta="Pratinjau video statis" />
@endforeach
