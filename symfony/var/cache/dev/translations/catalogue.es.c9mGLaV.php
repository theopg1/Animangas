<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'This value is not a valid HTML5 color.' => 'Este valor no es un color HTML5 válido.',
    'Please enter a valid birthdate.' => 'Por favor, ingrese una fecha de cumpleaños válida.',
    'The selected choice is invalid.' => 'La opción seleccionada no es válida.',
    'The collection is invalid.' => 'La colección no es válida.',
    'Please select a valid color.' => 'Por favor, seleccione un color válido.',
    'Please select a valid country.' => 'Por favor, seleccione un país válido.',
    'Please select a valid currency.' => 'Por favor, seleccione una moneda válida.',
    'Please choose a valid date interval.' => 'Por favor, elija un intervalo de fechas válido.',
    'Please enter a valid date and time.' => 'Por favor, ingrese una fecha y hora válidas.',
    'Please enter a valid date.' => 'Por favor, ingrese una fecha valida.',
    'Please select a valid file.' => 'Por favor, seleccione un archivo válido.',
    'The hidden field is invalid.' => 'El campo oculto no es válido.',
    'Please enter an integer.' => 'Por favor, ingrese un número entero.',
    'Please select a valid language.' => 'Por favor, seleccione un idioma válido.',
    'Please select a valid locale.' => 'Por favor, seleccione una configuración regional válida.',
    'Please enter a valid money amount.' => 'Por favor, ingrese una cantidad de dinero válida.',
    'Please enter a number.' => 'Por favor, ingrese un número.',
    'The password is invalid.' => 'La contraseña no es válida.',
    'Please enter a percentage value.' => 'Por favor, ingrese un valor porcentual.',
    'The values do not match.' => 'Los valores no coinciden.',
    'Please enter a valid time.' => 'Por favor, ingrese una hora válida.',
    'Please select a valid timezone.' => 'Por favor, seleccione una zona horaria válida.',
    'Please enter a valid URL.' => 'Por favor, ingrese una URL válida.',
    'Please enter a valid search term.' => 'Por favor, ingrese un término de búsqueda válido.',
    'Please provide a valid phone number.' => 'Por favor, proporcione un número de teléfono válido.',
    'The checkbox has an invalid value.' => 'La casilla de verificación tiene un valor inválido.',
    'Please enter a valid email address.' => 'Por favor, ingrese una dirección de correo electrónico válida.',
    'Please select a valid option.' => 'Por favor, seleccione una opción válida.',
    'Please select a valid range.' => 'Por favor, seleccione un rango válido.',
    'Please enter a valid week.' => 'Por favor, ingrese una semana válida.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
    'Too many failed login attempts, please try again later.' => 'Demasiados intentos fallidos de inicio de sesión, inténtelo de nuevo más tarde.',
    'Invalid or expired login link.' => 'Enlace de inicio de sesión inválido o expirado.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Demasiados intentos fallidos de inicio de sesión, inténtelo de nuevo en %minutes% minuto.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Demasiados intentos fallidos de inicio de sesión, inténtelo de nuevo en %minutes% minutos.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Inicio',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => 'Modificar %entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Crear %entity_label_singular%',
    'page_title.exception' => 'Error|Errores',
    'datagrid.hidden_results' => 'Algunos resultados no se pueden mostrar porque no tienes suficientes permisos',
    'datagrid.no_results' => 'No se han encontrado resultados.',
    'paginator.first' => 'Primera',
    'paginator.previous' => 'Anterior',
    'paginator.next' => 'Siguiente',
    'paginator.last' => 'Última',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
    'paginator.results' => '{0} Ningún resultado|{1} <strong>1</strong> resultado|]1,Inf] <strong>%count%</strong> resultados',
    'label.true' => 'Si',
    'label.false' => 'No',
    'label.empty' => 'Vacío',
    'label.null' => 'Nulo',
    'label.nullable_field' => 'Dejar vacío',
    'label.object' => 'Objecto PHP',
    'label.inaccessible' => 'Inaccesible',
    'label.inaccessible.explanation' => 'Este campo no tiene un método getter o la propiedad asociada no es pública',
    'label.form.empty_value' => 'Ninguno',
    'field.code_editor.view_code' => 'Ver código',
    'field.text_editor.view_content' => 'Ver contenido',
    'action.entity_actions' => 'Acciones',
    'action.new' => 'Crear %entity_label_singular%',
    'action.search' => 'Buscar',
    'action.detail' => 'Ver',
    'action.edit' => 'Modificar',
    'action.delete' => 'Borrar',
    'action.cancel' => 'Cancelar',
    'action.index' => 'Volver al listado',
    'action.deselect' => 'Deseleccionar',
    'action.add_new_item' => 'Añadir un elemento',
    'action.remove_item' => 'Eliminar este elemento',
    'action.choose_file' => 'Seleccionar archivo',
    'action.close' => 'Cerrar',
    'action.create' => 'Guardar',
    'action.create_and_add_another' => 'Crear y añadir otro',
    'action.create_and_continue' => 'Crear y seguir editando',
    'action.save' => 'Guardar cambios',
    'action.save_and_continue' => 'Guardar y seguir editando',
    'batch_action_modal.title' => 'Se va a aplicar la acción "%action_name%" a %num_items% elemento(s).',
    'batch_action_modal.content' => 'Esta acción no se puede deshacer.',
    'batch_action_modal.action' => 'Continuar',
    'delete_modal.title' => '¿Realmente quieres borrar este elemento?',
    'delete_modal.content' => 'Esta acción no se puede deshacer.',
    'filter.title' => 'Filtros',
    'filter.button.clear' => 'Borrar',
    'filter.button.apply' => 'Aplicar',
    'filter.label.is_equal_to' => 'es igual a',
    'filter.label.is_not_equal_to' => 'no es igual a',
    'filter.label.is_greater_than' => 'es mayor que',
    'filter.label.is_greater_than_or_equal_to' => 'es mayor o igual que',
    'filter.label.is_less_than' => 'es menor que',
    'filter.label.is_less_than_or_equal_to' => 'es menor o igual que',
    'filter.label.is_between' => 'está entre',
    'filter.label.contains' => 'contiene',
    'filter.label.not_contains' => 'no contiene',
    'filter.label.starts_with' => 'empieza por',
    'filter.label.ends_with' => 'acaba en',
    'filter.label.exactly' => 'es exactamente',
    'filter.label.not_exactly' => 'no es exactamente',
    'filter.label.is_same' => 'es igual a',
    'filter.label.is_not_same' => 'no es igual a',
    'filter.label.is_after' => 'es posterior a',
    'filter.label.is_after_or_same' => 'es posterior o igual a',
    'filter.label.is_before' => 'es anterior a',
    'filter.label.is_before_or_same' => 'es anterior o igual a',
    'form.are_you_sure' => 'No has guardado los cambios realizados en este formulario.',
    'form.tab.error_badge_title' => 'Hay un campo inválido|Hay %count% campos inválidos',
    'user.logged_in_as' => 'Conectado/a como',
    'user.unnamed' => 'Usuario sin nombre',
    'user.anonymous' => 'Usuario anónimo',
    'user.sign_out' => 'Cerrar sesión',
    'user.exit_impersonation' => 'Terminar impersonación',
    'login_page.username' => 'Nombre de usuario',
    'login_page.password' => 'Contraseña',
    'login_page.sign_in' => 'Iniciar sesión',
    'login_page.forgot_password' => '¿Olvidaste tu contraseña?',
    'login_page.remember_me' => 'Recuérdame',
    'exception.entity_not_found' => 'Este elemento ya no está disponible.',
    'exception.entity_remove' => 'Este elemento no se puede eliminar porque otros elementos dependen de él.',
    'exception.forbidden_action' => 'No se puede realizar la acción solicitada en este elemento.',
    'exception.insufficient_entity_permission' => 'No tienes permiso para acceder a este elemento.',
    'autocomplete.no-results-found' => 'No se han encontrado resultados',
    'autocomplete.no-more-results' => 'No hay más resultados',
    'autocomplete.loading-more-results' => 'Cargando más resultados…',
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
