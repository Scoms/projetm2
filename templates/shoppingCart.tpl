
    <div class="message">
        <span class="glyphicon glyphicon-ok"></span> Bla bla bla lorem ipsum amet portiiis 
    </div>  
    <div class="caddie">
        
        <table>
            
            <!-- Header -->
            <tr class="header">
                <td class="name">Product name</td>
                <td class="description"></td>
                <td class="edit"></td>
                <td class="price">Unit Price</td>
                <td class="qty">Qty</td>
                <td class="subtotal">Subtotal</td>
                <td class="remove"></td>
            </tr>
            
            {foreach from=$products item=pro}
                <tr class="item">
                        <td class="thumb"><img alt="X" src="img/{$pro['image']}"/>
                            
                        </td>
                    <td>{$pro['description']}</td>
                    <td class="bold">Edit</td>
                    <td class="red">${$pro['price']}</td>
                    <td class="input"><input type="number" class="qty" value="{$qtys[$pro['id']]}" id="{$pro['id']}"/></td>
                    <td class="red">${$pro['price'] * $qtys[$pro['id']]}</td>
                    <td class="red cross">
                            <a class="red cross" id="{$pro['id']}" onclick="DeleteAndReload({$pro['id']})">
                            x
                            </a>
                    </td>
                </tr>
            {/foreach}
            
        </table>
    </div>

    <div class="buttonsC"> 
        <input class="blackButton" value="CONTINUE SHOPPING" id="continueSHop">
        </input>
        <input type="button" value="UPDATE SHOPPING CART"  class="redButton"/>
    </div>

<script>
    
$( "#continueSHop" ).click(function() {
    window.location = "/ProjetM2/?page=shop";
});
    
$(".qty").change(function(){
    $.ajax({
          url: "http://localhost:8888/ProjetM2/?page=updateCart&id=" +this.id + "&val=" + this.value,
          context: document.body
        }).done(function(data){ 
        $("#cartCount").text(data);
        
    Load();
    
    });    
});
    
</script>