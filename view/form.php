<form method="POST" action="index.php">
    <fieldset>
        <legend>Customer Satisfaction Form</legend>
        
        <div class="form-group">
            <label for="lastname" class="form-label mt-4">Nom</label>
            <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Entrez votre nom ici" required="">
        </div>

        <div class="form-group">
            <label for="firstname" class="form-label mt-4">Prénom</label>
            <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="firstnameHelp" placeholder="Entrez votre prenom ici" required="">
        </div>

        <div class="form-group">
            <label for="phone" class="form-label mt-4">Numéro de téléphone</label>
            <input type="tel"  name="phone" class="form-control" id="phone" aria-describedby="phoneHelp" pattern="0[1-9][0-9]{8}" placeholder="0123456789" required="">
        </div>

        <div class="form-group">
            <label for="date" class="form-label mt-4">Date de l'achat</label>
            <input type="date"  name="date" class="form-control" id="date" aria-describedby="dateHelp" required="">
        </div>

        <legend class="mt-4">L'agent a-t-il été agréable ?</legend>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="question1" id="question11" value="2">
            Oui
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="question1" id="question12" value="0">
            Non
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="question1" id="question13" value="1" checked="">
            Sans Avis
            </label>
        </div>

        <legend class="mt-4">L'agent a-t-il compris votre problème ?</legend>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="question2" id="question21" value="2">
            Oui
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="question2" id="question22" value="0">
            Non
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="question2" id="question23" value="1" checked="">
            Sans Avis
            </label>
        </div>

        <legend class="mt-4">L'agent a-t-il résolu votre problème ?</legend>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="question3" id="question31" value="1">
            Oui
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="question3" id="question32" value="-1">
            Non
            </label>
        </div>

        <div class="form-group">
            <label for="message" class="form-label mt-4">Dites-nous en plus : </label>
            <textarea name="message" class="form-control" id="message" rows="8" cols="45"></textarea>
        </div>
        <div class="form-check">
            <input name="recall" class="form-check-input" type="checkbox" value="true" id="recall">
            <label class="form-check-label" for="recall">
                Cochez-cette case si vous acceptez d'être rappelé.
            </label>
        </div>
        

        
        <button type="submit" name="send" value="Envoyer" class="btn btn-primary">Submit</button>
    </fieldset>
</form>