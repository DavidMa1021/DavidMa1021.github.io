<?php

class PortfolioController{

public function linkedPagesController(){
    $linkController = $_GET["action"];

    $response = PagesLink::linkedPages($linkController);
    include $response;
}

}

?>