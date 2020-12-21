
<aside class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <span class="brand-text font-weight-bold text-primary">{{ config('app.name') }}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar position-fixed">
    

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @include('layouts.menu')
        </ul>
    </nav>

  </div> <!--- End of Sidebar -->
</aside>

