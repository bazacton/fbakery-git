<?php

/**
 * Contains foodbakery_Data_Importer class
 *
 * @since	1.2
 * @package	WordPress
 */
if (!defined('WP_LOAD_IMPORTERS')) {
    define('WP_LOAD_IMPORTERS', true);
}

/**
 * Class foodbakery_Data_Importer class
 *
 * @since	1.2
 */
class foodbakery_Data_Importer {

    /**
     * Demo data name
     *
     * @var string demo data name
     */
    public $demo_data_name = null;
    public $homepage_slug = '';
    public $menus_data_path = '';

    /**
     * Check if content is to be importered
     *
     * @var string Check if content is to be importered
     */
    public $is_content = false;
    public $is_menus = false;
    public $is_sliders  = false;

    /**
     * Check if navitems is to be importered
     *
     * @var string Check if navitems is to be importered
     */
    public $is_navitems = false;

    /**
     * Check if media_attachments is to be importered
     *
     * @var string Check if media_attachments is to be importered
     */
    public $is_media_attachments = false;

    /**
     * Check if widgets is to be importered
     *
     * @var Boolean	Check if widgets is to be importered
     */
    public $is_widgets = false;

    /**
     * Check if theme options is to be importered
     *
     * @var Boolean Check if theme options is to be importered
     */
    public $is_theme_options = false;

    /**
     * Check if users is to be importered
     *
     * @var Boolean Check if users is to be importered
     */
    public $is_users = false;

    /**
     * Check if plugins is to be importered
     *
     * @var Boolean Check if plugins is to be importered
     */
    public $is_plugins = false;

    /**
     * Check if attachments is going to be processed, fetched as one zip and
     * then processed on own end.
     *
     * @var Boolean Check if content attachments is going to be processed
     */
    public $is_attachments_zip = false;

    /**
     * WP content XML path on remote server
     *
     * @var	string	WP content XML path on remote server
     */
    public $wp_data_path = '';

    /**
     * Theme options path on remote server
     *
     * @var	string	Theme options path on remote server
     */
    public $theme_options_data_path = '';

    /**
     * Widgets path on remote server
     *
     * @var string	Widgets path on remote server
     */
    public $widget_data_path = '';

    /**
     * Users path on remote server
     *
     * @var	string	Users path on remote server
     */
    public $users_data_path = '';

    /**
     * Plugins path on remote server
     *
     * @var	string	Plugins path on remote server
     */
    public $plugins_data_path = '';

    /**
     * Sliders path on remote server
     *
     * @var	string	Sliders path on remote server
     */
    public $sliders_data_path = '';

    /**
     * Slider Options
     *
     * @var	string	Slider options
     */
    public $sliders_options = '';

    /**
     * CS Importer Class path
     *
     * @var	string	CS Importer Class Path
     */
    public $foodbakery_importer_class_path = '';

    /**
     * WP uploades URL path
     *
     * @var string	WP uploads URL path
     */
    public $wp_upload_url_path = '';

    /**
     * WP uploads absolute path
     *
     * @var string	WP uploads absolute path
     */
    public $wp_upload_dir_path = '';

    /**
     * This will keep return value of any action
     *
     * @var Boolean	This will keep return value of any action
     */
    public $action_return = false;
    
    public $wp_upload_base_url_path;
    public $wp_upload_base_dir_path;
    public $home_url;
    public $home_replace_url;
    public $attachments_replace_url;

    /**
     * Constructor
     */
    function __construct() {
        set_time_limit(0);
        $paths = wp_upload_dir();
        $this->wp_upload_url_path = trailingslashit($paths['url']);
        $this->wp_upload_base_url_path = trailingslashit($paths['baseurl']);
        $this->wp_upload_dir_path = trailingslashit($paths['path']);
        $this->wp_upload_base_dir_path = trailingslashit($paths['basedir']);
        $this->home_url = CS_HOME_BASE;
        $this->home_replace_url = DEMO_DATA_HOME_URL;

        $this->foodbakery_importer_class_path = wp_foodbakery_framework::plugin_dir() . 'includes/cs-importer/wordpress-importer.php';
    }

