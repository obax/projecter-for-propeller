<script>
    $("a.delete").click(function() {
        var parent_div = $(this).parent().parent();
        parent_div.slideUp();
        jQuery.ajax({
            type: 'DELETE',
            url: "/propeller/public/tasks/" + $(this).attr('taskid')
        });
    });




    $('#createtask').click(function() {
        $('.ui.modal')
            // .modal('setting', 'transition', 3)
            .modal('show');
    });

    $(function() {
        $("#datepicker").datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: 0
        });
    });

    $("input.task").click(function() {
        var parent_div = $(this).parent().parent();
        if ($(this).prop('checked')) {
            parent_div.slideUp();
            parent_div.appendTo("#completed");
            parent_div.slideDown();
            $('#count-done').text(function(index,string){
              return parseInt(string) + 1;
            });
            $('#count-todo').text(function(index,string){
              return parseInt(string) - 1;
            });
            jQuery.ajax({
                url: "/propeller/public/tasks/" + $(this).attr('taskid') + "/edit?is_completed=1"
            }).done(

                function() {
                    swal("Good job!", "You're doing well.", "success");

                });
        } else {
            parent_div.slideUp();
            parent_div.appendTo("#uncompleted");
            parent_div.slideDown();
            $('#count-done').text(function(index,string){
              return parseInt(string) - 1;
            });
            $('#count-todo').text(function(index,string){
              return parseInt(string) + 1;
            });
            jQuery.ajax({
                url: "/propeller/public/tasks/" + $(this).attr('taskid') + "/edit?is_completed=0"
            });
        }

    });
</script>