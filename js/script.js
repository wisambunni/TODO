$(document).ready(function() {
    $('.fixed-action-btn').floatingActionButton();
    $('.modal').modal();

    $('.fixed-action-btn').click(function() {
        $('#add-task-modal').modal().modal('open');
    });

});