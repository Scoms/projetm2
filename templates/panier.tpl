{extends file="masterPage.tpl"} 
{block name="body"}

    <h1>Mon Panier</h1>

<h2>Transac : 
<div id="transac"></div></h2>

    <div class="alert alert-info">{$message}</div>

    <ul>
        {foreach from=$books item=book}
                <li> 
                    {$book->getTitre()} {$book->getPrix()} {$book->getDescription()}
                </li>
        {/foreach}
    </ul>

    <a value="valider" id="resFulCall" class="btn btn-valider" onClick="resCall()"/> Valider</a>

    <script type="text/javascript">
        
         function resCall(){
             
            var rootUrl = "http://localhost:8888/m2ilcEnsiie/php/serverRestFul.php/hello/";  
            var myUrl = rootUrl + "a/b/c";
             $.ajax({
                 type: 'GET',
                 url: myUrl,
                 
                 success: function(data){
                     $("#transac").text(data);
                }
             });
         };
        
        
    </script>
{/block}