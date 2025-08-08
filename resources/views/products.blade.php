<div>
    @foreach ($data as $key => $items)
        <strong><p>ID: {{ $items['id'] }}</p></strong>
        <p>Nome produto: {{ $items['nome'] }}</p>
        <p>Peso do produto: {{ $items['peso'] }}</p>
        <p>Preço do produto: {{ $items['preço'] }}</p>
        <br />
    @endforeach
</div>
