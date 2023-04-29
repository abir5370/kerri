<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
        Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
    <ul class="nav">
  <li class="nav-item nav-category">Main</li>
  <li class="nav-item">
    <a href="{{route('home')}}" class="nav-link">
      <i class="link-icon" data-feather="box"></i>
      <span class="link-title">Home</span>
    </a>
  </li>
  <li class="nav-item nav-category">web apps</li>
  <li class="nav-item">

    <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
      <i class="link-icon" data-feather="mail"></i>
      <span class="link-title">User</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="emails">
      <ul class="nav sub-menu">
        <li class="nav-item">
          <a href="{{route('user')}}" class="nav-link">User List</a>
        </li>
      </ul>
    </div>
  </li>

  <li class="nav-item">

    <a class="nav-link" data-toggle="collapse" href="#banner" role="button" aria-expanded="false" aria-controls="emails">
      <i class="link-icon" data-feather="mail"></i>
      <span class="link-title">Banner</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="banner">
      <ul class="nav sub-menu">
        <li class="nav-item">
          <a href="{{route('add.banner')}}" class="nav-link">Add Banner</a>
            <a href="{{route('manage.banner')}}" class="nav-link">Manage Banner</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="nav-item">

     <a class="nav-link" data-toggle="collapse" href="#about" role="button" aria-expanded="false" aria-controls="emails">
         <i class="link-icon" data-feather="mail"></i>
         <span class="link-title">About</span>
         <i class="link-arrow" data-feather="chevron-down"></i>
     </a>
      <div class="collapse" id="about">
          <ul class="nav sub-menu">
              <li class="nav-item">
                  <a href="{{route('about')}}" class="nav-link">Add About</a>
                  <a href="{{route('social.icon')}}" class="nav-link">Social Icon</a>
              </li>
          </ul>
      </div>
  </li>

  <li class="nav-item">

    <a class="nav-link" data-toggle="collapse" href="#service" role="button" aria-expanded="false" aria-controls="emails">
        <i class="link-icon" data-feather="mail"></i>
        <span class="link-title">Services</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
     <div class="collapse" id="service">
         <ul class="nav sub-menu">
             <li class="nav-item">
                 <a href="{{route('add.service')}}" class="nav-link">Add Service</a>
                 <a href="{{route('manage.service')}}" class="nav-link">Manage Service</a>
             </li>
         </ul>
     </div>
 </li>

 <li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#client" role="button" aria-expanded="false" aria-controls="emails">
      <i class="link-icon" data-feather="mail"></i>
      <span class="link-title">Clients</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
  </a>
   <div class="collapse" id="client">
       <ul class="nav sub-menu">
           <li class="nav-item">
               <a href="{{route('client')}}" class="nav-link">Add Client</a>
               <a href="{{route('manage.client')}}" class="nav-link">Manage Client</a>
           </li>
       </ul>
   </div>
</li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#work" role="button" aria-expanded="false" aria-controls="emails">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Works</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="work">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{route('add.work')}}" class="nav-link">Add Work</a>
                        <a href="{{route('manage.work')}}" class="nav-link">Manage Work</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#blog" role="button" aria-expanded="false" aria-controls="emails">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Blog</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="blog">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{route('add.blog')}}" class="nav-link">Add Blog</a>
                        <a href="{{route('manage.blog')}}" class="nav-link">Manage Blog</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#contact" role="button" aria-expanded="false" aria-controls="emails">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Contact</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="contact">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{route('edit.contact')}}" class="nav-link">Edit Contact</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#inbox" role="button" aria-expanded="false" aria-controls="emails">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Inbox</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="inbox">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{route('manage.message')}}" class="nav-link">Manage Message</a>
                    </li>
                </ul>
            </div>
        </li>

</ul>
</div>
</nav>
<nav class="settings-sidebar">
<div class="sidebar-body">
<a href="#" class="settings-sidebar-toggler">
  <i data-feather="settings"></i>
</a>
<h6 class="text-muted">Sidebar:</h6>
<div class="form-group border-bottom">
  <div class="form-check form-check-inline">
    <label class="form-check-label">
      <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
      Light
    </label>
  </div>
  <div class="form-check form-check-inline">
    <label class="form-check-label">
      <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
      Dark
    </label>
  </div>
</div>
</div>
</nav>
