<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

				<!-- Sidebar - Brand -->
				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
								<div class="sidebar-brand-text mx-3">PPPI Admin</div>
				</a>

				<!-- Divider -->
				<hr class="sidebar-divider my-0">

				<!-- Nav Item - Dashboard -->
				<li class="nav-item {{ request()->is("dashboard") ? "active" : "" }}">
								<a class="nav-link" href="/dashboard">
												<i class="fas fa-fw fa-tachometer-alt"></i>
												<span>Dashboard</span></a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider">

				<!-- Heading -->
				<div class="sidebar-heading">
								Data
				</div>

				<!-- Nav Item - Tables -->
				<li class="nav-item {{ request()->is("resident*") ? "active" : "" }}">
								<a class="nav-link" href="/resident">
												<i class="fas fa-fw fa-table"></i>
												<span>KTA PPPI</span></a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider d-none d-md-block">

				<!-- Sidebar Toggler (Sidebar) -->
				<div class="d-none d-md-inline text-center">
								<button class="rounded-circle border-0" id="sidebarToggle"></button>
				</div>

</ul>
