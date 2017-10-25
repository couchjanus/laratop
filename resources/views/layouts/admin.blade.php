<!DOCTYPE html>
<html>
<head>
    <title>CRUD Application</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css
" rel="stylesheet">

<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>

        <script>

        tinymce.init({
            selector: "textarea",theme: "modern",width: 680,height: 300,
            plugins: [
                 "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                 "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                 "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
           ],
           toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
           toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
           image_advtab: true ,

           external_filemanager_path:"/filemanager/",
           filemanager_title:"Responsive Filemanager" ,
           external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
         });

        </script>

</head>
<body>
@include('layouts.partials.nav')
<div class="container">
    @yield('content')
</div>
<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>