<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
            <div class="row">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">List Mobil</h6>
                                    <p class="text-sm">Data Rental Mobil</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                                <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead class="bg-gray-100">
                                        {{-- @foreach ($car as $car) --}}
                                        <tr>
                                            <th class="text-secondary text-m font-weight-bold opacity-7">Merek Mobil
                                            </th>
                                            <th class="text-secondary text-m font-weight-bold opacity-7 ps-2">
                                                Model Mobil</th>
                                            <th
                                                class="text-center text-secondary text-m font-weight-bold opacity-7">
                                                Nomor Plat </th>
                                            <th
                                                class="text-center text-secondary text-m font-weight-bold opacity-7">
                                                Tarif</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                        {{-- @endforeach --}}
                                    </thead>
                                    <tbody>
            </div>
        </div>
    </main>

</x-app-layout>
