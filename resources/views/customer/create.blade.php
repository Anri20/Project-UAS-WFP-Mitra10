@extends('layouts.conquer')

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            "class",
            theme: {
                fontFamily: {
                    "body": ["Inter", "ui-sans-serif", "system-ui", "-apple-system", "system-ui", "Segoe UI", "Roboto",
                        "Helvetica Neue", "Arial", "Noto Sans", "sans-serif", "Apple Color Emoji", "Segoe UI Emoji",
                        "Segoe UI Symbol", "Noto Color Emoji"
                    ],
                    "sans": ["Inter", "ui-sans-serif", "system-ui", "-apple-system", "system-ui", "Segoe UI", "Roboto",
                        "Helvetica Neue", "Arial", "Noto Sans", "sans-serif", "Apple Color Emoji", "Segoe UI Emoji",
                        "Segoe UI Symbol", "Noto Color Emoji"
                    ]
                }
            }
        }
    </script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
@endsection

@section('content')
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900">Add a new customer</h2>
            @if (session('status'))
                @php $status = session('status') @endphp
                @if ($status['success'])
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                        {{ $status['message'] }}
                    </div>
                @elseif (!$status['success'])
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                        {{ $status['message'] }}
                    </div>
                @endif
            @endisset
            <form method="post" action="{{ route('customers.store') }}">
                @csrf
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
                            placeholder="First name" required value="{{ old('first_name') }}">
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
                            placeholder="Last name" required value="{{ old('last_name') }}">
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
                            placeholder="user@example.com" required value="{{ old('email') }}">
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
                            placeholder="+62 8123456789" required value="{{ old('whatsapp_number') }}">
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
                            placeholder="••••••••••••" required>
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
                            placeholder="••••••••••••" required>
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
                            required style="line-height: 1.25rem" value="{{ old('date_of_birth') }}">
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
                            @error('sex') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror"
                            required>
                            <option value="" disabled {{ old('sex') ? '' : 'selected' }}>Select sex</option>
                            <option value="L" {{ old('sex') == 'L' ? 'selected' : '' }}>Male</option>
                            <option value="P" {{ old('sex') == 'P' ? 'selected' : '' }}>Female</option>
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
                            placeholder="Customer address" required>{{ old('address') }}</textarea>
                        @error('address')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-800">
                    Add customer
                </button>
            </form>
    </div>
</section>
@endsection
