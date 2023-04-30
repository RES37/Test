<div id="container">
        <h1>Admin Login</h1>
        
        <form action="server_login/server_login_action.php" method="post">
                <label for="server_login_NAME">Admin Name:</label>
                <input type="text" name="server_login_NAME" id="server_login_NAME" required><br><br>

                <label for="server_login_PASSWORD">Password:</label>
                <input type="password" name="server_login_PASSWORD" id="server_login_PASSWORD" required><br><br>
                
                <input type="submit" value="Login"></input>
        </form>
</div>