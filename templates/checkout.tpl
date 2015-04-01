{extends file="masterPage.tpl"} 
{block name="body"}
<div class="main">
    <div class="sideMenu">
        <h1>
            CHECKOUT PROGRESS
        </h1>
        <ul>
            <li>Billing Address</li>
            <li>Shipping Address</li>
            <li>Shipping Method</li>
            <li>Payment Method</li>
        </ul>
    </div>

    
    <div class="container">
        <div class="checkout">
            <div class="currentStep">
                <div class="numberedTitle-red numberedTitle">  
                    <span>1</span>
                    <h2 >CHECKOUT METHOD</h1>
                </div>
                <h2>Checkout As A Guest or Register</h2>
                <p>Register With us for futher convienience</p>
                
                <form method="post" action="" />
                    <div class="row">
                        <input type="radio" value="guest" name="registerType" /><label>Checkout As A Guest</label>
                    </div>
                    <div class="row">
                        <input type="radio" value="register" name="registerType" /><label>Register</label> 
                    </div>
                    <p>Register and Save Time!</p>
                    <p>Register With us for futher convienience</p>
                    <p>> Checkout As A Guest</p>
                    <p>> Register</p>
                    <div class="block">
                        <input type="submit" class="redButton" value="CONTINUE"/>
                    </div>
                </form>
            </div>
            <div class="numberedTitle">  
                <span>2</span>
                <h2>BILLING INFORMATION</h2>
            </div>
            <div class="numberedTitle">  
                <span>3</span>
            <h2>SHIPPING INFORMATION</h2>
            </div>
            <div class="numberedTitle">  
                <span>4</span>
            <h2>SHIPPING METHOD</h2>
            </div>
            <div class="numberedTitle">  
                <span>5</span>
            <h2>PAYMENT INFORMATION</h2>
            </div>
            <div class="numberedTitle">  
                <span>6</span>
            <h2>ORDER REVIEW</h2>
            </div>
        </div>
        
        
        <div class="login">
            <form method="post" action="?page=login">
                <h2 >Login</h2>
                <p>Already registererd? Please login bellow :</p>
                <h2 >Email Address:</h2>
                <input type="text" name="email">
                <h2>Password:</h2>
                <input type="password" name="password"/>
                <div class="asterisk">* Required field</div>
                <input type="submit" class="redButton" value="LOG IN"/>         
            </form>
        </div>
    </div>
</div>
{/block}