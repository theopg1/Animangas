<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ru', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Эта форма не должна содержать дополнительных полей.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Загруженный файл слишком большой. Пожалуйста, попробуйте загрузить файл меньшего размера.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF значение недопустимо. Пожалуйста, попробуйте повторить отправку формы.',
    'This value is not a valid HTML5 color.' => 'Значение не является допустимым HTML5 цветом.',
    'Please enter a valid birthdate.' => 'Пожалуйста, введите действительную дату рождения.',
    'The selected choice is invalid.' => 'Выбранный вариант недопустим.',
    'The collection is invalid.' => 'Коллекция недопустима.',
    'Please select a valid color.' => 'Пожалуйста, выберите допустимый цвет.',
    'Please select a valid country.' => 'Пожалуйста, выберите действительную страну.',
    'Please select a valid currency.' => 'Пожалуйста, выберите действительную валюту.',
    'Please choose a valid date interval.' => 'Пожалуйста, выберите действительный период.',
    'Please enter a valid date and time.' => 'Пожалуйста, введите действительные дату и время.',
    'Please enter a valid date.' => 'Пожалуйста, введите действительную дату.',
    'Please select a valid file.' => 'Пожалуйста, выберите допустимый файл.',
    'The hidden field is invalid.' => 'Значение скрытого поля недопустимо.',
    'Please enter an integer.' => 'Пожалуйста, введите целое число.',
    'Please select a valid language.' => 'Пожалуйста, выберите допустимый язык.',
    'Please select a valid locale.' => 'Пожалуйста, выберите допустимую локаль.',
    'Please enter a valid money amount.' => 'Пожалуйста, введите допустимое количество денег.',
    'Please enter a number.' => 'Пожалуйста, введите номер.',
    'The password is invalid.' => 'Пароль недействителен.',
    'Please enter a percentage value.' => 'Пожалуйста, введите процентное значение.',
    'The values do not match.' => 'Значения не совпадают.',
    'Please enter a valid time.' => 'Пожалуйста, введите действительное время.',
    'Please select a valid timezone.' => 'Пожалуйста, выберите действительный часовой пояс.',
    'Please enter a valid URL.' => 'Пожалуйста, введите действительный URL.',
    'Please enter a valid search term.' => 'Пожалуйста, введите действительный поисковый запрос.',
    'Please provide a valid phone number.' => 'Пожалуйста, введите действительный номер телефона.',
    'The checkbox has an invalid value.' => 'Флажок имеет недопустимое значение.',
    'Please enter a valid email address.' => 'Пожалуйста, введите допустимый email адрес.',
    'Please select a valid option.' => 'Пожалуйста, выберите допустимый вариант.',
    'Please select a valid range.' => 'Пожалуйста, выберите допустимый диапазон.',
    'Please enter a valid week.' => 'Пожалуйста, введите действительную неделю.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ошибка аутентификации.',
    'Authentication credentials could not be found.' => 'Аутентификационные данные не найдены.',
    'Authentication request could not be processed due to a system problem.' => 'Запрос аутентификации не может быть обработан в связи с проблемой в системе.',
    'Invalid credentials.' => 'Недействительные аутентификационные данные.',
    'Cookie has already been used by someone else.' => 'Cookie уже был использован кем-то другим.',
    'Not privileged to request the resource.' => 'Отсутствуют права на запрос этого ресурса.',
    'Invalid CSRF token.' => 'Недействительный токен CSRF.',
    'No authentication provider found to support the authentication token.' => 'Не найден провайдер аутентификации, поддерживающий токен аутентификации.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сессия не найдена, ее время истекло, либо cookies не включены.',
    'No token could be found.' => 'Токен не найден.',
    'Username could not be found.' => 'Имя пользователя не найдено.',
    'Account has expired.' => 'Время действия учетной записи истекло.',
    'Credentials have expired.' => 'Время действия аутентификационных данных истекло.',
    'Account is disabled.' => 'Учетная запись отключена.',
    'Account is locked.' => 'Учетная запись заблокирована.',
    'Too many failed login attempts, please try again later.' => 'Слишком много неудачных попыток входа, пожалуйста, попробуйте позже.',
    'Invalid or expired login link.' => 'Ссылка для входа недействительна или просрочена.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Слишком много неудачных попыток входа в систему, повторите попытку через %minutes% минуту.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Слишком много неудачных попыток входа в систему, повторите попытку через %minutes% мин.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Дашборд',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => '%entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Создать новый %entity_label_singular%',
    'page_title.exception' => 'Ошибка|Ошибки|Ошибок',
    'datagrid.hidden_results' => 'Некоторые результаты не могут быть отображены, потому что вы не имеете достаточных привелегий',
    'datagrid.no_results' => 'Ничего не найдено.',
    'paginator.first' => 'Первая',
    'paginator.previous' => 'Предыдущая',
    'paginator.next' => 'Следующая',
    'paginator.last' => 'Последняя',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> из <strong>%results%</strong>',
    'paginator.results' => '<strong>%count%</strong> результат|<strong>%count%</strong> результата|<strong>%count%</strong> результатов',
    'label.true' => 'Да',
    'label.false' => 'Нет',
    'label.empty' => 'Пусто',
    'label.null' => 'Null',
    'label.nullable_field' => 'Оставить пустым',
    'label.object' => 'PHP-объект',
    'label.inaccessible' => 'Недоступно',
    'label.inaccessible.explanation' => 'Нет геттера для этого поля или свойство не общедоступно',
    'label.form.empty_value' => 'Пусто',
    'field.code_editor.view_code' => 'Просмотреть код',
    'field.text_editor.view_content' => 'Просмотреть содержимое',
    'action.entity_actions' => 'Действия',
    'action.new' => 'Создать %entity_label_singular%',
    'action.search' => 'Поиск',
    'action.detail' => 'Показать',
    'action.edit' => 'Редактировать',
    'action.delete' => 'Удалить',
    'action.cancel' => 'Отклонить',
    'action.index' => 'Вернуться к списку',
    'action.deselect' => 'Снять выбор',
    'action.add_new_item' => 'Добавить новый элемент',
    'action.remove_item' => 'Удалить элемент',
    'action.choose_file' => 'Выберите файл',
    'action.close' => 'Закрыть',
    'action.create' => 'Создать',
    'action.create_and_add_another' => 'Создать и добавить еще',
    'action.create_and_continue' => 'Создать и продолжить',
    'action.save' => 'Сохранить',
    'action.save_and_continue' => 'Сохранить и продолжить',
    'batch_action_modal.title' => 'Вы собираетесь выполнить действие "%action_name%" для выбранных строк (%num_items%)',
    'batch_action_modal.content' => 'Эту операцию нельзя отменить.',
    'batch_action_modal.action' => 'Продолжить',
    'delete_modal.title' => 'Вы действительно хотите удалить этот объект?',
    'delete_modal.content' => 'Эту операцию нельзя отменить.',
    'filter.title' => 'Фильтры',
    'filter.button.clear' => 'Очистить',
    'filter.button.apply' => 'Применить',
    'filter.label.is_equal_to' => 'равно',
    'filter.label.is_not_equal_to' => 'не равно',
    'filter.label.is_greater_than' => 'больше чем',
    'filter.label.is_greater_than_or_equal_to' => 'больше или равно',
    'filter.label.is_less_than' => 'меньше чем',
    'filter.label.is_less_than_or_equal_to' => 'меньше или равно',
    'filter.label.is_between' => 'между',
    'filter.label.contains' => 'содержит',
    'filter.label.not_contains' => 'не содержит',
    'filter.label.starts_with' => 'начинается с',
    'filter.label.ends_with' => 'заканчивается на',
    'filter.label.exactly' => 'точно',
    'filter.label.not_exactly' => 'не точно',
    'filter.label.is_same' => 'такой же',
    'filter.label.is_not_same' => 'не такой же',
    'filter.label.is_after' => 'после',
    'filter.label.is_after_or_same' => 'после или соответствует',
    'filter.label.is_before' => 'до',
    'filter.label.is_before_or_same' => 'до или соответствует',
    'form.are_you_sure' => 'Вы не сохранили сделанные изменения.',
    'form.tab.error_badge_title' => 'Один неверный ввод|%count% неверных ввода|%count% неверных вводов',
    'form.slug.confirm_text' => 'Если вы измените текстовый идентификатор, вы можете сломать ссылки на других страницах.',
    'user.logged_in_as' => 'Вы вошли как',
    'user.unnamed' => 'Безымянный пользователь',
    'user.anonymous' => 'Анонимный пользователь',
    'user.sign_out' => 'Выход',
    'user.exit_impersonation' => 'Выйти из-под пользователя',
    'login_page.username' => 'Логин',
    'login_page.password' => 'Пароль',
    'login_page.sign_in' => 'Войти',
    'login_page.forgot_password' => 'Забыли пароль?',
    'login_page.remember_me' => 'Запомнить меня',
    'exception.entity_not_found' => 'Элемент больше не доступен.',
    'exception.entity_remove' => 'Элемент не может быть удалён, потому что другой элемент зависит от него.',
    'exception.forbidden_action' => 'Запрашиваемое действие запрещено для этого элемента.',
    'exception.insufficient_entity_permission' => 'У вас недостаточно прав для доступа к этому элементу.',
    'autocomplete.no-results-found' => 'Совпадений не найдено',
    'autocomplete.loading-more-results' => 'Загрузка данных…',
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
