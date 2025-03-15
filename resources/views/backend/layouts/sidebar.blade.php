 <!-- ========== App Menu ========== -->
 <div class="app-menu navbar-menu">
     <!-- LOGO -->
     <div class="navbar-brand-box">
         <!-- Dark Logo-->
         <a href="index.html" class="logo logo-dark">
             <span class="logo-sm">
                 <img src="themeadmin/velzon/assets/images/logo-sm.png" alt="" height="22">
             </span>
             <span class="logo-lg">
                 <img src="themeadmin/velzon/assets/images/logo-dark.png" alt="" height="17">
             </span>
         </a>
         <!-- Light Logo-->
         <a href="index.html" class="logo logo-light">
             <span class="logo-sm">
                 <img src="themeadmin/velzon/assets/images/logo-sm.png" alt="" height="22">
             </span>
             <span class="logo-lg">
                 <img src="themeadmin/velzon/assets/images/logo-light.png" alt="" height="17">
             </span>
         </a>
         <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
             id="vertical-hover">
             <i class="ri-record-circle-line"></i>
         </button>
     </div>

     <div id="scrollbar">
         <div class="container-fluid">

             <div id="two-column-menu">
             </div>
             <ul class="navbar-nav" id="navbar-nav">
                 <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                 <li class="nav-item">
                     <a class="nav-link menu-link" href="{{ route('dashboard') }}"
                         role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                         <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                     </a>


                 </li> <!-- end Dashboard Menu -->


                 <li class="nav-item">
                     <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarMultilevel">
                         <i class="ri-share-line"></i> <span data-key="t-multi-level">Quản lý thành viên</span>
                     </a>
                     <div class="collapse menu-dropdown" id="sidebarMultilevel">
                         <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                 <a href="#" class="nav-link" data-key="t-level-1.1">Quản lý nhóm thành viên</a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('users.index') }}" class="nav-link" data-key="t-level-1.1">Quản lý
                                     thành viên</a>
                             </li>

                         </ul>
                     </div>
                 </li>

             </ul>
         </div>
         <!-- Sidebar -->
     </div>

     <div class="sidebar-background"></div>
 </div>
 <!-- Left Sidebar End -->
