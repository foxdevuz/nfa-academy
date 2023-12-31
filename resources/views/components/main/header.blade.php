<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-4 py-lg-0 px-3 px-lg-0" style="align-items:center;">
    <a href="/" class="navbar-brand d-block ">
    <h1 class="m-0 text-uppercase text-white">
        <h1 class="m-0 text-white">
        <img class="image" src="/img/Untitled-2.png" alt=""/>
        <img class="ResImage" src="/img/Untitled-2.png" alt=""/>
        </h1>
    </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto mx-lg-auto py-0">
            <a href="/" class="nav-item nav-link">{{ @trans('header.main') }}</a>
            <div class="nav-item dropdown">
            <a href="/breaking-news" class="nav-link">{{ @trans('header.news') }}</a>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ @trans('header.teams') }}</a>
                <div class="dropdown-menu m-0" style="background: #ffffff;">
                    <a href="/club/type?id=u-11" class="dropdown-item">U-11</a>
                    <a href="/club/type?id=u-12" class="dropdown-item">U-12</a>
                    <a href="/club/type?id=u-13" class="dropdown-item">U-13</a>
                    <a href="/club/type?id=u-14" class="dropdown-item">U-14</a>
                    <a href="/club/type?id=u-15" class="dropdown-item">U-15</a>
                    <a href="/club/type?id=u-16" class="dropdown-item">U-16</a>
                    <a href="/club/type?id=u-17" class="dropdown-item">U-17</a>
                    <a href="/club/type?id=u-18" class="dropdown-item">U-18</a>
                </div>
            </div>
            <a href="/club/history" class="nav-item nav-link">{{ @trans('header.history') }}</a>
            <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ @trans('header.headquarter') }}</a>
            <div class="dropdown-menu m-0">
                <a href="/club/liders" class="dropdown-item">{{ @trans('header.headquarter') }}</a>
                <a href="/club/doctors" class="dropdown-item">{{ @trans('header.doctor') }}</a>
                <a href="/club/coachs" class="dropdown-item">{{ @trans('header.coach') }}</a>
            </div>
            </div>
            <a href="/contact" class="nav-item nav-link">{{ @trans('header.contact') }}</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-globe"></i></a>
                <div class="dropdown-menu m-0" style="background: #ffffff;">
                    <a href="/lang/uz" class="dropdown-item">UZ</a>
                    <a href="/lang/ru" class="dropdown-item">RU</a>
                </div>
            </div>
        <div class="flex" style="align-items:center;">
            <a target="_blank" href="https://t.me/NFAFutbolakademiya"><i class="ufaImagey fa-brands fa-telegram"></i></a>
            <a target="_blank" href="https://www.youtube.com/@namanganfootballacademyfoo9808">
                <i class="ufaImagey fa-brands fa-youtube"></i>
            </a>
            <a target="_blank" href="https://instagram.com/namangan_football_academy">
                <i class="ufaImagey fa-brands fa-instagram"></i>
            </a>
            <a target="_blank" href="https://www.youtube.com/@namanganfootballacademyfoo9808">
                <i class="ufaImagey fa-brands fa-facebook"></i>
            </a>
        </div>
        </div>
    </div>
</nav>
