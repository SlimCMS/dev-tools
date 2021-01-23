<div class="bg-white border-right" style="width: 300px; height: 100%;">
    <div class="py-3">
        <div class="text-center">
            <h5 class="divider">{{ lang('admin.navigation') }}</h5>
        </div>

        <div class="list-group rounded-0 pt-2">
            @if(isset($items))
                @foreach($items as $item)
                    <a href="{{ $item['link'] }}" class="list-group-item list-group-item-action border-right-0 @if($item['is_active']) active @endif">
                        <i class="mdi {{ $item['icon'] }} mr-2"></i>{{ $item['name'] }}
                    </a>
                @endforeach
            @endif
        </div>
    </div>
</div>
