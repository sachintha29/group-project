<!--Sachintha -->
@extends('admin.master')
@section('content')

		{{-- <aside class="control-sidebar control-sidebar-dark"> --}}
		{{-- </aside> --}}
		<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<title>Athwela Admin Panel</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/font-awesome.css">
<link rel="stylesheet" href="/css/study.css">
<link rel="stylesheet" href="/css/swipebox.css">
<link rel="stylesheet" href="/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

 

 
</head>



@stack('styles')
</head>
<body>
	<div>
	@include('admin.partial.nav')
	</div>

	<div id="app">
		@yield('content')
	</div>

<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
<script src="/js/adminlte.js"></script>
@stack('scripts')
<!-- start-smoth-scrolling -->
<script type="text/javascript">
	$.ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
						
	$().UItoTop({ easingType: 'easeOutQuart' });
								
</script>
<br><br><br><br>
	@include('admin.partial.sidebar')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Categories Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Categories</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 40px" color="solid black">Category ID</th>
                    <th>Category Name</th>
                    <th>Create By</th>
                    <th>Update By</th>
                    <th class="center">Actions</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  @foreach($categories as $category)
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->created_at}}    </td>
                    <td> {{$category->updated_at}}   </td>
                    <td class="center"><span><a href="{{ url('admin/edit-category/'.$category->id)}}" class="current">Edit</span></a>Delete</th>
                      </tr> 
                
                 @endforeach
                
                  </tbody>
        
                  
                
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            
            
            
            
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
        

<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->




    
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<br>
<br>
<br>
</body>
</html>
 @endsection