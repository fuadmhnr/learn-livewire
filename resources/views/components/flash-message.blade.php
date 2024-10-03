@if (flash()->message)
<div>
    <div class="alert d-flex align-items-center  alert-{{ flash()->class ?? 'success' }}" role="alert">
        @php
            $iconClass = match(flash()->class) {
                'warning', 'danger' => 'bi-exclamation-triangle-fill',
                'info' => 'bi-info-circle-fill',
                'success' => 'bi-check-circle-fill',
                default => ''
            };
        @endphp
        @if($iconClass)
            <i class="bi me-2 {{ $iconClass }}"></i>
        @endif
        {{ flash()->message }}
    </div>
</div>
@endif
