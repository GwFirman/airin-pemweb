<div class="row">
    <div class="col-md-12">
        
                <div class="mb-4">
                    <label for="id_pelanggan" class="form-label">Id Pelanggan</label>
                    <x-input.currency name="id_pelanggan" id="id_pelanggan"
                        value="{{ old('id_pelanggan', $tagihan?->id_pelanggan) }}" 
                        placeholder="Masukkan Id Pelanggan"
                        class="form-control text-end {{ $errors->has('id_pelanggan') ? 'is-invalid' : '' }}" />
                    @error('id_pelanggan')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="id_meteran" class="form-label">Id Meteran</label>
                    <x-input.currency name="id_meteran" id="id_meteran"
                        value="{{ old('id_meteran', $tagihan?->id_meteran) }}" 
                        placeholder="Masukkan Id Meteran"
                        class="form-control text-end {{ $errors->has('id_meteran') ? 'is-invalid' : '' }}" />
                    @error('id_meteran')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="tahun" class="form-label">Tahun</label>
                    <x-input.currency name="tahun" id="tahun"
                        value="{{ old('tahun', $tagihan?->tahun) }}" 
                        placeholder="Masukkan Tahun"
                        class="form-control text-end {{ $errors->has('tahun') ? 'is-invalid' : '' }}" />
                    @error('tahun')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="nomor_meteran" class="form-label">Nomor Meteran</label>
                    <x-input.currency name="nomor_meteran" id="nomor_meteran"
                        value="{{ old('nomor_meteran', $tagihan?->nomor_meteran) }}" 
                        placeholder="Masukkan Nomor Meteran"
                        class="form-control text-end {{ $errors->has('nomor_meteran') ? 'is-invalid' : '' }}" />
                    @error('nomor_meteran')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="nominal" class="form-label">Nominal</label>
                    <x-input.currency name="nominal" id="nominal"
                        value="{{ old('nominal', $tagihan?->nominal) }}" 
                        placeholder="Masukkan Nominal"
                        class="form-control text-end {{ $errors->has('nominal') ? 'is-invalid' : '' }}" />
                    @error('nominal')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
    </div>
</div>