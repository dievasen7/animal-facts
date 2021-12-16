<?php

// src/View/View.php

namespace App\View;

/**
 * Renders view files from view directory
 *
 * @author Asen Diev <dievasen7@gmail.com>
 */
class View 
{

    //Path to view directory
    protected string $viewDirectory;

    public function __construct(string $viewDirectory) 
    {
        $this->viewDirectory = $viewDirectory;
    }

    /**
     * Render a template with a view model
     * 
     * @param string $viewName
     * 
     * @param array $viewModel
     * 
     * @return string
     */
    public function render(string $viewName, array $viewModel): string 
    {
        
        $stringTpl = '%s/%s.php';
        $viewFile = sprintf($stringTpl, $this->viewDirectory, $viewName);
        
        if (file_exists($viewFile)) {
            extract($viewModel);
            ob_start();
            include $viewFile;
            $renderedView = ob_get_clean();
        } else {
            $renderedView = $this->render('error/no_view', $viewModel);
        }
        return $renderedView;
    }

}
