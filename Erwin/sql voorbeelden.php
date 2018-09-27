<!doctype html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>To Do List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style></style>
</head>

<body>
    <!-- header -->
    <div class="row justify-content-center">
        <div class="col mx-1 mb-5 justify-content-around">
            <div class="jumbotron jumbotron-fluid justify-content-center">
                <div class="container">
                    <h1 class="display-4">To-Do list</h1>
                    <p class="lead">This is going to be a to-do list using a MYSQL db and PHP with bootstrap styling.</p>
                    
                    <!-- button to toggle the input form below -->
                    <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse" data-target="#inputForm" aria-expanded="false" aria-controls="inputForm">Add new to-do</button>
                    <br>
                    <!-- Input form to add a new item. Hidden by default -->
                    <div id="inputForm" class="collapse">
                        <div class="row d-sm-flex d-sm-flex justify-content-center">
                        
                            <form action="dbaction.php?action=new" method="post">
                                <div class="form-group">
                                    <label for="title">Titel</label>
                                    <input type="text" class="form-control" name="title" placeholder="Titel" required>
                                </div>
                                <div class="form-group">
                                    <label for="text">Omschrijving</label>
                                    <textarea class="form-control" name="text" placeholder="Omschrijving" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="dateexpire">Deadline</label>
                                    <input type="date" class="form-control" name="dateexpire" placeholder="2018-1-1" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Huidige status</label>
                                    <select name="status" class="form-control">
                                        <option selected value="1">To-do</option>
                                        <option value="2">Mee bezig</option>
                                        <option value="3">Klaar</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Submit" id="submit_form">Submit</button>
                            </form> 
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>  



    <div class="row d-sm-flex d-sm-flex justify-content-center">
        <?php
            $setColor = "";

            // Get and output current to-do items.
            require 'dbconnect.php';
            $sql = "SELECT * FROM todolist ORDER BY status, dateadded ASC";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row.
                while($row = $result->fetch_assoc()) {
                    $currentstatus = $row['status'];
                    
                    // Convert statusses to read-able format and assign colored background class.
                    switch ($currentstatus) {
                        case "1":
                            $currentstatus = "to do";
                            $setColor = "item-to-do";
                            break;
                        case "2":
                            $currentstatus = "in progress";
                            $setColor = "item-in-progress";
                            break;
                        case "3":
                            $currentstatus = "done";
                            $setColor = "item-done";
                            break;   
                        default:
                        $currentstatus = "to do";
                        $setColor = "item-to-do";                            
                    }
                    // Output (by echo) the to-do items in bootstrap cards.
                    echo "<div class=\"d-flex flex-column\">";
                    echo "<div class=\"p-2\">";
                        echo "<div class=\"card my-3 mx-4 roundedborders " . $setColor . "\">";
                            echo "<div class=\"card-body\">";
                                echo "<div class=\"card-header\">";
                                    echo "<h5 class=\"card-title\">" . $row['title'] . "</h5>";
                                    echo "<h6 class=\"card-subtitle mb-2 text-muted\">" . $currentstatus . "</h6>";
                                echo "</div>";
                                echo "<p class=\"card-text\">" . $row['text'] . "</p>";
                                echo "<div class=\"row align-bottom justify-content-end\">
                                        <a class=\"btn btn-primary button50 mx-1\" href=\"dbaction.php?action=edit&id=" . $row['ID'] . "\" class=\"card-link\" style=\"float:left\">edit</a>";
                                echo "<a class=\"btn btn-primary button50 mx-1\" data-toggle=\"collapse\" href=\"#conformationDelete" . $row['ID'] . "\" role=\"button\" aria-expanded=\"false\" aria-controls=\"conformationDelete" . $row['ID'] . "\">delete</a></div>";
                                echo "<div id=\"conformationDelete" . $row['ID'] . "\" class=\"collapse align-bottom\"><div class=\"alert alert-danger mx-1 my-3\" role=\"alert\">Are you sure?</div>";
                                echo "<div class=\"row align-bottom justify-content-end\">
                                        <a href=\"dbaction.php?action=delete&id=" . $row['ID'] . "\" class=\"btn btn-danger mx-1 button50\" style=\"float:left\">YES</a>
                                        <a href=\"#conformationDelete" . $row['ID'] ."\" class=\"btn btn-success mx-1 button50\" data-toggle=\"collapse\" href=\"#conformationDelete\" role=\"button\" aria-expanded=\"false\" aria-controls=\"conformationDelete\">NO</a></div></div>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo "</div>";

                }
            } else {
                echo "<h2 class=\"display-4\">Geen to-do items gevonden</h2>";
            }

            // Close database connection.
            $conn->close();
        ?>
    </div>

    

 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




</body>
</html>