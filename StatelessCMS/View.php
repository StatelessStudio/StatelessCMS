<?php

namespace Stateless;

/**
 * A View is a compilation of layout items and possibly forms to be shown in a Controller
 */
class View {

    /** View title  */
    public $title;

    /** CSS Class to attach the View's body tag */
    public $bodyClass;

    /**
     * Construct a new Page
     * 
     * @param string $title (Optional) Page title to use for the Site Title
     *  and h1 tag
     * @param string $bodyClass (Optional) CSS Class name to append to the body
     *  tag of the document
     */
    public function __construct($title = false, $bodyClass = false) {

        $this->title = $title;
        $this->bodyClass = $bodyClass;

    }

    /**
     * Show this Page
     */
    public function show() {
        
        echo "<!DOCTYPE html>";
        echo "<html>";

    }

    /**
     * Close the Page markup
     */
    public function close() {

        echo "</html>";

    }

};
