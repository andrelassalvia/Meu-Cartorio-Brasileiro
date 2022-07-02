<div class="d-flex justify-content-between">
    <div>{{ $array->links() }}</div>
    <div>
        <p class="fw-bold">
        {{ $array->firstItem() }} - 
        <span>{{ $array->lastItem() }}</span> 
        <span>de {{ $array->total() }}</span>
        </p>
    </div>
</div>

{{-- 
    array
    --}}