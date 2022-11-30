<x-guest-layout>

    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>

    <script>
        const intro = introJs();

        intro.setOptions({
            steps: [
                {
                    element:'#introduction',
                    intro: "Bienvenido a la página de registro de usuarios. En esta página podrás registrarte para poder acceder a la aplicación."
                },
                {
                    element:'#name',
                    intro: "En este campo deberás introducir tu nombre."
                },
                {
                    element:'#email',
                    intro: "En este campo deberás ingresar tu correo electrónico."
                },
                {
                    element:'#password',
                    intro: "En este campo deberás ingresar tu contraseña."
                },
                {
                    element:'#password_confirmation',
                    intro: "En este campo deberás ingresar nuevamente tu contraseña."
                },
                // {
                //     element:'#terms',
                //     intro: "En este campo deberás aceptar los términos y condiciones de uso de la aplicación."
                // },
                {
                    element:'.ml-4',
                    intro: "Al finalizar el registro, deberás presionar el botón de registrar para poder acceder a la aplicación."
                },
                {
                    element:'.justify-end',
                    intro: "Si ya tienes una cuenta, deberás presionar el botón de iniciar sesión para poder acceder a la aplicación."
                }
            ]
        });
        intro().start();
    </script>
</x-guest-layout>
