<?php
include('libs/utils.php');

class Controller
{
    public function home()
    {
        $m = new Model();
        if (!isset($_SESSION['getFeeds'])) {
            $_SESSION['getFeeds'] = $m->getFeeds();
        }
        require __DIR__ . '/templates/home.php';
    }
    public function viewFeeds()
    {
        $m = new Model();
        if (!isset($_SESSION['getFeeds'])) {
            $_SESSION['getFeeds'] = $m->getFeeds();
        }
        require __DIR__ . '/templates/viewFeeds.php';
    }
    public function createFeeds()
    {
        $m = new Model();
        if (!isset($_SESSION['getFeeds'])) {
            $_SESSION['getFeeds'] = $m->getFeeds();
        }
        require __DIR__ . '/templates/createFeeds.php';
    }
    public function updateFeeds()
    {
        $m = new Model();
        if (!isset($_SESSION['getFeeds'])) {
            $_SESSION['getFeeds'] = $m->getFeeds();
        }
        require __DIR__ . '/templates/updateFeeds.php';
    }
    public function deleteFeeds()
    {
        $m = new Model();
        if (!isset($_SESSION['getFeeds'])) {
            $_SESSION['getFeeds'] = $m->getFeeds();
        }
        require __DIR__ . '/templates/deleteFeeds.php';
    }
   
}