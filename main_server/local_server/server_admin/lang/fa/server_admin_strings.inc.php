<?php
/***********************************************************************/
/** \file   server_admin_strings.inc.php
 * \brief  The strings displayed in the server administration console (Farsi)
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

$comdef_server_admin_strings = array('server_admin_disclosure' => 'Server Administration',
    'server_admin_naws_spreadsheet_label' => 'Updated World Committee Codes Spreadsheet',
    'update_world_ids_button_text' => 'Update World Committee Codes',
    'update_world_ids_from_spreadsheet_dropdown_text' => 'Update World Committee Codes (Group IDs from NAWS) from NAWS Spreadsheet',
    'server_admin_error_no_world_ids_updated' => 'No World IDs were updated. This could be because your user does not have permission to update the submitted meetings.',
    'server_admin_error_required_spreadsheet_column' => 'Required column does not exist in the spreadsheet: ',
    'server_admin_error_bmlt_id_not_integer' => 'The provided bmlt_id is not an integer: ',
    'server_admin_error_could_not_create_reader' => 'Could not create reader for file: ',
    'server_admin_error_no_files_uploaded' => 'No files were uploaded.',
    'server_admin_error_service_bodies_already_exist' => 'Service bodies with the following World IDs already exist: ',
    'server_admin_error_meetings_already_exist' => 'Meetings with the following World IDs already exist: ',
    'server_admin_ui_num_meetings_updated' => 'Number of meetings updated: ',
    'server_admin_ui_num_meetings_not_updated' => 'Number of meetings that did not need updating: ',
    'server_admin_ui_warning' => 'WARNING',
    'server_admin_ui_errors' => 'Error(s)',
    'server_admin_ui_deleted_meetings_marked' => 'Number of deleted meetings marked so that they won\'t appear in future NAWS exports: ',
    'server_admin_ui_problem_meetings' => 'meetings were found in the spreadsheet that couldn\'t be updated. Problem meeting IDs: ',
    'server_admin_ui_service_bodies_created' => 'Service bodies created: ',
    'server_admin_ui_meetings_created' => 'Meetings created: ',
    'server_admin_ui_users_created' => 'Users created: ',
    'server_admin_ui_refresh_ui_text' => 'Sign out and then sign in again to see the new service bodies, users, and meetings.',
    'import_service_bodies_and_meetings_button_text' => 'Import Service Bodies and Meetings',
    'import_service_bodies_and_meetings_dropdown_text' => 'Import Service Bodies and Meetings from NAWS Export',
    'server_admin_naws_import_spreadsheet_label' => 'NAWS Import Spreadsheet:',
    'server_admin_naws_import_initially_publish' => 'Initialize imported meetings to \'published\': ',
    'server_admin_naws_import_explanation' => 'Uncheck the box to initialize imported meetings to \'unpublished\'. (This is useful if many of the new meetings will need to be edited or deleted, and you don\'t want them showing up in the meantime.)',
    'account_disclosure' => 'My Account',
    'account_name_label' => 'My Account Name:',
    'account_login_label' => 'My Login:',
    'account_type_label' => 'I Am A:',
    'account_type_1' => 'Server Administrator',
    'account_type_2' => 'Service Body Administrator',
    'ServerMapsURL' => 'https://maps.googleapis.com/maps/api/geocode/xml?address=##SEARCH_STRING##&sensor=false',
    'account_type_4' => 'Pathetic Luser Who Shouldn\'t Even Have Access to This Page -The Author of the Software Pooched it BAD!',
    'account_type_5' => 'Service Body Observer',
    'change_password_label' => 'Change My Password To:',
    'change_password_default_text' => 'Leave This Alone If You Don\'t Want To Change Your Password',
    'account_email_label' => 'My Email Address:',
    'email_address_default_text' => 'Enter An Email Address',
    'account_description_label' => 'My Description:',
    'account_description_default_text' => 'Enter A Description',
    'account_change_button_text' => 'Change My Account Settings',
    'account_change_fader_success_text' => 'The Account Information Was Successfully Changed',
    'account_change_fader_failure_text' => 'The Account Information Was Not Changed',
    'meeting_editor_disclosure' => 'Meeting Editor',
    'meeting_editor_already_editing_confirm' => 'You are currently editing another meeting. Do you want to lose all changes in that meeting?',
    'meeting_change_fader_success_text' => 'The Meeting Was Successfully Changed',
    'meeting_change_fader_failure_text' => 'The Meeting Was Not Changed',
    'meeting_change_fader_success_delete_text' => 'The Meeting Was Successfully Deleted',
    'meeting_change_fader_fail_delete_text' => 'The Meeting Was Not Deleted',
    'meeting_change_fader_success_add_text' => 'The New Meeting Was Successfully Added',
    'meeting_change_fader_fail_add_text' => 'The New Meeting Was Not Added',
    'meeting_text_input_label' => 'Search For Text:',
    'access_service_body_label' => 'I Have Access to:',
    'meeting_text_input_default_text' => 'Enter Some Search Text',
    'meeting_text_location_label' => 'This is a Location or PostCode',
    'meeting_search_weekdays_label' => 'Search For Selected Weekdays:',
    'meeting_search_weekdays_names' => array('All', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
    'meeting_search_service_bodies_label' => 'Search In Selected Service Bodies:',
    'meeting_search_start_time_label' => 'Search By Meeting Start Time:',
    'meeting_search_start_time_all_label' => 'Any Time',
    'meeting_search_start_time_morn_label' => 'Morning',
    'meeting_search_start_time_aft_label' => 'Afternoon',
    'meeting_search_start_time_eve_label' => 'Evening',
    'meeting_search_no_results_text' => 'No Meetings Found',
    'meeting_editor_tab_specifier_text' => 'Search For Meetings',
    'meeting_editor_tab_editor_text' => 'Edit Or Create Meetings',
    'meeting_editor_create_new_text' => 'Create A New Meeting',
    'meeting_editor_location_map_link' => 'Location Map',
    'meeting_editor_screen_match_ll_button' => 'Set Longitude and Latitude to Address',
    'meeting_editor_screen_default_text_prompt' => 'Enter Some Text or a Number',
    'meeting_is_published' => 'Meeting is Published',
    'meeting_unpublished_note' => 'Note: Unpublishing a meeting indicates a temporary closure. If this meeting has closed permanently, please delete it.',
    'meeting_editor_screen_meeting_name_label' => 'Meeting Name:',
    'meeting_editor_screen_meeting_name_prompt' => 'Enter A Meeting Name',
    'meeting_editor_screen_meeting_weekday_label' => 'Weekday:',
    'meeting_editor_screen_meeting_start_label' => 'Meeting Start Time:',
    'meeting_editor_screen_meeting_time_zone_label' => 'Meeting Time Zone:',
    'meeting_editor_screen_meeting_am_label' => 'AM',
    'meeting_editor_screen_meeting_pm_label' => 'PM',
    'meeting_editor_screen_meeting_noon_label' => 'Noon',
    'meeting_editor_screen_meeting_midnight_label' => 'Midnight',
    'meeting_editor_screen_meeting_duration_label' => 'Duration:',
    'meeting_editor_screen_meeting_oe_label' => 'Open-Ended',
    'meeting_editor_screen_meeting_cc_label' => 'World Committee Code:',
    'meeting_editor_screen_meeting_cc_advice' => 'Normally leave this field alone (see documentation).',  // TODO: translate
    'meeting_editor_screen_meeting_contact_label' => 'Meeting Email Contact:',
    'meeting_editor_screen_meeting_contact_prompt' => 'Enter An Email for A Contact Specific Only to This Meeting',
    'meeting_editor_screen_meeting_sb_label' => 'Service Body:',
    'meeting_editor_screen_meeting_sb_default_value' => 'No Service Body Selected',
    'meeting_editor_screen_meeting_longitude_label' => 'Longitude:',
    'meeting_editor_screen_meeting_longitude_prompt' => 'Enter A Longitude',
    'meeting_editor_screen_meeting_latitude_label' => 'Latitude:',
    'meeting_editor_screen_meeting_latitude_prompt' => 'Enter A Latitude',
    'meeting_editor_screen_meeting_location_label' => 'Location:',
    'meeting_editor_screen_meeting_location_prompt' => 'Enter A Location Name (Like a Building Name)',
    'meeting_editor_screen_meeting_info_label' => 'Extra Info:',
    'meeting_editor_screen_meeting_info_prompt' => 'Enter Any Additional Location Information',
    'meeting_editor_screen_meeting_street_label' => 'Street Address:',
    'meeting_editor_screen_meeting_street_prompt' => 'Enter A Street Address',
    'meeting_editor_screen_meeting_neighborhood_label' => 'Neighborhood:',
    'meeting_editor_screen_meeting_neighborhood_prompt' => 'Enter A Neighborhood (Not Borough or City Subsection)',
    'meeting_editor_screen_meeting_borough_label' => 'Borough/City Subsection:',
    'meeting_editor_screen_meeting_borough_prompt' => 'Enter A Borough or City Subsection (Not Neighborhood)',
    'meeting_editor_screen_meeting_city_label' => 'City/Town:',
    'meeting_editor_screen_meeting_city_prompt' => 'Enter A City or Town Name (Not County or Borough)',
    'meeting_editor_screen_meeting_county_label' => 'County/Sub-Province:',
    'meeting_editor_screen_meeting_county_prompt' => 'Enter A County or Sub-Province Name',
    'meeting_editor_screen_meeting_state_label' => 'State/Province:',
    'meeting_editor_screen_meeting_state_prompt' => 'Enter A State or Province Name',
    'meeting_editor_screen_meeting_zip_label' => 'Zip Code/Postal Code:',
    'meeting_editor_screen_meeting_zip_prompt' => 'Enter A Postal Code',
    'meeting_editor_screen_meeting_nation_label' => 'Nation:',
    'meeting_editor_screen_meeting_nation_prompt' => 'Enter The Nation Name',
    'meeting_editor_screen_meeting_comments_label' => 'Comments:',
    'meeting_editor_screen_meeting_train_lines_label' => 'Train Lines:',
    'meeting_editor_screen_meeting_bus_lines_label' => 'Bus Lines:',
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
    'meeting_editor_screen_meeting_contact_name_1_label' => 'Contact 1 Name:',
    'meeting_editor_screen_meeting_contact_email_1_label' => 'Contact 1 Email:',
    'meeting_editor_screen_meeting_contact_phone_1_label' => 'Contact 1 Phone:',
    'meeting_editor_screen_meeting_contact_name_2_label' => 'Contact 2 Name:',
    'meeting_editor_screen_meeting_contact_email_2_label' => 'Contact 2 Email:',
    'meeting_editor_screen_meeting_contact_phone_2_label' => 'Contact 2 Phone:',
    'meeting_editor_screen_meeting_publish_search_prompt' => 'Look For:',
    'meeting_editor_screen_meeting_publish_search_pub' => 'Published Meetings Only',
    'meeting_editor_screen_meeting_publish_search_unpub' => 'Unpublished Meetings Only',
    'meeting_editor_screen_meeting_visibility_advice' => 'This is never displayed in normal meeting searches.',
    'meeting_editor_screen_meeting_publish_search_all' => 'All Meetings',
    'meeting_editor_screen_meeting_create_button' => 'Create A New Meeting',
    'meeting_editor_screen_delete_button' => 'Delete This Meeting',
    'meeting_editor_screen_delete_button_confirm' => 'Are you sure that you want to delete this meeting?',
    'meeting_editor_screen_cancel_button' => 'Cancel',
    'logout' => 'Sign Out',
    'meeting_editor_screen_cancel_confirm' => 'Are you sure that you want to cancel editing this meeting, and lose all changes?',
    'meeting_lookup_failed' => 'The address lookup failed.',
    'meeting_lookup_failed_not_enough_address_info' => 'There is not enough valid address information to do a lookup.',
    'meeting_create_button_name' => 'Save This As A New Meeting',
    'meeting_saved_as_a_copy' => 'Save This Meeting As A Copy (Creates A New Meeting)',
    'meeting_save_buttonName' => 'Save the Changes to This Meeting',
    'meeting_editor_tab_bar_basic_tab_text' => 'Basic',
    'meeting_editor_tab_bar_location_tab_text' => 'Location',
    'meeting_editor_tab_bar_format_tab_text' => 'Format',
    'meeting_editor_tab_bar_other_tab_text' => 'Other',
    'meeting_editor_tab_bar_history_tab_text' => 'History',
    'meeting_editor_result_count_format' => '%d Meetings Found',
    'meeting_id_label' => 'Meeting ID:',
    'meeting_editor_default_zoom' => '13',
    'meeting_editor_default_weekday' => '2',
    'meeting_editor_default_start_time' => '20:30:00',
    'login_banner' => 'Basic Meeting List Toolbox',
    'login_underbanner' => 'Root Server Administration Console',
    'login' => 'Login ID',
    'password' => 'Password',
    'button' => 'Log In',
    'cookie' => 'You must enable cookies in order to administer this server.',
    'noscript' => 'You cannot administer this site without JavaScript.',
    'title' => 'Please log in to administer the server.',
    'edit_Meeting_object_not_found' => 'ERROR: The meeting was not found.',
    'edit_Meeting_object_not_changed' => 'ERROR: The meeting was not changed.',
    'edit_Meeting_auth_failure' => 'You are not authorized to edit this meeting.',
    'not_auth_1' => 'NOT AUTHORIZED',
    'not_auth_2' => 'You are not authorized to administer this server.',
    'not_auth_3' => 'There was a problem with the user name or password that you entered.',
    'email_format_bad' => 'The email address that you entered was not formatted correctly.',
    'history_header_format' => '<div class="bmlt_admin_meeting_history_list_item_line_div history_item_header_div"><span class="bmlt_admin_history_list_header_date_span">%s</span><span class="bmlt_admin_history_list_header_user_span">by %s</span></div>',
    'history_no_history_available_text' => '<h1 class="bmlt_admin_no_history_available_h1">No History Available For This Meeting</h1>',
    'service_body_editor_disclosure' => 'Service Body Administration',
    'service_body_change_fader_success_text' => 'The Service Body Was Successfully Changed',
    'service_body_change_fader_fail_text' => 'The Service Body Change Failed',
    'service_body_editor_screen_sb_id_label' => 'ID:',
    'service_body_editor_screen_sb_name_label' => 'Name:',
    'service_body_name_default_prompt_text' => 'Enter the Name of This Service Body',
    'service_body_parent_popup_label' => 'Service Body Parent:',
    'service_body_parent_popup_no_parent_option' => 'No Parent (Top-Level)',
    'service_body_editor_screen_sb_admin_user_label' => 'Primary Admin:',
    'service_body_editor_screen_sb_admin_description_label' => 'Description:',
    'service_body_description_default_prompt_text' => 'Enter A Description of This Service Body',
    'service_body_editor_screen_sb_admin_email_label' => 'Contact Email:',
    'service_body_email_default_prompt_text' => 'Enter A Contact Email Address for This Service Body',
    'service_body_editor_screen_sb_admin_uri_label' => 'Web Site URL:',
    'service_body_uri_default_prompt_text' => 'Enter A Web Site URL for This Service Body',
    'service_body_editor_screen_sb_admin_full_editor_label' => 'Full Meeting List Editors:',
    'service_body_editor_screen_sb_admin_full_editor_desc' => 'These Users Can Edit Any Meetings In This Service Body.',
    'service_body_editor_screen_sb_admin_editor_label' => 'Basic Meeting List Editors:',
    'service_body_editor_screen_sb_admin_editor_desc' => 'These Users Can Edit Any Meetings In This Service Body, But Only If They Are Unpublished.',
    'service_body_editor_screen_sb_admin_observer_label' => 'Observers:',
    'service_body_editor_screen_sb_admin_observer_desc' => 'These Users Can See Hidden Info (Like Email Addresses), But Cannot Edit Anything.',
    'service_body_dirty_confirm_text' => 'You have made changes to this Service Body. Do you want to lose your changes?',
    'service_body_save_button' => 'Save These Service Body Changes',
    'service_body_create_button' => 'Create This Service Body',
    'service_body_delete_button' => 'Delete This Service Body',
    'service_body_delete_perm_checkbox' => 'Delete This Service Body Permanently',
    'service_body_delete_button_confirm' => 'Are you sure that you want to delete this Service body? Make sure that all meetings are either removed or transferred to another service body before performing this function.',
    'service_body_delete_button_confirm_perm' => 'This Service body will be deleted permanently!',
    'service_body_change_fader_create_success_text' => 'The Service Body Was Successfully Created',
    'service_body_change_fader_create_fail_text' => 'The Service Body Create Failed',
    'service_body_change_fader_delete_success_text' => 'The Service Body Was Successfully Deleted',
    'service_body_change_fader_delete_fail_text' => 'The Service Body Delete Failed',
    'service_body_change_fader_fail_no_data_text' => 'The Service Body Change Failed, Because There Was No Data Supplied',
    'service_body_change_fader_fail_cant_find_sb_text' => 'The Service Body Change Failed, Because The Service Body Was Not Found',
    'service_body_change_fader_fail_cant_update_text' => 'The Service Body Change Failed, Because The Service Body Was Not Updated',
    'service_body_change_fader_fail_bad_hierarchy' => 'The Service Body Change Failed, Because The Selected Owner Service Body Is Under This Service Body, And Cannot Be Used',
    'service_body_cancel_button' => 'Restore To Original',
    'service_body_editor_type_label' => 'Service Body Type:',
    'service_body_editor_type_c_comdef_service_body__GRP__' => 'Group',
    'service_body_editor_type_c_comdef_service_body__COP__' => 'Co-Op',
    'service_body_editor_type_c_comdef_service_body__ASC__' => 'Area Service Committee',
    'service_body_editor_type_c_comdef_service_body__RSC__' => 'Regional Service Conference',
    'service_body_editor_type_c_comdef_service_body__WSC__' => 'World Service Conference',
    'service_body_editor_type_c_comdef_service_body__MAS__' => 'Metro Area',
    'service_body_editor_type_c_comdef_service_body__ZFM__' => 'Zonal Forum',
    'service_body_editor_type_c_comdef_service_body__GSU__' => 'Group Service Unit',
    'service_body_editor_type_c_comdef_service_body__LSU__' => 'Local Service Unit',
    'service_body_editor_screen_helpline_label' => 'Helpline:',
    'service_body_editor_screen_helpline_prompt' => 'Enter The Helpline Telephone Number',
    'service_body_editor_uri_naws_format_text' => 'Get The Meetings For This Service Body As A NAWS-Compatible File',
    'edit_Meeting_meeting_id' => 'Meeting ID:',
    'service_body_editor_create_new_sb_option' => 'Create A New Service Body',
    'service_body_editor_screen_world_cc_label' => 'World Committee Code:',
    'service_body_editor_screen_world_cc_prompt' => 'Enter A World Committee Code',
    'user_editor_disclosure' => 'User Administration',
    'user_editor_create_new_user_option' => 'Create A New User',
    'user_editor_screen_sb_id_label' => 'ID:',
    'user_editor_account_login_label' => 'User Login:',
    'user_editor_login_default_text' => 'Enter the User Login',
    'user_editor_account_type_label' => 'User Is A:',
    'user_editor_user_owner_label' => 'Owned By: ',
    'user_editor_account_type_1' => 'Server Administrator',
    'user_editor_account_type_2' => 'Service Body Administrator',
    'user_editor_account_type_3' => 'Service Body Editor',
    'user_editor_account_type_5' => 'Service Body Observer',
    'user_editor_account_type_4' => 'Disabled User',
    'user_editor_account_name_label' => 'User Name:',
    'user_editor_name_default_text' => 'Enter the User Name',
    'user_editor_account_description_label' => 'Description:',
    'user_editor_description_default_text' => 'Enter the User Description',
    'user_editor_account_email_label' => 'Email:',
    'user_editor_email_default_text' => 'Enter the User Email',
    'user_change_fader_success_text' => 'The User Was Successfully Changed',
    'user_change_fader_fail_text' => 'The User Change Failed',
    'user_change_fader_create_success_text' => 'The User Was Successfully Created',
    'user_change_fader_create_fail_text' => 'The User Create Failed',
    'user_change_fader_create_fail_already_exists' => 'A Login For The User That You Are Trying To Create Already Exists.',
    'user_change_fader_delete_success_text' => 'The User Was Successfully Deleted',
    'user_change_fader_delete_fail_text' => 'The User Delete Failed',
    'user_save_button' => 'Save the Changes to This User',
    'user_create_button' => 'Create This New User',
    'user_cancel_button' => 'Restore To Original',
    'user_delete_button' => 'Delete This User',
    'user_delete_perm_checkbox' => 'Delete This User Permanently',
    'user_password_label' => 'Change Password To:',
    'user_new_password_label' => 'Set Password To:',
    'user_password_default_text' => 'Leave This Alone, Unless You Want To Change The Password',
    'user_new_password_default_text' => 'You Must Enter A Password For A new User',
    'user_dirty_confirm_text' => 'You have made changes to this User. Do you want to lose your changes?',
    'user_delete_button_confirm' => 'Are you sure that you want to delete this user?',
    'user_delete_button_confirm_perm' => 'This user will be deleted permanently!',
    'user_create_password_alert_text' => 'New users must have a password. You have not supplied a password for this user.',
    'user_change_fader_fail_no_data_text' => 'The User Change Failed, Because There Was No Data Supplied',
    'user_change_fader_fail_cant_find_sb_text' => 'The User Change Failed, Because The User Was Not Found',
    'user_change_fader_fail_cant_update_text' => 'The User Change Failed, Because The User Was Not Updated',
    'format_editor_disclosure' => 'Format Administration',
    'format_change_fader_change_success_text' => 'The Format Was Successfully Changed',
    'format_change_fader_change_fail_text' => 'The Format Change Failed',
    'format_change_fader_create_success_text' => 'The Format Was Successfully Created',
    'format_change_fader_create_fail_text' => 'The Format Create Failed',
    'format_change_fader_delete_success_text' => 'The Format Was Successfully Deleted',
    'format_change_fader_delete_fail_text' => 'The Format Delete Failed',
    'format_change_fader_fail_no_data_text' => 'The Format Change Failed, Because There Was No Data Supplied',
    'format_change_fader_fail_cant_find_sb_text' => 'The Format Change Failed, Because The Format Was Not Found',
    'format_change_fader_fail_cant_update_text' => 'The Format Change Failed, Because The Format Was Not Updated',
    'format_editor_name_default_text' => 'Enter A Very Short Description',
    'format_editor_description_default_text' => 'Enter A More Detailed Description',
    'format_editor_create_format_button_text' => 'Create New Format',
    'format_editor_cancel_create_format_button_text' => 'Cancel',
    'format_editor_create_this_format_button_text' => 'Create This Format',
    'format_editor_change_format_button_text' => 'Change This Format',
    'format_editor_delete_format_button_text' => 'Delete This Format',
    'format_editor_reset_format_button_text' => 'Restore To Original',
    'need_refresh_message_fader_text' => 'You Should Refresh This Page Before Using This Section',
    'need_refresh_message_alert_text' => 'Because you have made changes in the Server Administration, Service Body Administration, User Administration, or Format Administration, the information displayed in this section may no longer be accurate, so the page needs to be refreshed. The easiest way to do this, is to Sign Out, then Log In again.',
    'format_editor_delete_button_confirm' => 'Are you sure that you want to delete this format?',
    'format_editor_delete_button_confirm_perm' => 'This format will be deleted permanently!',
    'format_editor_missing_key' => 'This format should have an entry for every language (at least a key).',   // TODO: translate
    'format_editor_reserved_key' => 'This key is reserved for a venue type format - please use something different.',       // TODO: translate
    'min_password_length_string' => 'The password is too short! It must be at least %d characters long!',
    'AJAX_Auth_Failure' => 'Authorization failed for this operation. There may be a problem with the server configuration.',
    'Maps_API_Key_Warning' => 'There is a problem with the Google Maps API Key.',
    'Maps_API_Key_Not_Set' => 'The Google Maps API key is not set.',
    'Observer_Link_Text' => 'Meeting Browser',
    'Data_Transfer_Link_Text' => 'Import Meeting Data (WARNING: Replaces Current Data!)',
    'MapsURL' => 'https://maps.google.com/maps?q=##LAT##,##LONG##+(##NAME##)&amp;ll=##LAT##,##LONG##',
    'hidden_value' => 'Cannot Display Data -Unauthorized',
    'Value_Prompts' => array(
        'id_bigint' => 'Meeting ID',
        'worldid_mixed' => 'World Services ID',
        'service_body' => 'Service Body',
        'service_bodies' => 'Service Bodies',
        'weekdays' => 'Weekdays',
        'weekday' => 'Meeting Gathers Every',
        'start_time' => 'Meeting Starts at',
        'duration_time' => 'Meeting Lasts',
        'location' => 'Location',
        'duration_time_hour' => 'Hour',
        'duration_time_hours' => 'Hours',
        'duration_time_minute' => 'Minute',
        'duration_time_minutes' => 'Minutes',
        'lang_enum' => 'Language',
        'formats' => 'Formats',
        'distance' => 'Distance from Center',
        'generic' => 'NA Meeting',
        'close_title' => 'Close This Meeting Detail Window',
        'close_text' => 'Close Window',
        'map_alt' => 'Map to Meeting',
        'map' => 'Follow This Link for A Map',
        'title_checkbox_unpub_meeting' => 'This meeting is unpublished. It cannot be seen by regular searches.',
        'title_checkbox_copy_meeting' => 'This meeting is a duplicate of another meeting. It is also unpublished. It cannot be seen by regular searches.'
    ),
    'world_format_codes_prompt' => 'NAWS Format:',
    'world_format_codes' => array(
        '' => 'None',
        'OPEN' => 'Open',
        'CLOSED' => 'Closed',
        'WCHR' => 'Wheelchair-Accessible',
        'BEG' => 'Beginner/Newcomer',
        'BT' => 'Basic Text',
        'CAN' => 'Candlelight',
        'CPT' => '12 Concepts',
        'CW' => 'Children Welcome',
        'DISC' => 'Discussion/Participation',
        'GL' => 'Gay/Lesbian',
        'IP' => 'IP Study',
        'IW' => 'It Works Study',
        'JFT' => 'Just For Today Study',
        'LC' => 'Living Clean',
        'LIT' => 'Literature Study',
        'M' => 'Men',
        'MED' => 'Meditation',
        'NS' => 'Non-Smoking',
        'QA' => 'Questions & Answers',
        'RA' => 'Restricted Access',
        'S-D' => 'Speaker/Discussion',
        'SMOK' => 'Smoking',
        'SPK' => 'Speaker',
        'STEP' => 'Step',
        'SWG' => 'Step Working Guide Study',
        'TOP' => 'Topic',
        'TRAD' => 'Tradition',
        'VAR' => 'Format Varies',
        'W' => 'Women',
        'Y' => 'Young People',
        'LANG' => 'Alternate Language',
        'GP' => 'Guiding Principles',
        'NC' => 'No Children',
        'CH' => 'Closed Holidays', // TODO translate
        'VM' => 'Virtual', // TODO translate
        'HYBR' => 'Virtual and In-Person', // TODO translate
        'TC' => 'Temporarily Closed Facility' // TODO translate
    ),
    'format_type_prompt' => 'Format Type:',
    'format_type_codes' => array(
        '' => 'None',
        'FC1' => 'Meeting Format (Speaker, Book Study, etc.)',
        'FC2' => 'Location Code (Wheelchair Accessible, Limited Parking, etc.)',
        'FC3' => 'Common Needs and Restrictions (Mens Meeting, LGTBQ, No Children, etc.)',
        'O' => 'Attendance by non-addicts (Open, Closed)',
        'LANG' => 'Language',
        'ALERT' => 'Format should be especially prominent (Clean requirement, etc.)',
    ),

    'cookie_monster' => 'This site uses a cookie to store your preferred language.',
    'main_prompts' => array(
        'id_bigint' => 'ID',
        'worldid_mixed' => 'World ID',
        'shared_group_id_bigint' => 'Unused',
        'service_body_bigint' => 'Service Body ID',
        'weekday_tinyint' => 'Weekday',
        'venue_type' => 'Venue Type',
        'start_time' => 'Start Time',
        'duration_time' => 'Duration',
        'time_zone' => 'Time Zone',
        'formats' => 'Formats',
        'lang_enum' => 'Language',
        'longitude' => 'Longitude',
        'latitude' => 'Latitude',
        'published' => 'Published',
        'email_contact' => 'Email Contact',
    ),
    'check_all' => 'Check All',
    'uncheck_all' => 'Uncheck All',
    'automatically_calculated_on_save' => 'Automatically calculated on save.'
);

$email_contact_strings = array(
    'meeting_contact_form_subject_format' => "[MEETING LIST CONTACT] %s",
    'meeting_contact_message_format' => "%s\n--\nThis message concerns the meeting named \"%s\", which meets at %s, on %s.\nBrowser Link: %s\nEdit Link: %s\nIt was sent directly from the meeting list web server, and the sender is not aware of your email address.\nPlease be aware that replying will expose your email address.\nIf you use \"Reply All\", and there are multiple email recipients, you may expose other people's email addresses.\nPlease respect people's privacy and anonymity; including the original sender of this message."
);

$change_type_strings = array(
    '__THE_MEETING_WAS_CHANGED__' => 'The meeting was changed.',
    '__THE_MEETING_WAS_CREATED__' => 'The meeting was created.',
    '__THE_MEETING_WAS_DELETED__' => 'The meeting was deleted.',
    '__THE_MEETING_WAS_ROLLED_BACK__' => 'The meeting was rolled back to a previous version.',

    '__THE_FORMAT_WAS_CHANGED__' => 'The format was changed.',
    '__THE_FORMAT_WAS_CREATED__' => 'The format was created.',
    '__THE_FORMAT_WAS_DELETED__' => 'The format was deleted.',
    '__THE_FORMAT_WAS_ROLLED_BACK__' => 'The format was rolled back to a previous version.',

    '__THE_SERVICE_BODY_WAS_CHANGED__' => 'The service body was changed.',
    '__THE_SERVICE_BODY_WAS_CREATED__' => 'The service body was created.',
    '__THE_SERVICE_BODY_WAS_DELETED__' => 'The service body was deleted.',
    '__THE_SERVICE_BODY_WAS_ROLLED_BACK__' => 'The service body was rolled back to a previous version.',

    '__THE_USER_WAS_CHANGED__' => 'The user was changed.',
    '__THE_USER_WAS_CREATED__' => 'The user was created.',
    '__THE_USER_WAS_DELETED__' => 'The user was deleted.',
    '__THE_USER_WAS_ROLLED_BACK__' => 'The user was rolled back to a previous version.',

    '__BY__' => 'by',
    '__FOR__' => 'for'
);

$detailed_change_strings = array(
    'was_changed_from' => 'was changed from',
    'to' => 'to',
    'was_changed' => 'was changed',
    'was_added_as' => 'was added as',
    'was_deleted' => 'was deleted',
    'was_published' => 'The meeting was published',
    'was_unpublished' => 'The meeting was unpublished',
    'formats_prompt' => 'The meeting format',
    'duration_time' => 'The meeting duration',
    'start_time' => 'The meeting start time',
    'longitude' => 'The meeting longitude',
    'latitude' => 'The meeting latitude',
    'sb_prompt' => 'The meeting changed its Service Body from',
    'id_bigint' => 'The meeting ID',
    'lang_enum' => 'The meeting language',
    'worldid_mixed' => 'The World Committee Code',
    'weekday_tinyint' => 'The day of the week on which the meeting gathers',
    'non_existent_service_body' => 'Service Body No Longer Exists',
);

defined('_END_CHANGE_REPORT') or define('_END_CHANGE_REPORT', '.');
