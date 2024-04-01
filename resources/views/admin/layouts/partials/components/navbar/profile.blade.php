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
            <h6 class="dropdown-header">مرحباً , {{ auth()->user()->name }}</h6>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('admin.profile.view') }}">
                <i class="icon-mid bi bi-person me-2"></i>
                حسابي
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('admin.logout') }}">
                <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                تسجيل الخروج
            </a>
        </li>
    </ul>
</div>
