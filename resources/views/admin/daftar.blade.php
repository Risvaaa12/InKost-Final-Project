<x-admin-layout>
    <h2 class="mb-3 text-xl font-semibold leading-tight text-gray-800">
        <!-- menampilkan variabel title yang dikirim dari controller-->
        {{ $title }}
    </h2>
    <div>
        <div class="px-6 py-12 bg-white rounded shadow sm:px-1 sm:py-1 ">
            <div>
                <div class="px-2 py-2 bg-white rounded lg:mx-4 sm:px-1 sm:py-1">
                    <div class="flex flex-col-reverse items-center justify-center lg:grid lg:grid-cols-12">
                        <div class="flex flex-row items-center p-2 lg:mx-3 lg:col-span-6 lg:block">
                            <!-- menampilkan url untuk menampilkan halaman input admin -->
                            <a href="{{ route('admin.create') }}">
                                <button
                                    class="px-4 py-1 text-sm font-semibold text-yellow-500 transition duration-300 ease-in-out border border-yellow-200 rounded hover:text-white hover:bg-yellow-400 hover:border-transparent focus:outlinenone">Tambah</button>
                            </a>
                            <a href="#">
                                <button
                                    class="px-4 py-1 ml-1 mr-1 text-sm font-semibold text-green-600 transition duration-300 ease-in-out border rounded border-green200 hover:text-white hover:bg-green-500 hover:border-transparent focus:outlinenone">Publish</button>
                            </a>
                            <a href="#">
                                <button
                                    class="px-5 py-1 text-sm font-semibold text-red-600 transition duration-300 ease-in-out border rounded border-red200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outlinenone">Delete</button>
                            </a>
                        </div>
                        <div class="flex justify-end col-span-6 p-2 lg:p-4">
                            <form action="{{ route('admin.index') }}" method="GET">
                                <div class="flex flex-row items-center">
                                    <div>
                                        <!-- memberikan filter berupa comunity-->
                                        <select id="admin" name="package_id"
                                            class="block w-full py-2 transition duration-300 ease-in-out bg-white border border-gray-300 rounded-l-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">All</option>
                                            <!-- menampilkan list comunity-->
                                            @foreach ($comunities as $key => $item)
                                                <option value="{{ $item->comunity_id }}"
                                                    {{ isset($_GET['package_id']) && $_GET['package_id'] == $item->comunity_id? 'selected' : '' }}>
                                                    {{ $item->comunity_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="text" name="s" value="{{ (isset($_GET['s'])) ? $_GET['s'] : '' }}"
                                            class="px-4 py-2 transition duration-300 ease-in-out border-gray-300 rounded-r-lg focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <button class="ml-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out text-primary hover:text-secondary icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="10" cy="10" r="7"></circle>
                                                <line x1="21" y1="21" x2="15" y2="15"></line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2 align-middle sm:px-4 lg:px-4">
                <div class="overflow-x-visible border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-gray500">
                                    Nama Paket
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-gray500">
                                    Owner
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-gray500">
                                    Harga
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-gray500">
                                    Diskon
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-gray500">
                                    Deskripsi
                                </th>
                                <th scope="col"
                                    class="px-12 py-3 text-xs font-medium tracking-wider text-right uppercase text-gray500">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($package as $key=>$item) 
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center"><input type="checkbox" name=""
                                                id="">
                                            <div class="flex-shrink-0 w-10 h-10 ml-5">
                                                <img class="w-10 h-10 rounded-full"  src="{{ asset($item->feature_img) }}" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <!-- Menampilkan elemen nama dari object item -->
                                                    {{ $item->package_name}}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    Alamat : {{$item->location}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">                          
                                        <div class="text-sm text-gray-900">
                                            {{$item->comunity->comunity_name}}</a>
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            Kontak : {{$item->comunity->contact}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Rp. {{ $item->package_rate}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Rp. {{ $item->package_disc}}</div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $item->package_desc }}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                        <form action="{{ route('admin.destroy',$item->package_id) }}" method="POST">
                                            <!-- Form lengkap dengan token csrf untuk method(DELETE)-->
                                            @csrf
                                            @method('DELETE')
                                            <!-- link untuk edit-->
                                            <a href="{{ route('admin.edit',$item->package_id) }}"
                                                class="px-2 py-1 border text-indigo600 hover:text-indigo-900">Edit</a>
                                            <!-- button action untuk delete-->
                                            <button class="px-2 py-1 text-red-600 border border-red hover:text-red-900"
                                                onclick="return confirm('Yakin Mau Hapus?')" type="submit">Del</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- PAGINATION -->
                <!-- menampilkan pagination lengkap dengan parameter pencarian-->
                <!-- oleh karena itu pagination dilengkapi dengan request query-->
                <!-- Memberikan kondisi berdasarkan path url -->
                <?php if (Request::path()=='admin') {?>
                    <div class="m-4"> {{ $package->appends(request()->query())->links() }} </div>
                <?php } ?>
                <!-- END PAGINATION -->
            </div>
        </div>
    </div>
    
    
</x-admin-layout>