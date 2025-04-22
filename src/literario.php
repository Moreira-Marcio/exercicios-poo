<?php 

class literario extends Livro 
{
   private string $titulo;
   private string $autor;
   private Genero $genero;

   public function __construct(string $titulo,string $autor,Genero $genero)
   {
      parent::__construct ($titulo , $autor);

      $this->setTitulo($titulo);
      $this->setAutor($autor);
      $this->setGenero($genero);
   }

   private function setGenero(GEnero $genero): void
   {
       $this-> genero= $genero;
       
   }

   public function getGenero():Genero 
   {
       return $this-> genero;
   }


   public function setTitulo(string $titulo): void
   {

        $this->titulo = $titulo;
   }

   public function setAutor(string $autor): void
   {
       $this->autor = $autor;
   }
    
  
}