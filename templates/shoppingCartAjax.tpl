{extends file="masterPage.tpl"} 
{block name="body"}

<div id="cartContainer">

</div>


<script>
    $(document).ready(function(){
        Load();
    });
    
    function DeleteAndReload(id)
    {
        $.ajax({
          url: "?page=shoppingCartDelete&id=" + id,
        }).done(function(data) {
            $("#cartCount").text(data);
        }); 
        Load();       
        Load();

    }
    
    function Load()
    {
          $.ajax({
          url: "http://localhost:8888/ProjetM2/?page=shoppingCartFunc",
          context: document.body
        }).done(function(data) {
              $("#cartContainer").html(data);
        }); 
    }   //href="?page=shoppingCart&id={$pro['id']}&action=all"
    
</script>
{/block}
