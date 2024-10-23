<x-guest-layout>
    <form action="{{ route('otp.validation', ['user_id' => $user->id]) }}" method="POST">
        @csrf
        <!-- Input OTP yang dihapus -->
        
        <div>
            <x-input-label for="otp" :value="__('OTP CODE')" />
            <x-text-input id="otp" class="block mt-1 w-full" type="text" name="otp_code" required autofocus />
            <x-input-error :messages="$errors->get('otp_code')" class="mt-2" />
        </div>
        <div class="flex items-center justify-center mt-4">
            <x-primary-button>
                {{ __('Validate OTP CODE') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
