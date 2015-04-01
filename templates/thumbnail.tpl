
<div class="mythumbnail {$product['class']}" id="th_{$product['id']}">
    <div class="picture">
        <img id="zoomHover" src ="img/{$product['image']}" class="zoom" data-zoom-image="img/{$product['image']}"//>
        <input value="QUICK SHOP" type="button"/>
    </div>
    <img class="pictureShadow" src="package/img-export/thumbnail_bottom.png">
    
    <div class="text">
        <div id="th_{$product['id']}_name">{$product["name"]}</div>
        {$product["description"]}
    </div>
    <div class="price" id="th_{$product['id']}_price">
        ${$product["price"]}
    </div>
    <div class="actions">
            <input id="{$product['id']}"  onclick="submit({$product['id']})" type="button" class="redButton" value="ADD TO CART" />

        <div class="buttons">
            <div>
                <img src="package/img-export/2015---TP-WEB---IHM-export_26.png" />
            </div>
            <div>
                
                <img src="package/img-export/2015---TP-WEB---IHM-export_30.png" />
            </div>
        </div>
    </div>
</div>

<script>
    
    function submit(id)
    {
        $.post( "?page=shop", { id: id} );
        $("#cartCount").text( parseInt($("#cartCount").text()) + 1);
        
        swal("good job !","Added to cart");
    }
    
</script>