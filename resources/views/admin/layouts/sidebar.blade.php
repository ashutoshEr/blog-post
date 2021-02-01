  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background: #42276f;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://www.kindpng.com/picc/m/72-723761_student-png-sammilani-mahavidyalaya-undergraduate-and-dummy-user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Amit kr. dubey</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="background:#c2b4e2;">MAIN NAVIGATION</li>
        <li><a href="{{ route('post.index')}}"><i class="fa fa-circle-o"></i> Posts</a></li>
        <li><a href="{{ route('category.index')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
        <li><a href="{{ route('tag.index')}}"><i class="fa fa-circle-o"></i> Tags</a></li>
      <li><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> Users</a></li>
      <li><a href="{{ route('role.index') }}"><i class="fa fa-circle-o"></i> Roles</a></li>
      <li><a href="{{ route('permission.index') }}"><i class="fa fa-circle-o"></i> Permissions</a></li>   
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  