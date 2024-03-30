<div class="dropdown" style="padding: 5px;">
    <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="show">
        <div class="user-menu d-flex">
            <div class="user-img d-flex align-items-center">
                <div class="avatar avatar-md">
                    <img src="{{ asset('dashboard/compiled/jpg/1.jpg') }}">
                </div>
            </div>
        </div>
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;"
        data-bs-popper="static">
        <li>
            <h6 class="dropdown-header">Hello, {{ auth()->user()->name }}</h6>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('admin.profile.view') }}">
                <i class="icon-mid bi bi-person me-2"></i>
                My Profile
            </a>
        </li>
        <li>
            @if (app()->getLocale() == 'en')
                <a class="dropdown-item"
                    href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"><i
                        class="icon-mid bi bi-person me-2"></i> ar
                </a>
            @else
                <a class="dropdown-item"
                    href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL('en', null, [], true) }}"><i
                        class="icon-mid bi bi-person me-2"></i> en
                </a>
            @endif

        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('admin.logout') }}">
                <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                Logout
            </a>
        </li>
    </ul>
</div>
