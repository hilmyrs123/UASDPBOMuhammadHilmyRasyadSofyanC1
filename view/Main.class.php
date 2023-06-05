<?php

include("model/Template.class.php");
include("viewmodel/Process.php");

class Main
{
    private $template;
    private $viewmodel;

    public function __construct($template = "view/template.html")
    {
        $this->template = new Template($template);
        $this->viewmodel = new Process();
    }

    public function view()
    {
        // Just an example how to fetch data from ViewModel.
        // The real logic, you have to do it by yourself.
        $this->viewmodel->insert();

        $this->template->replace("DATA_CONTOH", $this->viewmodel->read());
        $this->template->write();
    }

    /* If you need to manipulate user input, call ViewModel functions here. */

    // $this->Process->insert...
    // $this->Process->update...
    // $this->Process->delete...
}

?>