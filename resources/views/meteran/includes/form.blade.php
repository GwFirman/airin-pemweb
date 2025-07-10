<div class="row">
    <div class="col-md-12">
        
                <div class="mb-4">
                    <label for="id_pelanggan" class="form-label">Pelanggan</label>
                    <select name="id_pelanggan" id="id_pelanggan" class="form-select" aria-label="Default select example">
                        @foreach($pelanggan as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_pelanggan }}</option>
                        @endforeach
                    </select>
                    @error('id_pelanggan')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="id_layanan" class="form-label">Layanan</label>
                    <select name="id_layanan" id="id_layanan" class="form-select" aria-label="Default select example">
                        @foreach($layanan as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_layanan }}</option>
                        @endforeach
                    </select>
                    @error('id_layanan')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="chip_kartu" class="form-label">Chip Kartu</label>
                    <input 
                        type="text" 
                        name="chip_kartu" 
                        class="form-control {{ $errors->has('chip_kartu') ? 'is-invalid' : '' }}" 
                        id="chip_kartu" 
                        value="{{ old('chip_kartu', $meteran?->chip_kartu) }}" 
                        placeholder="Masukkan Chip Kartu" />
                    @error('chip_kartu')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="lokasi_pemasangan" class="form-label">Lokasi Pemasangan</label>
                    <input 
                        type="text" 
                        name="lokasi_pemasangan" 
                        class="form-control {{ $errors->has('lokasi_pemasangan') ? 'is-invalid' : '' }}" 
                        id="lokasi_pemasangan" 
                        value="{{ old('lokasi_pemasangan', $meteran?->lokasi_pemasangan) }}" 
                        placeholder="Masukkan Lokasi Pemasangan" />
                    @error('lokasi_pemasangan')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="tanggal_pemasangan" class="form-label">Tanggal Pemasangan</label>
                    <input 
                        type="date" 
                        name="tanggal_pemasangan" 
                        class="form-control {{ $errors->has('tanggal_pemasangan') ? 'is-invalid' : '' }}" 
                        id="tanggal_pemasangan" 
                        value="{{ old('tanggal_pemasangan', $meteran?->tanggal_pemasangan) }}" 
                        placeholder="Masukkan Tanggal Pemasangan" />
                    @error('tanggal_pemasangan')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
    </div>
</div>