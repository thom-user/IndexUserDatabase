<script language="JavaScript">
    <!--hide
    var password;
    var pass1="password";
    password=prompt('Enter password to view page',' ');
    if (password == pass1)
    alert('Correct password, click OK to enter.');
    else
    {
        window.location="https://bloomington.iu.edu/index.html";
    }
    //-->
</script>

<?php

require_once('IUdb.php');
$query = "select * from tisubmission";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>IUDatabaseProjectAdminPage</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6 text-center">IU Online Teaching Interest Form Admin Page</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td> User ID </td>
                                <td> First Name </td>
                                <td> Middle Name </td>
                                <td> Last Name </td>
                                <td> Highest Degree </td>
                                <td> IU Employee? </td>
                                <td> University ID </td>
                                <td> Teaching Experience </td>
                                <td> Has taught online? </td>
                                <td> Has taught undergraduate courses? </td>
                                <td> Has taught graduate courses? </td>
                                <td> Preferred degree program </td>
                                <td> CV </td>
                            </tr>
                            <tr>
                            <?php

                                while($row = mysqli_fetch_assoc($result))
                                {
                            ?> 

                                <td><?php echo $row['ID']?></td>
                                <td><?php echo $row['firstName']?></td>
                                <td><?php echo $row['middleName']?></td>
                                <td><?php echo $row['lastName']?></td>
                                <td><?php echo $row['hDegree']?></td>
                                <td><?php echo $row['IUEmployee']?></td>
                                <td><?php echo $row['IU_ID']?></td>
                                <td><?php echo $row['teachingExp']?></td>
                                <td><?php echo $row['taughtOnline']?></td>
                                <td><?php echo $row['taughtUG']?></td>
                                <td><?php echo $row['taughtG']?></td>
                                <td><?php echo $row['prefDegreeProgram']?></td>
                                <td><?php echo $row['fileUpload']?></td>
                                
                            </tr>
                            <?php
                                }
                                    
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>