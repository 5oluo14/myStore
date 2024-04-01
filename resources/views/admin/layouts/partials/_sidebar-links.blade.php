<li class="sidebar-item">
    <a href="{{ route('home') }}" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>{{ __('الرئيسية') }}</span>
    </a>
</li>

<li class="sidebar-item">
    <a href="{{ route('vendors.index') }}" class='sidebar-link'>
        <i class="bi bi-people-fill"></i>
        <span>{{ __('الموردين') }}</span>
    </a>
</li>

<li class="sidebar-item">
    <a href="{{ route('clients.index') }}" class='sidebar-link'>
        <i class="bi bi-people-fill"></i>
        <span>{{ __('العملاء') }}</span>
    </a>
</li>

<li class="sidebar-item">
    <a href="{{ route('admins.index') }}" class='sidebar-link'>
        <i class="bi bi-person-gear"></i>
        <span>{{ __('المدراء') }}</span>
    </a>
</li>
