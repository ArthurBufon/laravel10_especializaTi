<h1>Nova Dúvida</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('supports.store') }}" method="post">
    @csrf
    <input id="subject" name="subject" type="text" placeholder="Assunto" value="{{ old('subject') }}">
    <textarea id="body" name="body" cols="30" rows="10" placeholder="Descrição">{{ old('body') }}</textarea>
    <button type="submit">Enviar</button>
</form>
