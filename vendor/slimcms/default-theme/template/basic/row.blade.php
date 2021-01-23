<div class="row container-fluid {{ arrayToCssClasses($classes) }}" style="{{ arrayToCssProps($styles) }}">
    {{ $slot ?? $content }}
</div>
