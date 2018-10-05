<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
  	<title>ToDoList</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/starter-template.css">
     <link rel="stylesheet" href="/css/bootstrap.min.css">
  </head>
  <body>
    @include('inc.navbar')
 
    <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-8">
            @include('inc.messengers')
            @yield('çontent')
          </div>
        </div>  
        <div class="col">
          <div class="col-md-4 col-lg-4">
             @section('sidebar')
            <div class="sidebar">
              <h3>Sidebar</h3>
               This is the sidebar              
            </div>
          </div>
        </div>
    </div>
  	<footer id="footer" class="text-center">
       <p>Copyright 2018 &copy; TODOLIST</p>
    </footer>
  	
  </body>
  </html>