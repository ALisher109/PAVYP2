<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Elements creats recentment',
    'recently_created_pages' => 'Pàgines creades recentment',
    'recently_updated_pages' => 'Pàgines actualitzades recentment',
    'recently_created_chapters' => 'Capítols creats recentment',
    'recently_created_books' => 'Llibres creats recentment',
    'recently_created_shelves' => 'Prestatges creats recentment',
    'recently_update' => 'Elements actualitzats recentment',
    'recently_viewed' => 'Elements vistos recentment',
    'recent_activity' => 'Activitat recent',
    'create_now' => 'Crea un element',
    'revisions' => 'Revisions',
    'meta_revision' => 'Revisió núm. :revisionCount',
    'meta_created' => 'S’ha creat :timeLength',
    'meta_created_name' => ':user l’ha creat :timeLength',
    'meta_updated' => 'S’ha actualitzat :timeLength',
    'meta_updated_name' => ':user l’ha actualitzat :timeLength',
    'meta_owned_name' => 'Propietat de :user',
    'meta_reference_count' => 'S’hi fa referència en :count element|S’hi fa referència en :count elements',
    'entity_select' => 'Selecció de l’entitat',
    'entity_select_lack_permission' => 'No teniu els permisos necessaris per a seleccionar aquest element',
    'images' => 'Imatges',
    'my_recent_drafts' => 'Els meus esborranys recents',
    'my_recently_viewed' => 'Els meus vistos recentment',
    'my_most_viewed_favourites' => 'Els meus favorits més vistos',
    'my_favourites' => 'Els meus favorits',
    'no_pages_viewed' => 'No heu vist cap pàgina',
    'no_pages_recently_created' => 'No s’ha creat cap pàgina recentment',
    'no_pages_recently_updated' => 'No s’ha actualitzat cap pàgina recentment',
    'export' => 'Exporta',
    'export_html' => 'Fitxer web independent',
    'export_pdf' => 'Fitxer PDF',
    'export_text' => 'Fitxer de text sense format',
    'export_md' => 'Fitxer Markdown',
    'default_template' => 'Default Page Template',
    'default_template_explain' => 'Assign a page template that will be used as the default content for all pages created within this item. Keep in mind this will only be used if the page creator has view access to the chosen template page.',
    'default_template_select' => 'Select a template page',

    // Permissions and restrictions
    'permissions' => 'Permisos',
    'permissions_desc' => 'Configureu aquí els permisos per a sobreescriure els permisos per defecte proporcionats pels rols d’usuari.',
    'permissions_book_cascade' => 'Els permisos dels llibres s’aplicaran també als capítols i les pàgines que continguin llevat que tinguin els seus propis permisos.',
    'permissions_chapter_cascade' => 'Els permisos dels capítols s’aplicaran també a les pàgines que continguin llevat que tinguin els seus propis permisos.',
    'permissions_save' => 'Desa els permisos',
    'permissions_owner' => 'Propietari',
    'permissions_role_everyone_else' => 'La resta dels usuaris',
    'permissions_role_everyone_else_desc' => 'Configureu permisos per a tots els rols que no s’hagin sobreescrit específicament.',
    'permissions_role_override' => 'Sobreescriu els permisos per al rol',
    'permissions_inherit_defaults' => 'Hereta la configuració per defecte',

    // Search
    'search_results' => 'Resultats de la cerca',
    'search_total_results_found' => 'S’ha trobat :count coincidència|S’han trobat :count coincidències',
    'search_clear' => 'Esborra la cerca',
    'search_no_pages' => 'No s’ha trobat cap pàgina que coincideixi amb la cerca',
    'search_for_term' => 'Cerca :term',
    'search_more' => 'Més resultats',
    'search_advanced' => 'Cerca avançada',
    'search_terms' => 'Termes de cerca',
    'search_content_type' => 'Tipus de contingut',
    'search_exact_matches' => 'Coincidències exactes',
    'search_tags' => 'Cerca d’etiquetes',
    'search_options' => 'Opcions',
    'search_viewed_by_me' => 'Vistos per mi',
    'search_not_viewed_by_me' => 'No vistos per mi',
    'search_permissions_set' => 'Amb permisos',
    'search_created_by_me' => 'Creats per mi',
    'search_updated_by_me' => 'Actualitzats per mi',
    'search_owned_by_me' => 'En soc propietari',
    'search_date_options' => 'Opcions de data',
    'search_updated_before' => 'Actualitzats abans de',
    'search_updated_after' => 'Actualitzats després de',
    'search_created_before' => 'Creats abans de',
    'search_created_after' => 'Creats després de',
    'search_set_date' => 'Defineix una data',
    'search_update' => 'Actualitza la cerca',

    // Shelves
    'shelf' => 'Prestatge',
    'shelves' => 'Prestatges',
    'x_shelves' => ':count prestatge|:count prestatges',
    'shelves_empty' => 'No hi ha cap prestatge',
    'shelves_create' => 'Crea un prestatge',
    'shelves_popular' => 'Prestatges populars',
    'shelves_new' => 'Prestatges nous',
    'shelves_new_action' => 'Prestatge nou',
    'shelves_popular_empty' => 'Aquí apareixeran els prestatges més populars.',
    'shelves_new_empty' => 'Aquí apareixeran els prestatges més recents.',
    'shelves_save' => 'Desa el prestatge',
    'shelves_books' => 'Llibres en aquest prestatge',
    'shelves_add_books' => 'Afegiu llibres en aquest prestatge',
    'shelves_drag_books' => 'Arrossegueu i deixeu anar llibres a sota per a afegir-los en aquest prestatge',
    'shelves_empty_contents' => 'Aquest prestatge no té cap llibre',
    'shelves_edit_and_assign' => 'Editeu el prestatge per a afegir-hi llibres',
    'shelves_edit_named' => 'Edita el prestatge &laquo;:name&raquo;',
    'shelves_edit' => 'Edita el prestatge',
    'shelves_delete' => 'Suprimeix el prestatge',
    'shelves_delete_named' => 'Suprimeix del prestatge &laquo;:name&raquo;',
    'shelves_delete_explain' => "Se suprimirà el prestatge &laquo;:name&raquo;. No se suprimiran els llibres que contingui.",
    'shelves_delete_confirmation' => 'Esteu segur que voleu suprimir aquest prestatge?',
    'shelves_permissions' => 'Permisos del prestatge',
    'shelves_permissions_updated' => 'S’han actualitzat els permisos del prestatge',
    'shelves_permissions_active' => 'El prestatge té permisos',
    'shelves_permissions_cascade_warning' => 'Els permisos dels prestatges no s’aplicaran als llibres que contingui. Això és perquè els llibres poden estar en més d’un prestatge a la vegada. Això no obstant, els permisos es poden copiar als llibres que contingui amb l’opció de sota.',
    'shelves_permissions_create' => 'Els permisos per a crear prestatges només s’utilitzen per a copiar permisos als llibres que contenen amb l’acció de sota. No controlen els permisos per a crear llibres.',
    'shelves_copy_permissions_to_books' => 'Copia els permisos als llibres',
    'shelves_copy_permissions' => 'Copia els permisos',
    'shelves_copy_permissions_explain' => 'S’aplicaran els permisos del prestatge a tots els llibres que contingui. Abans de continuar assegureu-vos que heu desat els canvis que hàgiu fet als permisos del prestatge.',
    'shelves_copy_permission_success' => 'S’han copiat els permisos del prestatge a :count llibres',

    // Books
    'book' => 'Llibre',
    'books' => 'Llibres',
    'x_books' => ':count llibre|:count llibres',
    'books_empty' => 'No hi ha cap llibre',
    'books_popular' => 'Llibres populars',
    'books_recent' => 'Llibres recents',
    'books_new' => 'Llibres nous',
    'books_new_action' => 'Llibre nou',
    'books_popular_empty' => 'Aquí apareixeran els llibres més populars.',
    'books_new_empty' => 'Aquí apareixeran els llibres més recents.',
    'books_create' => 'Crea un llibre',
    'books_delete' => 'Suprimeix el llibre',
    'books_delete_named' => 'Suprimeix el llibre &laquo;:bookName&raquo;',
    'books_delete_explain' => 'Se suprimirà el llibre &laquo;:bookName&raquo;. Se suprimiran totes les pàgines i capítols.',
    'books_delete_confirmation' => 'Esteu segur que voleu suprimir aquest llibre?',
    'books_edit' => 'Edita el llibre',
    'books_edit_named' => 'Edita el llibre &laquo;:bookName&raquo;',
    'books_form_book_name' => 'Títol del llibre',
    'books_save' => 'Desa el llibre',
    'books_permissions' => 'Permisos del llibre',
    'books_permissions_updated' => 'S’han actualitzat els permisos',
    'books_empty_contents' => 'No hi ha cap capítol ni cap pàgina en aquest llibre.',
    'books_empty_create_page' => 'Crea una pàgina',
    'books_empty_sort_current_book' => 'Ordena el llibre',
    'books_empty_add_chapter' => 'Afegeix un capítol',
    'books_permissions_active' => 'El llibre té permisos',
    'books_search_this' => 'Cerca en aquest llibre',
    'books_navigation' => 'Navegació del llibre',
    'books_sort' => 'Ordena el contingut d’un llibre',
    'books_sort_desc' => 'Moveu els capítols i les pàgines d’un llibre per a reorganitzar-ne el contingut. Podeu afegir altres llibres perquè sigui més fàcil moure capítols i pàgines d’un llibre a un altre.',
    'books_sort_named' => 'Ordena el llibre &laquo;:bookName&raquo;',
    'books_sort_name' => 'Ordena pel nom',
    'books_sort_created' => 'Ordena per la data de creació',
    'books_sort_updated' => 'Ordena per la data d’actualització',
    'books_sort_chapters_first' => 'Capítols al principi',
    'books_sort_chapters_last' => 'Capítols al final',
    'books_sort_show_other' => 'Mostra altres llibres',
    'books_sort_save' => 'Desa l’ordre nou',
    'books_sort_show_other_desc' => 'Afegiu llibres per a incloure’ls en l’ordenació i permetre una reorganització entre llibres més senzilla.',
    'books_sort_move_up' => 'Mou-ho cap amunt',
    'books_sort_move_down' => 'Mou-ho cap avall',
    'books_sort_move_prev_book' => 'Mou-ho al llibre anterior',
    'books_sort_move_next_book' => 'Mou-ho al llibre següent',
    'books_sort_move_prev_chapter' => 'Mou-ho al capítol anterior',
    'books_sort_move_next_chapter' => 'Mou-ho al capítol següent',
    'books_sort_move_book_start' => 'Mou-ho al principi del llibre',
    'books_sort_move_book_end' => 'Mou-ho al final del llibre',
    'books_sort_move_before_chapter' => 'Mou-ho a abans del capítol',
    'books_sort_move_after_chapter' => 'Mou-ho a després del capítol',
    'books_copy' => 'Copia el llibre',
    'books_copy_success' => 'S’ha copiat el llibre',

    // Chapters
    'chapter' => 'Capítol',
    'chapters' => 'Capítols',
    'x_chapters' => ':count capítol|:count capítols',
    'chapters_popular' => 'Capítols populars',
    'chapters_new' => 'Capítol nou',
    'chapters_create' => 'Crea un capítol',
    'chapters_delete' => 'Suprimeix un capítol',
    'chapters_delete_named' => 'Suprimeix el capítol &laquo;:chapterName&raquo;',
    'chapters_delete_explain' => 'Se suprimirà el capítol &laquo;:chapterName&raquo;. Se suprimiran totes les pàgines que hi ha al capítol.',
    'chapters_delete_confirm' => 'Esteu segur que voleu suprimir aquest capítol?',
    'chapters_edit' => 'Edita el capítol',
    'chapters_edit_named' => 'Edita el capítol &laquo;:chapterName&raquo;',
    'chapters_save' => 'Desa el capítol',
    'chapters_move' => 'Mou el capítol',
    'chapters_move_named' => 'Mou el capítol &laquo;:chapterName&raquo;',
    'chapters_copy' => 'Copia el capítol',
    'chapters_copy_success' => 'S’ha copiat el capítol',
    'chapters_permissions' => 'Permisos del capítol',
    'chapters_empty' => 'No hi ha cap pàgina en aquest capítol.',
    'chapters_permissions_active' => 'El capítol té permisos',
    'chapters_permissions_success' => 'S’han actualitzat els permisos del capítol',
    'chapters_search_this' => 'Cerca en aquest capítol',
    'chapter_sort_book' => 'Ordena el llibre',

    // Pages
    'page' => 'Pàgina',
    'pages' => 'Pàgines',
    'x_pages' => ':count pàgina|:count pàgines',
    'pages_popular' => 'Pàgines populars',
    'pages_new' => 'Crea una pàgina',
    'pages_attachments' => 'Fitxers adjunts',
    'pages_navigation' => 'Navegació de la pàgina',
    'pages_delete' => 'Suprimeix la pàgina',
    'pages_delete_named' => 'Suprimeix la pàgina &laquo;:pageName&raquo;',
    'pages_delete_draft_named' => 'Suprimeix l’esborrany de pàgina &laquo;:pageName&raquo;',
    'pages_delete_draft' => 'Suprimeix l’esborrany de pàgina',
    'pages_delete_success' => 'S’ha suprimit la pàgina',
    'pages_delete_draft_success' => 'S’ha suprimit l’esborrany de pàgina',
    'pages_delete_warning_template' => 'This page is in active use as a book or chapter default page template. These books or chapters will no longer have a default page template assigned after this page is deleted.',
    'pages_delete_confirm' => 'Esteu segur que voleu suprimir aquesta pàgina?',
    'pages_delete_draft_confirm' => 'Esteu segur que voleu suprimir aquest esborrany de pàgina?',
    'pages_editing_named' => 'Edició de la pàgina &laquo;:pageName&raquo;',
    'pages_edit_draft_options' => 'Opcions d’esborrany',
    'pages_edit_save_draft' => 'Desa l’esborrany',
    'pages_edit_draft' => 'Edita l’esborrany de pàgina',
    'pages_editing_draft' => 'Estàs editant l’esborrany',
    'pages_editing_page' => 'Edita la pàgina',
    'pages_edit_draft_save_at' => 'S’ha desat l’esborrany a les ',
    'pages_edit_delete_draft' => 'Suprimeix l’esborrany',
    'pages_edit_delete_draft_confirm' => 'Esteu segur que voleu suprimir els canvis de l’esborrany de pàgina? Es perdran tots els canvis que hàgiu fet després de la darrera vegada que vau desar la pàgina i l’editor s’actualitzarà amb l’estat de la darrera vegada que es va desar la pàgina que no era esborrany.',
    'pages_edit_discard_draft' => 'Descarta l’esborrany',
    'pages_edit_switch_to_markdown' => 'Canvia a l’editor de Markdown',
    'pages_edit_switch_to_markdown_clean' => '(Contingut net)',
    'pages_edit_switch_to_markdown_stable' => '(Contingut estable)',
    'pages_edit_switch_to_wysiwyg' => 'Canvia a l’editor WYSIWYG',
    'pages_edit_switch_to_new_wysiwyg' => 'Switch to new WYSIWYG',
    'pages_edit_switch_to_new_wysiwyg_desc' => '(In Alpha Testing)',
    'pages_edit_set_changelog' => 'Registre de canvis',
    'pages_edit_enter_changelog_desc' => 'Introduïu una descripció breu dels canvis que heu fet',
    'pages_edit_enter_changelog' => 'Registra un canvi',
    'pages_editor_switch_title' => 'Canvia l’editor',
    'pages_editor_switch_are_you_sure' => 'Esteu segur que voleu canviar l’editor d’aquesta pàgina?',
    'pages_editor_switch_consider_following' => 'Quan canvieu l’editor tingueu en compte que:',
    'pages_editor_switch_consideration_a' => 'Un cop s’hagi desat, l’editor nou serà el que hagin d’utilitzar tots els editor futurs, incloent-hi aquells que no puguin canviar el tipus d’editor.',
    'pages_editor_switch_consideration_b' => 'És possible que hi hagi pèrdues en el detall i la sintaxi.',
    'pages_editor_switch_consideration_c' => 'Els canvis en les etiquetes i el registre de canvis que s’hagin fet després de la darrera vegada que es va desar no es conservaran.',
    'pages_save' => 'Desa la pàgina',
    'pages_title' => 'Títol de la pàgina',
    'pages_name' => 'Nom de la pàgina',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Visualització prèvia',
    'pages_md_insert_image' => 'Insereix una imatge',
    'pages_md_insert_link' => 'Insereix un enllaç d’entitat',
    'pages_md_insert_drawing' => 'Insereix un dibuix',
    'pages_md_show_preview' => 'Mostra la visualització prèvia',
    'pages_md_sync_scroll' => 'Sincronitza el desplaçament de la visualització prèvia',
    'pages_drawing_unsaved' => 'S’ha trobat un dibuix sense desar',
    'pages_drawing_unsaved_confirm' => 'S’han trobat dades d’un dibuix d’un intent anterior de desar un dibuix. Voleu restaurar aquest dibuix no desat per a reprendre’n l’edició?',
    'pages_not_in_chapter' => 'La pàgina no és un capítol',
    'pages_move' => 'Mou la pàgina',
    'pages_copy' => 'Copia la pàgina',
    'pages_copy_desination' => 'Copia la destinació',
    'pages_copy_success' => 'S’ha copiat la pàgina',
    'pages_permissions' => 'Permisos de la pàgina',
    'pages_permissions_success' => 'S’han actualitzat els permisos de la pàgina',
    'pages_revision' => 'Revisió',
    'pages_revisions' => 'Revisions de la pàgina',
    'pages_revisions_desc' => 'A continuació hi ha la llista de totes les revisions d’aquesta pàgina. Si hi teniu permís, podeu mirar, comparar i restaurar versions antigues de la pàgina. És possible que no hi aparegui tot l’historial de la pàgina ja que, segons la configuració del sistema, és possible que s’hagin suprimit les revisions antigues automàticament.',
    'pages_revisions_named' => 'Revisions de la pàgina &laquo;:pageName&raquo;',
    'pages_revision_named' => 'Revisió de la pàgina &laquo;:pageName&raquo;',
    'pages_revision_restored_from' => 'S’ha restaurat de núm. :id: :summary',
    'pages_revisions_created_by' => 'Revisor:',
    'pages_revisions_date' => 'Data de la revisió',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Número de la revisió',
    'pages_revisions_numbered' => 'Revisió núm. :id',
    'pages_revisions_numbered_changes' => 'Canvis de la revisió núm. :id',
    'pages_revisions_editor' => 'Tipus d’editor',
    'pages_revisions_changelog' => 'Registre de canvis',
    'pages_revisions_changes' => 'Canvis',
    'pages_revisions_current' => 'Versió actual',
    'pages_revisions_preview' => 'Visualització prèvia',
    'pages_revisions_restore' => 'Restaura',
    'pages_revisions_none' => 'Aquesta pàgina no té cap revisió',
    'pages_copy_link' => 'Copia l’enllaç',
    'pages_edit_content_link' => 'Ves a la secció a l’editor',
    'pages_pointer_enter_mode' => 'Entra al mode de selecció de secció',
    'pages_pointer_label' => 'Opcions de la secció de pàgina',
    'pages_pointer_permalink' => 'Enllaç permanent de la secció de pàgina',
    'pages_pointer_include_tag' => 'Etiqueta inclou de la secció de pàgina',
    'pages_pointer_toggle_link' => 'Enllaç permanent. Cliqueu per a mostrar l’etiqueta d’inclusió',
    'pages_pointer_toggle_include' => 'Etiqueta d’inclusió. Cliqueu per a mostrar l’enllaç permanent',
    'pages_permissions_active' => 'La pàgina té permisos',
    'pages_initial_revision' => 'Publicació inicial',
    'pages_references_update_revision' => 'Actualització automàtica dels enllaços interns',
    'pages_initial_name' => 'Pàgina nova',
    'pages_editing_draft_notification' => 'Esteu editant un esborrany que es va desar :timeDiff.',
    'pages_draft_edited_notification' => 'Des de llavors, s’ha actualitzat la pàgina. Us recomanem que descarteu aquest esborrany.',
    'pages_draft_page_changed_since_creation' => 'Des que es va crear l’esborrany, la pàgina s’ha actualitzat. Us recomanem que descarteu aquest esborrany o que aneu amb compte de no sobreescriure cap canvi.',
    'pages_draft_edit_active' => [
        'start_a' => ':count usuaris han començat a editar aquesta pàgina',
        'start_b' => ':userName ha començat a editar aquesta pàgina',
        'time_a' => 'des que es va actualitzar aquesta pàgina',
        'time_b' => 'en els darrers :minCount minuts',
        'message' => ':start :time. Aneu amb compte de no sobreescriure-us els canvis.',
    ],
    'pages_draft_discarded' => 'S’ha descartat l’esborrany. L’editor s’ha actualitzat amb el contingut actual de la pàgina',
    'pages_draft_deleted' => 'S’ha suprimit l’esborrany! L’editor s’ha actualitzat amb el contingut actual de la pàgina',
    'pages_specific' => 'Pàgina específica',
    'pages_is_template' => 'Plantilla de la pàgina',

    // Editor Sidebar
    'toggle_sidebar' => 'Commuta la barra lateral',
    'page_tags' => 'Etiquetes de la pàgina',
    'chapter_tags' => 'Etiquetes del capítol',
    'book_tags' => 'Etiquetes del llibre',
    'shelf_tags' => 'Etiquetes del prestatge',
    'tag' => 'Etiqueta',
    'tags' =>  'Etiquetes',
    'tags_index_desc' => 'Es poden posar etiquetes al contingut per a aconseguir una categorització flexible. Les etiquetes han de tenir una clau i poden o no tenir un valor. Un cop s’hi han posat, es pot cercar el contingut utilitzant el nom o el valor de les etiquetes.',
    'tag_name' =>  'Nom de l’etiqueta',
    'tag_value' => 'Valor de l’etiqueta (opcional)',
    'tags_explain' => "Poseu alguna etiqueta per a categoritzar millor el contingut. \n Podeu assignar un valor a l’etiqueta per a aconseguir una organització més detallada.",
    'tags_add' => 'Posa-hi una altra etiqueta',
    'tags_remove' => 'Lleva aquesta etiqueta',
    'tags_usages' => 'Ús total de les etiquetes',
    'tags_assigned_pages' => 'Assignades a pàgines',
    'tags_assigned_chapters' => 'Assignades a capítols',
    'tags_assigned_books' => 'Assignades a llibres',
    'tags_assigned_shelves' => 'Assignades a prestatges',
    'tags_x_unique_values' => ':count valors únics',
    'tags_all_values' => 'Tots els valors',
    'tags_view_tags' => 'Mostra les etiquetes',
    'tags_view_existing_tags' => 'Mostra les etiquetes existents',
    'tags_list_empty_hint' => 'Podeu posar etiquetes a la barra lateral de l’editor o quan canvieu la informació d’un capítol o d’un prestatge.',
    'attachments' => 'Fitxers adjunts',
    'attachments_explain' => 'Pugeu fitxers o afegiu enllaços per a mostrar a la pàgina. Els podreu veure a la barra lateral de la pàgina.',
    'attachments_explain_instant_save' => 'Els canvis dels fitxers adjunts es desen a l’instant.',
    'attachments_upload' => 'Puja un fitxer',
    'attachments_link' => 'Afegeix un enllaç',
    'attachments_upload_drop' => 'També podeu arrossegar i deixar anar un fitxer aquí per a adjuntar-lo.',
    'attachments_set_link' => 'Configura l’enllaç',
    'attachments_delete' => 'Esteu segur que voleu suprimir aquest fitxer adjunt?',
    'attachments_dropzone' => 'Deixeu-hi anar fitxers per a pujar-los',
    'attachments_no_files' => 'No s’ha pujat cap fitxer',
    'attachments_explain_link' => 'Si us estimeu més no pujar un fitxer, podeu afegir un enllaç. Pot ser un enllaç en una altra pàgina o a un fitxer al núvol.',
    'attachments_link_name' => 'Nom de l’enllaç',
    'attachment_link' => 'Enllaç del fitxer adjunt',
    'attachments_link_url' => 'Enllaç al fitxer',
    'attachments_link_url_hint' => 'URL del lloc o del fitxer.',
    'attach' => 'Adjunta',
    'attachments_insert_link' => 'Afegeix un enllaç de fitxer adjunt a la pàgina',
    'attachments_edit_file' => 'Edita el fitxer',
    'attachments_edit_file_name' => 'Nom del fitxer',
    'attachments_edit_drop_upload' => 'Deixeu-hi anar fitxers o cliqueu aquí per a pujar-ne i sobreescriure’ls.',
    'attachments_order_updated' => 'S’ha actualitzat l’ordre del fitxer adjunt',
    'attachments_updated_success' => 'S’han actualitzat els detalls dels fitxer adjunt',
    'attachments_deleted' => 'S’ha suprimit el fitxer adjunt',
    'attachments_file_uploaded' => 'S’ha pujat el fitxer',
    'attachments_file_updated' => 'S’ha actualitzat el fitxer',
    'attachments_link_attached' => 'S’ha adjuntat l’enllaç a la pàgina',
    'templates' => 'Plantilles',
    'templates_set_as_template' => 'La pàgina és una plantilla',
    'templates_explain_set_as_template' => 'Podeu configurar aquesta pàgina com a plantilla perquè s’utilitzi en la creació d’altres pàgines. Els altres usuaris podran utilitzar aquesta plantilla si tenen permisos de visualització d’aquesta pàgina.',
    'templates_replace_content' => 'Substitueix el contingut de la pàgina',
    'templates_append_content' => 'Afegeix-ho després del contingut la pàgina',
    'templates_prepend_content' => 'Afegeix-ho abans del contingut la pàgina',

    // Profile View
    'profile_user_for_x' => 'Usuari des de fa :time',
    'profile_created_content' => 'Contingut creat',
    'profile_not_created_pages' => ':userName no ha creat cap pàgina',
    'profile_not_created_chapters' => ':userName no ha creat cap capítol',
    'profile_not_created_books' => ':userName no ha creat cap llibre',
    'profile_not_created_shelves' => ':userName no ha creat cap prestatge',

    // Comments
    'comment' => 'Comentari',
    'comments' => 'Comentaris',
    'comment_add' => 'Afegeix un comentari',
    'comment_placeholder' => 'Deixa un comentari aquí',
    'comment_count' => '{0} No hi ha cap comentari|{1} Hi ha 1 comentari|[2,*] Hi ha :count comentaris',
    'comment_save' => 'Desa el comentari',
    'comment_new' => 'Crea un comentari',
    'comment_created' => 'ha comentat :createDiff',
    'comment_updated' => ':username l’ha actualitzat :updateDiff',
    'comment_updated_indicator' => 'Actualitzat',
    'comment_deleted_success' => 'S’ha suprimit el comentari',
    'comment_created_success' => 'S’ha afegit un comentari',
    'comment_updated_success' => 'S’ha actualitzat un comentari',
    'comment_delete_confirm' => 'Esteu segur que voleu suprimir aquest comentari?',
    'comment_in_reply_to' => 'En resposta a :commentId',
    'comment_editor_explain' => 'Vet aquí els comentaris que s’han fet en aquesta pàgina. Els comentaris es poden fer i gestionar quan es visualitza la pàgina desada.',

    // Revision
    'revision_delete_confirm' => 'Esteu segur que voleu suprimir aquesta revisió?',
    'revision_restore_confirm' => 'Esteu segur que voleu restaurar aquesta revisió? Se substituirà el contingut actual de la pàgina.',
    'revision_cannot_delete_latest' => 'No es pot suprimir la darrera revisió.',

    // Copy view
    'copy_consider' => 'Quan copieu contingut, tingueu en compte el següent:',
    'copy_consider_permissions' => 'No es copiarà la configuració personalitzada de permisos.',
    'copy_consider_owner' => 'Sereu el propietari de tot el contingut copiat.',
    'copy_consider_images' => 'Els fitxers d’imatge de la pàgina no es duplicaran i les imatges originals conservaran la relació amb la pàgina a què es van pujar originalment.',
    'copy_consider_attachments' => 'No es copiaran els fitxers adjunts de la pàgina.',
    'copy_consider_access' => 'És possible que, en canviar la ubicació, el propietari o els permisos, el contingut esdevingui accessible a usuaris que no hi tenien accés.',

    // Conversions
    'convert_to_shelf' => 'Converteix en prestatge',
    'convert_to_shelf_contents_desc' => 'Pots convertir aquest llibre en un prestatge nou amb els mateixos continguts. Els capítols d’aquest llibre es convertiran en llibres. Si aquest llibre conté cap pàgina que no sigui en un capítol, es canviarà el nom del llibre que contindrà aquestes pàgines i el llibre formarà part del prestatge nou.',
    'convert_to_shelf_permissions_desc' => 'Es copiaran els permisos d’aquest llibre al prestatge nou i a tots els llibres que contingui que no tinguin els seus propis permisos. Tingueu en compte que els permisos dels prestatges no es propaguen als seus continguts com sí que ho fan els dels llibres.',
    'convert_book' => 'Converteix el llibre',
    'convert_book_confirm' => 'Esteu segur que voleu convertir aquest llibre?',
    'convert_undo_warning' => 'Això no es pot desfer fàcilment.',
    'convert_to_book' => 'Converteix en llibre',
    'convert_to_book_desc' => 'Podeu convertir aquest capítol en un llibre nou amb els mateixos continguts. Es copiaran els permisos d’aquest capítol al llibre nou, però no es copiaran els permisos heretats del llibre a què pertany cosa que podria canviar-ne el control d’accés.',
    'convert_chapter' => 'Converteix el capítol',
    'convert_chapter_confirm' => 'Esteu segur que voleu convertir aquest capítol?',

    // References
    'references' => 'Referències',
    'references_none' => 'No hi ha cap referència cap a aquest element.',
    'references_to_desc' => 'A la llista que hi ha a continuació, hi trobareu tot el contingut que enllaça cap aquest element.',

    // Watch Options
    'watch' => 'Segueix',
    'watch_title_default' => 'Preferències predeterminades',
    'watch_desc_default' => 'Reverteix el seguiment a les preferències de notificació per defecte.',
    'watch_title_ignore' => 'Ignora',
    'watch_desc_ignore' => 'Ignora totes les notificacions, incloent-hi les de les preferències de nivell usuari.',
    'watch_title_new' => 'Pàgines noves',
    'watch_desc_new' => 'Notifica’m la creació d’una pàgina nova dins d’aquest element.',
    'watch_title_updates' => 'Actualitzacions de la pàgina',
    'watch_desc_updates' => 'Notifica’m totes les pàgines noves i totes les actualitzacions de les pàgines.',
    'watch_desc_updates_page' => 'Notifica’m totes les actualitzacions de les pàgines.',
    'watch_title_comments' => 'Actualitzacions i comentaris de la pàgina',
    'watch_desc_comments' => 'Notifica’m totes les pàgines noves, totes les actualitzacions de les pàgines i tots els comentaris nous.',
    'watch_desc_comments_page' => 'Notifica’m tots les actualitzacions de pàgines i tots els comentaris nous.',
    'watch_change_default' => 'Canvia les preferències de notificació per defecte',
    'watch_detail_ignore' => 'S’estan ignorant les notificacions',
    'watch_detail_new' => 'S’està fent el seguiment de pàgines noves',
    'watch_detail_updates' => 'S’està fent el seguiment de pàgines noves i les actualitzacions de les pàgines',
    'watch_detail_comments' => 'S’està fent el seguiment de pàgines noves i les actualitzacions de les pàgines i els comentaris',
    'watch_detail_parent_book' => 'S’està fent el seguiment a través del llibre de què és part',
    'watch_detail_parent_book_ignore' => 'S’està ignorant a través del llibre de què és part',
    'watch_detail_parent_chapter' => 'S’està fent el seguiment a través del capítol de què és part',
    'watch_detail_parent_chapter_ignore' => 'S’està ignorant a través del capítol de què és part',
];