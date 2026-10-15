<?php
// Criando um vetor simples
$frutas = ["Maçã", "Banana", "Laranja"];

// Adicionando um elemento ao final
$frutas[] = "Uva";

// Acessando um elemento pelo índice
echo $frutas[0]; // Saída: Maçã

// Percorrendo o vetor
foreach ($frutas as $fruta) {
    echo $fruta . "\n";
}


// Inicializando a pilha
$pilha = [];

// Inserindo elementos na pilha (Empilhar / Push)
array_push($pilha, "Livro A");
array_push($pilha, "Livro B");
array_push($pilha, "Livro C");

// Removendo o último elemento inserido (Desempilhar / Pop)
$removido = array_pop($pilha);
echo "Removido: " . $removido . "\n"; // Saída: Livro C

// Verificando o topo atual da pilha
echo "Topo atual: " . end($pilha) . "\n"; // Saída: Livro B


$pilha = new SplStack();

// Empilhando
$pilha->push("Prato 1");
$pilha->push("Prato 2");
$pilha->push("Prato 3");

// Desempilhando
echo $pilha->pop() . "\n"; // Saída: Prato 3 (último a entrar)

// Verificando o próximo elemento sem remover (top)
echo $pilha->top() . "\n";  // Saída: Prato 2