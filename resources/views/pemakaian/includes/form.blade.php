<div class="row">
    <div class="col-md-12">
        
                <div class="mb-4">
                    <label for="id_meteran" class="form-label">Meteran</label>
                    <select name="id_meteran" id="id_meteran" class="form-select" aria-label="Default select example">
                        @foreach($meteran as $m)
                        <option value="{{ $m->id }}">{{ $m->nomor_meteran .' - '. $m->pelanggan->nama_pelanggan }}</option>
                        @endforeach
                    </select>
                    @error('id_meteran')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                
                <div class="mb-4">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input 
                        type="text" 
                        name="deskripsi" 
                        class="form-control {{ $errors->has('deskripsi') ? 'is-invalid' : '' }}" 
                        id="deskripsi" 
                        value="{{ old('deskripsi', $pemakaian?->deskripsi) }}" 
                        placeholder="Masukkan Deskripsi" />
                    @error('deskripsi')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input 
                        type="text" 
                        name="tahun" 
                        class="form-control {{ $errors->has('tahun') ? 'is-invalid' : '' }}" 
                        id="tahun" 
                        value="{{ old('tahun', $pemakaian?->tahun) }}" 
                        placeholder="Masukkan Tahun" />
                    @error('tahun')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="awal" class="form-label">Awal</label>
                    <x-input.currency name="awal" id="awal"
                        value="{{ old('awal', $pemakaian?->awal) }}" 
                        placeholder="Masukkan Awal"
                        class="form-control text-end {{ $errors->has('awal') ? 'is-invalid' : '' }}" />
                    @error('awal')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="akhir" class="form-label">Akhir</label>
                    <x-input.currency name="akhir" id="akhir"
                        value="{{ old('akhir', $pemakaian?->akhir) }}" 
                        placeholder="Masukkan Akhir"
                        class="form-control text-end {{ $errors->has('akhir') ? 'is-invalid' : '' }}" />
                    @error('akhir')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
    </div>
</div>