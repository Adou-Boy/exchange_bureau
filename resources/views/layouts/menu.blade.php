<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">
        <i class="nav-icon fas fa-th text-orange"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('transaction.index') }}" class="nav-link">
        <i class="nav-icon fas fa-money-check-alt text-info"></i>
        <p>Transaction</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-cogs text-success"></i>
        <p>
        Configurations
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>

    <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
        <a href="{{ route('config_destination.index') }}" class="nav-link">
            <i class="fas fa-circle nav-icon text-warning"></i>
            <p>Destination</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('config_service.index') }}" class="nav-link">
            <i class="fas fa-circle nav-icon text-info"></i>
            <p>Service</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('config_currency.index') }}" class="nav-link">
            <i class="fas fa-circle nav-icon text-success"></i>
            <p>Currency</p>
        </a>
        </li>
    </ul>
</li>
