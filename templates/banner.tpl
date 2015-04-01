<div class="banner" >     
    <div class="bannerLeft" >
            <a href="/ProjetM2">
                
            CHAUSSURE
            </a>
    </div>
    <div class="bannerRight">
        <div class="top">
            <ul class="">
                <li>Wish list(0)</li>
                <li>My Account</li>
                <li>Checkout</li>
                <li>Select a language <span class="glyphicon glyphicon-chevron-down" /></li>
            </ul>
        </div>
        <div class="bottom">
            <ul class="customList">
                <li>
                    <img src="package/img-export/phone.png" class="floatLeft">
                    <div class="floatRight">
                        <div class="top">
                            (08)4123541214
                        </div>
                        Support online
                    </div>
                </li>
                <li>
                    <a href="?page=checkout">
                        <img src="package/img-export/account.png" class="floatLeft">
                        <div class="floatRight">
                            <div class="top">
                                MY ACCOUNT
                            </div>
                            
                            {$userName}
                        </div>
                    </a>
                </li>
                <li class="itemsLi ">
                    <a href="?page=shoppingCart" class="itemShop">
                        <img src="package/img-export/shop.png" class="floatLeft">
                        <div class="floatRight">
                            <div class="floatLeft">
                                <div class="count" id="cartCount">
                                    {$cartCount}
                                </div>
                            </div>
                            <div class="floatRight">
                                item(s)
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <p>
            </p>
            <p>

            </p>
            <p>

            </p>
        </div>
    </div>
</div>

<div class="subBanner">
    <ul>
        <li>Hers</li>
        <li>His</li>
        <li>Kids</li>
        <li>Trainers</li>
        <li>Accessories</li>
        <li>Brands</li>
        <li>Sale</li>
        <li>Dealers</li>
    </ul>
    <div class="search">   
        <input type="text" id="straightSearchText" placeholder="Search entire store here"/>
        <button id="straightSearch" >Search</button>
    </div> 
</div>


<div class="promoBanner">
    <ul>
        <li>
            <div class="">
                <img src="package/img-export/sale.png" />
            </div>
            <div class="">
                10 % OFF FOR ALL STUDENTS
            </div>
        </li>
        <li>
            <div class="floatLeft">
                <img src="package/img-export/delivery.png" />
            </div>
            <div class="floatRight">
                INTERNATIONAL DELIVERY
                <div class="lighter">
                    FROM 5$
                </div>
            </div>
        </li>
        
        <li>
            <div class="floatLeft">
                <img src="package/img-export/return.png" />
            </div>
            <div class="floatRight">
                FREE RETURN 
                <div class="lighter">
                    WITH COLLECT +
                </div>
            </div>
        </li>
    </ul>
</div>

<div class="breadScrum">
    <div class="normal">
        HOME
    </div>
    <span class="glyphicon glyphicon-arrow-right"></span>
    <div class="normal">
        HIS
    </div>
    <span class="glyphicon glyphicon-arrow-right"></span>
    <div class="highlight">
        VULPUTATE ADIPISCING
    </div>
</div>

<script>
    function search()
    {
        
        var sort = $( "#sortOption option:selected" ).val();
        window.location = "?page=shop&sortBy="+sort +"&straightSearch="+ $('#straightSearchText').val() ;
    }
      $('#straightSearchText').keydown(function (event) { 
         if(event.which == 13)
             search();
    });
     $('#straightSearch').click(function (event) { 
         search();
    });
</script>