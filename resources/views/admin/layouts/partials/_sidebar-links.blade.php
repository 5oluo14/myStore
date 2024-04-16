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
        <span>{{ __('الموظفين') }}</span>
    </a>
</li>

<li class="sidebar-item">
    <a href="{{ route('categories.index') }}" class='sidebar-link'>
        <i class="bi bi-shop"></i>
        <span>{{ __('الأقسام') }}</span>
    </a>
</li>

<li class="sidebar-item">
    <a href="{{ route('products.index') }}" class='sidebar-link'>
        <i class="bi bi-basket"></i>
        <span>{{ __('المنتجات') }}</span>
    </a>
</li>

<li class="sidebar-item">
    <a href="{{ route('orders.index') }}" class='sidebar-link'>
        <i class="bi bi-cart-x"></i>
        <span>{{ __('عمليات البيع') }}</span>
    </a>
</li>

<li class="sidebar-item">
    <a href="{{ route('reports.index') }}" class='sidebar-link'>
        <i class="bi  bi-file-bar-graph"></i>

        <span>{{ __('التقارير') }}</span>
    </a>
</li>

