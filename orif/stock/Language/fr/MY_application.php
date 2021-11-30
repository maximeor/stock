<?php

return[

/**
 * French translations
 *
 * @author      Didier Viret, Simão Romano Schindler
 * @link        https://github.com/OrifInformatique/stock
 * @copyright   Copyright (c) 2016, Orif <http://www.orif.ch>
 */
// Application name
'app_title'                      => 'Section informatique<br />Gestion de stock',
// Page titles
'page_prefix'                    => 'Stock',
'page_item_list'                 => 'Liste des objets',
'page_login'                     => 'Connexion',
'page_password_change'           => 'Modification du mot de passe',
'page_active_loans_list'         => 'Liste des prêts en cours',
// Date and time formats
'date_format_short'              => 'd.m.Y',
'datetime_format_short'          => 'd.m.Y H:i',
// Fields labels
'field_username'                 => 'Identifiant',
'field_name'                     => 'Nom',
'field_firstname'                => 'Prénom',
'field_lastname'                 => 'Nom',
'field_status'                   => 'Statut',
'field_mail'                     => 'Mail',
'field_password'                 => 'Mot de passe',
'field_password_confirm'         => 'Confirmer mot de passe',
'field_new_password'             => 'Nouveau mot de passe',
'field_old_password'             => 'Ancien mot de passe',
'field_abbreviation'             => 'Abréviation',
'field_short'                    => 'court',
'field_short_name'               => 'Nom court',
'field_long_name'                => 'Nom long',
'field_first_adress'             => 'Première ligne d\'adresse',
'field_second_adress'            => 'Deuxième ligne d\'adresse',
'field_postal_code'              => 'NPA',
'field_city'                     => 'Ville',
'field_tel'                      => 'Téléphone',
'field_email'                    => 'E-mail',
'field_tag'                      => 'Tag',
'field_remarks'                  => 'Remarques',
'field_group'                    => 'Groupe',
'field_serial_number'            => 'Numéro de série',
'field_inventory_number'         => 'Numéro d\'inventaire',
'field_inventory_number_abr'     => 'No inventaire',
'field_item_name'                => 'Nom de l\'objet',
'field_item_description'         => 'Description de l\'objet',
'field_item_condition'           => 'État de l\'objet',
'field_image'                    => 'Photo de l\'objet',
'field_image_upload'             => 'Ajoutez une image<br />(hauteur et largeur max. 360px)',
'field_linked_file_upload'       => 'Ajoutez un fichier joint<br />(un seul fichier possible, pdf ou Word, max. 2Mo)',
'field_stocking_place'           => 'Lieu de stockage',
'field_stocking_place_short'     => 'Stockage',
'field_last_inventory_control'   => 'Dernier contrôle d\'inventaire',
'field_inventory_control'        => 'Contrôle d\'inventaire',
'field_current_loan'             => 'Prêt en cours',
'field_loan_date'                => 'Date du prêt',
'field_loan_planned_return'      => 'Retour prévu',
'field_inventory_control_date'   => 'Date du contrôle',
'field_inventory_controller'     => 'Contrôlé par',
'field_supplier'                 => 'Fournisseur',
'field_supplier_ref'             => 'Réf. fournisseur',
'field_buying_price'             => 'Prix d\'achat',
'field_buying_date'              => 'Date d\'achat',
'field_warranty_duration'        => 'Durée de la garantie (en mois)',
'field_tags'                     => 'Type d\'objet',
'field_text_search'              => 'Nom, description, No inventaire, No série',
'field_no_filter'                => 'Aucun filtre',
'field_sort_order'               => 'Trier par',
'field_sort_asc_desc'            => 'Ordre de tri',
'field_take_photo'               => 'Prendre une photo',
'field_import_photo'             => 'Importer une photo',
'field_add_modify_photo'         => 'Ajouter / Modifier une photo',
'field_validate_photo'           => 'Valider l\'image',
'field_cropped_photo'            => 'Photo rognée',
'field_cropped_name'             => 'Nom de la photo rognée',
// Sorting labels
'sort_order_name'                => 'Nom',
'sort_order_stocking_place_id'   => 'Lieu de stockage',
'sort_order_date'                => 'Date d\'achat',
'sort_order_inventory_number'    => 'No d\'inventaire',
'sort_order_asc'                 => 'Ascendant',
'sort_order_des'                 => 'Descendant',
// List headers
'header_picture'                 => 'Photo',
'header_status'                  => 'Disponibilité',
'header_serial_nb'               => 'No de série',
'header_inventory_nb'            => 'No d\'inventaire',
'header_item_name'               => 'Objet',
'header_item_created_by'         => 'Créé par',
'header_loan_date'               => 'Prêté le',
'header_loan_planned_return'     => 'Retour prévu',
'header_loan_real_return'        => 'Retour effectif',
'header_loan_localisation'       => 'Lieu du prêt',
'header_loan_by_user'            => 'Prêté par',
'header_loan_to_user'            => 'Prêté à',
'header_groups'                  => 'Groupes',
'header_stocking_place'          => 'Lieu de stockage',
'header_stocking_places'         => 'Lieux de stockage',
'header_username'                => 'Identifiant',
'header_lastname'                => 'Nom',
'header_firstname'               => 'Prénom',
'header_email'                   => 'E-mail',
'header_user_type'               => 'Statut',
'header_is_active'               => 'Activé',
'header_suppliers_name'          => 'Nom',
'header_suppliers_address_1'     => 'Première ligne d\'addresse',
'header_suppliers_address_2'     => 'Deuxième ligne d\'adresse',
'header_suppliers_NPA'           => 'NPA',
'header_suppliers_city'          => 'Ville',
'header_suppliers_country'       => 'Pays',
'header_suppliers_phone'         => 'Téléphone',
'header_suppliers_email'         => 'E-mail',
'header_loan_date_start'         => 'Prêt',
'header_loan_date_end'           => 'Retour prévu',
// Admin labels
'admin_tab_users'                => 'Utilisateurs',
'admin_tab_tags'                 => 'Tags',
'admin_tab_stocking_places'      => 'Lieux de stockage',
'admin_tab_suppliers'            => 'Fournisseurs',
'admin_tab_item_groups'          => 'Groupes d\'objets',
'admin_tab_admin'                => 'Administration',
// Admin deletion texts
'admin_delete_item_group'        => 'Supprimer le groupe',
'admin_delete_stocking_place'    => 'Supprimer le lieu de stockage',
'admin_delete_tag'               => 'Supprimer le tag',
'admin_delete_user'              => 'Supprimer l\'utilisateur',
'admin_delete_supplier'          => 'Supprimer le fournisseur',
'admin_delete_item'              => 'Supprimer l\'objet',
'admin_delete_tag_verify'        => 'Voulez-vous vraiment supprimer le tag ',
'admin_delete_user_verify'       => 'Voulez-vous vraiment supprimer l\'utilisateur ',
'admin_delete_tag_verify'        => 'Voulez-vous vraiment supprimer le tag ',
'admin_delete_stocking_place_verify' => 'Voulez-vous vraiment supprimer le lieu de stockage ',
'admin_delete_item_group_verify' => 'Voulez-vous vraiment supprimer le groupe d\'objets ',
'admin_delete_supplier_verify'   => 'Voulez-vous vraiment supprimer le fournisseur ',
'delete_user_notok'              => 'Cet utilisateur ne peut pas être supprimé car il est lié à des ',
'delete_notok'                   => 'Cet élément ne peut pas être supprimé car il est en cours d\'utilisation par un ou plusieurs objets.',
'delete_notok_with_amount'       => 'Cet élément ne peut pas être supprimé car il est en cours d\'utilisation par ',
'delete_notok_item'              => ' objet.',
'delete_notok_items'             => ' objets.',
'delete_linked_items'            => 'objets',
'delete_linked_loans_registered' => 'prêts',
'delete_linked_loans_made'       => 'emprunts',
// Admin other labels
'admin_modify'                   => 'Modification',
'admin_delete'                   => 'Suppression',
'admin_add'                      => 'Creation',
'admin_new'                      => 'Nouveau…',
'admin_cancel'                   => 'Annuler',
// Buttons
'btn_admin'                      => 'Administration',
'btn_cancel'                     => 'Annuler',
'btn_change_password'            => 'Modifier le mot de passe',
'btn_new'                        => 'Nouveau',
'btn_modify'                     => 'Modifier',
'btn_delete'                     => 'Supprimer',
'btn_save'                       => 'Sauvegarder',
'btn_login'                      => 'Se connecter',
'btn_logout'                     => 'Se déconnecter',
'btn_signup'                     => 'S\'inscrire',
'btn_back_to_main'               => 'Retour à l\'accueil',
'btn_back_to_list'               => 'Retour à la liste',
'btn_back_to_object'             => 'Retour à l\'objet',
'btn_linked_doc'                 => 'Voir document',
'btn_create_inventory_control'   => 'Nouveau contrôle',
'btn_inventory_control_history'  => 'Historique contrôles',
'btn_to_loans'                   => 'Liste des prêts',
'btn_loans_history'              => 'Historique des prêts',
'btn_create_loan'                => 'Ajouter un prêt',
'btn_submit_filters'             => 'Appliquer filtres et tri',
'btn_remove_filters'             => 'Supprimer les filtres',
'btn_all'                        => 'Tout',
'btn_none'                       => 'Rien',
'btn_generate_inventory_nb'      => 'Générer un No d\'inventaire',
// Messages
'msg_err_abbreviation'           => 'Une abréviation doit être fournie',
'msg_err_invalid_password'       => 'L\'identifiant et le mot de passe ne sont pas valides',
'msg_err_invalid_new_password'   => 'Le nouveau mot de passe et la confirmation ne correspondent pas',
'msg_err_invalid_old_password'   => 'L\'ancien mot de passe n\'est pas valide',
'msg_err_access_denied'          => 'Accès refusé',
'msg_err_email'                  => 'Entrez une adresse email valide ou laisser vide',
'msg_err_id_needed'              => 'Un identifiant unique doit être fourni',
'msg_err_id_used'                => 'Cet identifiant est déjà utilisé',
'msg_err_inexistent_item'        => 'L\'objet auquel vous essayez d\'accéder n\'existe pas',
'msg_err_item_group_needed'      => 'Le groupe d\'objets doit avoir un nom',
'msg_err_item_group_short'       => 'Le groupe d\'objets doit avoir une abréviation',
'msg_err_pwd_length'             => 'Le mot de passe doit faire au moins 6 caractères',
'msg_err_pwg_wrong'              => 'Le mot de passe et la confirmation ne sont pas pareils',
'msg_err_storage_long_needed'    => 'Le lieu de stockage doit avoir un nom long',
'msg_err_storage_short_needed'   => 'Le lieu de stockage doit avoir un nom court',
'msg_err_supplier_needed'        => 'Un nom de fournisseur doit être fourni',
'msg_err_supplier_unique'        => 'Un nom de fournisseur doit être unique',
'msg_err_tag_name_needed'        => 'Un nom de tag doit être fourni',
'msg_err_unique_groupname'       => 'Un nom de groupe unique doit être fourni',
'msg_err_unique_shortname'       => 'Cette abréviation est déjà utilisée',
'msg_err_stocking_needed'        => 'Un nom d\'emplacement unique doit être fourni',
'msg_err_stocking_short_unique'  => 'Un nom court d\'emplacement doit être fourni',
'msg_err_stocking_unique'        => 'Un nom d\'emplacement unique doit être unique',
'msg_err_stocking_short_unique'  => 'Un nom court d\'emplacement doit être unique',
'msg_err_username_used'          => 'Ce nom est déjà utilisé',
'msg_err_photo_upload'           => 'Aucune photo n\'a été ajoutée',
'msg_no_loan'                    => 'Aucun prêt à afficher',
'msg_err_not_photo'              => 'Le fichier fournit n\'est pas une image',
'msg_no_inventory_controls'      => 'Aucun contrôle d\'inventaire',
'msg_no_item'                    => 'Aucun objet à afficher',
'msg_no_late_loans'              => 'Aucun prêt en retard',
'msg_late_loans_amount'          => 'Nombre de prêts en retard',
'msg_item_loan_late'             => 'Le délai du prêt est dépassé pour cet objet, merci de le contrôler.',
// Bootstrap labels
'lbl_loan_status_loaned'         => 'En prêt',
'lbl_loan_status_not_loaned'     => 'Pas de prêt en cours',
'lbl_loan_status_late'           => 'En retard',
// Other texts
'text_months'                    => 'mois',
'text_none'                      => 'aucun',
'text_warranty_status'           => [0 => '',
                                    1 => 'Sous garantie',
                                    2 => 'Échéance proche',
                                    3 => 'Garantie expirée'],
'text_item_detail'               => 'Photo et détail',
'text_item_condition'            => 'Condition',
'text_item_loan_status'          => 'Disponibilité et prêts',
'text_item_buying_warranty'      => 'Achat et garantie',
'text_item_tags'                 => 'Type d\'objet',
'text_search_filters'            => 'Filtres de recherche',
'text_sort_order'                => 'Ordre de tri',
'text_filtered_items_list'       => 'Liste des objets correspondants',
'text_kinds_to_show'             => 'Afficher uniquement les…',
'text_yes'                       => 'Oui',
'text_no'                        => 'Non',
'text_disable'                   => 'Désactiver',

// Image cleaning
'admin_command_clean_images'    => 'Êtes-vous sûr de vouloir renommer les images utilisées et supprimer les autres',
'admin_command_clean_images_success' => 'Les images utilisées ont été renommées et les autres supprimées.',
 ];
