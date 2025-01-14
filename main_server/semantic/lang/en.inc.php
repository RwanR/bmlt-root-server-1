<?php
/**
    This file is part of the Basic Meeting List Toolbox (BMLT).

    Find out more at: https://bmlt.app

    BMLT is free software: you can redistribute it and/or modify
    it under the terms of the MIT License.

    BMLT is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    MIT License for more details.

    You should have received a copy of the MIT License along with this code.
    If not, see <https://opensource.org/licenses/MIT>.
*/

$this->_localization = array (
                                'title_of_page'                         =>  'BMLT Semantic Workshop',
                                'main_blurb1'                           =>  'This workshop will help you to build a semantic URL or [[BMLT_SIMPLE(XXX)]] shortcode by interactively guiding you through the process of specifying the various options.',
                                'main_blurb2'                           =>  'You start by selecting the main result (a shortcode or direct response URL), then select what type of data you want the server to return.',
                                'main_blurb3'                           =>  'Depending on the choices made above, you will have a range of options available to you in generating the URL or shortcode.',
                                'main_blurb4'                           =>  'The section just below this will have the URL or shortcode available, and will be updated "live," as you make your choices.',
                                'javascript_noscript'                   =>  'You do not have JavaScript enabled. This site will not work without JavaScript.',
                                'submit_button_name'                    =>  'Submit',
                                'need_good_url'                         =>  'You must provide a valid Root Server URL in order for this to work.',
                                'need_higher_version'                   =>  'You have to have a BMLT Root Server Version 2.6.15 or higher to use this tool.',
                                'enter_url_label'                       =>  'Enter A Valid BMLT Root Server URL:',
                                'select_option_text_prompt'             =>  'This Will Be A',
                                'select_option_text_direct_url'         =>  'Direct Response URL',
                                'select_option_text_cms_simple'         =>  '[[BMLT_SIMPLE]] Shortcode',
                                'select_option_text_cms_table'          =>  '[[BMLT_TABLE]] Shortcode',
                                'root_server_prompt_text_item'          =>  'Enter A Root Server URL',
                                'value_prompt_text_item'                =>  'Enter A Text String',
                                'root_server_button_title'              =>  'Reload From Root Server',
                                'block_mode_checkbox_label'             =>  'Return results as block-mode HTML elements',
                                'used_formats_checkbox_label'           =>  'Get the Formats Used In the Results of this search',
                                'used_formats_only_checkbox_label'      =>  'Get just the formats (not the search results)',
                                'weekday_header_checkbox_label'         =>  'Separate the Results by Weekday',
                                'response_type_selector_prompt'         =>  'The Returned Data Will be',
                                'response_type_selector_type_csv'       =>  'CSV',
                                'response_type_selector_type_xml'       =>  'XML',
                                'response_type_selector_type_json'      =>  'JSON',
                                'response_type_selector_type_kml'       =>  'KML',
                                'response_type_selector_type_gpx'       =>  'GPX',
                                'response_type_selector_type_poi'       =>  'POI CSV',
                                'response_type_selector_type_simple_block'  =>  'Simple HTML (Block Elements)',
                                'response_type_selector_type_simple_table'  =>  'Simple HTML (Table)',
                                'switcher_type_selector_prompt'         =>  'We Want to',
                                'switcher_type_selector_results'        =>  'Get Meeting Search Results',
                                'switcher_type_selector_formats'        =>  'Get Formats',
                                'switcher_type_selector_sb'             =>  'Get Service Bodies',
                                'switcher_type_selector_changes'        =>  'Get Changes',
                                'switcher_type_selector_naws'           =>  'Get A NAWS Format Export',
                                'switcher_type_selector_field_keys'     =>  'Get A List of Available Field Keys',
                                'switcher_type_selector_field_values'   =>  'Get A List of Specific Field Values',
                                'switcher_type_selector_schema'         =>  'Get XML Schema',
                                'switcher_type_selector_server_langs'   =>  'Get Server Languages',
                                'switcher_type_selector_server_info'    =>  'Get Server Information',
                                'switcher_type_selector_coverage_area'  =>  'Get Geographic Coverage Area',
                                'coverage_area_legend'                  =>  'Geographic Coverage Area',
                                'schema_type_selector_legend'           =>  'Select An XML Schema Type',
                                'schema_type_selector_blurb1'           =>  'This will download <a href="http://www.w3schools.com/schema/">an XML Schema</a> document.',
                                'schema_type_selector_blurb2'           =>  'XML Schema is a semantic "contract" that defines what the XML response data will look like.',
                                'schema_type_selector_label'            =>  'Schema Type:',
                                'schema_type_selector_results'          =>  'Search Results',
                                'schema_type_selector_location_info'    =>  'Search Results Location Information',
                                'schema_type_selector_field_keys'       =>  'Available Field Keys',
                                'schema_type_selector_field_values'     =>  'Field Key Value Response',
                                'schema_type_selector_admin_permissions'    =>  'Administrative Permissions',
                                'schema_type_selector_change_response'  =>  'Administrative Change Response',
                                'schema_type_selector_deleted_meeting'  =>  'Administrative Deletion Response',
                                'schema_type_selector_field_templates'  =>  'Administrative Field Templates',
                                'schema_type_selector_changes'          =>  'Meeting Changes',
                                'schema_type_selector_formats'          =>  'Meeting Formats',
                                'schema_type_selector_get_user_info'    =>  'User Info',
                                'schema_type_selector_langs'            =>  'Languages',
                                'schema_type_selector_service_bodies'   =>  'Flat Service Bodies',
                                'schema_type_selector_hier_service_bodies'  =>  'Hierarchical Service Bodies',
                                'schema_type_selector_hier_server_info' =>  'Server Information',
                                'schema_type_selector_coverage_area'    =>  'Geographic Coverage Area',
                                'start_time_min_label'                  =>  'Meetings start after:',
                                'start_time_max_label'                  =>  'Meetings start before:',
                                'end_time_max_label'                    =>  'Meetings end before:',
                                'start_time_blurb'                      =>  'Format: HH:MM (Military time). 12:00 is Noon, 23:59 is Midnight. Leave blank to ignore.',
                                'start_time_legend'                     =>  'Meeting Start or End Time',
                                'duration_legend'                       =>  'Meeting Duration',
                                'duration_blurb'                        =>  'Format: HH:MM. Leave blank to ignore.',
                                'duration_min_label'                    =>  'Meetings last at least:',
                                'duration_max_label'                    =>  'Meetings last less than or equal to:',
                                'formats_lang_section_label'            =>  'Format Language:',
                                'formats_lang_section_option'           =>  'Server Language',
                                'weekday_section_legend'                =>  'Search for Meetings that Gather on Specific Weekdays',
                                'weekday_section_negative_legend'       =>  'Search for Meetings that DO NOT Gather on Specific Weekdays',
                                'venue_type_section_legend'             =>  'Search for Meetings that have Specific Venue Types',
                                'venue_type_section_negative_legend'    =>  'Search for Meetings that DO NOT have Specific Venue Types',
                                'format_section_legend'                 =>  'Search for Meetings that have Specific Formats',
                                'un_format_section_legend'              =>  'Search for Meetings that DO NOT Have Specific Formats',
                                'service_bodies_section_legend'         =>  'Search for Meetings that Belong to Certain Service Bodies',
                                'service_bodies_not_section_legend'     =>  'Search for Meetings that DO NOT Belong to Certain Service Bodies',
                                'text_search_section_legend'            =>  'Search for Specific Text',
                                'map_search_checkbox_label'             =>  'Use Geographic Coordinates',
                                'map_search_section_legend'             =>  'Search Using Longitude, Latitude and a Search Radius',
                                'specific_fields_legend'                =>  'Return Only Specific Fields',
                                'sort_fields_legend'                    =>  'Sort Response',
                                'sort_fields_no_sort_option'            =>  'Don\'t Sort',
                                'sort_fields_blurb'                     =>  'Select the order of the fields to be added to the sort.',
                                'specific_fields_blurb'                 =>  'The order of the response will be determined by the server.',
                                'weekday1'                              =>  'Sunday',
                                'weekday2'                              =>  'Monday',
                                'weekday3'                              =>  'Tuesday',
                                'weekday4'                              =>  'Wednesday',
                                'weekday5'                              =>  'Thursday',
                                'weekday6'                              =>  'Friday',
                                'weekday7'                              =>  'Saturday',
                                'startDay'                              =>  1,
                                'defaultPresetValueSelect'              =>  'Existing Values',
                                'defaultFieldSelect'                    =>  'Select A Field',
                                'defaultSBSelect'                       =>  'Select A Service Body',
                                'defaultChangeSBSelect'                 =>  'No Service Body Selected',
                                'defaultMeetingFieldSelect'             =>  'No Field Selected',
                                'keys_section_label'                    =>  'Search for a Specific Value of',
                                'text_search_label'                     =>  'Search for This Text:',
                                'values_section_label'                  =>  'The Value Will Be:',
                                'text_search_type_select_option_0'      =>  'Do a General "Casual" Text Search',
                                'text_search_type_select_option_1'      =>  'Search for all the words',
                                'text_search_type_select_option_2'      =>  'Search for the Exact Text',
                                'text_search_type_select_option_3'      =>  'This is a Location',
                                'text_search_radius_label'              =>  'Search Within a Radius of',
                                'text_search_radius_units_label'        =>  'Miles (or Km, Depending on the Root Server) -Negative Value Must be Integer, and is for Auto-Radius',
                                'text_map_radius_units_miles'           =>  'Miles',
                                'text_map_radius_units_km'              =>  'Kilometers',
                                'text_search_longitude_label'           =>  'Longitude:',
                                'text_search_latitude_label'            =>  'Latitude:',
                                'radius_note1'                          =>  'If you do not specify a radius, the location search will not work.',
                                'radius_note2'                          =>  'If you specify a negative radius, then it needs to be an integer, and will specify how many meetings to (roughly) find in an auto-radius search.',
                                'radius_note3'                          =>  'If you specify a negative value, the units won\'t really matter.',
                                'text_note1'                            =>  'If you do not enter any text, it will have no effect on the search.',
                                'all_unselected_note1'                  =>  'If none of these are selected, they will have no bearing at all on the search.',
                                'all_unselected_note2'                  =>  'If any are selected, then the search will require that the selected terms match.',
                                'all_unselected_note3'                  =>  'Any of these that are selected will prevent meetings that gather on the given weekday from being included in the search.',
                                'all_unselected_note_venue_type'        =>  'Any of these that are selected will prevent meetings that have the given venue type from being included in the search.',
                                'and_note'                              =>  'This is an "AND" search. Every one of these have to match in order to count.',
                                'configurable_operator_note'            =>  'When the "AND" comparison operator is selected, every one of these have to match in order to count. When "OR" comparison operator is selected, matching anyone of these will count - they don\'t all have to match, however, you need at least one to match.',
                                'or_note'                               =>  'This is an "OR" search. Matching any one of these will count. They don\'t all have to match. However, you need at least one match.',
                                'formats_comparison_operator'           =>  'Formats Comparison Operator:',
                                'date_format1'                          =>  'You Must Enter Dates In This Format: YYYY-MM-DD (separated by dashes)',
                                'date_format2'                          =>  'YYYY = 4-digit year, MM = 2-digit month (01 is January), DD = 2-digit month day (01 - 31)',
                                'changes_from'                          =>  'Get meeting changes starting from (and including) this date:',
                                'changes_to'                            =>  'Get meeting changes until (and inluding) this date:',
                                'default_date'                          =>  'YYYY-MM-DD',
                                'meeting_id_changes'                    =>  'Look for changes in a meeting with this ID:',
                                'sb_id_changes'                         =>  'Look for changes in a particular Service body:',
                                'meeting_id_changes_tooltip'            =>  'Enter the numeric ID of the meeting to check.',
                                'sb_id_changes_tooltip'                 =>  'Enter the numeric ID of the Service body to check.',
                                'no_addl_options'                       =>  'There are no additional options for this operation.',
                                'no_selected_formats_blurb'             =>  'If none of these are selected, then all formats will be returned.',
                                'root_url_label'                        =>  'The Root Server URL Is:',
                                'repo_url_label'                        =>  'The Source Code Is at:',
                                'result_url_label'                      =>  'The Response URL Is:',
                                'version_label'                         =>  'Version:',
                                'result_shortcode_label'                =>  'The Shortcode Is:',
                                'result_invalid_text'                   =>  '<INVALID VALUE>',
                                'explanation_suffix'                    =>  'Additional info is available <a href="http://bmlt.app/semantic/semantic-workshop/">here</a>.'
                            );
