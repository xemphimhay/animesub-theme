<li class="TPostMv5">
    <article id="post-946"
        class="TPost C post-946 post type-post status-publish format-standard has-post-thumbnail hentry">
        <a href="{{$movie->getUrl()}}">
            <div class="Image">
                <figure class="Objf TpMvPlay AAIco-play_arrow">
                    <img width="215" height="320" src="{{$movie->getThumbUrl()}}"
                        class="attachment-thumbnail size-thumbnail wp-post-image"
                        alt="{{$movie->name}} - {{$movie->origin_name}} ({{$movie->publish_year}})"
                        title="{{$movie->name}} - {{$movie->origin_name}} ({{$movie->publish_year}})">
                </figure>
                <span class="a2-1">{{$movie->getRatingStar()}}</span>
                <span class="mli-eps">Tập<i>{{$movie->episode_current}}</i></span>

                <style>
                    span.mli-quality {
                        position: absolute;
                        top: 5px;
                        right: 10px;
                        width: 40px;
                        padding-top: 8px;
                        text-align: center;
                        height: 40px;
                        border-radius: 50%;
                        background: rgba(183, 28, 28, .9);
                        color: #fff;
                        font-size: 10px;
                        text-transform: uppercase;
                        line-height: 1em;
                        text-shadow: 0 0 2px rgba(0, 0, 0, .3)
                    }

                    span.mli-quality {
                        display: block;
                        font-weight: 700;
                        font-size: 16px;
                        font-style: normal;
                        margin-top: 3px
                    }

                    span.mli-quality {
                        font-size: 12px;
                    }

                    .a2-1 {
                        transition: opacity .15s linear;
                        left: 0;
                        position: absolute;
                        font-size: .95em;
                        color: #fff;
                        z-index: 5;
                        top: 5px;
                        float: left;
                        clear: left;
                        margin-bottom: .5em;
                        padding: .5em 1em;
                        background: rgba(0, 0, 0, .65);
                        border-radius: 20em;
                        margin-left: .5em;
                        cursor: pointer;
                        color: #f5ec42;
                    }
    

                    .a2-1:before {
                        content: "\2605";
                        /* Unicode character for a star */
                </style>
            </div>
            <h2 class="Title">{{$movie->name}}</h2>
            <span class="Year">{{$movie->origin_name}}</span>

        </a>
        <div>
            <span class="Year"> Lượt xem {{ bptv_format_view($movie->view_total) }}</span>
        </div>
    </article>
</li>
