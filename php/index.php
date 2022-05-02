<html>
    <head>
        <title>Student Management System</title>
    </head>
    <body>
        <div id="topBar">
            <a href="./modules/student/form.html" target="subwindow">Add new student</a>
            <a href="./modules/student/table.php" target="subwindow">Show all student</a>
            <a href="./modules/batch/form.html" target="subwindow">Add new batch</a>
            <a href="./modules/batch/table.php" target="subwindow">Show all batches</a>

        </div>
        <iframe name="subwindow"></iframe>
        <style>
            body{
                margin: 0;
            }

            iframe{
                width: 100%;
                height: 500px;
                border: none;
            }


            #topBar{
                box-sizing: border-box;
                height: 50px;
                padding: 10px 15px;
                bacKground-color: #008080;
            }
            #topBar a{
                color: white;
                text-decoration: none;
                font-family: sans-serif;
                display: inline-block;
                font-size: 16px;
                background-color: rgba(10, 10, 10, 0.3);
                padding: 6px 12px;
            }
            #topBar a:hover{
                color: #ccc;
            }
        
        </style>
    </body>
</html>