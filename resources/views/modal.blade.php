

<!--modal view start-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/components/modal.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/components/modal.css" type="text/css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/components/dimmer.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/components/dimmer.css" type="text/css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/components/transition.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" type="text/css" />

<div class="ui modal">
   <div class="html ui segment">
      <div class="ui header">Create a new task </div>
      <form action="/propeller/public/tasks/create" id="newtask" class="ui form">
         <div class="field">
            <label for="main">Name your task.</label>
            <input required id="main" name="task_name" type="text" placeholder="The task's name.  For example: 'Go walk the dog'." />
         </div>
         <div class="field">
            <label for="datepicker">When do you want it done by?</label>
            <input id="datepicker" type="text" name="due_date" placeholder="Completion date" />
         </div>
         
         <div class="field">
            <label for="parent">Category:</label>
            <input type="text" name="category" list="categories"/>
            <datalist id="categories">
               <option selected value="Personal"></option>
               <option selected value="Business"></option>
               <option selected value="Family"></option>
            </datalist>
         </div>
         <button class="ui fluid button teal" >Create</button>
      </form>
   </div>
</div>
<!--modal view end-->

