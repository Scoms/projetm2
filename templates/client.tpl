{extends file="masterPage.tpl"} 
{block name="body"}

    Formulaire Client - {$message}
    <div class="container">
        <form method="post" action="index.php?action=validation&page=client" class="col-lg-6">
            <select name="civilite" value="M">
                <option value="M">M </option>
                <option value="Mlle">Mlle </option>
            </select>
            <input type="text"  name="Nom" placeholder="Nom" class="form-control"/>
            <input type="text"  name="Prenom" placeholder="Prenom" class="form-control"/>
            <input type="text"  name="Adresse" placeholder="Adresse" class="form-control"/>
            <input type="text"  name="cp" placeholder="CP" class="form-control" type="number"/>
            <input type="text"  name="ville" placeholder="Ville" class="form-control"/>
            <input type="tel"  name="tel" placeholder="Telephone" class="form-control" type="number"/>
            <input type="text"  name="email" placeholder="Email" class="form-control" type="email"/>
            <input type="text"  name="password" placeholder="Mot de passe" class="form-control" type="password"/>
            <input type="text"  name="login" placeholder="login" class="form-control" />
            <input type="submit" class="btn btn-primary" value="S'inscrire" />
        </form>
    </div>
{/block}
