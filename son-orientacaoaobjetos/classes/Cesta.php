<?php
/**
 * Created by PhpStorm.
 * User: Dinopc
 * Date: 22/04/2018
 * Time: 11:02
 */

class Cesta
{
    private $itens;

    function AdicionarItem(Produto $item)
    {
        $this->itens[] = $item;
    }

    function ExibirLista(){
        foreach ($this->itens as $item){
            $item->ImprimeEtiqueta();
        }
    }

    function CalcularTotal()
    {
        $total = 0;
        foreach ($this->itens as $item)
        {
            $total += $item->Preco;
        }

        return "R$".$total;
    }
}