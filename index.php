<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("inc/headers.php"); ?>
    <title>ToDo</title>
</head>
<body>
    <?php include("inc/toolbar.php"); ?>

    <div class="container">
        <div class="row center">
            <div class="col s11">
            </div>

            <div class="container">
                <div id="content" class="col s12">
                    <table class="centeamber">
                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                        <!-- TODO: Include a PHP script that gets all the elements in todo database -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large amber darken-4">
                <i class="large material-icons">add</i> 
            </a>
        </div>

        <div id="add-task-modal" class="modal">

            <div class="modal-content">
                <h4>Add a Task</h4>
                <div class="row">
                    <form action="php/add_task.php" method="post" id="task-add-form" class="col s12">

                        <div class="row modal-form-row">
                            <div class="input-field col s12">
                                <input type="text" name="task-name" id="task-id" class="validate" required>
                                <label for="name">Task Name</label>
                            </div>
                        </div>

                        <div class="row modal-form-row">
                            <div class="input-field col s12">
                                <!-- <input type="text" name="task-name" id="task-id" class="validate" requiamber> -->
                                <!-- <label for="name">Task Status</label> -->
                                <select>
                                    <option class="amber darken-4" value="Pending">Pending</option>
                                    <option class="amber darken-4" value="Started">Started</option>
                                    <option class="amber darken-4" value="Completed">Completed</option>
                                </select>
                                <label>Status</label>
                            </div>
                        </div>

                        <div class="modal-footer">
                        
                            <input type="submit" name="enter" class="modal-action waves-effect-waves-amber btn-flat">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include("inc/scripts.php"); ?>
</body>
</html>