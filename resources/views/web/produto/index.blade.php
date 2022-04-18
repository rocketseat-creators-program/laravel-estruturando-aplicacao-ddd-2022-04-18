@extends('layouts.app')

@section('content')
<div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-md">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ url('/') }}" method='post' class='flex flex-col gap-2 mb-4'>
            @csrf
            <input type="text" name='nome' placeholder='Nome' />
            <textarea name='descricao' placeholder='Descrição'></textarea>
            <button type="submit" class='rounded border-2 border-gray-300'>Salvar</button>

            @if (session()->has('message'))
                <p>{{ session('message') }}</p>
            @endif
        </form>

        <ul>
        @forelse ($produtos as $produto)
            <li> {{ $produto->id }} - {{ $produto->nome }} - {{ $produto->descricao }} </li>
        @empty
            <li>Nenhum produto cadastrado</li>
        @endforelse
        </ul>
    </div>
</div>
@endsection
