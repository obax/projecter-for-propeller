@extends('tmpltasks')

@section('title')
Projecter
@stop

@section('body')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment-with-locales.js"></script>
@if(count($tasks))
<div class="ui stacked segment" >
    <span title="Refresh the page for the correct count" class="ui circular label">{{count($tasks_todo)}}</span><span class="ui header">To do</span>
<table class="ui orange celled table" id="uncompleted">
    @if(count($tasks_todo))
    @foreach($tasks_todo as $todo)
    <tr>
        <td>
            </div class="row">
                 <!--<div class="ui slider checkbox">-->
                     <input autocomplete="off" taskid="{{$todo->id}}" name="{{$todo->id}}" type="checkbox" class="task">
                <!--</div>-->
            </div>
        </td>
        <td>
             </div class="row">
             <h5 class="ui header">
                 {{$todo->task_name}}
                <div class="sub header disabled">{{$todo->category}}
                 </div>             
             </h5>
             </div>  

        </td>
        <td>
            </div class="row">
            <h5 class="ui header">
            <script>
                document.write("Due " + moment("{{$todo->due_date}}", "YYYYMMDD").fromNow());
            </script>
                <div class="sub header disabled">
                    <script>
                document.write(moment("{{$todo->due_date}}", "YYYYMMDD").format('LL'));
                    </script>
                    
                 </div>             
             </h5>
             
             
            </div>
        </td>
        <td class="editcell">
            <i class="icon blue edit"></i>Edit
        </td>
        <td class="deletecell">
            <i class="icon red remove circle"></i><a href="#" class="delete" taskid="{{$todo->id}}">Delete</a>
        </td>
    </tr>
    @endforeach
    @endif
</table>
</div>

<div class="ui stacked segment" >
    <span title="Refresh the page for the correct count" class="ui circular label">{{count($tasks_done)}}</span><span class="ui header">Completed tasks</span>
    <table class="ui teal celled table strikethrough" id="completed">
    @if(count($tasks_done))
    @foreach($tasks_done as $done)
    <tr>
        <td>
            </div class="row">
                 <!--<div class="ui slider checkbox">-->
                     <input checked autocomplete="off" id="{{$done->id}}" name="{{$done->id}}" type="checkbox" class="task">
                <!--</div>-->
            </div>
        </td>
        <td>
             </div class="row">
             <h5 class="ui header">
                 {{$done->task_name}}
                <div class="sub header disabled ">{{$done->category}}
                 </div>             
             </h5>
             </div>  

        </td>
        <td>
            </div class="row">
            <h5 class="ui header">
            <script>
                document.write("Originally due " + moment("{{$done->due_date}}", "YYYYMMDD").fromNow());
            </script> 
                <div class="sub header disabled">
                    <script>
                document.write(moment("{{$done->due_date}}", "YYYYMMDD").format('LL'));
                    </script>
                    
                 </div>             
             </h5>
            </div>
        </td>
        <td class="editcell">
            <i class="icon blue edit"></i>Edit
        </td>
        <td class="deletecell">
            <i class="icon red remove circle"></i><a href="#" class="delete" taskid="{{$done->id}}">Delete</span>
        </td>
    </tr>
    @endforeach
    @endif
    </table>
</div>
@else
<div class="ui stacked segment" >
    <div class="ui header teal">
        <h1 style="font-size: 2.5vw">Welcome to Projecter!</h1>

    </div>
    <div class="ui subheader">
        Register your first task by clicking on the 'create a task' button.
    </div>
</div>
@endif
@stop

