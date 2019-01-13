$(document).ready(function() {
    $('.fixed-action-btn').floatingActionButton();
    $('.modal').modal();
    $('select').formSelect();

    $('.fixed-action-btn').click(function() {
        $('#add-task-modal').modal().modal('open');
    });

});