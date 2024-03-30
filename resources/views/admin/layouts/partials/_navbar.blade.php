<header>
    <nav class="navbar navbar-expand navbar-light navbar-top">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-lg-0">
                    {{-- @include('admin.layouts.partials.components.navbar.chat')
                    @include('admin.layouts.partials.components.navbar.notifications') --}}
                    @include('admin.layouts.partials.components.navbar.profile')
                </ul>
            </div>
        </div>
    </nav>
</header>