    /**
     * Import configured Type of contents like (WP content, Users, widgets, etc.)
     */
    function import() {
        $this->action_return = false;

        if ($this->is_content) {
            $this->delete_old_email_templates();
            ob_start();
            $this->import_wp_data();
            ob_end_clean();
            if ($this->action_return) {
                ob_start();
                $this->set_up_pages();
                $this->delete_default_content();
                //$this->update_db();
                ob_end_clean();
                $this->make_output(true, __('WP data successfully got imported.', 'cs-framework'));
            } else {
                $this->make_output(false, __('Sorry importer class missing.', 'cs-framework'));
            }
        }

        if ($this->is_navitems) {
            ob_start();
            $this->import_wp_navitems();
            ob_end_clean();
            if ($this->action_return) {
                $this->make_output(true, __('WP Navigation Menu Items successfully got imported.', 'cs-framework'));
            } else {
                $this->make_output(false, __('Sorry navigation menu items class missing.', 'cs-framework'));
            }
        }

        if ($this->is_media_attachments) {
            ob_start();
            $this->import_wp_media_attachments();
            ob_end_clean();
            if ($this->action_return) {
                $this->make_output(true, __('WP Media Attachments successfully got imported.', 'cs-framework'));
            } else {
                $this->make_output(false, __('Sorry media attachments class missing.', 'cs-framework'));
            }
        }

        $this->action_return = false;
        if ($this->is_widgets) {
            ob_start();
            $this->import_widgets();
            ob_end_clean();
            if ($this->action_return) {
                $this->make_output(true, __('Widgets successfully got imported.', 'jobhunt'));
            } else {
                $this->make_output(false, __('Sorry widgets class missing.', 'jobhunt'));
            }
        }

        $this->action_return = false;
        if ($this->is_theme_options) {
            ob_start();
            $this->import_theme_options();
            ob_end_clean();
            if ($this->action_return) {
                $this->make_output(true, __('Theme options successfully got imported.', 'jobhunt'));
            } else {
                $this->make_output(false, __('Sorry theme options file not readable.', 'jobhunt'));
            }
        }

        $this->action_return = false;
        if ($this->is_users) {
            ob_start();
            $this->import_users();
            ob_end_clean();
            if ($this->action_return) {
                $this->make_output(true, __('Users successfully got imported.', 'jobhunt'));
            } else {
                $this->make_output(false, __('Sorry users file not readable.', 'jobhunt'));
            }
        }

        $this->action_return = false;
        if ($this->is_menus) {
            ob_start();
            $this->import_menus_and_locations();
            ob_end_clean();
            if ($this->action_return) {
                $this->make_output(true, __('Menus successfully got imported.', 'jobhunt'));
            } else {
                $this->make_output(false, __('Sorry menus was not imported.', 'jobhunt'));
            }
        }

        $this->action_return = false;
        if ($this->is_plugins) {
            ob_start();
            $this->import_plugin_options();
            ob_end_clean();
            if ($this->action_return) {
                $this->make_output(true, __('Plugin Options successfully got imported.', 'jobhunt'));
            } else {
                $this->make_output(false, __('Sorry plugin options was not imported.', 'jobhunt'));
            }
        }

        $this->action_return = false;
        if ($this->is_sliders) {
            ob_start();
            $this->import_sliders();
            ob_end_clean();
            if ($this->action_return) {
                $this->make_output(true, __('Sliders successfully got imported.', 'jobhunt'));
            } else {
                $this->make_output(false, __('Sorry sliders was not imported.', 'jobhunt'));
            }
        }
    }

