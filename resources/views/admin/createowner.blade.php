<x-admin-layout>
    <h2 class="mb-3 text-xl font-semibold leading-tight text-gray-800 lg:mx-4">
        <!-- menampilkan variabel title yang dikirim dari controller-->
        {{ $title }}
    </h2>
    <div>
        <div class="px-6 py-4 bg-white rounded shadow lg:mx-4 sm:px-1 sm:py-1 ">
            <form action="{{(isset($comunities))?route('admin.update', $comunities->comunity_id):route('admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($comunities))
                    @method('PUT')
                @endif
                <div class="sm:overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Nama Owner</label>
                                <div class="flex mt-1 rounded-md shadow-sm">
                                    <input type="text" name="contact" value="{{(isset($packages))?$packages->comunity_name:old('comunity_name') }}"
                                        class="@error('comunity_name') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Nama Komunitas Wisata">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('comunity_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">Kontak</label>
                                <div class="flex mt-1 rounded-md shadow-sm">
                                    <input type="text" name="contact" value="{{(isset($packages))?$packages->contact:old('contact') }}"
                                        class="@error('contact') @enderror block w-full flex-1 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Nama Komunitas Wisata">
                                </div>
                                <div class="text-xs text-red-500">
                                    @error('contact')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</x-admin-layout>