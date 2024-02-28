@extends('themes::themebptv.layout')

@php
    use Ophim\Core\Models\Movie;

    $recommendations = Cache::remember('site.movies.recommendations', setting('site_cache_ttl', 5 * 60), function () {
        return Movie::where('is_recommended', true)
            ->limit(get_theme_option('recommendations_limit', 10))
            ->orderBy('updated_at', 'desc')
            ->get();
    });

    $data = Cache::remember('site.movies.latest', setting('site_cache_ttl', 5 * 60), function () {
        $lists = preg_split('/[\n\r]+/', get_theme_option('latest'));
        $data = [];
        foreach ($lists as $list) {
            if (trim($list)) {
                $list = explode('|', $list);
                [$label, $relation, $field, $val, $limit, $link, $template] = array_merge($list, ['Phim mới cập nhật', '', 'type', 'series', 8, '/', 'section_thumb']);
                try {
                    $data[] = [
                        'label' => $label,
                        'template' => $template,
                        'data' => Movie::when($relation, function ($query) use ($relation, $field, $val) {
                            $query->whereHas($relation, function ($rel) use ($field, $val) {
                                $rel->where($field, $val);
                            });
                        })
                            ->when(!$relation, function ($query) use ($field, $val) {
                                $query->where($field, $val);
                            })
                            ->limit($limit)
                            ->orderBy('updated_at', 'desc')
                            ->get(),
                        'link' => $link ?: '#',
                    ];
                } catch (\Exception $e) {
                }
            }
        }
        return $data;
    });
    
    $randomphim = Cache::remember('site.movies.randomphim', setting('site_cache_ttl', 5 * 60), function () {
        return Movie::where('is_copyright', false)
            ->orderBy('updated_at', 'desc')
            ->get();
    });
    $licht2 = Cache::remember('site.movies.licht2', setting('site_cache_ttl', 5 * 60), function () {
        return Movie::where('ngaythuhai', true)
            ->orderBy('updated_at', 'desc')
            ->get();
    });
    $licht3 = Cache::remember('site.movies.licht3', setting('site_cache_ttl', 5 * 60), function () {
        return Movie::where('ngaythuba', true)
            ->orderBy('updated_at', 'desc')
            ->get();
    });
    $licht4 = Cache::remember('site.movies.licht4', setting('site_cache_ttl', 5 * 60), function () {
        return Movie::where('ngaythutu', true)
            ->orderBy('updated_at', 'desc')
            ->get();
    });
    $licht5 = Cache::remember('site.movies.licht5', setting('site_cache_ttl', 5 * 60), function () {
        return Movie::where('ngaythunam', true)
            ->orderBy('updated_at', 'desc')
            ->get();
    });
    $licht6 = Cache::remember('site.movies.licht6', setting('site_cache_ttl', 5 * 60), function () {
        return Movie::where('ngaythusau', true)
            ->orderBy('updated_at', 'desc')
            ->get();
    });
    $licht7 = Cache::remember('site.movies.licht7', setting('site_cache_ttl', 5 * 60), function () {
        return Movie::where('ngaythubay', true)
            ->orderBy('updated_at', 'desc')
            ->get();
    });
    $lichchunhat = Cache::remember('site.movies.lichchunhat', setting('site_cache_ttl', 5 * 60), function () {
        return Movie::where('ngaychunhat', true)
            ->orderBy('updated_at', 'desc')
            ->get();
    });
@endphp

@section('slider_recommended')
    @include('themes::themebptv.inc.slider_recommended')
@endsection

@section('content')
    <main>
        @foreach ($data as $item)
            @include('themes::themebptv.inc.section.' . $item['template'])
        @endforeach
        @include('themes::themebptv.inc.section.lichchieuanime')
    </main>
@endsection
