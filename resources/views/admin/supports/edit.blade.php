<h1>Dúvida {{ $support->id }}</h1>


<form action="{{ route('supports.update', $support->id) }}" method="post">
    @csrf
    @method('PUT')
    <input id="subject" name="subject" type="text" value="{{$support->subject}}">
    <textarea id="body" name="body" cols="30" rows="10" placeholder="Descrição">{{$support->body}}</textarea>
    <button type="submit">Enviar</button>
</form>
