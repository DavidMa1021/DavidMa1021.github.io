<?php

class PagesLink {

    public function linkedPages($linkName){

        if($linkName== "module-projects"){
            $module = "../../index.html #".$linkName;
        }
        return $module;
    }

}

?>