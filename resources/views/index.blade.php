<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <title>Post Retratos</title>
      
        <link rel="stylesheet" href="{{asset('js/styles.css')}}">  
        <style type="{{asset('js/text/css')}}"></style>
        <link rel="icon" type="image/x-icon" href="{{asset('js/favicon.ico')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            
    </head>
    <body>
        <app-root></app-root>
        <app-post></app-post>
        <script src="{{asset('js/runtime.js')}}" defer></script>
        <script src="{{asset('js/polyfills.js')}}" defer></script>
        <script src="{{asset('js/vendor.js')}}" defer></script>
        <script src="{{asset('js/main.js')}}" defer></script>
    </body>
</html>
        