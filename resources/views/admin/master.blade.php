<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UE FAB</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/asset/admin/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="/asset/admin/css/font-awesome.min.css">
  <link rel="stylesheet" href="/asset/admin/css/ionicons.min.css">
  <link rel="stylesheet" href="/asset/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="/asset/admin/plugins/datatables/dataTables.bootstrap.css">

  <link rel="stylesheet" href="/asset/admin/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/asset/admin/css/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" href="/asset/admin/plugins/datatables/jquery.dataTables.min.css">

  <link rel="stylesheet" href="/asset/admin/plugins/sweet/sweetalert.css">      
  <script src="/asset/admin/plugins/sweet/sweetalert.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      @yield("head")

    </head>

    <body class="skin-blue sidebar-mini">
      <div class="wrapper">
       <header class="main-header">
        <!-- Logo -->
        <a href="/admin" class="logo">
         <!-- mini logo for sidebar mini 50x50 pixels -->
         <span class="logo-mini"><b>Ad</b>Min</span>
         <!-- logo for regular state and mobile devices -->
         <span class="logo-lg">Admin</span>
       </a>

       <!-- Header Navbar: -->
       <nav class="navbar navbar-static-top">
         <!-- Sidebar toggle button-->
         <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

           <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
             <img src="/uploads/user/default.jpg" class="user-image" alt="User Image">
             <span class="hidden-xs">{{-- Auth::guard("web")->user()->name --}}</span>
           </a>

           <ul class="dropdown-menu">
             <!-- User image -->
             <li class="user-header">
              <img src="/uploads/user/default.jpg" class="img-circle" alt="User Image">
              <p>
               {{-- Auth::guard("web")->user()->name --}}
               <small>{{-- Auth::guard("web")->user()->create_at --}}</small>
             </p>
           </li>

           <!-- Menu Footer-->
           <li class="user-footer">
            <div class="pull-left">
             <a href="#" class="btn btn-default btn-flat">Perfil</a>
           </div>
           <div class="pull-right">
             <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Salir</a>
           </div>
         </li>
       </ul>
     </li>

   </ul>
 </div>

</nav>
</header>

<aside class="main-sidebar">
  <section class="sidebar">
   <div class="user-panel">
    <div class="pull-left image">
     <img src="/uploads/user/default.jpg" class="img-circle" alt="User Image">
   </div>
   <div class="pull-left info">
     <p>{{-- Auth::guard("web")->user()->name --}}</p>
     <a href="#" class="fa fa-circle text-success">PERFIL</a>
   </div>
 </div>

 <ul class="sidebar-menu">
  <li class="header">PANEL</li>

  <li class="treeview">
    <a href="#"> 
      <i class="fa fa-user"></i> <span>Usuarios</span>
      <span class="pull-right-container">
       <i class="fa fa-angle-left pull-right"></i>
     </span>
   </a>

   <ul class="treeview-menu menu-open">
    <li>
    <a href="/admin/administrador"><i class="fa fa-list"></i>Admin</a>
   </li>
   <li class="">
     <a href="/admin/word/create"><i class="fa fa-plus-circle"></i>Alumnos</a>
   </li>
 </ul>

</li>

</ul>
</section>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <div class="row">
   <div class="col-lg-12 ">
     @if (Session::has('error'))
     <div class="alert alert-danger">
      {{ Session::get('error') }}<br/>
    </div>
    @endif

    @if (Session::has('errors'))
    <div class="alert alert-danger">
      @foreach (Session::get('errors')->all() as $erro )
      {{ $erro }}<br/>
      @endforeach
    </div>
    @endif

    @if (Session::has('success'))
    <div class="alert alert-success">
     {{Session::get('success')}}
   </div>
   @endif
 </div>
</div>
<!-- Content Header (Page header) -->
<section class="content-header">
 <h1> @yield('title_page') </h1> 
</section>

<!-- /. ROW  -->


<!-- Main content -->
<section class="content">
 <div class="row">
   <div class="col-md-12">
    @yield('options')
  </div>
  <div class="col-md-12">

    <div class="box">
      <div class="box-footer">
        @section('content')
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Temas</span>
              <span class="info-box-number"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        @show
      </div>
    </div>
  </div>
</div>

</section>
</div>

</div>
<script src="/asset/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="/asset/admin/js/bootstrap.min.js"></script>
<script src="/asset/app.js"></script>
@yield('modal')
@yield('footer')
@yield('scripts')
</body>
</html>