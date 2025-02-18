<?php
/***********************************************************************/
/** \file   server_admin_strings.inc.php
 * \brief  The strings displayed in the server administration console (Polish)
 *
 * This file is part of the Basic Meeting List Toolbox (BMLT).
 *
 * Find out more at: https://bmlt.app
 *
 * BMLT is free software: you can redistribute it and/or modify
 * it under the terms of the MIT License.
 *
 * BMLT is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * MIT License for more details.
 *
 * You should have received a copy of the MIT License along with this code.
 * If not, see <https://opensource.org/licenses/MIT>. */

defined('BMLT_EXEC') or die('Cannot Execute Directly');    // Makes sure that this file is in the correct context.

$comdef_server_admin_strings = array(
    'server_admin_disclosure' => 'Administracja serwera',
    'server_admin_naws_spreadsheet_label' => 'Zaktualizowano arkusz światowych ID:', // TODO: was changed to "Updated World Committee Codes Spreadsheet"
    'update_world_ids_button_text' => 'Zaktualizuj ID mityngów światowych z arkusza', // TODO: was changed to "'Update World Committee Codes"
    'update_world_ids_from_spreadsheet_dropdown_text' => 'Update World Committee Codes (Group IDs from NAWS) from NAWS Spreadsheet',
    'server_admin_error_no_world_ids_updated' => 'Nie zaktualizowano światowych ID. Przyczyną może być brak uprawnień na Twoim koncie do aktualizacji przesłanych mityngów.',
    'server_admin_error_required_spreadsheet_column' => 'Wymagana kolumna nie istnieje w arkuszu ',
    'server_admin_error_bmlt_id_not_integer' => 'Dostarczone bmlt_id nie jest liczbą całkowitą: ',
    'server_admin_error_could_not_create_reader' => 'Nie udało się stworzyć readera dla pliku: ',
    'server_admin_error_no_files_uploaded' => 'Nie zuploadowano plików.',
    'server_admin_ui_num_meetings_updated' => 'Liczba zaktualizowanych mityngów: ',
    'server_admin_ui_num_meetings_not_updated' => 'Liczba mityngów nie potrzebujących aktualizacji: ',
    'server_admin_ui_errors' => 'Błędy',
    'server_admin_ui_warning' => 'OSTRZEŻENIE',
    'server_admin_ui_deleted_meetings_marked' => 'Number of deleted meetings marked so that they won\'t appear in future NAWS exports: ',
    // TODO: re-translate this string (English version has been updated)
    // 'server_admin_ui_problem_meetings' => 'znaleziono mityngi w arkuszu, które nie istnieją w bazie danych. Może się to zdarzyć, gdy mityng jest usunięty lub niepubliczny. ID brakujących mityngów to: ',
    'server_admin_ui_problem_meetings' => 'meetings were found in the spreadsheet that couldn\'t be updated. Problem meeting IDs: ',
    'server_admin_ui_service_bodies_created' => 'Utworzone organy służb: ',
    'server_admin_ui_meetings_created' => 'Utworzone mityngi: ',
    'server_admin_ui_users_created' => 'Utworzeni użytkownicy: ',
    'server_admin_ui_refresh_ui_text' => 'Wyloguj i zaloguj się ponownie by zobaczyć nowe organy służb, użytkowników i mityngi.',
    'import_service_bodies_and_meetings_button_text' => 'Zaimportuj organy służb i mityngi',
    'import_service_bodies_and_meetings_dropdown_text' => 'Zaimportuj organy służb i mityngi z NAWS Export',
    'server_admin_naws_import_spreadsheet_label' => 'Arkusz NAWS Import',
    'server_admin_naws_import_initially_publish' => 'Initialize imported meetings to \'published\': ',
    'server_admin_naws_import_explanation' => 'Uncheck the box to initialize imported meetings to \'unpublished\'. (This is useful if many of the new meetings will need to be edited or deleted, and you don\'t want them showing up in the meantime.)',
    'account_disclosure' => 'Moje konto',
    'account_name_label' => 'Moja nazwa konta:',
    'account_login_label' => 'Mój login:',
    'account_type_label' => 'Jestem:',
    'account_type_1' => 'Administrator serwera',
    'account_type_2' => 'Administrator organu służb',
    'ServerMapsURL' => 'https://maps.googleapis.com/maps/api/geocode/xml?address=##SEARCH_STRING##&sensor=false',
    'account_type_4' => 'Żałosny przegryw, który nie powinien mieć dostępu do tej strony - autor oprogramowania dał ciała!',
    'account_type_5' => 'Obserwator z organu służb',
    'change_password_label' => 'Zmień moje hasło na:',
    'change_password_default_text' => 'Nie ruszaj tego, jeśli nie chcesz zmienić hasła',
    'account_email_label' => 'Mój adres e-mail:',
    'email_address_default_text' => 'Podaj adres e-mail',
    'account_description_label' => 'Mój opis:',
    'account_description_default_text' => 'Podaj opis',
    'account_change_button_text' => 'Zmień ustawienia konta',
    'account_change_fader_success_text' => 'Informacje o koncie pomyślnie zmienione',
    'account_change_fader_failure_text' => 'Informacje o koncie nie zostały zmienione',
    'meeting_editor_disclosure' => 'Edytor mityngu',
    'meeting_editor_already_editing_confirm' => 'Aktualnie edytujesz inny mityng. Czy chcesz utracić wszystkie zmiany w tamtym mityngu?',
    'meeting_change_fader_success_text' => 'Pomyślnie zmieniono mityng',
    'meeting_change_fader_failure_text' => 'Mityng nie został zmieniony',
    'meeting_change_fader_success_delete_text' => 'Pomyślnie usunięto mityng',
    'meeting_change_fader_fail_delete_text' => 'Mityng nie został usunięty',
    'meeting_change_fader_success_add_text' => 'Nowy mityng pomyślnie dodany',
    'meeting_change_fader_fail_add_text' => 'Nowy mityng nie został dodany',
    'meeting_text_input_label' => 'Wyszukaj tekst:',
    'access_service_body_label' => 'Mam dostęp do:',
    'meeting_text_input_default_text' => 'Podaj tekst do wyszukania',
    'meeting_text_location_label' => 'To jest lokalizacja lub kod pocztowy',
    'meeting_search_weekdays_label' => 'Wyszukaj wybrane dni tygodnia:',
    'meeting_search_weekdays_names' => array('Wszystkie', 'Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'),
    'meeting_search_service_bodies_label' => 'Szukaj w wybranych organach służb:',
    'meeting_search_start_time_label' => 'Szukaj według czasu rozpoczęcia mityngu:',
    'meeting_search_start_time_all_label' => 'Kiedykolwiek',
    'meeting_search_start_time_morn_label' => 'Ranek',
    'meeting_search_start_time_aft_label' => 'Popołudnie',
    'meeting_search_start_time_eve_label' => 'Wieczór',
    'meeting_search_no_results_text' => 'Nie znaleziono mityngów',
    'meeting_editor_tab_specifier_text' => 'Szukaj mityngów',
    'meeting_editor_tab_editor_text' => 'Edytuj mityngi',   // TODO: change to 'Edit Or Create Meetings'
    'meeting_editor_create_new_text' => 'Stwórz nowy mityng',
    'meeting_editor_location_map_link' => 'Mapa lokalizacji',
    'meeting_editor_screen_match_ll_button' => 'Ustaw długość i szerokość geograficzną na adres:',
    'meeting_editor_screen_default_text_prompt' => 'Wpisz jakiś tekst lub liczbę',
    'meeting_is_published' => 'Mityng opublikowany',
    'meeting_unpublished_note' => 'Uwaga: Cofnięcie publikacji mityngu sugeruje tymczasowe zamknięcie. Jeśli mityng jest zamknięty na stałe - usuń go.',
    'meeting_editor_screen_meeting_name_label' => 'Nazwa mityngu:',
    'meeting_editor_screen_meeting_name_prompt' => 'Podaj nazwę mityngu',
    'meeting_editor_screen_meeting_weekday_label' => 'Dzień tygodnia:',
    'meeting_editor_screen_meeting_start_label' => 'Czas rozpoczęcia mityngu:',
    'meeting_editor_screen_meeting_time_zone_label' => 'Meeting Time Zone:',
    'meeting_editor_screen_meeting_am_label' => 'AM',
    'meeting_editor_screen_meeting_pm_label' => 'PM',
    'meeting_editor_screen_meeting_noon_label' => 'Południe',
    'meeting_editor_screen_meeting_midnight_label' => 'Północ',
    'meeting_editor_screen_meeting_duration_label' => 'Czas trwania:',
    'meeting_editor_screen_meeting_oe_label' => 'Otwarty',
    'meeting_editor_screen_meeting_cc_label' => 'Kod Komitetu Światowego:',
    'meeting_editor_screen_meeting_cc_advice' => 'Normally leave this field alone (see documentation).',  // TODO: translate
    'meeting_editor_screen_meeting_contact_label' => 'E-mail kontaktowy mityngu:',
    'meeting_editor_screen_meeting_contact_prompt' => 'Podaj e-mail kontaktowy dla tego konkretnego mityngu',
    'meeting_editor_screen_meeting_sb_label' => 'Organ służb:',
    'meeting_editor_screen_meeting_sb_default_value' => 'Nie wybrano organu służb',
    'meeting_editor_screen_meeting_longitude_label' => 'Długość geograficzna:',
    'meeting_editor_screen_meeting_longitude_prompt' => 'Podaj długość geograficzną',
    'meeting_editor_screen_meeting_latitude_label' => 'Szerokość geograficzna:',
    'meeting_editor_screen_meeting_latitude_prompt' => 'Podaj szerokość geograficzną',
    'meeting_editor_screen_meeting_location_label' => 'Położenie:',
    'meeting_editor_screen_meeting_location_prompt' => 'Podaj nazwę miejsca (np. nazwa budynku)',
    'meeting_editor_screen_meeting_info_label' => 'Dodatkowe informacje:',
    'meeting_editor_screen_meeting_info_prompt' => 'Podaj jakiekolwiek dodatkowe informacje odnośnie lokalizacji',
    'meeting_editor_screen_meeting_street_label' => 'Ulica:',
    'meeting_editor_screen_meeting_street_prompt' => 'Podaj adres ulicy',
    'meeting_editor_screen_meeting_neighborhood_label' => 'Okolica:',
    'meeting_editor_screen_meeting_neighborhood_prompt' => 'Podaj okolicę (nie dzielnicę)',
    'meeting_editor_screen_meeting_borough_label' => 'Dzielnica:',
    'meeting_editor_screen_meeting_borough_prompt' => 'Podaj dzielnicę (nie okolicę)',
    'meeting_editor_screen_meeting_city_label' => 'Miasto/miejscowość:',
    'meeting_editor_screen_meeting_city_prompt' => 'Podaj miasto lub miejscowość',
    'meeting_editor_screen_meeting_county_label' => 'Powiat:',
    'meeting_editor_screen_meeting_county_prompt' => 'Podaj powiat',
    'meeting_editor_screen_meeting_state_label' => 'Województwo:',
    'meeting_editor_screen_meeting_state_prompt' => 'Podaj województwo',
    'meeting_editor_screen_meeting_zip_label' => 'Kod pocztowy:',
    'meeting_editor_screen_meeting_zip_prompt' => 'Podaj kod pocztowy',
    'meeting_editor_screen_meeting_nation_label' => 'Państwo:',
    'meeting_editor_screen_meeting_nation_prompt' => 'Podaj państwo',
    'meeting_editor_screen_meeting_comments_label' => 'Komentarze:',
    'meeting_editor_screen_meeting_train_lines_label' => 'Linie pociągowe:',
    'meeting_editor_screen_meeting_bus_lines_label' => 'Linie autobusowe:',
    'meeting_editor_screen_meeting_phone_meeting_number_label' => 'Phone Meeting Dial-in Number:',
    'meeting_editor_screen_meeting_phone_meeting_number_prompt' => 'Enter the dial-in number for a phone or virtual meeting',
    'meeting_editor_screen_meeting_virtual_meeting_link_label' => 'Virtual Meeting Link:',
    'meeting_editor_screen_meeting_virtual_meeting_link_prompt' => 'Enter the link for a virtual meeting',
    'meeting_editor_screen_meeting_virtual_meeting_additional_info_label' => 'Virtual Meeting Additional Information:',
    'meeting_editor_screen_meeting_virtual_meeting_additional_info_prompt' => 'Enter any additional information for joining the virtual meeting, including directly from the app. For example, if the meeting uses Zoom, "Zoom ID: 456 033 8613, Passcode: 1953" would be appropriate.',
    'meeting_editor_screen_meeting_venue_type' => 'Venue Type:',
    'meeting_editor_screen_meeting_venue_type_inperson' => 'In-Person',
    'meeting_editor_screen_meeting_venue_type_virtual' => 'Virtual',
    'meeting_editor_screen_meeting_venue_type_virtualTC' => 'Virtual (temporarily replacing an in-person)',
    'meeting_editor_screen_meeting_venue_type_hybrid' => 'Hybrid (both in-person and virtual)',
    'meeting_editor_screen_meeting_venue_type_validation' => 'You must select a venue type.',
    'meeting_editor_screen_meeting_virtual_info_missing' => 'Virtual or hybrid meetings must have a Virtual Meeting Link, a Phone Meeting Dial-in Number, or Virtual Meeting Additional Information',
    'meeting_editor_screen_meeting_location_warning' => 'Meeting should have a location (at least a city/town and state/province, or a zip/postal code).',
    'meeting_editor_screen_meeting_address_warning' => 'In-person or hybrid meetings should have a street address.',
    'meeting_editor_screen_meeting_url_validation' => 'Virtual Meeting Link is not a valid URL.',
    'meeting_editor_screen_meeting_url_or_phone_warning' => 'Virtual or hybrid meetings should have either a Virtual Meeting Link or a Phone Meeting Dial-in Number',
    'meeting_editor_screen_meeting_additional_warning' => 'Please also fill in Virtual Meeting Additional Information if there is a Virtual Meeting Link.',
    'meeting_editor_screen_in_person_virtual_info_warning' => 'In-person meetings shouldn\'t have any virtual meeting information.',
    'meeting_editor_screen_meeting_virtual_location_info_warning' => 'Virtual meetings shouldn\'t have a location name or address.',
    'meeting_editor_screen_meeting_validation_warning' => 'There are warnings.  Are you sure you want to save anyway?  If not, press \'cancel\' and go to the Location tab to see the warnings in place and address them.',
    'meeting_editor_screen_meeting_validation_failed' => 'Unable to save due to input errors.  Please go to the Location tab to address them, and then retry saving.  Errors: ',
    'meeting_editor_screen_meeting_validation_warnings' => 'Input warnings shown on the Location tab: ',
    'meeting_editor_screen_meeting_contact_name_1_label' => 'Imię osoby kontaktowej:',
    'meeting_editor_screen_meeting_contact_email_1_label' => 'Email kontaktowy:',
    'meeting_editor_screen_meeting_contact_phone_1_label' => 'Telefon kontaktowy:',
    'meeting_editor_screen_meeting_contact_name_2_label' => 'Imię drugiej osoby kontaktowej:',
    'meeting_editor_screen_meeting_contact_email_2_label' => 'Drugi email kontaktowy:',
    'meeting_editor_screen_meeting_contact_phone_2_label' => 'Drugi telefon kontaktowy:',
    'meeting_editor_screen_meeting_publish_search_prompt' => 'Szukam:',
    'meeting_editor_screen_meeting_publish_search_pub' => 'Tylko opublikowane mityngi',
    'meeting_editor_screen_meeting_publish_search_unpub' => 'Tylko nieopublikowane mityngi',
    'meeting_editor_screen_meeting_visibility_advice' => 'To nie powinno się wyświetlić przy normalnym wyszukiwaniu mityngów.',
    'meeting_editor_screen_meeting_publish_search_all' => 'Wszystkie mityngi',
    'meeting_editor_screen_meeting_create_button' => 'Dodaj nowy mityng',
    'meeting_editor_screen_delete_button' => 'Usuń ten mityng',
    'meeting_editor_screen_delete_button_confirm' => 'Jesteś pewien, że chcesz usunąć ten mityng?',
    'meeting_editor_screen_cancel_button' => 'Anuluj',
    'logout' => 'Wyloguj',
    'meeting_editor_screen_cancel_confirm' => 'Jesteś pewien, że chcesz przestać edytować ten mityng i utracić wszystkie zmiany?',
    'meeting_lookup_failed' => 'Wyszukiwanie adresu nie powiodło się.',
    'meeting_lookup_failed_not_enough_address_info' => 'Nie ma wystarczającej ilości informacji adresowych by wyszukać.',
    'meeting_create_button_name' => 'Zapisz jako nowy mityng',
    'meeting_saved_as_a_copy' => 'Zapisz ten mityng jako kopię (tworzy nowy mityng)',
    'meeting_save_buttonName' => 'Zapisz zmiany w tym mityngu',
    'meeting_editor_tab_bar_basic_tab_text' => 'Podstawy',
    'meeting_editor_tab_bar_location_tab_text' => 'Położenie',
    'meeting_editor_tab_bar_format_tab_text' => 'Format',
    'meeting_editor_tab_bar_other_tab_text' => 'Inne',
    'meeting_editor_tab_bar_history_tab_text' => 'Historia',
    'meeting_editor_result_count_format' => '%d mityngów znaleziono',
    'meeting_id_label' => 'ID: mityngu',
    'meeting_editor_default_zoom' => '13',
    'meeting_editor_default_weekday' => '2',
    'meeting_editor_default_start_time' => '20:30:00',
    'login_banner' => 'Basic Meeting List Toolbox',
    'login_underbanner' => 'Root Server Administration Console',
    'login' => 'Login ID',
    'password' => 'Hasło',
    'button' => 'Zaloguj się',
    'cookie' => 'Musisz włączyć obsługę cookies by zarządzać tym serwerem.',
    'noscript' => 'Nie możesz zarządzać tą stroną bez JavaScriptu.',
    'title' => 'Zaloguj się, by zarządzać serwerem.',
    'edit_Meeting_object_not_found' => 'BŁĄD: Mityng nie został znaleziony.',
    'edit_Meeting_object_not_changed' => 'BŁAD: Mityng nie został zmieniony.',
    'edit_Meeting_auth_failure' => 'Nie masz uprawnień do edytowania tego mityngu.',
    'not_auth_1' => 'NIEAUTORYZOWANY',
    'not_auth_2' => 'Nie masz uprawnień do zarządzania tym serwerem.',
    'not_auth_3' => 'Wystąpił problem z podaną nazwą użytkownika lub hasłem.',
    'email_format_bad' => 'Podany adres e-mail ma błędny format.',
    'history_header_format' => '<div class="bmlt_admin_meeting_history_list_item_line_div history_item_header_div"><span class="bmlt_admin_history_list_header_date_span">%s</span><span class="bmlt_admin_history_list_header_user_span">by %s</span></div>',
    'history_no_history_available_text' => '<h1 class="bmlt_admin_no_history_available_h1">Brak historii dostępnej dla tego mityngu</h1>',
    'service_body_editor_disclosure' => 'Zarządzanie organem służb',
    'service_body_change_fader_success_text' => 'Organ służb został pomyślnie zmieniony',
    'service_body_change_fader_fail_text' => 'Nieudana próba zmiany organu służb',
    'service_body_editor_screen_sb_id_label' => 'ID:',
    'service_body_editor_screen_sb_name_label' => 'Nazwa:',
    'service_body_name_default_prompt_text' => 'Podaj nazwę tego organu służb',
    'service_body_parent_popup_label' => 'Organ nadrzędny organu służb:',
    'service_body_parent_popup_no_parent_option' => 'Brak organu nadrzędnego (najwyższy poziom)',
    'service_body_editor_screen_sb_admin_user_label' => 'Główny administrator:',
    'service_body_editor_screen_sb_admin_description_label' => 'Opis:',
    'service_body_description_default_prompt_text' => 'Podaj opis tego organu służb',
    'service_body_editor_screen_sb_admin_email_label' => 'E-mail kontaktowy:',
    'service_body_email_default_prompt_text' => 'Podaj e-mail kontaktowy tego organu służb',
    'service_body_editor_screen_sb_admin_uri_label' => 'URL strony internetowej:',
    'service_body_uri_default_prompt_text' => 'Podaj URL strony internetowej tego organu służb',
    'service_body_editor_screen_sb_admin_full_editor_label' => 'Pełni edytorzy listy mityngów:',
    'service_body_editor_screen_sb_admin_full_editor_desc' => 'Użytkownicy mogący edytować dowolny mityng w tym organie służb',
    'service_body_editor_screen_sb_admin_editor_label' => 'Podstawowi edytorzy listy mityngów:',
    'service_body_editor_screen_sb_admin_editor_desc' => 'Użytkownicy mogący edytować jedynie nieopublikowane mityngi w tym organie służb.',
    'service_body_editor_screen_sb_admin_observer_label' => 'Obserwatorzy:',
    'service_body_editor_screen_sb_admin_observer_desc' => 'Użytkownicy mogący zobaczyć ukryte informacje (np. adres e-mail), ale bez możliwości edycji.',
    'service_body_dirty_confirm_text' => 'Wprowadziłeś zmiany dla tego organu służb. Chcesz utracić wprowadzone zmiany?',
    'service_body_save_button' => 'Zapisz zmiany tego organu służb',
    'service_body_create_button' => 'Stwórz organ służb',
    'service_body_delete_button' => 'Usuń ten organ służb',
    'service_body_delete_perm_checkbox' => 'Usuń trwale ten organ służb',
    'service_body_delete_button_confirm' => 'Jesteś pewien, że chcesz usunąć ten organ służb? Upewnij się, że wszystkie mityngi są usunięte lub przeniesione do innego organu służb przed wykonaniem tej akcji.',
    'service_body_delete_button_confirm_perm' => 'Ten organ służb zostanie usunięty trwale!',
    'service_body_change_fader_create_success_text' => 'Organ służb został pomyślnie utworzony',
    'service_body_change_fader_create_fail_text' => 'Tworzenie organu służb nie powiodło się',
    'service_body_change_fader_delete_success_text' => 'Organ służb został pomyślnie usunięty',
    'service_body_change_fader_delete_fail_text' => 'Usuwanie organu służb nie powiodło się',
    'service_body_change_fader_fail_no_data_text' => 'Zmiana organu służb nie powiodła się, ponieważ nie dostarczono żadnych danych',
    'service_body_change_fader_fail_cant_find_sb_text' => 'Zmiana organu służb nie powiodła się, ponieważ nie odnaleziono tego organu służb',
    'service_body_change_fader_fail_cant_update_text' => 'Zmiana organu służb nie powiodła się, ponieważ organ służb nie był zaktualizowany',
    'service_body_change_fader_fail_bad_hierarchy' => 'Zmiana organu służb nie powiodła się, ponieważ wybrany właściciel organu służb jest poniżej tego organu i nie może być użyty',
    'service_body_cancel_button' => 'Przywróć do oryginału',
    'service_body_editor_type_label' => 'Rodzaj organu służb:',
    'service_body_editor_type_c_comdef_service_body__GRP__' => 'Grupa',
    'service_body_editor_type_c_comdef_service_body__COP__' => 'Współpraca',
    'service_body_editor_type_c_comdef_service_body__ASC__' => 'Okręgowy Komitet Służebnych',
    'service_body_editor_type_c_comdef_service_body__RSC__' => 'Konferencja Służb Regionalnych',
    'service_body_editor_type_c_comdef_service_body__WSC__' => 'Konferencja Służb Światowych',
    'service_body_editor_type_c_comdef_service_body__MAS__' => 'Metro Area',
    'service_body_editor_type_c_comdef_service_body__ZFM__' => 'Zonal Forum',
    'service_body_editor_type_c_comdef_service_body__GSU__' => 'Grupowa jednostka służby',
    'service_body_editor_type_c_comdef_service_body__LSU__' => 'Lokalna jednostka służby',
    'service_body_editor_screen_helpline_label' => 'Linia pomocy:',
    'service_body_editor_screen_helpline_prompt' => 'Podaj numer telefonu dla linii pomocy',
    'service_body_editor_uri_naws_format_text' => 'Zbierz mityngi z tego organu służb jako plik zgodny z NAWS',
    'edit_Meeting_meeting_id' => 'ID mityngu:',
    'service_body_editor_create_new_sb_option' => 'Stwórz nowy organ służb',
    'service_body_editor_screen_world_cc_label' => 'Kod Komitetu Światowego:',
    'service_body_editor_screen_world_cc_prompt' => 'Podaj kod Komitetu Światowego',
    'user_editor_disclosure' => 'Zarządzanie użytkownika',
    'user_editor_create_new_user_option' => 'Utwórz nowego użytkownika',
    'user_editor_screen_sb_id_label' => 'ID:',
    'user_editor_account_login_label' => 'Login:',
    'user_editor_login_default_text' => 'Wpisz Login',
    'user_editor_account_type_label' => 'Użytkownik:',
    'user_editor_user_owner_label' => 'Właściciel: ',
    'user_editor_account_type_1' => 'Administrator serwera',
    'user_editor_account_type_2' => 'Służebny administrator',
    'user_editor_account_type_3' => 'Służebny edytor',
    'user_editor_account_type_5' => 'Służebny obserwator',
    'user_editor_account_type_4' => 'Dezaktywowany użytkownik',
    'user_editor_account_name_label' => 'Nazwa użytkownika:',
    'user_editor_name_default_text' => 'Wpisz nazwę użytkownika',
    'user_editor_account_description_label' => 'Opis:',
    'user_editor_description_default_text' => 'Wprowadź opis użytkownika',
    'user_editor_account_email_label' => 'Email:',
    'user_editor_email_default_text' => 'Wprowadź adres e-mail',
    'user_change_fader_success_text' => 'Użytkownik zmieniony pomyślnie',
    'user_change_fader_fail_text' => 'Nie udało się zmienić użytkwonika',
    'user_change_fader_create_success_text' => 'Użytkownik utworzony pomyślnie',
    'user_change_fader_create_fail_text' => 'Nie udało się utworzyć użytkownika',
    'user_change_fader_create_fail_already_exists' => 'Nazwa użytkownika istnieje już w bazie.',
    'user_change_fader_delete_success_text' => 'Użytkownik usunięty pomyślnie',
    'user_change_fader_delete_fail_text' => 'Nie udało się usunąć użytkownika',
    'user_save_button' => 'Zapisz zmiany dla tego użytkownika',
    'user_create_button' => 'Utwórz tego nowego użytkownika',
    'user_cancel_button' => 'Przywróć domyślne',
    'user_delete_button' => 'Usuń tego użytkownika',
    'user_delete_perm_checkbox' => 'Usuń tego użytkownika nieodwracalnie',
    'user_password_label' => 'Zmień hasło dla:',
    'user_new_password_label' => 'Ustaw hasło:',
    'user_password_default_text' => 'Nie zmieniaj tego pola, chyba, że chcesz zmienić hasło',
    'user_new_password_default_text' => 'Musisz wpisać hasło dla nowego użytkownika',
    'user_dirty_confirm_text' => 'Wprowadzono zmiany dla użytkownika. Czy chcesz utracić te zmiany?',
    'user_delete_button_confirm' => 'Czy na pewno chcesz usunąć tego użytkownika?',
    'user_delete_button_confirm_perm' => 'Użytkownik zostanie nieodwracalnie usunięty!',
    'user_create_password_alert_text' => 'Nowy użytkownik musi posiadać hasło. Nie wprowadzono hasła dla użytkownika.',
    'user_change_fader_fail_no_data_text' => 'Nie udało się wprowadzić zmian dla użytkownika. Nie wprowadzono wszystkich danych',
    'user_change_fader_fail_cant_find_sb_text' => 'Nie udało się wprowadzić zmian dla użytkownika.Nie znaleziono użytkownika',
    'user_change_fader_fail_cant_update_text' => 'Nie udało się wprowadzić zmian dla użytkownika',
    'format_editor_disclosure' => 'Administracja formatu',
    'format_change_fader_change_success_text' => 'Format zmieniony pomyślnie',
    'format_change_fader_change_fail_text' => 'Nie udało się zmienić formatu',
    'format_change_fader_create_success_text' => 'Format utworzony pomyślnie',
    'format_change_fader_create_fail_text' => 'Nie udało się utworzyć formatu',
    'format_change_fader_delete_success_text' => 'Format usunięty pomyślnie',
    'format_change_fader_delete_fail_text' => 'Nie udało się usunąć formatu',
    'format_change_fader_fail_no_data_text' => 'Nie udało się usunąć formatu z powodu brakujących danych',
    'format_change_fader_fail_cant_find_sb_text' => 'Nie udało się usunąć formatu, nie znaleziono formatu',
    'format_change_fader_fail_cant_update_text' => 'Nie udało się usunąć formatu, nie zaktualizowano formatu',
    'format_editor_name_default_text' => 'Podaj krótką nazwę',
    'format_editor_description_default_text' => 'Podaj bardziej szczegółowy opis',
    'format_editor_create_format_button_text' => 'Utwórz format',
    'format_editor_cancel_create_format_button_text' => 'Anuluj',
    'format_editor_create_this_format_button_text' => 'Utwórz ten format',
    'format_editor_change_format_button_text' => 'Zmień ten format',
    'format_editor_delete_format_button_text' => 'Usuń ten format',
    'format_editor_reset_format_button_text' => 'Przywróć do oryginału',
    'need_refresh_message_fader_text' => 'Odśwież stronę przed użyciem tej sekcji',
    'need_refresh_message_alert_text' => 'Ponieważ wprowadziłeś zmiany w Administracji Serwera, Administracji Organów Służb, Administracji Użytkowników lub Administracji Formatów, informacje zawarte w tej sekcji mogą już nie być aktualne. Proszę odświeżyć stronę poprzez wylogowanie się i zalogowanie się ponownie.',
    'format_editor_delete_button_confirm' => 'Czy na pewno chcesz usunąć ten format?',
    'format_editor_delete_button_confirm_perm' => 'Ten format zostanie usunięty nieodwracalnie!',
    'format_editor_missing_key' => 'This format should have an entry for every language (at least a key).',   // TODO: translate
    'format_editor_reserved_key' => 'This key is reserved for a venue type format - please use something different.',       // TODO: translate
    'min_password_length_string' => 'Hasło jest za krótkie! Hasło powinno posiadać minimum %d znaków!',
    'AJAX_Auth_Failure' => 'Nie udało się autoryzować operacji. Możliwe, że istnieje problem z konfiguracją serwera.',
    'Maps_API_Key_Warning' => 'Wystąpił problem z kluczem Google Maps API.',
    'Maps_API_Key_Not_Set' => 'Nie ustalono klucza Google Maps API.',
    'Observer_Link_Text' => 'Meeting Browser',
    'Data_Transfer_Link_Text' => 'Importuj dane mityngu (UWAGA: istniejące dane zostaną nadpisane!)',
    'MapsURL' => 'https://maps.google.com/maps?q=##LAT##,##LONG##+(##NAME##)&amp;ll=##LAT##,##LONG##',
    'hidden_value' => 'Nie można wyświetlić danych - brak autoryzacji',
    'Value_Prompts' => array(
        'id_bigint' => 'ID Mityngu',
        'worldid_mixed' => 'ID Służb Światowych',
        'service_body' => 'Organ służb',
        'service_bodies' => 'Organy służb',
        'weekdays' => 'Dni powszednie',
        'weekday' => 'Mityng spotyka się w każdy',
        'start_time' => 'Mityng rozpoczyna się o',
        'duration_time' => 'Mityng trwa',
        'location' => 'Lokalizacja',
        'duration_time_hour' => 'Godzina',
        'duration_time_hours' => 'Godziny',
        'duration_time_minute' => 'Minuta',
        'duration_time_minutes' => 'Minuty',
        'lang_enum' => 'Język',
        'formats' => 'Formaty',
        'distance' => 'Odległość od centrum miasta',
        'generic' => 'Mityng NA',
        'close_title' => 'Zamknij okno ze szczegółami mityngu',
        'close_text' => 'Zamknij okno',
        'map_alt' => 'Mapa dojazdu do mityngu',
        'map' => 'Podążaj za linkiem by wyświetlić mapę',
        'title_checkbox_unpub_meeting' => 'Ten mityng nie został opublikowany. Nie będzie dostępny w wynikach wyszukiwania.',
        'title_checkbox_copy_meeting' => 'Ten mityng jest duplikatem istniejącego mityngu. Nie został opublikowany. Nie będzie widoczny w wynikach wyszukiwania'
    ),
    'world_format_codes_prompt' => 'Format NAWS:',
    'world_format_codes' => array(
        '' => 'Brak',
        'OPEN' => 'Otwarty',
        'CLOSED' => 'Zamknięty',
        'WCHR' => 'Wózki inwalidzkie',
        'BEG' => 'Nowoprzybili',
        'BT' => 'Tekst podstawowe',
        'CAN' => 'Świeczka',
        'CPT' => '12 Tradycji',
        'CW' => 'Dzieci mile widziane',
        'DISC' => 'Dyskusja',
        'GL' => 'LGBTQ',
        'IP' => 'Broszura Informacyjna',
        'IW' => 'To Działa - Jak i Dlaczego',
        'JFT' => 'Właśnie Dzisiaj',
        'LC' => 'Życie w czystości',
        'LIT' => 'Analiza książek',
        'M' => 'Mężczyźni',
        'MED' => 'Medytacja',
        'NS' => 'Zakaz palenia',
        'QA' => 'Pytania i ODpowiedzi',
        'RA' => 'Ograniczone uczestnicwo',
        'S-D' => 'Speaker/Discussion', // TODO translate
        'SMOK' => 'Palenie',
        'SPK' => 'Spiker',
        'STEP' => 'Krok',
        'SWG' => 'Przewodnik pracy nad Krokami',
        'TOP' => 'Temat',
        'TRAD' => 'Tradycja',
        'VAR' => 'Zmienny format',
        'W' => 'Kobiety',
        'Y' => 'Młodzi ludzie',
        'LANG' => 'Alternatywny język',
        'GP' => 'Guiding Principles',
        'NC' => 'Bez dzieci',
        'CH' => 'Zamknięty w święta',
        'VM' => 'Virtual', // TODO translate
        'HYBR' => 'Virtual and In-Person', // TODO translate
        'TC' => 'Temporarily Closed Facility' // TODO translate
    ),
    'format_type_prompt' => 'Typ formatu:',
    'format_type_codes' => array(
        '' => 'Brak',
        'FC1' => 'Format mityngu (spiker, analiza literatury etc.)',
        'FC2' => 'Kod lokalizacji (dostęp dla wózków inwalidzkich, ograniczony parking, etc.)',
        'FC3' => 'Potrzeby i ograniczenia (mityng mężczyzn, LGBTQ, zakaz dzieci etc.)',
        'O' => 'Dostępność dla nieuzależnionych (Otwarty, Zamknięty)',
        'LANG' => 'Język',
        'ALERT' => 'Format powinien być łatwo widoczny (Wymagania dot. czasu czystości, etc.)',
    ),

    'cookie_monster' => 'Ta strona używa ciasteczek do przechowywania Twoich preferencji językowych.',
    'main_prompts' => array(
        'id_bigint' => 'ID',
        'worldid_mixed' => 'Światowe ID',
        'shared_group_id_bigint' => 'Nieużywane',
        'service_body_bigint' => 'ID komitetu',
        'weekday_tinyint' => 'Dzień powszedni',
        'venue_type' => 'Venue Type',
        'start_time' => 'Czas rozpoczęcia',
        'duration_time' => 'Czas trwania',
        'time_zone' => 'Time Zone',
        'formats' => 'Formaty',
        'lang_enum' => 'Język',
        'longitude' => 'Długość geograficzna',
        'latitude' => 'Szerokość geograficzna',
        'published' => 'Opublikowany',
        'email_contact' => 'Kontakt e-mail',
    ),
    'check_all' => 'Check All',
    'uncheck_all' => 'Uncheck All',
    'automatically_calculated_on_save' => 'Automatically calculated on save.'
);
$email_contact_strings = array(
    'meeting_contact_form_subject_format' => "[MEETING LIST CONTACT] %s",
    'meeting_contact_message_format' => "%s\n--\nTa wiadomość dotyczy mityngu o nazwie \"%s\", który odbywa się %s, %s.\nBrowser Link: %s\nLink do edycji: %s\nZostał wysłany z serwera z listą mityngów, a nadawca nie zna Twojego adresu e-mail.\nPamiętaj, że, odpowiadając na tę wiadomość, ujawnisz swój adres e-mail.\nJeśli użyjesz \"Odpowiedz wszystkim\", a jest więcej niż jeden odbiorca, możesz ujawnić adresy e-mail innych użytkowników.\nUszanuj, proszę, anonimowość użytkowników; włączając w to oryginalnego nadawcę tego e-maila."
);

