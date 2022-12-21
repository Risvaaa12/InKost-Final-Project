<x-admin-layout>
    <h2 class="mb-3 text-xl font-semibold leading-tight text-gray-800 lg:mx-4">
        <!-- menampilkan variabel title yang dikirim dari controller-->
        {{ $title }}
    </h2>
    <div>
        <div class="px-6 py-4 bg-white rounded shadow lg:mx-4 sm:px-1 sm:py-1 ">
            <form action="{{(isset($package))?route('admin.update', $package->package_id):route('admin.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($package))
                    @method('PUT')
                @endif
                <div class="sm:overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-4 sm:col-span-2">
                                <label for="comunities" class="block text-sm font-medium text-gray-700">Owner :</label>
                                <div class="flex flex-row items-center justify-center">
                                    <select name="comunity_id" value="{{(isset($package))?$package->comunity_name:old('comunity_name') }}"
                                        class="@error('package_name') @enderror block w-full py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-300 ease-in-out">
                                        <option>Pilih Owner</option>
                                        @foreach ($comunities as $key => $item)
                                            <option id="namaOwner" value="{{ $item->comunity_id }}">{{ $item->comunity_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="block text-xs text-red-500">
                                    @error('package_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Nama Kost :</label>
                                <div class="flex mt-1 rounded-md shadow-sm">
                                    <input type="text" name="package_name" value="{{(isset($package))?$package->package_name:old('package_name')}}"
                                        class="@error('package_name') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Nama Kost">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('package_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Alamat :</label>
                                <div class="flex mt-1 rounded-md shadow-sm">
                                    <input type="text" name="location" value="{{(isset($package))?$package->location:old('location') }}"
                                        class="@error('location_name') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Alamat Kost">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('location')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Harga Kost :</label>
                                <div class="flex mt-1 rounded-md shadow-sm">
                                    <input type="text" name="package_rate" value="{{(isset($package))?$package->package_rate:old('package_rate') }}"
                                        class="@error('package_rate') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Harga Kost">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('package_rate')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Diskon :</label>
                                <div class="flex mt-1 rounded-md shadow-sm">
                                    <input type="text" name="package_disc" value="{{(isset($package))?$package->package_disc:old('package_disc')}}"
                                        class="@error('package_disc') @enderror flex-1 block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Diskon Opsional">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('package_disc')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">Deskripsi :</label>
                            <div class="mt-1">
                                <textarea name="package_desc" rows="3"
                                    class="@error('package_desc') @enderror mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="Deskripsi Kost dan Fasilitas">{{(isset($package))?$package->package_desc:old('package_desc')}}</textarea>
                            </div>
                            <div class="text-xs text-red-500">
                                @error('package_desc')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Photo :</label>
                            <div
                                class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    @if (isset($package) && $package->feature_img!='')
                                    <img src="{{ asset($package->feature_img) }}" width="320" class="mx-auto text-gray-400 h-100 w-100" alt=""/>
                                    @else
                                        <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    @endif
                                    
                                    <div class="flex justify-center text-sm text-gray-600">
                                        <label for="feature_img"
                                            class="@error('feature_img') border-red-500 @enderror relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <span>Upload a file</span>
                                            <input id="feature_img" name="feature_img" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG or JPG up to 10MB</p>
                                    <div class="text-xs text-red-500">
                                        @error('feature_img')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-yellow-400 border border-transparent rounded-md shadow-sm hover:bg-teal-400">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'package_desc' );
    </script>
</x-admin-layout>