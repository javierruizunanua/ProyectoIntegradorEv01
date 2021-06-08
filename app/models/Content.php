<?php

namespace App\Models;

class Content
{
    private $idContent;
    private $page;
    private $content;
    private $modify_name;
    private $modify_date;


    public function getIdContent()
    {
        return $this->idContent;
    }


    public function setIdContent($idContent)
    {
        $this->idContent = $idContent;
    }


    public function getPage()
    {
        return $this->page;
    }


    public function setPage($page)
    {
        $this->page = $page;
    }


    public function getContent()
    {
        return $this->content;
    }


    public function setContent($content)
    {
        $this->content = $content;
    }


    public function getModifyName()
    {
        return $this->modify_name;
    }


    public function setModifyName($modify_name)
    {
        $this->modify_name = $modify_name;
    }


    public function getModifyDate()
    {
        return $this->modify_date;
    }


    public function setModifyDate($modify_date)
    {
        $this->modify_date = $modify_date;
    }



}