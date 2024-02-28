<aside class="widget-area" role="complementary">
    <section class="Wdgt">
        <div class="Title">
            <i class="fa fa-question-circle"></i>&nbsp; &nbsp;HÔM NAY XEM GÌ?
        </div>
        <p style="text-align:justify">Nếu bạn buồn phiền không biết xem gì hôm nay. Để chúng tôi chọn phim cho bạn nhé!
            </p>
            <button id="randomMovieButton" class="Button TPlay AAIco-play_circle_outline"
                onclick="redirectRandomMovie()"><strong>Xem phim ngẫu nhiên</strong></button>
    </section>
    <!--<section class="Wdgt" id="showChonLoc">-->
    <!--        <div class="Title">-->
    <!--            <div class="Lnk fa-film">&nbsp; &nbsp;Hỏi/đáp anime</div>-->
    <!--        </div>-->
    <!--        <div id="fb-root" class=" fb_reset">-->
    <!--            <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">-->
    <!--                <div></div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v19.0&appId=581113047417216" nonce="TC0BOZYn"></script>-->
    <!--        <div class="fbcmt title">Đừng quên nhấn like , theo dõi Fanpage của <a-->
    <!--                href="https://www.facebook.com/animehay.fanpage/" target="_blank"><span-->
    <!--                    style="color:red;"><strong>AnimeHay</strong></span></a> Để cập nhật phim hay mỗi ngày-->
    <!--            <div style="width: 100%; background-color: #fff">-->
    <!--                <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop"-->
    <!--                    data-href="https://animesub.org" data-width="100%" data-colorscheme="light" data-numposts="5"-->
    <!--                    data-order-by="reverse_time" data-lazy="true" style="width: 100%;" fb-xfbml-state="rendered"-->
    <!--                    fb-iframe-plugin-query="app_id=581113047417216&amp;color_scheme=light&amp;container_width=280&amp;height=100&amp;href=http%3A%2F%2Fanimesub.org%2F&amp;lazy=true&amp;locale=vi_VN&amp;numposts=5&amp;order_by=reverse_time&amp;sdk=joey&amp;version=v16.0&amp;width=">-->
    <!--                    <span style="vertical-align: bottom; width: 100%; height: 1433px;"><iframe-->
    <!--                            name="fa4f518dddf133c14" width="1000px" height="100px"-->
    <!--                            data-testid="fb:comments Facebook Social Plugin"-->
    <!--                            title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true"-->
    <!--                            allowfullscreen="true" scrolling="no" allow="encrypted-media" loading="lazy"-->
    <!--                            src="https://www.facebook.com/v16.0/plugins/comments.php?app_id=581113047417216&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfa2e69b2b2eb4ff02%26domain%3Danimesub.org%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fanimesub.org%252Ffd5fbf0437fa82077%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=280&amp;height=100&amp;href=http%3A%2F%2Fanimesub.org%2F&amp;lazy=true&amp;locale=vi_VN&amp;numposts=5&amp;order_by=reverse_time&amp;sdk=joey&amp;version=v16.0&amp;width="-->
    <!--                            style="border: none; width: 100%; height: 1433px; visibility: visible;"-->
    <!--                            class=""></iframe></span></div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--</section>-->
    {{-- <div class="Dvr-300">
    </div> --}}
    @foreach ($tops as $item)
        @include('themes::themebptv.inc.aside.' . $item['template'])
    @endforeach
    {{-- <div class="Dvr-300">
    </div> --}}
    <div class="tag-list-main">
    </div>
</aside>
