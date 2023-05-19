<h1>Nova Dúvida</h1>


<form action="{{ route('supports.store') }}" method="post">
    @csrf
    <input id="subject" name="subject" type="text" placeholder="Assunto">
    <textarea id="body" name="body" cols="30" rows="10" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>
