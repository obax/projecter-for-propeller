<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css" type="text/css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" type="text/css" />
    <link rel="stylesheet" href="/propeller/resources/assets/css/style.css" type="text/css" />
</head>


<body>
    <div class="ui mobile container">
        <!--container start-->
    <div class="ui stacked segment" id="home">
  <!--Start title segment-->
  <a href="/propeller/public/tasks"><img src="https://todo-obax.c9users.io/projecter.png" alt="projecter" style="width: 30vw; max-width : 150px;" />
  </a>
<div class="row">
    <div><a id="createtask" class="ui button tiny fluid teal"><i class="icon add circle"></i>Create a task</a></div>
</div>
<!--end title segment-->
</div>


<!-- container end-->

@yield('body')
</div>
@include('modal')
@include('js')
</body>
</html>