# Exercícios de PHP com POO

## Exercício 01

1) Analise o diagrama abaixo e programe a Classe `Livro` no PHP dentro de uma nova pasta `src`.

![Diagrama 1](/diagramas/01.png)

2) Utilize o arquivo `index.php` para importar a classe, e crie pelo menos um objeto a partir dela, definindo um **título**, **autor** e **número de páginas**.

3) Acesse e mostre os dados do objeto usando tags HTML.

## exercicio 02

- Adapte a classe Livro aplicando a ela um método construtor.

- Faça o construtor receber os parâmetros necessários para inicialização dos objetos.

- Mude a visibilidade dos setters para private.

- Na index, ajuste o objeto existente para que ele use o construtor passando os dados diretamente.

- Também na index retire os setters.

## ercicio 03
-  Faça os ajustes necessários na classe Livro em relação aos atributos e métodos (incluindo o construtor).

- Implemente a subclasse Tecnico (herdando tudo da superclasse Livro) e atribua também suas próprias propriedades e métodos.

Obs.: veja que formato é uma enumeração com valores pré-definidos.

- Implemente a subclasse Literario (herdando tudo da superclasse Livro) e atribua também suas próprias propriedades e métodos.
Obs.: veja que genero é uma enumeração com valores pré-definidos.

-  Implemente a subclasse Programacao herdando tudo da subclasse Tecnico e atribua também suas próprias propriedades e métodos.

- Na index.php, crie alguns objetos do tipo Literario e Programação e atribua alguns valores a eles. Em seguida, mostre alguns destes dados usando tags HTML.



