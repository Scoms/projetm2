{extends file="masterPage.tpl"} 
{block name="body"}
<div>
    <div class="register">
    <h1>My infos</h1>
        
            <p>First name : {$user['firstname']}</p>
            <p>last name : {$user['lastname']}</p>
            <p>Phone : {$user['phone']}</p>
            <p>Mail : {$user['mail']}</p>
            <p>Password : {$user['password']}</p>
            
            <div class="adress" />
                <h2>Facturation address</h2>
                <p>Street : {$user['factAddress']}</p>
                <p>City : {$user['factCity']}</p>
                <p>Country : {$user['factCountry']}</p>
            </div>
            <div class="adress" />
                <h2>Shipping address</h2>
                <p>Street: {$user['shipAddress']}</p>
                <p>City: {$user['shipCity']}</p>
                <p>Country: {$user['shipCountry']}</p>
            </div>

            <form method="post" action="">
                <input type="submit" value="Log Out" name="logOut" class="redButton"/>
            </form>
    </div>
</div>
{/block}