<div class="row">
    <div class="col-md-12">

        <div class="mb-4">
            <label for="pelanggan" class="form-label">Pelanggan</label>
            <select class="form-select" id="pelanggan" aria-label="Pilih pelanggan" onchange="setPelangganData(this)">
                <option value="">Pilih pelanggan</option>
                @foreach ($pelanggan as $p)
                    <option value="{{ $p->id }}" data-id-meteran="{{ $p->meteran->id }}"
                        data-nomor-meteran="{{ $p->meteran->nomor_meteran }}"
                        {{ old('id_pelanggan', $tagihan?->id_pelanggan) == $p->id ? 'selected' : '' }}>
                        {{ $p->nama_pelanggan }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4 d-none">
            <label for="id_pelanggan" class="form-label">Id Pelanggan</label>
            <input name="id_pelanggan" id="id_pelanggan" value="{{ old('id_pelanggan', $tagihan?->id_pelanggan) }}"
                placeholder="Masukkan Id Pelanggan"
                class="form-control text-end {{ $errors->has('id_pelanggan') ? 'is-invalid' : '' }}" />
            @error('id_pelanggan')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4 d-none">
            <label for="id_meteran" class="form-label">Id Meteran</label>
            <input name="id_meteran" id="id_meteran" value="{{ old('id_meteran', $tagihan?->id_meteran) }}"
                placeholder="Masukkan Id Meteran"
                class="form-control text-end {{ $errors->has('id_meteran') ? 'is-invalid' : '' }}" />
            @error('id_meteran')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4 d-none">
            <label for="nomor_meteran" class="form-label">Nomor Meteran</label>
            <x-input.currency name="nomor_meteran" id="nomor_meteran"
                value="{{ old('nomor_meteran', $tagihan?->nomor_meteran) }}" placeholder="Masukkan Nomor Meteran"
                class="form-control text-end {{ $errors->has('nomor_meteran') ? 'is-invalid' : '' }}" />
            @error('nomor_meteran')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4">
            <label for="tahun" class="form-label">Tahun</label>
            <input name="tahun" id="tahun" value="{{ old('tahun', $tagihan?->tahun ?? date('Y')) }}"
                placeholder="Masukkan Tahun"
                class="form-control text-end {{ $errors->has('tahun') ? 'is-invalid' : '' }}" />
            @error('tahun')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4">
            <label for="nominal" class="form-label">Nominal</label>
            <x-input.currency name="nominal" id="nominal" value="{{ old('nominal', $tagihan?->nominal) }}"
                placeholder="Masukkan Nominal"
                class="form-control text-end {{ $errors->has('nominal') ? 'is-invalid' : '' }}" />
            @error('nominal')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>

<script>
    function setPelangganData(selectElement) {
        const selectedOption = selectElement.options[selectElement.selectedIndex];

        const idPelanggan = selectElement.value;
        const idMeteran = selectedOption.getAttribute('data-id-meteran') || '';
        const nomorMeteran = selectedOption.getAttribute('data-nomor-meteran') || '';

        // Pastikan elemen input ditemukan dan diset dengan benar
        const inputIdPelanggan = document.querySelector('input[name="id_pelanggan"]');
        const inputIdMeteran = document.querySelector('input[name="id_meteran"]');
        const inputNomorMeteran = document.querySelector('input[name="nomor_meteran"]');

        if (inputIdPelanggan) inputIdPelanggan.value = idPelanggan;
        if (inputIdMeteran) inputIdMeteran.value = idMeteran;
        if (inputNomorMeteran) inputNomorMeteran.value = nomorMeteran;

        console.log('SET: id_pelanggan =', idPelanggan, 'id_meteran =', idMeteran, 'nomor_meteran =', nomorMeteran);
    }
</script>
