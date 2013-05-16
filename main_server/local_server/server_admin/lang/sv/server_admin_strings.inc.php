<?php
/***********************************************************************/
/** \file	search_results_strings.inc.php
	\brief	The strings displayed in the search results for this language (English)
    
    This file is part of the Basic Meeting List Toolbox (BMLT).
    
    Find out more at: http://bmlt.magshare.org

    BMLT is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    BMLT is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this code.  If not, see <http://www.gnu.org/licenses/>.
	Swedish translator webmaster2@nasverige.org Magnus*/
	defined( 'BMLT_EXEC' ) or die ( 'Cannot Execute Directly' );	// Makes sure that this file is in the correct context.
	
	$comdef_server_admin_strings = array (  'account_disclosure'                                    =>  'Mitt konto',
	                                        'account_name_label'                                    =>  'Kontonamn:',
	                                        'account_login_label'                                   =>  'Min inloggning:',
	                                        'account_type_label'                                    =>  'Jag är en:',
	                                        'account_type_1'                                        =>  'Server Administratör',
	                                        'account_type_2'                                        =>  'Serviceenhet Administratör',
<<<<<<< HEAD
=======
											'ServerMapsURL'                                         =>  'http://maps.googleapis.com/maps/api/geocode/xml?address=##SEARCH_STRING##&sensor=false',
>>>>>>> master
	                                        'account_type_4'                                        =>  'hacker? tydligen inte...',
	                                        'account_type_5'                                        =>  'Serviceenhet övervakare',
	                                        'Data_Transfer_Link_Text'                               =>  'Import Meeting Data (WARNING: Replaces Current Data!)',
	                                        'change_password_label'                                 =>  'Ändra mitt lösenord till:',
	                                        'change_password_default_text'                          =>  'Låt denna vara såvida du inte vill byta lösenord',
	                                        'account_email_label'                                   =>  'Min Epostadress:',
	                                        'email_address_default_text'                            =>  'Fyll i en Epostadress',
	                                        'account_description_label'                             =>  'Om mig:',
	                                        'account_description_default_text'                      =>  'Fyll i en "om mig" text',
	                                        'account_change_button_text'                            =>  'Ändra mina kontoinställningar',
	                                        'account_change_fader_success_text'                     =>  'Kontoinställningarna ändrades framgångsrikt.',
	                                        'account_change_fader_failure_text'                     =>  'Kontoinställningarna ändrades inte!',
	                                        'meeting_editor_disclosure'                             =>  'Ändra möten',
	                                        'meeting_editor_already_editing_confirm'                =>  'Du arbetar med ett annat möte. Vill du fortsätta och tappa ev ändringar?',
	                                        'meeting_change_fader_success_text'                     =>  'Mötet ändrades framgångsrikt',
	                                        'meeting_change_fader_failure_text'                     =>  'Mötet ändrades inte!',
	                                        'meeting_change_fader_success_delete_text'              =>  'Mötet kasserat',
	                                        'meeting_change_fader_fail_delete_text'                 =>  'Mötet kasserades inte!',
	                                        'meeting_change_fader_success_add_text'                 =>  'Nytt möte registrerat',
	                                        'meeting_change_fader_fail_add_text'                    =>  'Det nya mötet registrerades inte!',
	                                        'meeting_text_input_label'                              =>  'Sök efter text:',
	                                        'access_service_body_label'                             =>  'Jag har tillgång till:',
	                                        'meeting_text_input_default_text'                       =>  'Fyll i någon söktext',
	                                        'meeting_text_location_label'                           =>  'Sök efter närmaste möte till en plats',
	                                        'meeting_search_weekdays_label'                         =>  'Sök möten utvalda dagar:',
	                                        'meeting_search_weekdays_names'                         =>  array ( 'Alla', 'Söndag', 'Måndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lördag' ),
	                                        'meeting_search_service_bodies_label'                   =>  'Sök i utvalda servicenheter:',
	                                        'meeting_search_start_time_label'                       =>  'Sök efter mötets starttid:',
	                                        'meeting_search_start_time_all_label'                   =>  'Valfri tid',
	                                        'meeting_search_start_time_morn_label'                  =>  'Morgon',
	                                        'meeting_search_start_time_aft_label'                   =>  'Eftermiddag',
	                                        'meeting_search_start_time_eve_label'                   =>  'Kväll',
	                                        'meeting_search_no_results_text'                        =>  'Inga möten funna.',
	                                        'meeting_editor_tab_specifier_text'                     =>  'Sök efter möten',
	                                        'meeting_editor_tab_editor_text'                        =>  'Ändra möten',
	                                        'meeting_editor_create_new_text'                        =>  'Skapa ett nytt möte',
	                                        'meeting_editor_location_map_link'                      =>  'Karta',
	                                        'meeting_editor_screen_match_map_button'                =>  'Sätt karta för adress',
	                                        'meeting_editor_screen_default_text_prompt'             =>  'Fyll i text eller nummer',
	                                        'meeting_is_published'                                  =>  'Mötet är nu publicerat',
	                                        'meeting_editor_screen_meeting_name_label'              =>  'Mötets namn:',
	                                        'meeting_editor_screen_meeting_name_prompt'             =>  'Fyll i mötets namn',
	                                        'meeting_editor_screen_meeting_weekday_label'           =>  'Veckodag:',
	                                        'meeting_editor_screen_meeting_start_label'             =>  'Mötets starttid:',
	                                        'meeting_editor_screen_meeting_am_label'                =>  'AM',
	                                        'meeting_editor_screen_meeting_pm_label'                =>  'PM',
	                                        'meeting_editor_screen_meeting_noon_label'              =>  'Middag',
	                                        'meeting_editor_screen_meeting_midnight_label'          =>  'Midnatt',
	                                        'meeting_editor_screen_meeting_duration_label'          =>  'Varaktighet:',
	                                        'meeting_editor_screen_meeting_oe_label'                =>  'Osatt sluttid',
	                                        'meeting_editor_screen_meeting_cc_label'                =>  'Världsservice kod:',
	                                        'meeting_editor_screen_meeting_cc_prompt'               =>  'Fyll i en världsservicekod',
	                                        'meeting_editor_screen_meeting_contact_label'           =>  'Mötets epostkontakt:',
	                                        'meeting_editor_screen_meeting_contact_prompt'          =>  'Fyll i en epostadress för kontakt and detta möte',
	                                        'meeting_editor_screen_meeting_sb_label'                =>  'Serviceenhet:',
	                                        'meeting_editor_screen_meeting_sb_default_value'        =>  'Ingen serviceenhet vald',
	                                        'meeting_editor_screen_meeting_longitude_label'         =>  'Longitud:',
	                                        'meeting_editor_screen_meeting_longitude_prompt'        =>  'Fyll i en longitud',
	                                        'meeting_editor_screen_meeting_latitude_label'          =>  'Latitud:',
	                                        'meeting_editor_screen_meeting_latitude_prompt'         =>  'fyll i en latitud',
	                                        'meeting_editor_screen_meeting_location_label'          =>  'plats:',
	                                        'meeting_editor_screen_meeting_location_prompt'         =>  'Fyll i en plats(ex byggnadens namn)',
	                                        'meeting_editor_screen_meeting_info_label'              =>  'Extra Info:',
	                                        'meeting_editor_screen_meeting_info_prompt'             =>  'Fyll i vidare platsinformation',
	                                        'meeting_editor_screen_meeting_street_label'            =>  'GatuAdress:',
	                                        'meeting_editor_screen_meeting_street_prompt'           =>  'Fyll i en gatuadress',
	                                        'meeting_editor_screen_meeting_neighborhood_label'      =>  'Närområde:',
	                                        'meeting_editor_screen_meeting_neighborhood_prompt'     =>  'Fyll i närområde',
	                                        'meeting_editor_screen_meeting_borough_label'           =>  'Stadsdel:',
	                                        'meeting_editor_screen_meeting_borough_prompt'          =>  'Fyll i en stadsdel)',
	                                        'meeting_editor_screen_meeting_city_label'              =>  'Stad:',
	                                        'meeting_editor_screen_meeting_city_prompt'             =>  'Fyll i en stad',
	                                        'meeting_editor_screen_meeting_county_label'            =>  'Land:',
	                                        'meeting_editor_screen_meeting_county_prompt'           =>  'Fyll i ett land',
	                                        'meeting_editor_screen_meeting_state_label'             =>  'Län:',
	                                        'meeting_editor_screen_meeting_state_prompt'            =>  'Fyll i ett län',
	                                        'meeting_editor_screen_meeting_zip_label'               =>  'Postnummer:',
	                                        'meeting_editor_screen_meeting_zip_prompt'              =>  'Fyll i postnummer',
	                                        'meeting_editor_screen_meeting_nation_label'            =>  'Världsdel:',
	                                        'meeting_editor_screen_meeting_nation_prompt'           =>  'Fyll i en världsdel',
	                                        'meeting_editor_screen_meeting_publish_search_prompt'   =>  'Leta efter:',
	                                        'meeting_editor_screen_meeting_publish_search_pub'      =>  'Publiserade möten',
	                                        'meeting_editor_screen_meeting_publish_search_unpub'    =>  'Opubliserade möten',
	                                        'meeting_editor_screen_meeting_visibility_advice'       =>  'Detta syns inte vid normal mötessökning',
	                                        'meeting_editor_screen_meeting_publish_search_all'      =>  'Alla möten',
	                                        'meeting_editor_screen_meeting_create_button'           =>  'Skapa nytt möte',
	                                        'meeting_editor_screen_delete_button'                   =>  'Kassera detta möte',
	                                        'meeting_editor_screen_delete_perm_checkbox'            =>  'Kassera för gott detta möte',
	                                        'meeting_editor_screen_delete_button_confirm'           =>  'Är du säker på att du vill kasta detta möte?',
	                                        'meeting_editor_screen_delete_button_confirm_perm'      =>  'Detta möte kommer kasseras permanent!',
	                                        'meeting_editor_screen_cancel_button'                   =>  'Ångra',
	                                        'logout'                                                =>  'Logga ut (och ta en nypa luft)',
	                                        'meeting_editor_screen_cancel_confirm'                  =>  'Säker på att du vill avsluta? du kommer förlora ev ändringar!',
	                                        'meeting_lookup_failed'                                 =>  'Adressökningen misslyckades.',
	                                        'meeting_lookup_failed_not_enough_address_info'         =>  'Det behövs mer adressinformation',
	                                        'meeting_create_button_name'                            =>  'Spara detta som ett nytt möte',
	                                        'meeting_saved_as_a_copy'                               =>  'Spara en kopia på detta möte',
	                                        'meeting_save_buttonName'                               =>  'Spara ändringar',
	                                        'meeting_editor_tab_bar_basic_tab_text'                 =>  'Grundläggnade',
	                                        'meeting_editor_tab_bar_location_tab_text'              =>  'Plats',
	                                        'meeting_editor_tab_bar_format_tab_text'                =>  'MötesFormat',
	                                        'meeting_editor_tab_bar_other_tab_text'                 =>  'Annat',
	                                        'meeting_editor_tab_bar_history_tab_text'               =>  'Historik',
	                                        'meeting_editor_result_count_format'                    =>  '%d Möten funna',
	                                        'meeting_id_label'                                      =>  'Mötes ID:',
	                                        'meeting_editor_default_zoom'                           =>  '13',
	                                        'meeting_editor_default_weekday'                        =>  '2',
	                                        'meeting_editor_default_start_time'                     =>  '19:00:00',
	                                        'meeting_editor_default_duration'                       =>  '01:30:00',
	                                        'login_banner'                                          =>  'Basic Meeting List Toolbox',
	                                        'login_underbanner'                                     =>  'Root Server Administrationssida',
											'login'                                                 =>  'Användarnamn',
                                            'password'                                              =>  'Lösenord',
                                            'button'                                                =>  'Logga in',
                                            'cookie'                                                =>  'Du måste aktivera "cookies" för att de ska fungera.',
                                            'noscript'                                              =>  'Du måste aktivera javascript!',
                                            'title'                                                 =>  'Logga in för att göra ändringar',
											'edit_Meeting_object_not_found'                         =>  'FEL: mötet fanns inte.',
 											'edit_Meeting_object_not_changed'                       =>  'FEL: mötet ändrades inte',
 											'edit_Meeting_auth_failure'                             =>  'Du har inte rättigheter till att ändra detta möte',
                                            'not_auth_1'                                            =>  'DU SAKNAR RÄTTIGHETER',
                                            'not_auth_2'                                            =>  'Du saknar rättigheter till att adminitrera servern',
                                            'not_auth_3'                                            =>  'Problem med dina uppgifter... Capslock eller slarvpelle?',
											'email_format_bad'                                      =>  'Epostadressen du angav var felformaterad. (inge snabelsnok eller liknande)',
											'history_header_format'                                 =>  '<div class="bmlt_admin_meeting_history_list_item_line_div history_item_header_div"><span class="bmlt_admin_history_list_header_date_span">%s</span><span class="bmlt_admin_history_list_header_user_span">av %s</span></div>',
											'history_no_history_available_text'                     =>  '<h1 class="bmlt_admin_no_history_available_h1">Ingen historik för detta möte</h1>',
											'service_body_editor_disclosure'                        =>  'Serviceenhet Administratör',
	                                        'service_body_change_fader_success_text'                =>  'Serviceenheten ändrad framgångsrikt.',
	                                        'service_body_change_fader_fail_text'                   =>  'Lyckades inte ändra Serviceenheten ',
	                                        'service_body_editor_screen_sb_id_label'                =>  'ID:',
	                                        'service_body_editor_screen_sb_name_label'              =>  'Namn:',
	                                        'service_body_name_default_prompt_text'                 =>  'Fyll i Serviceenhetens namn',
	                                        'service_body_parent_popup_label'                       =>  'Serviceenhetens förälder:',
	                                        'service_body_parent_popup_no_parent_option'            =>  'Ingen förälder (Top-nivå)',
	                                        'service_body_editor_screen_sb_admin_user_label'        =>  'Primär Administratör:',
	                                        'service_body_editor_screen_sb_admin_description_label' =>  'Beskrivning:',
	                                        'service_body_description_default_prompt_text'          =>  'Fyll i en beskrivning för serviceenheten',
	                                        'service_body_editor_screen_sb_admin_email_label'       =>  'Kontakt Serviceenhet (Epost):',
	                                        'service_body_email_default_prompt_text'                =>  'Fyll i en Epostadress för serviceenheten.',
	                                        'service_body_editor_screen_sb_admin_uri_label'         =>  'web-adress',
	                                        'service_body_uri_default_prompt_text'                  =>  'Fyll i en web-adress för serviceenheten',
	                                        'service_body_editor_screen_sb_admin_full_editor_label' =>  'Redaktörer för hela möteslistan:',
	                                        'service_body_editor_screen_sb_admin_full_editor_desc'  =>  'Dessa redaktörer kan ändra samtliga möten i möteslistan.',
	                                        'service_body_editor_screen_sb_admin_editor_label'      =>  'Grundläggande redaktörer:',
	                                        'service_body_editor_screen_sb_admin_editor_desc'       =>  'Dessa redaktörer kan endast ändringar i en specifik serviceenhet. Bara i opubliserade möten.',
	                                        'service_body_editor_screen_sb_admin_observer_label'    =>  'Observatörer:',
	                                        'service_body_editor_screen_sb_admin_observer_desc'     =>  'Dessa kan inte ändra något. Men kan se dold information',
	                                        'service_body_dirty_confirm_text'                       =>  'Du har gjort ändringar i serviceenheten. Vill du lämna och förlora dina ändringar?',
	                                        'service_body_save_button'                              =>  'Spara ändringar i serviceenheten',
	                                        'service_body_create_button'                            =>  'Skapa serviceenhet',
	                                        'service_body_delete_button'                            =>  'Kassera serviceenhet',
	                                        'service_body_delete_perm_checkbox'                     =>  'Kassera serviceenhet permanent',
	                                        'service_body_delete_button_confirm'                    =>  'Säker på att du vill kassera serviceenheten?',
	                                        'service_body_delete_button_confirm_perm'               =>  'Serviceenheten kasseras nu för gott!',
	                                        'service_body_change_fader_create_success_text'         =>  'Serviceenhet skapad',
	                                        'service_body_change_fader_create_fail_text'            =>  'Serviceenheten skapades inte!',
	                                        'service_body_change_fader_delete_success_text'         =>  'Serviceenheten är nu kasserad',
	                                        'service_body_change_fader_delete_fail_text'            =>  'Serviceenheten kasserades inte!',
	                                        'service_body_change_fader_fail_no_data_text'           =>  'Serviceenheten ändrades inte, Eftersom du inte fyllt i någon data!',
	                                        'service_body_change_fader_fail_cant_find_sb_text'      =>  'Serviceenheten ändrades inte, Eftersom serviceenheten saknas',
	                                        'service_body_change_fader_fail_cant_update_text'       =>  'Serviceenheten ändrades inte, Eftersom serviceenheten inte uppdaterades',
	                                        'service_body_change_fader_fail_bad_hierarchy'          =>  'Serviceenheten ändrades inte, För föräldraserviceenheten är under denna Serviceenhet, och kan inte användas',
	                                        'service_body_cancel_button'                            =>  'återställ',
	                                        'service_body_editor_type_label'                        =>  'Serviceenhet typ:',
	                                        'service_body_editor_type_c_comdef_service_body__GRP__' =>  'Grupp',
	                                        'service_body_editor_type_c_comdef_service_body__ASC__' =>  'Distrikt',
	                                        'service_body_editor_type_c_comdef_service_body__RSC__' =>  'Region',
	                                        'service_body_editor_type_c_comdef_service_body__WSC__' =>  'World Service',
	                                        'service_body_editor_type_c_comdef_service_body__MAS__' =>  'Metro',
	                                        'service_body_editor_type_c_comdef_service_body__ZFM__' =>  'Zon',
	                                        'service_body_editor_uri_naws_format_text'              =>  'Ladda ner mötesinfo från denna serviceenhet i en NAWS kompatibel fil ',
	                                        'edit_Meeting_meeting_id'                               =>  'Mötes ID:',
                                            'service_body_editor_create_new_sb_option'              =>  'Skapa en ny serviceenhet',
	                                        'service_body_editor_screen_world_cc_label'             =>  'NAWS kod:',
	                                        'service_body_editor_screen_world_cc_prompt'            =>  'Fyll i NAWS kod',
											'user_editor_disclosure'                                =>  'Användar Administration',
											'user_editor_create_new_user_option'                    =>  'Skapa en användare',
											'user_editor_screen_sb_id_label'                        =>  'ID:',
	                                        'user_editor_account_login_label'                       =>  'Användarnamn:',
											'user_editor_login_default_text'                        =>  'Fyll i användarnamn',
	                                        'user_editor_account_type_label'                        =>  'Användaren är en:',
	                                        'user_editor_account_type_1'                            =>  'Server Administratör',
	                                        'user_editor_account_type_2'                            =>  'Serviceenhets Administratör',
	                                        'user_editor_account_type_3'                            =>  'Serviceenhet Redaktör',
	                                        'user_editor_account_type_5'                            =>  'Serviceenhet observatör',
	                                        'user_editor_account_type_4'                            =>  'Inaktivera användare',
											'user_editor_account_name_label'                        =>  'Användarnamn:',
											'user_editor_name_default_text'                         =>  'Fyll i användarnamn',
											'user_editor_account_description_label'                 =>  'Beskrivning:',
											'user_editor_description_default_text'                  =>  'Fyll i beskrivning för användare',
											'user_editor_account_email_label'                       =>  'E-post:',
											'user_editor_email_default_text'                        =>  'Fyll i E-post för användaren:',
	                                        'user_change_fader_success_text'                        =>  'Användaren ändrad',
	                                        'user_change_fader_fail_text'                           =>  'Användaren ändrades inte!',
	                                        'user_change_fader_create_success_text'                 =>  'Användaren skapades',
	                                        'user_change_fader_create_fail_text'                    =>  'Användaren skapades inte!',
	                                        'user_change_fader_delete_success_text'                 =>  'Användaren kasserad',
	                                        'user_change_fader_delete_fail_text'                    =>  'Användaren kasserades inte!',
	                                        'user_save_button'                                      =>  'Spara ändringar för användaren',
	                                        'user_create_button'                                    =>  'Skapa ny användare',
	                                        'user_cancel_button'                                    =>  'återställ',
	                                        'user_delete_button'                                    =>  'Kassera denna användare',
	                                        'user_delete_perm_checkbox'                             =>  'Kassera denna användare permanent',
	                                        'user_password_label'                                   =>  'ändra lösenord till:',
	                                        'user_new_password_label'                               =>  'lösenord:',
	                                        'user_password_default_text'                            =>  'Låt denna vara såvida du inte önskar ändra lösenordet',
	                                        'user_new_password_default_text'                        =>  'Ange lösenord för den nya användaren!',
	                                        'user_dirty_confirm_text'                               =>  'Du har gjort ändringar för användaren, vill du lämna och bli av med ändringarna?',
	                                        'user_delete_button_confirm'                            =>  'Vill du kassera användaren?',
	                                        'user_delete_button_confirm_perm'                       =>  'Användaren kasseras nu permanent!',
	                                        'user_change_fader_create_success_text'                 =>  'Användare skapad',
	                                        'user_create_password_alert_text'                       =>  'Ange ett lösenord',
	                                        'user_change_fader_create_fail_text'                    =>  'Användaren skapades inte!',
	                                        'user_change_fader_delete_success_text'                 =>  'Användare kasserad',
	                                        'user_change_fader_delete_fail_text'                    =>  'Användaren kasserades inte!',
	                                        'user_change_fader_fail_no_data_text'                   =>  'Användaren ändrades inte, Ingen data angavs',
	                                        'user_change_fader_fail_cant_find_sb_text'              =>  'Användaren ändrades inte, Användaren finns inte',
	                                        'user_change_fader_fail_cant_update_text'               =>  'Användaren ändrades inte, Användaren uppdaterades inte',
											'format_editor_disclosure'                              =>  'MötesFormat Administration',
	                                        'format_change_fader_change_success_text'               =>  'Mötesformatet ändrades',
	                                        'format_change_fader_change_fail_text'                  =>  'Mötesformatet ändrades inte!',
	                                        'format_change_fader_create_success_text'               =>  'Mötesformat skapat',
	                                        'format_change_fader_create_fail_text'                  =>  'Mötesformatet skapades inte!',
	                                        'format_change_fader_delete_success_text'               =>  'Mötesformatet kasserades',
	                                        'format_change_fader_delete_fail_text'                  =>  'Mötesformatet kasserades inte!',
	                                        'format_change_fader_fail_no_data_text'                 =>  'Mötesformatet ändrades inte, Inge data angivet',
	                                        'format_change_fader_fail_cant_find_sb_text'            =>  'Mötesformatet ändrades inte, Mötesformatet hittades inte',
	                                        'format_change_fader_fail_cant_update_text'             =>  'Mötesformatet ändrades inte, För mötesformatet uppdaterades inte',
	                                        'format_editor_name_default_text'                       =>  'Ange en kort beskrivning',
	                                        'format_editor_description_default_text'                =>  'Ange en utförlig beskrivning',
	                                        'format_editor_create_format_button_text'               =>  'skapa nytt mötesformat',
	                                        'format_editor_cancel_create_format_button_text'        =>  'ångra',
	                                        'format_editor_create_this_format_button_text'          =>  'Skapa mötesformat',
	                                        'format_editor_change_format_button_text'               =>  'ändra mötesformat',
	                                        'format_editor_delete_format_button_text'               =>  'Kassera mötesformat',
	                                        'format_editor_reset_format_button_text'                =>  'återställ',
	                                        'format_editor_create_format_button_text'               =>  'Skapa nytt mötesformat',
	                                        'need_refresh_message_fader_text'                       =>  'Du bör uppdatera sidan innan du använder denna sektion',
	                                        'need_refresh_message_alert_text'                       =>  'Eftersom du gjort ändringar i serviceenhets administrationen, användar administrationen eller mötesformat administrationen, är det möjligt att information i denna sektion är felaktig, Så logga in och ut så blir allt fint',
	                                        'format_editor_delete_button_confirm'                   =>  'är du säker på att du vill kassera detta mötesformat?',
	                                        'format_editor_delete_button_confirm_perm'              =>  'Mötesformatet kommer kasseras permanent!',
	                                        'min_password_length_string'                            =>  'Lösenordet måste vara minst %d tecken långt!',
	                                        'AJAX_Auth_Failure'                                     =>  'Tillträde nekas. Det kan vara problem med serverinställningar.',
	                                        'Observer_Link_Text'                                    =>  'Sök möte',
	                                    );
?>