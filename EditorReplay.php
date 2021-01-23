<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname);

?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>Replay Message | EBC</title>
        <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->

        <!-- links of bootstrap 3 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        table
        {
            margin-bottom: 44px;
            width: 100%;
        }
        th,td
        {
            line-height: 44px;
            font-size: 14px;
            font-weight: 400;
            padding-top: 22px;
            text-transform: uppercase;
            padding-bottom: 22px;
            vertical-align: top;
        }
        th 
        {
            color: #648880;
            font-size: 24px;
            border-bottom: 1px solid #dfe2e5;
            padding-top: 21px;
            padding-right: 45px;
            text-align: right;
            width: 20%;
        }
        td 
        {
            border-bottom: 1px solid #dfe2e5;
            padding-top: 21px;
            width: 40%;
        }
    </style>

    </head>
    
    <body>		
        <!-------------------------------------------------------Start of Header---------------------------------------------------------------->
        <?php include "header.php";?>
        <!-------------------------------------------------------End of Header------------------------------------------------------------------>

        <!-------------------------------------------------------Start of Content--------------------------------------------------------------->
            <?php
                $sql = "SELECT `sender`, `Headline`, `subject`, `message` FROM `messages` WHERE ID =" .$_GET['id'] ;
                $result = mysqli_query($conn,$sql);	
                $row=mysqli_fetch_array($result);
                //echo print_r($row); 
            ?>
            <div class="container">
            <form action="EditorReplay_PHP.php" method="post">
                <table>
                        <tr>
                            <th scope="row">Sender</th>
                           <?php echo "<td colspan='2'><input type='' value='".$row["sender"]."' name='sendr' style='border:none; background:none; width:100%;' ></td>" ?>
                        </tr>
                        <tr>
                            <th scope="row">Headline</th>
                            <?php echo "<td colspan='2'><input type='' value='".$row["Headline"]."' name='headline' style='border:none; background:none; width:100%;'  ></td>" ?>
                        </tr>
                        <tr>
                            <th scope="row">Subject</th>
                            <td colspan="2"> <?php echo $row['subject']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Message</th>
                            <td colspan="2"> <?php echo $row['message']; ?></td>
                        </tr>
                </table>


                
                <input type="text" class="form-control" placeholder="SUBJECT" name="editorsubject">
                <br><br>

                <textarea  class="form-control" placeholder="YOUR REPLAY" name="yourreplay"></textarea>
                <br> 

                <button class="btn btn-primary"  name="replay" ><b> Replay </b></button>
                <br><br>

                </form>
            </div>
        <!-------------------------------------------------------End of Content----------------------------------------------------------------->

        <!-------------------------------------------------------Start of Footer---------------------------------------------------------------->
        <?php include "footer.php";?>
        <!-------------------------------------------------------End of Footer------------------------------------------------------------------>
    </body>
</html>
