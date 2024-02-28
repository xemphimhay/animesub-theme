<section>
    <div class="Top">
        <h1>
            <a>Lịch Chiếu <i class=" fa fa-angle-right"></i></a>
        </h1>
    </div>

    <style>
        /* CSS cho container chứa các tab */
        .tab-container {
            display: flex;
            flex-wrap: wrap;
            /* Cho phép các tab tự xuống dòng nếu không đủ không gian */
            background-color: #f4f4f4;
            /* Màu nền cho container */
            border: 1px solid #ccc;
            /* Đường viền xung quanh container */
            border-radius: 5px;
            /* Bo tròn góc container */
            padding: 10px;
            /* Khoảng cách giữa tab và đường viền */
        }

        /* CSS cho tab buttons */
        /* CSS cho tab buttons */
        .tab-button {
            cursor: pointer;
            padding: 10px 20px;
            background-color: #0074D9;
            color: #fff;
            border: none;
            border-radius: 5px;
            margin: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .tab-button:hover {
            background-color: #0056b3;
            /* Màu nền thay đổi khi di chuột qua */
        }

        /* CSS cho tab buttons khi active */
        .tab-button.active-button {
            background-color: #ff5733;
            /* Màu nền khi tab đang active */
            color: #fff;
            /* Màu chữ của tab khi active */
        }


        /* CSS cho tab content */
        .tab {
            display: none;
            padding: 10px;
            /* Khoảng cách bên trong nội dung tab */
        }

        .active-tab {
            display: block;
            color: #fff;
            /* Màu chữ của tab content khi active */
        }

        /* CSS để thu nhỏ hình ảnh */
        .TPostMv5 {
            max-width: 220px;
            max-height: 320px;
            display: inline-block;
            width: 45%;
            padding: 10px;
        }

        /* CSS cho máy tính */
        @media (min-width: 768px) {

            /* CSS để thu nhỏ hình ảnh */
            .TPostMv5 {
                max-width: 220px;
                max-height: 320px;
                display: inline-block;
                width: 17%;
                padding: 10px;
            }
    </style>


    <div>
        <button class="tab-button" onclick="openTab('tab1')">Thứ 2</button>
        <button class="tab-button" onclick="openTab('tab2')">Thứ 3</button>
        <button class="tab-button" onclick="openTab('tab3')">Thứ 4</button>
        <button class="tab-button" onclick="openTab('tab4')">Thứ 5</button>
        <button class="tab-button" onclick="openTab('tab5')">Thứ 6</button>
        <button class="tab-button" onclick="openTab('tab6')">Thứ 7</button>
        <button class="tab-button" onclick="openTab('tab7')">Chủ Nhật</button>
    </div>

    <div class="tab" id="tab1">
        @foreach ($licht2 as $movie)
            @include('themes::themebptv.inc.section.thumblichphim')
        @endforeach
    </div>

    <div class="tab" id="tab2">
        @foreach ($licht3 as $movie)
            @include('themes::themebptv.inc.section.thumblichphim')
        @endforeach
    </div>

    <div class="tab" id="tab3">
        @foreach ($licht4 as $movie)
            @include('themes::themebptv.inc.section.thumblichphim')
        @endforeach
    </div>

    <div class="tab" id="tab4">
        @foreach ($licht5 as $movie)
            @include('themes::themebptv.inc.section.thumblichphim')
        @endforeach
    </div>

    <div class="tab" id="tab5">
        @foreach ($licht6 as $movie)
            @include('themes::themebptv.inc.section.thumblichphim')
        @endforeach
    </div>

    <div class="tab" id="tab6">
        @foreach ($licht7 as $movie)
            @include('themes::themebptv.inc.section.thumblichphim')
        @endforeach
    </div>

    <div class="tab" id="tab7">
        @foreach ($lichchunhat as $movie)
            @include('themes::themebptv.inc.section.thumblichphim')
        @endforeach
    </div>



    <script>
        // Get the current day (0: Sunday, 1: Monday, ..., 6: Saturday)
        var currentDay = new Date().getDay();
        var tabButtons = document.querySelectorAll('.tab-button');
        var tabs = document.querySelectorAll('.tab');

        // Function to open a specific tab by its index
        function openTab(index) {
            // Hide all tabs and remove active-button class from all tab buttons
            tabs.forEach(function(tab) {
                tab.classList.remove('active-tab');
            });
            tabButtons.forEach(function(tabButton) {
                tabButton.classList.remove('active-button');
            });

            // Show the selected tab and add active-button class to the clicked tab button
            tabs[index].classList.add('active-tab');
            tabButtons[index].classList.add('active-button');
        }

        // Open the tab corresponding to the current day
        if (currentDay >= 1 && currentDay <= 7) {
            openTab(currentDay - 1);
        }

        // Add click event listeners to all tab buttons
        tabButtons.forEach(function(tabButton, index) {
            tabButton.addEventListener('click', function() {
                openTab(index);
            });
        });
    </script>






</section>
