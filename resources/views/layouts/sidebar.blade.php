<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="/adminlte/img/kds3.png"
           alt="KDSBS"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">C&C Project</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!--<li class="nav-header">EXAMPLES</li>-->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          @if(auth()->user()->userprof == 1)
          <li class="nav-item">
            <a href="/user" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../gallery.html" class="nav-link">
              <i class="nav-icon far fa-folder"></i>
              <p>
                Master Data
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/paramh" class="nav-link">
              <i class="nav-icon far fa fa-cogs"></i>
              <p>
                Parameter
              </p>
            </a>
          </li>
          @endif
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>