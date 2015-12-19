<!DOCTYPE html>
<html>
    <head>
        <title>Rebel Scrum Homepage</title>
        <link rel="shortcut icon" href="images/icons/icon.ico">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="Author" content="rebel-scrum" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

        <link rel="stylesheet" href="css/csselements_mobile.css" />

        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    </head>

    <body>
        <h1>Welcome!</h1>
        <form action="login.php" method="post" target="_top">
            <table>
                <tr>
                    <td>Email:</td>
                    <td><input class="inputbox-mod" type="text" placeholder="you@email.com" name="user"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input class="inputbox-mod" type="text" placeholder="Password" name="password"></td>
                </tr>
                <tr>
                    <td><button class="submit-button" type="submit">Login</button></td>
                </tr>
            </table>
        </form>

        <br /> <br />

        <form action="web/register.php" method="post" target="_top">
            <table>
                <tr>
                    <td>New User?</td>
                    <td><button class="submit-button" type="submit">Register</button></td>
                </tr>
            </table>
        </form>
            
    </body>
</html>