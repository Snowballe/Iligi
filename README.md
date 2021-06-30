# Site de gestion locative Iligi
<hr>

## Ce site a été fait à l'aide de WampServer, du framework Bootstrap & JQuery

Il utilise une structure MVC et est codé en PHP.
On peut s'inscrire en tant que propriétaire ou locataire. Aucun tracker n'a été installé (à moins que Bootstrap en installe un?). 

J'ai installer des bans-words pour éviter de se prendre des injections SQL, même si la requête est "préparée", ce qui techniquement évite d'ajouter une requête malveillante après celle que l'on veut.

Il y a surement des failles de sécurité béantes que je ne connais pas, donc je ne pourrais pas les réparer malheureusement. Pour l'instant htpasswd est en gitignore.
