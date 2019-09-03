<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>to-do App</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">    

</head>
<body>
    <div class="container">
        <p>
            <label for="new-task">Add Item</label>
            <input id="new-task" type="text"><button>Add</button>
        </p>


        <h3>Todo</h3>

        <ul id="incomplete-tasks">
            <li><input type="checkbox"><label>Pay Bills</label>
                <input type="text"><button class="edit">Edit</button><button class="delete">Delete</button>
            </li>
            <li class="editMode"><input type="checkbox"><label>Go Shopping</label>
                <input type="text" value="Go Shopping"><button class="edit">Edit</button><button class="delete">Delete</button>
            </li>
        </ul>


        <h3>Completed</h3>

        <ul id="completed-tasks">
            <li><input type="checkbox" checked><label>See the Doctor</label>
                <input type="text"><button class="edit">Edit</button><button class="delete">Delete</button>
            </li>
        </ul>
    </div>

    ​
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>