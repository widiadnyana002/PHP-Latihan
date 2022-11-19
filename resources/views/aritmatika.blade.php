<x-admin-layout>
    <div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex items-baseline justify-between border-b border-gray200 pt-2 pb-6">
                        <h1 class="text-4xl font-bold tracking-tight text-gray900">Menghitung Bonus Gaji Karyawan</h1>
                    </div>
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-10 mx-auto">
                            <div class="flex flex-wrap -m-4">
                                <div class="p-4 md:w-1/3">

                                    <form method="POST" action="/hasil">
                                        @csrf
                                        <div class="form-group mb-6">
                                            <label class="form-label inline-block mb-2 text-gray-700">Gaji Pokok Karyawan</label>
                                            <input 
                                            type="number" 
                                            name="gaji" 
                                            class="form-control block w-full px-3 py-1.5 
                                            text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid 
                                            border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 
                                            focus:bg-white focus:border-blue-600 focus:outline-none" 
                                            placeholder="Masukkan Gaji Pokok" 
                                            required>
                                        </div>
                                        <div class="form-group mb-6">
                                            <label class="form-label inline-block mb-2 text-gray-700">Status Pernikahan</label>
                                            <div class="relative flex w-full">
                                                <select 
                                                name="status" 
                                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 
                                                bg-white bg-clip-padding border border-solid border-gray-300 rounded transition 
                                                ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"">
                                                    <option>Pilih Status</option>
                                                    <option value="menikah">Menikah</option>
                                                    <option value="belum-menikah">Belum Menikah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-6">
                                            <label class="form-label inline-block mb-2 text-gray-700">Jumlah Anak</label>
                                            <input 
                                            type="number" 
                                            name="anak" 
                                            class="form-control block w-full px-3 py-1.5 
                                            text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid 
                                            border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 
                                            focus:bg-white focus:border-blue-600 focus:outline-none" 
                                            placeholder="Masukkan Jumlah Anak"
                                            required>
                                        </div>
                                        <div class="form-group mb-6">
                                            <label class="form-label inline-block mb-2 text-gray-700">Masa Kerja (Tahun)</label>
                                            <div class="relative flex w-full">
                                                <select 
                                                name="masa_kerja" 
                                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 
                                                rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"">
                                                    <option>--- Masa Kerja ---</option>
                                                    <option value=" kurang">< 5 Tahun</option>
                                                    <option value="lebih">5 Tahun</option>
                                                    <option value="lebih">6 Tahun</option>
                                                    <option value="lebih">7 Tahun</option>
                                                    <option value="lebih">8 Tahun</option>
                                                    <option value="lebih">9 Tahun</option>
                                                    <option value="lebih-dari">> 10 Tahun</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                @if(session('hasil'))
                                                <div>
                                                    <h1>{{session('hasil')}}</h1>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="mt-6">
                                            <button type="submit" class=" text-gray-400 font-medium 
                                            bg-indigo-500 border py-2 px-4  hover:bg-indigo-600 rounded">
                                                Cek Gaji
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
</x-admin-layout>