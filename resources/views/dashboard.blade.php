<x-app-layout>
    <main class="main-content  mt-0">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <form role="form" method="POST" action="car">
                            @csrf
                            <label>Merek Mobil</label>
                                <div class="mb-1">
                                    <input type="text" id="merek" name="merek" class="form-control"
                                    placeholder="Masukan Merek Mobil" value="{{old("merek")}}" aria-label="Merek"
                                    aria-describedby="merek-addon">
                                    @error('merek')
                                    <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            
                            <label>Model Mobil</label>
                                <div class="mb-1">
                                    <input type="text" id="model" name="model" class="form-control"
                                    placeholder="Masukan Model Mobil" value="{{old("model")}}" aria-label="Model"
                                    aria-describedby="model-addon">
                                    @error('model')
                                    <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                    </div>

                            <label>Nomor Plat</label>
                                <div class="mb-1">
                                    <input type="text" id="no_plat" name="no_plat" class="form-control"
                                    placeholder="Masukan Nomor Plat" aria-label="no_plat"
                                    aria-describedby="no_plat-addon">
                                    @error('no_plat')
                                    <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                            <label>Tarif Harian</label>
                                <div class="mb-1">
                                    <input type="number" id="tarif" name="tarif" class="form-control"
                                    placeholder="Masukan Tarif per Hari" value="{{old("tarif")}}" aria-label="Tarif"
                                    aria-describedby="tarif-addon">
                                    @error('tarif')
                                    <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-dark w-100 mt-4 mb-2">Tambah</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {{-- </x-guest-layout> --}}
    </main>
</x-app-layout>
