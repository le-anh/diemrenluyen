<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header"></li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-cog"></i> <span>Danh mục</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <!-- <li><a href="{{route('tieuchi')}}"><i class="fa fa-book"></i> Tiêu chí</a></li> -->
      <li><a href="{{route('subadmin')}}"><i class="fa fa-dashboard"></i> Dashboard </a></li>
      <li><a href="{{route('updatedstudentprofile')}}"><i class="fa fa-pie-chart"></i> Thống kê nhập học</a></li>
      <li><a href="{{route('studentsearch')}}"><i class="fa fa fa-vcard"></i> Cập nhật hình thẻ</a></li>
      <!-- <li><a href="{{route('hockynamhoc')}}"><i class="fa fa-list-ol"></i> Học kỳ - Năm học</a></li>
      <li><a href="{{route('namhoc')}}"><i class="fa fa-calendar"></i> Năm học</a></li>
      <li class="active"><a href="{{route('hocky')}}"><i class="fa fa-list-alt"></i> Học kỳ</a></li> -->
    </ul>
  </li>
  <!-- <li class="treeview">
    <a href="#">
      <i class="fa fa-files-o"></i>
      <span>Trạng thái</span>
      <span class="pull-right-container">
        <span class="label label-primary pull-right">4</span>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
      <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
      <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
      <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
    </ul>
  </li>
  <li>
    <a href="pages/widgets.html">
      <i class="fa fa-th"></i> <span>Widgets</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-green">new</small>
      </span>
    </a>
  </li> -->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-pie-chart"></i>
      <span>Hoạt động-Sự kiện</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{route('trangthaihocky')}}"><i class="fa fa-toggle-on"></i> Trạng thái học kỳ</a></li>
      <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
      <li><a href="{{route('hoatdongsukien')}}"><i class="fa fa-support"></i> Hoạt động - Sự kiện</a></li>
      <li><a href="{{route('loaihd')}}"><i class="fa fa-reorder"></i> Loại hoạt động-sự kiện</a></li>
    </ul>
  </li>
  <!-- <li class="treeview">
    <a href="#">
      <i class="fa fa-laptop"></i>
      <span>UI Elements</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
      <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
      <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
      <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
      <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
      <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-edit"></i> <span>Forms</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
      <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
      <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-table"></i> <span>Tables</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
      <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
    </ul>
  </li>
  <li>
    <a href="pages/calendar.html">
      <i class="fa fa-calendar"></i> <span>Calendar</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-red">3</small>
        <small class="label pull-right bg-blue">17</small>
      </span>
    </a>
  </li>
  <li>
    <a href="pages/mailbox/mailbox.html">
      <i class="fa fa-envelope"></i> <span>Mailbox</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-yellow">12</small>
        <small class="label pull-right bg-green">16</small>
        <small class="label pull-right bg-red">5</small>
      </span>
    </a>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-folder"></i> <span>Examples</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
      <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
      <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
      <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
      <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
      <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
      <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
      <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
      <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-share"></i> <span>Multilevel</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-circle-o"></i> Level One
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Level Two
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
    </ul>
  </li>
  <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
  <li class="header">LABELS</li>
  <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
</ul>
  