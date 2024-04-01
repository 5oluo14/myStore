<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> مخزني</title>
    <link rel="shortcut icon" href={{ asset('dashboard/assets/compiled/svg/favicon.svg') }} type="image/x-icon">
    <link rel="shortcut icon"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
        type="image/png">

    <link rel="stylesheet" href={{ asset('dashboard/compiled/css/app.rtl.css') }}>
    <link rel="stylesheet" href={{ asset('dashboard/compiled/css/app-dark.rtl.css') }}>
    <link rel="stylesheet" href={{ asset('dashboard/compiled/css/iconly.rtl.css') }}>
    <link rel="stylesheet" href={{ asset('dashboard/compiled/css/auth.css') }}>
</head>

<body>
    <script src="{{ asset('dashboard/static/js/initTheme.js') }}"></script>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left" class="text-center">
                    <svg height="120px" width="120px" class="mb-5" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 493.728 493.728" xml:space="preserve" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path style="fill:#4a5dba;"
                                d="M404.936,92.136c-1.768-0.168-39.52-2.968-39.52-2.968S339.176,63,336.304,60.12 c-2.88-2.896-8.504-2.032-10.696-1.368c-0.312,0.088-5.72,1.776-14.672,4.536c-8.768-25.336-24.216-48.616-51.408-48.616 c-0.752,0-1.528,0.032-2.312,0.08C249.488,4.488,239.904,0,231.624,0C168.272,0,138,79.608,128.512,120.064 c-24.624,7.648-42.128,13.104-44.336,13.824c-13.768,4.336-14.192,4.768-15.976,17.776c-1.376,9.848-37.336,289.312-37.336,289.312 l280.176,52.752l151.824-33.016c0,0-53.288-362.088-53.624-364.576C408.904,93.656,406.728,92.28,404.936,92.136z M255.136,77.904 c0,0.952-0.016,1.848-0.016,2.752c-15.424,4.808-32.16,10.008-48.968,15.248c9.432-36.56,27.096-54.24,42.56-60.904 C252.592,44.808,255.136,58.904,255.136,77.904z M229.872,17.088c2.768,0,5.504,0.928,8.144,2.76 c-20.312,9.592-42.064,33.792-51.264,82.088c-13.432,4.176-26.552,8.272-38.704,12.048 C158.816,77.128,184.368,17.088,229.872,17.088z M240.792,232.384c0,0-16.4-8.792-36.488-8.792 c-29.488,0-30.976,18.592-30.976,23.264c0,25.56,66.296,35.36,66.296,95.224c0,47.104-29.712,77.424-69.808,77.424 c-48.096,0-72.704-30.088-72.704-30.088l12.872-42.76c0,0,25.28,21.832,46.64,21.832c13.92,0,19.592-11.04,19.592-19.096 c0-33.344-54.392-34.832-54.392-89.624c0-46.088,32.928-90.728,99.424-90.728c25.592,0,38.264,7.384,38.264,7.384L240.792,232.384z M271.744,75.488c0-1.688,0.016-3.336,0.016-5.152c0-15.728-2.184-28.408-5.672-38.456c14.016,1.752,23.352,17.784,29.36,36.224 C288.416,70.312,280.416,72.792,271.744,75.488z">
                            </path>
                            <path style="fill:#3f5491;"
                                d="M404.936,92.136c-1.768-0.168-39.52-2.968-39.52-2.968S339.176,63,336.304,60.12 c-2.88-2.896-8.504-2.032-10.696-1.368c-0.312,0.088-5.72,1.776-14.672,4.536c-8.768-25.336-24.216-48.616-51.408-48.616 c-0.752,0-1.528,0.032-2.312,0.08C249.488,4.488,239.904,0,231.624,0c-63.352,0-78.984,79.608-88.472,120.064 c-24.624,7.648-43.52,49.752-45.752,50.456c-13.752,4.336-14.176,4.768-15.968,17.784c-1.384,9.84-50.568,252.672-50.568,252.672 l280.176,52.752l151.824-33.016c0,0-53.288-362.088-53.624-364.576C408.904,93.656,406.728,92.28,404.936,92.136z M255.136,77.904 c0,0.952-0.016,1.848-0.016,2.752c-15.424,4.808-32.16,10.008-48.968,15.248c9.432-36.56,27.096-54.24,42.56-60.904 C252.592,44.808,255.136,58.904,255.136,77.904z M229.872,17.088c2.768,0,5.504,0.928,8.144,2.76 c-20.312,9.592-42.064,33.792-51.264,82.088c-13.432,4.176-26.552,8.272-38.704,12.048 C158.816,77.128,184.368,17.088,229.872,17.088z M240.792,232.384c0,0-16.4-8.792-36.488-8.792 c-29.488,0-30.976,18.592-30.976,23.264c0,25.56,66.296,35.36,66.296,95.224c0,47.104-29.712,77.424-69.808,77.424 c-48.096,0-72.704-30.088-72.704-30.088l12.872-42.76c0,0,25.28,21.832,46.64,21.832c13.92,0,19.592-11.04,19.592-19.096 c0-33.344-54.392-34.832-54.392-89.624c0-46.088,32.928-90.728,99.424-90.728c25.592,0,38.264,7.384,38.264,7.384L240.792,232.384z M271.744,75.488c0-1.688,0.016-3.336,0.016-5.152c0-15.728-2.184-28.408-5.672-38.456c14.016,1.752,23.352,17.784,29.36,36.224 C288.416,70.312,280.416,72.792,271.744,75.488z">
                            </path>
                            <path style="fill:#3f5491;"
                                d="M311.04,493.72l151.824-33.008c0,0-53.288-362.088-53.624-364.576c-0.336-2.488-2.504-3.856-4.304-4 c-1.768-0.168-39.52-2.968-39.52-2.968S339.176,63,336.304,60.12c-1.536-1.552-3.832-1.992-6-2.008 c-5.76,9.76-4.568,28.296-4.568,28.296L307.88,493.12L311.04,493.72z">
                            </path>
                            <path style="fill:#2a3a79;"
                                d="M259.528,14.68c-0.752,0-1.528,0.032-2.312,0.08c-7.728-10.264-17.312-14.752-25.592-14.752 c-63.096,0-93.392,78.984-103,119.576l19.576-6.072c10.832-36.872,36.36-96.424,81.672-96.424c2.768,0,5.504,0.928,8.144,2.76 c-20.256,9.56-41.952,33.672-51.184,81.704l19.44-6C215.728,59.224,233.32,41.64,248.728,35c3.872,9.816,6.424,23.904,6.424,42.904 c0,0.864,0,1.688-0.016,2.512l16.624-5.144c0-1.6,0.016-3.2,0.016-4.936c0-15.728-2.184-28.408-5.672-38.456 c13.968,1.744,23.296,17.704,29.296,36.064l15.504-4.808C302.112,37.872,286.672,14.68,259.528,14.68z">
                            </path>
                            <path style="fill:#233361;"
                                d="M371.752,89.648c-3.792-0.296-6.344-0.48-6.344-0.48S339.168,63,336.296,60.12 c-1.536-1.552-3.832-1.992-6-2.008c-5.76,9.76-4.568,28.296-4.568,28.296L307.872,493.12l3.168,0.6l80.784-17.568L371.752,89.648z">
                            </path>
                        </g>
                    </svg>
                    <h6 class="auth-title">{{ __('مرحباً بك في مخزني') }}</h6>
                    <p class="auth-subtitle mb-5"></p>

                    <form action="{{ route('admin.login.post') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="email" type="text" class="form-control form-control-xl"
                                placeholder="البريد الالكتروني">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="password" type="password" class="form-control form-control-xl"
                                placeholder="الرقم السري">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" name="remember" value=""
                                id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                تذكرني
                            </label>
                        </div>
                        <button type="submit"
                            class="btn btn-primary btn-block btn-lg shadow-lg mt-5">{{ __('تسجيل الدخول') }}</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    {{-- <img src="{{ asset('dashboard/compiled/svg/logo.svg') }}" alt="Logo"> --}}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