$change_type_strings = array(
    '__THE_MEETING_WAS_CHANGED__' => 'Mityng został zmieniony.',
    '__THE_MEETING_WAS_CREATED__' => 'Mityng został utworzony.',
    '__THE_MEETING_WAS_DELETED__' => 'Mityng został usunięty.',
    '__THE_MEETING_WAS_ROLLED_BACK__' => 'Mityng został przywrócony do poprzedniej wersji',

    '__THE_FORMAT_WAS_CHANGED__' => 'Format został zmieniony.',
    '__THE_FORMAT_WAS_CREATED__' => 'Format został utworzonty.',
    '__THE_FORMAT_WAS_DELETED__' => 'Format został usunięty.',
    '__THE_FORMAT_WAS_ROLLED_BACK__' => 'Format został przywrócony do poprzedniej wersji.',

    '__THE_SERVICE_BODY_WAS_CHANGED__' => 'Organ służb został zmieniony.',
    '__THE_SERVICE_BODY_WAS_CREATED__' => 'Organ służb został utworzony.',
    '__THE_SERVICE_BODY_WAS_DELETED__' => 'Organ służb został usunięty.',
    '__THE_SERVICE_BODY_WAS_ROLLED_BACK__' => 'Organ służb został przywrócony do poprzedniej wersji.',

    '__THE_USER_WAS_CHANGED__' => 'Użytkownik został zmieniony.',
    '__THE_USER_WAS_CREATED__' => 'Użytkownik został utworzony.',
    '__THE_USER_WAS_DELETED__' => 'Użytkownik został usunięty.',
    '__THE_USER_WAS_ROLLED_BACK__' => 'Użytkownik został przywrócony do poprzedniej wersji.',

    '__BY__' => 'przez',
    '__FOR__' => 'dla'
);

$detailed_change_strings = array(
    'was_changed_from' => 'został zmieniony z',
    'to' => 'na',
    'was_changed' => 'został zmieniony',
    'was_added_as' => 'został dodany jako',
    'was_deleted' => 'został usunięty',
    'was_published' => 'Mityng został opublikowany',
    'was_unpublished' => 'Mityng był nieopublikowany',
    'formats_prompt' => 'Format mityngu',
    'duration_time' => 'Czas trwania mityngu',
    'start_time' => 'Czas rozpoczęcia mityngu',
    'longitude' => 'Długość geograficzna mityngu',
    'latitude' => 'Szerokość geograficzna mityngu',
    'sb_prompt' => 'Mityng zmienił swój organ służb z',
    'id_bigint' => 'ID mityngu',
    'lang_enum' => 'Język mityngu',
    'worldid_mixed' => 'Udostępnione ID grupy',  // TODO: translate The World Committee Code
    'weekday_tinyint' => 'Dzień tygodnia, w którym odbywa się mityng',
    'non_existent_service_body' => 'Organ służb już nie istnieje',
);

defined('_END_CHANGE_REPORT') or define('_END_CHANGE_REPORT', '.');
