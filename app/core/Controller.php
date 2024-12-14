<?php

class Controller{
    public function view($view, $data = []) {
        extract($data);
        require_once '../app/views/' . $view . '.php';
    }
    

    public function model($model) {
        $modelPath = '../app/models/' . $model . '.php';
    
        // Check if the model file exists
        if (file_exists($modelPath)) {
            require_once $modelPath;
    
            // Get the namespace from the model path and convert it to a class name
            $modelClass = str_replace('/', '\\', $model);
    
            // Ensure the class exists after resolving its namespace
            if (class_exists($modelClass)) {
                return new $modelClass();
            } else {
                throw new Exception("Model class not found: " . $modelClass);
            }
        } else {
            throw new Exception("Model file not found: " . $modelPath);
        }
    }
    
    
    
}