    /**
     * Import WP data and also process attachments if asked to process them first
     * invoke wp_rem_cs_import_wp_data action
     */
    function import_wp_data() {
        global $wp_filesystem;

        // Fetch XML contents from remote server.
        $demo_data_str = $wp_filesystem->get_contents($this->wp_data_path);
        // Replace paths
        $this->attachments_replace_url = DEFAULT_DEMO_DATA_URL;
        if ($this->demo_data_name == DEFAULT_DEMO_DATA_NAME) {
            $demo_data_str = str_replace($this->attachments_replace_url, $this->wp_upload_url_path, $demo_data_str);
        } else {
            // Replace Upload URL
            $this->attachments_replace_url = str_replace('{{{demo_data_name}}}', $this->demo_data_name, DEMO_DATA_URL);
            $demo_data_str = str_replace($this->attachments_replace_url, $this->wp_upload_url_path, $demo_data_str);
            // Replace Home URL
            $this->home_replace_url = str_replace('{{{demo_data_name}}}', $this->demo_data_name, $this->home_replace_url);
            $demo_data_str = str_replace($this->home_replace_url, $this->home_url, $demo_data_str);
        }
        $this->wp_data_path = $this->wp_upload_dir_path . $this->demo_data_name . '_' . time() . '.xml';
        $wp_filesystem->put_contents($this->wp_data_path, $demo_data_str);

        do_action('foodbakery_import_wp_data', $this);

        // Delete files after processing.
        unlink($this->wp_data_path);
    }

    /**
     * Import Navigation Menu Items
     * invoke wp_rem_cs_import_wp_data action
     */
    function import_wp_navitems() {
        global $wp_filesystem;

        // Fetch XML contents from remote server.
        $demo_data_str = $wp_filesystem->get_contents($this->wp_data_path);
        // Replace paths
        $this->attachments_replace_url = DEFAULT_DEMO_DATA_URL;
        if ($this->demo_data_name == DEFAULT_DEMO_DATA_NAME) {
            $demo_data_str = str_replace($this->attachments_replace_url, $this->wp_upload_url_path, $demo_data_str);
        } else {
            // Replace Upload URL
            $this->attachments_replace_url = str_replace('{{{demo_data_name}}}', $this->demo_data_name, DEMO_DATA_URL);
            $demo_data_str = str_replace($this->attachments_replace_url, $this->wp_upload_url_path, $demo_data_str);
            // Replace Home URL
            $this->home_replace_url = str_replace('{{{demo_data_name}}}', $this->demo_data_name, $this->home_replace_url);
            $demo_data_str = str_replace($this->home_replace_url, $this->home_url, $demo_data_str);
        }

        $this->wp_data_path = $this->wp_upload_dir_path . $this->demo_data_name . '_navitems_' . time() . '.xml';
        $wp_filesystem->put_contents($this->wp_data_path, $demo_data_str);

        do_action('foodbakery_import_wp_data', $this);

        // Delete files after processing.
        unlink($this->wp_data_path);
    }

    /**
     * Import Media Attachments
     * invoke wp_rem_cs_import_wp_data action
     */
    function import_wp_media_attachments() {
        global $wp_filesystem;

        require_once ABSPATH . '/wp-admin/includes/file.php';

        // Fetch XML contents from remote server.
        $demo_data_str = $wp_filesystem->get_contents($this->wp_data_path);

        /**
         * If we have to fetch attachments from remote server as a single zip.
         * Then we also have to modify file paths as attachments will be already
         * fetched to uploads
         */
        if ($this->is_attachments_zip) {
            // If we have to fetch attachments from remote server as a single zip.
            $is_zip_extracted = $this->process_attachments();

            // If zip extracted then replace paths.
            if ($is_zip_extracted) {
                // If we need to process attachments separately then replace URLs in XML, download as a zip
                // else only save content XML locally with new name.
                if ($this->demo_data_name == DEFAULT_DEMO_DATA_NAME) {
                    $this->attachments_replace_url = DEFAULT_DEMO_DATA_URL;
                    $demo_data_str = str_replace($this->attachments_replace_url, $this->wp_upload_url_path, $demo_data_str);
                } else {
                    // Replace Upload URL
                    $this->attachments_replace_url = str_replace('{{{demo_data_name}}}', $this->demo_data_name, DEMO_DATA_URL);
                    $demo_data_str = str_replace($this->attachments_replace_url, $this->wp_upload_url_path, $demo_data_str);
                    // Replace Home URL
                    $this->home_replace_url = str_replace('{{{demo_data_name}}}', $this->demo_data_name, $this->home_replace_url);
                    $demo_data_str = str_replace($this->home_replace_url, $this->home_url, $demo_data_str);
                }
            }
        }

        $this->wp_data_path = $this->wp_upload_dir_path . $this->demo_data_name . '_media_' . time() . '.xml';
        $wp_filesystem->put_contents($this->wp_data_path, $demo_data_str);

        do_action('foodbakery_import_wp_data', $this);

        // Delete files after processing.
        unlink($this->wp_data_path);
    }

