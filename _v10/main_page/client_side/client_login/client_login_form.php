<div id="container">
        <h1>User Login</h1>

        <form action="client_login/client_login_action.php" method="post">
                <label for="client_login_STRAND">Strand:</label>
                <select name="client_login_STRAND" id="client_login_STRAND" required>
                        <option value="it mawd">IT MAWD</option>
                        <option value="humss">HUMSS</option>
                        <option value="toper">TOPER</option>
                        <option value="abm">ABM</option>
                        <option value="cart">CART</option>
                </select><br><br>
                
                <label for="client_login_USERNAME">Username:</label>
                <input type="text" name="client_login_USERNAME" id="client_login_USERNAME" required><br><br>

                <label for="client_login_PASSWORD">Password:</label>
                <input type="password" name="client_login_PASSWORD" id="client_login_PASSWORD" required><br><br>
                
                <input type="submit" value="Login"></input>
        </form>
</div>

