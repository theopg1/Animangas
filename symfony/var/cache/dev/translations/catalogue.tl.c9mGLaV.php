<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('tl', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ang pormang itong ay hindi dapat magkarron ng dagdag na mga patlang.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Ang ini-upload na file ay masyadong malaki. Pakiulit muling mag-upload ng mas maliit na file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Hindi balido ang CSRF token. Maagpasa muli ng isang pang porma.',
    'This value is not a valid HTML5 color.' => 'Ang halagang ito ay hindi wastong HTML5 color.',
    'Please enter a valid birthdate.' => 'Pakilagay ang tamang petsa ng kapanganakan.',
    'The selected choice is invalid.' => 'Ang pinagpiliang sagot ay hindi tama.',
    'The collection is invalid.' => 'Hindi balido ang koleksyon.',
    'Please select a valid color.' => 'Pakipiliin ang nararapat na kulay.',
    'Please select a valid country.' => 'Pakipiliin ang nararapat na bansa.',
    'Please select a valid currency.' => 'Pakipiliin ang tamang pananalapi.',
    'Please choose a valid date interval.' => 'Piliin ang wastong agwat ng petsa.',
    'Please enter a valid date and time.' => 'Piliin ang wastong petsa at oras.',
    'Please enter a valid date.' => 'Ilagay ang wastong petsa.',
    'Please select a valid file.' => 'Piliin ang balidong file.',
    'The hidden field is invalid.' => 'Hindi balido ang field na nakatago.',
    'Please enter an integer.' => 'Pakilagay ang integer.',
    'Please select a valid language.' => 'Piliin ang nararapat na lengguwahe.',
    'Please select a valid locale.' => 'Pakipili ang nararapat na locale.',
    'Please enter a valid money amount.' => 'Pakilagay ang tamang halaga ng pera.',
    'Please enter a number.' => 'Ilagay ang numero.',
    'The password is invalid.' => 'Hindi balido ang password.',
    'Please enter a percentage value.' => 'Pakilagay ang tamang porsyento ng halaga.',
    'The values do not match.' => 'Hindi tugma ang mga halaga.',
    'Please enter a valid time.' => 'Pakilagay ang tamang oras.',
    'Please select a valid timezone.' => 'Pakilagay ang tamang sona ng oras.',
    'Please enter a valid URL.' => 'Pakilagay ang balidong URL.',
    'Please enter a valid search term.' => 'Pakilagay ang balidong katagang sinasaliksik.',
    'Please provide a valid phone number.' => 'Pakilagay ang balidong numero ng telepono.',
    'The checkbox has an invalid value.' => 'Ang checkbox ay mayroon hindi balidong halaga.',
    'Please enter a valid email address.' => 'Pakilagay ang balidong email address.',
    'Please select a valid option.' => 'Pakipiliin ang balidong pagpipilian.',
    'Please select a valid range.' => 'Pakipilian ang balidong layo.',
    'Please enter a valid week.' => 'Pakilagay ang balidong linggo.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Nagkaroon ng isang pagbubukod sa pagpapatotoo.',
    'Authentication credentials could not be found.' => 'Hindi matagpuan ang mga kredensyal ng pagpapatotoo.',
    'Authentication request could not be processed due to a system problem.' => 'Ang kahilingan sa pagpapatotoo ay hindi naproseso dahil sa isang problema sa system.',
    'Invalid credentials.' => 'Di-wastong mga kredensyal.',
    'Cookie has already been used by someone else.' => 'Ang Cookie ay ginamit na ng ibang tao.',
    'Not privileged to request the resource.' => 'Walang pribilehiyo upang humingi ng mga bagong mapagkukunan.',
    'Invalid CSRF token.' => 'Di-wastong token ng CSRF.',
    'No authentication provider found to support the authentication token.' => 'Walang nahanap na provider ng pagpapatotoo upang suportahan ang token ng pagpapatotoo.',
    'No session available, it either timed out or cookies are not enabled.' => 'Walang magagamit na session, alinman sa nag-time out o ang cookies ay hindi pinagana.',
    'No token could be found.' => 'Walang makitang token.',
    'Username could not be found.' => 'Hindi makita ang username.',
    'Account has expired.' => 'Nag-expire na ang account.',
    'Credentials have expired.' => 'Nag-expire na ang mga kredensyal.',
    'Account is disabled.' => 'Ang account ay hindi pinagana.',
    'Account is locked.' => 'Ang account ay naka-lock.',
    'Too many failed login attempts, please try again later.' => 'Napakaraming nabigong mga pagtatangka sa pag-login, mangyaring subukang muli sa ibang pagkakataon.',
    'Invalid or expired login link.' => 'Inbalido o nagexpire na ang link para makapaglogin.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Napakaraming nabigong mga pagtatangka sa pag-login, pakisubukan ulit sa% minuto% minuto.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir de champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'This value is not a valid HTML5 color.' => 'Cette valeur n\'est pas une couleur HTML5 valide.',
    'Please enter a valid birthdate.' => 'Veuillez entrer une date de naissance valide.',
    'The selected choice is invalid.' => 'Le choix sélectionné est invalide.',
    'The collection is invalid.' => 'La collection est invalide.',
    'Please select a valid color.' => 'Veuillez sélectionner une couleur valide.',
    'Please select a valid country.' => 'Veuillez sélectionner un pays valide.',
    'Please select a valid currency.' => 'Veuillez sélectionner une devise valide.',
    'Please choose a valid date interval.' => 'Veuillez choisir un intervalle de dates valide.',
    'Please enter a valid date and time.' => 'Veuillez saisir une date et une heure valides.',
    'Please enter a valid date.' => 'Veuillez entrer une date valide.',
    'Please select a valid file.' => 'Veuillez sélectionner un fichier valide.',
    'The hidden field is invalid.' => 'Le champ masqué n\'est pas valide.',
    'Please enter an integer.' => 'Veuillez saisir un entier.',
    'Please select a valid language.' => 'Veuillez sélectionner une langue valide.',
    'Please select a valid locale.' => 'Veuillez sélectionner une langue valide.',
    'Please enter a valid money amount.' => 'Veuillez saisir un montant valide.',
    'Please enter a number.' => 'Veuillez saisir un nombre.',
    'The password is invalid.' => 'Le mot de passe est invalide.',
    'Please enter a percentage value.' => 'Veuillez saisir un pourcentage valide.',
    'The values do not match.' => 'Les valeurs ne correspondent pas.',
    'Please enter a valid time.' => 'Veuillez saisir une heure valide.',
    'Please select a valid timezone.' => 'Veuillez sélectionner un fuseau horaire valide.',
    'Please enter a valid URL.' => 'Veuillez saisir une URL valide.',
    'Please enter a valid search term.' => 'Veuillez saisir un terme de recherche valide.',
    'Please provide a valid phone number.' => 'Veuillez fournir un numéro de téléphone valide.',
    'The checkbox has an invalid value.' => 'La case à cocher a une valeur non valide.',
    'Please enter a valid email address.' => 'Veuillez saisir une adresse email valide.',
    'Please select a valid option.' => 'Veuillez sélectionner une option valide.',
    'Please select a valid range.' => 'Veuillez sélectionner une plage valide.',
    'Please enter a valid week.' => 'Veuillez entrer une semaine valide.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
    'Too many failed login attempts, please try again later.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer plus tard.',
    'Invalid or expired login link.' => 'Lien de connexion invalide ou expiré.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minutes.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Tableau de bord',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => 'Modifier %entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Créer "%entity_label_singular%"',
    'page_title.exception' => 'Erreur|Erreurs',
    'datagrid.hidden_results' => 'Certains résultats ne peuvent pas être affichés car vous n\'avez pas la permission',
    'datagrid.no_results' => 'Aucun résultat trouvé',
    'paginator.first' => 'Premier',
    'paginator.previous' => 'Précédent',
    'paginator.next' => 'Suivant',
    'paginator.last' => 'Dernier',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> sur <strong>%results%</strong>',
    'paginator.results' => '{0} Aucun résultat|{1} <strong>1</strong> résultat|]1,Inf] <strong>%count%</strong> résultats',
    'label.true' => 'Oui',
    'label.false' => 'Non',
    'label.empty' => 'Vide',
    'label.null' => 'Aucun(e)',
    'label.nullable_field' => 'Laisser vide',
    'label.object' => 'Objet PHP',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Aucun accesseur n\'existe pour cette propriété ou celle-ci n\'est pas publique.',
    'label.form.empty_value' => 'Aucun(e)',
    'field.code_editor.view_code' => 'Voir le code',
    'field.text_editor.view_content' => 'Voir le contenu',
    'action.entity_actions' => 'Actions',
    'action.new' => 'Créer %entity_label_singular%',
    'action.search' => 'Rechercher',
    'action.detail' => 'Consulter',
    'action.edit' => 'Éditer',
    'action.delete' => 'Supprimer',
    'action.cancel' => 'Annuler',
    'action.index' => 'Retour à la liste',
    'action.deselect' => 'Désélectionner',
    'action.add_new_item' => 'Ajouter un nouvel élément',
    'action.remove_item' => 'Supprimer l\'élément',
    'action.choose_file' => 'Choisir un fichier',
    'action.close' => 'Fermer',
    'action.create' => 'Créer',
    'action.create_and_add_another' => 'Créer et ajouter un nouvel élément',
    'action.create_and_continue' => 'Créer et continuer l\'édition',
    'action.save' => 'Sauvegarder les modifications',
    'action.save_and_continue' => 'Sauvegarder et continuer l\'édition',
    'batch_action_modal.title' => 'Vous allez appliquer l\'action "%action_name%" à %num_items% élément(s).',
    'batch_action_modal.content' => 'Cette action est irréversible.',
    'batch_action_modal.action' => 'Procéder',
    'delete_modal.title' => 'Voulez-vous supprimer cet élément ?',
    'delete_modal.content' => 'Cette action est irréversible.',
    'filter.title' => 'Filtres',
    'filter.button.clear' => 'Effacer',
    'filter.button.apply' => 'Appliquer',
    'filter.label.is_equal_to' => 'est égal(e) à',
    'filter.label.is_not_equal_to' => 'est différent(e) de',
    'filter.label.is_greater_than' => 'est supérieur(e) à',
    'filter.label.is_greater_than_or_equal_to' => 'est supérieur(e) ou égal(e) à',
    'filter.label.is_less_than' => 'est inférieur(e) à',
    'filter.label.is_less_than_or_equal_to' => 'est inférieur(e) ou égal(e) à',
    'filter.label.is_between' => 'est entre',
    'filter.label.contains' => 'contient',
    'filter.label.not_contains' => 'ne contient pas',
    'filter.label.starts_with' => 'commence par',
    'filter.label.ends_with' => 'finit par',
    'filter.label.exactly' => 'est strictement égal(e) à',
    'filter.label.not_exactly' => 'est strictement différent(e) de',
    'filter.label.is_same' => 'est',
    'filter.label.is_not_same' => 'n\'est pas',
    'filter.label.is_after' => 'est postérieure à',
    'filter.label.is_after_or_same' => 'est postérieure à ou est le',
    'filter.label.is_before' => 'est antérieure à',
    'filter.label.is_before_or_same' => 'est antérieure à ou est le',
    'form.are_you_sure' => 'Vous n\'avez pas sauvegardé vos modifications.',
    'form.tab.error_badge_title' => '1 champ invalide|%count% champs invalides',
    'form.slug.confirm_text' => 'Si vous modifiez le slug, vous pouvez casser des liens sur d\'autres pages.',
    'user.logged_in_as' => 'Connecté en tant que',
    'user.unnamed' => 'Utilisateur sans nom',
    'user.anonymous' => 'Utilisateur anonyme',
    'user.sign_out' => 'Déconnexion',
    'user.exit_impersonation' => 'Arrêter l\'impersonnalisation',
    'login_page.username' => 'Identifiant',
    'login_page.password' => 'Mot de passe',
    'login_page.sign_in' => 'Connectez-vous',
    'login_page.forgot_password' => 'Mot de passe oublié ?',
    'login_page.remember_me' => 'Rester connecté',
    'exception.entity_not_found' => 'Cet élément n\'est plus disponible.',
    'exception.entity_remove' => 'Cet élément ne peut être supprimé car d\'autres éléments en dépendent.',
    'exception.forbidden_action' => 'L\'action demandée ne peut être exécutée sur cet élément.',
    'exception.insufficient_entity_permission' => 'Vous n\'êtes pas autorisé à accéder à cet élément.',
    'autocomplete.no-results-found' => 'Aucun résultat trouvé',
    'autocomplete.no-more-results' => 'Aucun autre résultat trouvé',
    'autocomplete.loading-more-results' => 'Chargement de résultats supplémentaires…',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;