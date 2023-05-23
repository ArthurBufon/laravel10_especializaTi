@csrf
<input id="subject" name="subject" type="text" placeholder="Assunto" value="{{ $support->subject ?? old('subject') }}">
<textarea id="body" name="body" cols="30" rows="10" placeholder="Descrição">{{ $support->body ?? old('body') }}</textarea>
<button type="submit">Enviar</button>
