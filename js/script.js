$(document).ready(function() {
    $('.fixed-action-btn').floatingActionButton();
    $('.modal').modal();
    $('select').formSelect();

    $('.fixed-action-btn').click(function() {
        $('#add-task-modal').modal().modal('open');
    });

    $('.task-edit-btn').click(function() {
        var $row = $(this).closest('tr');
        var $tid = $row.find('.tid').text();
        var $tname = $row.find('.tname').text();
        var $tstatus = $row.find('.tstatus').text();
        console.log($tid);
        console.log($tname);
        console.log($tstatus);
        $('#task-edit-form').attr('action', 'php/edit_task.php?id='+$tid);
        document.forms['task-edit-form'].elements['task-name'].value = $tname;
        document.forms['task-edit-form'].elements['task-status'].value = $tstatus;
        $('#edit-task-modal').modal().modal('open');
    });

});