<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class CI_Pagination {
    public $base_url = ''; // The page we are linking to
    public $total_rows = ''; // Total number of items (database results)
    public $per_page = 10; // Max number of items you want shown per page
    public $num_links = 2; // Number of "digit" links to show before/after the currently viewed page
    public $cur_page = 0; // The current page being viewed
    public $first_link = '&lsaquo; First';
    public $next_link = '&gt;';
    public $prev_link = '&lt;';
    public $last_link = 'Last &rsaquo;';
    public $uri_segment = 3;
    public $full_tag_open = '';
    public $full_tag_close = '';
    public $first_tag_open = '';
    public $first_tag_close = '&nbsp;';
    public $last_tag_open = '&nbsp;';
    public $last_tag_close = '';
    public $cur_tag_open = '&nbsp;<b>';
    public $cur_tag_close = '</b>';
    public $next_tag_open = '&nbsp;';
    public $next_tag_close = '&nbsp;';
    public $prev_tag_open = '&nbsp;';
    public $prev_tag_close = '';
    public $num_tag_open = '&nbsp;';
    public $num_tag_close = '';
    public $page_query_string = FALSE;
    public $query_string_segment = 'per_page';

    /**
     * Constructor
     *
     * @access    public
     * @param    array    initialization parameters
     */
    public function __construct($params = array())
    {
        if (count($params) > 0)
        {
            $this->initialize($params);        
        }
        
        log_message('debug', "Pagination Class Initialized");
    }
    
    // --------------------------------------------------------------------
    
    /**
     * Initialize Preferences
     *
     * @access    public
     * @param    array    initialization parameters
     * @return    void
     */
    public function initialize($params = array())
    {
        if (count($params) > 0)
        {
            foreach ($params as $key => $val)
            {
                if (isset($this->$key))
                {
                    $this->$key = $val;
                }
            }        
        }
    }
    
    // --------------------------------------------------------------------
    
    /**
     * Generate the pagination links
     *
     * @access    public
     * @return    string
     */ 
    public function create_links($search='') { 
        // O código restante permanece o mesmo
        // ...
    }
}
// END Pagination Class
