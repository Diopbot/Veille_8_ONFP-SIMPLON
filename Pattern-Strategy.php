<?php
interface Formater
{
  public function format($text);
}
abstract class Writer
{
  // Attribut contenant l'instance du formateur que l'on veut utiliser.
  protected $formater;
  
  abstract public function write($text);
  
  // Nous voulons une instance d'une classe implémentant Formater en paramètre.
  public function __construct(Formater $formater)
  {
    $this->formater = $formater;
  }
}
class DBWriter extends Writer
{
  protected $db;
  
  public function __construct(Formater $formater, PDO $db)
  {
    parent::__construct($formater);
    $this->db = $db;
  }
  
  public function write ($text)
  {
    $q = $this->db->prepare('INSERT INTO lorem_ipsum SET text = :text');
    $q->bindValue(':text', $this->formater->format($text));
    $q->execute();
  }
}
class FileWriter extends Writer
{
  // Attribut stockant le chemin du fichier.
  protected $file;
  
  public function __construct(Formater $formater, $file)
  {
    parent::__construct($formater);
    $this->file = $file;
  }
  
  public function write($text)
  {
    $f = fopen($this->file, 'w');
    fwrite($f, $this->formater->format($text));
    fclose($f);
  }
}
class TextFormater implements Formater
{
  public function format($text)
  {
    return 'Date : ' . time() . "\n" . 'Texte : ' . $text;
  }
}
class HTMLFormater implements Formater
{
  public function format($text)
  {
    return '<p>Date : ' . time() . '<br />' ."\n". 'Texte : ' . $text . '</p>';
  }
}
class XMLFormater implements Formater
{
  public function format($text)
  {
    return '<?xml version="1.0" encoding="ISO-8859-1"?>' ."\n".
           '<message>' ."\n".
           "\t". '<date>' . time() . '</date>' ."\n".
           "\t". '<texte>' . $text . '</texte>' ."\n".
           '</message>';
  }
}
function autoload($class)
{
  if (file_exists($path = $class . '.php'))
  {
    require $path;
  }
}

spl_autoload_register('autoload');

$writer = new FileWriter(new HTMLFormater, 'file.html');
$writer->write('Hello world !');

$textFormater = new class implements Formater
{
  public function format($text)
  {
    return 'Date : ' . time() . "\n" . 'Texte : ' . $text;
  }
};

$htmlFormater = new class implements Formater
{
  public function format($text)
  {
    return '<p>Date : ' . time() . '<br />' ."\n". 'Texte : ' . $text . '</p>';
  }
};

$xmlFormater = new class implements Formater
{
  public function format($text)
  {
    return '<?xml version="1.0" encoding="ISO-8859-1"?>' ."\n".
           '<message>' ."\n".
           "\t". '<date>' . time() . '</date>' ."\n".
           "\t". '<texte>' . $text . '</texte>' ."\n".
           '</message>';
  }
};

function autoload($class)
{
  if (file_exists($path = $class . '.php'))
  {
    require $path;
  }
}

spl_autoload_register('autoload');

$writer = new FileWriter($htmlFormater, 'file.html');
$writer->write('Hello world !');

