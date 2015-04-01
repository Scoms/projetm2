{extends file="masterPage.tpl"} 
{block name="body"}
<div>
    <div class="register">
    <h1>Register</h1>
        <form method="post" action="?page=register">
            <p>First name :</p>
            <input type="text" name="firstname" />
            <p>Last name :</p>
            <input type="text" name="lastname" />
            <p>Phone :</p>
            <input type="text" name="phone" />
            <p>Mail :</p>
            <input type="text" name="mail" />
            <p>Password :</p>
            <input type="password" name="password" />

            <div class="adress" />
                <h2>Facturation address</h2>
                <p>Street</p>
                <input type="text" name="factStreet" />
                <p>City</p>
                <input type="text" name="factCity" />
                <p>Country</p>
                <input type="text" name="factCountry" />
            </div>
            <div class="adress" />
                <h2>Shipping address</h2>
                <p>Street</p>
                <input type="text" name="shipStreet" />
                <p>City</p>
                <input type="text" name="shipCity" />
                <p>Country</p>
                <input type="text" name="shipCountry" />
            </div>
    
        
            <input type="submit" class="redButton" value="Register" />
    
        </form>
    </div>
</div>
{/block}