<div id="{{ $id }}" class="card">
    <div class="card-header">
        <h2>{{ $title }}</h2>
        <div class="buttons">
            {{ $buttons }}
        </div>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>

{{-- 
    id
    title
    --}}