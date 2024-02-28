@if (count($recommendations))
    <div class="MovieListTopCn">
        <div class="MovieListTop owl-carousel">
            @foreach ($recommendations ?? [] as $movie)
                <div class="TPostMv">
                    <div class="TPost B">
                        <a href="{{ $movie->getUrl() }}"
                            title="{{ $movie->name }} ({{ $movie->publish_year }})">
                            <div class="Image">
                                <figure class="Objf TpMvPlay AAIco-play_arrow"><img width="180" height="260"
                                        src="{{ $movie->getThumbUrl() }}"
                                        class="attachment-img-mov-md size-img-mov-md wp-post-image"
                                        alt="{{ $movie->name }} ({{ $movie->publish_year }})"></figure>
                                <span class="mli-eps">
                                    @if ($movie->status == 'completed')
                                        Trọn
                                        <i>Bộ</i>
                                    @else
                                        Tập <i>{{ $movie->episode_current }}</i>
                                    @endif
                                </span>
                                <div class="anime-extras">
                                    <div class="anime-avg-user-rating"
                                        title="{{ $movie->rating_star }} trong số {{ $movie->rating_count }} đánh giá"
                                        data-action="click->anime-card#showLibraryEditor"><i class="fa fa-star"></i>{{$movie->getRatingStar()}}
                                    </div>
                                </div>
                            </div>
                            <div class="Title">{{ $movie->name }}</div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
