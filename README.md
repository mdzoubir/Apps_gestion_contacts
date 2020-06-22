## Biref projet : Application de gestion des contacts

### Contexte
Vous êtes tenu de créer un site web où les utilisateurs peuvent créer un compte et se connecter ensuite pour gérer une liste privée de contacts. Le site web utilisera des bases de données pour stocker les données de connexion des utilisateurs, ainsi que pour stocker les contacts de chaque utilisateur.

En plus des fonctionnalités de la base de données, vous devrez utiliser d'autres fonctionnalités afin de créer le site web (par exemple, les conditions, les déclarations de contrôle, les fonctions, la programmation orientée objet et la validation des formulaires, en utilisant HTTP).

Les pages requises sont les suivantes :

- Page d'accueil 
- Pages de connexion et d'inscription
- Page de profil
- Liste de contacts et ajout/modification de la page du formulaire de contact
### Mise en page et briefing

La mise en page est telle qu'elle est présentée :

#### La page d'accueil (voir `home_page.png`)

Une barre de navigation horizontale se trouve en haut de la page, avec le titre du site à gauche et le bouton de connexion à droite. Après une connexion réussie, le bouton `Connexion` est remplacé par le nom d'utilisateur, qui renvoie à la page `Profil`, au lien de la page `Contacts` et au lien Déconnexion.

Le contenu est un message avec deux liens d'appel à l'action : `S'inscrire`  et `Se connecter`.

#### La page de connexion (voir `login_page.png`) :

La connexion est basée sur le nom d'utilisateur et le mot de passe, le contenu est donc un simple formulaire de connexion, avec des champs pour le nom d'utilisateur et le mot de passe, et un bouton de connexion. La dernière phrase est un lien d'appel à l'action pour l'inscription.

Après s'être connecté, l'utilisateur est redirigé vers la page Profil.

#### La page d'inscription (voir `sine-up_page.png`)

Le contenu est le formulaire d'inscription, avec les entrées suivantes :

- Nom d'utilisateur
- Mot de passe
- Vérification du mot de passe
Le nom d'utilisateur doit comporter au moins trois caractères, et être uniquement alphanumérique. Le mot de passe doit comporter au moins six caractères et doit être vérifié par un second mot de passe saisi lors de l'inscription. Toute erreur de formulaire doit être affichée sous l'entrée d'où proviennent les données, voir `form_validation_error.png` :


Les comptes enregistrés doivent également conserver la date d'inscription. Après l'inscription, l'utilisateur est redirigé vers la page Profil.

#### La page de profil (voir `profile_page.png`) :


Elle contient un message d'accueil, les données du profil et l'heure de connexion à la session. Alors que le nom d'utilisateur et la date d'inscription sont stockés dans la base de données, l'heure de connexion à la session peut être stockée dans la session en cours.

#### La page Contacts (voir `contact_page.png`) :


Le contenu est divisé en deux : la liste des contacts et le formulaire d'ajout/de modification des contacts (voir `Contacts_list(CRUD).png`).

La liste de contacts énumère les enregistrements de contacts, chaque enregistrement ayant les liens `Modifier` et `Supprimer`. Si la liste est vide, alors affichez le message approprié au lieu de rendre la table vide.

#### Le formulaire de contact aura les noms de champs suivants :

- Nom : obligatoire ; au moins deux caractères
- Téléphone : facultatif ; ne doit autoriser que le +-() 666988756
- Courriel : obligatoire ; doit être validé
- Adresse : facultative ; 255 caractères maximum


Les messages d'erreur concernant des données non valides doivent être placés sous les entrées d'où émanent les données.

En accédant à la page Contacts, le formulaire est prêt à être utilisé pour créer de nouveaux contacts. Une fois que le bouton "Modifier" d'un contact est enfoncé, les coordonnées du contact sont remplies dans le formulaire ; l'envoi du formulaire met à jour le contact existant.

Lorsqu'un utilisateur authentifié accède à la page d'accueil, à la page de connexion ou à la page d'inscription, il est redirigé vers la page de profil.

Le titre de la page par défaut est Liste de contacts.

### Déroulement
Voici les étapes à suivre pour réaliser l'activité :

1. Créer les nouveaux modèles de page - les pages d'inscription et de liste de contacts.
2. Créer les gestionnaires de demande pour les pages d'inscription et de contact.
3. Ajouter le composant Base de données, où l'objet PDO sera invoqué pour fonctionner avec le serveur MySQL.
4. Ajouter le composant Auth, qui s'occupera d'autres tâches d'authentification couramment utilisées (par exemple, vérifier si l'utilisateur est connecté).
5. Créer la classe User, en tant que modèle de ligne de table (dans le répertoire src/models/), qui regroupera certaines fonctionnalités connexes (comme la vérification du mot de passe d'entrée par rapport au hachage du mot de passe existant).
6. Ajuster le gestionnaire de connexion afin d'utiliser la base de données comme source de données pour les utilisateurs.
7. Ajuster le gestionnaire de profil pour qu'il ne récupère que l'utilisateur dans la base de données et l'envoie au modèle.
