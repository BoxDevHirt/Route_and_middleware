<div>
    <form action="{{ Route('admin.nfs.id') }}">
        @csrf
        <input type="number" min="1" step="1" value="1" name="id" placeholder="Digite o ID da NFS"
            required>
        <button type="submit">Verificar NFS</button>
    </form>
</div>
