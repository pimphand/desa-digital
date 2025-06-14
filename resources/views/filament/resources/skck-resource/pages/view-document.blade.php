@php
    $fileUrl = Storage::url($url);
    $iframeUrl = "https://docs.google.com/viewer?url=" . urlencode($fileUrl) . "&embedded=true";
@endphp

<div class="w-full h-[80vh]">
    <iframe src="{{ $iframeUrl }}" width="100%" height="100%" frameborder="0" class="rounded-lg shadow-lg"></iframe>
</div>