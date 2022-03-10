<ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-size: 20px">
    @php
        if (Voyager::translatable($items)) {
            $items = Cache::remember("menu_items", config('cache.timeout'), function () use ($items){
                return $items->load('translations');
            });
        }

         $services = Cache::remember("menu_services", config('cache.timeout'), function () use ($items){
                        return App\Models\Service::withTranslations()
                        ->inMenu()
                        ->select(['id','title', 'slug', 'ordering'])
                        ->orderBy('ordering')
                        ->get();
                    });

    @endphp

    @foreach ($items as $item)

        @php

            $originalItem = $item;
            if (Voyager::translatable($item)) {
                $item = $item->translate($options->locale);
            }

            $isActive = null;
            $styles = null;
            $icon = null;
            $hasChildren = $originalItem->children->isNotEmpty() || $item->parameters === "services";

            // Background Color or Color
            if (isset($options->color) && $options->color == true) {
                $styles = 'color:'.$item->color;
            }
            if (isset($options->background) && $options->background == true) {
                $styles = 'background-color:'.$item->color;
            }

            // Check if link is current
            if(url($item->link()) == url()->current()){
                $isActive = 'active';
            }

            // Set Icon
            if($item->icon_class){
                $icon = '<i class="' . $item->icon_class . '"></i>';
            }
        @endphp
        @if($item->status)
            <li class="nav-item mx-3 {{ $isActive }} @if($hasChildren) dropdown @endif">
                <a class="nav-link @if($hasChildren) dropdown-toggle @endif"
                   @if($hasChildren) data-bs-toggle="dropdown" aria-expanded="false" @endif
                   href="{{ $item->link() }}"
                   target="{{ $item->target }}" >
                    {!! $icon !!}
                    {{ $item->title }}
                </a>

                @if($item->parameters === "services")
                    <ul class="dropdown-menu">
                        @foreach($services as $service)
                            <li>
                                <a class="dropdown-item" href="{{ route('service', $service) }}">
                                    {{$service->getTranslatedAttribute('title')}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @elseif($hasChildren)
                <ul class="dropdown-menu">
                    @foreach ($originalItem->children as $child)
                        <li>
                            <a class="dropdown-item" href="{{ $child->link() }}" target="{{ $child->target }}">
                                {!! $icon !!}
                                {{ $child->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                @endif
            </li>
        @endif
    @endforeach
</ul>

