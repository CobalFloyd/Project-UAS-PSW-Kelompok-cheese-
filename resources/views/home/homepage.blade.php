<!DOCTYPE html>
<html lang="en">
   <head>
        @include('home.homecss')
        <link
          href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css"
          rel="stylesheet"
        >
   </head>
   <body>
      <div class="header_section">
        @include('home.header')
         
         @include('home.banner')
      </div>

      @include('home.services')


      @include('home.cards')
  
      @include('home.about')

      @include('home.footer')
   </body>
</html>