<?php

namespace App\Models;

use App\Models\Model;


//L'extend est fait pour l'héritage, mais bon, y'a rien dans la fonction.
class Article extends Model {

    protected $id;
    protected $created_at;
    protected $updated_at;
    protected $title;
    protected $body;
    protected $author_first_name;
    protected $author_last_name;
    protected $author_full_name;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getCreatedAt()
    {
        return $this->created_at;
    }


    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }


    public function getUpdatedAt()
    {
        return $this->updated_at;
    }


    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }


    public function getBody()
    {
        return $this->body;
    }


    public function setBody($body)
    {
        $this->body = $body;
    }


    public function getAuthorFirstName()
    {
        return $this->author_first_name;
    }


    public function setAuthorFirstName($author_first_name)
    {
        $this->author_first_name = $author_first_name;
    }


    public function getAuthorLastName()
    {
        return $this->author_last_name;
    }


    public function setAuthorLastName($author_last_name)
    {
        $this->author_last_name = $author_last_name;
    }

    public function getAuthorFullName()
    {
        return "{$this->author_first_name} {$this->author_last_name}";
        //on gratte comme on peu...
    }


}

