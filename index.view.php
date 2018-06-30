<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>

        <h1>Task for the Day</h1>

        <ul>
            <li>
                <strong>Name: </strong> <?= $tasks['title'] ?>
            </li>

            <li>
                <strong>Due Date: </strong> <?= $tasks['due'] ?>
            </li>

            <li>
                <strong>Assigned To: </strong> <?= $tasks['assigned_to'] ?>
            </li>

<!--            <li>-->
<!--                <strong>Status: </strong> --><?//= $tasks['completed'] ? 'Complete' : 'Incomplete'; ?>
<!--            </li>-->


            <li>
                <strong>Status:</strong>

                <?php if($tasks['completed']) :  ?>
                    <span class="icon">#9989;</span>
                <?php else : ?>
                    <span class="icon">Incomplete;</span>
                <?php endif ?>
            </li>
        </ul>

</h1>
</body>
</html>