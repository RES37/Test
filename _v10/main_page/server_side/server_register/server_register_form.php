<div id="container">
        <button class="btn" onClick="window.location.href='../server_login/server_login_index.php';"><i class="fa fa-home"></i></button>
        <h1>Booth Register</h1>

        <form action="server_register_action.php" method="post">
                <label for="server_register_STRAND">Strand:</label>
                <select name="server_register_STRAND" id="server_register_STRAND" required>
                        <option value="it mawd">IT MAWD</option>
                        <option value="humss">HUMSS</option>
                        <option value="toper">TOPER</option>
                        <option value="abm">ABM</option>
                        <option value="cart">CART</option>
                </select><br><br>

                <label for="server_register_USERNAME">Username:</label>
                <input type="text" name="server_register_USERNAME" id="server_register_USERNAME" required><br><br>

                <input type="submit" value="Register"></input>
        </form>
</div>
