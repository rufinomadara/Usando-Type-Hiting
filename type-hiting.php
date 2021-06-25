<?php

declare(strict_types=1); //modo estrito o pho leva tudo ao pé da letra... tudo tem que ser do tipo que foi declarado

class Product{
  private $name;
  private $price;
  
  public function setName(String $name):void {
     $this->name = $name; 
  }

  public function getName(){
    return $this->name;
  }

  public function setPrice(float $price):void {
    $this->price = $price;
  }

  public function getPrice(){
    return $this->price;
  }

}

class Cart{
  private $itens = []; //cria uma lista de vetores de itenas

  public function addProduct(Product $product){
        $this->itens[] = $product;
  }

  public function getItens(): array{
    return $this->itens;
  }

}

//Instancia "$product" da classe "Product"
$product = new Product();

$product->setName("Produto Teste");
$product->setPrice(19.90);

$product2 = new Product();
$product2->setName("Produto Teste 2");
$product2->setPrice(40.00);

//Instância o "$car" da classe "Cart" 
$cart = new Cart();
$cart->addProduct($product);//pega o novo produto cadastrado no sistema e o 
$cart->addProduct($product2);

var_dump($cart->getItens());

//print 'Produto: ' . $product->getName() . ' custa ' . $product->getPrice();