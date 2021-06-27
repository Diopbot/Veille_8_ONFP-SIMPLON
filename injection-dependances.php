<?php
class NewsManager
{
  public function get($id)
  {
    // On admet que MyPDO étend PDO et qu'il implémente un singleton.
    $q = MyPDO::getInstance()->query('SELECT id, auteur, titre, contenu FROM news WHERE id = '.(int)$id);
    
    return $q->fetch(PDO::FETCH_ASSOC);
  }
}
//<?php

class NewsManager
{
  public function get($id)
  {
    global $db;
    // Revient EXACTEMENT au même que :
    $db = MyPDO::getInstance();
    
    // Suite des opérations.
  }
}

interface iDB
{
  public function query($query);
}

//<?php


interface iResult
{
  public function fetchAssoc();
}

<?php
class MyPDO extends PDO implements iDB
{
  public function query($query)
  {
    return new MyPDOStatement(parent::query($query));
  }
}

//<?php

class MyPDO extends PDO implements iDB
{
  public function query($query)
  {
    return new MyPDOStatement(parent::query($query));
  }
}

//<?php

class MyPDOStatement implements iResult
{
  protected $st;
  
  public function __construct(PDOStatement $st)
  {
    $this->st = $st;
  }
  
  public function fetchAssoc()
  {
    return $this->st->fetch(PDO::FETCH_ASSOC);
  }
}

//<?php


class MyMySQLi extends MySQLi implements iDB
{
  public function query($query)
  {
    return new MyMySQLiResult(parent::query($query));
  }
}



//<?php
class MyMySQLiResult implements iResult
{
  protected $st;
  
  public function __construct(MySQLi_Result $st)
  {
    $this->st = $st;
  }
  
  public function fetchAssoc()
  {
    return $this->st->fetch_assoc();
  }
}

//<?php
class NewsManager
{
  protected $dao;
  
  // On souhaite un objet instanciant une classe qui implémente iDB.
  public function __construct(iDB $dao)
  {
    $this->dao = $dao;
  }

  //<?php
$dao = new MyPDO('mysql:host=localhost;dbname=news', 'root', '');
// $dao = new MyMySQLi('localhost', 'root', '', 'news');

$manager = new NewsManager($dao);
print_r($manager->get(2));
  
  public function get($id)
  {
    $q = $this->dao->query('SELECT id, auteur, titre, contenu FROM news WHERE id = '.(int)$id);
    
    // On vérifie que le résultat implémente bien iResult.
    if (!$q instanceof iResult)
    {
      throw new Exception('Le résultat d\'une requête doit être un objet implémentant iResult');
    }
    
    return $q->fetchAssoc();
  }
}