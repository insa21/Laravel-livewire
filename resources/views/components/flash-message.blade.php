@if (flash()->message)
    <div class="alert alert-{{ flash()->class ?? 'success' }}" role="alert">
        @if (flash()->class === 'warning' || flash()->class === 'danger')
            <i class="bi me-2 bi-exclamation-triangle-fill"></i>
        @endif
        @if (flash()->class === 'info')
            <i class="bi me-2 bi-exclamation-circle-fill"></i>
        @endif

        @if (!flash()->class || flash()->class === 'success')
            <i class="bi me-2 bi-check-circle-fill"></i>
        @endif

        {{ flash()->message }}
    </div>
@endif
