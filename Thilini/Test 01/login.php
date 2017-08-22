<?php

session_start();

?>


<html>

    <head>
        <title>Log In</title>

    </head>

    <body>

        <form action="loginaction.php" method="POST">

            <table>

                <tr>
                    <td><label>User Name:</label></td>
                    <td><input type="text" name="username" placeholder="username/email"></td>
                </tr>

                <tr>
                    <td><label>Password:</label></td>
                    <td><input type="password" name="password"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit" value="Log In"></td>
                </tr>
            </table>

        </form>



    </body>

</html>