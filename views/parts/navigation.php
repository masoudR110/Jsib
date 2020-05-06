<nav>
    <div class="right">
        <a class="tab" href="<?= $nav_link_home; ?>">خانه</a>
        <div class="dropdown">
            <a class="tab" href="<?= $nav_link_movie; ?>">فیلم</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= $nav_link_farsi_movie; ?>">ایرانی</a>
                <a class="dropdown-item" href="<?php $nav_link_english_movie; ?>">خارجی</a>
            </div>
        </div>
        <div class="dropdown">
            <a class="tab" href="<?= $nav_link_series; ?>">سریال</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= $nav_link_farsi_series ; ?>">ایرانی</a>
                <a class="dropdown-item" href="<?= $nav_link_english_series; ?>">خارجی</a>
            </div>
        </div>
        <a href="<?= $nav_link_animation; ?>" class="tab">انیمیشن</a>
        <div class="dropdown">
            <span class="tab">ابزار</span>
            <div class="dropdown-menu">
                <a href="" class="dropdown-item">دفترچه تلفن</a>
            </div>
        </div>
    </div>

    <div class="left">
        <div class="search-box">
            <div id="search-icon">
                <i class="fas fa-search"></i>
            </div>
            <input type="text" id="search-input">
        </div>
    </div>
</nav>