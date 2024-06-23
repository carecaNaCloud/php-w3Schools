<?php 
  class Fruit{
    // public, private, protected
    private string $name;
    private string $color;
    public static string $exemple = "Static prop exemple";
    
    public function __construct(string $name, string $color) {
      $this->name = $name;
      $this->color = $color;
    }

    public function set_name(string $name) : void {
      $this->name = $name;
    }

    public function get_name() : string {
      return $this->name;
    }

    public function set_color(string $color) : void {
      $this->color = $color;
    }

    public function get_color() : string {
      return $this->color;
    }
    
    // this method can't be overwritten
    final public function intro() : void {
      echo "Hello, my name is " . $this->name . " and I'm a fruit.";
    }
  }

  class Banana extends Fruit {
    
    public function message() : void {
      echo "Hy I'm a banana. \n";
    }

    // public function intro() {
    //   echo "Final methods can be overriden, like final classes can't be extended!";
    // }
  }

  $apple = new Fruit("Apple", "Red");
  echo($apple->get_name() . "\n");
  var_dump($apple instanceof Fruit);
  echo "\n";

  $banana = new Banana("Banana", "Yellow");
  $banana->message();
  echo "\n";




  // Constant
  class Goodbye {
    
    const LEAVING_MESSAGE = "Thank you! \n";

    public function byebye() : void {
      echo self::LEAVING_MESSAGE;
    }

  }

  echo Goodbye::LEAVING_MESSAGE;
  $goodbye = new Goodbye();
  $goodbye->byebye();
  echo "\n";






  class Enterprise {
    private string $name;
    private string $cnpj;

    public function __construct(string $name, string $cnpj) {
      $this -> name = $name;
      $this -> cnpj = $cnpj;
    }
    
    public static function greetings() : void {
      echo "Weelcome!";
    }

    public function get_name() : string {
      return $this -> name;
    }

    public function get_cnpj() : string {
      return $this -> cnpj;
    }     
    
  } 


  final class Branch extends Enterprise {
    public function __construct(string $name, string $cnpj) {
      parent::__construct($name, $cnpj);
      Enterprise::greetings();
    }
  }






  abstract class AbstractExemple {
    protected string $name;
    public function __construct(string $name) {
      $this->name = $name;
    }

    abstract protected function f1();
    abstract public function f2($param);
    abstract public function f3(): void;
    abstract public function f4($param) : string;

  }

  class AbstractClassExemple extends AbstractExemple {

    // inherit the constructor
    
    public function f1() {} // must be defined with the same os less restrict access modifier
    
    public function f2($param) {}
    
    public function f3(): void {}

    public function f4($param) : string {
      return "Must return an string";
    }

    public function get_name() : string {
      return $this->name;
    }
    
  }

  $exmpleAbstract = new AbstractClassExemple("Abstract class Exemple");
  echo $exmpleAbstract->get_name();
  

  /* INTERFACES X ABSTRACT CLASSES
    * Interface can`t have properties, while abstract classes casn
    * All methods in interfaces ares abstract, so don't have implementation 
    * All interface method must be public while abstract is public/protected     
    * Class can implements interface while inheriting from another classes
  */

  interface ExempleInterface {
    public function f1() : void;
    public function f2() : string;
  } 

  class ExempleIntafaceImp implements ExempleInterface {
    private $arg1;
    private $arg2;

    public function f1() : void {
      echo "Void implementation";
    }

    public function f2() : string {
      return "String implementation";
    }

  }


  
?>
