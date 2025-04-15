<?php

public function __construct(string $titulo, string $autor,int $paginas)
{
  $this->setTitulo($titulo);
  $this->setAutor($autor);
  $this->setPaginas($paginas);
}

public function verificarIdade():string{
  if ($this->idade < 18) return "menor de idade";
  if ($this->idade < 60) return "adulto";

  return "idoso";
}


class Livro
{
    public string $titulo;
    public string $autor;
    public int $paginas;

    public function setTitulo (string $titulo): void
    {
        $this->titulo= $titulo;
    }

    public function setAutor (string $autor): void
    {
        $this->autor=$autor;
    }

    public function setPaginas (int $paginas): void
    {
        $this->paginas=$paginas;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function getPaginas(): int
    {
        return $this->paginas;
    }



}