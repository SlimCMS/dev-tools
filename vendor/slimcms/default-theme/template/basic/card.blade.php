<div class="card {{ arrayToCssClasses($classes) }}" style="{{ arrayToCssProps($styles) }}">
    @if(isset($card_header))
        {{ $card_header }}
    @endif

    @if(isset($card_image))
        {{ $card_image }}
    @endif

    @if(isset($card_body))
        {{ $card_body }}
    @endif

    @if(isset($card_footer))
        {{ $card_footer }}
    @endif
</div>
