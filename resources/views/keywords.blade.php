<form action="/keywords/store-bulk" method="POST">
    @csrf

    <label>Intenção</label>
    <select name="intent_id" required>
        @foreach($intents as $intent)
        <option value="{{$intent->id}}">{{$intent->nome}}</option>
        @endforeach
    </select>

    <br><br>

    <label>Keywords (uma por linha)</label><br>
    <textarea name="keywords" rows="15" cols="50"
        placeholder="preço
orçamento
quanto custa
valor do serviço"></textarea>

    <br><br>

    <label>Peso padrão</label>
    <input type="number" name="peso" >

    <br><br>

    <button type="submit">Salvar Keywords</button>
</form>