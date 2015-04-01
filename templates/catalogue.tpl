{extends file="masterPage.tpl"} 
{block name="body"}

    <h1>Catalogue</h1>

    <div class="alert alert-info">{$message}</div>

    <ul>
        {foreach from=$allBooks item=book}
            <form action="index.php?action=ajoutPanier&page=catalogue" method="post">
                <li> 
                    {$book->getTitre()} {$book->getPrix()} {$book->getDescription()}
                </li>
                <input type="hidden" name="ID" value="{$book->getId()}"/>
                <input value="ajouter au panier" type="submit" class="btn btn-primary" />  
            </form>
        {/foreach}
    </ul>
{/block}
