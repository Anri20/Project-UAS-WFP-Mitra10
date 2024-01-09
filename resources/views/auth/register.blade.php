<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: {
                            "50": "#eff6ff",
                            "100": "#dbeafe",
                            "200": "#bfdbfe",
                            "300": "#93c5fd",
                            "400": "#60a5fa",
                            "500": "#3b82f6",
                            "600": "#2563eb",
                            "700": "#1d4ed8",
                            "800": "#1e40af",
                            "900": "#1e3a8a",
                            "950": "#172554"
                        }
                    }
                },
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
</head>

<body>
    <section class="bg-gray-50">
        <div class="py-8">
            <a href="#" class="flex items-center justify-center mb-6 text-2xl font-semibold text-gray-900">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg"
                    alt="logo">
                Flowbite
            </a>
            <div class="w-full mx-auto bg-white rounded-lg shadow md:mt-0 sm:max-w-2xl xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Create an account
                    </h1>
                    <form method="post" action="{{ route('register.store') }}" class="space-y-4 md:space-y-6">
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
                                    placeholder="Enter your first name" value="{{ old('first_name') }}">
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
                                    placeholder="Enter your last name" value="{{ old('last_name') }}">
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
                                    placeholder="Enter your email address" value="{{ old('email') }}">
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
                                    placeholder="Enter your WhatsApp number" value="{{ old('whatsapp_number') }}">
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
                                    style="line-height: 1.25rem" value="{{ old('date_of_birth') }}">
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
                                    placeholder="Enter your address">{{ old('address') }}</textarea>
                                @error('address')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300"
                                    required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-500">I accept the
                                    <a class="font-medium text-primary-600 hover:underline" href="#">Terms and
                                        Conditions</a></label>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Create an account
                        </button>
                        <p class="text-sm font-light text-gray-500">
                            Already have an account?
                            <a href="{{ route('auth.create') }}"
                                class="font-medium text-primary-600 hover:underline">
                                Login here
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
