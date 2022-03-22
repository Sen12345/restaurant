<x-app-layout>
       
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')

   <style>
    th,
    tr,
    td {
        padding:20px 10px;
    }

    img:hover{transform: scale(4);}
  </style>
  </head>
  <body>
     <!-- container-scroller -->
      <div class="container-scroller">
        
     @include('admin.side-nav')

      @yield('content')

    
    @include('admin.adminscript')
    </div>
  </body>
</html>