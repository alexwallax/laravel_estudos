<h3>Fornecedor</h3>

{{-- Fica o comentário do intepretador do blade --}}


@php
    /*
    if() {

    } elseif() {

    } else {

    }
    */
@endphp

{{-- imprimir o array do arquivo fornecedoController.php --}}
{{--
@dd($fornecedores)
--}}


{{--
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
--}}


{{-- @unless é o inverso do @if, executa se o retorno for false  --}}



{{-- @isset verifica se a variavel foi definida  --}}
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj']) {{--isset testa se o indice cnpj existe, se não existir ele não entra no codigo--}}
    CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @empty($fornecedores[0]['cnpj'])
        - Vazio
    @endempty
    @endisset
    <br>
@endif

