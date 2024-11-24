
<style>
    .sidebar .nav.sub-menu {
        margin-bottom: 0;
        margin-top: 0;
        list-style: none;
        padding: 0.25rem 0 0 2.07rem !important;
        background: #4B49AC;
        padding-bottom: 12px;
    }
</style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      
      <!--<li class="nav-item">-->
      <!--  <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">-->
      <!--    <i class="icon-head menu-icon"></i>-->
      <!--    <span class="menu-title">User Manage</span>-->
      <!--    <i class="menu-arrow"></i>-->
      <!--  </a>-->
      <!--  <div class="collapse" id="auth">-->
      <!--    <ul class="nav flex-column sub-menu">-->
      <!--      <li class="nav-item"> <a class="nav-link" href="{{ route('admin.users.index')}}"> User List </a></li>-->
      <!--      <li class="nav-item"> <a class="nav-link" href="{{ route('admin.roles.index')}}"> Role Manage </a></li>-->
      <!--      <li class="nav-item"> <a class="nav-link" href="{{ route('admin.permissions.index')}}"> Permission Manage </a></li>-->
      <!--    </ul>-->
      <!--  </div>-->
      <!--</li>-->
      
     
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#service" aria-expanded="false" aria-controls="service">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Manage Service</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="service">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.services.index')}}"> Service List </a></li>
          </ul>
        </div>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#education" aria-expanded="false" aria-controls="education">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Manage Edu:</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="education">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.education.index')}}"> Education List </a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#experience" aria-expanded="false" aria-controls="experience">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Manage Exp:</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="experience">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.experience.index')}}"> Experience List </a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#certification" aria-expanded="false" aria-controls="certification">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Manage Cert:</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="certification">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.certification.index')}}"> Certification List </a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#blogs" aria-expanded="false" aria-controls="blogs">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Manage Blog</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="blogs">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.blogs.index')}}"> Blog List </a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#port" aria-expanded="false" aria-controls="port">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Manage Portfolio</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="port">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.portfolio.index')}}"> Portfolio List </a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#social" aria-expanded="false" aria-controls="social">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Manage Social</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="social">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.social.index')}}"> Social List </a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#contacted_user" aria-expanded="false" aria-controls="contacted_user">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Contact User</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="contacted_user">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.contact.index')}}"> Contact User List </a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.business.index')}}">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Setting</span>
        </a>
      </li>
      
    </ul>
</nav>