    /**
     * Process attachments, zip into uploads wp_dp_cs
     *
     * @return Boolean Whether zip was successfully extracted or not.
     */
    function process_attachments() {

        require_once ABSPATH . '/wp-admin/includes/file.php';

        // Download attachments zip and extract it to local wp_dp_cs.
        $first_str_filename = '';
        $filename = $this->wp_upload_dir_path . 'temp-' . $this->demo_data_name . '-attachments.zip';
        if (copy($this->attachments_path, $filename)) {
            WP_Filesystem();
            $unzipfile = unzip_file($filename, $this->wp_upload_dir_path . '/' . $first_str_filename . '/');

            // Delete zip after completion.
            unlink($filename);

            // Return whether zip was extracted successfully or not.
            return $unzipfile;
        }
    }

    /**
     * Import Widgets
     * invoke foodbakery_import_widgets
     */
    function import_widgets() {
        do_action('foodbakery_import_widgets', $this);
    }

    /**
     * Import Theme Options
     * invoke foodbakery_import_theme_options
     */
    function import_theme_options() {
        do_action('foodbakery_import_theme_options', $this);
    }

    /**
     * Import Users
     * invoke foodbakery_import_users
     */
    function import_users() {
        do_action('foodbakery_import_users', $this);
    }

    /**
     * Import Menus and Locations
     * invoke foodbakery_import_menus_and_locations
     */
    function import_menus_and_locations() {
        do_action('foodbakery_import_menus_and_locations', $this);
    }

    /**
     * Import Plugin Options
     * invoke foodbakery_import_plugin_options hook
     */
    function import_plugin_options() {
        do_action('foodbakery_import_plugin_options', $this);
    }

    /**
     * Import Sliders
     * invoke foodbakery_import_rev_sliders
     */
    function import_sliders() {
        do_action('foodbakery_import_rev_sliders', $this);
    }

    /**
     * Set up Pages, set home page for the WP site
     * invoke foodbakery_import_setup_pages
     */
    function set_up_pages() {
        do_action('foodbakery_import_setup_pages', $this);
    }

    /**
     * Delete Default Content
     * invoke wp_dp_delete_default_content
     */
    function delete_default_content() {
        do_action('foodbakery_delete_default_content');
    }

    /**
     * delete_old_email_templates
     */
    function delete_old_email_templates() {
        query_posts(array(
            'post_type' => 'jh-templates',
            'posts_per_page' => -1,
        ) );
        while (have_posts()) : the_post();
            wp_delete_post(get_the_ID());
        endwhile;
    }

    /**
     * Update Db Fields
     * invoke wp_dp_importer_db_update
     */
    function update_db() {
        do_action('foodbakery_importer_db_update', $this);
    }

    /**
     * Ouput JSON result to browser
     *
     * @param	Boolean	$status		Define status of a request result.
     * @param	String	$message	Description of a request result.
     */
    function make_output($status, $message) {
        echo json_encode(array('status' => $status, 'message' => $message));
    }

}
