<li class="nav-item dropdown me-3">
    <a class="nav-link active dropdown-toggle text-gray-600" href="#" data-bs-toggle="dropdown"
        data-bs-display="static" aria-expanded="false">
        <i class="bi bi-bell bi-sub fs-4"></i>
        <span class="badge badge-notification bg-danger">7</span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end notification-dropdown" aria-labelledby="dropdownMenuButton">
        <li class="dropdown-header">
            <h6>{{ __('admin.notifications') }}</h6>
        </li>
        <li class="dropdown-item notification-item">
            <a class="d-flex align-items-center" href="#">
                <div class="notification-icon bg-primary">
                    <i class="bi bi-cart-check"></i>
                </div>
                <div class="notification-text ms-4">
                    <p class="notification-title font-bold">Successfully check out</p>
                    <p class="notification-subtitle font-thin text-sm">Order ID #256</p>
                </div>
            </a>
        </li>
        <li class="dropdown-item notification-item">
            <a class="d-flex align-items-center" href="#">
                <div class="notification-icon bg-success">
                    <i class="bi bi-file-earmark-check"></i>
                </div>
                <div class="notification-text ms-4">
                    <p class="notification-title font-bold">Homework submitted</p>
                    <p class="notification-subtitle font-thin text-sm">Algebra math homework</p>
                </div>
            </a>
        </li>
        <li>
            <p class="text-center py-2 mb-0"><a href="#">{{ 'admin.see_all_notification' }}</a></p>
        </li>
    </ul>
</li>
