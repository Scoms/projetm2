{extends file="masterPage.tpl"} 
{block name="body"}
<div class="main">
    <div class="sideMenu">
        <h1>
            SHOP BY
        </h1>
        <h2>CATEGORY</h2>
        <ul>
            {foreach from=$categories item=category}
                <li ><a href="?page=shop&category={$category['label']}" class="{$category['class']}">{$category["label"]} ({$category["count"]})</a>  </li>
            {/foreach}
            <li><a href="?page=shop" >All</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="searchBanner">
            <div class="top">
                <h1>VULPUTATE ADIPISCING</h1>
                <p>Hide Option <span class="glyphicon glyphicon-chevron-down"></span></p>
            </div>
            <div class="bottom">
                <img src="package/img-export/stange.png" />
                <div class="options">
                    <div>
                        <p>Show</p>
                        <input placeholder="12 per page"/>
                    </div>
                    <div>
                        <p>Sort by</p>
                        <select id="sortOption">
                            <option id="none"></option>
                            <option id="sortPrice" value="price">Price</option>
                            <option id="sortName" value="name">Name</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <div>
            {foreach from=$products item=product}    
                {include file="templates/thumbnail.tpl" product=$product }
            {/foreach}
        </div>
    </div>
</div>

<script type="text/javascript">
    
    
        $(document).ready(function(){
            $('#sortOption option[value="'+getUrlParameter('sortBy')+'"]').prop('selected', true);
            
            var selected = $("#sortOption value:price");
            //alert(selected);
            
            $( "#sortOption option:selected" ) ;
        });
                                               
        $("#sortOption").change( function(){
            var sort = $( "#sortOption option:selected" ).val();
            window.location = "?page=shop&sortBy="+sort + "&category=" +getUrlParameter('category')+"&straightSearch="+ $('#straightSearch').val() ;
        }
                            
        );
    
    function getUrlParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
} 
</script>
{/block}