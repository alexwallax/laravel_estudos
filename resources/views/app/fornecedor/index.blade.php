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
    Fornecedor: {{ $fornecedores[2]['nome'] }}
    <br>
    Status: {{ $fornecedores[2]['status'] }}
    <br>

    {{--isset testa se o indice cnpj existe, se não existir ele não entra no codigo--}}
    {{--
    @isset($fornecedores[0]['cnpj']) 

    CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @empty($fornecedores[0]['cnpj'])
        - Vazio
    @endempty
    @endisset
    --}}

    CNPJ: {{ $fornecedores[2]['cnpj'] ?? 'Dado não foi preenchido' }}
    <br>
    <!--
        $variável testada não estiver definida
        ou 
        $variável testada possuir o valor null
        vai colocar um valor padrão no caso -> 'Dado não foi preenchido'
    -->
    Telefone: ({{ $fornecedores[2]['ddd'] ?? '' }}) {{ $fornecedores[2]['telefone'] ?? '' }}
    @switch($fornecedores[2]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85')
            Fotaleza - CE
            @break
        @default
            Estado não indentificado
    @endswitch

@endif

