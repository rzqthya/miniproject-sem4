<div class="d-flex">
    <a href="{{route('barangs.show', ['barang' => $barang->id]) }}" class="btn btn-secondary btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
    <a href="{{route('barangs.edit', ['barang' => $barang->id]) }}" class="btn btn-warning btn-sm me-2"><i class="bi-pencil-square"></i></a>

    <div>
        <form action="{{ route('barangs.destroy', ['barang' => $barang->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm "><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
