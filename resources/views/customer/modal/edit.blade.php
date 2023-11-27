<form method="post" action="{{ route('customers.update', $customer->idcustomers) }}"
    class="relative bg-white rounded-lg shadow">
    @csrf
    @method('put')
    <!-- Modal header -->
    <div class="flex items-start justify-between p-4 border-b rounded-t">
        <h3 class="text-xl font-semibold text-gray-900">
            Update customer data
        </h3>
        <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
            onclick="editCustomerModal.hide()">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
        </button>
    </div>
    <!-- Modal body -->
    <div class="p-6 space-y-6">
        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            <div class="w-full">
                <label for="first-name"
                    class="block mb-2 text-sm font-medium text-gray-900
                    @error('first_name') text-red-700 @enderror">
                    First Name
                </label>
                <input type="text" name="first_name" id="first-name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5
                    @error('first_name') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror"
                    placeholder="{{ $customer->nama_depan }}" value="{{ old('first_name') }}">
                @error('first_name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full">
                <label for="last-name"
                    class="block mb-2 text-sm font-medium text-gray-900
                    @error('last_name') text-red-700 @enderror">
                    Last Name
                </label>
                <input type="text" name="last_name" id="last-name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5
                    @error('last_name') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror"
                    placeholder="{{ $customer->nama_belakang }}" value="{{ old('last_name') }}">
                @error('last_name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full">
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900
                    @error('email') text-red-700 @enderror">
                    Email Address
                </label>
                <input type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5
                    @error('email') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror"
                    placeholder="{{ $customer->email }}" value="{{ old('email') }}">
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full">
                <label for="whatsapp-number"
                    class="block mb-2 text-sm font-medium text-gray-900
                  @error('whatsapp_number') text-red-700 @enderror">
                    WhatsApp Number
                </label>
                <input type="tel" name="whatsapp_number" id="whatsapp-number"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5
                    @error('whatsapp_number') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror"
                    placeholder="{{ $customer->nomor_whatsapp }}" value="{{ old('whatsapp_number') }}">
                @error('whatsapp_number')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full">
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-900
                  @error('password') text-red-700 @enderror">
                    Password
                </label>
                <input type="password" name="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5
                    @error('password') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror"
                    placeholder="••••••••••••">
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full">
                <label for="password-confirmation"
                    class="block mb-2 text-sm font-medium text-gray-900
                  @error('password_confirmation') text-red-700 @enderror">
                    Password Confirmation
                </label>
                <input type="password" name="password_confirmation" id="password-confirmation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5
                    @error('password_confirmation') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror"
                    placeholder="••••••••••••">
                @error('password_confirmation')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full">
                <label for="date-of-birth"
                    class="block mb-2 text-sm font-medium text-gray-900
                  @error('date_of_birth') text-red-700 @enderror">
                    Date of Birth
                </label>
                <input type="date" name="date_of_birth" id="date-of-birth"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5
                    @error('date_of_birth') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror"
                    style="line-height: 1.25rem" value="{{ old('date_of_birth') ?? $customer->tanggal_lahir }}">
                @error('date_of_birth')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="sex"
                    class="block mb-2 text-sm font-medium text-gray-900
                  @error('sex') text-red-700 @enderror">
                    Sex
                </label>
                <select name="sex" id="sex"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                    @error('sex') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror">
                    <option value="L" {{ (old('sex') ?? $customer->jenis_kelamin) == 'L' ? 'selected' : '' }}>Male
                    </option>
                    <option value="P" {{ (old('sex') ?? $customer->jenis_kelamin) == 'P' ? 'selected' : '' }}>
                        Female
                    </option>
                </select>
                @error('sex')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-2">
                <label for="address"
                    class="block mb-2 text-sm font-medium text-gray-900
                  @error('address') text-red-700 @enderror">
                    Address
                </label>
                <textarea name="address" id="address" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500
                    @error('address') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror"
                    placeholder="{{ $customer->alamat }}">{{ old('address') }}</textarea>
                @error('address')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    <!-- Modal footer -->
    <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b">
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save
            changes</button>
    </div>
</form>
